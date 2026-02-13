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
    <title>
        <?= $domainTitle ?> — AI-практики для каждого
    </title>
<link rel="icon"
    href="data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='16' cy='16' r='14' stroke='%23c1ff00' stroke-width='2'/%3E%3Ccircle cx='16' cy='16' r='6' fill='%23c1ff00'%3E%3Canimate attributeName='opacity' values='1;0.5;1' dur='3s' repeatCount='indefinite' /%3E%3C/circle%3E%3Cpath d='M16 2L16 6M16 26L16 30M30 16L26 16M6 16L2 16' stroke='%23c1ff00' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E"
    type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&family=Montserrat:wght@700;800&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <span class="logo__text">
                    <?= $domainTitle ?>
                </span>
            </a>
            <nav class="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#capabilities" class="nav__link">Возможности</a></li>
                    <li><a href="./#workflow" class="nav__link">Как это работает</a></li>
                    <li><a href="./#education" class="nav__link">Обучение</a></li>
                    <li><a href="./#community" class="nav__link">Сообщество</a></li>
                </ul>
            </nav>
            <a href="./#contact" class="btn btn--outline header__btn">Связаться</a>
            <button class="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>
<main>
    <section class="pages">
        <div class="container">
            <h1 data-aos="fade-right">Политика обработки персональных данных</h1>

            <h2 data-aos="fade-up">1. Общие положения</h2>
            <p data-aos="fade-up">
                Настоящая политика обработки персональных данных (далее —
                «Политика») определяет порядок и условия обработки персональных
                данных, предпринимаемые платформой <strong><?= $domainTitle ?></strong> (далее — «Оператор»), и
                устанавливает меры по обеспечению безопасности этих данных в соответствии с требованиями GDPR.
            </p>
            <p data-aos="fade-up">
                1.1. Важнейшей целью Оператор считает соблюдение прав и свобод человека при
                обработке его персональных данных, включая защиту прав на
                неприкосновенность частной жизни и личную тайну.
            </p>
            <p data-aos="fade-up">
                1.2. Настоящая Политика применяется ко всей информации, которую
                Оператор может получить о посетителях (далее — «Пользователи»)
                веб-сайта <strong><?= $fullDomain ?></strong>.
            </p>

            <h2 data-aos="fade-up">2. Основные понятия</h2>
            <ul data-aos="fade-up">
                <li>
                    <strong>Веб-сайт</strong> — ресурс, расположенный по адресу 
                    <strong><?= $fullDomain ?></strong>, предоставляющий информацию о практиках применения ИИ.
                </li>
                <li><strong>Пользователь</strong> — любой посетитель веб-сайта.</li>
                <li>
                    <strong>Персональные данные</strong> — любая информация,
                    относящаяся прямо или косвенно к Пользователю сайта.
                </li>
                <li>
                    <strong>Безопасность данных</strong> — защищенность
                    данных от неправомерного доступа, уничтожения или изменения.
                </li>
            </ul>

            <h2 data-aos="fade-up">3. Данные, которые мы обрабатываем</h2>
            <p data-aos="fade-up">Оператор может обрабатывать следующие категории данных:</p>
            <ul data-aos="fade-up">
                <li>
                    <strong>Предоставляемые Пользователем:</strong>
                    <ul>
                        <li>Имя (для персонализации общения);</li>
                        <li>Адрес электронной почты (для ответов на запросы);</li>
                        <li>Номера телефонов (с валидацией по стандартам Германии).</li>
                    </ul>
                </li>
                <li>
                    <strong>Собираемые автоматически:</strong>
                    <ul>
                        <li>
                            Обезличенные данные о посетителях (файлы «cookie») с помощью сервисов
                            статистики. Это включает IP-адрес, тип браузера и параметры устройства.
                        </li>
                    </ul>
                </li>
            </ul>

            <h2 data-aos="fade-up">4. Цели обработки</h2>
            <ul data-aos="fade-up">
                <li>
                    Предоставление доступа к образовательному контенту платформы <strong><?= $domainTitle ?></strong>.
                </li>
                <li>
                    Установление обратной связи, включая направление уведомлений о новых технологиях и AI-инструментах.
                </li>
                <li>
                    Исполнение заявок Пользователя на консалтинговые услуги в странах ЕС.
                </li>
                <li>
                    Улучшение качества работы сайта на основе аналитики.
                </li>
            </ul>

            <h2 data-aos="fade-up">5. Безопасность и хранение данных</h2>
            <ul data-aos="fade-up">
                <li>
                    Оператор принимает технические меры защиты данных в соответствии с нормами европейского законодательства.
                </li>
                <li>
                    Данные никогда не передаются третьим лицам без законных на то оснований.
                </li>
                <li>
                    Пользователь может в любой момент отозвать согласие, направив письмо на
                    <a href="mailto:support@<?= $fullDomain ?>" class="text-gradient" style="text-decoration: none; font-weight: 600;">support@<?= $fullDomain ?></a>.
                </li>
            </ul>

            <div class="pages-footer" data-aos="fade-in" style="margin-top: 50px; padding-top: 30px; border-top: 1px solid rgba(255,255,255,0.05);">
                <p style="font-size: 0.9rem; color: var(--text-muted);">Актуальная версия Политики <?= $domainTitle ?>: Февраль 2026</p>
                <a href="./" class="btn btn--outline" style="margin-top: 20px; font-size: 0.8rem; padding: 10px 20px;">Вернуться на главную</a>
            </div>
        </div>
    </section>
