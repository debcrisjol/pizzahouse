@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
  <h1 class="text-center text-danger" >Create a New Pizza</h1>
  <form action="{{ route('pizzas.store') }}" method="POST" class="d-flex flex-column align-items-center">
    @csrf
    <label for="name">Your name:</label>
    <input class="text-success m-2 rounded" type="text" name="name" id="name" required>
    <label for="type">Choose type of pizza:</label>
    <select class="bg-warning rounded fs-5" name="type" id="type">
      <option  value="margarita">Margarita</option>
      <option value="hawaiian">Napoletana</option>
      <option value="veg supreme">Veg Supreme</option>
      <option value="veg supreme">Nduja</option>
      <option value="volcano">Volcano</option>
    </select>
    <label for="base">Choose crust:</label>
    <select class="bg-warning rounded fs-5" name="base" id="base">
      <option value="thick">Thick</option>
      <option   value="thin & crispy">Thin & Crispy</option>
      <option   value="cheese crust">Cheese Crust</option>
      <option   value="garlic crust">Garlic Crust</option>
    </select>
    <fieldset>
      <label class="m-2 text-success">Extra toppings:</label><br>
      <input class=" m-2" type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br />
      <input class=" m-2" type="checkbox" name="toppings[]" value="peppers">Peppers<br />
      <input class=" m-2" type="checkbox" name="toppings[]" value="garlic">Garlic<br />
      <input class=" m-2" type="checkbox" name="toppings[]" value="olives">Olives<br />
      <input class=" m-2" type="checkbox" name="toppings[]" value="olives">Nduja<br />
    </fieldset>
    <input type="submit" class=" text-danger m-2 rounded" value="Order a Pizza Now">
  </form>
</div>
@endsection
