<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>GGCakes</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
      <style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: black;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

#Home {background-color: white;}
#News {background-color: white;}
#Contact {background-color: white;}
#About {background-color: white;}
</style>

</head>

<body>

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="placeOrder.php">Place Order</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <button class="tablink" onclick="openPage('Home', this, 'black')">Home</button>
    <button class="tablink" onclick="openPage('News', this, 'black')" id="defaultOpen">News</button>
    <button class="tablink" onclick="openPage('Contact', this, 'black')">Contact</button>
    <!-- <button class="tablink" onclick="openPage('About', this, 'black')">About</button> -->

    <div id="Home" class="tabcontent">
      <h3>Event Cake</h3>
      <p>Decription</p>
      
    </div>

    <div id="News" class="tabcontent">
      <h3>Plain Cakes</h3>
      <p>Some news this fine day!</p> 
    </div>

    <div id="Contact" class="tabcontent">
      <h3>Cookies</h3>
      <p>Get in touch, or swing by for a cup of coffee.</p>
    </div>


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="footer-top-box">
              <h3>Business Time</h3>
              <ul class="list-time">
                <li>Tuesday - Friday: 08.00am to 05.00pm</li> <li>Saturday & Sunday: 10.00am to 08.00pm</li> <li>Monday: <span>Closed</span></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Mapunda Sylvia <br>Isakalilo Street Iringa,<br> Tanzania </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+255755008154">+255755008154</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:farajaneema5896@gmail.com">farajaneema5896@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="footer-top-box">
              <h3>Social Media</h3>
              <p>We are Available Through the Following Social Accounts</p>
              <ul>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
            </div>
          </div>
        </div>
        <hr>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2021 <a href="#">GG-Products</a> Design By :
            <a href="https://www.instagram.com/ney_faraja36/">neemafaraja36</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script>
      function openPage(pageName,elmnt,color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;
      }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    </script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>



