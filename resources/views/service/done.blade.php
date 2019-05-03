@extends('service.layouts.app')


@section('content')


      
      @if (count($data) === 0)
 <h3>нет готовых заказов</h3> 
@endif
     
    
      @foreach ($data as $row)
     
   	<div class="panel panel-success">
		
		 <div class="panel-heading">
    <h3 class="panel-title">Task № {{$row->id}} DONE!</h3>
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

<form   method="post" action="/out" >
  {{csrf_field()}}
<input  type="hidden"  name="id" value="{{$row->id}}" />
  <br>
<button type="sybmit" class="btn btn-success">Выдать</button>
  </div>
  
</div>


  </form>     
     @endforeach
		
	

@endsection