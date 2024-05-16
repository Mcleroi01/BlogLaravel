@extends('layouts.app')

@section('title')
    Enregistre
@endsection

@section('content')
    <h1>Liste de categories</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <a href="{{ Route('Categories.create') }}">Create</a>
    <div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">{{ $categories->name }}</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>{{ $categories->description }}</p>
              <p>{{ $categories->create_at }}</p>
              <p>{{ $categories->update_at }}</p>
            </div>
            <div class="modal-footer">
              <a href="{{ Route('Categories.edit') }}" class="btn btn-primary">Save changes</a>
              <a href="{{ Route('Categories.show') }}" class="btn btn-primary">Save changes</a>
            </div>
          </div>
        </div>
      </div>
    
@endsection
