<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/source/css/admin-panel-style.css">
    <title>Admin panel</title>
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
            <div class="row main__title-row">
                <h1 class="main__title">Our Team</h1>
            </div>

            <div class="row main__content-row">
                <div class="col-6 main__persones">
                    <button type="button" class="btn main__add-person">Add new person</button>
                    <div class="row main__person">
                        <div class="col">
                            <p class="main__person-info">Jessica Alba - CEO</p>
                        </div>
                        <div class="col-lg-1 col-md-2 main__person-btn">
                            <a href="#edit"><img src="/resources/images/admin/edit.svg" alt="Edit"></a>
                        </div>
                        <div class="col-lg-1 col-md-2 main__person-btn">
                            <a href="#delete"><img src="/resources/images/admin/delete.svg" alt="Delete"></a>
                        </div>
                    </div>
                    <div class="row main__person">
                        <div class="col">
                            <p class="main__person-info">Al Rayhan - Ul Designer</p>
                        </div>
                        <div class="col-lg-1 col-md-2 main__person-btn">
                            <a href="#edit"><img src="/resources/images/admin/edit.svg" alt="Edit"></a>
                        </div>
                        <div class="col-lg-1 col-md-2 main__person-btn">
                            <a href="#delete"><img src="/resources/images/admin/delete.svg" alt="Delete"></a>
                        </div>
                    </div>
                    <div class="row main__person">
                        <div class="col">
                            <p class="main__person-info">Jamal Hammer - Junior</p>
                        </div>
                        <div class="col-lg-1 col-md-2 main__person-btn">
                            <a href="#edit"><img src="/resources/images/admin/edit.svg" alt="Edit"></a>
                        </div>
                        <div class="col-lg-1 col-md-2 main__person-btn">
                            <a href="#delete"><img src="/resources/images/admin/delete.svg" alt="Delete"></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <footer class="footer mt-auto">
        <div class="container footer__container">
            <p class="footer__copyright">© PerfectLine</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>