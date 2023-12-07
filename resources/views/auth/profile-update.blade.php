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
        @if(session('status') == 'profile-information-updated')
            <p><i class="text-success" style="text-align: center">Profile Updated</i></p>
        @endif

        {{-- <p>{{session('status')}}</p> --}}

        <h1>Profile Update</h1>
        <form action="{{route('user-profile-information.update')}}" method="post" enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <hr>
            <label id="icon" for="name"><i class="fas fa-user"></i></label>
            <input type="text" name="name" id="name" placeholder="Name" value="{{auth()->user()->name}}" autocomplete="off"/>
            <span class="text text-danger">@error('name') {{$message}} @enderror</span>

            <label id="icon" for="email"><i class="fas fa-envelope"></i></label>
            <input type="text" name="email" id="name" placeholder="Email" value="{{auth()->user()->email}}" autocomplete="off"/>
            <span class="text text-danger">@error('email') {{$message}} @enderror</span>
            

            <div class="btn-block">
                <button type="submit">Update</button>
            </div>

        </form>
    </div>
</body>

</html>