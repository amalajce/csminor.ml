<?php include_once 'conn.php'; ?>
<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberDemo - Cyber-Security Demonstration | MCA, AJCE</title>

    <!-- Meta SEO -->
    <meta name="title" content="CyberDemo : Cyber Security Minor | MCA, AJCE">
    <meta name="description" content="Practically Learn Cyber Security with CyberDemo by MCA, AJCE">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="CyberDemo">

    <!-- Social media share -->
    <meta property="og:title" content="CyberDemo : Cyber Security Minor | MCA, AJCE">
    <meta property="og:site_name" content="CyberDemo">
    <meta property="og:url" content="https://csminor.ml"/>
    <meta property="og:description" content="Practically Learn Cyber Security with CyberDemo by MCA, AJCE">
    <meta property="og:type" content="website">
    <meta property="og:image" content=https://csminor.ml/images/logo.png>
    <meta name="twitter:card" content="summary" />

    <!-- Favicon -->
    <link href="/css/output.css?v=3" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <style>
        .tool_name{
            font-weight: bold;
            font-size: 24px;
            
        }
        .tool_icon{
            min-height: 50px;
            height: 16px !important;
            max-height:unset;
            max-width:unset;
        }
    </style>
</head>
<body>
    <header class="fixed w-full">
        <nav class="bg-white border-gray-200 py-2.5 dark:bg-gray-900">
            <div class="flex flex-wrap items-center justify-between max-w-screen-xl px-4 mx-auto">
                <a class="flex items-center">
                    <img src="./images/logo.png" class="h-6 mr-3 sm:h-9" alt="CyberDemo Logo" />
                    <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">CyberDemo</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <!-- <a href="#" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Log in</a> -->
                    <a href="/login.php" class="text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 sm:mr-2 lg:mr-0 dark:bg-purple-600 dark:hover:bg-purple-700 focus:outline-none dark:focus:ring-purple-800">Login</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Start block -->
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold leading-none tracking-tight md:text-5xl xl:text-6xl dark:text-white">CyberDemo</h1>
                <!--<h3 style="font-weight:bold;font-size:23px">MCA, Amal Jyothi</h3>-->
                <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400">An introductory course conducted as part of OBE (Outcome Based Education) by <a href="https://www.ajce.in/mca" class="hover:underline"><b>MCA Department</b></a>, <a href="https://www.ajce.in" class="hover:underline"><b>Amal Jyothi College of Engineering</b></a>.</p>
       
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                <img src="./images/hero.png" alt="hero image">
            </div>                
        </div>
    </section>
    <!-- End block -->
    <!-- Start block -->
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 pb-8 mx-auto lg:pb-16">
            <div class="grid grid-cols-2 gap-8 text-gray-500 sm:gap-12 sm:grid-cols-4 lg:grid-cols-7 dark:text-gray-400">
                <?php
                    $result = mysqli_query($conn, "SELECT * FROM `tbl_teams`");
                    while($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <a href="/team.php?id=<?= $row['team_id'] ?>" class="flex items-center lg:justify-center">
                            <table> <tr>
                                <td><img src="<?= $row['team_logo'] ?>" class="tool_icon"/></td>
                                <td><span class="tool_name"><?= $row['team_name'] ?></span></td>
                            </tr> </table>
                        </a>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <!-- End block -->
    <footer class="bg-white dark:bg-gray-800">
        <div class="max-w-screen-xl p-4 py-6 mx-auto lg:py-16 md:p-8 lg:p-10">
            <!-- <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8"> -->
            <div class="text-center">
                <a href="#" class="flex items-center justify-center mb-5 text-2xl font-semibold text-gray-900 dark:text-white">
                    <img src="./images/logo.png" class="h-6 mr-3 sm:h-9" alt="CyberDemo Logo" />
                    CyberDemo    
                </a>
                <span class="block text-sm text-center text-gray-500 dark:text-gray-400">© <?= date('Y') ?> CyberDemo. All Rights Reserved.</a>.
                </span>
            </div>
        </div>
    </footer>
</body>
</html>