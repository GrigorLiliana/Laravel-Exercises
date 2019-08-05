<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="POST">
@csrf
<input type="text" name="newTitle" value="{{$title}}">
<input type="text" name="newAuthor" value="{{$author}}">
<input type="submit" name="submit" value="Update">
</form>
@if(isset($_POST['submit']))
@if($edit)
<strong>Book sucessiful edited</strong>
@else
<strong>Please try again</strong>
@endif
@endif
<div>
<button><a href="/books">All books</a></button>
<button><a href="/create">Insert a new book</a></button>
</div>

</body>
</html>
