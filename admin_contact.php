<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Ecommerce</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>

    <!-- top navbar -->
    <div class="top-navbar">
        <div class="top-icons">
            <a href="https://www.facebook.com/prabesh.timalsina.58" target="_blank" class="facebook"><i  class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/prash9356/" target="_blank" class="instagram"> <i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/manabendra-timalsina-ab147a277/" target="_blank" class="linkin"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <div class="other-links">
            <a href="signup.php" ><button id="btn-signup">Create Seller</button></a>

            <i class="fa-solid fa-user"></i>
        </div>
    </div>
    <!-- top navbar -->

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
              <a class="navbar-brand" href="admin_home.php" style="color: black;">EE</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white;"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="admin_home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="admin_product.php">Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="admin_about.php">About Us</a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link" href="customer_message.php">Customer Message</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="userdata.php">User Data</a>
                  </li>
                </ul>
               
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit" id="search-btn">Search</button>
                </form>
              </div>
            </div>
          </nav>
        <!-- navbar -->

        <!-- contact -->
        <div class="container" id="contact">
            <h1 class="text-center">CONTACT US</h1>
            <div class="row" style="margin-top: 50px;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fas fa-phone"> Phone</i>
                        <h6>+97798********</h6>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fa-solid fa-envelope"> Email</i>
                        <h6>prabesh.timalsina1234@gmail.com</h6>
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <i class="fa-solid fa-location-dot"> Address</i>
                        <h6>Bhaisepati  Lalitpur  Nepal</h6>
                    </div>
                </div>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <input type="text" class="form-control form-control" placeholder="Name">
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <input type="text" class="form-control form-control" placeholder="Email">
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <input type="number" class="form-control form-control" placeholder="Phone">
                </div>
               <div class="form-group" style="margin-top: 30px;">
                <textarea class="form-control" id=""rows="5" placeholder="Message"></textarea>
            </div>
            <div id="messagebtn" class="text-center"><button>Message</button></div>
            </div>
        </div>
        <!-- contact -->









<!-- footer -->
<footer id="footer" style="margin-top: 50px;">
<div class="footer-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 footer-content">
                <h3>E-Electronic</h3>
                <p>E-Electronic, or electronic commerce (e-commerce), refers to the buying and selling of goods and services over the internet.</p>
                <p>
                    Bhaisepati <br>
                    Lalitpur<br>
                    Nepal<br>
                </p>
                <strong><i class="fas fa-phone"></i> Phone: <strong>+97798********</strong></strong><br>
                <strong><i class="fa-solid fa-envelope"></i> Email: <strong>prabesh.timalsina1234@gmail.com</strong></strong>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <ul>
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Privacy policay</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Services</h4>
                <p>We are here to delivert products in time!!...</p>
                <ul>
                    <li><a href="#">Luxirious Products</a></li>
                    <li><a href="#">Home Appliance</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Our Social World</h4>
                <p>Our Social Worlds is for Providing services and to our valuable customer......</p>
                <div class="socail-links mt-3">
                    <a href="https://www.facebook.com/prabesh.timalsina.58" target="_blank" class="facebook"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/prash9356/" target="_blank" class="instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/manabendra-timalsina-ab147a277/" target="_blank" class="linkin"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="container py-4">
    <div class="copyright">
        &copy; Copyright <strong>E-Electronics</strong>.All Rights Reserved
    </div>
    <div class="credits">
        Designed By <a href="#">Manabendra Timalsina</a>
    </div>
</div>
</footer>
<!-- footer -->

<a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
