<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pays</title>
</head>
<body>
    <h1>{{$title}}</h1>
    <table id="tab_article">
        <thead>
            <tr>
                <td>id</td>
                <td>User</td>
                <td>Titre</td>
                <td>Contenue</td>
                <td>Action</td>
            </tr>
        </thead>
        
        <tbody>
        @foreach($pays as $key => $item)

        <tr>
            <td>{{$item['id']}}</td>
            <td><a href="{{route('detailsPays',$key)}}">{{$item['nom']}}</a></td>
        </tr>

        @endforeach
        
        
        </tbody>
        
        
        </table>
</body>
</html>