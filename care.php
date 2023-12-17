<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PetCare Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="careStyle.css"></link>
  </head>

  <body>
    <div class="background"><br>
   <form action="careRes.php" method="post">
    <center><h1 class="mt-5" style="color:black;"><b><u>PETCARE DASHBOARD</u></b></h1>
  <div class="card mt-5 offset-md-1 me-5" style="width: 16rem;float:left">
  <img src="https://i.pinimg.com/564x/ea/a1/1c/eaa11c8a08b3ec8014afdf255300ff44.jpg" height="225rem" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Profile</h5>
    <input type="submit" name="prof" class="btn btn-primary" value="click here">
  </div>
</div>

<div class="card mt-5 ms-5 me-5" style="width: 15rem;float:left">
  <img src="https://i.pinimg.com/564x/88/3b/4b/883b4b72846a83bcfe03ae189a431922.jpg" height="225rem" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Booking</h5>
    <input type="submit" name="book" class="btn btn-primary" value="click here">
  </div>
</div>

<div class="card mt-5 ms-5" style="width: 15.5rem;float:left">
  <img src="https://i.pinimg.com/564x/73/39/07/7339073747d17becbe63795ca5ac9afe.jpg" height="225rem" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Settings</h5>
    <input type="button" name="sett" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" value="click here">
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="eg" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" style="margin-left: 11rem;" id="eg">Settings</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div style="margin-left: 4rem;">
            Email:
            <input type="text"  name="email"><br><br>    
        </div>
        
        Old password:
        <input type="text" name="oldpass"><br><br>

        New password:
        <input type="text" name="newpass"><br><br>

        <div style="margin-right: 2rem;">
            Confirm password:
            <input type="text" name="confpass"><br><br>
        </div>
      </div>
      <input type="submit" class="btn btn-primary mb-2" value="Save" name="change" style="width: 5rem; border-radius: 0.58rem;margin-left: 13rem;">
    </div>
  </div>
</div>
</form>

</center>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    </body>
    </html>