@extends('service.layouts.app')


@section('content')

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">


          @if(count($data) === 0)
          <h4> еще ничего нет<h4/>
              <a href="{{ URL::asset('/addnote') }}">Добавить ?</a>
           @endif


       
@foreach ($data as $row)


<div class="well well-sm">{{ $row->note }}  </div>

              <form action="/dellnote" method="post">
                  {{csrf_field()}}
                  <input type="hidden"  name="id" value="{{$row->id}}"  >
                  <button type="submit"  class="btn btn-warning">Delete it</button>
              </form>


    <br/> <br/>

 @endforeach
    
  {{ $data->links() }}
	
	
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

