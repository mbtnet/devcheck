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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                <h1 class="display-3">{{ $result->name }}</h1>
                <p>{{ $result->description }}</p>
                <p>
                    @foreach ($result->messages as $message)
                    <p>- {{ $message }}</p>
                    @endforeach
                </p>
            @endforeach
        </div>
    </div>
</body>
</html>
