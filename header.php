<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!DOCTYPE html>
<html lang="ru-ru" dir="ltr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/css/swiper.min.css" />
        <!-- Google Tag Manager -->
        <!-- End Google Tag Manager -->
        <meta charset="utf-8" />
        <!--<base href="http://tek72.ru/" />-->
        <meta name="generator" content="Joomla! - Open Source Content Management" />
        <title>Главная страница</title>
        <link href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
        <link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php bloginfo('template_url'); ?>/assets/css/template.css" rel="stylesheet" />
    </head>
    <body class="site com_content view-featured no-layout no-task itemid-101">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8DRSMP" height="0" width="0" style="display: none; visibility: hidden;"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!-- Body -->
        <div class="body">
            <div class="dk_trdm">
                <a href="https://trdm.su/"> <img src="https://trdm.su/img/logo.png" style="display: block; width: 100%; /* min-width: 150px; */ margin-top: 20px;" /></a>

                <a href="https://trdm.su/">
                    <div style="color: white;">
                        АО "Завод "Тюменьремдормаш"<br />
                        Официальный партнер<br />
                        Производство металлопродукции для строительства, обустройства дорог
                    </div>
                </a>
            </div>
            <div class="modal fade" id="callbackDialog" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="phoneInput">Номер телефона</label>
                                    <input type="text" name="phone" class="form-control" id="phoneInput" data-mask="+7 (000) 000 00 00" placeholder="+7 (___) ___ __ __" />
                                </div>

                                <div class="form-group">
                                    <label for="nameInput">Как к Вам обращаться</label>
                                    <input type="text" name="name" class="form-control" id="nameInput" placeholder="Иван" />
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Перезвоните мне</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="priceDialog" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="priceNameInput">Как к Вам обращаться</label>
                                    <input type="text" name="name" class="form-control" id="priceNameInput" placeholder="Иван" />
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="pricePhoneInput">Номер телефона</label>
                                            <input type="text" name="phone" class="form-control" id="pricePhoneInput" data-mask="+7 (000) 000 00 00" placeholder="+7 (___) ___ __ __" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="priceMailInput">или E-mail</label>
                                            <input type="email" name="email" class="form-control" id="priceMailInput" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="priceCableInput">Наименование кабеля</label>
                                            <input type="text" name="cable" class="form-control" id="priceCableInput" />
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="priceLengthInput">Метраж кабеля</label>
                                            <input type="text" name="length" class="form-control" id="priceLengthInput" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check form-check-inline">
                                        <input type="radio" name="delivery" id="priceDeliveryInput1" value="самовывоз" checked /><label class="form-check-label" for="priceDeliveryInput1">Самовывоз</label>
                                    </div>
                                    <div class="form-check form-check-inline"><input type="radio" name="delivery" id="priceDeliveryInput2" value="доставка" /><label class="form-check-label" for="priceDeliveryInput2">Доставка</label></div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Получить прайс</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                .header-firstLine {
                    height: 60px;
                    background: #263a4b;
                    border-bottom: 1px solid #2d2d2da0;
                }
                .header-firstLine__text {
                    color: white;
                }
                .header-firstLine__link {
                    color: white;
                    margin-right: 20px;
                    font-size: 18px;
                }
                .header-firstLine__linkLast {
                    margin-right: 0;
                }
                .header-firstLine__link:hover {
                    color: white;
                }
                .header-firstLine__spacer {
                    width: 147px;
                }
                .callbackButton {
                    color: white;
                    font-size: 18px;
                    border: 2px solid white;
                    padding: 5px 15px;
                }
                .callbackButton:hover {
                    background: white;
                    text-decoration: none;
                    color: #263a4b;
                }
                .dk_trdm {
                    width: 414px;
                    position: absolute;
                    display: grid;
                    grid-template-columns: 130px 1fr;
                    grid-gap: 10px;
                    right: 10px;
                    top: 10px; /* background-color: #b3160f; */
                    padding: 11px;
                    font-size: 14px;
                    border: 2px solid white;
                }
                .dk_trdm_2 {
                    width: 414px;
                    display: grid;
                    grid-template-columns: 130px 1fr;
                    grid-gap: 10px;
                    right: 10px;
                    top: 10px;
                    padding: 11px;
                    font-size: 14px;
                }
                @media (max-width: 1830px) {
                    .dk_trdm {
                        grid-template-columns: 100px 1fr;
                        width: 350px;
                        font-size: 12px;
                    }
                }
                @media (max-width: 1700px) {
                    .dk_trdm {
                        grid-template-columns: 80px 1fr;
                        width: 300px;
                        font-size: 12px;
                    }
                }
                @media (max-width: 1600px) {
                    .dk_trdm {
                        grid-template-columns: 55px 1fr;
                        width: 250px;
                        font-size: 11px;
                    }
                }
                @media (max-width: 1500px) {
                    .dk_trdm {
                        display: none;
                    }
                }

                @media (max-width: 992px) {
                    .header-firstLine {
                        height: 40px;
                        position: fixed;
                        left: 0;
                        top: 0;
                        width: 100%;
                        z-index: 50;
                    }
                    .header-firstLine__link {
                        margin-right: 0;
                        display: block;
                        font-size: 12px;
                    }
                    .callbackButton {
                        color: white;
                        font-size: 15px;
                        border: 2px solid white;
                        padding: 4px 10px;
                    }
                }
                @media (max-width: 768px) {
                    .dk_trdm_2 {
                        width: 100%;
                    }
                }
            </style>
            <div class="header-firstLine">
                <div class="h-100 wrap-1000">
                    <div class="h-100 container-fluid">
                        <div class="row h-100 align-items-center">
                            <div class="col-auto d-none d-lg-block"><div class="header-firstLine__spacer"></div></div>
                            <div class="col">
                                <!--<span class="header-firstLine__text d-none d-lg-block">приём заказов, доставка с 30.03-30.04.2020</span>-->
                                <div><a href="mailto:kabel-tyumen@mail.ru" class="header-firstLine__link">kabel-tyumen@mail.ru</a></div>
                                <a href="tel:+73452411890" class="header-firstLine__link">+7 (3452) 41-18-90</a>
                                <a href="tel:+73452411071" class="header-firstLine__link header-firstLine__linkLast d-none d-lg-inline">+7 (3452) 41-10-71</a>
                                <!--<a href="tel:+79222680961" class="header-firstLine__link header-firstLine__linkLast">+7 (922) 268-09-61</a>-->
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <a href="#" class="callbackButton" data-toggle="modal" data-target="#priceDialog">Заказать прайс</a>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="callbackButton" data-toggle="modal" data-target="#callbackDialog">Перезвоните мне</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <header class="header">
                <div class="h-100 wrap-1000">
                    <div class="container-fluid h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-auto d-lg-none">
                                <div id="toggleMobile"><i class="fa fa-bars"></i></div>
                            </div>
                            <div class="col col-lg-auto logo text-center">
                                <a href="#"><img src="<?php bloginfo('template_url'); ?>/assets/Images/logo.png" alt="Союз-Энерго" /></a>
                            </div>
                            <div class="col d-none search_top">
                                <form id="mod-finder-searchform111" action="/search" method="get" class="form-search">
                                    <div class="finder">
                                        <div class="search_str">
                                            <input type="text" name="q" id="mod-finder-searchword111" class="search-query input-medium" value="" placeholder="Начать поиск" />
                                            <button class="search_ok" type="submit"><i class="fa fa-search"></i></button>
                                            <button class="search_cancel" type="reset"><i class="fa fa-times"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col main_menu">
                                <ul class="nav menu" id="main_menu">
                                    <li class="item-114 deeper parent">
                                        <a href="/o-kompanii">О компании</a>
                                        <ul class="nav-child unstyled small">
                                            <li class="item-147"><a href="/o-kompanii/sotrudnichestvo">Сотрудничество</a></li>
                                            <li class="item-120"><a href="/o-kompanii/sertifikaty">Сертификаты</a></li>
                                            <li class="item-119"><a href="/o-kompanii/galereya">Галерея</a></li>
                                            <li class="item-160"><a href="http://soyuz-energo.ru/images/Soyuz_energo.pdf" target="_blank" rel="noopener noreferrer">Презентация</a></li>
                                        </ul>
                                    </li>
                                    <li class="item-115 deeper parent">
                                        <a href="/produktsiya">Продукция</a>
                                        <ul class="nav-child unstyled small">
                                            <li class="item-146"><a href="/produktsiya/marki-po-alfavitu">Марки по алфавиту</a></li>
                                            <li class="item-123 deeper parent">
                                                <a href="/produktsiya/silovye">Силовые</a>
                                                <ul class="nav-child unstyled small">
                                                    <li class="item-129"><a href="/produktsiya/silovye/silovye-v-pvkh">Силовые в ПВХ</a></li>
                                                    <li class="item-130"><a href="/produktsiya/silovye/silovye-v-rezine">Силовые в резине</a></li>
                                                    <li class="item-131"><a href="/produktsiya/silovye/silovye-v-spe">Силовые в СПЭ</a></li>
                                                    <li class="item-132"><a href="/produktsiya/silovye/silovye-v-epr">Силовые в ЭПР</a></li>
                                                    <li class="item-133"><a href="/produktsiya/silovye/silovye-v-bpi">Силовые в БПИ</a></li>
                                                </ul>
                                            </li>
                                            <li class="item-124"><a href="/produktsiya/samonesushchie">Самонесущие</a></li>
                                            <li class="item-125"><a href="/produktsiya/kontrolnye">Контрольные</a></li>
                                            <li class="item-126"><a href="/produktsiya/montazhnye">Монтажные</a></li>
                                            <li class="item-127"><a href="/produktsiya/neizolirovannye">Неизолированные</a></li>
                                            <li class="item-128 deeper parent">
                                                <a href="/produktsiya/prochie">Прочие</a>
                                                <ul class="nav-child unstyled small">
                                                    <li class="item-153"><a href="/produktsiya/prochie/aviakosmicheskie">Авиакосмические</a></li>
                                                    <li class="item-134"><a href="/produktsiya/prochie/aerodromnye">Аэродромные</a></li>
                                                    <li class="item-135"><a href="/produktsiya/prochie/dlya-neftenasosov">Для нефтенасосов</a></li>
                                                    <li class="item-136"><a href="/produktsiya/prochie/dlya-elektrotransporta">Для электротранспорта</a></li>
                                                    <li class="item-137"><a href="/produktsiya/prochie/obmotochnye">Обмоточные</a></li>
                                                    <li class="item-138"><a href="/produktsiya/prochie/pozharobezopasnye">Пожаробезопасные</a></li>
                                                    <li class="item-139"><a href="/produktsiya/prochie/radiochastotnye">Радиочастотные</a></li>
                                                    <li class="item-140"><a href="/produktsiya/prochie/sudovye">Судовые</a></li>
                                                    <li class="item-141"><a href="/produktsiya/prochie/termostojkie">Термостойкие</a></li>
                                                    <li class="item-142"><a href="/produktsiya/prochie/termoelektrodnye">Термоэлектродные</a></li>
                                                    <li class="item-143"><a href="/produktsiya/prochie/shakhtnye-i-ekskavatornye">Шахтные и экскаваторные</a></li>
                                                </ul>
                                            </li>
                                            <li class="item-158"><a href="/skladskaya-spravka-tyumen">Складская справка</a></li>
                                        </ul>
                                    </li>
                                    <li class="item-116 deeper parent">
                                        <a href="/informatsiya">Информация</a>
                                        <ul class="nav-child unstyled small">
                                            <li class="item-121"><a href="/informatsiya/spravochniki">Справочники</a></li>
                                            <li class="item-122"><a href="/informatsiya/novosti-i-stati">Новости и статьи</a></li>
                                        </ul>
                                    </li>
                                    <li class="item-117"><a href="/kontakty">Контакты</a></li>
                                </ul>
                            </div>
                            <div class="col-auto search">
                                <div class="d-none d-lg-block"><i id="searchToggle" class="fa fa-search"></i></div>
                                <a class="d-lg-none" href="/search"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
