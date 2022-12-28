
<?php
  if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  if(!isset($_SESSION['user'])){
    ?><script>window.location.href="/login.php"</script><?php
  }
?>

<html lang="en">
<head>
   <title>Console @ CS-Minor : Cyber Security Minor | MCA, AJCE</title>
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
                    <img src="./images/logo.png" class="h-6 mr-3 sm:h-9" alt="CS-Minor Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">CS-Minor</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <!-- <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a> -->
                    <a href="/logout.php" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Logout</a>
                </div>
            </div>
        </nav>
    </header>

<section class="vh-100" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-12 col-xl-4">

        <div class="card" style="border-radius: 15px;">
          <div class="card-body text-center">
            <div class="mt-3 mb-4 " style="text-align: -webkit-center;" >
              <img src="<?= $_SESSION['user']['login_photo'] ?>"
                class="rounded-circle img-fluid" style="width: 100px;" />
            </div>
            <h4 class="mb-2"><?= $_SESSION['user']['login_name'] ?></h4>
            <p class="text-muted mb-4"><?= $_SESSION['user']['login_role'] ?> <span class="mx-2">|</span> <a
                href="mailto:<?= $_SESSION['user']['login_role'] ?>"><?= $_SESSION['user']['login_email'] ?></a></p>
            
            <a href="/logout.php" class="btn btn-primary btn-rounded btn-lg">
              Logout
</a>

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
                    <img src="./images/logo.png" class="h-6 mr-3 sm:h-9" alt="CS-Minor Logo" />
                    CS-Minor    
                </a>
                <span class="block text-sm text-center text-gray-500 dark:text-gray-400">© 2022 CS-Minor. All Rights Reserved.</a>.
                </span>
            </div>
        </div>
    </footer>