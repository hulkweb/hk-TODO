<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf" content="{{ csrf_token() }}">
    <title>All Todos</title>
    <!-- CSS only -->
    <style>
        * {
            font-family: sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        .form-group {
            padding: 10px 20px;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div style="display: flex;flex-direction:column;min-height:100vh">


        <div class="container-fluid bg-primary text-light px-4">
            <div class="container d-flex justify-content-between">

                <h2 style="font-family: fantasy">TODO</h2>

                <ul class="navbar nav-menu">
                    <li class="nav-item nav-link">
                        <a href="/todos" class="nav-link mx-4 p-1">Todo List</a>
                    </li>
                    <li class="nav-item nav-link">
                        <a href="/todos/create" class="nav-link mx-4 p-1">Create Todo</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bg-light" style="flex:1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 m-auto p-4">
                        <div class="card p-2">
                            @yield('content')
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-dark text-center text-small text-light p-1">todo app</footer>

    </div>
    @if ($success = Session::get('success'))
    <script>
        swal("Success", "{{ $success }}!", "success");
    </script>
@endif

@if ($errore = Session::get('errore'))
    <script>
        swal("Success", "{{ $errore }}!", "errore");
    </script>
@endif
</body>

</html>
