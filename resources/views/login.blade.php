<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- -------------- CSS LINK FILE------------------ -->
    <link href="{{ asset('css/login.css') }}" type="text/css" rel="stylesheet">

    <!-- -----------------font cdn------------------------ -->

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <!--fontawesome-->

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
        integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous">
    </script>


    <style>
    .btn.focus,
    .btn:focus {
        outline: 0;
        box-shadow: none;
    }
    </style>
</head>

<body class="container rounded  shadow-lg mt-2">

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid px-5">
            <a class="navbar-brand" href="http://127.0.0.1:8000/">
                <h5><span>BOON</span></h5>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="http://127.0.0.1:8000/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="http://127.0.0.1:8000/adminpanal">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="http://127.0.0.1:8000/contact">Contact</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link active" href="http://127.0.0.1:8000/login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
            
    </nav>

    <hr class="hr">
    <!-- ==================================================================================== -->
    <div class=" my-3 p-3 ">
        <h1>Register</h1>
        <div class="row">

            <div class="col-md-6">

                <form action="" method="POST">

                    <div class="form-group">
                        <label for="validationCustom01">First name</label>

                        <input type="text" class="form-control" id="Fname" required placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="validationCustom01">middel name</label>

                        <input type="text" class="form-control" id="Mname" required placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="validationCustom01">Last name</label>

                        <input type="text" class="form-control" id="Lname" required placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Enter phone">
                    </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputaddress">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="Enter address">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter email (We'll never share your email with anyone else.)">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div><br>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
        </form>


    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/adminpanal.js') }}"></script>
</body>

</html>