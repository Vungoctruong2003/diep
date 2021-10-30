<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .well
        {
            padding: 35px;
            padding-left: 30px;
            box-shadow: 0 0 10px #666666;
            margin: 4% auto 0;
            width: 450px;
        }

        body
        {
            background-color:  #dedede;
        }

        .input-group-addon
        {
            background-color: #ffde6c;
            color: #d17d00;
        }
    </style>
</head>
<body>

<form action="#" name="myForm" method="post">
    <div class="container-fluid">
        <div class="row">
            <div class="well center-block">
                <div class="well-header">
                    <h3 class="text-center text-success"> Register Here! </h3>
                    <hr>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <input type="text" placeholder="First Name" name="txtfname" class="form-control">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-user"></i>
                                </div>
                                <input type="text" placeholder="Last Name" name="txtlname" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-lock"></i>
                                </div>
                                <input type="password" minlength="8" maxlength="20" placeholder="Password" name="txtpass" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-phone"></i>
                                </div>
                                <input type="number" minlength="10" maxlength="12" class="form-control" name="txtmobile" placeholder="Mobile No.">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-envelope"></i>
                                </div>
                                <input type="email" class="form-control" name="txtmail" placeholder="E-Mail">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-list-alt"></i>
                                </div>
                                <textarea class="form-control" name="txtadd" placeholder="Address"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="glyphicon glyphicon-calendar"></i>
                                </div>
                                <input type="text" name="dob" placeholder="Date Of Birth" class="form-control" id="datepicker">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row widget">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        <button class="btn btn-warning btn-block"> Submit </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>