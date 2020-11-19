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
    <div class="webform">
        <h1>Book a class</h1>
        <a href="table.php" id="back">Back to class</a>
        <div class="bookcontainer">
            <form >
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name.." required> 

                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.." required>
            
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Your email.." required>
                
                <label for="classname">Class Name</label>
                <select id="classname" name="classname">
                    <option value="">CHOOSE A CLASS</option>
                    <option value="BODYATTACK">BODYATTACK</option>
                    <option value="ZUMBA">ZUMBA</option>
                    <option value="BODYPUMP">BODYPUMP</option>     
                </select>
                <label for="classdate">CLASS DATE</label>
                <input type="date" id="classdate" name="cdate" required>
                <input type="submit" id="subbook" value="submit">
            </form>
          </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>