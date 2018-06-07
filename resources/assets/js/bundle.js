! function(e) {
    function t(n) {
        if (a[n]) return a[n].exports;
        var l = a[n] = {
            i: n,
            l: !1,
            exports: {}
        };
        return e[n].call(l.exports, l, l.exports, t), l.l = !0, l.exports
    }
    var a = {};
    t.m = e, t.c = a, t.d = function(e, a, n) {
        t.o(e, a) || Object.defineProperty(e, a, {
            configurable: !1,
            enumerable: !0,
            get: n
        })
    }, t.n = function(e) {
        var a = e && e.__esModule ? function() {
            return e.default
        } : function() {
            return e
        };
        return t.d(a, "a", a), a
    }, t.o = function(e, t) {
        return Object.prototype.hasOwnProperty.call(e, t)
    }, t.p = "/", t(t.s = 0)
}([function(e, t, a) {
    "use strict";
    Object.defineProperty(t, "__esModule", {
        value: !0
    });
    var n = a(1),
        l = (a.n(n), a(2)),
        s = (a.n(l), a(3));
    a.n(s)
}, function(e, t) {}, function(e, t) {}, function(e, t) {
    $(function() {
        $(".banner").slide({
            titCell: ".hd ul",
            mainCell: ".bd ul",
            effect: "fold",
            autoPlay: !0,
            autoPage: !0,
            trigger: "click"
        }), $(".index-products .tabs li").off("click").on("click", function() {
            $(".index-products .tabs li").removeClass("active"), $(this).addClass("active")
        }), $(".index-news .content").slide({
            mainCell: "#miniNewsRegion",
            effect: "topLoop",
            autoPlay: !0
        });
        var e, t;
        $(".labels0 a").off("click").on("click", function() {
            e = $(this).parent().index(), $(".labels0 a").removeClass("active"), $(this).addClass("active"), $(".content0").fadeOut(), $(this).parents().find(".content0.contentList" + e).fadeIn()
        }), $(".labels1 a").off("click").on("click", function() {
            t = $(this).parent().index(), $(".labels1 a").removeClass("active"), $(this).addClass("active"), $(".content1").fadeOut(), $(this).parents().find(".content1.contentList" + t).fadeIn()
        }), $(".labels0 a").off("mouseenter").on("mouseenter", function() {
            $(".labels0 a").removeClass("active"), $(this).addClass("active")
        }), $(".labels0 a").off("mouseleave").on("mouseleave", function() {
            $(".labels0 a").removeClass("active"), $(".labels0 li:eq(" + t + ")").find("a").addClass("active")
        }), $(".labels1 a").off("mouseenter").on("mouseenter", function() {
            $(".labels1 a").removeClass("active"), $(this).addClass("active")
        }), $(".labels1 a").off("mouseleave").on("mouseleave", function() {
            $(".labels1 a").removeClass("active"), $(".labels1 li:eq(" + t + ")").find("a").addClass("active")
        }), $(".labels0 a").first().trigger("click"), $(".labels1 a").first().trigger("click")
    })
}]);