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
            header("location: login.php");
            exit();
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h2>Register</h2>
    <form id="registrationForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div>
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $name; ?>">
            <span><?php echo $name_err; ?></span>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>">
            <span><?php echo $email_err; ?></span>
        </div>
        <div>
            <label>Message</label>
            <textarea name="message"><?php echo $message; ?></textarea>
            <span><?php echo $message_err; ?></span>
        </div>
        <div>
            <input type="submit" value="Register" onclick="submitForm()">
        </div>
    </form>

    <script>
        function submitForm() {
            alert("Form submitted successfully!");
            document.getElementById("registrationForm").submit();
        }
    </script>
</body>
</html>
