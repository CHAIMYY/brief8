<?php require('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div><button>like</button></div>
    
    <div><button>dislike</button></div>
    <?php

// Fetch data from the database sorted by date
$sql = "SELECT * FROM question ORDER BY date_qst DESC";
$result = mysqli_query($conn, $sql);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        // Display the data on the interface
        echo "<p>Date: " . $row["date_qst"] . "</p>";
        
    }
} else {
    echo "0 results";
}

// Close the database connection
mysqli_close($conn);
?>

</body>
</html>