
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mimiz Kitchen</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="assets/img/Mimizz Favicon.png">

  <!--Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <img src="assets/img/others/menu-logo.webp" alt="">
        
      </a>

      <nav id="navbar" class="navbar">
        
      </nav><!-- .navbar -->
      <a id="userDropdown" class="user-dropdown-btn"><i class="uil uil-user-md"></i></a>
      <div class="user-dropdown-content" id="userDropdownContent">
          <a href="cart.php">Cart</a>
          <a href="orders.php">Orders</a>
          <a href="logout.php">Logout</a>
      </div>
     
      
    
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->

  <div class="main">
  <section class="delivery-section">
   
  </section>
 
<section class="cart">
    <div class="container">
        <table>
          <tr>
            <th>Food Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Remove</th>
          </tr>
          <tr>
            <td><img src="assets/img/STATER/amarula.jpeg" alt="Food 1"></td>
            <td>Amarula</td>
            <td>GH¢30.00</td>
            <td><button class="remove-btn">Remove</button></td>
          </tr>
          <tr>
            <td><img src="assets/img/lunch/f-rice-1.jpeg" alt="Food 2"></td>
            <td>Fried Rice</td>
            <td>GH¢77.00</td>
            <td><button class="remove-btn">Remove</button></td>
          </tr>
          <tr>
            <td><img src="assets/img/drinks/fanta.jpeg" alt="Food 3"></td>
            <td>Fanta</td>
            <td>GH¢22.00</td>
            <td><button class="remove-btn">Remove</button></td>
          </tr>
          <tr>
            <td><img src="assets/img/breaakfast/bft-6.jpeg" alt="Food 4"></td>
            <td>SpringRoll</td>
            <td>GH¢25.00</td>
            <td><button class="remove-btn">Remove</button></td>
          </tr>
          <tr>
            <td colspan="3"><strong>Total Amount:</strong></td>
            <td><strong>GH¢154.00</strong></td>
          </tr>
        </table>
        <button class="checkout-btn">Checkout</button>
    </div>    
</section><!-- End #cart-->
  </div>

      <!-- Right Sidebar (Modal) -->
<div id="rightSidebar" class="modal">
  <div class="modal-content">
      <span class="close" onclick="closeSidebar()">&times;</span>
      <div id="sidebarContent">
          <!-- Content will be dynamically updated here -->
      </div>
  </div>
</div>

    
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Address</h4>
            <p>
              Pantang West<br>
              Zion City<br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservations</h4>
            <p>
              <strong>Phone:</strong> +233 240 350 851<br>
              <strong>Email:</strong> info@menu.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Opening Hours</h4>
            <p>
              <strong>Mon-Sat: 09AM</strong> - 23PM<br>
              Sunday: Closed
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Mimiz Kitchen</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed By <a href="#">Group 27</a>
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/jquery-2.1.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/interactjs@1.10.11/dist/interact.min.js"></script>

  
</body>

</html>
