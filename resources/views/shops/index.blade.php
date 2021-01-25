@extends('layouts.layout')

@section('content')
<div class="product">
    @foreach($shops as $shop)
    <div class="table">
      <div class="shop__header--name">
      <h3 class="shop__header">
        {{ $shop->shop_name }}
      </h3>
      </div>
      <img src="/frontend/img/{{$shop->shop_name}}.jpeg" alt="{{$shop->shop_name}}" class="shop__img">
        <div class="table__details">
          <li class="table__items">
              Location: {{$shop->location}}
            </li>
            <li class="table__items">
              Contact Person: {{$shop->contact_person}}
            </li>
            <li class="table__items">
              Contact Number: {{$shop->contact_number}}
            </li>
              <div class="shop__email">
              Email: <a href="#" class="email__link">{{$shop->email}}</a>
              </div>
        </div>
    </div>
    @endforeach
</div>
@endsection