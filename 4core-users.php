<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $message = $_POST["message"];

    $sql = "INSERT INTO `messages` (name, email, password, message) VALUES (?, ?, ?, ?)";

    // Prepare and bind
    $stmt = $conn->prepare($sql);

    // Check if the statement is prepared successfully
    if ($stmt) {
        // Bind parameters
        $stmt->bind_param("ssss", $name, $email, $password, $message);

        // Execute the query
        if ($stmt->execute()) {
            echo "<p>Thank you, $name, for your message! We'll get back to you soon.</p>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>

