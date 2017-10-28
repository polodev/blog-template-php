<?php require 'partials/header.php'; ?>
<div class="container full-height">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card ">
        <div class="card-header">
          <h2>Register here</h2>
        </div>
        <div class="card-body">
          <form action="" method="post" class="from" id="signupForm">
            <div class="form-group">
              <label for="first_name">First Name</label>
              <input type="text" name="first_name" id="first_name" class="form-control">
            </div>
            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" name="last_name" id="last_name" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">password</label>
              <input  type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="confirm_password">Confirm Password</label>
              <input type="password" name="confirm_password" id="confirm_password" class="form-control">
            </div>
            <div class="form-group">
              <button class="btn btn-info" type="submit">Sign Up</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
    
  </div>
</div>
<?php require 'partials/footer.php'; ?>
