<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restablecer contraseña</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link href="/css/pymntStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
  <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</head>
<body>
  <div class="form-gap" style="padding-top: 70px;"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="card">
          <div class="card-body">
            <div class="text-center">
              <div class="loader-container" style="display:none;">
                <span class="loader"></span>
              </div>
              <div id="alertContainer"></div> <!--mostrar Alerts-->
              <h3><i class="fa fa-lock fa-4x"></i></h3>
              <h2 id="titleText" class="text-center">¿Olvidó su contraseña?</h2>
              <p>Coloque su correo registrado al portal</p>
              <div class="panel-body">
                <!-- <form id="register-form" role="form" autocomplete="off" class="form">  -->
                  <div class="form-group">
                    <div class="input-group" id='divGroup'>
                      <span class="input-group-text"><i class="fa fa-envelope color-blue"></i></span>
                      <input id="email" name="email" placeholder="Correo electrónico" style="box-shadow: 0 0 0 0.15rem rgba(0,123,255,.25);" class="form-control"  type="email">
                    </div>
                  </div>
                  <div class="form-group mb-3 my-3">
                    <button id="restablecerPass" name="restablecerPass" class="btn btn-lg btn-primary btn-block" disabled type="button">Restablecer contraseña</button>
                  </div>
                <!-- </form> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="modalPass" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
      </div>
      <div class="modal-body">
        <p id="textFot"></p>
      </div>
    </div>
  </div>
</div>

</body>
<footer>
  <script src="/js/forgotPass.js"></script>
  <script src="/js/jquery-3.5.0.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="/js/alertsDinamic.js"></script> 
</footer>
</html>
