<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Books</title>
</head>
<body>
<div class="container mt-5">
    <h2>List Books</h2>
    <div class="row justify-content-end">
        <form action="">
            <input type="text" name="search" placeholder="Search by name">
        </form>
    </div>
    <div class="row pt-5">
        <table class="table table-dark table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Title</th>
                <th>Public Year</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($books as $item)
                <tr>
                    <td>{{$item->bookId}}</td>
                    <td>@if($item->authorId == 1)
                            Eran Katz
                        @else
                            Eckhart Tolle
                        @endif

                    </td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->pub_year}}</td>
                    <td>@if($item->available == 1)
                            <p class="text-success">Còn hàng</p>
                        @else
                            <p class="text-danger">Hết hàng</p>
                        @endif
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
