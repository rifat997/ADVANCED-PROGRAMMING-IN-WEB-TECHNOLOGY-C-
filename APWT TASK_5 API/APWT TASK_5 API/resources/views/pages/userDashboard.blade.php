<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Dashboard</title>
    <style>
        body {
            max-width: 100%;
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    @extends('../layouts.app')
    @section('content')
    <div class="row">
        <div class="col-3" style="background: darkblue;">
            @include('pages.userSideBar')
        </div>
        <div class="col-9 py-5">
            <h2>User Profile</h2>
            <div class="d-flex justify-content-center align-items-center" style="height: 65vh;">
                <div>
                    @if(session('user-update'))
                    <div class="alert alert-danger font-weight-bold w-100 text-center" role="alert">
                        <span class="fw-bold">
                            {{ session('user-update') }}
                        </span>
                    </div>
                    @endif

                    <h3 >UserID: {{Session()->get('id')}}</h3>
                    <h4>Name: {{ $user->name }}</h4>
                    <h4>Phone: {{ $user->phone }}</h4>
                    <h4>Email {{ $user->email }}</h4>
                    <h4>Address {{ $user->address }}</h4>
                    <a href={{ "editUserProfile/".$user->id}} class="btn btn-danger btn-sm">Edit Profile</a>

                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>