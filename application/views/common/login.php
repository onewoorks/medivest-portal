
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Medivest | POC</title>

        <!-- Bootstrap core CSS -->
        <link href="<?= SITE_ROOT; ?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?= SITE_ROOT; ?>assets/css/login.css" rel="stylesheet">
    </head>

    <body class="text-center">
        <div class='card'>
            <div class='card-body'>
                <form method='POST' class="form-signin">
                    <img class="mb-4" src="<?= SITE_ROOT; ?>images/logo2.jpeg" alt="" height="72">
                    <h2 class="h5 mb-3 font-weight-normal">Please sign in</h2>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" autocomplete="off" 
                           class="form-control text-center" placeholder="Email address" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control text-center" placeholder="Password" required>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted"><?= date('Y'); ?> &copy; | <a href='https://onewoorks.com/' target='_blank'>onewoorks solutions</a></p>
                </form>
            </div>
        </div>

    </body>
</html>
