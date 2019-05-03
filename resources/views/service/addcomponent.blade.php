@extends('service.layouts.app')


@section('content')

 
          <div class="well well-sm">Добавляем компонент на склад</div>

          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          <form action="/storecomponent"    method="post"  >
                     
                     {{csrf_field()}}

         <div class="input-group">
             <span class="input-group-addon" id="basic-addon3">Type</span>
             <input type="text" class="form-control"  name="type" >
         </div>
         <br>
         <div class="input-group">
             <span class="input-group-addon" id="basic-addon3">Model</span>
             <input type="text" class="form-control"  name="item" >
         </div>
         <br>
         <div class="input-group">
             <span class="input-group-addon" id="basic-addon3">Datasheet</span>
             <input type="text" class="form-control"  name="datasheet" >
         </div>
         <br>
         <div class="input-group">
             <span class="input-group-addon" id="basic-addon3">Amount</span>
             <input type="text" class="form-control"  name="count" placeholder="count" >
         </div>
         <br>
         <div class="input-group">
             <span class="input-group-addon" id="basic-addon3">Storage</span>
             <input type="text" class="form-control"  name="storage" placeholder="box_number" >
         </div>

              <br>
              <div class="input-group">
                  <span class="input-group-addon" id="basic-addon3">Цена</span>
                  <input type="text" class="form-control"  name="price" placeholder="цена" >
              </div>



         <br>

<br>	
<button type="submit" class="btn btn-success">Add Component</button>
	
   </form>

          <br>
@endsection

