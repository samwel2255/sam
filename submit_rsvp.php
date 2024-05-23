<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $guests = htmlspecialchars($_POST['guests']);
    $message = htmlspecialchars($_POST['message']);

    // Save to a file (or you can save it to a database)
    $file = fopen("rsvp_list.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nPhone: $phone\nGuests: $guests\nMessage: $message\n\n");
    fclose($file);

    // Confirmation message
    echo "Thank you for your RSVP, $name!";
}
?>