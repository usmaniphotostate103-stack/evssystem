<?php include('./includes/header.php'); ?>
<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <div class="card ">
        <div class="card-header">
          Login Here
        </div>
        <div class="card-body">
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control">
          </div>
            
          <div class="form-group mt-1" >  
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control">
          </div>  
        </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-danger float-end">Login</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include('./includes/footer.php'); ?>