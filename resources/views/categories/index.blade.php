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
    <table class="table table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $items)
                <tr>

                    <td>{{ $key + 1 }}</td>
                    <td>{{ $items->create_at }}</td>
                    <td>{{ $items->name }}</td>
                    <td>{{ $items->description }}</td>
                    <td>{{ $items->update_at }}</td>

                    <form action="">
                        @csrf
                        @method('DELETE')

                        <td>
                            <a href="{{ Route('Categories.show', $items->id) }}">More</a>
                        </td>

                        <td>
                            <a href="{{ Route('Categories.edit', $items->id) }}">Modifie</a>
                        </td>

                        <td>
                            <a href="{{ route('Categories.destroy', $items->id) }}" onclick="supprimer(event)"
                                class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Supprimer</a>
                        </td>

                    </form>

                </tr>

        </tbody>
        @endforeach
    </table>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p></p>
                </div>
                <div class="modal-footer">
                    @csrf
                    @method('DELETE')
                    <form action="" method="POST">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Supprimer</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@section('script')
    <script>
        function supprimer(event) {
            const lien = event.target.getAttribute('href')
            document.querySelector("#exampleModal form").setAttribute('action', lien)

        }
    </script>
@endsection
@endsection
