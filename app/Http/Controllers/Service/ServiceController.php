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
    
     
      $data = Service::paginate(5);

       return view('service.index', array('data' => $data));
     
     
  
   }
   
   
    public function search()
   {
    
    if ($this->request->search == null)
        {
           return view('service.search');
        }
    
    
    $search  = $this->request->search;
    
    $data   =  Service::where('device', 'like','%' . $search . '%')->get();
    
  
       return view('service.result', array('data' => $data));
    
    
    
    
    
    
  
   }
    public function add()
   {
    
    if ($this->request->tel == null)
        {
           return view('service.add');
        }
    
    
    
     $record = new Service;

        $record->tel     = $this->request->tel ;
        
        $record->device  = $this->request->device;
        
        $record->trouble = $this->request->trouble;
        
        $record->price   = $this->request->price;
        
        $record->desc    = $this->request->desc;
        
        $record->status  =  'work';
        
        $record->save();
    
    
     return view('service.add');
  
   }
   
}
