<?php 
$root = $_SERVER['DOCUMENT_ROOT'];
require "./controller/connection-to-database.php";
require "./model/queries.php";
$db = new Database;
$emploeeTemplatePath = "./resources/views/layouts/person-template.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PerfectLine</title>

    <link rel="stylesheet" href="resources/source/css/style.css">
    <script src="resources/js/fancybox.umd.js"></script>
    <link rel="stylesheet" href="resources/source/css/fancybox.css">
</head>

<body>
    <header class="header">
        <div class="header__container">
            <img class="header__logo" src="resources/images/header/logo-main.svg" alt="PerfectLine">
            <a class="header__link" href="resources/views/admin/forms/auth-form.html" target="_blank">LOGIN FOR
                ADMIN</a>

            <h1 class="header__title">SAY HELLO TO<br><span>PERFECT LINE!</span></h1>
            <form action="#contact">
                <button class="header__button" href="#contact">CONTACT US</button>
            </form>

            <div class="header__logos">
                <img src="resources/images/header/logo-blue.svg" alt="Blue logo">
                <img src="resources/images/header/logo-purple.svg" alt="Purple logo">
            </div>
        </div>
    </header>
    <main class="main">
        <section class="about-us">
            <div class="about-us__container">
                <div class="about-us__label">
                    <h2 class="about-us__title">ABOUT US</h2>
                    <h3 class="about-us__subtitle">main information of our company</h3>
                </div>
                <img class="about-us__image" src="resources/images/main/about-us/about.jpg" alt="About us">
                <?php 
                    require "./controller/info-company.php";
                ?>
            </div>
        </section>
        <section class="works">
            <div class="works__container">
                <div class="works__label">
                    <h2 class="works__title">FEATURED WORKS</h2>
                    <h3 class="works__subtitle">We turn ideas into custom website solutions that your</h3>
                </div>
                <div class="works__gallery">
                    <div class="works__card">
                        <a href="resources/images/main/featured-works/works-cards.jpg" data-fancybox="gallery">
                            <img src="resources/images/main/featured-works/works-cards.jpg" alt="Cards">
                        </a>
                    </div>
                    <div class="works__card">
                        <a href="resources/images/main/featured-works/works-botles.jpg" data-fancybox="gallery">
                            <img src="resources/images/main/featured-works/works-botles.jpg" alt="Botles">
                        </a>
                    </div>
                    <div class="works__card">
                        <a href="resources/images/main/featured-works/works-price.jpg" data-fancybox="gallery">
                            <img src="resources/images/main/featured-works/works-price.jpg" alt="Price">
                        </a>
                    </div>
                    <div class="works__card">
                        <a href="resources/images/main/featured-works/works-icecream.jpg" data-fancybox="gallery">
                            <img src="resources/images/main/featured-works/works-icecream.jpg" alt="Icecream">
                        </a>
                    </div>
                    <div class="works__card">
                        <a href="resources/images/main/featured-works/works-bag.jpg" data-fancybox="gallery">
                            <img src="resources/images/main/featured-works/works-bag.jpg" alt="Bag">
                        </a>
                    </div>
                    <div class="works__card">
                        <a href="resources/images/main/featured-works/works-book.jpg" data-fancybox="gallery">
                            <img src="resources/images/main/featured-works/works-book.jpg" alt="Book">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="team">
            <div class="team__container">
                <div class="team__label">
                    <h2 class="team__title">SMALL TEAM</h2>
                    <h3 class="team__subtitle">We are web development professionals who create exclusive software</h3>
                </div>
                <div class="team__gallery">
                    <?php 
                        require "./controller/all-info-team.php";
                        printEmploees($emploeeTemplatePath);
                    ?>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="contact__inner">
                <form class="contact__form" id="contact">
                    <input class="contact__input" type="text" name="name" placeholder="Name*" required>
                    <input class="contact__input" type="tel" name="tel" placeholder="+375 (xx) xxx-xx-xx" pattern="^\+375[\s\-]?\(?(15|16|17|21|22|23|25|29|33|44)\)?[\s\-]?\d{3}[\s\-]?\d{2}[\s\-]?\d{2}$" required>
                    <input class="contact__input" type="email" name="email" placeholder="E-mail*" required>
                    <textarea class="contact__textarea" name="message" placeholder="Message*" required></textarea>
                    <input class="contact__button" type="submit" value="SEND MESSAGE">
                </form>
                <div class="contact__info">
                    <div class="contact__info-text">
                        <p>
                            Main office: Independence Avenue, 177 Minsk, Belarus<br>
                            Phone: +375(xx) xxx-xx-xx<br>
                            Fax: +375(xx) xxx-xx-xx<br>
                            <br>
                            Web: https://github.com/<br>
                            E-mail: example@gmail.com
                        </p>
                    </div>
                    <div class="contact__info-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2348.3065636223632!2d27.6818398358256!3d53.94406244095412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dbcecac2e9bfbf%3A0x4392476c7a6fe0f6!2sprasp.%20Niezalie%C5%BEnasci%20177%2C%20Minsk%2C%20Minskaja%20voblas%C4%87!5e0!3m2!1sen!2sby!4v1707467948885!5m2!1sen!2sby" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <footer class="footer">
        <div class="footer__inner">
            <h2 class="footer__title">FOLLOW US</h2>
            <ul class="footer__links">
                <li>
                    <a href="https://www.instagram.com/" target="_blank">
                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.54 0H18.46C22.62 0 26 3.38 26 7.54V18.46C26 20.4597 25.2056 22.3776 23.7916 23.7916C22.3776 25.2056 20.4597 26 18.46 26H7.54C3.38 26 0 22.62 0 18.46V7.54C0 5.54027 0.794391 3.62244 2.20842 2.20842C3.62244 0.794391 5.54027 0 7.54 0ZM7.28 2.6C6.03879 2.6 4.84841 3.09307 3.97074 3.97074C3.09307 4.84841 2.6 6.03879 2.6 7.28V18.72C2.6 21.307 4.693 23.4 7.28 23.4H18.72C19.9612 23.4 21.1516 22.9069 22.0293 22.0293C22.9069 21.1516 23.4 19.9612 23.4 18.72V7.28C23.4 4.693 21.307 2.6 18.72 2.6H7.28ZM19.825 4.55C20.256 4.55 20.6693 4.7212 20.974 5.02595C21.2788 5.3307 21.45 5.74402 21.45 6.175C21.45 6.60598 21.2788 7.0193 20.974 7.32405C20.6693 7.6288 20.256 7.8 19.825 7.8C19.394 7.8 18.9807 7.6288 18.676 7.32405C18.3712 7.0193 18.2 6.60598 18.2 6.175C18.2 5.74402 18.3712 5.3307 18.676 5.02595C18.9807 4.7212 19.394 4.55 19.825 4.55ZM13 6.5C14.7239 6.5 16.3772 7.18482 17.5962 8.40381C18.8152 9.62279 19.5 11.2761 19.5 13C19.5 14.7239 18.8152 16.3772 17.5962 17.5962C16.3772 18.8152 14.7239 19.5 13 19.5C11.2761 19.5 9.62279 18.8152 8.40381 17.5962C7.18482 16.3772 6.5 14.7239 6.5 13C6.5 11.2761 7.18482 9.62279 8.40381 8.40381C9.62279 7.18482 11.2761 6.5 13 6.5ZM13 9.1C11.9657 9.1 10.9737 9.51089 10.2423 10.2423C9.51089 10.9737 9.1 11.9657 9.1 13C9.1 14.0343 9.51089 15.0263 10.2423 15.7577C10.9737 16.4891 11.9657 16.9 13 16.9C14.0343 16.9 15.0263 16.4891 15.7577 15.7577C16.4891 15.0263 16.9 14.0343 16.9 13C16.9 11.9657 16.4891 10.9737 15.7577 10.2423C15.0263 9.51089 14.0343 9.1 13 9.1Z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/" target="_blank">
                        <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.8435 11.2977C22.8435 5.08826 17.8125 0.0572525 11.6031 0.0572525C5.39361 0.0572525 0.362595 5.08826 0.362595 11.2977C0.362595 16.9179 4.44179 21.5864 9.8354 22.4022V14.5611H6.97996V11.2977H9.8354V8.85019C9.8354 6.04008 11.5124 4.45372 14.0506 4.45372C15.3197 4.45372 16.5887 4.68034 16.5887 4.68034V7.44513H15.1837C13.7786 7.44513 13.3254 8.3063 13.3254 9.21279V11.2977H16.4528L15.9542 14.5611H13.3254V22.4022C18.719 21.5864 22.8435 16.9179 22.8435 11.2977Z" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="mailto:mail@perfectline.com" target="_blank">
                        <svg width="33" height="23" viewBox="0 0 33 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.9062 0H3.09375C1.3851 0 0 1.28716 0 2.875V20.125C0 21.7128 1.3851 23 3.09375 23H29.9062C31.6149 23 33 21.7128 33 20.125V2.875C33 1.28716 31.6149 0 29.9062 0ZM29.9062 2.875V5.31905C28.4611 6.41269 26.1571 8.11325 21.2317 11.6974C20.1462 12.4908 17.9961 14.397 16.5 14.3748C15.0042 14.3972 12.8533 12.4905 11.7683 11.6974C6.84363 8.11379 4.53911 6.41287 3.09375 5.31905V2.875H29.9062ZM3.09375 20.125V9.00821C4.57063 10.1014 6.66503 11.6354 9.85733 13.9584C11.2661 14.9889 13.7332 17.2638 16.5 17.2499C19.2532 17.2638 21.6891 15.0219 23.1421 13.9588C26.3343 11.6359 28.4293 10.1015 29.9062 9.00827V20.125H3.09375Z" />
                        </svg>
                    </a>
                </li>
            </ul>
            <p class="footer__copyright">© PerfectLine</p>
        </div>
    </footer>
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.js"
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous">
        </script> -->
    <!-- <script src="resources/js/form-processing.js"></script> -->
    <script src="resources/js/popup.js"></script>
</body>

</html>