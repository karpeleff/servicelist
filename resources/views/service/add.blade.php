@extends('service.layouts.app')


@section('content')

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
       
	<br>

          <div class="well well-sm">Прием заявки от клиента</div>
    
     <form action="/add" method="post"  >
                     
                     {{csrf_field()}}
    
    
    
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
  <span class="input-group-addon" id="basic-addon3">DESC:(imei и тд)</span>
  <input type="text" class="form-control" name="desc"  >
</div>
<br>	
<button type="submit" class="btn btn-success">ADD TO WORK!</button>	
	
   </form>	
	
	
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
        </p>
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

