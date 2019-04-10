<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Service\Note;
class NotesController extends Controller
{
    
     protected $request;
     
     public function __construct(Request $request)
     
    {
        $this->request = $request;
        $this->middleware('auth');
    }
    
    
    public  function   add()
    {
        if ($this->request->note == null)              
        {
            return view('service.addnote');
        }
        
        
          $record = new  Note ;

          $record->note = $this->request->note;

          $record->save();

          return view('service.addnote');        
        
    }
    
    
  public  function   all()
  {
      
      $data = Note::paginate(3);
      
      
     return view('service.allnotes', array('data' => $data));
  }  
    
    
    public   function search()
    {
        
         if ($this->request->search == null)
        {
            return view('service.notessearch');
        }


        $search = $this->request->search;

        $data = Note::where('note', 'like', '%' . $search . '%')->get();


        return view('service.notesresult', array('data' => $data));


        
        
    }
    
    
    public function dellnote()
    {

       // dd($this->request);
        $id =  $this->request->id;

        $action = Note::find($id);

        $action->delete();

       // $this->all();

        return redirect('allnotes');
    }
    
    
    
    
    
    
    
}
