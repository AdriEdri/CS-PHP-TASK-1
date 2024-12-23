<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Door</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to the CSS file -->
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="header-content">
            <h1>Welcome to the Door Adventure</h1>
            <nav>
                <ul>
                    <li><a href="php/index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <h2>Choose a Door</h2>

    <div class="doors">
        <!-- Each door is an image wrapped in a link that leads to story.php with a query parameter -->
        <a href="story.php?door=1">
            <img src="assets/door.png" alt="Door 1" class="door-image">
        </a>
        <a href="story.php?door=2">
            <img src="assets/door.png" alt="Door 2" class="door-image">
        </a>
        <a href="story.php?door=3">
            <img src="assets/door.png" alt="Door 3" class="door-image">
        </a>
    </div>

    <script src="js/script.js"></script> <!-- Link to JS file -->

</body>
</html>
