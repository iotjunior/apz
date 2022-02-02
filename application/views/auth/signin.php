<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo base_url('assets/bootstrap5/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <title>Sign In</title>
</head>
<body>
  
  <div class="container">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
      <div class="col-md-5">
        <div class="card shadow">
          <img src="<?= base_url('assets/images/smarthome.png'); ?>" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title fw-bold">Sign In to IoTInventor</h5>
            <form action="" class="mt-3" method="post">
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="**********">
              </div>
              <button type="submit" class="btn btn-success fw-bold">Sign In</button>
              <a href="<?= site_url('auth/signup'); ?>" class="btn btn-light">Sign Up</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?php echo base_url('assets/bootstrap5/js/bootstrap.min.js') ?>"></script>
</body>
</html>