<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service\Component;
use Validator;

class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Request $request)

    {
        $this->request = $request;
       // $this->middleware('auth');
    }






    public function index()
    {
       return  view('service.addcomponent');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $validator = Validator::make($this->request->all(), [
            'item' => 'required',
            'storage' => 'required',
            'amount' =>  'numeric | required'
        ]);


        if ($validator->fails()) {
            return redirect('storecomponent')
                ->withErrors($validator);
              // ->withInput();
        }

        $item = Component::where('item', $this->request->item)->first();//проверяем наличие в базe


        if ($item == null) {
            $record = new Component;
            $record->type = $this->request->type;
            $record->item = $this->request->item;
            $record->datasheet = $this->request->datasheet;
            $record->storage = $this->request->storage;
            $record->count = $this->request->count;
            $record->save();


        }
        else{

            $count = $item->count + $this->request->count;
            $record = Component::find($item->id);
            $record->count = $count;
            $record->save();

        }

        return $this->index();








       // $item = Component::where('item', $this->request->item)->first();//проверяем наличие в базе






    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function search()
    {
        if ($this->request->component == null)
        {
            return  view('service.searchcomponent');
        }

        $search = $this->request->component;

        $data = Component::where('item', 'like', '%' . $search . '%')->get();

        return view('service.componentresult', array('data' => $data));




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
