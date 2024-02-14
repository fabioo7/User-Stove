<!DOCTYPE html>
<html lang="br">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <meta charset="UTF-8">
  <title>Test</title>
</head>

<body style="margin-left: 30px; margin-top: 20px;"><br>


  <div style="position: absolute; padding-left: 480px; padding-top: 10px;">
    <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" id="ovenSwitch" onchange="toggleOven()">
      <label class="form-check-label" for="ovenSwitch">Forno</label>
    </div>
  </div>
  <div style="position: absolute; padding-left: 350px; padding-top: 10px;">
    <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" id="lightbulbSwitch" onchange="toggleLightbulb()">
      <label class="form-check-label" for="lightbulbSwitch">Lâmpada</label>
    </div>
  </div>
 
  <div class="card text-bg-success mb-3" style="max-width: 18rem;">
    <div class="card-header">Fogão</div>
    <div class="card-body">
      <div id="data" style="position: absolute;"></div>
      <br><br><br><br><br><br><br><br>
    </div>
  </div>


  <div id="output" style="position: absolute; left: 200px;"></div>
  <canvas id="stoveCanvas" width="500" height="600" style="margin-top: -510px; margin-left: 250px;"></canvas>
  <div id="output"></div>

</body>
<script src="https://fabiorangel.com.br/api_users/public/js/fogao.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>