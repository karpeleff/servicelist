@extends('service.layouts.app')


@section('content')

     <form action="/addnote" method="post"  >
                     
                     {{csrf_field()}}
<div class="form-group">
  <label for="comment">New note:</label>
  <textarea class="form-control" rows="5"   name="note" id="comment"></textarea>
</div>


<br>	
<button type="submit" class="btn btn-success">Add</button>	
	
   </form>	

@endsection

