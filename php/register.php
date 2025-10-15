<?php include('./includes/header.php'); ?>

<div class="container">
  <div class="row">
    <div class="col-lg-4">
      <div class="card">
        <div class="card-header">
          Register Here
        </div>

        <div class="card-body">
          <div class="form-group mb-2">
            <label for="fullname" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fullname" placeholder="Enter Full Name">
          </div>

          <div class="form-group mb-2">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Enter Email">
          </div>

          <div class="form-group mb-2">
            <label for="gender" class="form-label">Gender</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="male" value="Male">
              <label class="form-check-label" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="female" value="Female">
              <label class="form-check-label" for="female">Female</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="gender" id="other" value="Other">
              <label class="form-check-label" for="other">Other</label>
            </div>
          </div>

          <div class="form-group mb-2">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Enter Password">
          </div>

          <div class="form-group mb-2">
            <label for="confirm_password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password">
          </div>
        </div>

        <div class="card-footer">
          <button type="submit" class="btn btn-primary float-end">Register</button>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('./includes/footer.php'); ?>
