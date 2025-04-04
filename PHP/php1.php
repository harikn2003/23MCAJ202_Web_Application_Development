<!--To Run :- php -S 127.0.0.1:8000 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        /* Basic styling for the page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Styling for the form container */
        .container {
            background: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        /* Centering the title */
        h2 {
            text-align: center;
            color: #333;
        }

        /* Styling for form labels */
        label {
            font-weight: bold;
            display: block;
            margin-top: 10px;
            color: #555;
        }

        /* Styling for input fields */
        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Add focus effect for inputs */
        input:focus {
            border-color: #007BFF;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        /* Styling for error messages */
        .error {
            color: red;
            font-size: 12px;
        }

        /* Styling for success message */
        .success {
            color: green;
            text-align: center;
            font-weight: bold;
            margin-top: 15px;
        }

        /* Styling for the submit button */
        button {
            width: 100%;
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px;
            margin-top: 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        /* Hover effect for the button */
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Register Here</h2>

    <?php
        // Initialize variables
        $name = $email = $password = $confirm_password = "";
        $nameErr = $emailErr = $passwordErr = $confirmPasswordErr = "";
        $successMessage = "";

        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            // Validate Name
            if (empty($_POST["name"])) {
                $nameErr = "Name is required";
            } else {
                $name = htmlspecialchars($_POST["name"]); // Prevent XSS
            }

            // Validate Email
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            } else {
                $email = htmlspecialchars($_POST["email"]); // Prevent XSS
            }

            // Validate Password
            if (empty($_POST["password"])) {
                $passwordErr = "Password is required";
            } elseif (strlen($_POST["password"]) < 6) {
                $passwordErr = "Password must be at least 6 characters";
            } else {
                $password = $_POST["password"];
            }

            // Confirm Password
            if (empty($_POST["confirm_password"])) {
                $confirmPasswordErr = "Please confirm your password";
            } elseif ($_POST["password"] !== $_POST["confirm_password"]) {
                $confirmPasswordErr = "Passwords do not match";
            } else {
                $confirm_password = $_POST["confirm_password"];
            }

            // If no validation errors, display success message
            if (empty($nameErr) && empty($emailErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
                $successMessage = "Registration successful!";
            }
        }
    ?>

    <!-- Registration Form -->
    <form method="post" action="">
        <!-- Name Field -->
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $nameErr; ?></span>

        <!-- Email Field -->
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $emailErr; ?></span>

        <!-- Password Field -->
        <label>Password:</label>
        <input type="password" name="password">
        <span class="error"><?php echo $passwordErr; ?></span>

        <!-- Confirm Password Field -->
        <label>Confirm Password:</label>
        <input type="password" name="confirm_password">
        <span class="error"><?php echo $confirmPasswordErr; ?></span>

        <!-- Submit Button -->
        <button type="submit">Register</button>
    </form>

    <!-- Display success message if registration is successful -->
    <?php
        if ($successMessage) {
            echo "<p class='success'>$successMessage</p>";
        }
    ?>
</div>

</body>
</html>
