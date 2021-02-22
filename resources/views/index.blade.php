<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Pasageri </title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid p-0">
        <a class="navbar-brand" href="#">Inregistrare pasageri</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                <a class="nav-link" href="#">Pasageri</a>
            </div>
        </div>
    </div>
</nav>

<div class="container">
    <h5 class="text-center py-2">Create Pasager</h5>
    @if ($errors->any())
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if(session('succes'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('succes')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row">
        <div class="col-md-4 m-auto">
            <form action="{{route('pasager.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nume</label>
                    <input type="text" name="nume" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Preume</label>
                    <input type="text" name="prenume" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Destinatie</label>
                    <input type="text" name="destinatia" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>

</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
