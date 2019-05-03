@extends('service.layouts.app')


@section('content')

          @if(count($data) === 0)
          <h4> склад пуст <h4/>
              <a href="{{ URL::asset('/addcomponent') }}">Добавить деталей ?</a>
           @endif
       
@foreach ($data as $row)


                 {{ $row->type }} - <br/>
                  модель: {{$row->item}}<br/>
                  хранилище №:{{$row->storage}}<br/>
                  количество:{{$row->count}}<br/>
                  цена:{{$row->price}} руб<br/>
    <br/>

 @endforeach
    
  {{ $data->links() }}
	
@endsection

