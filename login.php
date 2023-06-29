<?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  if(isset($_SESSION['user'])){
    ?><script>window.location.href="/dash.php"</script><?php
  }else{
    include_once 'conn.php'; 
  }
    $msg ="";
    if(isset($_POST['login'])){
      if(trim($_POST['email']) != "" && trim($_POST['pass'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $sql = "SELECT * FROM `tbl_login` WHERE `login_email` = '$email' AND `login_password` = '$pass'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0){
          $_SESSION['user'] = mysqli_fetch_array($result);
          ?><script>window.location.href="/dash.php"</script><?php
        }else{
          $msg = "Invalid Username/Password!";
          unset($_POST);
        }
      }else{
        $msg = "Username & Password must not be null!";
        unset($_POST);
      }
    }
?>

<html lang="en">
<head>
   <title>Login @ CyberDemo : Cyber Security Minor | MCA, AJCE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/output.css">
    <link rel="stylesheet" href="css/teams.css">
      <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css"
  rel="stylesheet"
/>
</head>
<header class="fixed w-full">
        <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a class="flex items-center">
                    <img src="./images/logo.png" class="h-6 mr-3 sm:h-9" alt="CyberDemo Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">CyberDemo</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <!-- <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a> -->
                    <a href="/" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Back to Home</a>
                </div>
            </div>
        </nav>
    </header>

<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>
            <form action="" method="post">
             <div class="form-outline mb-4">
              <input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,5}$" title="Invalid Email address"  required/>
              <label class="form-label" for="typeEmailX-2">Email</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="pass"  pattern="^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*?[#?!@$%^&*-\]\[])(?=\S+$).{6,}$" title="Password should contain minimum 6 chars, including atleast one capital letter, small letter, number & special chars" required/>
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>
            <label style="color:red"><?=$msg?></label>
            <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="bg-white dark:bg-gray-800">
        <div class="max-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">
            <!-- <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"> -->
            <div class="text-center">
                <a href="#" class="flex items-center justify-center mb-1 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img src="./images/logo.png" class="h-6 mr-3 sm:h-9" alt="CyberDemo Logo" />
                    CyberDemo    
                </a>
                <span class="block text-sm text-center text-gray-500 dark:text-gray-400">© <?= date('Y') ?> CyberDemo. All Rights Reserved.</a>.
                </span>
            </div>
        </div>
    </footer>
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.js"
></script>