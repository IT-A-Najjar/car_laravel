<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NAJJAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        body{
            background-color: #a0aec0;
        }
        div{
            color: white;
        }
        .navbar-brand{
            color: white;
        }
        nav{
            background-color: #2d3748;
        }
        p{
            text-align: center;
        }
        h2,h1{
            color: green;
        }
        #a{
            color: white;
        }
        #aa{
            border: 2px solid green;
            border-radius: 20px;
            margin-top: 100px;
        }
        #aaa{
            border: 2px solid green;
            border-radius: 20px;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Najjar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a id="a" class="nav-link active" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a id="a" class="nav-link" href="services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a id="a" class="nav-link" href="we">Who are we?</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
