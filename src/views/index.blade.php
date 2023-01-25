<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MBT.NET Framework installation check</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">MBT.NET devcheck</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse1">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse1">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Contact me</a>
                    <a href="#" class="nav-item nav-link">Repository</a>
                </div>
                <form class="d-flex ms-auto">
                    <input type="text" class="form-control me-sm-2" placeholder="Search in result">
                    <button type="submit" class="btn btn-outline-light">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container">
            @foreach ($examsResults as $result)
                <div class="border border-secondary rounded mt-3 p-3">
                    <h1 class="display-5">{{ $result->name }}</h1>
                    <p>Class: <i>{{ $result->class }}</i></p>
                    <p>{{ $result->description }}</p>
                    <p>
                        @if(!empty($result->messages))
                            @foreach ($result->messages as $message)
                            <p>&raquo; {{ $message }}</p>
                            @endforeach
                        @else
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                        @endif
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
