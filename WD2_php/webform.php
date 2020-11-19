<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ML Strength</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- <script src="functionality.js" defer></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <?php include "header.php"; ?>
    <!-- CONTACT US -->
    <div class="webform">
        <h1>Contact Form</h1>
        <div class="container">
            <form action="/action_page.php">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Your email..">
            
                <label for="message">Your Message</label>
                <textarea id="message" name="subject" placeholder="Write something.." style="height:200px"></textarea>
            
                <input type="submit" value="Submit">
            </form>
          </div>
    </div>
    <!-- FOOTER -->
    <?php include "footer.php"; ?>
</body>
</html>