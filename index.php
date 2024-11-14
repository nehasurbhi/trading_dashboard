<!-- component -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="script.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet"/>

    <title>Dashboard</title>

   
</head>
<body class="light-mode transition-colors duration-300 text-gray-800" style="background-color: var(--bg-content); color: var(--text-color);">  
   <!-- Include Navbar -->
<?php include('components/sidebar.php'); ?>


<div class="w-full md:w-[calc(100%-256px)] md:ml-64  min-h-screen transition-all main">
    <!-- Include Sidebar -->
    <?php include('components/navbar.php'); ?>

    <!-- Main Content Area -->
    <main>
        <?php
        // Check if a 'page' parameter is set in the URL, and include the corresponding file
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            // $file = "content/$page.php";

            // Check if the file exists to prevent errors
            if ($page == "dashboard") {
                include('content/dashboard.php');
            } elseif ($page == "deposit") {
                include('content/deposit.php');
            }elseif ($page == "withdrawal") {
                include('content/withdrawal.php');
            }elseif ($page == "transfer") {
                include('content/transfer.php');
            }elseif ($page == "transHistory") {
                include('content/transHistory.php');
            }elseif ($page == "newAccount") {
                include('content/newAccount.php');
            }elseif ($page == "accList") {
                include('content/accList.php');
            }elseif ($page == "tredingContest") {
                include('content/tredingContest.php');
            }elseif ($page == "IbAccount") {
                include('content/IbAccount.php');
            }elseif ($page == "multiLevel") {
                include('content/multiLevel.php');
            }elseif ($page == "autoRebate") {
                include('content/autoRebate.php');
            }elseif ($page == "IBAcc") {
                include('content/IBAcc.php');
            }elseif ($page == "partenerDashboard") {
                include('content/partenerDashboard.php');
            }elseif ($page == "enquiries") {
                include('content/enquiries.php');
            }elseif ($page == "refferFriend") {
                include('content/refferFriend.php');
            }elseif ($page == "tradingPlatform") {
                include('content/tradingPlatform.php');
            }
             else {
                echo "<p>Page not found!</p>";
            }
        } else {
            include('content/dashboard.php'); // Default page
        }
        ?>
    </main>
    <?php include('components/footer.php'); ?>
</div>

<!-- Include Footer -->



<script src="https://unpkg.com/@popperjs/core@2"></script>
</body>
</html>