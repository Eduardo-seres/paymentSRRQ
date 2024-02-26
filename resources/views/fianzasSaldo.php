<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finanzas Saldo</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="/css/finanzasStyle.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <div class="row">
    <div class="loader-container" style="display:none;">
      <span class="loader"></span>
    </div>
    <div id="alertContainer"></div> <!--mostrar Alerts-->
    <div class="col-md-6 offset-md-3">
      <h2 class="mb-4" id="tittleR">Reporte de Saldos Stripe</h2>
      <!-- <form id='formWb'> -->
        <div class="form-group row">
          <div class="col-md-6">
            <label for="fecha1" class="col-form-label">Fecha inicial:</label>
            <div class="input-group">
              <input type="date" class="form-control" id="fechaIni">
            </div>
          </div>
          <div class="col-md-6">
            <label for="fecha2" class="col-form-label">Fecha final:</label>
            <div class="input-group">
              <input type="date" class="form-control" id="fechaFin">
            </div>
          </div>
        </div>
        <div class="form-group row justify-content-center mt-3">
          <button id='btnFinn' type="button" class="btn btn-primary btn-block">Enviar</button>
        </div>
      <!-- </form> -->
    </div>
  </div>
</div>

<!-- Bootstrap JS -->

</body>
<footer>
  <script src="/js/jquery-3.5.0.js"></script>
  <script src="/js/fnzSaldo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="/js/alertsDinamic.js"></script>
</footer>
</html>
