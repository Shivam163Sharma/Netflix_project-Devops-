<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Netflix | Contact Us</title>
<style>
	/* Add CSS for background image */
	body {
            background-image: url('img/bg.jpg'); /* Replace 'background.jpg' with your image file */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 600px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
        text-align: center;
        color: #333;
    }

    input[type="text"],
    input[type="tel"],
    textarea {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    textarea {
        height: 150px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .error {
        color: red;
    }
</style>
</head>
<body>

<div class="container">

    <h2>Contact Us</h2>
	<form method="post" action="helpus.php">
    <label for="Name">Name</label>
    <input type="text" id="Name" name="Name" required>

    <label for="Email">Email</label>
    <input type="text" id="Email" name="Email" required>

    <label for="Message">Message</label>
    <textarea id="Message" name="Message" required></textarea>

    <input type="submit" value="Submit">
</form>

</div>

<!--<script>
    function validateForm() {
        var name = document.getElementById('name').value;
        var phone = document.getElementById('phone').value;
        var message = document.getElementById('message').value;
        var error = "";

        if (name == "") {
            error += "Name is required.\n";
        }

        if (phone == "") {
            error += "Contact number is required.\n";
        } else if (!/^\d{10}$/.test(phone)) {
            error += "Invalid contact number.\n";
        }

        if (message == "") {
            error += "Message is required.\n";
        }

        if (error !== "") {
            alert(error);
            return false;
        }

        return true;
    }
</script>-->

</body>
</html>