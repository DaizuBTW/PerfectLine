<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/source/css/admin-panel-style.css">
    <title>Edit person</title>
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
                <form class="form" action="/controller/admin/update-info-person.php" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="id" value="<?= $personId ?>">
                    <input type="hidden" name="oldImage" value="<?= $emploee['Image'] ?>">
                    <a href="/resources/views/admin/admin-panel.php"><img class="form__close" src="/resources/images/admin/cross.svg" alt="Exit"></a>
                    <h1 class="form__name">Edit person</h1>

                    <div class="row form__row">
                        <label for="name" class="col-sm col-12 form__input-name">Name</label>
                        <input class="col-9 form__input" type="text" id="name" name="name" value="<?= $emploee['Name'] ?>">
                    </div>
                    <div class="row form__row">
                        <label for="position" class="col-sm col-12 form__input-name">Position</label>
                        <input class="col-9 form__input" type="text" id="position" name="position" value="<?= $emploee['Position'] ?>">
                    </div>
                    <div class="row form__row">
                        <label for="description" class="col-sm col-12 form__input-name">Description</label>
                        <textarea class="col-9 form__textarea" type="text" id="description" name="description" placeholder="I'm an expert in Graphics, Website and can also develop sites in WordPress, JQuery."><?= $emploee['Info'] ?></textarea>
                    </div>
                    <div class="row form__row">
                        <label for="photo" class="col-sm col-12 form__input-name">Photo</label>
                        <label class="col-9 form__input form__label">
                            <span class="form__input-span" id="photo-span">Choose file</span>
                            <input class="form__input-file" type="file" id="photo" name="photo" accept=".jpg,.jpeg,.png">
                            <span class="btn form__input-btn">Browse</span>
                        </label>
                    </div>
                    <div class="row form__row">
                        <label for="instagrm" class="col-sm col-12 form__input-name">Instagram</label>
                        <input class="col-9 form__input" type="text" id="instagram" name="instagram" value="<?= $emploee['LinkInstagram'] ?>">
                    </div>
                    <div class="row form__row">
                        <label for="facebook" class="col-sm col-12 form__input-name">Facebook</label>
                        <input class="col-9 form__input" type="text" id="facebook" name="facebook" value="<?= $emploee['LinkFacebook'] ?>">
                    </div>
                    <div class="row form__row">
                        <label for="mail" class="col-sm col-12 form__input-name">Mail</label>
                        <input class="col-9 form__input" type="email" id="mail" name="mail" value="<?= $emploee['LinkEmail'] ?>">
                    </div>

                    <input class="btn form__submit-btn" type="submit" value="Save">
                </form>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container footer__container">
            <p class="footer__copyright">© PerfectLine</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous">
    </script>
    <script>
        const photo = document.querySelector('[name="photo"]');
        photo.addEventListener("change", changeFileName, event);

        function changeFileName(event) {
            event.preventDefault();
            const photoSpan = document.querySelector('[id="photo-span"]');
            const fileName = photo.files[0].name;
            if (fileName.length > 12) {
                const fileNameStart = fileName.slice(0, 5);
                const fileNameEnd = fileName.slice(-6, fileName.length);
                photoSpan.innerHTML = fileNameStart + "..." + fileNameEnd;
            } else {
                photoSpan.innerHTML = fileName;
            }
        }
    </script>
</body>

</html>