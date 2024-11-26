<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message']; 
    echo "
    <div class='container'>
        <h2>Form Submitted Successfully!</h2>
        <div class='result'>
            <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
            <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
            <p><strong>Message:</strong> " . nl2br(htmlspecialchars($message)) . "</p>
        </div>
    </div>";
} else {
    echo "<p class='error'>Invalid request method.</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <link rel="stylesheet" href="Styles/styles.css"> <!-- Link to external CSS -->
</head>
<body>

<!-- Fireworks -->
<div class="firework"></div>
<div class="firework"></div>
<div class="firework"></div>

<!-- Audio Element -->
<audio id="audio" src="../AUD/magnifique.mp3" preload="auto"></audio>

<script>
    // Trigger the audio after 2 seconds
    const audio = document.getElementById('audio');
    setTimeout(function() {
        audio.play(); 
        triggerFireworks(); // Trigger fireworks animation after audio starts
    }, 2000);

    // Fireworks animation trigger
    function triggerFireworks() {
        // Add more firework divs dynamically if needed
        for (let i = 0; i < 3; i++) {
            const firework = document.createElement("div");
            firework.classList.add("firework");
            document.body.appendChild(firework);
        }
    }
</script>

</body>
</html>
