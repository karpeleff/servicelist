@extends('service.layouts.app')


@section('content')

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
       
	<br>

          <div class="well well-sm">Карта девайса</div>
          <form action="/done" method="post" >

          @foreach ($data as $row)


         <div class="panel-body">

             <ul class="list-group">
                 <li class="list-group-item">TEL: {{$row->tel}} </li>
                 <li class="list-group-item">GADGET: {{$row->device}}</li>
                 <li class="list-group-item">TROUBLE: {{$row->trouble}}</li>
                 <br>
                 <div class="input-group">
                     <span class="input-group-addon" id="basic-addon3">PRICE: итог</span>
                     <input type="text" class="form-control" name="price"  value="{{$row->price}}">
                 </div>
                 <div class="input-group">
                     <span class="input-group-addon" id="basic-addon3">DESC:(imei и тд)  </span>
                     <input type="text" class="form-control" name="desc" value="{{$row->desc}}" >
                 </div>
                 <br>
                 <div class="form-group">
                     <label for="sel1">Гарантия</label>
                     <select class="form-control" id="sel1">
                         <option>1 месяц</option>
                         <option>3 месяца</option>
                         <option>6 месяцев</option>
                         <option>12 месяцев</option>
                     </select>
                 </div>


                 <label for="sel1">Использованы элементы</label>
                 <div class="input-group">
                     <input type="text" class="form-control" placeholder="Add components">
                     <span class="input-group-btn">
                 <button class="btn btn-default" type="button">Search</button>
      </span>
                 </div>


             </ul>


             @endforeach

             <form action="/towork" method="post" >
                 {{csrf_field()}}
                 <input  type="hidden"  name="id" value="{{$row->id}}" />
                 <button type="sybmit" class="btn btn-success">Done</button>

             </form>



         </div>

	
	
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