</main>


    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo footer__logo">
                    <span class="logo__dot"></span>
                    <span class="logo__text">
                        <?= $domainTitle ?>
                    </span>
                </a>
                <p class="footer__description">Технологии, которые работают на вас. Переосмыслите подход к развитию
                    вместе с экспертной поддержкой.</p>
            </div>
            <div class="footer__col">
                <h4 class="footer__title">Меню</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#capabilities">Возможности</a></li>
                    <li><a href="./#workflow">Процесс</a></li>
                    <li><a href="./#contact">Контакты</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookie Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                    <li><a href="./personal-data-policy.php">Data Policy</a></li>
                </ul>
            </div>
            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact-info">
                    <li><i data-lucide="phone"></i> +493064515935</li>
                    <li><i data-lucide="mail"></i> hello@
                        <?= $fullDomain ?>
                    </li>
                    <li><i data-lucide="map-pin"></i> Friedrichstraße 176, 10117 Berlin, Germany</li>
                </ul>
            </div>
        </div>
        <div class="container footer__bottom">
            <p>&copy; 2026
                <?= $domainTitle ?>. Все права защищены. Предложение активно в странах ЕС.
            </p>
        </div>
    </footer>
<div class="menu-overlay" id="menu-overlay">
    <nav class="mobile-nav">
        <ul class="mobile-nav__list">
            <li><a href="./#hero" class="mobile-nav__link">Главная</a></li>
            <li><a href="./#capabilities" class="mobile-nav__link">Возможности</a></li>
            <li><a href="./#workflow" class="mobile-nav__link">Процесс</a></li>
            <li><a href="./#education" class="mobile-nav__link">Обучение</a></li>
            <li><a href="./#community" class="mobile-nav__link">Сообщество</a></li>
            <li><a href="./#contact" class="mobile-nav__link btn btn--primary">Начать сейчас</a></li>
        </ul>
    </nav>
</div>

<div class="cookie-popup" id="cookie-popup">
    <div class="cookie-popup__content">
        <p class="cookie-popup__text">
            Этот сайт использует cookies для улучшения работы. Подробнее — в нашей
            <a href="./cookies.php">Cookie политике</a>.
        </p>
        <button class="btn btn--primary btn--sm" id="cookie-accept">Принять</button>
    </div>
</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="script.js"></script>
</body>

</html>