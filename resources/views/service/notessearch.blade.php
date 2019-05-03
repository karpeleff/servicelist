@extends('service.layouts.app')


@section('content')


<form action="/searchnotes" method="post"  >
                     
                     {{csrf_field()}}  
            
       <div class="input-group">
      <input type="text" class="form-control"  name="search"  placeholder="Поиск по запискам...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="sybmit">Go!</button>
      </span>
    </div><!-- /input-group -->
    
     </form>

@endsection