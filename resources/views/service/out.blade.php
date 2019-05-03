@extends('service.layouts.app')


@section('content')


      
      @if (count($data) === 0)
 <h3>нет записей</h3> 
@endif
     
    
      @foreach ($data as $row)
     
   	<div class="panel panel-success">
		
		 <div class="panel-heading">
    <h3 class="panel-title">Заказ  № {{$row->id}} выдан клиенту</h3>
  </div>
  <div class="panel-body">
  
  <ul class="list-group">
  <li class="list-group-item">TEL: {{$row->tel}} </li>
  <li class="list-group-item">GADGET: {{$row->device}}</li>
   <li class="list-group-item">GADGET: {{$row->model}}</li>
  <li class="list-group-item">TROUBLE: {{$row->trouble}}</li>
  <li class="list-group-item">s/n imei: {{$row->imei}}</li>
  <li class="list-group-item">PRICE: {{$row->price}} руб</li>
  <li class="list-group-item">DESC: {{$row->desc}}</li>
</ul>

</div>

</div>
       
     @endforeach
		
	

@endsection