<!DOCTYPE html>
<html lang="ru">
<?php require "general-components/head.php"; ?>
<body class="container-fluid p-0">
<div class="wrapper">
    <section class="fullscreen">
        <div class="fullscreen__body">
            <header class="main-header pb-5">
                <?php require "general-components/nav.php"; ?>
                <div class="info-block">
                    <img class="info-block__info-logo mt-md-5" src="img/image-07-10-20-02-28-2%201.png" alt="">
                    <h1 class="info-block__coach-title">Life coach soul</h1>
                    <h3 class="info-block__school-title mb-3">Онлайн школа</h3>
                    <a class="info-block__call-btn mb-5 my-md-5 pt-md-3 px-3 py-3">приступить к обучению</a>
                </div>
            </header>

            <main class="main-content">
                <section class="about-author container-fluid px-0">
                    <div class="container">
                        <div class="row p-o">
                            <div class="col-lg-12 col-12">
                                <p class="about-author__title my-md-5 my-4">Об авторе</p>
                            </div>
                            <div class="col-lg-6 col-12 d-sm-none d-none d-lg-block">
                                <img class="icon-img" src="img/Photo.png"
                                     alt="Lilit Vag photo">
                            </div>
                            <div class="col-12 mx-auto d-block d-lg-none small-bg">
                                <img class="mt-1" src="img/sm-autor.png"
                                     alt="Lilit Vag photo">
                            </div>
                            <div class="col-lg-6 col-12 mb-md-1 pt-4">
                                <a class="about-author__name my-md-5 my-3" name="author" href="#">Лилит Ваг —</a>
                                <ul class="about-author__list">
                                    <li class="about-author__block my-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <div class="about-author__info col-md-10 col-11">Основатель Онлайн Школы
                                                "Life Coach
                                                Soul"
                                            </div>
                                        </div>
                                    </li>
                                    <li class="about-author__block my-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info d-inline col-md-10 col-11">Ведущий тренер института Люди Без Границ</span>
                                        </div>
                                    </li>
                                    <li class="about-author__block my-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <div class="about-author__info d-inline col-md-10 col-11">Создатель
                                                авторских курсов и
                                                практик <br> для личностного и духовного роста
                                            </div>
                                        </div>
                                    </li>

                                    <li class="about-author__block my-2">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-10 col-11">Продюсер Он-лайн проектов</span>
                                        </div>
                                    </li>

                                </ul>
                                <a class="about-author__call-btn my-4 my-md-5 pt-md-3 px-3 py-3">приступить к
                                    обучению</a>
                            </div>
                        </div>
                    </div>

                </section>

                <section class="school-product container-fluid py-5 px-md-5">
                    <div class="container my-md-5 mx-auto">
                        <h3 class="school-product__title mb-md-5 mb-4">Курсы и продукты школы</h3>

                        <div class="can-toggle text-center">
                            <div class="form_radio_btn fm">
                                <input id="radio-1" type="radio" name="radio" value="1" onclick="show1()" checked>
                                <label for="radio-1">Лайф-коучинг</label>
                            </div>

                            <div class="form_radio_btn sm">
                                <input id="radio-2" type="radio" name="radio" value="2" onclick="show2()">
                                <label for="radio-2">Тотальная перезагрузка</label>
                            </div>
                        </div>

                        <div class="coaching-block my-5 px-0 container">
                            <div class="first">
                                <div class="row">
                                    <div class="col-lg-3 col-12">
                                        <h3 class="coaching-block__title">Старт коучинга:</h3>
                                        <p class="coaching-block__info">1 декабря 2020 года</p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <h3 class="coaching-block__title">Длительность обучения:</h3>
                                        <p class="coaching-block__info">2 месяца</p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <h3 class="coaching-block__title">Формат обучения:</h3>
                                        <p class="coaching-block__info">Онлайн</p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <h3 class="coaching-block__title">Бонус:</h3>
                                        <p class="coaching-block__info">Чат с участниками</p>
                                    </div>
                                </div>
                            </div>

                            <div class="second hide">
                                <div class="row">
                                    <div class="col-lg-3 col-12">
                                        <h3 class="coaching-block__title">Старт коучинга:</h3>
                                        <p class="coaching-block__info">13 января 2021 года</p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <h3 class="coaching-block__title">Длительность обучения:</h3>
                                        <p class="coaching-block__info">1 месяц</p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <h3 class="coaching-block__title">Формат обучения:</h3>
                                        <p class="coaching-block__info">Онлайн</p>
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <h3 class="coaching-block__title">Бонус:</h3>
                                        <p class="coaching-block__info">Чат с участниками</p>
                                    </div>
                                </div>
                            </div>
                            <p class="lesson-txt mt-3">
                                Программа курса , Разработана автором школы , для глубинных, экологичных и точечных
                                решений ,
                                основных жизненных задач человека.Иструменты подбираются индивидуально под запрос
                                клиента.
                            </p>

                            <h3 class="skill-title my-5">Что нужно знать и уметь, для того чтобы <br> стать экспертом в
                                Коучинге?
                            </h3>
                            <div class="row">
                                <ul class="lesson-txt col-lg-6 col-12">
                                    <li class="skill-title__list mb-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="far fa-star yellow-star"></i>
                                            </div>
                                            <span class="skill-title__info col-md-11 col-10">В первую очередь , прокачать себя и свои собственные навыки в
                            решении жизненно важных задач</span>
                                        </div>
                                    </li>
                                    <li class="skill-title__list mb-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="far fa-star yellow-star"></i>
                                            </div>
                                            <span class="skill-title__info col-md-11 col-10">Найти у себя причины развития неконструктивных событий и решить
                            их, с помощью специальных инструментов по расширению сознания</span>
                                        </div>
                                    </li>
                                    <li class="skill-title__list mb-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="far fa-star yellow-star"></i>
                                            </div>
                                            <span class="skill-title__info col-md-11 col-10">Развить у себя сознание изобилия</span>
                                        </div>
                                    </li>
                                    <li class="skill-title__list mb-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="far fa-star yellow-star"></i>
                                            </div>
                                            <span class="skill-title__info col-md-11 col-10">Пройти опыт индивидуальных сессий с участниками курса,
                            заработать навык экологичного взаимодействия с будущими клиентами</span>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="lesson-txt col-lg-6 col-12">
                                    <li class="skill-title__list mb-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="far fa-star yellow-star"></i>
                                            </div>
                                            <span class="skill-title__info col-md-11 col-10">Обучится навыку продаж с личных сессий, мастер групп и курсов на
                            большую аудиторию</span>
                                        </div>
                                    </li>
                                    <li class="skill-title__list mb-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="far fa-star yellow-star"></i>
                                            </div>
                                            <span class="skill-title__info col-md-11 col-10">Найти у себя причины развития неконструктивных событий и решить
                            их, с помощью специальных инструментов по расширению сознания</span>
                                        </div>
                                    </li>
                                    <li class="skill-title__list mb-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="far fa-star yellow-star"></i>
                                            </div>
                                            <span class="skill-title__info col-md-11 col-10">Навыки по прокачке своих интернет площадок и научится делать
                            качественный контент</span>
                                        </div>
                                    </li>
                                    <li class="skill-title__list mb-3">
                                        <div class="row">
                                            <div class="col-1">
                                                <i class="far fa-star yellow-star"></i>
                                            </div>
                                            <span class="skill-title__info col-md-11 col-10">Диплом Коуча и возможность открыть свою собственную онлайн
                            школу с большими перспективами на будущее</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="module p-3 p-lg-5 mb-5">

                                <p class="module__module-number">Первый модуль</p>

                                <h2 class="module__module-title">«Домашний Коуч»</h2>
                                <div class="pull-right mt-md-n4">
                                    <p class="module__module-period">Длительность обучения:
                                    </p>
                                    <p class="module__module-period">1 месяц</p>
                                </div>
                                <ul class="module__module-paragraph">
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Развитие личных качеств по расширению границ сознания</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star "></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Прокачиваем мышление и сознание изобилия во всех сферах</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-2">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Избавление от внутренних границ</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Проработка программ долга, жертвы, детские травмы и многое другое</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Найти у себя причины развития неконструктивных событий и
                                решить их, с помощью специальных инструментов по расширению сознания.</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Инструменты проработки конкретных задач у человека и дальнейшее
                        кураторство в рамках курса</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Чат Коучей всех потоков, возможность работы в парах, для
                        проработки личных целей</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">И многое многое другое</span>
                                        </div>
                                    </li>
                                </ul>
                                <p class="module__module-info mt-5">Чат с участниками доступен для Вас Бессрочно!</p>
                            </div>


                            <div class="module p-3 p-lg-5">
                                <p class="module__module-number">Второй модуль</p>
                                <h2 class="module__module-title">«Эксперт»</h2>

                                <p class="module__module-period pull-right mt-md-n4">Длительность обучения:
                                </p>
                                <p class="module__module-period pull-right">1 месяц</p>

                                <ul class="module__module-paragraph">
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Все уроки и инструменты от первого модуля</span>
                                        </div>
                                    </li>

                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Обучение Навыкам онлайн продаж</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Обучение продаж с вебинаров</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">План составления продающих вебинаров и помощь в выборе и разборе тем</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Навыки качественного позиционирования себя и своих услуг в
                        социальных сетях (Инстаграм)</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Навыки По Личным и индивидуальным продажам</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Навыки продаж на групповые Коучинговые услуги</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Чат Коучей всех потоков, возможность работы в парах, для проработки
                        личных целей</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Предоставление моей аудитории, Ваших первых клиентов и первых
                        доходов</span>
                                        </div>
                                    </li>
                                    <li class="module__module-list my-3">
                                        <div class="row">
                                            <div class="col-1 mr-md-n4">
                                                <i class="far fa-star pink-star"></i>
                                            </div>
                                            <span class="about-author__info col-md-11 col-10 ml-lg-n4">Диплом Лайф-Коуча</span>
                                        </div>
                                    </li>
                                </ul>
                                <p class="module__module-info mt-5">Чат с участниками доступен для Вас Бессрочно!</p>
                            </div>
                            <div class="my-5 text-center">
                                <span class="question-txt">Остались вопросы? через ватсапп можете задать любой вопрос</span>
                                <i class="fab fa-whatsapp fa-lg text-white ml-4"></i>
                            </div>
                            <div class="text-center">
                                <a class="pay-btn my-4 my-md-2 pt-md-3 px-3 py-3 mx-auto">перейти к оплате</a>
                            </div>
                        </div>
                    </div>
                </section>
                <h3 class="question mb-5">Как приступить к обучению?</h3>
                <section class="stage p-lg-0">
                    <div class="container p-lg-0">
                        <div class="row p-lg-0">
                            <div class="col-lg-12 col-12">
                                <div class="row">
                                    <div class="col-lg-2 col-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-4 text-center stage__stage-number">01</div>
                                            <div class="col-lg-12 col-8 stage__stage-txt mt-4 ml-lg-4">
                                                Выбрать
                                                коучинг
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 p-0 d-sm-none d-none d-xl-block"><img
                                                class="stage__arrow mt-5 ml-n4"
                                                src="img/Arrow.svg"
                                                alt="large-arrow">
                                    </div>
                                    <div class="col-lg-1 p-0 d-sm-none d-none d-xl-none d-lg-block"><img
                                                class="stage__arrow mt-5 ml-n4"
                                                src="img/arrow-sm.png"
                                                alt="small-arrow">
                                    </div>
                                    <div class="col-lg-2 col-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-4 text-center stage__stage-number">02</div>
                                            <div class="col-lg-12 col-8 stage__stage-txt mt-4">Перейти к
                                                оплате по
                                                <a class="stage__stage-link">ссылке</a></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 p-0 d-sm-none d-none d-xl-block"><img
                                                class="stage__arrow mt-5 ml-n4"
                                                src="img/Arrow.svg"
                                                alt="large-arrow">
                                    </div>
                                    <div class="col-lg-1 p-0 d-sm-none d-none d-xl-none d-lg-block"><img
                                                class="stage__arrow mt-5 ml-n4"
                                                src="img/arrow-sm.png"
                                                alt="small-arrow">
                                    </div>

                                    <div class="col-lg-2 col-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-4 text-center stage__stage-number">03</div>
                                            <div class="col-lg-12 col-8 stage__stage-txt mt-4">После
                                                оплаты вы получaeте доступ к личному кабинету
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1 p-0 d-sm-none d-none d-xl-block"><img
                                                class="stage__arrow mt-5"
                                                src="img/Arrow.svg"
                                                alt="large-arrow">
                                    </div>
                                    <div class="col-lg-1 p-0 d-sm-none d-none d-xl-none d-lg-block"><img
                                                class="stage__arrow mt-5"
                                                src="img/arrow-sm.png"
                                                alt="small-arrow">
                                    </div>
                                    <div class="col-lg-3 col-12">
                                        <div class="row">
                                            <div class="col-lg-12 col-4 text-center stage__stage-number">
                                                04
                                            </div>
                                            <div class="col-lg-12 col-8 stage__stage-txt mt-4">Приступаете к
                                                обучению в
                                                личном кабинете
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>

        </div>
    </section>
    <?php include "general-components/footer.php"; ?>
</div>
<a href="#top" class="top-btn px-2 py-2" id="top-btn">
    <img class="top-arrow mb-2 mr-1" src="img/Vector.svg" alt="top-arrow" style="vertical-align:middle">
    <span class="top-txt">Вверх</span>
</a>
<script src="video.js"></script>
<script>
    function show1() {
        let i;
        let elems = document.getElementsByClassName('first');
        for (i = 0; i < elems.length; i++) elems[i].style.display = 'block';
        elems = document.getElementsByClassName('second');
        for (i = 0; i < elems.length; i++) elems[i].style.display = 'none';

    }

    function show2() {

        let i;
        let elems2 = document.getElementsByClassName('second');
        for (i = 0; i < elems2.length; i++) elems2[i].style.display = 'block';

        elems2 = document.getElementsByClassName('first');
        for (i = 0; i < elems2.length; i++) elems2[i].style.display = 'none';
    }
</script>
</body>
</html>