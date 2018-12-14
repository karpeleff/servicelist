@extends('oprs.layouts.app')


@section('content')

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
      
    
      
     
      <form class="form-horizontal" method="post" id="form"  action="/addgsm" >
   
          {{csrf_field()}}
               
     <div class="form-group">
		<label for="phone" class="col-sm-2 control-label">Поcтупление </label>
		   <div class="col-sm-6">
			<input type="text" class="form-control" id="" name="counter"  >
			<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <br />
            
         <!-- Group of default radios - option 1 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="" name="dizt"   checked>
  <label class="custom-control-label" for="defaultGroupExample1">Дизельное топливо</label>
</div>

<!-- Group of default radios - option 2 -->
<div class="custom-control custom-radio">
  <input type="radio" class="custom-control-input" id="" name="benz" >
  <label class="custom-control-label" for="defaultGroupExample2">Бензин</label>
</div>
	  	  </div>
	  </div>

      <div class="form-group">
		<div class="col-sm-offset-2 col-sm-6">
        
			<button type="submit" id="submit" class="btn btn-primary">Добавить</button>
		
		</div>
	</div>
                     
 </form>
 
  <br />
 
<label for="phone" class="col-sm-2 control-label">Остаток</label>      
<label for="phone" class="col-sm-2 control-label">Дизтопливо : 100 л   </label>
<label for="phone" class="col-sm-2 control-label">Бензин : 43л  </label> 	 			
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