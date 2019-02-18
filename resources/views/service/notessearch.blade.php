@extends('service.layouts.app')


@section('content')

    <div class="container">


      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
      
    

<form action="/searchnotes" method="post"  >
                     
                     {{csrf_field()}}  
      
      
      
       <div class="input-group">
      <input type="text" class="form-control"  name="search"  placeholder="Поиск по тексту...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="sybmit">Go!</button>
      </span>
    </div><!-- /input-group -->
    
     </form>
    
		
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