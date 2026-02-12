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
            <span class="section-subtitle" data-aos="fade-down">Privacy & Security</span>
            <h1 data-aos="fade-up">Политика касаемо обработки персональных данных</h1>

            <div class="legal-content">
                <div class="policy-intro" data-aos="fade-up" data-aos-delay="100">
                    <h2>1. Общие положения</h2>
                    <p>
                        Настоящая политика обработки персональных данных (далее —
                        «Политика») определяет порядок и условия обработки персональных
                        данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                        устанавливает меры по обеспечению безопасности этих данных в соответствии с регламентами ЕС.
                    </p>
                    <p>
                        1.1. Важнейшей целью Оператора является соблюдение прав и свобод человека при
                        обработке его персональных данных, включая защиту прав на неприкосновенность частной жизни и экспертную поддержку на всех этапах взаимодействия.
                    </p>
                    <p>
                        1.2. Настоящая Политика применяется ко всей информации, которую
                        Оператор может получить о посетителях (далее — «Пользователи»)
                        веб-сайта <strong><?= $fullDomain ?></strong>.
                    </p>
                </div>

                <div class="policy-section" data-aos="fade-up" data-aos-delay="200">
                    <h2>2. Основные понятия</h2>
                    <ul class="terminology-list">
                        <li>
                            <strong>Веб-сайт</strong> — совокупность графических и
                            информационных материалов <strong><?= $fullDomain ?></strong>, обеспечивающая доступ к платформе.
                        </li>
                        <li><strong>Пользователь</strong> — любой посетитель веб-сайта, заинтересованный в IT-обучении.</li>
                        <li>
                            <strong>Персональные данные</strong> — любая информация,
                            относящаяся прямо или косвенно к Пользователю.
                        </li>
                        <li>
                            <strong>Обработка данных</strong> — любое действие, совершаемое с данными (сбор, запись, хранение) для обеспечения быстрого старта.
                        </li>
                    </ul>
                </div>

                <div class="policy-section" data-aos="fade-up" data-aos-delay="300">
                    <h2>3. Данные, которые мы обрабатываем</h2>
                    <div class="data-grid">
                        <div class="data-item">
                            <div class="data-item__icon">
                                <i data-lucide="shield-check"></i>
                            </div>
                            <div>
                                <strong>Личные данные:</strong>
                                <span>ФИО, Email, номер телефона (для связи с экспертами).</span>
                            </div>
                        </div>
                        <div class="data-item">
                            <div class="data-item__icon">
                                <i data-lucide="database"></i>
                            </div>
                            <div>
                                <strong>Технические данные:</strong>
                                <span>Cookies, IP-адрес, данные браузера для оптимизации UI.</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="policy-section" data-aos="fade-up" data-aos-delay="400">
                    <h2>4. Цели обработки данных</h2>
                    <ul class="legal-list">
                        <li>Идентификация Пользователя для доступа к образовательной платформе.</li>
                        <li>Установление обратной связи и бесплатная консультация по всем вопросам.</li>
                        <li>Исполнение договоров и стратегий роста на базе инноваций.</li>
                        <li>Улучшение качества работы IT-школы <?= $domainTitle ?> в Италии.</li>
                    </ul>
                </div>

                <div class="policy-section" data-aos="fade-up" data-aos-delay="500">
                    <h2>5. Правовые основания</h2>
                    <p>
                        Оператор обрабатывает данные только при наличии вашего добровольного согласия. Мы используем передовую цифровую инфраструктуру для защиты вашей информации. Если сохранение файлов «cookie» разрешено в вашем браузере, платформа будет использовать их для улучшения опыта.
                    </p>
                </div>

                <div class="contact-info-block" data-aos="zoom-in" data-aos-delay="600">
                    <h2>6. Вопросы и отзывы</h2>
                    <p>Если у вас возникли вопросы по поводу обработки данных на платформе <strong><?= $domainTitle ?></strong>, свяжитесь с нами:</p>
                    <ul class="contact-data">
                        <li>
                            <i data-lucide="mail"></i>
                            <strong>Email:</strong> <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
                        </li>
                        <li>
                            <i data-lucide="phone"></i>
                            <strong>Телефон:</strong> <a href="tel:+390697639639">+39 06 9763 9639</a>
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