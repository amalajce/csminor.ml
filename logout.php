<?php
 if (session_status() === PHP_SESSION_NONE) {
    session_start();
  }
  unset($_SESSION['user']);
  session_destroy();?>

<script>window.location.href="/login.php"</script>
