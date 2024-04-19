<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="/resources/source/css/admin-panel-style.css">
        <title>Auth</title>
    </head>
    
    <body>
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-dark header__navigation">
                <div class="container-fluid header__navigation-container">
                    <p class="navbar-brand col header__label">AdminPanel</p>
                    <img class="navbar-brand header__logo" src="/resources/images/admin/logo.svg" alt="Logo">
                </div>
            </nav>
        </header>
        <main class="main">
            <div class="container main__container">
                <div class="row main__content-row main__form">
                    <form class="form" action="/controller/check-auth.php" method="post">
                        <h1 class="form__name">Admin Authorization</h1>
                        <div class="row form__auth-row">
                            <label for="username" class="col form__auth-input-name">Login</label>
                        </div>
                        <div class="row form__auth-row">
                            <input type="text" class="col form__auth-input <? if($_POST['wrongInput']) echo "form__input-error" ?>" placeholder="Username" id="username" name="username" required>
                        </div>
                        <div class="row form__auth-row">
                            <label for="password" class="col form__auth-input-name">Password</label>
                        </div>
                        <div class="row form__auth-row">
                            <input type="password" class="col form__auth-input <? if($_POST['wrongInput']) echo "form__input-error" ?>" placeholder="Your password" id="password" name="password" required>
                        </div>
                        <div class="row form__auth-row">
                            <input class="col btn form__auth-submit-btn" type="submit" value="Sign in" name="submit">
                            <span class="col form__auth-error-msg" <? if(!$_POST['wrongInput']) echo "style=\"display: none;\"" ?>>wrong login or password</span>
                        </div>
                        
                    </form>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="container footer__container">
                <p class="footer__copyright">© PerfectLine</p>
            </div>
        </footer>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    </body>
</html>