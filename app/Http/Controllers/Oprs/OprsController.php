<?php

namespace App\Http\Controllers\Oprs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Oprs\Energy;

class OprsController extends Controller
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    
    
    public  function index()
    {
    
        return view('oprs.index'); 
    }
    
    
      public  function energy()
    {
        
        $last = Energy::orderby('id', 'desc')->first();
        
        $mons = $this->mydate(2);
                
       
       if ($this->request->counter == null)
        {                       
           return view('oprs.energy',array('data' =>$last,'mons'=>$mons));           
        }  
        
        $record = new Energy;

        $record->counter = $this->request->counter;

        $record->save();
        
      
        return view('oprs.energy',array('data' =>$last,'mons'=>$mons));
         
        
    }
    
    public  function mydate($n)
    {
               $arr = [
                       'январь',
                       'февраль',
                       'март',
                       'апрель',
                       'май',
                       'июнь',
                       'июль',
                       'август',
                       'сентябрь',
                       'октябрь',
                       'ноябрь',
                       'декабрь'
                     ];
                     
                     $month = date('n')- $n;
                return  $arr[$month];
                     
        
    }
    
    
    
    
}
