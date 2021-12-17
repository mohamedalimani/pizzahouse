@extends('layouts.layout')
@section('content')
<h1>pizzas</h1>
<p>home of the shittiest pizza u'll ever taste</p>
<div class="wrapper pizza-index">
    <h1>Pizza Order</h1>
    <div class="pizza-item">
    <table>
    <thead>
    <th>Pizza menu</th>
    </thead>
    <tr>
        <td><h4>#</h4></td>
        <td><h4>name</h4></td>
        <td><h4>type</h4></td>
        <td><h4>base</h4></td>
    </tr>
    @foreach ($pizzas as $pizza)
    <tr>
        <td><img src="/img/pizza.png" alt="pizza icon"/></td>
        
        
        <td><h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a></h4></td>
        
        <td>{{$pizza->type}}</td>
        <td>{{$pizza->base}}</td>
    
    </tr>
    @endforeach
</table>
</div>
</div>
@endsection

