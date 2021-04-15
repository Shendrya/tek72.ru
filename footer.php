<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

</div>

        <footer class="footer">
            <div class="wrap-1000">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-auto footer_menu">
                            <ul class="nav menu">
                                <li class="item-144"><a href="/skladskaya-spravka-tyumen">Складская справка Тюмень</a></li>
                                <li class="item-145"><a href="/informatsiya-dlya-postavshchikov">Информация для поставщиков</a></li>
                            </ul>
                            <!--This code is installed via module -->
                            <script type="text/javascript">
                                (function () {
                                    var widget_id = "DClJbmeVd8";
                                    var d = document;
                                    var w = window;
                                    function l() {
                                        var s = document.createElement("script");
                                        s.type = "text/javascript";
                                        s.async = true;
                                        s.src = "//code.jivosite.com/script/widget/" + widget_id;
                                        var ss = document.getElementsByTagName("script")[0];
                                        ss.parentNode.insertBefore(s, ss);
                                    }
                                    if (d.readyState == "complete") {
                                        l();
                                    } else {
                                        if (w.attachEvent) {
                                            w.attachEvent("onload", l);
                                        } else {
                                            w.addEventListener("load", l, false);
                                        }
                                    }
                                })();
                            </script>
                        </div>
                        <div class="col footer_courses d-none d-lg-block">
                            <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-6 col-lg-5">
                                        <!--  FOREXPF.RU - Forex start -->
                                        <div class="title">Курс цветных металлов</div>
                                        <div class="date">30.03.2021</div>
                                        <div class="price">
                                            <div>Алюминий $<span id="calumb">0.00</span>/тонна</div>
                                            <div>Медь $<span id="ccopperb">0.00</span>/тонна</div>
                                            <div style="display: none;">
                                                <a href="http://www.forexpf.ru/"></a>
                                                <span id="caluma"></span>
                                                <span id="ccoppera"></span>
                                                <span id="ccomtm"></span>
                                            </div>
                                        </div>
                                        <script src="https://informers.forexpf.ru/js/legacy/commod/65.js"></script>
                                        <!--  FOREXPF.RU - Forex end -->
                                    </div>
                                    <div class="col-6 col-lg-3">
                                        <!--  FOREXPF.RU - Forex start -->
                                        <div class="title">Курс валют</div>
                                        <div class="date">30.03.2021</div>
                                        <div class="price">
                                            <div>$ <span id="usdrubbid">0.00</span></div>
                                            <div>€ <span id="eurrubbid">0.00</span></div>
                                            <div style="display: none;">
                                                <a href="http://www.profinance.ru/"></a>
                                                <span id="usdrubask"></span>
                                                <span id="eurrubask"></span>
                                                <span id="euusrutm"></span>
                                            </div>
                                        </div>
                                        <script charset="utf-8" src="https://informers.forexpf.ru/export/euusrub.js"></script>
                                        <!--  FOREXPF.RU - Forex end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-sm-none"></div>
                        <div class="col-12 col-lg-auto footer_copyright">
                            <p>
                                ул. Харьковская, 59, 3 этаж<br />
                                <a href="tel:+73452411890">+7 (3452) 41-18-90</a><br />
                                <a href="tel:+73452411071">+7 (3452) 41-10-71</a>
                                <!--<a href="tel:+79222680961">+7 (922) 268-09-61</a><br /><span>Приём заказов, доставка<br />с 30.03-30.04.2020</span>-->
                            </p>
                            © 2021 Союз-Энерго
                        </div>
                    </div>
                </div>
            </div>
        </footer>


<?php wp_footer(); ?>

        <!-- Yandex.Metrika counter -->
        <script type="text/javascript">
            (function (d, w, c) {
                (w[c] = w[c] || []).push(function () {
                    try {
                        w.yaCounter45474036 = new Ya.Metrika({ id: 45474036, clickmap: true, trackLinks: true, accurateTrackBounce: true });
                    } catch (e) {}
                });
                var n = d.getElementsByTagName("script")[0],
                    s = d.createElement("script"),
                    f = function () {
                        n.parentNode.insertBefore(s, n);
                    };
                s.type = "text/javascript";
                s.async = true;
                s.src = "https://mc.yandex.ru/metrika/watch.js";
                if (w.opera == "[object Opera]") {
                    d.addEventListener("DOMContentLoaded", f, false);
                } else {
                    f();
                }
            })(document, window, "yandex_metrika_callbacks");
        </script>
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/45474036" style="position: absolute; left: -9999px;" alt="" /></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->
        <!-- Yandex.Metrika counter -->
      <!-- Временно отключено  <script type="text/javascript">
            (function (m, e, t, r, i, k, a) {
                m[i] =
                    m[i] ||
                    function () {
                        (m[i].a = m[i].a || []).push(arguments);
                    };
                m[i].l = 1 * new Date();
                (k = e.createElement(t)), (a = e.getElementsByTagName(t)[0]), (k.async = 1), (k.src = r), a.parentNode.insertBefore(k, a);
            })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

            ym(58297432, "init", {
                clickmap: true,
                trackLinks: true,
                accurateTrackBounce: true,
                webvisor: true,
            });
        </script>-->
        <noscript>
            <div><img src="https://mc.yandex.ru/watch/58297432" style="position: absolute; left: -9999px;" alt="" /></div>
        </noscript>
        <!-- /Yandex.Metrika counter -->

        <!--Временно отключено <script src="https://cdn.callibri.ru/callibri.js" type="text/javascript" charset="utf-8"></script>-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.2.2/js/swiper.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script>
            $(document).ready(function () {
                var swiper = new Swiper(".swiper-container", {
                    slidesPerView: 1,
                    //loop: true,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev",
                    },
                });
            });
        </script>
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-N8DRSMP");
        </script>
        <script src="<?php bloginfo('template_url'); ?>assets/js/bootstrap.min.js?eae6acb9a784cac9e14c97cc0bb79ccd"></script>
        <script src="<?php bloginfo('template_url'); ?>assets/js/template.js?1844064448"></script>
        <!--[if lt IE 9]><script src="/media/jui/js/html5.js?eae6acb9a784cac9e14c97cc0bb79ccd"></script><![endif]-->
    </body>
</html>
