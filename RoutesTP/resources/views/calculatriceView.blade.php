<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/home" method="post">
        <input type="text" name="n1"><br>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select><br>
        <input type="text" name="n2"><br>
        <button type="submit">Ok</button>
    </form>
    <p>Le resultat : {{$resultat ?? ''}}</p>
</body>
</html>