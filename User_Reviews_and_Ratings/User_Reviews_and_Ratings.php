<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $reviewData = $_POST;
    $reviewText = "Username: " . $reviewData['username'] . "\nReview: " . $reviewData['review'] . "\nRating: " . $reviewData['rating'] . "\n\n";
    
    // Save the review to a text file
    file_put_contents('reviews.txt', $reviewText, FILE_APPEND);
    
    // Return a success response to the front-end (you may want to handle errors)
    echo 'Review submitted successfully.';
}
?>
