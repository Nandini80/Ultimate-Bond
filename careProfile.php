<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="careprofilestyle.css">
    <title>Profile Page</title>
</head>
<body>
<section>
    <form action="careProfileRes.php" method="post">
        <h1>Profile Information</h1>
    <div class="inputbox">
        <label for="person_name">Name:</label><br>
        <input type="text" name="name" required><br><br>
        </div>
        <div class="inputbox">
        <!-- use localstorage for email -->
        <label for="person_email">Your Email:</label> <br>
        <input type="email" name="email" required><br><br>
            </div>
            <div class="inputbox">
        <label for="dog_name">Dog's Name:</label><br>
        <input type="text" name="dogn" required><br><br>
                </div>
                <div class="inputbox"><br>
        <label for="dog_breed">Dog's Breed:</label>
        <input type="text" name="breed" required><br><br>
                    </div>
        <div class="register">
        <input type="submit" value="Save Information" name="save">
        </div>
        <div class="update">
        <input type="submit" value="Update Information" name="update">
        </div>
    </form>
</section>
</body>
</html>