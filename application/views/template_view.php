<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style_template.css">
    <link rel="stylesheet" href="/css/style_main.css">
    <link rel="stylesheet" href="/css/style_services.css">
    <link rel="stylesheet" href="/css/style_portfolio.css">
    <link rel="stylesheet" href="/css/style_comments.css">
    <link rel="stylesheet" href="/css/style_about.css">
    <link rel="stylesheet" href="/css/style_contacts.css">
    <link rel="stylesheet" href="/css/style_404.css">
    <title>Супер Пупер</title>
</head>
<body>
    <div class="div-back-picture"></div>
    <div class="div-company-header">
        <div class="div-company-name">
            <p>Наша Супер Компания</p>
            <p>"Наш слоган"</p>
        </div>
        <address class="address-data">
            <div class="address">
                <p>Страна, г. Город, ул. Улица, д. Дом, оф. Офис</p>
            </div>
            <div class="phone">
                <a href="tel:+7 888 888 88 88">&#9990; +7 (888) 888 88 88</a>
            </div>     
            <div class="email">
                <a href="mailto:company@example.ru">&#128386; company@example.ru</a>
            </div>        
        </address>
    </div>
    <header>
        <nav class="nav">
            <ul class="nav-ul-list">
                <li class="nav-ul-item"><a class="nav-ul-link" href="/">Главная</a></li>
                <li class="nav-ul-item"><a class="nav-ul-link" href="/services">Услуги</a></li>
                <li class="nav-ul-item"><a class="nav-ul-link" href="/portfolio">Портфолио</a></li>
                <li class="nav-ul-item"><a class="nav-ul-link" href="/comments">Отзывы</a></li>
                <li class="nav-ul-item"><a class="nav-ul-link" href="/about">О нас</a></li>
                <li class="nav-ul-item"><a class="nav-ul-link" href="/contacts">Контакты</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?php include 'application/views/'.$content_view; ?>
    </main>
    <footer>
        <ul class="footer-ul-list">
            <li class="footer-ul-item"><a class="footer-ul-link" href="/">Главная</a></li>
            <li class="footer-ul-item"><a class="footer-ul-link" href="/services">Услуги</a></li>
            <li class="footer-ul-item"><a class="footer-ul-link" href="/portfolio">Портфолио</a></li>
            <li class="footer-ul-item"><a class="footer-ul-link" href="/comments">Отзывы</a></li>
            <li class="footer-ul-item"><a class="footer-ul-link" href="/about">O нас</a></li>
            <li class="footer-ul-item"><a class="footer-ul-link" href="/contacts">Контакты</a></li>
        </ul>
        <ul class="footer-ul-social-list">
            <li class="footer-ul-social-item"><a class="footer-ul-social-link" href="#"><img src="./images/max.png" class="img-social" alt=""></a></li>
            <li class="footer-ul-social-item"><a class="footer-ul-social-link" href="#"><img src="./images/vk.png" class="img-social" alt=""></a></li>
            <li class="footer-ul-social-item"><a class="footer-ul-social-link" href="#"><img src="./images/telega.png" class="img-social" alt=""></a></li>
            <li class="footer-ul-social-item"><a class="footer-ul-social-link" href="#"><img src="./images/whatsup.png" class="img-social" alt=""></a></li>
       </ul>
    </footer>
</body>
</html>