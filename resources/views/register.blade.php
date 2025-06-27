<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Register</h2>

                <!-- Display Validation Errors -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Registration Form -->
                <form method="POST" action="{{route('registerSave')}}">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="username">Name</label>
                        <input type="text" id="username" name="name" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="useremail">Email Address</label>
                        <input type="email" id="useremail" name="email" class="form-control" required>
                    </div>


                 


                   

                    <div class="form-group mb-3">
                        <label for="userpassword">Password</label>
                        <input type="password" id="userpassword" name="password" class="form-control" required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="userpassword_confirmation">Confirm Password</label>
                        <input type="password" id="userpassword_confirmation" name="password_confirmation" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary mb-3">Register</button>
                    <a href="/" class="btn btn-danger mb-3">Back</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
