@extends('service.layouts.app')


@section('content')
    
      @if (count($data) === 0)
 <h3>Нет новых заказов </h3> 
 <h4><a href="{{ URL::asset('/add') }}">Добавить ?</a></h4>
     @endif
     
    
      @foreach ($data as $row)
      
   	<div class="panel panel-info ">
		
		 <div class="panel-heading">
    <h3 class="panel-title">Заказ  № {{$row->id}} в работе  , заявка от : {{substr($row->created_at,0,7)}} </h3>
    
  </div>
  <div class="panel-body">
  
  <ul class="list-group">
      <li class="list-group-item">Ремонт: {{$row->type}}</li>
  <li class="list-group-item">TEL: {{$row->tel}} </li>
  <li class="list-group-item">GADGET: {{$row->device}}</li>
      <li class="list-group-item">MODEL: {{$row->model}}</li>
 <li class="list-group-item">s/n imei : {{$row->imei}}</li>
  <li class="list-group-item">TROUBLE: {{$row->trouble}}</li>
  <li class="list-group-item">PRICE: {{$row->price}}</li>
  <li class="list-group-item">DESC: {{$row->desc}}</li>
</ul>

<form action="/towork" method="post" >
{{csrf_field()}}
<input  type="hidden"  name="id" value="{{$row->id}}" />
 <button type="sybmit" class="btn btn-success">продолжить ремонт</button>
  
</form>
   
  </div>
  
  </div>
      
     @endforeach
		
@endsection	
  	


   
  




