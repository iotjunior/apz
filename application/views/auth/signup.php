<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo base_url('assets/bootstrap5/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <title>Sign Up</title>
</head>
<body>
  <div class="container">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
      <div class="col-md-5">
        <div class="card shadow">
          <img src="<?= base_url('assets/images/smarthome.png'); ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title fw-bold">Sign Up IoTInventor.org</h5>
            <form action="" class="mt-3" method="post">
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="**********">
              </div>
              <div class="row mb-3">
                <div class="col">
                  <label class="form-label">First Name</label>
                  <input type="text" name="first_name" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                  <label class="form-label">Last Name</label>
                  <input type="text" name="last_name" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
              </div>
              <button type="submit" class="btn btn-primary fw-bold">Sign Up</button>
              <a href="<?= site_url('auth'); ?>" class="btn btn-light">Back to sign in</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('assets/bootstrap5/js/bootstrap.min.js') ?>"></script>
</body>
</html>