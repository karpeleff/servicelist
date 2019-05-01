@extends('service.layouts.app')


@section('content')

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
	
@endsection

