<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="modal.css">
    <title>Document</title>
</head>
<style>
    .cards{
    width: 15rem;
}
.card{
    background: #404040;
}

.img-fluid{
    border: none;
    box-shadow: none;
    width: 50vh;
}
</style>
<body>

<?php

include("header.php")
?>


<div class="container-fluid mt-4">

  <!-- Jumbotron -->
  <div class="jumbotron">
    <h1 class="display-4 text-center">About My Projects</h1>
    <p class="lead text-center">This is my project I create to my college days</p>
    <p class="text-center">This is project website.</p>

    <div class="container">
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top img-fluid mx-auto my-1" src="Assets/face_recognition.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="text-light">Online and Offline Face Recognition</h5>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">Click me</button>
            </div>
          </div>
        </div>

        <!-- Modal 1 -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Online and Offline Face Recognition</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">       
            This is my thesis, which my group and I developed during my fourth year of college. The system aims to automatically detect registered students using facial recognition technology, employing machine learning and AI. Python serves as the primary programming language for implementing the system.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top img-fluid mx-auto mt-1" src="Assets/food_ordering2.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="text-light">Food Ordering System</h5>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Click me</button>
            </div>
          </div>
        </div>

        <!-- Modal 2 -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Student Management</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              This is my project, which I developed during my third year college. The system aims to allow users to reserve orders at the canteen for pickup at their convenience. However, if a student fails to pick up their order by 5 p.m., the reservation will expire and the order will not be fulfilled. PHP and JavaScript serve as the primary programming languages for implementing the system.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top img-fluid mx-auto" src="Assets/student_management1.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="text-light">School Food Ordering System</h5>
            </div>
            <div class="card-footer">
              <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">Click me</button>
            </div>
          </div>
        </div>

        <!-- Modal 3 -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel3">School Food Ordering System</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">            
                This is my project, which I developed during my fourth year college. The system aims to allow students to create their accounts, and the admin will be able to view the list of students who have created accounts. PHP and JavaScript serve as the primary programming languages for implementing the system.
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>





<?php

include("footer.php")

?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>