<?php 
include('Conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="/icon/PONDTECH__2_-removebg-preview 2.png">
  <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Aqua Sense</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="cont">

    <div class="left-por-log">
      <img src="/asset/image 15.png" class="img-left-signup">
    </div>

    <div class="right-por-log">
      <div class="head-log">
        <img src="/icon/PONDTECH__2_-removebg-preview 2.png" class="head-signup-sub">
        <p class="up-head-log-txt">
          Sign Up
        </p>
        <p class="sub-heading-log">
          Sign Up to have an account
        </p>
      </div>
      <div class="sub-log">
        <p class="pas-head-log-txt">
          Username
        </p>
        <input type="input" placeholder="Enter Username" class="us-log-inp">
      </div>

      <div class="sub-log">
        <p class="pas-head-log-txt">
          Phone Number
        </p>
        <input type="number" placeholder="Enter Phone Number" class="us-log-inp" max="00000000000">
      </div>

      <div class="sub-log">
        <p class="pas-head-log-txt">
          Password
        </p>
        <input type="password" placeholder="Enter Password" class="us-log-inp">
      </div>

      <div class="bottom-log">
        <a href="login.html">
        <button class="btn-log">
          Sign Up
        </button>
      </a>
        <p class="bot-head-log-txt">
          Already have an account?
          <a href="login.html">
          <span class="sgn-up-log"> Log In </span>
        </a>
        </p>
      </div>
    </div>
  </div>
</body>
</html>