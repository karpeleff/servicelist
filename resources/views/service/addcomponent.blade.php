@extends('service.layouts.app')


@section('content')

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
       
	<br>

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

<br>	
<button type="submit" class="btn btn-success">Add Component</button>
	
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

