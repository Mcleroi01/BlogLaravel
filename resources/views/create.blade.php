
    <form action="{{route('savepays')}}" method="POST">

        @csrf
        <div><label for="pays">Pays</label><input type="text" name="pays"></div><br>
        <div><label for="capital">Capital</label><input type="text" name="capital"></div><br>
        <div><button type="submit">Create</button></div>

    