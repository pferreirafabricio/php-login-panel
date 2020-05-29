<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Panel</title>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/lux/bootstrap.min.css" rel="stylesheet" integrity="sha384-smnSwzHqW1zKbeuSMsAM/fMQpkk7HY11LuHiwT8snL/W2QBoZtVCT4H5x1CEcJCs" crossorigin="anonymous">
</head>

<body>

    <main class="container">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                    <div class="card card-signin my-5">
                        <div class="card-body" id="form-login" style="display: block;">
                            <h5 class="card-title text-center">Sign In</h5>
                            <form>
                                <div class="form-label-group mb-3">
                                    <label for="txtEmailLogin">Email address</label>
                                    <input type="email" id="txtEmailLogin" class="form-control" placeholder="Email address" required autofocus>
                                </div>

                                <div class="form-label-group mb-3">
                                    <label for="txtPasswordLogin">Password</label>
                                    <input type="password" id="txtPasswordLogin" class="form-control" placeholder="Password" required>
                                </div>

                                <button class="btn btn-primary btn-block text-uppercase" type="submit">Sign in</button>
                                <button class="btn btn-info btn-block text-uppercase" type="button" onclick="$('#form-login').hide();$('#form-register').show();">Register</button>
                            </form>
                        </div>
                        <div class="card-body" id="form-register" style="display: none;">
                            <h5 class="card-title text-center">Register</h5>
                            <form>
                                <div class="form-label-group mb-3">
                                    <label for="txtName">Name</label>
                                    <input type="text" id="txtName" class="form-control" placeholder="Your name" required autofocus>
                                </div>
                                <div class="form-label-group mb-3">
                                    <label for="txtEmailRegister">Email address</label>
                                    <input type="email" id="txtEmailRegister" class="form-control" placeholder="Email address" required>
                                </div>

                                <div class="form-label-group mb-3">
                                    <label for="txtPasswordRegister">Password</label>
                                    <input type="password" id="txtPasswordRegister" class="form-control" placeholder="Password" required>
                                </div>

                                <button class="btn btn-primary btn-block text-uppercase" type="submit">Register</button>
                                <button class="btn btn-info btn-block text-uppercase" type="button" onclick="$('#form-login').show();$('#form-register').hide();">Back</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>