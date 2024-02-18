<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// SQL to insert data into database
$sql = "INSERT INTO contact_form (name, email, message)
        VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    // Close the database connection
    $conn->close();
    // Alert message
    echo "<script>alert('Thank you for messaging.');";
    // Redirect after 3 seconds
    echo "setTimeout(function(){ window.location.href = 'contact.php'; }, 1000);</script>";
    exit();
} else {
    // Display error message
    echo "Error: " . $sql . "<br>" . $conn->error;
    // Alert message
    echo "<script>alert('Failed to submit the form. Please try again.');";
    // Redirect after 3 seconds
    echo "setTimeout(function(){ window.location.href = 'contact.php'; }, 3000);</script>";
    // Redirect immediately if necessary
    header("Location: contact.php");
    exit();
}


?>
