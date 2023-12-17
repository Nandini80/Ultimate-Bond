<!doctype html>
<html lang="en">
  <head>
    <title>CheckUp Dashboard</title>
    <link rel="stylesheet" href = "checkupstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body style="background-image: url('https://i.pinimg.com/564x/07/6c/c0/076cc0969868ecd40bc47aa9291796e1.jpg');">
  <div class="background">
   <form action="checkupRes.php" method="post">
   <center><h1 class="mt-5" style="color:black">CHECKUP DASHBOARD</h1>
  <div class="card mt-5 offset-md-1 me-5" style="width: 15rem;float:left">
  <img src="https://i.pinimg.com/564x/01/4e/f2/014ef2f860e8e56b27d4a3267e0a193a.jpg" class="card-img-top" alt="not available  ">
  <div class="card-body">
    <h5 class="card-title">Profile</h5>
    <input type="submit" name="prof" class="btn btn-primary" value="click here">
  </div>
</div>

<div class="card mt-5 ms-5 me-5" style="width: 15rem;float:left">
  <img src="https://i.pinimg.com/564x/fa/4a/94/fa4a94c68040af84ddefda74a24642b9.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Set Appointment</h5>
    <input type="submit" name="appoint" class="btn btn-primary" value="click here">
  </div>
</div>

<div class="card mt-5 ms-5" style="width: 15rem;float:left">
  <img src="https://i.pinimg.com/564x/81/28/84/812884c1d548a79ef5a606b3ac73c5f2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Settings</h5>
    <input type="button" name="sett" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" value="click here">
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="eg" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" >
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

</center>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>
</html>
