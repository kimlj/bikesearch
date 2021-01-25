@extends('layouts.layout')

@section('content')
<div class="sort">
  <a href="/products" class="sort">
    Lowest to Highest
  </a>
  <a href="/products" class="sort">
    Highest to lowest
  </a>
</div>
  <div class="product">
    @foreach($products as $product)
    <div class="table">
      <h3 class="table__items--header">
        {{ $product->name }}
      </h3>
        <div class="table__details">
          <img src="/frontend/img/{{$product->slug}}.jpg" alt="{{$product->slug}}" class="table__img">
          <li class="table__items">
              Groupset: {{$product->groupset}}
            </li>
            <li class="table__items">
              Manufacturer: {{$product->manufacturer}}
            </li>
            <div class="table__price">
              <h3>
                &#8369;{{$product->price}}
              </h3>
            </div>
          </div>
        <ul class="table__list">
        </ul>

    </div>
    @endforeach
  </div>
  <footer class="footer">
@endsection