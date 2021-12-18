<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name='wmail-verification' content='c753241162480be45f31088f8917cb88'/>
    <!-- Styles -->

    <title>ЖБИ заборы в Лиде</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="yandex-verification" content="2b2270aab57e8e11"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!-- Favicon
    <link href="favicon.ico" rel="shortcut icon">-->
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- Template CSS -->
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/font-awesome.css" rel="stylesheet">
    <link href="/css/nexus.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/custom.css" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
</head>
<body>
<div id="body-bg">
    <div id="hornav" class="bottom-border-shadow">
        <div class="container no-padding border-bottom">
            <div class="row">
                <div class="col-md-10 no-padding">
                    <div class="visible-lg">
                        <ul id="hornavmenu" class="nav navbar-nav">
                            <li>
                                <a href="/" class="fa-home active">Главная</a>
                            </li>
                            <li>
                                <a href="/catalog" class="fa-database" title="Наша продукция">Каталог</a>
                                <ul>
                                    <li>
                                        <a href="/catalog/zabor">Заборы</a>
                                    </li>
                                    <li>
                                        <a href="/catalog/malarh">Малые архитектурные формы</a>
                                    </li>
                                    <li>
                                        <a href="/catalog/block">Блоки бетонные</a>
                                    </li>
                                    <li>
                                        <a href="/catalog/vorota">Ворота</a>
                                    </li>
                                    <li>
                                        <a href="/catalog/trotuar">Тротуарная плитка</a>
                                    </li>
                                    <li>
                                        <a href="/catalog/oblicovka">Облицовочная плитка</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/faq" class="fa-question" title="Часто задаваемые вопросы">F.A.Q.</a>
                            </li>
                            <li>

                                <a href="/portfolio" class="fa-picture-o">Фото</a>

                            </li>

                            <li>
                                <span class="fa-font">Статьи</span>
                                <ul>
                                    <li>
                                        <a href="/articles/classification_beton">Классификация бетонной смеси</a>
                                    </li>
                                    <li>
                                        <a href="/articles/ukladka_plitki">Укладка тротуарной плитки</a>
                                    </li>
                                    <li>
                                        <a href="/articles/fasadnaja">Фасадная плитка</a>
                                    </li>

                                    <li>
                                        <a href="/articles/pro_fundament">Про фундамент</a>
                                    </li>
                                    <li>
                                        <a href="/articles/tverdenie_betona">Твердение бетона</a>
                                    </li>
                                    <li>
                                        <a href="/articles/zasita_betona">Защита бетона</a>
                                    </li>
                                    <li>
                                        <a href="/articles/bruschatka">Брусчатка</a>
                                    </li>


                                </ul>
                            </li>
                            <li>
                                <a href="/contact" class="fa-comment">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <main class="py-4">
        @yield('content')
    </main>

    <div id="base">
        <div class="container bottom-border padding-vert-30">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="class margin-bottom-10">Информация</h3>
                    <p>По всем вопросам звоните или пишите, мы обязательно ответим.</p>
                    <p>Следите за скидками и акциями на нашем сайте.</p>
                    <p><a href="{{route('login')}}">Вход</a></p>
                </div>
                <div class="col-md-4 margin-bottom-20">
                    <h3 class="margin-bottom-10">Наши контакты</h3>
                    <p>
                        <span class="fa-phone">Телефон:</span>+375 (29) 871 56 53
                        <br>
                        <span class="fa-envelope">Email:</span>
                        <a href="mailto:zaborlida2010@yandex.ru">zaborlida2010@yandex.ru</a>
                        <br>
                        <span class="fa-link">Веб сайт:</span>
                        <a href="http://www.betonstile.by">www.betonstile.by</a>
                    </p>
                </div>
                <div class="col-md-4 margin-bottom-20">
                    <h3 class="margin-bottom-10">Интересное</h3>
                    <ul class="menu">
                        <li>
                            <a class="fa-tasks" href="#">Статьи</a>
                        </li>
                        <li>
                            <a class="fa-users" href="/portfolio">Фото заборов наших клиентов</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div id="footer" class="background-grey">
        <div class="container">
            <div class="row">
                <!-- Footer Menu -->
                <div id="footermenu" class="col-md-4">
                    <ul class="list-unstyled list-inline">
                        <li>
                            <a href="mailto:allximik50@gmail.com" target="_blank">Разработка сайта:
                                allximik50@gmail.com</a>
                        </li>

                    </ul>
                </div>
                <!-- End Footer Menu -->
                <!-- Copyright -->
                <div id="copyright" class="col-md-8">
                    <p class="pull-right">(c) 2017-
                        <script type='text/javascript'>
                            var mdate = new Date();
                            document.write(mdate.getFullYear());</script>
                        При копировании материалов ссылка на www.betonstile.by обязательна.
                    </p>
                </div>
                <!-- End Copyright -->
            </div>
        </div>
    </div>
    <!-- End Footer -->
    <!-- JS -->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>
    <!-- Isotope - Portfolio Sorting -->
    <script type="text/javascript" src="/js/jquery.isotope.js"></script>
    <!-- Mobile Menu - Slicknav -->
    <script type="text/javascript" src="/js/jquery.slicknav.js"></script>
    <!-- Animate on Scroll-->
    <script type="text/javascript" src="/js/jquery.visible.js" charset="utf-8"></script>
    <!-- Sticky Div -->
    <script type="text/javascript" src="/js/jquery.sticky.js" charset="utf-8"></script>
    <!-- Slimbox2-->
    <script type="text/javascript" src="/js/slimbox2.js" charset="utf-8"></script>
    <!-- Modernizr -->
    <script src="/js/modernizr.custom.js" type="text/javascript"></script>
    <!-- End JS -->

</div>
</body>
</html>

