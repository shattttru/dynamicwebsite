<?php
// Function to check if email exists in database
function isEmailUnique($conn, $email) {
    $email = mysqli_real_escape_string($conn, $email);
    $query = "SELECT * FROM userinfodata WHERE email = '$email'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        return false; // Email already exists
    } else {
        return true; // Email is unique
    }
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Establish database connection (Replace with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dynamicdata";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare data for insertion
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }
    
    // Check if email is unique
    if (!isEmailUnique($conn, $email)) {
        die("Email address already exists");
    }
    
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    // Validate password (e.g., minimum length)
    if (strlen($password) < 8) {
        die("Password must be at least 8 characters long");
    }
    // You might want to hash the password before storing it for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Insert data into database
    $sql = "INSERT INTO userinfodata (name, email, password, mobile, message)
            VALUES ('$name', '$email', '$hashed_password', '$mobile', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // Delayed redirect after 5 seconds
        echo '<script>setTimeout(function() { window.location.href = "index.php"; }, 5000);</script>';
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>
