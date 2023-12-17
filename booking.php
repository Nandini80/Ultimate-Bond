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
    <h2>Information Required to set appointment</h2>

    <form action="BookingRes.php" method="post">

    <label for="dog_name">Email</label>
        <input type="text" name="email" required>

        <label for="dog_name">Dog's Name:</label>
        <input type="text" name="dogn" required>

        <label for="dog_breed">Dog's Breed:</label>
        <input type="text" name="breed" required>

        <label for="date from">Date From:</label>
        <input type="date" name="dateFrom" >

        <label for="date to">Date To:</label>
        <input type="date" name="dateTo" required>

        <label for="Address">Address:</label>
        <input type="text" name="add" required>

        <label for="food">Food type:</label>
        <input type="text" name="food" required>
        <div class="save"><center>
        <input type="submit" value="Upload Information" name="Upload">
        <input type="submit" value="Change Information" name="Change"></div>
        </center>
    </form>
    </div>
</div>
</body>
</html>