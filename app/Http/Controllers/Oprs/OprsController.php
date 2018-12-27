<?php

namespace App\Http\Controllers\Oprs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Oprs\Energy;
use App\Models\Oprs\Benz;
use App\Models\Oprs\Dizt;
use App\Models\Oprs\Dizel;

class OprsController extends Controller
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function index()
    {
 
         $data = Dizel::where('start', 'like', '%12.2018%')->orWhere('start', 'like', '%11.2018%')->get();
         
         echo dd($data);
 
 
        //return view('oprs.index');$users = DB::table('users')->where('name', 'like', 'T%')
                   // ->->orWhere('name', 'John')
                   // ->get();
                  //  

        // $this->writeoffgsm('dizt',10);

    }


    public function energy()
    {

        $last = Energy::orderby('id', 'desc')->first();

        $mons = $this->mydate(2);


        if ($this->request->counter == null)
        {
            return view('oprs.energy', array('data' => $last, 'mons' => $mons));
        }

        $record = new Energy;

        $record->counter = $this->request->counter;

        $record->save();


        return view('oprs.energy', array('data' => $last, 'mons' => $mons));


    }

    public function mydate($n)
    {
        $arr = ['январь', 'февраль', 'март', 'апрель', 'май', 'июнь', 'июль', 'август',
            'сентябрь', 'октябрь', 'ноябрь', 'декабрь'];

        $month = date('n') - $n;
        return $arr[$month];


    }


    public function addgsm()
    {

        // $benz  =   Benz::latest()->first();
        // $dizt  =   Dizt::latest()->first();


        // $record = new Benz;
        // $record->balance = 0;
        // $record->save();


        //  $record = new Dizt;
        // $record->balance = 0;
        // $record->save();


        $benz = Benz::latest()->first();
        $dizt = Dizt::latest()->first();

        // echo $benz->receipt;
        // $this->getbalance();

        if ($this->request->counter == null)
        {
            return view('oprs.addgsm', array('benz' => $benz, 'dizt' => $dizt));
        }

        // echo  $this->request->counter;

        // echo  $this->request->fuel;

        if ($this->request->fuel == 'benz')
        {
            $record = new Benz;
            $record->receipt = $this->request->counter;
            $record->balance = $benz->balance + $this->request->counter;
            $record->save();

        } else
        {
            $record = new Dizt;
            $record->receipt = $this->request->counter;
            $record->balance = $dizt->balance + $this->request->counter;
            $record->save();
        }


        $benz = Benz::latest()->first();
        $dizt = Dizt::latest()->first();

        return view('oprs.addgsm', array('benz' => $benz, 'dizt' => $dizt));
    }

    public function writeoffgsm($type, $vol)
    {


        if ($type == 'dizt')
        {
            $dizt = Dizt::latest()->first();
            $record = new Dizt;
            $record->consumption = $vol;
            $record->balance = $dizt->balance - $vol;
            $record->save();

        } else
        {

            $benz = Benz::latest()->first();
            $record = new Benz;
            $record->consumption = $vol;
            $record->balance = $benz->balance - $vol;
            $record->save();

        }

    }


    public function dizelwork()
    {

        if ($this->request->start == null)
        {
            return view('oprs.dizelwork');
        }

        $diztype = $this->request->input('diztype');
        $starttype = $this->request->input('starttype');
        $start = $this->request->input('start');
        $stop = $this->request->input('stop');


        $rec = new Dizel;
        $rec->diztype = $diztype;
        $rec->starttype = $starttype;
        $rec->start = strtotime($start);
        $rec->stop = strtotime($stop);
        $rec->save();


        if ($diztype == 'ADR16.5')
        {
            $norma = 0.045;
            
        } else
        {
            $norma = 0.03166;
        }


        $narabotka = (strtotime($stop) - strtotime($start)) / 60; //наработка минут

           $vol = $narabotka * $norma;
         
        // echo '<br>';

          $vol =   round($vol, 1);

        $this->writeoffgsm('dizt', $vol);


       return view('oprs.dizelwork');


    }


  public  function   getperiod()
  {
    
    if ($this->request->begin == null)
        {
            return view('oprs.periodselect');
        }
        
        $begin = $this->request->begin;
        
        $end   = $this->request->end;
    
    $data =  Dizel::whereBetween('start', [$begin,$end])->get();
    
        return view('oprs.periodselect', array('data' => $data));
    
    
    
    
    
  }




}
