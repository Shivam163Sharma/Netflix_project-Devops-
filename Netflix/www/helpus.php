<?php
session_start();
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind the SQL statement
    $sql = "INSERT INTO contactus (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $message);
    
    // Fetch data from the form
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Redirect after successful insertion
        header("Location: message_success.php");
        exit(); // Ensure script execution stops after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$conn->close();
?>
