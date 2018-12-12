<?php

namespace App\Http\Controllers\Oprs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;



class DocsController extends Controller
{

public    function    test()
{
    
  $phpWord = new \PhpOffice\PhpWord\PhpWord();
  
  
  $section = $phpWord->addSection();
  
  
  $fontStyleName = 'myStyle';
$phpWord->addFontStyle(
    $fontStyleName,
    array('name' => 'Times New Roman', 'size' => 12, 'color' => '1B2232', 'bold' => false)
);
$section->addText(
    'Приложение № 13 к Распоряжению от 13.02.2015г. № 8-р
                     УТВЕРЖДАЮ
       Начальник Владивостокского центра ОВД Филиала 
       «Аэронавигация Дальнего Востока» ФГУП «Госкорпорация по ОрВД»
       ___________________    А.Н.Голда 
      «_____»______________2018 г.
',
    $fontStyleName
);
  
  
  
  
  
  
  
  
  $section = $phpWord->addSection();
// Adding Text element to the Section having font styled by default...
$section->addText(
    'test next. '
        . 'The important thing is not to stop questioning." '
        . '(Albert Einstein)'
);


$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('helloWorld.docx');
  

  
  
    
}



}
