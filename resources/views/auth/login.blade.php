<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortify Authentication</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="main-block">
        <h1>Login</h1>
        <form action="{{route('login')}}" method="post" enctype="multipart/form-data">

            @csrf

            <hr>
            <label id="icon" for="email"><i class="fas fa-envelope"></i></label>
            <input type="text" name="email" id="name" placeholder="Email"  autocomplete="off"/>
            <span class="text text-danger">@error('email') {{$message}} @enderror</span>
            
            <label id="icon" for="password"><i class="fas fa-lock"></i></label>
            <input type="password" name="password" id="name" placeholder="Password" autocomplete="off"/>
            <span class="text text-danger">@error('password') {{$message}} @enderror</span>
            

            <div class="btn-block">
                <button type="submit">Submit</button>
            </div>

            <hr>
            <div class="btn-block">
                <a href="{{route('password.request')}}" style="text-decoration:none;">Forgot password</a>
            </div>
        </form>
    </div>
</body>

</html>