<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission form</title>
    <link rel="icon" type="image/x-icon" href="images/unnamed-removebg-preview.png">

    <!-- -------------- CSS LINK FILE------------------ -->
    <link href="{{ asset('css/adminpanal.css') }}" type="text/css" rel="stylesheet">

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

<body class="rounded shadow-lg mt-3">
    <div class="container">
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
        <!-- ======================================================================== -->
        <legend>
            <h1>Admission form</h1>
        </legend>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row needs-validation ">
                <div class="col-md-6 ">
                    <div class="form-group">
                        <label for="validationCustom01">Name</label>

                        <input type="text" class="form-control" id="name" name="name" required placeholder="Enter Name"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" required>
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" name="state" placeholder="Enter state"
                            required>
                    </div>

                </div>
                <div class="col-md-6 ">
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" name="country" placeholder="Enter country"
                            required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" name="date" placeholder="Enter date" required>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select class="form-control" id="gender">
                            <option>Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Password Confirmation</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                            placeholder="Enter password confirmation" required>
                    </div>
                    <div class="form-group">
                        <label for="zip">Zip Code</label>
                        <input type="text" class="form-control" name="zip" id="zip" placeholder="Enter zip" required>
                    </div>
                </div>
            </div>

            <div class="form-group form-check">
                <note class="note">*Note:- Please fill all the filled </note>
                

                <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <!-- 

 <form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">State</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
 -->

    <script src="{{ asset('js/adminpanal.js') }}"></script>
</body>

</html>