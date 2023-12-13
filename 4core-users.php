<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $message = $_POST["message"];

    $sql = "INSERT INTO `messages` (name, email, password, message) VALUES (?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);


    if ($stmt) {
        
        $stmt->bind_param("ssss", $name, $email, $password, $message);

        
        if ($stmt->execute()) {
            echo "<p>Thank you, $name, for your message! We'll get back to you soon.</p>";
        } else {
            echo "Error: " . $stmt->error;
        }

        
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }

    
    $conn->close();
}
?>

