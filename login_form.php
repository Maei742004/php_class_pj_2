<?php include("layouts/head.php"); ?>

   <body>
    <?php include("layouts/navbar.php"); ?>
    <div class="container">
     <div class="row">
      <div class="col-lg-8 mt-3">
      <div class="card">
    <h1>User login</h1>
       </div>
       <div class="card-bod">
       <form action="actions/login.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  
  <input type="submit" name="login" class="btn btn-primary" value="Login">
       </div>
      </div>
      <div class="col-lg-4 mt-3">
      
      </div>
     </div>
    </div>
    <?php include("layouts/footer.php"); ?>