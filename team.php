<?php 
    include_once 'conn.php'; 
    $tid = $_GET['id'];
    $team = mysqli_query($conn, "SELECT * FROM `tbl_teams` WHERE `team_id` = $tid");
    $teaminfo = mysqli_fetch_array($team);
?>
<html lang="en">
<head>
   <title>Teams @ CS-Minor : Cyber Security Minor | MCA, AJCE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/output.css">
    <link rel="stylesheet" href="css/teams.css">
      <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <style type="text/css">
        .scrollax-performance,
        .scrollax-performance *,
        .scrollax-performance *:before,
        .scrollax-performance *:after {
            pointer-events: none !important;
            -webkit-animation-play-state: paused !important;
            animation-play-state: paused !important;
        } ;
    </style>
</head>
<body data-aos-easing="slide" data-aos-duration="800" data-aos-delay="0">

    <div id="colorlib-page">
        <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center" style="height: 100vh;max-width: 325px;">
            <a href="/" class="flex items-center">
                    <img src="./images/logo.png" alt="CS-Minor Logo" />
                </a>
            <nav id="colorlib-main-menu" role="navigation" style="    margin-top: 25px;">
                <ul>
                    <?php
                        $result = mysqli_query($conn, "SELECT * FROM `tbl_teams`");
                        while($row = mysqli_fetch_assoc($result)) {
                            ?> <li <?= $_GET['id'] == $row['team_id'] ? 'class="colorlib-active"':'' ?> ><a href="/team.php?id=<?= $row['team_id'] ?>"><?= $row['team_name'] ?></a></li> <?php
                        }
                    ?>
                </ul>
            </nav>
        </aside> <!-- END COLORLIB-ASIDE -->
        <div id="colorlib-main">
            <div class="hero-wrap hero-wrap-2 js-fullheight"
                style="background-image: url('<?= $teaminfo['team_logo'] ?>'); height: 973px; background-position: 50% 50%;"
                data-stellar-background-ratio="0.5">
                <div class="overlay" style="opacity: .93;"></div>
                <div class="js-fullheight d-flex justify-content-center align-items-center" style="height: 973px;">
                    <div class="col-md-8 text text-center">
                        <div class="img mb-4" style="background-image: url(<?= $teaminfo['team_logo'] ?>);"></div>
                        <div class="desc">
                            <h1 class="mb-4"><?= $teaminfo['team_name'] ?></h1>
                            <p class="mb-4" style="color: #006;"><?= $teaminfo['team_description'] ?></p>
                            <ul class="ftco-social mt-3">
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span
                                            class="icon-twitter"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span
                                            class="icon-facebook"></span></a></li>
                                <li class="ftco-animate fadeInUp ftco-animated"><a href="#"><span
                                            class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- END COLORLIB-MAIN -->
    </div>
</body>

</html>