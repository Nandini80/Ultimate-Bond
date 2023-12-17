<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
      <header>
        <h1 style="margin-top:1.7rem;">Ultimate<span>Bond</span></h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active offset-md-2" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle offset-md-2" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Our services
                            </a>
                            <ul class="dropdown-menu offset-md-2">
                                <li><a class="dropdown-item" href="#">TakeCare</a></li>
                                <li><a class="dropdown-item" href="#">Checkup</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ms-3">
                            <a class="nav-link offset-md-3" href="#foot">AboutUs</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Terms and Conditions</a>
                        </li> -->
                    </ul>
                    
                        <button class="btn btn-outline-success offset-md-11" type="button" data-bs-toggle="modal"
                           data-bs-target="#sign">SignUP</button>
                        <!-- Signup modal -->
                        <div class="modal fade" id="sign" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 offset-md-4 fs-4" id="exampleModalLabel">SIGNUP HERE
                                        </h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <form method="post" action="signup.php">
                                        <div class="modal-body mt-2">
                                            <label class="ms-1">Email id</label><br>
                                            <div class="input-group mb-3 mt-1">
                                                <input type="text" class="form-control" name="email" required
                                                    placeholder="user Email address"><br>
                                            </div>
                                            <label class="ms-1 mt-2">Password</label><br>
                                            <div class="input-group mb-3 mt-1">
                                                <input type="password" class="form-control" name="pass" required
                                                    placeholder="enter your password">
                                            </div>
                                            <div class="dropdown">
                                                <select class="btn btn-success dropdown-toggle mt-2" name="arr[]" required>
                                                    <option class="dropdown-item btn-link" value="" selected disabled>select</option>
                                                    <option class="dropdown-item btn-link" value="care" >Pet Care</option>
                                                    <option class="dropdown-item btn-link" value="checkup">CheckUp</option>
                                                </select>
                                            </div>
                                        </div>
    
                                        <div class="offset-md-5 mb-4">
                                            <button type="submit" name="sign" class="btn btn-primary">Signup</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
    
                        <button class="btn btn-outline-success ms-5 me-3 " type="button" data-bs-toggle="modal"
                            data-bs-target="#login">Login</button>
                        <!-- Login  Modal  -->
                        <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 offset-md-4 fs-4" id="exampleModalLabel">LOGIN HERE</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                     <form action="login.php" method="post">
                                        <div class="modal-body mt-2">
                                            <label class="ms-1">Email id</label><br>
                                            <div class="input-group mb-3 mt-1">
                                                <input type="text" class="form-control" name="email1"
                                                    placeholder="user Email address"><br>
                                            </div>
                                            <label class="ms-1 mt-2">Password</label><br>
                                            <div class="input-group mb-3 mt-1">
                                                <input type="password" class="form-control" name="pass1"
                                                    placeholder="enter your password">
                                            </div>
                                        </div>
                                        <div class="offset-md-5 mb-4">
                                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                                        </div>
                                    </form>
                                </div> 
                            </div>
                        </div>
                </div>
            </div>
        </nav>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
      </header>
      <div class="txt">
        <h3>where your pets <br><span>feel at home </span> <br>Pet World</h3>
        <p>Your pets will feel right at home here, receiving the care and attention they deserve. Come in without hesitation; we're ready to make them feel like part of the family.</p>
        
      </div>
      <div class="box a"></div>
      <div class="box b"></div>
      <!-- <h4>design by <br> The Ultimate Bond</h4> -->
    </div>
    <footer class="footer" style="background-image: url('./assets/images/footer-bg.jpg')" id="foot">

        <div class="footer-top section">
          <div class="container">
    
            <div class="footer-brand">
    
              <a href="#" class="logo">The Ultimate Bond</a>
    
              <p class="footer-text">
                If you have any question, please contact us at <a href="mailto:support@gmail.com"
                  class="link">support@gmail.com</a>
              </p>
    
              <ul class="contact-list">
    
                <li class="contact-item">    
                  <address class="address">
                    Jaypee institute of Information technology, Noida
                  </address>
                </li>
    
                <li class="contact-item">    
                  <a href="tel:+918054821129" class="contact-link">(+91) 8054821129</a>
                </li>
    
              </ul>
    
                      </div>
    
            <ul class="footer-list">
    
              <li>
                <p class="footer-list-title">Corporate</p>
              </li>
    
              <li>
                <a href="#" class="footer-link">Careers</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">About Us</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Contact Us</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">FAQs</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Vendors</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Affiliate Program</a>
              </li>
    
            </ul>
    
            <ul class="footer-list">
    
              <li>
                <p class="footer-list-title">Information</p>
              </li>
    
              <li>
                <a href="#" class="footer-link">Online Store</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Privacy Policy</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Refund Policy</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Shipping Policy</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Terms of Service</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Track Order</a>
              </li>
    
            </ul>
    
            <ul class="footer-list">
    
              <li>
                <p class="footer-list-title">Services</p>
              </li>
    
              <li>
                <a href="#" class="footer-link">Grooming</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Positive Dog Training</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Veterinary Services</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Petco Insurance</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Pet Adoption</a>
              </li>
    
              <li>
                <a href="#" class="footer-link">Resource Center</a>
              </li>
    
            </ul>
    
          </div>
        </div>
    
        <div class="footer-bottom">
          <div class="container">
    
            <p class="copyright">
              &copy; 2023 Made with ♥ by <a href="#" class="copyright-link">The Ultimate Bond Team (Nandini,Manya,Ashish,Kriti).</a>
            </p>    
          </div>
        </div>
    
      </footer>
    
    
    
    
    
      <!-- 
        - #BACK TO TOP
      -->
    
      <a href="#top" class="back-top-btn" aria-label="back to top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
      </a>
    
    </body>
    
    </html>
</body>
</html>