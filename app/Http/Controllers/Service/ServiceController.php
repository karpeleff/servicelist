<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Oprs\Models\Service\Service;

class ServiceController extends Controller
{
    
     protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    
    
    
    
   public function index()
   {
     return view('service.index');
  
   }
   
   
    public function search()
   {
     return view('service.search');
  
   }
    public function add()
   {
     return view('service.add');
  
   }
   
}
