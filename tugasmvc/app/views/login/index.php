<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="http://localhost/tugasmvc/public/style/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Barlow+Condensed:wght@500&family=Livvic:wght@300&family=Quicksand:wght@700&family=Viga&display=swap" rel="stylesheet">
</head>

<body>
    <!-- background -->
    <div class="container-fluid background">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-transparent mb-0">
                            <h5 class="text-center">Please <span class="font-weight-bold text-primary">LOGIN</span></h5>
                        </div>
                        <div class="card-body">
                            <form action="<?= BASEURL; ?>/home/index">
                                <div class="form-group">
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Email" autocomplete="off" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" autocomplete="off" required>
                                </div>
                                <div class="form-group custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="" value="Login" class="btn btn-primary btn-block">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="<?= BASEURL; ?>/js/bootstrap.js"></script>
    <script src="<?= BASEURL; ?>/js/script.js"></script>
</body>

</html>