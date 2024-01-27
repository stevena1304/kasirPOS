<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="login/css/style.css">
    <style>
        body {
            background-color: grey;
        }
    </style>

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center bg-dark">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center text-dark mb-4">Register</h3>
                        <form action="{{route('register.store')}}" method="post" class="login-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="Name" required name="name" id="name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control rounded-left" placeholder="Email" required name="email" id="email">
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control rounded-left" placeholder="Password"
                                    required name="password" id="password">
                            </div>
                            {{-- <div class="form-group d-flex">
                                <input type="password" class="form-control rounded-left" placeholder="Confirm Password"
                                    required name="confirm_password" id="confirm_password">
                            </div> --}}
                            <div class="form-group d-flex justify-content-center">
                                <a href="/login" class="text-primary">Have an Account ? Login here</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark rounded submit p-3 px-5">Get
                                    Started</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="login/js/jquery.min.js"></script>
    <script src="login/js/popper.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>

</body>

</html>
