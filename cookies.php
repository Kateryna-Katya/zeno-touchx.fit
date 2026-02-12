<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> | Технологии нового поколения</title>
    
    <link rel="icon" type="image/svg+xml"
    href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Crect x='35' y='35' width='30' height='30' rx='4' fill='%2310B981'/%3E%3Cpath d='M10,10 L30,30 M90,10 L70,30 M90,90 L70,70 M10,90 L30,70' stroke='%238B5CF6' stroke-width='12' stroke-linecap='round'/%3E%3C/svg%3E">
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet">
    
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">  
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header">
        <div class="container header__container">
            <a href="/" class="logo">
                <div class="logo__icon"></div>
                <span class="logo__text"><?= $domainTitle ?></span>
            </a>
            
            <nav class="nav" id="mobileMenu">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#about" class="nav__link">О нас</a></li>
                    <li><a href="./#courses" class="nav__link">Курсы</a></li>
                    <li><a href="./#mentors" class="nav__link">Менторы</a></li>
                    <li><a href="./#faq" class="nav__link">FAQ</a></li>
                    <li><a href="./#contact" class="nav__link nav__link--mobile-only">Связаться</a></li>
                </ul>
            </nav>
    
            <a href="./#contact" class="btn btn--header">
                <span>Связаться</span>
                <i data-lucide="arrow-up-right"></i>
            </a>
    
            <button class="burger" id="burgerBtn" aria-label="Открыть меню">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-subtitle" data-aos="fade-down">Legal Documents</span>
            <h1 data-aos="fade-up">Политика использования файлов cookie</h1>

            <div class="legal-content">
                <p class="lead-text" data-aos="fade-up" data-aos-delay="100">
                    Добро пожаловать на <strong><?= $domainTitle ?></strong>! Чтобы улучшить ваш опыт
                    взаимодействия с нашим сайтом, обеспечить его корректную работу и
                    анализировать активность пользователей, мы используем файлы cookie и
                    схожие технологии.
                </p>

                <div class="legal-block" data-aos="fade-up" data-aos-delay="200">
                    <h2>Что такое файлы cookie?</h2>
                    <p>
                        Файл cookie — это небольшой фрагмент данных (текстовый файл),
                        который веб-сайт сохраняет на вашем устройстве, когда вы его посещаете. 
                        Это позволяет платформе <strong><?= $domainTitle ?></strong> "помнить" ваши действия 
                        и предпочтения (например, язык, настройки региона Италия и другие параметры) 
                        в течение определенного времени.
                    </p>
                </div>

                <div class="legal-block" data-aos="fade-up" data-aos-delay="300">
                    <h2>Какие типы файлов cookie мы используем?</h2>
                    <p>
                        Мы классифицируем файлы cookie, используемые на сайте <strong><?= $fullDomain ?></strong>, по
                        следующим категориям:
                    </p>
                    <ul class="legal-list">
                        <li>
                            <strong>Строго необходимые:</strong> Критически важны для функционирования. Позволяют перемещаться по страницам <strong><?= $domainTitle ?></strong> и обеспечивают безопасность.
                        </li>
                        <li>
                            <strong>Аналитические:</strong> Сбор анонимной информации о том, как посетители используют наш сайт, чтобы мы могли развивать IT-обучение.
                        </li>
                        <li>
                            <strong>Функциональные:</strong> Позволяют запоминать ваш выбор для персонализированного опыта и быстрой адаптации без сложности.
                        </li>
                        <li>
                            <strong>Маркетинговые:</strong> Используются для доставки объявлений, соответствующих вашим интересам в сфере технологий.
                        </li>
                    </ul>
                </div>

                <div class="legal-block" data-aos="fade-up" data-aos-delay="400">
                    <h2>Зачем мы используем файлы cookie?</h2>
                    <ul class="legal-list">
                        <li>Обеспечение передовой цифровой инфраструктуры платформы.</li>
                        <li>Анализ пользовательского поведения для оптимизации методологий обучения.</li>
                        <li>Персонализация контента: предложение активно только в странах ЕС.</li>
                        <li>Предоставление релевантных маркетинговых материалов о карьере в IT.</li>
                    </ul>
                </div>

                <div class="legal-block" data-aos="fade-up" data-aos-delay="500">
                    <h2>Ваш выбор и управление</h2>
                    <p>
                        Вы имеете полный контроль над файлами cookie. Вы можете в любой
                        момент изменить свои настройки в браузере. Однако, обратите
                        внимание: отключение строго необходимых cookie может привести к
                        некорректной работе некоторых функций сайта <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="contact-info-block" data-aos="zoom-in" data-aos-delay="600">
                    <h2>Контактная информация</h2>
                    <p>
                        Если у вас возникли вопросы касательно политики на <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
                    </p>
                    <ul class="contact-data">
                        <li>
                            <i data-lucide="mail"></i>
                            <strong>Email:</strong> <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="phone"></i>
                            <strong>Телефон:</strong> <a href="tel:+390697639639">+39 06 9763 9639</a>
                        </li>
                        <li>
                            <i data-lucide="map-pin"></i>
                            <strong>Адрес:</strong> Via del Corso, 184, 00186 Roma RM, Italy
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__icon"></span>
                    <span class="logo__text"><?= $domainTitle ?></span>
                </a>
                <p class="footer__description">
                    Инновационная IT-школа, предоставляющая передовую цифровую инфраструктуру для обучения востребованным профессиям. Платформа года для вашего быстрого старта.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#courses">Курсы</a></li>
                    <li><a href="./#benefits">Преимущества</a></li>
                    <li><a href="./#faq">Вопросы и ответы</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Юридическая информация</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Use</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact-list">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+390697639639">+39 06 9763 9639</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>Via del Corso, 184, 00186 Roma RM, Italy</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="container">
                <p>&copy; 2026 <?= $domainTitle ?>. Все права защищены. Предложение активно в странах ЕС.</p>
            </div>
        </div>
    </footer>
    <div class="cookie-popup" id="cookiePopup">
        <div class="cookie-popup__content">
            <p>Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
            <button class="btn btn--primary btn--sm" id="acceptCookies">Принять</button>
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.net.min.js"></script>
    <script src="script.js"></script>
</body>
</html>