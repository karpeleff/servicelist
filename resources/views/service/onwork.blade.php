@extends('service.layouts.app')


@section('content')
         @foreach ($data as $row)

          <div class="well well-sm">Карта девайса . Заказ №  {{$row->id}}  от {{substr($row->created_at,0,7)}} </div>
          




         <div class="panel-body">

             <ul class="list-group">
                 <li class="list-group-item">TEL: {{$row->tel}} </li>
                 <li class="list-group-item">GADGET: {{$row->device}}</li>
                 <li class="list-group-item">TROUBLE: {{$row->trouble}}</li>
                 <li class="list-group-item">s/n : {{$row->imei}}</li>
              </ul>

                 <br>

                 <form method="post" action="/update" >

                 <br>
                 <div class="input-group">
                     <span class="input-group-addon" id="basic-addon3">Комментарии:  </span>

                     <input type="text" class="form-control" name="desc" value="{{$row->desc}}" >
                 </div>
                     <br>
                     <div class="input-group">
                         <span class="input-group-addon" id="basic-addon3">PRICE: итог</span>
                         <input type="text" class="form-control" name="price"  value="{{$row->price}}">
                     </div>
                 <br>
                 <div class="form-group">
                     <label for="sel1">Гарантия</label>
                     <select class="form-control" id="sel1" name="warr" >
                         <option  value="1" >1 месяц</option>
                         <option value="3" >3 месяца</option>
                         <option value="6" >6 месяцев</option>
                         <option value="12" >12 месяцев</option>
                     </select>
                 </div>
                </div>

                 <label for="sel1">Использованы элементы</label>
                 <div class="input-group">
                     <input type="text" class="form-control" placeholder="Add components">
                     <span class="input-group-btn">
                 <button class="btn btn-default" type="button"   >Search</button>
                  </div>

                  <div class="radio">
                 <label><input type="radio" name="radio"  value="work" checked>В ремонте</label>
                  </div>
                  <div class="radio">
                    <label><input type="radio" name="radio"   value="done"  >Готово</label>
                    </div>
          <div class="checkbox">
              <label><input type="checkbox"  name="sms" value="sms">Отправить СМС клиенту </label>
          </div>
             
                 {{csrf_field()}}
                 <input  type="hidden"  name="id" value="{{$row->id}}" />
               </br>
                 <button type="sybmit" class="btn btn-success">Закрыть</button>

             </form>
@endforeach

@endsection

