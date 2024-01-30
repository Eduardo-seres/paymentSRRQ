<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Seres de Riqueza</title>
    <link rel="stylesheet" href="/css/pymntStyle.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Cargar boost -->
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-12 col-lg-10">
                <div class="card card0 rounded-0">
                    <div class="row">
                        <div class="col-md-5 d-block">
                        <!-- <div class="col-md-5 d-block p-0 box"> -->
                            <div class="card rounded-0 border-0 card1 pr-xl-4 pr-lg-3">
                                <img src="/assets/img/product.png" height="100%">
                            </div>
                            <h3 class="d-flex justify-content-center" style="margin-top:2%">INSTRUCCIONES</h3>
                            <strong><i class="fa fa-check" aria-hidden="true"></i> Paso 1</strong>
                        </div>
                        <div class="col-md-7 col-sm-12 p-0 box">
                            <div class="card rounded-0 border-0 card2">
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-9 col-md-7">
                                            <h2 id="heading" class="">Riqueza Infinita</h2>
                                        </div>
                                        <div class="col-3" style="margin-top:2%;">
                                            <label class="pay">$4997</label>
                                        </div>
                                    </div>
                                        
                                    <!-- <div class="col-md-12">
                                        <h2 id="heading" class="">Riqueza Infinita</h2>
                                        <label class="pay">$4997</label>
                                    </div> -->
                                    <label class="pay">Nombre</label> <input type="text" name="holdername" placeholder="Juán Lopéz">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="pay">Número de tarjeta</label>
                                            <input type="text" name="cardno" id="cr_no" placeholder="0000 0000 0000 0000" minlength="19" maxlength="19">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9 col-md-7">
                                            <label class="pay">Fecha de expiración</label>
                                            <div class="col-12 pl-0">
                                                <select class="list-dt pr-3 mr-4 mr-md-2 mr-lg-3" id="month" name="expmonth">
                                                    <option selected>Mes</option>
                                                    <option>Enero</option>
                                                    <option>Febrero</option>
                                                    <option>Marzo</option>
                                                    <option>Abril</option>
                                                    <option>Mayo</option>
                                                    <option>Junio</option>
                                                    <option>JulIO</option>
                                                    <option>Agosto</option>
                                                    <option>Septiembre</option>
                                                    <option>Octubre</option>
                                                    <option>Noviembre</option>
                                                    <option>Diciembre</option>
                                                </select>
                                                <select class="list-dt pr-3" id="year" name="expyear">
                                                    <option selected>Year</option>
                                                    <option>2015</option>
                                                    <option>2016</option>
                                                    <option>2017</option>
                                                    <option>2018</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-3 col-md-5">
                                            <label class="pay">CVV</label>
                                            <input type="password" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="placeicon" minlength="3" maxlength="3">
                                        </div>
                                    </div>
                                    <!-- <div class="row form-group">
                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input" checked="true"> <label for="chk1" class="custom-control-label">Save my card for future purchases</label> </div>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-md-12"> <input type="submit" value="PAGAR AHORA" class="btn btn-success"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <script src="/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/js/jquery-3.5.0.js"></script>
    <script src="/js/pymt.js"></script>
    <script src="/js/all.min.js"></script>
</footer>
</html>