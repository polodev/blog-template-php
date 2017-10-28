<?php require 'partials/header.php'; ?>
<div class="container full-height">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card ">
        <div class="card-header">
          <h2>Please Sign In</h2>
        </div>
        <div class="card-body">
          <form action="" method="post" class="from" id="signinForm">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">password</label>
              <input  type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
              <button class="btn btn-info" type="submit">Sign In</button>
            </div>
          </form>
        </div>
        
      </div>
    </div>
    
  </div>
</div>
<?php require 'partials/footer.php'; ?>
