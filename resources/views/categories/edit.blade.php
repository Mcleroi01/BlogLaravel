@extends('layouts.app')

@section('title')
    Enregistre
@endsection



@section('content')

<h1>Formulaire</h1>
<form method="post" action="{{Route('Categories.update',$categories->id)}}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="name">Email address</label>
      <input type="text" name="name" class="form-control" id="exampleInputText"  placeholder="name" value="{{ $categories->name }}">
     
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1"></label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3">{{ $categories->description }}</textarea>
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection