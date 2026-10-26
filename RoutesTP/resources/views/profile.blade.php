<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('profile') }}" method="post">
        {{ csrf_field() }}
        <label for="nom">Nom</label>
        <input type="text" name="nom" />
        <label for="email">Email</label>
        <input type="text" name="email" /><br>
        <input type="submit" value="ok" />
    </form>

    <p>{{$nom}}</p>
    <p>{{$email}}</p>
</body>
</html>