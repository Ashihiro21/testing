  <!DOCTYPE html>
  <html>
  <head>
      <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome CDN -->
      <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <style>
  .contactFormcard{
      border-radius: 15px;
  }
  

  </style>
  <body style="background-color: transparent;">

  <?php

  include("header.php")
  ?>

  <?php
  // Database connection parameters
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "portfolio";

  // Initialize variables to store user input
  $name = $email = $message = "";
  $name_err = $email_err = $message_err = "";

  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Validate name
      if (empty(trim($_POST["name"]))) {
          $name_err = "Please enter your name.";
      } else {
          $name = trim($_POST["name"]);
      }

      // Validate email
      if (empty(trim($_POST["email"]))) {
          $email_err = "Please enter your email.";
      } elseif (!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)) {
          $email_err = "Please enter a valid email address.";
      } else {
          $email = trim($_POST["email"]);
      }

      // Validate message
      if (empty(trim($_POST["message"]))) {
          $message_err = "Please enter a message.";
      } else {
          $message = trim($_POST["message"]);
      }

      // If no errors, proceed with registration and database insertion
      if (empty($name_err) && empty($email_err) && empty($message_err)) {
          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);

          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          }

          // Prepare SQL statement to insert user data into the database
          $sql = "INSERT INTO contact_form (name, email, message) VALUES (?, ?, ?)";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("sss", $param_name, $param_email, $param_message);

          // Set parameters and execute statement
          $param_name = $name;
          $param_email = $email;
          $param_message = $message;
          if ($stmt->execute()) {
              // Redirect to login page or perform any other action upon successful registration
              header("location: contact.php");
              // exit();
          } else {
              echo "Something went wrong. Please try again later.";
          }

          // Close statement and connection
          $stmt->close();
          $conn->close();
      } else {
          echo "<script>alert('Authentication Error: Please check your input.')</script>";
      }
  }
  ?>






  <div class="contact-us">
      <h2 class="text-white text-center">Contact Us</h2>
      <p class="text-center text-white">You can contact me if you want anything to say.</p>
  </div>

  <div class="container-fluid mt-5">
    <div class="row justify-content-center">

      <!-- Contact Details Column -->
      <div class="col-lg-4 text-white p-5 mx-5 my-5 contactInfocard">
        <ul class="list-unstyled">
        <p class="text-primary ">Email</p>
          <li><i class="fas fa-envelope"></i> elexis.falceso@cvsu.edu.ph</li>
          <p class="text-primary mt-4">Phone</p>
          <li><i class="fas fa-phone"></i> 0950594815</li>
          <p class="text-primary mt-4">Address</p>
          <li><i class="fas fa-map-marker-alt"></i> Block 24 Lot 3 Baranggay Santo Niño - 1 Dasmariñas Cavite</li>
        </ul>
      </div>

      <!-- Contact Form Column -->
      <div class="col-lg-6 bg-white p-5 mx-2 contactFormcard">
        <h3 class="mb-4">Send Message</h3>
        <form id="contactForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>" placeholder="Enter your name" required>
            <span><?php echo $name_err; ?></span>
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email" required>
            <span><?php echo $email_err; ?></span>
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" rows="4" name="message" placeholder="Enter your message" required><?php echo $message; ?></textarea>
            <span><?php echo $message_err; ?></span>
          </div>
          <input type="submit" class="btn btn-primary" value="Send" onclick="submitForm()">
        </form>
      </div>
    </div>
  </div>






  <script src="script.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    

  
  <?php

  include("footer.php")

  ?>
  </body>
  </html>