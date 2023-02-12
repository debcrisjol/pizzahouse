@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index container">
  <h1 class="text-center">Pizza Orders</h1>
  @foreach($pizzas as $pizza)
    <div class="pizza-item m-3 d-flex flex-wrap">
      <img src="/img/pizza.png" style="height:80px" alt="pizza icon">
      <h4 class="text-center"><a  class="text-danger" href="{{ route('pizzas.show', $pizza->id) }}">{{ $pizza->name }}</a></h4>
    </div>
  @endforeach

</div>

@endsection
