<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert New Book</title>
</head>
<body>

<form  method="POST">
@csrf
<input type="text" name="createTitle" placeholder="Define a title">
<input type="text" name="createAuthor" placeholder="Assigns an author">
<input type="submit" name="submit">
</form>
@if(isset($_POST['submit']))
@if($query)
<strong>Book sucessiful inserted</strong>
@else
<strong>Please try again</strong>
@endif
@endif
<button><a href="/books">All books</a></button>
</body>
</html>
