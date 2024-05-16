<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch data from the form
    $email = $_POST['email'];
    $cardNumber = $_POST['card-number'];
    $expiryDate = $_POST['expiry-date'];
    $cvv = $_POST['cvv'];

    // Insert data into the database
    $sql = "INSERT INTO payments (email, cardnumber, expirydate, cvv) VALUES ('$email', '$cardNumber', '$expiryDate', '$cvv')";

    if ($conn->query($sql) === TRUE) {
        // Redirect after successful payment
        header("Location: payment_success.php");
        exit(); // Ensure script execution stops after redirection
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
