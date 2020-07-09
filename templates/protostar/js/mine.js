/* Initialize Swiper */
jQuery(document).ready(function ($) {

    new WOW().init();

    /*Подключаем библиотеку для Анимации счетчика цифр*/

    /* Таймер обратного отсчета */
    /* Customizable-Themeable-jQuery-Countdown-Plugin-dsCountDown */
    /* https://www.jqueryscript.net/time-clock/Customizable-Themeable-jQuery-Countdown-Plugin-dsCountDown.html */
    /*!
        dsCountDown v1.0
        jQuery count down plugin
        (c) 2013 I Wayan Wirka - http://iwayanwirka.duststone.com/dscountdown/
        license: http://www.opensource.org/licenses/mit-license.php
    */
    (function (e) {
        e.fn.dsCountDown = function (t) {
            var n = this;
            var r = 1e3, i = null, s = false, o = 0, u = 1, a = 0, f = 0, l = 0, c = 0, h = 0, p = null, d = null,
                v = null, m = null;
            var g = {
                startDate: new Date,
                endDate: null,
                elemSelDays: "",
                elemSelHours: "",
                elemSelMinutes: "",
                elemSelSeconds: "",
                theme: "white",
                titleDays: "Days",
                titleHours: "Hours",
                titleMinutes: "Minutes",
                titleSeconds: "Seconds",
                onBevoreStart: null,
                onClocking: null,
                onFinish: null
            };
            var y = e.extend({}, g, t);
            if (this.length > 1) {
                this.each(function () {
                    e(this).dsCountDown(t)
                });
                return this
            }
            var b = function () {
                if (!y.elemSelSeconds) {
                    n.prepend('<div class="ds-element ds-element-seconds">							<div class="ds-element-title">' + y.titleSeconds + '</div>							<div class="ds-element-value ds-seconds">00</div>						</div>');
                    m = n.find(".ds-seconds")
                } else {
                    m = n.find(y.elemSelSeconds)
                }
                if (!y.elemSelMinutes) {
                    n.prepend('<div class="ds-element ds-element-minutes">							<div class="ds-element-title">' + y.titleMinutes + '</div>							<div class="ds-element-value ds-minutes">00</div>						</div>');
                    v = n.find(".ds-minutes")
                } else {
                    v = n.find(y.elemSelMinutes)
                }
                if (!y.elemSelHours) {
                    n.prepend('<div class="ds-element ds-element-hours">							<div class="ds-element-title">' + y.titleHours + '</div>							<div class="ds-element-value ds-hours">00</div>						</div>');
                    d = n.find(".ds-hours")
                } else {
                    d = n.find(y.elemSelHours)
                }
                if (!y.elemSelDays) {
                    n.prepend('<div class="ds-element ds-element-days">							<div class="ds-element-title">' + y.titleDays + '</div>							<div class="ds-element-value ds-days">00</div>						</div>');
                    p = n.find(".ds-days")
                } else {
                    p = n.find(y.elemSelDays)
                }
                n.addClass("dsCountDown");
                n.addClass("ds-" + y.theme);
                if (y.startDate && y.endDate) {
                    a = y.endDate.getTime() - y.startDate.getTime();
                    if (a > 0) {
                        var e = a / 1e3;
                        var t = e % 86400;
                        var r = t % 3600;
                        o = e;
                        h = Math.floor(e / 86400);
                        c = Math.floor(t / 3600);
                        l = Math.floor(r / 60);
                        f = Math.floor(r % 60)
                    }
                }
                E()
            };
            var w = function (e) {
                if (s) {
                    clearInterval(i);
                    s = false
                }
                if (e) {
                    e(n)
                }
            };
            var E = function () {
                if (!s) {
                    if (o > 0) {
                        if (y.onBevoreStart) {
                            y.onBevoreStart(n)
                        }
                        i = setInterval(function () {
                            if (o > 0) {
                                o -= u;
                                f -= u;
                                if (f <= 0 && (l > 0 || c > 0 || h > 0)) {
                                    l--;
                                    f = 60
                                }
                                if (l <= 0 && (c > 0 || h > 0)) {
                                    c--;
                                    l = 60
                                }
                                if (c <= 0 && h > 0) {
                                    h--;
                                    c = 24
                                }
                                if (p) p.html(h < 10 ? "0" + h : h);
                                if (d) d.html(c < 10 ? "0" + c : c);
                                if (v) v.html(l < 10 ? "0" + l : l);
                                if (m) m.html(f < 10 ? "0" + f : f);
                                if (y.onClocking) {
                                    y.onClocking(n)
                                }
                            } else {
                                w(y.onFinish)
                            }
                        }, r);
                        s = true
                    } else {
                        if (y.onFinish) {
                            y.onFinish(n)
                        }
                    }
                }
            };
            b()
        }
    })(jQuery)

    /* Анимация счетчика цифр - библиотека jquery.spincrement.min.js */
    !function (t) {
        t.extend(t.easing, {
            spincrementEasing: function (t, a, e, n, r) {
                return a === r ? e + n : n * (-Math.pow(2, -10 * a / r) + 1) + e
            }
        }), t.fn.spincrement = function (a) {
            function e(t, a) {
                if (t = t.toFixed(a), a > 0 && "." !== r.decimalPoint && (t = t.replace(".", r.decimalPoint)), r.thousandSeparator) for (; o.test(t);) t = t.replace(o, "$1" + r.thousandSeparator + "$2");
                return t
            }

            var n = {
                from: 0,
                to: null,
                decimalPlaces: null,
                decimalPoint: ".",
                thousandSeparator: ",",
                duration: 1e3,
                leeway: 50,
                easing: "spincrementEasing",
                fade: !0,
                complete: null
            }, r = t.extend(n, a), o = new RegExp(/^(-?[0-9]+)([0-9]{3})/);
            return this.each(function () {
                var a = t(this), n = r.from;
                a.attr("data-from") && (n = parseInt(a.attr("data-from")));
                var o;
                if (a.attr("data-to")) o = parseInt(a.attr("data-to")); else if (null !== r.to) o = r.to; else {
                    var i = t.inArray(r.thousandSeparator, ["\\", "^", "$", "*", "+", "?", "."]) > -1 ? "\\" + r.thousandSeparator : r.thousandSeparator,
                        l = new RegExp(i, "g");
                    o = parseInt(a.text().replace(l, ""))
                }
                var c = r.duration;
                r.leeway && (c += Math.round(r.duration * (2 * Math.random() - 1) * r.leeway / 100));
                var s;
                if (a.attr("data-dp")) s = parseInt(a.attr("data-dp"), 10); else if (null !== r.decimalPlaces) s = r.decimalPlaces; else {
                    var d = a.text().indexOf(r.decimalPoint);
                    s = d > -1 ? a.text().length - (d + 1) : 0
                }
                a.css("counter", n), r.fade && a.css("opacity", 0), a.animate({
                    counter: o,
                    opacity: 1
                }, {
                    easing: r.easing, duration: c, step: function (t) {
                        a.html(e(t * o, s))
                    }, complete: function () {
                        a.css("counter", null), a.html(e(o, s)), r.complete && r.complete(a)
                    }
                })
            })
        }
    }(jQuery);

    /* Анимация при прокрутке до нужного блока */
    (function ($) {
        $.fn.viewportChecker = function (useroptions) {
            var options = {
                classToAdd: 'visible',
                classToRemove: 'invisible',
                classToAddForFullView: 'full-visible',
                removeClassAfterAnimation: false,
                offset: 100,
                repeat: false,
                invertBottomOffset: true,
                callbackFunction: function (elem, action) {
                },
                scrollHorizontal: false,
                scrollBox: window
            };
            $.extend(options, useroptions);
            var $elem = this, boxSize = {height: $(options.scrollBox).height(), width: $(options.scrollBox).width()};
            this.checkElements = function () {
                var viewportStart, viewportEnd;
                if (!options.scrollHorizontal) {
                    viewportStart = Math.max($('html').scrollTop(), $('body').scrollTop(), $(window).scrollTop());
                    viewportEnd = (viewportStart + boxSize.height);
                } else {
                    viewportStart = Math.max($('html').scrollLeft(), $('body').scrollLeft(), $(window).scrollLeft());
                    viewportEnd = (viewportStart + boxSize.width);
                }
                $elem.each(function () {
                    var $obj = $(this), objOptions = {}, attrOptions = {};
                    if ($obj.data('vp-add-class')) attrOptions.classToAdd = $obj.data('vp-add-class');
                    if ($obj.data('vp-remove-class')) attrOptions.classToRemove = $obj.data('vp-remove-class');
                    if ($obj.data('vp-add-class-full-view')) attrOptions.classToAddForFullView = $obj.data('vp-add-class-full-view');
                    if ($obj.data('vp-keep-add-class')) attrOptions.removeClassAfterAnimation = $obj.data('vp-remove-after-animation');
                    if ($obj.data('vp-offset')) attrOptions.offset = $obj.data('vp-offset');
                    if ($obj.data('vp-repeat')) attrOptions.repeat = $obj.data('vp-repeat');
                    if ($obj.data('vp-scrollHorizontal')) attrOptions.scrollHorizontal = $obj.data('vp-scrollHorizontal');
                    if ($obj.data('vp-invertBottomOffset')) attrOptions.scrollHorizontal = $obj.data('vp-invertBottomOffset');
                    $.extend(objOptions, options);
                    $.extend(objOptions, attrOptions);
                    if ($obj.data('vp-animated') && !objOptions.repeat) {
                        return;
                    }
                    if (String(objOptions.offset).indexOf("%") > 0) objOptions.offset = (parseInt(objOptions.offset) / 100) * boxSize.height;
                    var rawStart = (!objOptions.scrollHorizontal) ? $obj.offset().top : $obj.offset().left,
                        rawEnd = (!objOptions.scrollHorizontal) ? rawStart + $obj.height() : rawStart + $obj.width();
                    var elemStart = Math.round(rawStart) + objOptions.offset,
                        elemEnd = (!objOptions.scrollHorizontal) ? elemStart + $obj.height() : elemStart + $obj.width();
                    if (objOptions.invertBottomOffset) elemEnd -= (objOptions.offset * 2);
                    if ((elemStart < viewportEnd) && (elemEnd > viewportStart)) {
                        $obj.removeClass(objOptions.classToRemove);
                        $obj.addClass(objOptions.classToAdd);
                        objOptions.callbackFunction($obj, "add");
                        if (rawEnd <= viewportEnd && rawStart >= viewportStart) {
                            $obj.addClass(objOptions.classToAddForFullView);
                        } else {
                            $obj.removeClass(objOptions.classToAddForFullView);
                        }
                        $obj.data('vp-animated', true);
                        if (objOptions.removeClassAfterAnimation) {
                            $obj.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                                $obj.removeClass(objOptions.classToAdd);
                            });
                        }
                    } else if ($obj.hasClass(objOptions.classToAdd) && (objOptions.repeat)) {
                        $obj.removeClass(objOptions.classToAdd + " " + objOptions.classToAddForFullView);
                        objOptions.callbackFunction($obj, "remove");
                        $obj.data('vp-animated', false);
                    }
                });
            };
            if ('ontouchstart' in window || 'onmsgesturechange' in window) {
                $(document).bind("touchmove MSPointerMove pointermove", this.checkElements);
            }
            $(options.scrollBox).bind("load scroll", this.checkElements);
            $(window).resize(function (e) {
                boxSize = {height: $(options.scrollBox).height(), width: $(options.scrollBox).width()};
                $elem.checkElements();
            });
            this.checkElements();
            return this;
        };
    })(jQuery);
    /*\\Подключаем библиотеку для Анимации счетчика цифр*/


    /* Слайдер сертификатов */
    var swiper = new Swiper('#license .swiper-container', {
        slidesPerView: 3,
        spaceBetween: 10,
        pagination: {
            el: '#license .swiper-pagination',
            clickable: true,
        },
        // Responsive breakpoints
        breakpoints: {
            // when window width is >= 0px
            0: {
                slidesPerView: 1,
                spaceBetween: 10
            },// when window width is >= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            // when window width is >= 480px
            480: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window width is >= 640px
            640: {
                slidesPerView: 2,
                spaceBetween: 10
            },
            // when window width is >= 640px
            992: {
                slidesPerView: 3,
                spaceBetween: 10
            }

        },
    });


    /* Слайдер образец документов */
    var swiper = new Swiper('#fire_security .swiper-container', {
        /*slidesPerView*/
        spaceBetween: 30,
        pagination: {
            el: '#fire_security .swiper-pagination',
            clickable: true,
        },
    });

    /* Слайдер отзывов */
    var swiper = new Swiper('#feedback .swiper-container', {
        slidesPerView: 1,
        spaceBetween: 30,
        navigation: {
            nextEl: '#feedback .swiper-button-next',
            prevEl: '#feedback .swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });


    /* Анимация счетчика цифр */
    $('.promo-block').viewportChecker({
        callbackFunction: function (elem, action) {
            setTimeout(function () {
                $(".spincrement").spincrement({
                    from: 0,                // Стартовое число
                    to: false,              // Итоговое число. Если false, то число будет браться из элемента с классом spincrement, также сюда можно напрямую прописать число. При этом оно может быть, как целым, так и с плавающей запятой
                    decimalPlaces: 0,       // Сколько знаков оставлять после запятой
                    decimalPoint: ".",      // Разделитель десятичной части числа
                    thousandSeparator: "", // Разделитель тыcячных
                    duration: 4000          // Продолжительность анимации в миллисекундах
                });
            }, 300);
        }
    });


    $('ul > li.plus .btn-outline-success').on('click', function (e) {
        e.preventDefault();
        if ($(this).hasClass("active_li")) {
            $(this).removeClass('active_li');
            $(this).text('Показать часть направлений');
            $(this).parent().parent().children('li.hidden.active').removeClass('active');
        } else {
            $(this).addClass('active_li');
            $(this).text('Скрыть часть направлений');
            $(this).parent().parent().children('li.hidden').addClass('active');
        }

    });

    /* Прикрепление top_menu */

    /* Функция для фиксированной шапки - меняем высоту шапки при прокрутки страницы вниз */

    function fixed_header() {
        var w_width = $(window).width(); // ширина окна
        var h_hght = 100; // высота скрываемой части шапки
        var elem = $('header');  // цель для доп.класса
        var top = $(this).scrollTop(); // высота от верхней границы страницы при скроле

        if (top > h_hght && w_width > 991) {
            elem.addClass('top_mini');
        } else {
            if (elem.hasClass('top_mini')) {
                elem.removeClass('top_mini');
            }
        }
    }

    fixed_header();
    $(window).resize(function () {
        fixed_header();
    });

    $(window).scroll(function () {
        fixed_header();
    });
    /* \\END Прикрепление top_menu */

});



