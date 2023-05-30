<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boon</title>
    <link rel="icon" type="image/x-icon" href="images/unnamed-removebg-preview.png">
</head>
<!-- -------------- CSS LINK FILE------------------ -->

<link href="{{ asset('css/contact.css') }}" type="text/css" rel="stylesheet">
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

<body class=" rounded shadow-lg  ">

    <!-- ------------nav -->
    <div class="container mt-5">
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
        <!-- --------------  -->

        <div class="row">
            <hr class="clearfix w-100 d-md-none">
            <div class="col-md-6 mx-auto">
                <h5 class="font-weight-bold fw-bolder mt-3 mb-4">Contact us</h5>
                <div class="loc">
                    <ul class=" list-unstyled">
                        <li class="">
                            <legend>Address:</legend>
                            <p class="sped">CH39+FH3, Khori Galli, Ayesha Colony, Sawe Wadi, Latur, Maharashtra 413531

                            </p>
                        </li>
                        <legend>email:</legend>
                        <li> info@boonenglishschool.in
                        </li>
                        <li>
                            <legend>phone no:</legend>+91 0000 00 0000
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 mx-auto">
                <div class="card my-2">
                    <h5 id="map-location" class="card-header text-primary bg-white">
                        <i class="fa fa-map-marker text-muted"></i> Location on Map
                    </h5>

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3785.7627077174543!2d76.56635361093139!3d18.403647782595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcf83ec7f0775ff%3A0x35436d0a78ba6425!2sBoon%20English%20Primary%20And%20High%20School!5e0!3m2!1sen!2sin!4v1684734963364!5m2!1sen!2sin"
                        width="auto" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="text-center">
                        <small class="text-muted">
                            Disclaimer: Location automatically mapped by Google, marker on the map may not be
                            correct.<br>
                            View on <a
                                href="https://www.google.com/maps/search/?api=1&amp;query=Boon+English+Primary+School%2C+Latur+Latur+Urc2+Adv.Haji+Nayeemoddin+Urdu+P.S.+Latur+Mnc+Ward+No.+10+Latur+Maharashtra+413512+India"
                                rel="nofollow noopener" target="_blank">Google Maps</a> or <a
                                href="https://www.bing.com/maps?where1=Boon+English+Primary+School%2C+Latur+Latur+Urc2+Adv.Haji+Nayeemoddin+Urdu+P.S.+Latur+Mnc+Ward+No.+10+Latur+Maharashtra+413512+India"
                                rel="nofollow noopener" target="_blank">Bing Maps</a>
                        </small>
                    </div>

                </div>
            </div>
        </div>

    </div>
</body>

</html>