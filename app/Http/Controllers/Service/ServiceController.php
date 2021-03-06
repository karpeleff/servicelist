<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service\Service;


class ServiceController extends Controller
{

    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function index()
    {

        //$data = Service::paginate(5);
        
        $data = Service::where('status','new')->get();

        return view('service.index', array('data' => $data));

    }

public  function  onwork()
{
    $data = Service::where('status','work')->get();

    return view('service.allwork', array('data' => $data));

}


    public  function towork()
    {
        $id = $this->request->id;

        $data = Service::where('id',$id)->get();

        $record = Service::find($id);

        $record->status = 'work';

        $record->save();

        return view('service.onwork', array('data' => $data));


    }


     public  function  out()
     {
         $id = $this->request->id;
         $record = Service::find($id);
         $record->status  = 'out';
         $record->save();

         return $this->done();

     }


    public function search()
    {

        if ($this->request->search == null)
        {
            return view('service.search');
        }


        $search = $this->request->search;

        $data = Service::where('device', 'like', '%' . $search . '%')->get();

        return view('service.result', array('data' => $data));


    }
    public function add()
    {

        if ($this->request->tel == null)
        {
            return view('service.add');
        }

        $record = new Service;

        $record->tel = $this->request->tel;

        $record->device = $this->request->device;

        $record->trouble = $this->request->trouble;

        $record->price = $this->request->price;

        $record->desc = $this->request->desc;

        $record->type = $this->request->type;

        $record->model = $this->request->model;

        $record->imei = $this->request->imei;


        $record->status = 'new';

        $record->save();

       // return view('service.add');

        return $this->index();

    }
 
    public function  update()
    {
       // dd($this->request);

        $id = $this->request->id;
        
        $record = Service::find($id);

        $record->status  = $this->request->radio ;// status

        $record->price = $this->request->price ;

        $record->desc = $this->request->desc ;//заметки


        $record->save();
      
    
    //  header("Location: http://newoprs/service");
       return $this->index();
        
    }

 public function done()
    {
        $data = Service::where('status','done')->get();

        return view('service.done', array('data' => $data));
    }

    public function allout()
    {
        $data = Service::where('status','out')->get();

        return view('service.out', array('data' => $data));
    }





}
