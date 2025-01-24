<?php
include 'db.php';
$error_message = ''; // Initialize an empty error message

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Fetch the user details based on email
    $sql = "SELECT * FROM signup WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['username'] = $row['username']; // Store username in session
            header('Location: hospital_updation.html');  // Redirect to the home page
            exit();
        } else {
            $error_message = "Incorrect password!"; // Set error message
        }
    } else {
        $error_message = "No account found with that email!"; // Set error message
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
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
            padding-top: 100px; /* Add padding at the top */
        }

        h2 {
            margin-bottom: 20px;
            color: #4CAF50; /* Professional header color */
            text-align: center; /* Center text */
        }

        .error {
            color: red; /* Error message color */
            margin: 10px 0; /* Spacing for error messages */
            text-align: center; /* Center error messages */
        }

        form {
            width: 300px; /* Fixed width for the form */
            display: flex; /* Flexbox for vertical alignment */
            flex-direction: column; /* Stack inputs vertically */
            align-items: center; /* Center align inputs */
        }

        input[type="email"], input[type="password"] {
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
        <h2>Login</h2>
        <?php if (!empty($error_message)): ?>
            <div class="error"><?php echo $error_message; ?></div> <!-- Display error message -->
        <?php endif; ?>
        <form action="login.php" method="post">
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <input type="submit" value="Login">
        </form>
        <p>Don't have an account? <a href="signup.php">Sign up here</a>.</p>  <!-- Signup link -->
    </div>
</body>
</html>
