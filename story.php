<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Get the door number from the URL (default to 1 if not set)
$door = isset($_GET['door']) ? (int)$_GET['door'] : 1; // Ensure the door is an integer

// Debugging output
echo "Door: $door<br>";  // Debugging: check the door value

// Define different stories for each door
$stories = [
    1 => "Once upon a time, you opened the first door and entered a mysterious land. The air was magical, and the trees whispered secrets. As you walked, the ground felt soft like moss, and sunlight peeked through the trees, casting shadows. In the distance, an ancient owl sat on a pedestal, its eyes full of wisdom.",
    2 => "Behind the second door, you entered an ancient kingdom, where the air smelled of flowers and the streets were lively. The wise king, wearing a crown of jewels, greeted you and spoke of a prophecy about a hero who would bring peace. You felt the call of destiny urging you to move forward.",
    3 => "The third door whisked you away on an adventure through time and space. One moment, you were standing in a futuristic city with towering skyscrapers, and the next, you found yourself in a prehistoric jungle, surrounded by towering dinosaurs. Each step was a leap into the unknown, with mysteries waiting to be uncovered in every era you visited."
];

// Fetch the corresponding story based on the door number
$storyText = isset($stories[$door]) ? $stories[$door] : $stories[1];

// Debugging output
echo "Story: $storyText";  // Debugging: check the story text
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Story from Door <?php echo $door; ?></title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to CSS -->
</head>
<body>

    <!-- Header Section -->
    <header>
        <div class="header-content">
            <h1>The Door Adventure</h1>
            <nav>
                <ul>
                    <li><a href="php/index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="story-container">
    <h1 class="story-title">The Story of Door <?php echo $door; ?></h1>
        <p class="story-text door-<?php echo $door; ?>">
        <?php echo $storyText; ?>
    </p>
    <a class="back-link" href="index.php">Go Back</a>
</div>



    <script src="js/script.js"></script> <!-- Link to JS file -->
</body>
</html>
