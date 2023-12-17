<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel = "stylesheet" href = "cprofilestyle.css">
</head>
<body>
    <section>
    <form action="checkupProfileRes.php" method="post">
        <h2>Profile Information</h2>
        <div class="inputbox">
        <label for="person_name">Name:</label><br>
        <input type="text" name="name" required><br><br>
            </div>
            <div class="inputbox">
        <!-- use localstorage for email -->
        <label for="person_email">Your Email:</label> <br>
        <input type="email" name="email" value="" required><br><br>
                </div>
                <div class="inputbox">
        <label for="dog_name">Dog's Name:</label><br>
        <input type="text" name="dogn" required><br><br>
                    </div>
                    <div class="inputbox">
        <label for="dog_breed">Dog's Breed:</label><br>
        <input type="text" name="breed" required><br><br>
                        </div>
                        <div class="inputbox">
        <label for="dog_breed">Dog's regular Food *if any</label><br>
        <input type="text" name="food"><br><br>
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