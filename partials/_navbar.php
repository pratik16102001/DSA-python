<?php


echo '
<div class="sticky-lg-top nav-container" style="z-index: 1">
  <nav class="navbar navbar-expand-lg navbar-light nav-background pb-0 pt-0 ">
    <div class="container-fluid ">

      <div class="p-1 my-container">
        <a class="border-0"  id="menu-btn">
          <img id="mainlogo" style="background-color: #cc1a2c; border-radius: 7px;" width="62" height="60" src="images/mechanic3.png">
        </a>
      </div>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="me-auto mb-2 mb-lg-0 navbar-nav">
          <li class="nav-item">
            <a class="my-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="my-link" href="services.php">Services</a>
          </li>
          <li class="nav-item">
            <a class="my-link" href="about.php">About us</a>
          </li>

          <li class="nav-item">
            <a class="my-link" href="contact.php">Contact us</a>
          </li>
        </ul>
        <!-- Appoitment button -->

        <div class="appoitment-button mx-5 my-2">
          <button class="btn btn-custom"><i class="bi bi-calendar2-date mx-3" style="font-size: 20px"></i>Get Appoitment</button>
        </div>

        <!--Login Signup-->
        <div class=" my-2">
          <a class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#loginask" href="./login.php">Sign in</a>
          <a class="btn btn-danger mx-1" data-bs-toggle="modal" data-bs-target="#signask" href="./login.php">Sign up</a>
          </div>
      </div>
    </div>
  </nav>
</div>

';
echo '

<div class="modal fade" id="loginask" tabindex="-1" aria-labelledby="loginaskLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div style="border-radius: 25px; background-color: white" class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <h2 style="text-align: center"><strong>How do you want to Login ?</strong></h2>
      </div>
      <div style="margin:auto" class="modal-footer">
      <a href="login.php" class="btn btn-danger">As a Customer</a>
      <a href="login1.php" class="btn btn-danger">As a Garage Owner</a>
      </div>
    </div>
  </div>
</div>

</div>';
echo '

<div class="modal fade" id="signask" tabindex="-1" aria-labelledby="loginaskLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div style="border-radius: 25px; background-color: white" class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <h2 style="text-align: center"><strong>How do you want to Sign Up ?</strong></h2>
      </div>
      <div style="margin:auto" class="modal-footer">
      <a href="user.php" class="btn btn-danger">As a Customer</a>
      <a href="owner.php" class="btn btn-danger">As a Garage Owner</a>
      </div>
    </div>
  </div>
</div>

</div>';




?>