<?php
$insertconf = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $server = "localhost";
  $user = "root";
  $password = "";
  $dbname = "booking_database";

  $con = mysqli_connect($server, $user, $password, $dbname);

  if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $name = mysqli_real_escape_string($con, $_POST['name']);
  $phn_nmber = mysqli_real_escape_string($con, $_POST['phn_nmber']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $gender = mysqli_real_escape_string($con, $_POST['gender']);
  $pincode = mysqli_real_escape_string($con, $_POST['pincode']);
  $address = mysqli_real_escape_string($con, $_POST['address']);
  $adults = mysqli_real_escape_string($con, $_POST['adults']);
  $children = mysqli_real_escape_string($con, $_POST['children']);
  $room = mysqli_real_escape_string($con, $_POST['room']);
  $start_date = mysqli_real_escape_string($con, $_POST['start_date']);
  $end_date = mysqli_real_escape_string($con, $_POST['end_date']);
  $rating = mysqli_real_escape_string($con, $_POST['rating']);
  $package = mysqli_real_escape_string($con, $_POST['package']);
  $dest_pack = mysqli_real_escape_string($con, $_POST['dest_pack']);

  $sql_query = "INSERT INTO bookingdata (NAME, PHONE_NUMBER, EMAIL, GENDER, PINCODE, ADDRESS, ADULTS, CHILDREN, ROOM, START_DATE, END_DATE, RATING, PACKAGE, DESTINATION_PACKAGE) 
  VALUES ('$name', '$phn_nmber', '$email', '$gender', '$pincode', '$address', '$adults', '$children', '$room', '$start_date', '$end_date', '$rating', '$package', '$dest_pack')";

  if ($con->query($sql_query) === TRUE) {
    $insertconf = true;
    echo "New record created successfully";
  } else {
    echo "ERROR: " . $sql_query . "<br>" . $con->error;
  }

  $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow p-3 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">ADVENTUREAVENUE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="packages.php">PACKAGE</a>
        </li>
      </ul>
        <a href="book.php" class="btn btn-warning btn-outline-success" role="button">BOOK NOW</a>
      </form>
    </div>
  </div>
</nav>
<br><br><br><br>

<section>
  <div class="booking">
    <div class="bcontent">
      <h1 class="form_title" style="text-align: center;">BOOKING FORM</h1>
      <p style="text-align: center;">Please fill out the form to complete booking process</p>
      <form action="" method="post">
        <div class="persnl_data">
          <h4 style="text-align: center;">PERSONAL DATA</h4><br>
          <label for="name">Enter Your Name</label>
          <input type="text" placeholder="NAME" required name="name" id="name">
          <label for="phn_nmber">Enter Phone Number</label><br>
          <input type="tel" placeholder="PHONE NUMBER" required name="phn_nmber" id="phn_nmber"><br><br>
          <label for="email">Enter Email</label><br>
          <input type="email" placeholder="EMAIL ADDRESS" name="email" required id="email"><br><br>
          <div class="beside">
            <label for="gender">Gender</label>
            <select name="gender" id="gender">
              <option>GENDER</option>
              <option>MALE</option>
              <option>FEMALE</option>
              <option>OTHER</option>
            </select>
            <label for="pincode">Enter Pincode</label>
            <input type="number" placeholder="PINCODE" name="pincode" id="pincode">
          </div><br>
          <label for="address">Enter Your Address</label>
          <input type="text" placeholder="ADDRESS" required name="address"  id="address">
        </div>
        <hr>
        <div class="travel_details">
          <h4 style="text-align: center;">TRAVEL DETAILS</h4><br>
          <div class="beside">
            <label for="adults">Number of Adults</label>
            <input type="number" placeholder="ADULTS" name="adults" id="adults">
            <label for="children">Number of Children</label>
            <input type="number" placeholder="CHILDREN" name="children" id="children">
          </div><br>
          <label for="room">Room</label>
          <select name="room" id="room">
              <option>ROOM</option>
              <option>AC</option>
              <option>NON AC</option>
            </select>
          <br>
          <div class="beside">
            <label for="start_date">Enter Starting Date</label>
            <input type="date" placeholder="STARTING DATE" name="start_date" id="start_date">
            <label for="end_date">Enter Ending Date</label>
            <input type="date" placeholder="ENDING DATE" name="end_date" id="end_date">
          </div><br>
          <label for="rating"> Rating Of Room</label>
          <select name="rating" id="rating">
              <option>RATING</option>
              <option>1 STAR</option>
              <option>2 STAR</option>
              <option>3 STAR</option>
              <option>4 STAR</option>
              <option>5 STAR</option>
            </select>
        </div>
        <hr>
        <div class="package_details">
          <h4 style="text-align: center;">PACKAGE DETAILS</h4><br>
          <div class="beside">
            <label for="package">Select Package</label>
            <select name="package" id="package">
              <option>PACKAGE</option>
              <option>OCEAN PACKAGE</option>
              <option>MOUNTAIN PACKAGE</option>
              <option>HONEYMOON PACKAGE</option>
            </select>
            <label for="dest_pack">Select Destination Package</label>
            <select name="dest_pack" id="dest_pack">
              <option>DESTINATION PACKAGE</option>
              <option>INDIA</option>
              <option>FRANCE</option>
              <option>BHUTAN</option>
              <option>CHINA</option>
              <option>UK</option>
              <option>THAILAND</option>
            </select>
          </div>
        </div>
        <hr><br>
        <button type="submit" value="SUBMIT" name="submit" id="submit" onclick="showAlert()">SUBMIT</button>
        <button type="reset" onclick="showAlertreset()">reset</button>
      </form>
    </div>
  </div>
</section>
<br>

<!-- footer -->
<div class="main"></div>
    <footer id="Footer"style="background-color:#b3b3cc;" class="page-footer font-small stylish-color-dark pt-4">
      <div style="background-color:#b3b3cc;" class="container text-center text-md-left">
        <div class="row">
          <div class="col-md-4 mx-auto">
            <!-- Content -->
            <h5 class="text-uppercase font-weight-bold mt-3 mb-4 text-white">ABOUT OUR COMPANY</h5>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 70px;">
            
            <p class="card-text text-white">ADVENTUREAVENUE is group based in Kerala which is a group of passionate explorers who specialize in creating tailor-made holidays.</p>
          </div>
          <hr class="clearfix w-100 d-md-none">
          <div id="link10" class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold text-white">PACKAGES</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 70px;">
            <p class="text-white">
              <a href="#!">TRAVELLING</a>
            </p>
            <p class="text-white">
              <a href="#!">HOME</a>
            </p>
            <p class="text-white">
              <a href="#!">SPEC</a>
            </p>
            <p class="text-white">
              <a href="#!">SERVICE</a>
            </p>
          </div>
          <hr class="clearfix w-100 d-md-none">
          <div id="link10" class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold text-white">USEFULL LINKS</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 70px;">
            <p class="text-white">
              <a href="index.php">HOME</a>
            </p>
            <p class="text-white">
              <a href="about.php">ABOUT</a>
            </p>
            <p class="text-white">
              <a href="package.php">PACKAGE</a>
            </p>
            <p class="text-white">
              <a href="book.php">BOOK</a>
            </p>
          </div>
          <hr class="clearfix w-100 d-md-none">
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase font-weight-bold text-white">Contact</h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p class="text-white">
              <i class="fa fa-home mr-3"></i> KOZHIKODE, KERALA</p>
            <p  class="text-white">
              <i class="fa fa-envelope mr-3"></i> team@adventureavenue.com</p>
            <p  class="text-white">
              <i class="fa fa-phone mr-3"></i> + 91 9876543210</p>
            <p  class="text-white">
              <i class="fa fa-print mr-3"></i> + 91 0123456789</p>
          </div>
        </div>
      </div>
      <hr>
      <!-- Social buttons -->
      <div class="hover-effect1">
      <ul  style="background-color:#b3b3cc;" class="list-unstyled list-inline text-center text-white">
        <li class="list-inline-item">
          <a href="https://www.facebook.com/" title="Facebook"><i class="fa fa-facebook fa-2x"></i></a>
        </li>
        <li class="list-inline-item">
          <a href="https://twitter.com/?lang=en" title="Twitter"><i class="fa fa-twitter fa-2x"></i></a>
        </li>
        <li class="list-inline-item">
          <a href="https://www.instagram.com/" title="Instagram"><i class="fa fa-instagram fa-2x"></i></a>
        </li>
        <li class="list-inline-item">
          <a href="https://api.whatsapp.com/send/?phone=%2B919876543210&text&type=phone_number&app_absent=0" title="whatsapp"><i class="fa fa-whatsapp fa-2x"></i></a>
        </li>
      </ul>
    </div>
    <hr>
      <!-- Copyright -->
      <div  style="background-color:#b3b3cc;" class="footer-copyright text-center py-3">
        Copyright© 2024 adventureavenue
      </div>
    </footer>





   <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>