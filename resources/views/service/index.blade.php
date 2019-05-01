@extends('service.layouts.app')


@section('content')
    
      @if (count($data) === 0)
 <h3>Нет записей</h3> 
 <h3><a href="{{ URL::asset('/add') }}">Добавить ?</a></h3>
     @endif
     
    
      @foreach ($data as $row)
      
   	<div class="panel panel-danger">
		
		 <div class="panel-heading">
    <h3 class="panel-title">Task № {{$row->id}} STATUS NEW create:{{$row->created_at}} </h3>
    
  </div>
  <div class="panel-body">
  
  <ul class="list-group">
  <li class="list-group-item">TEL: {{$row->tel}} </li>
  <li class="list-group-item">GADGET: {{$row->device}}</li>
  <li class="list-group-item">TROUBLE: {{$row->trouble}}</li>
  <li class="list-group-item">PRICE: {{$row->price}}</li>
  <li class="list-group-item">DESC: {{$row->desc}}</li>
</ul>

<form action="/towork" method="post" >
{{csrf_field()}}
<input  type="hidden"  name="id" value="{{$row->id}}" />
 <button type="sybmit" class="btn btn-success">  в работу</button>
  
</form>
   
  </div>
  
  </div>
      
     @endforeach
		
@endsection	
  	


   
  




