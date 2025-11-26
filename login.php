<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>LE login</title>
</head>
<body>
    <main>
        <div class="page-login">
            <div class="flex">
                <div class="auth-page-form">
                    <div class="text-center">
                        <h1 class="auth-page-title">Login</h1>
                        <form action="" method="post">
                            <div class="form-group">
                                <input type="password" placeholder="Your password">
                            </div>
                            <div class="text-right mb-medium">
                                <a href="/passwd-reset.html" class="auth-page-passwd-reset">Reset Password</a>
                            </div>
                            <button class="btn btn-primary btn-login w-full">Login</button>
                            <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                                <button class="btn btn-default flex justify-center items-center gap-1">
                                    <img src="asset/img/google.png" alt="">" Google"
                                </button>
                                <button class="btn btn-default flex justify-center items-center gap-1">
                                    <img src="asset/img/facebook.png" alt="">" Facebook"
                                </button>
                            </div>
                            <div class="login-form-dont-have-account">
                                Don't have an account? -
                                <a href="./signup.html">Click here to create one</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="auth-page-img">
                    <img src="asset/img/car-png-39071.png" alt="" class="img-responsive">
                </div>
            </div>
        </div>
    </main>
</body>
</html>