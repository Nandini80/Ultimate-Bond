<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <link rel = "stylesheet" href="appoint.css">
</head>
<body>
    <div class="background">
        <div class="appointment">
    <h2><u>Information Required to set appointment</u></h2>

    <form action="appointmentRes.php" method="post">

    <label for="dog_name">Email</label>
        <input type="text" name="email" required>

        <label for="dog_name">Dog's Name:</label>
        <input type="text" name="dogn" required>

        <label for="dog_breed">Dog's Breed:</label>
        <input type="text" name="breed" required>

        <label for="dog_breed">Regular diet(the food that your pet eats regularly)</label>
        <input type="text" name="diet" >

        <label for="dog_breed">Recent Injection : </label>
        <input type="text" name="inj" required>

        <label for="dog_breed">Last Injected : </label>
        <input type="date" name="injdate" required>

        <label for="dog_breed">Any Problem : </label>
        <input type="text" name="prob" required>
        <div class="save"><center>
        <input type="submit" value="Save Information" name="save">
        <input type="submit" value="Update Information" name="update"></div>
        </center>
    </form>
    </div>
</div>
</body>
</html>