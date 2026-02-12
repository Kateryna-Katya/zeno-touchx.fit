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
            <span class="section-subtitle" data-aos="fade-down">Privacy Policy</span>
            <h1 data-aos="fade-up">Политика конфиденциальности</h1>

            <div class="legal-content">
                <div class="policy-hero-card" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Политика конфиденциальности распространяется на персональные данные,
                        предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания услуг по IT-обучению, так и для других взаимодействий в рамках нашей передовой цифровой инфраструктуры.
                    </p>
                </div>

                <div class="policy-notice" data-aos="fade-up" data-aos-delay="200">
                    <p>
                        <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения в положения Политики. Обратите внимание, что наши технологии нового поколения могут содержать ссылки на ресурсы третьих лиц. Предоставляя свои данные, вы даете полное согласие на их обработку способами, предусмотренными настоящей Политикой.
                    </p>
                </div>

                <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения</h2>
                <div class="storage-info">
                    <div class="storage-item" data-aos="zoom-in" data-aos-delay="300">
                        <i data-lucide="history"></i>
                        <span>Срок хранения до <strong>75 лет</strong></span>
                    </div>
                    <div class="storage-item" data-aos="zoom-in" data-aos-delay="400">
                        <i data-lucide="user-check"></i>
                        <span>Только с вашего согласия</span>
                    </div>
                </div>
                <p data-aos="fade-up">
                    Для предотвращения утечки данных мы используем полный комплекс мер информационной безопасности, соответствующий стандартам ЕС. Уничтожение или блокирование данных осуществляется по запросу клиента или при достижении целей сбора.
                </p>

                <div class="data-collection-grid">
                    <div class="data-box" data-aos="fade-right" data-aos-delay="500">
                        <h3><i data-lucide="cpu"></i> Техническая информация</h3>
                        <ul>
                            <li>IP-адрес и время доступа</li>
                            <li>Источники перехода на <strong><?= $fullDomain ?></strong></li>
                            <li>Данные браузера и просмотры блоков</li>
                        </ul>
                    </div>
                    <div class="data-box" data-aos="fade-left" data-aos-delay="500">
                        <h3><i data-lucide="contact"></i> Персонализация</h3>
                        <ul>
                            <li>Имя пользователя</li>
                            <li>E-mail и номер телефона</li>
                            <li>Данные о контрактах и курсах</li>
                        </ul>
                    </div>
                </div>

                <h2 data-aos="fade-up">Цели обработки персональных данных</h2>
                <ul class="legal-list" data-aos="fade-up">
                    <li>Предоставление доступа к инновационной платформе обучения.</li>
                    <li>Учет пожеланий при разработке новых технологических решений.</li>
                    <li>Информирование об акциях и материалах в странах Европы.</li>
                    <li>Обеспечение качественной обратной связи и экспертной поддержки.</li>
                </ul>

                <h2 data-aos="fade-up">Использование Cookies</h2>
                <p data-aos="fade-up">
                    Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (например, настройки региона Италия), чтобы сделать использование <strong><?= $fullDomain ?></strong> удобнее. Вы можете отключить их в настройках браузера.
                </p>

                <div class="rights-block" data-aos="zoom-in" data-aos-delay="600">
                    <h2>Ваши права</h2>
                    <p>
                        Если вы хотите отредактировать свои данные или прекратить их обработку в системе <strong><?= $domainTitle ?></strong>, свяжитесь с нами:
                    </p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="btn btn--primary">
                        <span>support@<?= $fullDomain ?></span>
                        <i data-lucide="mail"></i>
                    </a>
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