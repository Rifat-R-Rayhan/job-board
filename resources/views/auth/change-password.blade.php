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
        @if(session('status') == 'password-updated')
            <p><i class="text-success" style="text-align: center">Password Updated</i></p>
        @endif
        <h1>Change Password</h1>
        <form action="{{route('user-password.update')}}" method="post">

            @csrf
            @method('PUT')

            <hr>
            <label id="icon" for="current_password"><i class="fas fa-lock"></i></label>
            <input type="password" name="current_password" id="name" placeholder="Current Password" autocomplete="off"/>
            <span class="text text-danger">@error('current_password') {{$message}} @enderror</span>
            
            <label id="icon" for="password"><i class="fas fa-lock"></i></label>
            <input type="password" name="password" id="name" placeholder="New Password" autocomplete="off"/>
            <span class="text text-danger">@error('password') {{$message}} @enderror</span>

            <label id="icon" for="password_confirmation"><i class="fas fa-lock"></i></label>
            <input type="password" name="password_confirmation" id="name" placeholder="Confirmation Password" autocomplete="off"/>
            <span class="text text-danger">@error('password_confirmation') {{$message}} @enderror</span>
            

            <div class="btn-block">
                <button type="submit">Change Password</button>
            </div>

        </form>
    </div>
</body>

</html>