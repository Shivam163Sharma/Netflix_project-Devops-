<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <style>
        /* Add CSS styles for the popup here */
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: skyblue;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        /* Add CSS for background image */
        body {
            background-color: rgb(42, 42, 107); /* Replace 'background.jpg' with your image file */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
    <div id="paymentSuccessPopup" class="popup">
        <h1>Payment Successful!</h1>
        <p>Your payment has been successfully processed. Thank you!</p>
        
        <a href="homex.php"><button style="background-color: red;
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin: 4px 2px;
cursor: pointer;">Go Back to Home Page</button></a>

    </div>

    <script>
        // Function to close the popup
        function closePopup() {
            document.getElementById('paymentSuccessPopup').style.display = 'none';
        }

        // Display the popup when the page loads
        window.onload = function() {
            document.getElementById('paymentSuccessPopup').style.display = 'block';
        };
    </script>
</body>
</html>
