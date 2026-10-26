<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   @foreach($info as $key => $value)
        <p>{{$key }}: {{$value}}</p>
    @endforeach
    <form method="GET" action=".">
        <label for="nom"></label>
        <input type="text" name="nom">
        <input type="text" name="filiere">
        <input type="text" name="groupe">
        <input type="text" name="stagiaire">
    </form>
</body>
</html>