<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./images/Ellipse.png" type="image/x-icon">
    <link rel="shortcut icon" href="./images/Ellipse.png" type="image/x-icon">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/intlTelInput.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/slider.css">
    <title>QWERTY - Работа в твоем городе!</title>

    <style>
        footer {
            background-color: #f3f3f3;
            padding: 20px;
            text-align: center;
        }

        .modal {
            display: none;
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
            overflow: scroll;
        }

        .modal-content2 {
            background-color: white;
            padding: 20px 40px;
            border-radius: 5px;
            text-align: left;
            height: 500px;
            overflow: scroll;
        }

        .close-button {
            float: right;
            font-size: 1.5em;
            margin-left: 15px;
        }

        .logo-section,
        .contacts-section,
        .policy-section {
            margin-bottom: 10px;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#slider">Наши клиенты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">Как это работает</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Контакты</a>
                </li>
            </ul>
        </div>
        <button class="btn btn-primary ml-2" data-toggle="modal" data-target="#exampleModal"
            onclick="scrollToSection('sectionForm')">Присоединиться</button>
    </nav>

    <!-- Хедер -->
    <div class="header">
        <div class="header-content">
            <!-- Контент внутри хедера -->
            <div class="header__holder">
                <div>
                    <img src="./images/Ellipse.png" alt="Hero" class="header__img">
                </div>
                <div class="header__wrapper">
                    <h1 class="header__title">Работа в твоем городе</h1>
                    <p class="header__p">Если ты хочешь кардинально
                        изменить свою жизнь и <br>
                        зарабатывать от <span class="header__p-bold">20 000 рублей в день</span></p>
                </div>
            </div>
            <p class="header__contact">свяжись с нами удобным для тебя способом</p>
        </div>
    </div>

    <div class="header__socialHolder">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 390 188" fill="none"
            class="header__svgMob">
            <path d="M0 0H390V188L239.9 64.1659C214.082 42.8655 176.797 42.8227 150.93 64.0635L0 188V0Z"
                fill="#FBD800" />
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1280 188" fill="none" class="header__svgDesk">
            <path d="M0 0H1280V188L696.953 41.4393C660.548 32.2881 622.447 32.2671 586.031 41.378L0 188V0Z"
                fill="#FBD800" />
        </svg>
    </div>

    <div class="header__imgBox">
        <a href="https://t.me/Delivery_company_job_bot/"><img src="./images/TelegramApp.png" alt="Telegram"></a>
        <!-- <a href="https://wa.me/79997266350"><img src="./images/WhatsApp.png" alt="WhatsApp"></a> -->
        <a href="https://api.whatsapp.com/send/?phone=17652321442&text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82,%20%D0%B1%D0%BE%D1%82&type=phone_number&app_absent=0"><img src="./images/WhatsApp.png" alt="WhatsApp"></a>
    </div>

    <!-- Слайдер -->

    <div class="header-content">
        <div id="slider" class="carousel slide" data-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active ">
                    <div class="shadowCustom">
                        <img src="./images/1.png" class="d-block w-100 slider-img" alt="Slide 1">
                        <img src="./images/Background.svg" class="slider__background" alt="">
                    </div>

                    <div class="slider__marginDesk">
                        <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                            <path
                                d="M28.4375 28.4375L28.4375 56.875L3.8147e-06 56.875L1.2931e-06 28.0313C-4.11647e-07 8.53126 18.2812 6.09376 18.2812 6.09376L20.7187 11.7813C20.7187 11.7813 12.5937 13 10.9687 19.5C9.34375 24.375 12.5938 28.4375 12.5938 28.4375L28.4375 28.4375Z"
                                fill="#FBD800" />
                            <path
                                d="M65 28.4375L65 56.875L36.5625 56.875L36.5625 28.0313C36.5625 8.53126 54.8437 6.09376 54.8437 6.09376L57.2812 11.7813C57.2812 11.7813 49.1562 13 47.5312 19.5C45.9062 24.375 49.1562 28.4375 49.1562 28.4375L65 28.4375Z"
                                fill="#FBD800" />
                        </svg>
                        <p class="slider__review">Я не верил, что эта работа может принести мне столько денег, но это
                            оказалось правдой, уже через два месяца я приобрел автомобиль</p>
                        <p class="slider__name">Игорь Орлов</p>
                        <p class="slider__date">Пользователь с Апреля 2023</p>
                    </div>

                </div>

                <div class="carousel-item ">
                    <div class="shadowCustom">
                        <img src="./images/2.png" class="d-block w-100 slider-img" alt="Slide 1">
                        <img src="./images/Background.svg" class="slider__background" alt="">
                    </div>

                    <div class="slider__marginDesk">
                        <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                            <path
                                d="M28.4375 28.4375L28.4375 56.875L3.8147e-06 56.875L1.2931e-06 28.0313C-4.11647e-07 8.53126 18.2812 6.09376 18.2812 6.09376L20.7187 11.7813C20.7187 11.7813 12.5937 13 10.9687 19.5C9.34375 24.375 12.5938 28.4375 12.5938 28.4375L28.4375 28.4375Z"
                                fill="#FBD800" />
                            <path
                                d="M65 28.4375L65 56.875L36.5625 56.875L36.5625 28.0313C36.5625 8.53126 54.8437 6.09376 54.8437 6.09376L57.2812 11.7813C57.2812 11.7813 49.1562 13 47.5312 19.5C45.9062 24.375 49.1562 28.4375 49.1562 28.4375L65 28.4375Z"
                                fill="#FBD800" />
                        </svg>
                        <p class="slider__review">У нас в семье 6 детей, я самый старший, мы выросли в маленькой
                            хрущевке и
                            я всегда мечтал подарить маме и братьям новую просторную квартиру, конечно пришлось
                            потрудиться,
                            но уже через год я добился своей цели</p>
                        <p class="slider__name">Константин Беляев</p>
                        <p class="slider__date">Пользователь с Марта 2023</p>
                    </div>

                </div>

                <div class="carousel-item">
                    <div class="shadowCustom">
                        <img src="./images/3.png" class="d-block w-100 slider-img" alt="Slide 1">
                        <img src="./images/Background.svg" class="slider__background" alt="">
                    </div>

                    <div class="slider__marginDesk">
                        <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                            <path
                                d="M28.4375 28.4375L28.4375 56.875L3.8147e-06 56.875L1.2931e-06 28.0313C-4.11647e-07 8.53126 18.2812 6.09376 18.2812 6.09376L20.7187 11.7813C20.7187 11.7813 12.5937 13 10.9687 19.5C9.34375 24.375 12.5938 28.4375 12.5938 28.4375L28.4375 28.4375Z"
                                fill="#FBD800" />
                            <path
                                d="M65 28.4375L65 56.875L36.5625 56.875L36.5625 28.0313C36.5625 8.53126 54.8437 6.09376 54.8437 6.09376L57.2812 11.7813C57.2812 11.7813 49.1562 13 47.5312 19.5C45.9062 24.375 49.1562 28.4375 49.1562 28.4375L65 28.4375Z"
                                fill="#FBD800" />
                        </svg>
                        <p class="slider__review">Раньше я даже и мечтать не мог, что смогу позволить себе отпуск в
                            Сочи,
                            работал на заводе как проклятый от звонка до звонка. Теперь моя жизнь координально друг</p>
                        <p class="slider__name">Григорий Марков</p>
                        <p class="slider__date">Пользователь с Июня 2023</p>
                    </div>

                </div>

                <div class="carousel-item ">
                    <div class="shadowCustom">
                        <img src="./images/4.png" class="d-block w-100 slider-img" alt="Slide 1">
                        <img src="./images/Background.svg" class="slider__background" alt="">
                    </div>

                    <div class="slider__marginDesk">
                        <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" viewBox="0 0 65 65" fill="none">
                            <path
                                d="M28.4375 28.4375L28.4375 56.875L3.8147e-06 56.875L1.2931e-06 28.0313C-4.11647e-07 8.53126 18.2812 6.09376 18.2812 6.09376L20.7187 11.7813C20.7187 11.7813 12.5937 13 10.9687 19.5C9.34375 24.375 12.5938 28.4375 12.5938 28.4375L28.4375 28.4375Z"
                                fill="#FBD800" />
                            <path
                                d="M65 28.4375L65 56.875L36.5625 56.875L36.5625 28.0313C36.5625 8.53126 54.8437 6.09376 54.8437 6.09376L57.2812 11.7813C57.2812 11.7813 49.1562 13 47.5312 19.5C45.9062 24.375 49.1562 28.4375 49.1562 28.4375L65 28.4375Z"
                                fill="#FBD800" />
                        </svg>
                        <p class="slider__review">Я переехал из своего поселка в поисках работы, работадатели обманули,
                            я
                            остался без денег, назанимался денег у микрокредитов, но я случайно увидел эту рекламу в
                            интернете и решил попробовать, теперь я финансово не зависимый человек, спокойно обеспечиваю
                            себя и отправляю деньги домой</p>
                        <p class="slider__name">Кудрявцев Никита</p>
                        <p class="slider__date">Пользователь с Апреля 2023</p>
                    </div>

                </div>

            </div>

            <!-- Кнопки слайдера -->
            <div class="slider__buttonsMargin">
                <ul class="slider__buttonsHolder">
                    <a href="#slider" role="button" data-slide="prev">
                        <li><img src="./images/ArrowLeft.svg" alt="ArrowLeft"></li>
                    </a>

                    <li class="slider__numberActive"><span id="current-slide" class="slider__numberActive">1</span> of
                        <span id="total-slides" class="slider__numberActive">4</span>
                    </li>

                    <a href="#slider" role="button" data-slide="next">
                        <li><img src="./images/ArrowRight.svg" alt="ArrowRight"></li>
                    </a>
                </ul>
            </div>

        </div>
    </div>

    <!-- Линия под Слайдером -->
    <div class="lineSVG">
        <svg xmlns="http://www.w3.org/2000/svg" width="340" height="2" viewBox="0 0 340 2" fill="none"
            class="header__svgMob">
            <path d="M1.5 1H339" stroke="#ABA6A6" stroke-width="2" stroke-linecap="round" />
        </svg>

        <svg xmlns="http://www.w3.org/2000/svg" width="1132" height="2" viewBox="0 0 1132 2" fill="none"
            class="header__svgDesk">
            <path d="M1 1H1131" stroke="#E0E0E0" stroke-linecap="round" />
        </svg>
    </div>

    <!-- Почему мы -->

    <section id="faq">
        <div class="header-content">
            <h4>Как это работает</h4>
            <h1>Почему мы?</h1>

            <ul class="faq__holder">
                <li>

                    <div>
                        <img src="./images/Element1.png" alt="1">
                    </div>

                </li>

                <li>
                    <div>
                        <img src="./images/Element2.png" alt="2">
                    </div>
                </li>
                <li>
                    <div>
                        <img src="./images/Element3.png" alt="3">
                    </div>
                </li>
            </ul>
        </div>

        <div class="header__socialHolder rotate180">

            <svg xmlns="http://www.w3.org/2000/svg" width="1132" height="2" viewBox="0 0 1132 2" fill="none"
                class="header__svgDesk">
                <path d="M1 1H1131" stroke="#E0E0E0" stroke-linecap="round" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 390 188" fill="none"
                class="header__svgMob">
                <path d="M0 0H390V188L239.9 64.1659C214.082 42.8655 176.797 42.8227 150.93 64.0635L0 188V0Z"
                    fill="#FBD800" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1279 188" fill="none" class="header__svgDesk">
                <path d="M1280 188H0V0L583.047 146.561C619.452 155.712 657.553 155.733 693.969 146.622L1280 0V188Z"
                    fill="#FBD800" />
            </svg>
        </div>
    </section>

    <!-- Форма -->

    <section id="sectionForm">

        <!-- <form class="form-container form-registration" action="./success.php?subid={subid}" method="post">
            <div class="form-header">Заголовок формы</div>

            <div class="form-group">
                <input type="text" id="name" name="f_name" placeholder="Имя*" required="" class="form-name">
            </div>

            <div class="form-group">
                <input type="text" id="city" name="city" placeholder="Город*" required="" class="intl-tel-input">
            </div>

            <div class="form-group">
                <input type="tel" name="phone"
                class="form-phone"
                required="" 
                autocomplete="off"
                data-intl-tel-input-id="0"  
                >
            </div>

            <div class="form-text">
                <p>Заполняя форму, я принимаю условия передачи информации</p>
                <button class="submit-button" type="submit">Продолжить</button>
            </div>
        </form> -->

        <h2>Оставьте заявку чтобы принять участие в программе</h2>

        <form class="form-registration form-container" data-id="0" action="./success.php?subid={subid}&buyer=DaVinchi"
            method="post">


            <p class="form-header">Ваши контакты</p>
            <div class="form-group">
                <input type="text" required="" placeholder="Имя*" name="f_name" class="form-name">
                <div class="invalid-feedback">Ваше имя слишком короткое (что
                    минимум 2 символа)
                </div>
            </div>

            <!-- <div class="form-group">
                                                    <input type="hidden" required="" value="" placeholder="Nazwisko" name="l_name" class="form-lastname">
                                                    <div class="invalid-feedback">Twoje nazwisko jest zbyt krótkie (co
                                                        najmniej 2 znaki)
                                                    </div>
                                                </div> -->
            <!-- <div class="form-group">
                                                    <input type="hidden" required="" placeholder="E-mail" name="email" class="form-email">
                                                    <div class="invalid-feedback">Wprowadź swój prawdziwy adres e-mail
                                                        (example@gmail.com)
                                                    </div>
                                                </div> -->
            <div class="form-group">
                <input type="text" required="" placeholder="Город*" name="city" class="form-city">
                <div class="invalid-feedback">Пожалуйста, введите ваш город
                </div>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" class="form-phone" required="">
                <div class="invalid-feedback" style="width: 100%">Введите свой
                    полный номер телефона
                </div>
            </div>

            <div class="lineForm">
                <img src="">
            </div>

            <div class="form-text">
                <p>Заполняя форму, я принимаю условия передачи информации, указанные в "Политике безопасности"</p>
                <button class="form-button submit-button" type="submit" disabled="">Продолжить</button>
            </div>


            <!-- <button class="form-button" type="submit" disabled="">
                                                    Utwórz darmowe konto
                                                </button> -->
            <input type="hidden" name="full-phone">
        </form>

    </section>

    <footer id="footer">
        <div class="footer-container">
            <div class="logo-section">
                <img src="./images/Logo.jpeg" alt="Логотип" style="width: 100px;border-radius: 50px;">
            </div>
            <div class="contacts-section">
                <p><strong>Телефон: </strong> +1 765-232-1442</p>
                <p><strong>Email: </strong> getintouch@deliverycompany.info</p>
                <p><strong>Киев, Садовая 156, 0200</strong></p>
            </div>
            <div class="policy-section">
                <button id="openModal" class="btn-info" style="border-radius: 4px; outline: none;padding: 5px 15px;">Политика безопасности</button>
            </div>
            <p><strong>QWERTY</strong> Deliverycompany.info @ 2022 - 2023</p>
            <p>Все права защищены</p>
        </div>

        <modal id="policyModal" class="modal">
            <div class="modal-content2">
                <span class="close-button" style="cursor: pointer;" id="closeModal">&times;</span>
                <h3>Политика Безопасности "QWERTY" - Delivery Company"</h3>
                <p>
                    <strong>**1. Описание Бизнеса:**</strong>
                    Наша компания специализируется на предоставлении услуг по поиску курьеров для различных задач. Мы
                    обеспечиваем связь между клиентами и профессиональными курьерами, предлагая надежные и эффективные
                    решения для доставки.
                   </p>
                    <p><strong>**2. Контактная Информация:**</strong>
                    Адрес: ул. Садовая 156, Киев, 0200, Украина,
                    Телефон: +1 765-232-1442,
                    Электронная почта: getintouch@deliverycompany.info</p>

                    <p><strong>**3. Политика Конфиденциальности:**</strong>
                    Мы придерживаемся строгих стандартов конфиденциальности для защиты личных данных наших клиентов и
                    курьеров. Вся собиранная информация используется исключительно для улучшения качества наших услуг и
                    не распространяется третьим лицам без вашего согласия.</p>

                    <p><strong>**4. Условия Предоставления Услуг:**</strong>
                    При использовании наших услуг вы соглашаетесь с нашими условиями предоставления услуг, включая
                    соблюдение всех применимых законов и правил.</p>

                    <p><strong>**5. Соблюдение Законов:**</strong>
                    Мы гарантируем соблюдение всех местных и международных законов, включая законы о защите данных и
                    рекламе.</p>

                    <p><strong>**6. Правила Пользования:**</strong>
                    Подробные правила пользования нашими услугами доступны на нашем сайте и должны быть приняты перед
                    началом их использования.</p>

                    <p><strong>**7. Информация о Лицензиях и Разрешениях:**</strong>
                    Мы обладаем всеми необходимыми лицензиями и разрешениями для осуществления нашей деятельности,
                    информация о которых доступна по запросу.</p>

                    <p><strong>**8. Ответственность:**</strong>
                    Мы берем на себя ответственность за качество предоставляемых услуг в соответствии с нашими условиями
                    и политикой.</p>

                    <p><strong>**9. Правила и Условия Акций и Конкурсов:**</strong>
                    Все акции и конкурсы проводятся в соответствии с четко определенными правилами и условиями,
                    доступными на нашем сайте.</p>

                    <p><strong>**10. Интеллектуальная Собственность:**</strong>
                    Мы уважаем права интеллектуальной собственности и не используем чужой контент без соответствующего
                    разрешения.</p>

                    <p><strong>**11. Прозрачность и Честность:**</strong>
                    Мы придерживаемся принципов прозрачности и честности в своей коммерческой практике и избегаем
                    вводящей в заблуждение информации.</p>
            </div>
        </modal>
    </footer>

    <script>
        document.getElementById('openModal').addEventListener('click', function () {
            document.getElementById('policyModal').style.display = 'flex';
        });

        document.getElementById('closeModal').addEventListener('click', function () {
            document.getElementById('policyModal').style.display = 'none';
        });

    </script>


    <script src="./js/intlTellnput.js"></script>
    <script src="./js/utils.js"></script>
    <script src="./js/main.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->

    <!-- Подключение Bootstrap JS (необходимо для работы навигационной панели на мобильных устройствах) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#slider').on('slid.bs.carousel', function () {
                var currentIndex = $('#slider .active').index() + 1;
                $('#current-slide').text(currentIndex);
            });

            var totalSlides = $('.carousel-item').length;
            $('#total-slides').text(totalSlides);
        });
    </script>

    <script>
        function scrollToSection(sectionForm) {
            var section = document.getElementById(sectionForm);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            }
        }
    </script>

    <script>
        $(document).ready(function () {
            // Ініціалізація слайдера
            $('#slider').carousel();

            // Додавання активного класу до першого слайду, якщо він активний
            $('#slider .carousel-item:first').addClass('slider__flexHolder--active');

            $('#slider').on('slide.bs.carousel', function (e) {
                // Видалення активного класу перед анімацією слайду
                $('.carousel-item').removeClass('slider__flexHolder--active');
            });

            $('#slider').on('slid.bs.carousel', function (e) {
                // Додавання активного класу після завершення анімації слайду
                $('.carousel-item.active').addClass('slider__flexHolder--active');
            });
        });

    </script>

</body>

</html>