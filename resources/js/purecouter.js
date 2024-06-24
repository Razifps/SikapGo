!(function (e) {
    var t = {};
    function r(n) {
        if (t[n]) return t[n].exports;
        var a = (t[n] = { i: n, l: !1, exports: {} });
        return e[n].call(a.exports, a, a.exports, r), (a.l = !0), a.exports;
    }
    (r.m = e),
        (r.c = t),
        (r.d = function (e, t, n) {
            r.o(e, t) ||
                Object.defineProperty(e, t, { enumerable: !0, get: n });
        }),
        (r.r = function (e) {
            "undefined" != typeof Symbol &&
                Symbol.toStringTag &&
                Object.defineProperty(e, Symbol.toStringTag, {
                    value: "Module",
                }),
                Object.defineProperty(e, "__esModule", { value: !0 });
        }),
        (r.t = function (e, t) {
            if ((1 & t && (e = r(e)), 8 & t)) return e;
            if (4 & t && "object" == typeof e && e && e.__esModule) return e;
            var n = Object.create(null);
            if (
                (r.r(n),
                Object.defineProperty(n, "default", {
                    enumerable: !0,
                    value: e,
                }),
                2 & t && "string" != typeof e)
            )
                for (var a in e)
                    r.d(
                        n,
                        a,
                        function (t) {
                            return e[t];
                        }.bind(null, a)
                    );
            return n;
        }),
        (r.n = function (e) {
            var t =
                e && e.__esModule
                    ? function () {
                          return e.default;
                      }
                    : function () {
                          return e;
                      };
            return r.d(t, "a", t), t;
        }),
        (r.o = function (e, t) {
            return Object.prototype.hasOwnProperty.call(e, t);
        }),
        (r.p = "/"),
        r((r.s = 2));
})([
    ,
    ,
    function (e, t, r) {
        e.exports = r(3);
    },
    function (e, t, r) {
        "use strict";
        function n(e, t) {
            for (var r = 0; r < t.length; r++) {
                var n = t[r];
                (n.enumerable = n.enumerable || !1),
                    (n.configurable = !0),
                    "value" in n && (n.writable = !0),
                    Object.defineProperty(e, n.key, n);
            }
        }
        r.r(t);
        new ((function () {
            function e() {
                !(function (e, t) {
                    if (!(e instanceof t))
                        throw new TypeError(
                            "Cannot call a class as a function"
                        );
                })(this, e),
                    this.registerEventListeners();
            }
            var t, r, a;
            return (
                (t = e),
                (r = [
                    {
                        key: "registerEventListeners",
                        value: function () {
                            var e = this,
                                t = document.querySelectorAll(".purecounter");
                            if (this.intersectionListenerSupported())
                                for (
                                    var r = new IntersectionObserver(
                                            this.animateElements.bind(this),
                                            {
                                                root: null,
                                                rootMargin: "20px",
                                                threshold: 0.5,
                                            }
                                        ),
                                        n = 0;
                                    n < t.length;
                                    n++
                                )
                                    r.observe(t[n]);
                            else
                                window.addEventListener &&
                                    (this.animateLegacy(t),
                                    window.addEventListener(
                                        "scroll",
                                        function (r) {
                                            e.animateLegacy(t);
                                        },
                                        { passive: !0 }
                                    ));
                        },
                    },
                    {
                        key: "animateLegacy",
                        value: function (e) {
                            for (var t = 0; t < e.length; t++)
                                !0 === this.parseConfig(e[t]).legacy &&
                                    this.elementIsInView(e[t]) &&
                                    this.animateElements([e[t]]);
                        },
                    },
                    {
                        key: "animateElements",
                        value: function (e, t) {
                            var r = this;
                            e.forEach(function (e) {
                                var n =
                                    void 0 !== e.target
                                        ? r.parseConfig(e.target)
                                        : r.parseConfig(e);
                                return n.duration <= 0
                                    ? (e.innerHTML = n.end.toFixed(n.decimals))
                                    : (!t && !r.elementIsInView(e)) ||
                                      (t && e.intersectionRatio < 0.5)
                                    ? (e.target.innerHTML =
                                          n.start > n.end ? n.end : n.start)
                                    : void setTimeout(function () {
                                          return void 0 !== e.target
                                              ? r.startCounter(e.target, n)
                                              : r.startCounter(e, n);
                                      }, n.delay);
                            });
                        },
                    },
                    {
                        key: "startCounter",
                        value: function (e, t) {
                            var r = this,
                                n = (t.end - t.start) / (t.duration / t.delay),
                                a = "inc";
                            t.start > t.end && ((a = "dec"), (n *= -1)),
                                n < 1 && t.decimals <= 0 && (n = 1);
                            var i =
                                t.decimals <= 0
                                    ? parseInt(t.start)
                                    : parseFloat(t.start).toFixed(t.decimals);
                            (e.innerHTML = i),
                                !0 === t.once &&
                                    e.setAttribute(
                                        "data-purecounter-duration",
                                        0
                                    );
                            var o = setInterval(function () {
                                var s = r.nextNumber(i, n, t, a);
                                (e.innerHTML = r.formatNumber(s, t) + "+"),
                                    (((i = s) >= t.end && "inc" == a) ||
                                        (i <= t.end && "dec" == a)) &&
                                        (clearInterval(o),
                                        i != t.end &&
                                            (e.innerHTML = r.applySeparator(
                                                t.decimals <= 0
                                                    ? parseInt(t.end)
                                                    : parseFloat(t.end).toFixed(
                                                          t.decimals
                                                      ),
                                                t
                                            )));
                            }, t.delay);
                        },
                    },
                    {
                        key: "parseConfig",
                        value: function (e) {
                            for (
                                var t = [].filter.call(
                                        e.attributes,
                                        function (e) {
                                            return /^data-purecounter-/.test(
                                                e.name
                                            );
                                        }
                                    ),
                                    r = {
                                        start: 0,
                                        end: 9901,
                                        duration: 2e3,
                                        delay: 10,
                                        once: !0,
                                        decimals: 0,
                                        legacy: !0,
                                        currency: !1,
                                        currencysymbol: !1,
                                        separator: !1,
                                        separatorsymbol: ",",
                                    },
                                    n = 0;
                                n < t.length;
                                n++
                            ) {
                                var a = t[n].name.replace(
                                    "data-purecounter-",
                                    ""
                                );
                                r[a.toLowerCase()] =
                                    "duration" == a.toLowerCase()
                                        ? parseInt(
                                              1e3 *
                                                  this.castDataType(t[n].value)
                                          )
                                        : this.castDataType(t[n].value);
                            }
                            return r;
                        },
                    },
                    {
                        key: "nextNumber",
                        value: function (e, t, r, n) {
                            return (
                                n || (n = "inc"),
                                "inc" === n
                                    ? r.decimals <= 0
                                        ? parseInt(e) + parseInt(t)
                                        : parseFloat(e) + parseFloat(t)
                                    : r.decimals <= 0
                                    ? parseInt(e) - parseInt(t)
                                    : parseFloat(e) - parseFloat(t)
                            );
                        },
                    },
                    {
                        key: "formatNumber",
                        value: function (e, t) {
                            var r =
                                t.decimals <= 0
                                    ? parseInt(e)
                                    : e.toLocaleString(void 0, {
                                          minimumFractionDigits: t.decimals,
                                          maximumFractionDigits: t.decimals,
                                      });
                            return (
                                (r = t.currency
                                    ? this.convertToCurrencySystem(e, t)
                                    : r),
                                this.applySeparator(r, t)
                            );
                        },
                    },
                    {
                        key: "convertToCurrencySystem",
                        value: function (e, t) {
                            var r = t.currencysymbol || "",
                                n = t.decimals || 1;
                            return (
                                r +
                                (Math.abs(Number(e)) >= 1e12
                                    ? (Math.abs(Number(e)) / 1e12).toFixed(n) +
                                      " T"
                                    : Math.abs(Number(e)) >= 1e9
                                    ? (Math.abs(Number(e)) / 1e9).toFixed(n) +
                                      " B"
                                    : Math.abs(Number(e)) >= 1e6
                                    ? (Math.abs(Number(e)) / 1e6).toFixed(n) +
                                      " M"
                                    : Math.abs(Number(e)) >= 1e3
                                    ? (Math.abs(Number(e)) / 1e3).toFixed(n) +
                                      " K"
                                    : Math.abs(Number(e)))
                            );
                        },
                    },
                    {
                        key: "castDataType",
                        value: function (e) {
                            return /^[0-9]+\.[0-9]+$/.test(e)
                                ? parseFloat(e)
                                : /^[0-9]+$/.test(e)
                                ? parseInt(e)
                                : e;
                        },
                    },
                    {
                        key: "applySeparator",
                        value: function (e, t) {
                            return t.separator
                                ? e
                                      .toString()
                                      .replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
                                      .replace(
                                          new RegExp(/,/gi, "gi"),
                                          t.separatorsymbol
                                      )
                                : e
                                      .toString()
                                      .replace(new RegExp(/,/gi, "gi"), "");
                        },
                    },
                    {
                        key: "elementIsInView",
                        value: function (e) {
                            for (
                                var t = e.offsetTop,
                                    r = e.offsetLeft,
                                    n = e.offsetWidth,
                                    a = e.offsetHeight;
                                e.offsetParent;

                            )
                                (t += (e = e.offsetParent).offsetTop),
                                    (r += e.offsetLeft);
                            return (
                                t >= window.pageYOffset &&
                                r >= window.pageXOffset &&
                                t + a <=
                                    window.pageYOffset + window.innerHeight &&
                                r + n <= window.pageXOffset + window.innerWidth
                            );
                        },
                    },
                    {
                        key: "intersectionListenerSupported",
                        value: function () {
                            return (
                                "IntersectionObserver" in window &&
                                "IntersectionObserverEntry" in window &&
                                "intersectionRatio" in
                                    window.IntersectionObserverEntry.prototype
                            );
                        },
                    },
                ]) && n(t.prototype, r),
                a && n(t, a),
                e
            );
        })())();
    },
]);