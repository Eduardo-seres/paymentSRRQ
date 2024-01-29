<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Seres de Riqueza</title>
    <link rel="stylesheet" href="/css/pymntStyle.css">
    <!-- Cargar boost -->
</head>
<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-12 col-lg-10">
                <div class="card card0 rounded-0">
                    <div class="row">
                        <div class="col-md-5 d-block p-0 box">
                            <div class="card rounded-0 border-0 card1 pr-xl-4 pr-lg-3">
                                <img src="https://i.imgur.com/oof8BHJ.png" height="572px">
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 p-0 box">
                            <div class="card rounded-0 border-0 card2">
                                <div class="form-card">
                                    <h2 id="heading" class="">Your payment details</h2>
                                    <label class="pay">Name</label> <input type="text" name="holdername" placeholder="John Smith">
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="pay">Card Number</label>
                                            <input type="text" name="cardno" id="cr_no" placeholder="0000 0000 0000 0000" minlength="19" maxlength="19">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-9 col-md-7">
                                            <label class="pay">Expiration Date</label>
                                            <div class="col-12 pl-0">
                                                <select class="list-dt pr-3 mr-4 mr-md-2 mr-lg-3" id="month" name="expmonth">
                                                    <option selected>Month</option>
                                                    <option>January</option>
                                                    <option>February</option>
                                                    <option>March</option>
                                                    <option>April</option>
                                                    <option>May</option>
                                                    <option>June</option>
                                                    <option>July</option>
                                                    <option>August</option>
                                                    <option>September</option>
                                                    <option>October</option>
                                                    <option>November</option>
                                                    <option>December</option>
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
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input" checked="true"> <label for="chk1" class="custom-control-label">Save my card for future purchases</label> </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6"> <input type="submit" value="PAY NOW" class="btn btn-success"> </div>
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
</html>