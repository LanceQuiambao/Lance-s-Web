<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header class="header">
        <a href="index.php" class="logo">Lance
        <span>Quiambao</span></a>

        <i class='bx bx-menu' id="menu-icons"></i>

        <nav class="navbar">
            <a href="index.php">Home</a>
            <a href="about.php"> About Me</a>
            <a href="skills.php"> Skills</a>
            <a href="achivements.php"> Achivements and Certifications</a>
            <a href="faq.php">FAQ section</a>
            <a href="registration.php"> Feedbacks</a>
        </nav>
    </header>

    <div class="containerlg">
        <div class="box form-box">
            <?php

               include("database.php");
               if(isset($_POST['submit'])){
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $password = mysqli_real_escape_string($conn,$_POST['password']);

                $result = mysqli_query($conn,"SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select Error");
                $row = mysqli_fetch_assoc($result);

                if(is_array($row) && !empty($row)){
                    $_SESSION['valid'] = $row['Email'];
                    $_SESSION['lastname'] = $row['Last_Name'];
                    $_SESSION['firstname'] = $row['First_Name'];
                    $_SESSION['id'] = $row['id'];
                }else{
                    echo "<div class='message'>
                          <p>Wrong Email or Password</p>
                      </div> <br>";
                 echo "<a href='login.php'><button class='btn'>Go Back</button>";  
                }
                if(isset($_SESSION['valid'])){
                    header("Location: feedback.php");
                }
               }else{
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field input">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have account? <a href="registration.php" class="signup"> Sign up</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>