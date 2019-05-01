@extends('service.layouts.app')


@section('content')


<form action="/searchcomponent  " method="get"  >
                     
                     {{csrf_field()}}  
            
       <div class="input-group">
      <input type="text" class="form-control"  name="component"  placeholder="Поиск  элемента...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="sybmit">Go!</button>
      </span>
    </div><!-- /input-group -->
    
     </form>

@endsection