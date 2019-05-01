@extends('service.layouts.app')


@section('content')

 

          <div class="well well-sm">Прием заявки от клиента</div>
    
     <form action="/add" method="post"  >
                     
                     {{csrf_field()}}

         <div class="form-group">
             <label for="sel1">Тип ремонта</label>
             <select class="form-control" id="sel1" name="type">
                 <option  value="pay">платный</option>
                 <option  value="warranty"   >гарантийный</option>
             </select>
         </div>
    
<div class="input-group">
  <span class="input-group-addon" id="basic-addon3">TEL:</span>
  <input type="text" class="form-control"  name="tel"  >
</div>

<br>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon3">DEVICE:</span>
  <input type="text" class="form-control"  name="device" >
</div>
         <br>
         <div class="input-group">
             <span class="input-group-addon" id="basic-addon3">MODEL:</span>
             <input type="text" class="form-control"  name="model" >
         </div>

         <br>
         <div class="input-group">
             <span class="input-group-addon" id="basic-addon3">S/N ; imei</span>
             <input type="text" class="form-control" name="desc"  >
         </div>

<br>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon3">TROUBLE:</span>
  <input type="text" class="form-control"  name="trouble"  >
</div>

<br>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon3">PRICE:(примерно)</span>
  <input type="text" class="form-control" name="price"  >
</div>




         <br>
         <div class="input-group">
             <label for="sel1">Комментарии приемщика</label>

             <textarea class="form-control" rows="4" id="comment"  name="desc" ></textarea>
         </div>



<br>	
<button type="submit" class="btn btn-success">ADD TO WORK!</button>	
	
   </form>	
	
	

@endsection

