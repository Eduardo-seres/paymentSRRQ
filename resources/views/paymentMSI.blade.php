<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Seres de Riqueza</title>
    <link rel="stylesheet" href="/css/pymntStyle.css">
    <link rel="stylesheet" href="/css/telStyle.css">
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Cargar boost -->
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-12 col-lg-10">
                <div class="card card0 rounded-0">
                    <div class="row">
                        <div class="col-md-6 d-block">
                        <!-- <div class="col-md-5 d-block p-0 box"> -->
                            <div class="card rounded-0 border-0 card1 pr-xl-4 pr-lg-3">
                                <img src="/assets/img/product.png" height="100%">
                            </div>
                            <h3 class="d-flex justify-content-center" style="margin-top:2%">INSTRUCCIONES</h3>
                            <div class="p-4 bd-highlight" style="margin-top:-4%;"> <strong><i class="fa fa-check" aria-hidden="true"></i> PASO 1.</strong> Completa con tus datos personales el formulario.</div>
                            <div class="p-4 bd-highlight" style="margin-top:-6%;"> <strong><i class="fa fa-check" aria-hidden="true"></i> PASO 2.</strong> Escribe los datos de tu tarjeta de débito o crédito y da clic en <strong>“Adquirir mi curso ahora”</strong>.</div>
                            <div class="p-4 bd-highlight" style="margin-top:-6%;"> <strong><i class="fa fa-check" aria-hidden="true"></i> PASO 3.</strong> Al pagar recibirás automáticamente tus accesos a <strong>Riqueza Infinita</strong> por correo electrónico </div>
                            <div><h1 class="container.container-lg"></h1></div>
                            <div class="col-md-12">
                                <div class="d-flex justify-content-center"><i class="fa_prepended fa fa-support" style="color: rgb(242, 177, 29); height:28px"></i> <strong class=""> &nbsp;&nbsp;¿Necesitas ayuda?</strong></div>
                                <div class="d-flex justify-content-center" style="margin-top:2%;">Envíanos un correo electrónico ahora</div>
                                <div class="d-flex justify-content-center" style="margin-top:1%;"><strong style=" color:rgb(242, 177, 29);">clientes@seresderiqueza.com</strong>&nbsp; | o envía</div>
                                <strong  class="d-flex justify-content-center" style="margin-top:1%;">envía un WhatsApp al +52 55 5620 6438</strong>
                                <div class="d-flex justify-content-center" style="margin-top:4%;"><strong>*Pregunta por nuestros Meses sin intereses *</strong></div>
                                <div class="col-md-12">&nbsp;</div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 col-sm-12 p-0 box"> -->
                        <div class="col-md-6 col-sm-12">
                            <div class="card rounded-0 border-0 card2">
                                <div class="form-card">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="d-inline" style="margin-right: 10px;"><i class="fa-solid fa-circle-check"></i>&nbsp;Riqueza Infinita</h3>
                                            <h2 class="d-inline" style="color: rgb(242, 177, 29);">$4997</h2>
                                        </div>
                                    </div>     
                                    <!-- <div class="col-md-12">
                                        <h2 id="heading" class="">Riqueza Infinita</h2>
                                        <label class="pay">$4997</label>
                                    </div> -->
                                    <!-- <div class="row"> -->             
                                    <form id="card-form">
                                        <!----------------------->
                                        <div class="col-md-12">
                                            <label class="pay" style="margin-top:8%;">Nombre</label> <input type="text" data-conekta="card[name]" name="holdername" placeholder="Juán Lopéz">
                                        </div>
                                        <div class="col-md-12">
                                        <div class="col-md-12">
                                            <label class="pay" style="margin-top:8%;">correo</label> <input type="text" name="holdername" placeholder="juan@seresderiqueza.com">
                                        </div>

                                        <div class="col-md-12">
                                            
                                                <div class="select-box">
                                                    <div class="selected-option">
                                                        <div>
                                                            <span class="iconify" data-icon="flag:mx-4x3"></span>
                                                            <strong>+52</strong>
                                                        </div>
                                                        <input type="tel" name="tel" placeholder="Num. Teléfono">
                                                    </div>
                                                    <div class="options">
                                                        <input type="text" class="search-box"  data-conekta="card[number]" placeholder="Selecciona un país">
                                                        <ol>
                                                        </ol>
                                                    </div>
                                                </div>

                                        </div>
                                            
                                            <!-- <div class="col-md-4">
                                                <label class="pay" style="margin-top:8%;">Telefono</label> <input type="text" name="holdername" placeholder="Teléfono">
                                            </div> -->
                                        <!-- </div> -->

                                        <div class="row">
                                            <div class="col-12">
                                                <label class="pay">Número de tarjeta</label>
                                                <input type="text" data-conekta="card[number]" name="cardno" id="cr_no" placeholder="0000 0000 0000 0000" minlength="16" maxlength="19">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label class="pay">Fecha de expiración</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="month" name="exp_month" size="2" data-conekta="card[exp_month]" placeholder="MM">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">/</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="year" name="expyear" name="exp_year" size="4" data-conekta="card[exp_year]" placeholder="AAAA">
                                                    <label class="pay">CVV</label>
                                                    <input type="password" data-conekta="card[cvc]" name="cvcpwd" placeholder="&#9679;&#9679;&#9679;" class="form-control placeicon" minlength="3" maxlength="3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12" style="margin-top:4%;">
                                                <!-- <form action="/procesar-pago" method="post"> -->
                                                    @csrf <!-- Agrega el token CSRF para protección contra falsificación de solicitudes entre sitios -->
                                                    <input type="submit" value="PAGAR AHORA" class="btn btn-success">
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                       <!----------------------->
                                    </form>
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
    <script src="/js/telFun.js"></script>
    <script src="/js/all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="https://cdn.conekta.io/js/latest/conekta.js"></script>
</footer>

</html>