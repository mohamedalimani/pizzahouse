@extends('layouts.app')


@section('content')
<div class="wrapper create-pizza">
<h1>Create a new Pizza</h1>
<form action="/pizzas" method="POST">
@csrf
<label for="name">your name:</label>
<input type="text" id="name" name="name">
<label for="type">choose pizza type:</label>
<select name="type" id="type">
    <option value="margarita">margarita</option>
    <option value="hawaiian">hawaiian</option>
    <option value="veg supreme">veg supreme</option>
    <option value="volcano">Volcano</option>
</select>
<label for="base">choose base type:</label>
<select name="base" id="type">
    <option value="cheesy crust">cheesy crust</option>
    <option value="garlic crust">garlic crust</option>
    <option value="thin & crispy">thin & crispy</option>
    <option value="thick">thick</option>
</select>
<fieldset>
<label>Extra toppings:</label>
<br/><input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br/>
<input type="checkbox" name="toppings[]" value="peppers">Peppers<br/>
<input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
<input type="checkbox" name="toppings[]" value="olives">Olives<br/>
</fieldset>
<input type="submit" value="Order pizza"/>
</form>
</div>
@endsection

