<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Body email</title>
</head>
<body>
    <div class="container-fluid w-75 mx-auto">
        <div class="row">
            <div class="col-12 text-center">
                <h1>User: {{ $author }}</h1>
                <h3>Email: {{ $authorMail }} </h3>
                <h3> Message: </h3>
                <p>{{ $authorMessage }}</p>
            </div>
        </div>
    </div>
</body>
</html>

