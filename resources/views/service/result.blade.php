@extends('service.layouts.app')


@section('content')

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
       
       
        
    
      @foreach ($data as $row)
      
   	<div class="panel panel-danger">
		
		 <div class="panel-heading">
    <h3 class="panel-title">Task № {{$row->id}} ON WORK</h3>
  </div>
  <div class="panel-body">
  
  <ul class="list-group">
  <li class="list-group-item">TEL: {{$row->tel}} </li>
  <li class="list-group-item">GADGET: {{$row->device}}</li>
  <li class="list-group-item">TROUBLE: {{$row->trouble}}</li>
  <li class="list-group-item">PRICE: {{$row->price}}</li>
  <li class="list-group-item">DESC: {{$row->desc}}</li>
</ul>
   <button type="button" class="btn btn-success">Done!</button>
  </div>
  
  </div>
      
     @endforeach
		
	
  			
    </div>
	  </div>
	    </div>
           </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
@endsection