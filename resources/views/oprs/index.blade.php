@extends('oprs.layouts.app')


@section('content')

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
     
      <form class="form-horizontal" method="post" id="form"  action="/energy" >
   
          {{csrf_field()}}
               
     <div class="form-group">
		<label for="phone" class="col-sm-2 control-label">Показания на конец месяца </label>
		   <div class="col-sm-6">
			<input type="text" class="form-control" id="phone" name="counter"  placeholder="показания счетчика в формате ХХХХХХ" pattern="\d{6}" required>
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
	  	  </div>
	  </div>

      <div class="form-group">
		<div class="col-sm-offset-2 col-sm-6">
			<button type="submit" id="submit" class="btn btn-primary">Записать показания</button>
		
		</div>
	</div>
                     
 </form>
    	<script>
$(function(){
	$('#form').validator({
		feedback: {
			success: 'glyphicon-ok',
			error: 'glyphicon-remove'
		}
	});
});
	</script>  
	
  			
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