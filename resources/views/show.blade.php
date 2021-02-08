<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$employee['name']}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$employee['surname']}}</h6>
                    <p class="card-text">{{$employee['salary']}}</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
