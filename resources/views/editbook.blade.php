<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="/updated" method="POST">
<input type="text" name="newTitle" value="{{$title}}">
<input type="text" name="newAuthor" value="{{$author}}">
<input type="submit" name="submit" value="Update">
</form>

</body>
</html>
