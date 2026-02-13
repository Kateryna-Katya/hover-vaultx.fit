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
            <h1 data-aos="fade-right">Политика конфиденциальности</h1>

            <p data-aos="fade-up">
                Политика конфиденциальности распространяется на персональные данные,
                предоставляемые клиентами <strong><?= $domainTitle ?></strong>, как для оказания различного рода
                услуг по консалтингу в сфере ИИ, так и для других взаимодействий в электронном
                формате, а также при участии клиентов в экспертных программах и акциях.
            </p>

            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> оставляет за собой право вносить изменения и дополнения
                в действующие положения. Эти изменения будут иметь приоритет над текущими
                положениями. Обратите внимание, что наши услуги могут содержать ссылки на ресурсы третьих лиц (например, сервисы OpenAI или аналитические платформы). В таких случаях <strong><?= $domainTitle ?></strong> не несет ответственности за соблюдение конфиденциальности сторонними компаниями.
            </p>

            <h2 data-aos="fade-up">Порядок сбора, хранения и уничтожения данных</h2>
            <p data-aos="fade-up">
                <strong><?= $domainTitle ?></strong> собирает персональные данные только с согласия
                пользователя и исключительно для предоставления качественных услуг: доступа к обучающим материалам,
                участия в стратегических сессиях и внедрения инноваций. Мы используем современные протоколы шифрования для защиты вашей информации.
            </p>

            <p data-aos="fade-up">
                Максимальный срок хранения персональных данных составляет 75 лет с даты получения информации, если иное не предусмотрено законодательством ЕС. Уничтожение или обезличивание данных осуществляется при достижении целей сбора или по официальному запросу клиента.
            </p>

            <h2 data-aos="fade-up">Техническая информация</h2>
            <ul data-aos="fade-up">
                <li>Время доступа и IP-адрес;</li>
                <li>Источники обращения на ресурс <strong><?= $fullDomain ?></strong>;</li>
                <li>Интернет-страницы, посещаемые пользователем;</li>
                <li>Иная техническая информация, предоставляемая браузером;</li>
                <li>Номер телефона (в случае звонка по контактам, указанным на сайте).</li>
            </ul>

            <h2 data-aos="fade-up">Персональная информация</h2>
            <p data-aos="fade-up">При заполнении форм обратной связи мы собираем:</p>
            <ul data-aos="fade-up">
                <li>Имя пользователя;</li>
                <li>E-mail (например, вида <em>support@<?= $fullDomain ?></em>) и номер телефона.</li>
            </ul>

            <h2 data-aos="fade-up">Цели обработки данных</h2>
            <ul data-aos="fade-up">
                <li>Предоставление доступа к базе практик применения ИИ;</li>
                <li>Учет пожеланий при обновлении AI-инструментов;</li>
                <li>Информирование об акциях и новых материалах в блоге;</li>
                <li>Обеспечение экспертной поддержки на всех этапах.</li>
            </ul>

            <h2 data-aos="fade-up">Передача данных третьим лицам</h2>
            <p data-aos="fade-up"><strong><?= $domainTitle ?></strong> не предоставляет данные третьим лицам, за исключением:</p>
            <ul data-aos="fade-up">
                <li>Прямого согласия пользователя;</li>
                <li>Требования компетентных органов Германии в соответствии с законом;</li>
                <li>Случаев стратегического слияния или поглощения компании.</li>
            </ul>

            <h2 data-aos="fade-up">Cookies и права пользователя</h2>
            <p data-aos="fade-up">
                Файлы cookie позволяют нам анализировать трафик и сохранять ваши предпочтения (регион Германия, настройки интерфейса). Если вы хотите отредактировать свои данные или прекратить их обработку согласно нормам GDPR, пожалуйста, свяжитесь с нами:
            </p>
            
            <div class="pages-footer" data-aos="fade-in" style="margin-top: 40px; padding: 30px; background: rgba(255,255,255,0.02); border-radius: 20px;">
                <p>Email: <a href="mailto:support@<?= $fullDomain ?>" class="text-gradient" style="text-decoration: none; font-weight: 600;">support@<?= $fullDomain ?></a></p>
                <p>Телефон: <a href="tel:+493064515935" style="color: inherit; text-decoration: none;">+493064515935</a></p>
                <p style="font-size: 0.8rem; margin-top: 15px; opacity: 0.6;">Обновлено: Февраль 2026</p>
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