@extends('layouts.app')

@section('title')
    Enregistre
@endsection



@section('content')

<h1>Formulaire</h1>
<form method="post" action="{{Route('Categories.store')}}">
    @csrf
    <div class="form-group">
      <label for="name">{{ $categories->name }}</label>
      <input type="text" name="name" class="form-control" id="exampleInputText"  placeholder="name">
     
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">{{ $categories->description }}</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection