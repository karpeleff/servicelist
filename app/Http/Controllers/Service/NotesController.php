<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        
    }
    
    
    
    
    
}
