<!-- index.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body id="home-page">

    <!-- Main Content -->
    <div class="content">
        <h1>Welcome to Our Project</h1>
        <p>Select a page to get started:</p>

        <div class="image-container">
            <!-- Link to location sharing page -->
            <a href="location.php" class="image-link">
                <div class="image-box">
                    <img src="images/location.png" alt="Location Sharing">
                    <div class="overlay-text">Share Your Location</div>
                </div>
            </a>

            <!-- Link to routes page -->
            <a href="routes.php" class="image-link">
                <div class="image-box">
                    <img src="images/route.png" alt="Find the Best Route">
                    <div class="overlay-text">Find Route</div>
                </div>
            </a>

            <!-- Link to the dashboard (if user is logged in) -->
            <a href="server/check_login.php" class="image-link">
                <div class="image-box">
                    <img src="images/user.png" alt="View Dashboard">
                    <div class="overlay-text">View Dashboard</div>
                </div>
            </a>
            
        </div>
    </div>

    <?php include('footer.php'); ?>

</body>
</html>
