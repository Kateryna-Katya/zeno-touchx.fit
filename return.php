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
            <span class="section-subtitle" data-aos="fade-down">Payment & Refunds</span>
            <h1 data-aos="fade-up">Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent" data-aos="fade-up" data-aos-delay="100">
                    <p>
                        Мы стремимся к максимальной прозрачности во взаимоотношениях с нашими клиентами. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена четкая процедура возврата средств, 
                        основанная на качестве предоставляемых услуг и защите прав потребителей в Европейском Союзе.
                    </p>
                </div>

                <h2 data-aos="fade-up">Условия для оформления возврата</h2>
                <div class="refund-grid">
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="refund-card__icon"><i data-lucide="file-warning"></i></div>
                        <h3>Несоответствие программе</h3>
                        <p>Если содержание материалов существенно отличается от заявленного в описании курса на <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="300">
                        <div class="refund-card__icon"><i data-lucide="terminal"></i></div>
                        <h3>Технические проблемы</h3>
                        <p>Критические ошибки инфраструктуры <strong><?= $fullDomain ?></strong>, препятствующие обучению и не устраненные в срок.</p>
                    </div>
                    <div class="refund-card" data-aos="zoom-in" data-aos-delay="400">
                        <div class="refund-card__icon"><i data-lucide="timer"></i></div>
                        <h3>Период охлаждения</h3>
                        <p>Право на отказ в течение 14 дней с момента оплаты при условии, что вы не начали активное использование материалов.</p>
                    </div>
                </div>

                <div class="procedure-block" data-aos="fade-up">
                    <h2>Процедура запроса на возврат</h2>
                    <p>Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, выполните следующие шаги:</p>
                    <div class="steps-mini">
                        <div class="step-mini"><span>1</span> Письмо на <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a></div>
                        <div class="step-mini"><span>2</span> Тема: «Запрос на возврат средств»</div>
                        <div class="step-mini"><span>3</span> Данные: ФИО, Email, Название программы</div>
                        <div class="step-mini"><span>4</span> Описание причины запроса</div>
                    </div>
                </div>

                <h2 data-aos="fade-up">Сроки и способ возврата</h2>
                <p data-aos="fade-up">
                    После одобрения вашего запроса, возврат денежных средств будет
                    произведен в течение <strong>7–14 рабочих дней</strong>. Средства возвращаются
                    тем же способом, которым была совершена оплата. Обратите внимание, что фактический срок зачисления
                    зависит от регламента вашего банка в Италии или стране вашего пребывания в ЕС.
                </p>

                <div class="warning-block" data-aos="fade-up">
                    <h2>Исключения и ограничения</h2>
                    <ul class="legal-list">
                        <li>Запрос подан по истечении 14 календарных дней с момента оплаты.</li>
                        <li>Вы уже просмотрели или скачали более 50% материалов программы.</li>
                        <li>Технические проблемы на стороне пользователя (софт, нестабильное соединение).</li>
                        <li>Нарушение условий использования платформы <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-footer-policy" data-aos="zoom-in">
                    <h2>Свяжитесь с нами</h2>
                    <p>По всем вопросам, связанным с возвратом средств, обращайтесь в нашу экспертную поддержку:</p>
                    <a href="mailto:support@<?= $fullDomain ?>" class="btn btn--secondary">
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