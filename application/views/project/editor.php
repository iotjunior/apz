<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $this->load->view('partials/head.php'); ?>
  <title>Editor: IoT Inventor</title>
</head>
<body onbeforeunload="alert('ups')">
  
  <?php $this->load->view("partials/navbar.php"); ?>
  <table>
      <tr>
        <td id="blocklyArea">
        </td>
      </tr>
  </table>
  <div id="blocklyDiv" style="position: absolute"></div>
  <!-- Modal -->
  <div class="modal fade" id="modalCompile" tabindex="-1" aria-labelledby="modalCompile" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Compile to Microcontroller</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="fs-5">
            Launch the IoT Inventor Plugin on your computer and 
            then use this code to compile and upload directly 
            to your microcontroller.
          </p>
          <p class="fs-3 text-success text-center" id="pCode"></p>
        </div>
      </div>
    </div>
  </div>


  <?php $this->load->view("boards/" . $project->board_name . "/" . $project->toolbox_file) ?>
  <?php $this->load->view("boards/DEFAULT/global.php"); ?>
  <?php $this->load->view("boards/DEFAULT/blockly_workspace.php"); ?>
  <?php $this->load->view("boards/DEFAULT/blockly_definitions.php"); ?>
  <?php $this->load->view("boards/DEFAULT/blockly_generators.php"); ?>
  
  <?php foreach($defgens as $defgen): ?>
    <?php $this->load->view("boards/" . $project->board_name . "/definitions/" . $defgen->file); ?>
    <?php $this->load->view("boards/" . $project->board_name . "/generators/" . $defgen->file); ?>
  <?php endforeach; ?>
  
</body>
</html>