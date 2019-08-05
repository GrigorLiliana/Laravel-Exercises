<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Books</title>
</head>
<body>
@if(!empty($results))
    <ul>
    @foreach($results as $value)

    <li>Book: {{ $value->title }}, author: {{$value->author}} </li>
    <button>
    <a href="update/{{$value->id_book}}">Edit</a>
    </button>
    
    <button>
    <a href="destroy/{{$value->id_book}}">Delete</a>
    </button>

    @endforeach

    </ul>
@endif
<button><a href="/create">Insert a new book</a></button>

</body>
</html>
