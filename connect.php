<?php
$server = "localhost";
$username = "root";
$password = "";
$con = mysqli_connect($server, $username, $password, 'trip');

if (!$con) {
    die("connection to this database failed due to" . mysqli_connect_error());
}

$insert = false;

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dsc = $_POST['dsc'];

    // Server-side validation for email, phone, and age
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    if (!preg_match("/^[0-9]+$/", $phone)) {
        echo "Invalid phone number format";
        exit;
    }

    if (!is_numeric($age)) {
        echo "Invalid age value";
        exit;
    }

    $sql = "INSERT INTO `villaentry` (`name`, `age`, `gender`, `email`, `phone`, `dsc`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$dsc', CURRENT_TIMESTAMP)";

    if ($con->query($sql) == true) {
        $insert = true;
    } else {
        echo "ERROR: $sql  <br> $con->error";
    }

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img class="bg" src="desktop-wallpaper-luxury-villa-exterior-swimming-pool-courtyard-ibiza-for-with-resolution-high-quality.jpg" alt="Villa">
    <div class="container">
        <h1> Welcome to our luxurious villa</h1>
        <p>Enter your details and submit your form to confirm your participation in the trip</p>

        <?php 
        if ($insert == true) {
            echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the trip.</p>";
        }
        ?>

        <form action="connect.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your Name" pattern="[A-Za-z]+" required>
            <input type="text" name="age" id="age" placeholder="Enter your Age" required>
            <input type="text" name="gender" id="gender" placeholder="Enter your Gender" pattern="[A-Za-z]+" required>
            <input type="text" name="phone" id="phone" placeholder="Enter your Phone Number" pattern="[0-9]+" required>
            <input type="email" name="email" id="email" placeholder="Enter your Email ID" required>
            <textarea name="dsc" id="dsc" cols="30" rows="10" placeholder="Write something about yourself"></textarea>
            <button class="btn">Submit</button>


            </form>
       <h1>Thanks to visit us will connect with you shortely.</h1>
        <h1>Thankyou!</h1>
            
    </div>

            </body>
</html>

