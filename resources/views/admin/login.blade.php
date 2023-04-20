<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row py-5">
            <form action="{{ route('submit_login') }}" method="POST">
                @csrf
                <div class="col-md-4">
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email">
                    </div>

                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label">
                            Password
                        </label>
                        <input type="password" class="form-control" name="password">
                    </div>

                    <button type="submit" class="btn btn-success">
                        Login
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
