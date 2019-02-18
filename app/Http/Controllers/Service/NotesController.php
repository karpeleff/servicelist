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
    
    
}
