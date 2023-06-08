<?php

include 'koneksi.php';
?>
<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <title>Login & Signup Form</title>
    <link rel="stylesheet" href="style.css"/>
	<style>
        body {
          background-image: url('bgdigital2.jpg');
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: 100% 100%;
        }
	</style>
  </head>
  <body>
	
    <section class="wrapper">
	<div class="form signup">
        <header>Signup</header>
		<form action="simpan_pengguna.php" method="post">
		<input type="hidden" name="id" placeholder="ID" class="form-control">
		<input type="text" name="nama" placeholder="Full name" required />
		<input type="text" name="usernama" placeholder="Username" class="from-control">
		<input type="password" name="password" placeholder="Password" class="from-control">
		<div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
          </div>
          <input type="submit" value="Signup" />
        </form>
		<div class="form login">
        <header>Login</header>
         <form class="form-signin" action="cek_login.php" method="post">
          <input type="text" name="usernama" placeholder="Username" required />
          <input type="password" name="password" placeholder="Password" required />
          <input type="submit" value="Login" />
		  <a href="#">Forgot password?</a>
        </form>
      </div>

      </div>

      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>
  </body>
</html>