@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details text-center d-flex flex-column align-content-center">
  <h1 class="text-danger">Order for {{ $pizza->name }}</h1>
  <p class="type fs-4">Type - {{ $pizza->type }}</p>
  <p class="base fs-5">Base - {{ $pizza->base }}</p>
  <p class="toppings fs-5 text-success">Extra toppings:</p>
  <ul style="list-style:none;" class="d-flex justify-content-center">
    @foreach($pizza->toppings as $topping)
      <li class="fs-5">{{ $topping }}</li>
    @endforeach
  </ul>
  <form action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="text-center w-25 rounded fs-5">Complete Order</button>
  </form>
</div>

<a class="text-danger fs-5 text-decoration-none ms-5" href="{{ route('pizzas.index') }}"><- Back to all pizzas</a>
@endsection
