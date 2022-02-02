<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $this->load->view('partials/head.php'); ?>
  <title>My Projects</title>
</head>
<body>
  <?php $this->load->view("partials/navbar.php"); ?>
  <div class="container mt-4">
    <div class="row"></div>
  </div>
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-3"> 
        <div class="card bg-primary shadow-sm border-light">
          <div class="card-body ">
            <h5 class="card-title bg-primary text-white">Hi, <?= $this->session->userdata("first_name"); ?></h5>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item"><?= $this->session->userdata("email"); ?></li>
            <li class="list-group-item">
              <?= $this->session->userdata("first_name"); ?>
              <?= $this->session->userdata("last_name"); ?>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-9">
        <h4 class="fw-bold">My Latest Projects</h4>
        <?php if (!empty($projects)): ?>
        <p>
          Hi, <?= $this->session->userdata("first_name"); ?>. 
          The following is a collection of your most recent projects. 
          You can see all your projects just by clicking the More button.
        </p>
        <?php $this->load->view("dashboard/components/project_list.php"); ?>
        <?php endif; ?>
        <?php if (empty($projects)): ?>
          <?php $this->load->view("dashboard/components/empty.php"); ?>
        <?php endif; ?>
        <?php if (!empty($publications)): ?>
          <h4 class="fw-bold mt-4">My Latest Publications</h4>
          <p>
            Also, The following is a collection of your most recent publications. 
            You can see all your publications just by clicking the More button.
          </p>
          <?php $this->load->view("dashboard/components/publication_list.php"); ?>
       <?php endif; ?>
       <?php if (empty($publications)): ?>
          <h4 class="fw-bold mt-4">My Latest Publications</h4>
          <?php $this->load->view("dashboard/components/empty.php"); ?>
       <?php endif; ?>
      </div>
    </div>
  </div>
</body>
</html>
