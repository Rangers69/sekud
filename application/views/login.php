<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sekud | Dashboard</title>
    <!-- Bootstrap -->
    <link href="<?= base_url('asset1/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('asset1/css/style.css') ?>">
    <style type="text/css">
        .container {
            margin-top: 100px;
        }

        body {
            background-image: url('./asset1/img/img-4.jpg');
            background-size: cover;
        }

        h1 {
            color: #fff;
        }
    </style>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="text-center"></h1>
                <div class="panel panel-default">
                    <div class="panel-heading">SILAHKAN MASUK</div>
                    <div class="panel-body">
                        <?= $this->session->flashdata('msg'); ?>
                        <form action="<?= base_url('auth/process') ?>" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                                <?= form_error('pass', '<small class="text-danger pl-3">', '</small>') ?>
                            </div>
                            <button type="submit" name="tombol" class="btn btn-danger"><i class="glyphicon glyphicon-log-in"></i> Masuk</button>
                        </form><br>
                    </div>
                    <div class="panel-footer">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins -->
    <script src=<?= base_url('asset1/js/jquery.min.js') ?>></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src=<?= base_url('asset1/js/bootstrap.min.js') ?>></script>
</body>

</html>