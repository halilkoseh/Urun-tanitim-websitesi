<!DOCTYPE html>
<html lang="tr">
    @include('partials.head')
    <body>
        @include('partials.header')
        @include('partials.banner')
        @include('partials.about')
        @include('partials.threebox1')
        @include('partials.services')
        @include('partials.video')
        @include('partials.faq')
        @include('partials.download')
        @include('partials.refrance')
        @include('partials.threebox2')
        @include('partials.contact')
        @include('partials.footer')

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var elementsToShow = document.querySelectorAll(".col-gl-4");

                function loop() {
                    elementsToShow.forEach(function (element) {
                        if (isElementInViewport(element)) {
                            element.classList.add("animate");
                        } else {
                        }
                    });

                    requestAnimationFrame(loop);
                }

                loop();

                function isElementInViewport(el) {
                    var rect = el.getBoundingClientRect();
                    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
                }
            });
        </script>


       <script>
            document.addEventListener("DOMContentLoaded", function () {
                var faqSection = document.querySelector(".section-content");
                var faqItems = document.querySelectorAll(".section-content .media");

                function animateFaqItems() {
                    faqItems.forEach(function (item) {
                        if (isElementInViewport(item)) {
                            item.classList.add("animate");
                        } else {
                        }
                    });
                }

                window.addEventListener("scroll", animateFaqItems);

                function isElementInViewport(el) {
                    var rect = el.getBoundingClientRect();
                    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
                }
            });
        </script>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


       <script>
            document.addEventListener("DOMContentLoaded", function () {
                var faqSection = document.querySelector(".faq-section");
                var faqItems = document.querySelectorAll(".faq-item");

                function animateFaqItems() {
                    faqItems.forEach(function (item) {
                        if (isElementInViewport(item)) {
                            item.classList.add("animate");
                        } else {
                        }
                    });
                }

                window.addEventListener("scroll", animateFaqItems);

                function isElementInViewport(el) {
                    var rect = el.getBoundingClientRect();
                    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
                }
            });
        </script>


       <script>
            $(document).ready(function () {
                $(".faq-item .answer").hide();

                $(".faq-item .question").click(function () {
                    $(this).toggleClass("active").next(".answer").slideToggle();
                    if ($(this).hasClass("active")) {
                        $(this).find(".plus-icon").text("🗘");
                    } else {
                        $(this).find(".plus-icon").text("⮞");
                    }
                    $(".faq-item .question").not(this).removeClass("active").next(".answer").slideUp();
                });
            });
        </script>


        <script>
            function getCookie(name) {
                let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") + "=([^;]*)"));
                return matches ? decodeURIComponent(matches[1]) : undefined;
            }

            function setCookie(name, value, options = {}) {
                options = {
                    path: "/",
                    ...options,
                };

                if (options.expires instanceof Date) {
                    options.expires = options.expires.toUTCString();
                }

                let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

                for (let optionKey in options) {
                    updatedCookie += "; " + optionKey;
                    let optionValue = options[optionKey];
                    if (optionValue !== true) {
                        updatedCookie += "=" + optionValue;
                    }
                }

                document.cookie = updatedCookie;
            }

            function acceptCookies() {
                setCookie("acceptedCookies", "true", { expires: new Date(Date.now() + 365 * 24 * 60 * 60 * 1000) });
                document.getElementById("cookiePopup").style.display = "none";
            }

            window.onload = function () {
                if (!getCookie("acceptedCookies")) {
                    document.getElementById("cookiePopup").style.display = "block";
                }
            };
        </script>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var carouselItems = document.querySelectorAll(".carousel-item");
                var currentIndex = 0;
                var intervalId;

                function slideNext() {
                    carouselItems[currentIndex].classList.remove("active");
                    carouselItems[currentIndex].style.opacity = 0;
                    currentIndex = currentIndex === carouselItems.length - 1 ? 0 : currentIndex + 1;
                    carouselItems[currentIndex].classList.add("active");
                    setTimeout(function () {
                        carouselItems[currentIndex].style.opacity = 1;
                    }, 500);
                }

                function slidePrev() {
                    carouselItems[currentIndex].classList.remove("active");
                    carouselItems[currentIndex].style.opacity = 0;
                    currentIndex = currentIndex === 0 ? carouselItems.length - 1 : currentIndex - 1;
                    carouselItems[currentIndex].classList.add("active");
                    setTimeout(function () {
                        carouselItems[currentIndex].style.opacity = 1;
                    }, 500);
                }

                document.querySelector(".carousel-control-prev").addEventListener("click", function () {
                    slidePrev();
                    clearInterval(intervalId);
                });

                document.querySelector(".carousel-control-next").addEventListener("click", function () {
                    slideNext();
                    clearInterval(intervalId);
                });

                // Start automatic sliding
                intervalId = setInterval(slideNext, 10000);
            });
        </script>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var elementsToShow = document.querySelectorAll(".col-xl-4");

                function loop() {
                    elementsToShow.forEach(function (element) {
                        if (isElementInViewport(element)) {
                            element.classList.add("animate");
                        } else {
                        }
                    });

                    scroll(loop);
                }

                loop();

                function isElementInViewport(el) {
                    var rect = el.getBoundingClientRect();
                    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
                }

                function scroll(callback) {
                    window.addEventListener("scroll", callback);
                }
            });
        </script>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var elementsToShow = document.querySelectorAll(".col-md-12");

                function loop() {
                    elementsToShow.forEach(function (element) {
                        if (isElementInViewport(element)) {
                            element.classList.add("animate");
                        } else {
                        }
                    });

                    scroll(loop);
                }

                loop();

                function isElementInViewport(el) {
                    var rect = el.getBoundingClientRect();
                    return rect.top >= 0 && rect.left >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && rect.right <= (window.innerWidth || document.documentElement.clientWidth);
                }

                function scroll(callback) {
                    window.addEventListener("scroll", callback);
                }
            });
        </script>


       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>


       <script>
            function openVideoPopup() {
                var modal = document.getElementById("videoModal");
                modal.style.display = "block";

                var videoContainer = document.getElementById("videoContainer");
                videoContainer.innerHTML =
                    '<video id="popupVideo" width="100%" height="100%" controls muted>\
                                   <source src="images/videoplayback.mp4" type="video/mp4">\
                                   Your browser does not support the video tag.\
                                   </video>';
            }

            function closeVideoPopup() {
                var modal = document.getElementById("videoModal");
                var videoContainer = document.getElementById("videoContainer");

                modal.style.display = "none";

                videoContainer.innerHTML = "";
            }
        </script>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#myNavbar a").on("click", function () {
                    $("#myNavbar").find(".active").removeClass("active");
                    $(this).addClass("active");
                });
            });
        </script>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <script>
            document.addEventListener("DOMContentLoaded", function () {
                document.getElementById("popup").style.display = "block";

                setTimeout(function () {
                    document.getElementById("popup").style.display = "none";
                }, 3000);
            });
        </script>


        <script>
            (function (e) {
                "use strict";
                var t = "ScrollIt",
                    n = "1.0.3";
                var r = { upKey: 38, downKey: 40, easing: "linear", scrollTime: 600, activeClass: "active", onPageChange: null, topOffset: 0 };
                e.scrollIt = function (t) {
                    var n = e.extend(r, t),
                        i = 0,
                        s = e("[data-scroll-index]:last").attr("data-scroll-index");
                    var o = function (t) {
                        if (t < 0 || t > s) return;
                        var r = e("[data-scroll-index=" + t + "]").offset().top + n.topOffset + 1;
                        e("html,body").animate({ scrollTop: r, easing: n.easing }, n.scrollTime);
                    };
                    var u = function (t) {
                        var n = e(t.target).closest("[data-scroll-nav]").attr("data-scroll-nav") || e(t.target).closest("[data-scroll-goto]").attr("data-scroll-goto");
                        o(parseInt(n));
                    };
                    var a = function (t) {
                        var r = t.which;
                        if (e("html,body").is(":animated") && (r == n.upKey || r == n.downKey)) {
                            return false;
                        }
                        if (r == n.upKey && i > 0) {
                            o(parseInt(i) - 1);
                            return false;
                        } else if (r == n.downKey && i < s) {
                            o(parseInt(i) + 1);
                            return false;
                        }
                        return true;
                    };
                    var f = function (t) {
                        if (n.onPageChange && t && i != t) n.onPageChange(t);
                        i = t;
                        e("[data-scroll-nav]").removeClass(n.activeClass);
                        e("[data-scroll-nav=" + t + "]").addClass(n.activeClass);
                    };
                    var l = function () {
                        var t = e(window).scrollTop();
                        var r = e("[data-scroll-index]").filter(function (r, i) {
                            return t >= e(i).offset().top + n.topOffset && t < e(i).offset().top + n.topOffset + e(i).outerHeight();
                        });
                        var i = r.first().attr("data-scroll-index");
                        f(i);
                    };
                    e(window).on("scroll", l).scroll();
                    e(window).on("keydown", a);
                    e("body").on("click", "[data-scroll-nav], [data-scroll-goto]", function (e) {
                        e.preventDefault();
                        u(e);
                    });
                };
            })(jQuery);


        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
        <script src="scrollIt.min.js"></script>
        <script src="wow.min.js"></script>


        <script>
            wow = new WOW();
            wow.init();
            $(document).ready(function (e) {
                $("#video-icon").on("click", function (e) {
                    e.preventDefault();
                    $(".video-popup").css("display", "flex");
                    $(".iframe-src").slideDown();
                });
                $(".video-popup").on("click", function (e) {
                    var $target = e.target.nodeName;
                    var video_src = $(this).find("iframe").attr("src");
                    if ($target != "IFRAME") {
                        $(".video-popup").fadeOut();
                        $(".iframe-src").slideUp();
                        $(".video-popup iframe").attr("src", " ");
                        $(".video-popup iframe").attr("src", video_src);
                    }
                });

                $(".slider").bxSlider({
                    pager: false,
                });
            });

            $(window).on("scroll", function () {
                var bodyScroll = $(window).scrollTop(),
                    navbar = $(".navbar");

                if (bodyScroll > 50) {
                    $(".navbar-logo img").attr("src", "images/unnamed-removebg-preview1.png");
                    navbar.addClass("nav-scroll");
                } else {
                    $(".navbar-logo img").attr("src", "images/unnamed-removebg-preview1.png");
                    navbar.removeClass("nav-scroll");
                }
            });
            $(window).on("load", function () {
                var bodyScroll = $(window).scrollTop(),
                    navbar = $(".navbar");

                if (bodyScroll > 50) {
                    $(".navbar-logo img").attr("src", "images/unnamed-removebg-preview1.png");
                    navbar.addClass("nav-scroll");
                } else {
                    $(".navbar-logo img").attr("src", "images/unnamed-removebg-preview1.png");
                    navbar.removeClass("nav-scroll");
                }

                $.scrollIt({
                    easing: "swing",
                    scrollTime: 900,
                    activeClass: "active",
                    onPageChange: null,
                    topOffset: -63,
                });
            });
        </script>


        <script>
            (function () {
                var a,
                    b,
                    c,
                    d,
                    e,
                    f = function (a, b) {
                        return function () {
                            return a.apply(b, arguments);
                        };
                    },
                    g =
                        [].indexOf ||
                        function (a) {
                            for (var b = 0, c = this.length; c > b; b++) if (b in this && this[b] === a) return b;
                            return -1;
                        };
                (b = (function () {
                    function a() {}
                    return (
                        (a.prototype.extend = function (a, b) {
                            var c, d;
                            for (c in b) (d = b[c]), null == a[c] && (a[c] = d);
                            return a;
                        }),
                        (a.prototype.isMobile = function (a) {
                            return /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(a);
                        }),
                        (a.prototype.createEvent = function (a, b, c, d) {
                            var e;
                            return (
                                null == b && (b = !1),
                                null == c && (c = !1),
                                null == d && (d = null),
                                null != document.createEvent
                                    ? ((e = document.createEvent("CustomEvent")), e.initCustomEvent(a, b, c, d))
                                    : null != document.createEventObject
                                    ? ((e = document.createEventObject()), (e.eventType = a))
                                    : (e.eventName = a),
                                e
                            );
                        }),
                        (a.prototype.emitEvent = function (a, b) {
                            return null != a.dispatchEvent ? a.dispatchEvent(b) : b in (null != a) ? a[b]() : "on" + b in (null != a) ? a["on" + b]() : void 0;
                        }),
                        (a.prototype.addEvent = function (a, b, c) {
                            return null != a.addEventListener ? a.addEventListener(b, c, !1) : null != a.attachEvent ? a.attachEvent("on" + b, c) : (a[b] = c);
                        }),
                        (a.prototype.removeEvent = function (a, b, c) {
                            return null != a.removeEventListener ? a.removeEventListener(b, c, !1) : null != a.detachEvent ? a.detachEvent("on" + b, c) : delete a[b];
                        }),
                        (a.prototype.innerHeight = function () {
                            return "innerHeight" in window ? window.innerHeight : document.documentElement.clientHeight;
                        }),
                        a
                    );
                })()),
                    (c =
                        this.WeakMap ||
                        this.MozWeakMap ||
                        (c = (function () {
                            function a() {
                                (this.keys = []), (this.values = []);
                            }
                            return (
                                (a.prototype.get = function (a) {
                                    var b, c, d, e, f;
                                    for (f = this.keys, b = d = 0, e = f.length; e > d; b = ++d) if (((c = f[b]), c === a)) return this.values[b];
                                }),
                                (a.prototype.set = function (a, b) {
                                    var c, d, e, f, g;
                                    for (g = this.keys, c = e = 0, f = g.length; f > e; c = ++e) if (((d = g[c]), d === a)) return void (this.values[c] = b);
                                    return this.keys.push(a), this.values.push(b);
                                }),
                                a
                            );
                        })())),
                    (a =
                        this.MutationObserver ||
                        this.WebkitMutationObserver ||
                        this.MozMutationObserver ||
                        (a = (function () {
                            function a() {
                                "undefined" != typeof console && null !== console && console.warn("MutationObserver is not supported by your browser."),
                                    "undefined" != typeof console && null !== console && console.warn("WOW.js cannot detect dom mutations, please call .sync() after loading new content.");
                            }
                            return (a.notSupported = !0), (a.prototype.observe = function () {}), a;
                        })())),
                    (d =
                        this.getComputedStyle ||
                        function (a, b) {
                            return (
                                (this.getPropertyValue = function (b) {
                                    var c;
                                    return (
                                        "float" === b && (b = "styleFloat"),
                                        e.test(b) &&
                                            b.replace(e, function (a, b) {
                                                return b.toUpperCase();
                                            }),
                                        (null != (c = a.currentStyle) ? c[b] : void 0) || null
                                    );
                                }),
                                this
                            );
                        }),
                    (e = /(\-([a-z]){1})/g),
                    (this.WOW = (function () {
                        function e(a) {
                            null == a && (a = {}),
                                (this.scrollCallback = f(this.scrollCallback, this)),
                                (this.scrollHandler = f(this.scrollHandler, this)),
                                (this.resetAnimation = f(this.resetAnimation, this)),
                                (this.start = f(this.start, this)),
                                (this.scrolled = !0),
                                (this.config = this.util().extend(a, this.defaults)),
                                null != a.scrollContainer && (this.config.scrollContainer = document.querySelector(a.scrollContainer)),
                                (this.animationNameCache = new c()),
                                (this.wowEvent = this.util().createEvent(this.config.boxClass));
                        }
                        return (
                            (e.prototype.defaults = { boxClass: "wow", animateClass: "animated", offset: 0, mobile: !0, live: !0, callback: null, scrollContainer: null }),
                            (e.prototype.init = function () {
                                var a;
                                return (
                                    (this.element = window.document.documentElement),
                                    "interactive" === (a = document.readyState) || "complete" === a ? this.start() : this.util().addEvent(document, "DOMContentLoaded", this.start),
                                    (this.finished = [])
                                );
                            }),
                            (e.prototype.start = function () {
                                var b, c, d, e;
                                if (
                                    ((this.stopped = !1),
                                    (this.boxes = function () {
                                        var a, c, d, e;
                                        for (d = this.element.querySelectorAll("." + this.config.boxClass), e = [], a = 0, c = d.length; c > a; a++) (b = d[a]), e.push(b);
                                        return e;
                                    }.call(this)),
                                    (this.all = function () {
                                        var a, c, d, e;
                                        for (d = this.boxes, e = [], a = 0, c = d.length; c > a; a++) (b = d[a]), e.push(b);
                                        return e;
                                    }.call(this)),
                                    this.boxes.length)
                                )
                                    if (this.disabled()) this.resetStyle();
                                    else for (e = this.boxes, c = 0, d = e.length; d > c; c++) (b = e[c]), this.applyStyle(b, !0);
                                return (
                                    this.disabled() ||
                                        (this.util().addEvent(this.config.scrollContainer || window, "scroll", this.scrollHandler),
                                        this.util().addEvent(window, "resize", this.scrollHandler),
                                        (this.interval = setInterval(this.scrollCallback, 50))),
                                    this.config.live
                                        ? new a(
                                              (function (a) {
                                                  return function (b) {
                                                      var c, d, e, f, g;
                                                      for (g = [], c = 0, d = b.length; d > c; c++)
                                                          (f = b[c]),
                                                              g.push(
                                                                  function () {
                                                                      var a, b, c, d;
                                                                      for (c = f.addedNodes || [], d = [], a = 0, b = c.length; b > a; a++) (e = c[a]), d.push(this.doSync(e));
                                                                      return d;
                                                                  }.call(a)
                                                              );
                                                      return g;
                                                  };
                                              })(this)
                                          ).observe(document.body, { childList: !0, subtree: !0 })
                                        : void 0
                                );
                            }),
                            (e.prototype.stop = function () {
                                return (
                                    (this.stopped = !0),
                                    this.util().removeEvent(this.config.scrollContainer || window, "scroll", this.scrollHandler),
                                    this.util().removeEvent(window, "resize", this.scrollHandler),
                                    null != this.interval ? clearInterval(this.interval) : void 0
                                );
                            }),
                            (e.prototype.sync = function (b) {
                                return a.notSupported ? this.doSync(this.element) : void 0;
                            }),
                            (e.prototype.doSync = function (a) {
                                var b, c, d, e, f;
                                if ((null == a && (a = this.element), 1 === a.nodeType)) {
                                    for (a = a.parentNode || a, e = a.querySelectorAll("." + this.config.boxClass), f = [], c = 0, d = e.length; d > c; c++)
                                        (b = e[c]),
                                            g.call(this.all, b) < 0 ? (this.boxes.push(b), this.all.push(b), this.stopped || this.disabled() ? this.resetStyle() : this.applyStyle(b, !0), f.push((this.scrolled = !0))) : f.push(void 0);
                                    return f;
                                }
                            }),
                            (e.prototype.show = function (a) {
                                return (
                                    this.applyStyle(a),
                                    (a.className = a.className + " " + this.config.animateClass),
                                    null != this.config.callback && this.config.callback(a),
                                    this.util().emitEvent(a, this.wowEvent),
                                    this.util().addEvent(a, "animationend", this.resetAnimation),
                                    this.util().addEvent(a, "oanimationend", this.resetAnimation),
                                    this.util().addEvent(a, "webkitAnimationEnd", this.resetAnimation),
                                    this.util().addEvent(a, "MSAnimationEnd", this.resetAnimation),
                                    a
                                );
                            }),
                            (e.prototype.applyStyle = function (a, b) {
                                var c, d, e;
                                return (
                                    (d = a.getAttribute("data-wow-duration")),
                                    (c = a.getAttribute("data-wow-delay")),
                                    (e = a.getAttribute("data-wow-iteration")),
                                    this.animate(
                                        (function (f) {
                                            return function () {
                                                return f.customStyle(a, b, d, c, e);
                                            };
                                        })(this)
                                    )
                                );
                            }),
                            (e.prototype.animate = (function () {
                                return "requestAnimationFrame" in window
                                    ? function (a) {
                                          return window.requestAnimationFrame(a);
                                      }
                                    : function (a) {
                                          return a();
                                      };
                            })()),
                            (e.prototype.resetStyle = function () {
                                var a, b, c, d, e;
                                for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++) (a = d[b]), e.push((a.style.visibility = "visible"));
                                return e;
                            }),
                            (e.prototype.resetAnimation = function (a) {
                                var b;
                                return a.type.toLowerCase().indexOf("animationend") >= 0 ? ((b = a.target || a.srcElement), (b.className = b.className.replace(this.config.animateClass, "").trim())) : void 0;
                            }),
                            (e.prototype.customStyle = function (a, b, c, d, e) {
                                return (
                                    b && this.cacheAnimationName(a),
                                    (a.style.visibility = b ? "hidden" : "visible"),
                                    c && this.vendorSet(a.style, { animationDuration: c }),
                                    d && this.vendorSet(a.style, { animationDelay: d }),
                                    e && this.vendorSet(a.style, { animationIterationCount: e }),
                                    this.vendorSet(a.style, { animationName: b ? "none" : this.cachedAnimationName(a) }),
                                    a
                                );
                            }),
                            (e.prototype.vendors = ["moz", "webkit"]),
                            (e.prototype.vendorSet = function (a, b) {
                                var c, d, e, f;
                                d = [];
                                for (c in b)
                                    (e = b[c]),
                                        (a["" + c] = e),
                                        d.push(
                                            function () {
                                                var b, d, g, h;
                                                for (g = this.vendors, h = [], b = 0, d = g.length; d > b; b++) (f = g[b]), h.push((a["" + f + c.charAt(0).toUpperCase() + c.substr(1)] = e));
                                                return h;
                                            }.call(this)
                                        );
                                return d;
                            }),
                            (e.prototype.vendorCSS = function (a, b) {
                                var c, e, f, g, h, i;
                                for (h = d(a), g = h.getPropertyCSSValue(b), f = this.vendors, c = 0, e = f.length; e > c; c++) (i = f[c]), (g = g || h.getPropertyCSSValue("-" + i + "-" + b));
                                return g;
                            }),
                            (e.prototype.animationName = function (a) {
                                var b;
                                try {
                                    b = this.vendorCSS(a, "animation-name").cssText;
                                } catch (c) {
                                    b = d(a).getPropertyValue("animation-name");
                                }
                                return "none" === b ? "" : b;
                            }),
                            (e.prototype.cacheAnimationName = function (a) {
                                return this.animationNameCache.set(a, this.animationName(a));
                            }),
                            (e.prototype.cachedAnimationName = function (a) {
                                return this.animationNameCache.get(a);
                            }),
                            (e.prototype.scrollHandler = function () {
                                return (this.scrolled = !0);
                            }),
                            (e.prototype.scrollCallback = function () {
                                var a;
                                return !this.scrolled ||
                                    ((this.scrolled = !1),
                                    (this.boxes = function () {
                                        var b, c, d, e;
                                        for (d = this.boxes, e = [], b = 0, c = d.length; c > b; b++) (a = d[b]), a && (this.isVisible(a) ? this.show(a) : e.push(a));
                                        return e;
                                    }.call(this)),
                                    this.boxes.length || this.config.live)
                                    ? void 0
                                    : this.stop();
                            }),
                            (e.prototype.offsetTop = function (a) {
                                for (var b; void 0 === a.offsetTop; ) a = a.parentNode;
                                for (b = a.offsetTop; (a = a.offsetParent); ) b += a.offsetTop;
                                return b;
                            }),
                            (e.prototype.isVisible = function (a) {
                                var b, c, d, e, f;
                                return (
                                    (c = a.getAttribute("data-wow-offset") || this.config.offset),
                                    (f = (this.config.scrollContainer && this.config.scrollContainer.scrollTop) || window.pageYOffset),
                                    (e = f + Math.min(this.element.clientHeight, this.util().innerHeight()) - c),
                                    (d = this.offsetTop(a)),
                                    (b = d + a.clientHeight),
                                    e >= d && b >= f
                                );
                            }),
                            (e.prototype.util = function () {
                                return null != this._util ? this._util : (this._util = new b());
                            }),
                            (e.prototype.disabled = function () {
                                return !this.config.mobile && this.util().isMobile(navigator.userAgent);
                            }),
                            e
                        );
                    })());
            }.call(this));
        </script>


        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>


        <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
            <i class="fas fa-arrow-up"></i>
        </button>


       <script>
            let mybutton = document.getElementById("btn-back-to-top");

            window.onscroll = function () {
                scrollFunction();
            };

            function scrollFunction() {
                const threshold = 50;
                if (document.body.scrollTop > threshold || document.documentElement.scrollTop > threshold) {
                    mybutton.style.bottom = "30px";
                } else {
                    mybutton.style.bottom = "-100px";
                }
            }

            mybutton.addEventListener("click", backToTop);

            function backToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth",
                });
            }
        </script>

    </body>

</html>
