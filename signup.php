<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encrypt password

    // Insert data into the signup table
    $sql = "INSERT INTO signup (username, email, password) VALUES ('$username', '$email', '$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<div class='success'>Signup successful!</div>";
        header('Location: login.php');
        exit();
    } else {
        echo "<div class='error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <style>
        body {
            background-image: url('https://png.pngtree.com/thumb_back/fh260/back_our/20190622/ourmid/pngtree-medical-blue-technology-hospital-banner-background-image_208725.jpg'); /* Background image */
            background-size: cover; /* Cover the whole screen */
            background-position: center; /* Center the image */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333; /* Dark text color for readability */
            height: 100vh; /* Full height */
            display: flex; /* Flexbox for centering */
            justify-content: center; /* Center horizontally */
            align-items: flex-start; /* Align items to the start */
            margin: 0; /* Remove default margin */
            padding-top: 100px; /* Add padding at the top (adjusted) */
        }

        .error, .success {
            color: red; /* Error message color */
            margin: 10px 0; /* Spacing for messages */
            text-align: center; /* Center messages */
        }

        form {
            width: 300px; /* Fixed width for the form */
            display: flex; /* Flexbox for vertical alignment */
            flex-direction: column; /* Stack inputs vertically */
            align-items: center; /* Center align inputs */
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%; /* Full width inputs */
            padding: 12px;
            margin: 10px 0; /* Spacing between inputs */
            border: 1px solid #ccc; /* Border style */
            border-radius: 5px; /* Rounded corners */
            box-sizing: border-box; /* Box sizing to include padding */
            font-size: 16px; /* Font size for inputs */
        }

        input[type="submit"] {
            background: #4CAF50; /* Primary button color */
            color: white;
            border: none; /* Remove border */
            padding: 12px; /* Padding for button */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor on hover */
            font-size: 16px; /* Font size for button */
            transition: background 0.3s; /* Smooth transition */
            margin: 10px 0; /* Margin above and below button */
            width: 100%; /* Full width for button */
        }

        input[type="submit"]:hover {
            background: #45a049; /* Darker shade on hover */
        }

        p {
            margin-top: 20px; /* Spacing above paragraph */
            text-align: center; /* Center paragraph */
        }

        a {
            color: #4CAF50; /* Link color */
            text-decoration: none; /* Remove underline */
        }

        a:hover {
            text-decoration: underline; /* Underline on hover */
        }
    </style>
</head>
<body>
    <div>
        <form action="signup.php" method="post">
            <label>Username:</label>
            <input type="text" name="username" required>
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <input type="submit" value="Signup">
            <p>Already have an account? <a href="login.php">Login here</a>.</p>  <!-- Login link -->
        </form>
    </div>
</body>
</html>
