<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
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
