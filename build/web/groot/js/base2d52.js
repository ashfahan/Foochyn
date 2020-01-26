function onError(e) {
    var t = IsJsonString(e.responseText);
    switch (e.status) {
        case 401:
            showErrors(["Please login in order to continue!"]);
            break;
        case 422:
            t || showErrors(["Please Try Again"]), t && t.errors && showErrors(t.errors), t && t.custom_error && showErrors([t.custom_error]);
            break;
        case 500:
            showErrors(["Please Try Again"]);
    }
}
function IsJsonString(e) {
    try {
        var t = JSON.parse(e);
        if ("object" === (void 0 === t ? "undefined" : _typeof(t))) return t;
    } catch (e) {
        return !1;
    }
}
function onSuccess(e) {
    $(".popup").removeClass("active"), $("#popup-success #messages").html(""), $("#popup-success #messages").append('<li class="regular">' + e + "</li>"), $("#popup-success").addClass("active");
}
function showErrors(e) {
    $(".popup").removeClass("active"),
        $("#popup-error #errors").html(""),
        $.each(e, function (e, t) {
            $("#popup-error #errors").append('<li class="regular">' + t + "</li>");
        }),
        $("#popup-error").addClass("active");
}
function setCookie(e, t, a) {
    var i = new Date();
    i.setTime(i.getTime() + 24 * a * 60 * 60 * 1e3);
    var n = "expires=" + i.toUTCString();
    (document.cookie = e + "=" + t + "; " + n),
        $(".pretty-select")
            .next(".pretty-select-container")
            .children(".display")
            .html(e + '<span class="ico ico-xs n-darrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 37.4"><polyline  points="1.5 1.5 32 35.9 62.5 1.5" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/></svg></span>');
}
function getCookie(e) {
    e += "=";
    for (var t = document.cookie.split(";"), a = 0; a < t.length; a++) {
        for (var i = t[a]; " " == i.charAt(0);) i = i.substring(1);
        if (0 === i.indexOf(e)) return i.substring(e.length, i.length);
    }
    return "";
}
function setCity() {
    var e = $('input[name="cityname"]').val();
    void 0 !== e && e && setCookie(e, e, 43200);
}
function showAds(e, t, a, i, n) {
    $.ajax(AD_URL, {
        type: "GET",
        data: { type: VIEW_NAME, id: e, city: t, categories: a, buckets: i, pages: n },
        success: function (e, t) {
            var a = jQuery.parseJSON(e),
                i = a.platinum,
                n = a.golden,
                r = a.silver,
                s = a.amex,
                o = 1 == i.length && i[0].id,
                l = 1 == n.length && n[0].id,
                d = '<span class="sponsored small">Ad</span>';
            if (($.isEmptyObject(i) || ($("#ad-platinum").html('<a href="' + i[0].url + '" ' + (!1 === o ? "" : 'data-id=" ' + o + ' "') + ' rel="nofollow" ><div class="img5-4"><img alt="EazyDiner ' + o + '" src="' + i[0].image + '"/>' + d + "</div></a>"), $("#ad-platinum").removeClass("hidden")), $.isEmptyObject(n) || ($("#ad-golden").html('<a href="' + n[0].url + '" ' + (!1 === l ? "" : 'data-id=" ' + l + ' "') + ' rel="nofollow" ><img alt="EazyDiner ' + o + '" class="block  radius-4 ico-full" src="' + n[0].image + '" />' + d + "</a>"), $("#ad-golden").removeClass("hidden")), !$.isEmptyObject(r))) {
                var c = $("#ad-silver").data("size") ? $("#ad-silver").data("size") : 4;
                $("#ad-silver").html("");
                for (var u = 0; u < r.length; u++) (ad = r[u]), $("#ad-silver").append('<a class="w-' + c + '-12" data-id="' + ad.id + '" href="' + ad.url + '" rel="nofollow"><div class="relative"><img class="block radius-4 ico-full" src="' + ad.image + '"/>' + d + "</div></a>");
                $("#ad-silver-box").removeClass("hidden");
            }
            s && $("#ad-platinum").append('<img src="https://ad.doubleclick.net/ddm/trackimp/N7861.3383210EAZYDINER/B21465261.227867938;dc_trk_aid=425957513;dc_trk_cid=91780870;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=?" border="0" height="1" width="1" alt="Advertisement">');
        }
    });
}
function checkUniqueSet(e, t) {
    var a = e.length,
        i = t.length;
    if (a == i && a > 0 && i > 0) {
        for (var n = a, r = 0; r < n - 1; r++) for (var s = r + 1; s < n - 1; s++) if (e[r] == e[s] && t[r] == t[s]) return !1;
        return !0;
    }
}
function validateSelectedPax(e) {
    var t = 8,
        a = parseInt($("#coupon_count").data("coupon_count"));
    return a <= 8 && (t = a), !(parseInt(e) >= t) || (showErrors(["You can select maximum " + t + " coupons."]), !1);
}
function referWebEngage(e, t) {
    webengage.track(e, t);
}
function createCookie(e, t, a) {
    var i;
    if (a) {
        var n = new Date();
        n.setTime(n.getTime() + 24 * a * 60 * 60 * 1e3), (i = "; expires=" + n.toGMTString());
    } else i = "";
    document.cookie = e + "=" + t + i + "; path=/";
}
function referApxor(e, t) {
    Apxor.logEvent(e, t);
}
function calculatePercentage(e, t) {
    var a = 0;
    return (a = isNaN(t) || isNaN(e) ? 0 : parseInt((e / t) * 100)), parseInt(a);
}
function fireWebengageEvent(e, t) {
    webengage.track(e, { Source: "Header", Status: t, Medium: "Desktop Website" });
}
function fireBranchEvent(e, t) {
    branch.logEvent(e, { Source: "Header", Status: t, Medium: "Desktop Website" });
}
function fireApxorEvent(e, t) {
    Apxor.logEvent(e, { Source: "Header", Status: t, Medium: "Desktop Website" });
}
function countDown() {
    6e4 == seconds && (timer = setInterval(countDown, 1e3)), (seconds -= 1e3), $(".otp-sent-message:not(.hidden) a").html("Resend in 0:" + seconds / 1e3 + "s"), seconds <= 0 && (clearInterval(timer), $(".resend-message:hidden").removeClass("hidden"), $(".otp-sent-message:not(.hidden)").addClass("hidden"));
}
function validateSignupInput() {
    var e = !0,
        t = /^[a-zA-Z ]{2,30}$/,
        a = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return (
        $("form#form-register input").each(function (i, n) {
            if ("name" == n.name)
                if ("" == n.value) {
                    $(this).addClass("error");
                    var r = $(this).parents(".input-group");
                    r.next("label").html("This field is required."), (e = !1);
                } else if (t.test(n.value)) {
                    var s = $(this).parents(".input-group");
                    s.next("label").html(""), $(this).removeClass("error");
                } else {
                    $(this).addClass("error");
                    var o = $(this).parents(".input-group");
                    o.next("label").html("Name must contain letters and spaces only."), (e = !1);
                }
            if ("email" == n.name)
                if ("" == n.value) {
                    $(this).addClass("error");
                    var l = $(this).parents(".input-group");
                    l.next("label").html("This field is required."), (e = !1);
                } else if (a.test(n.value)) {
                    var d = $(this).parents(".input-group");
                    d.next("label").html(""), $(this).removeClass("error");
                } else {
                    $(this).addClass("error");
                    var c = $(this).parents(".input-group");
                    c.next("label").html("Email is not proper."), (e = !1);
                }
            if ("otp" == n.name)
                if ("" == n.value) {
                    $(this).addClass("error");
                    var u = $(this).parents(".input-group");
                    u.next("label").html("This field is required."), (e = !1);
                } else if (n.value.length > 0 && 4 != n.value.length) {
                    $(this).addClass("error");
                    var h = $(this).parents(".input-group");
                    h.next("label").html("OTP must be 4 digit."), (e = !1);
                } else {
                    var p = $(this).parents(".input-group");
                    p.next("label").html(""), $(this).removeClass("error");
                }
        }),
        e
    );
}
function lazyload() {
    for (var e = document.getElementsByClassName("lazy"), t = 0; t < e.length; t++) elementInViewport(e[t]) && e[t].setAttribute("src", e[t].getAttribute("data-src"));
}
function elementInViewport(e) {
    var t = e.getBoundingClientRect(),
        a = window.innerHeight || document.documentElement.clientHeight,
        i = window.innerWidth || document.documentElement.clientWidth,
        n = t.top <= a && t.top + t.height >= 20,
        r = t.left <= i && t.left + t.width >= 20;
    return n && r;
}
var _typeof =
    "function" == typeof Symbol && "symbol" == typeof Symbol.iterator
        ? function (e) {
            return typeof e;
        }
        : function (e) {
            return e && "function" == typeof Symbol && e.constructor === Symbol && e !== Symbol.prototype ? "symbol" : typeof e;
        };
$.ajaxSetup({ headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") } }),
    $("#selectCity").on("change", function () {
        var e = $(this).val();
        window.location = "" == e ? "/" : "/" + e;
    }),
    $(".load-more-button").on("click", function () {
        var e = $(this);
        e.addClass("hidden"), e.siblings(".loader").removeClass("hidden");
        var t = $(this).data("container"),
            a = $(t).data("page"),
            i = $(t).data("url");
        void 0 === i && (i = ""),
            a++ ,
            $.ajax(i, {
                type: "GET",
                data: { page: a },
                success: function (i) {
                    i && ($(t).data("page", a), $(t).append(i), e.removeClass("hidden")), e.siblings(".loader").addClass("hidden");
                }
            });
    }),
    $(".datepicker").Zebra_DatePicker({
        direction: [!0, 30],
        format: "d M, Y",
        show_clear_date: !1,
        readonly_element: !0,
        default_position: "below",
        show_icon: !1,
        offset: [
            -1 *
            $(".datepicker")
                .parent()
                .outerWidth(),
            $(".datepicker").outerHeight()
        ]
    }),
    $(".input-mobile").intlTelInput({ separateDialCode: !0, nationalMode: !1, initialCountry: "IN", autoHideDialCode: !1, preferredCountries: ["IN", "AE"], dropdownContainer: "body" });
var keyword = "";
try {
    $(".autocomplete")
        .autocomplete({
            minLength: 2,
            position: { of: $(".autocomplete").parent() },
            source: function (e, t) {
                keyword = e.term;
                var a = ($(this), $(this.element)),
                    i = a.data("jqXHR");
                i && i.abort(),
                    a.data(
                        "jqXHR",
                        $.ajax("/autocomplete", {
                            type: "GET",
                            data: { term: e.term },
                            success: function (e, a) {
                                $("#form-search #location").data("keyword", keyword);
                                var i = jQuery.parseJSON(e);
                                t(i);
                            }
                        })
                    );
            },
            appendTo: $(".autocomplete").data("container"),
            messages: { noResults: "dfg", results: function () { } },
            classes: { "ui-autocomplete": "lblca" },
            focus: function (e, t) {
                e.preventDefault(),
                    $(".ui-autocomplete .ui-menu-item").css("background-color", "white"),
                    $(".ui-autocomplete .ui-menu-item .ui-state-active").length > 0 &&
                    $(".ui-autocomplete .ui-menu-item .ui-state-active")
                        .parent()
                        .css({ backgroundColor: "lightgrey" }),
                    $(this).val(t.item.name),
                    "restaurant" != t.item.type && $("#form-search #location").val(t.item.code);
            },
            open: function () {
                $(".ui-menu").width(
                    1 *
                    $(".autocomplete")
                        .parent()
                        .outerWidth()
                );
            },
            select: function (e, t) {
                return $("#form-search #location").data("type", t.item.type), $("#form-search #location").data("description", t.item.description), $("#form-search #location").data("code", t.item.code), $(".autocomplete").val(t.item.name), "restaurant" == t.item.type ? ((data = { Name: t.item.name, Area: t.item.description, "Selection Type": t.item.type, Medium: "Desktop Website", "Type Of Search": "Restaurant", Source: $("#form-search #location").data("content"), City: CITY.cityCode, Keyword: keyword }), referApxor("Search", data), (window.location = "/" + t.item.code)) : $("#form-search #location").val(t.item.code), $("#location~.error-msg").addClass("hidden"), !1;
            }
        })
        .autocomplete("instance")._renderItem = function (e, t) {
            var a = $("<li>"),
                i = '<span class="ico"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41.4 61"><g><path d="M273.5,1c-11.4,0-20.7,8.9-20.7,19.9S273.5,62,273.5,62s20.7-30.1,20.7-41.1S284.9,1,273.5,1Zm0,27.8a8.16,8.16,0,0,1-8.3-8,8.31,8.31,0,0,1,16.6,0A8.09,8.09,0,0,1,273.5,28.8Z" transform="translate(-252.8 -1)" style="fill:#616161"/></g></svg></span>';
            "restaurant" == t.type &&
                (i =
                    '<span class="ico"><svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.8 64"><g><rect x="1.5" y="22.7" width="26.5" height="39.8" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><polygon points="49.3 62.5 28.1 62.5 28.1 22.7 22.7 22.7 22.7 1.5 49.3 1.5 49.3 62.5" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><rect x="36" y="54.5" width="8" height="8" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><rect x="6.8" y="54.5" width="8" height="8" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line x1="1.5" y1="28" x2="12.1" y2="28" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line x1="1.5" y1="33.3" x2="9.5" y2="33.3" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line x1="22.7" y1="12.1" x2="33.4" y2="12.1" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line x1="22.7" y1="6.8" x2="38.7" y2="6.8" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line x1="22.7" y1="17.4" x2="30.7" y2="17.4" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/><line x1="1.5" y1="38.6" x2="6.8" y2="38.6" fill="none" stroke="#616161" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"/></g></svg></span>');
            var n = t.description ? '<div class="small grey-light">' + t.description + "</div>" : "";
            return a.append('<div class="pointer grid"><div class="w-2-12 w-lg-1-12">' + i + '</div><div class="w-10-12 w-lg-11-12"><div>' + t.name + "</div>" + n + "</div></div>"), a.appendTo(e);
        };
} catch (e) { }
$("#search_city").length > 0 &&
    ($("#search_city")
        .autocomplete({
            minLength: 2,
            source: function (e, t) {
                keyword = e.term;
                var a = ($(this), $(this.element)),
                    i = a.data("jqXHR");
                i && i.abort(),
                    a.data(
                        "jqXHR",
                        $.ajax("/city-autocomplete", {
                            type: "GET",
                            data: { term: e.term },
                            success: function (e) {
                                var a = jQuery.parseJSON(e);
                                a[0].hasOwnProperty("id")
                                    ? ($(".no_result").css("display", "none"), $("#ui-id-2").css("display", "block"), t(a))
                                    : ($("#ui-id-2").css("display", "none"),
                                        $(".no_result").css("display", "block"),
                                        $(".no_result")
                                            .children("p")
                                            .remove(),
                                        $(".no_result").html('<h6 class="search-term bold">Restaurant not listed for ' + a[0].name + ' </h6><p class="font-13 grey-light margin-t-5">Check out our amazing deals in other cities that you might like to visit soon.</p>'));
                            }
                        })
                    );
            },
            appendTo: $(".autocomplete").data("container"),
            messages: { noResults: "dfg", results: function () { } },
            classes: {},
            open: function () {
                $(".ui-menu").width(1.5 * $(".autocomplete").outerWidth());
            },
            focus: function (e, t) {
                e.preventDefault(),
                    $(".ui-autocomplete .ui-menu-item").css("background-color", "white"),
                    $(".ui-autocomplete .ui-menu-item .ui-state-active").length > 0 &&
                    $(".ui-autocomplete .ui-menu-item .ui-state-active")
                        .parent()
                        .css({ backgroundColor: "lightgrey" });
            },
            select: function (e, t) {
                window.location = "/" + t.item.code;
            }
        })
        .autocomplete("instance")._renderItem = function (e, t) {
            var a = $("<li>");
            return a.append('<div class="regular pointer">' + t.name + "</div>"), a.appendTo(e);
        }),
    $("#search_city").on("focus", function (e, t) {
        $(this).trigger(jQuery.Event("keydown"));
    }),
    $(".autocomplete").on("focus", function (e, t) {
        $(this).trigger(jQuery.Event("keydown"));
    }),
    $(".slider-next").on("click", function () {
        var e = $(this).data("slider"),
            t = $(e + ">*").length - 1,
            a = $(e).data("position");
        if (a + 1 <= t) {
            var i = parseInt($(e + ">*:nth-child(" + (a + 1) + ")").outerWidth(!0)),
                n = $(e).outerWidth();
            a + parseInt(n / i) <= t &&
                ((marginLeft = i * (a + 1) * -1),
                    $(".slider>*")
                        .first()
                        .css("margin-left", marginLeft + "px"),
                    $(e).data("position", a + 1));
        }
    }),
    $(".slider-previous").on("click", function () {
        var e = $(this).data("slider"),
            t = ($(e + ">*").length, $(e).data("position"));
        if (t - 1 >= 0) {
            var a = parseInt($(e + ">*:nth-child(" + t + ")").outerWidth(!0)),
                i = $(e).outerWidth(!0);
            parseInt(i / a);
            t - 1 >= 0 &&
                ((marginLeft = a * (t - 1) * -1),
                    $(".slider>*")
                        .first()
                        .css("margin-left", marginLeft + "px"),
                    $(e).data("position", t - 1));
        }
    }),
    $("#form-search").on("submit", function () {
        if (0 === $("#location").val().length)
            return (
                $("#location")
                    .closest(".input-group")
                    .addClass("error"),
                $("#location")
                    .closest(".input-group")
                    .next(".error-msg")
                    .removeClass("hidden"),
                !1
            );
    }),
    $(".pretty-select").each(function () {
        $(this).after(
            $("<div></div>")
                .addClass("pretty-select-container")
                .html('<div class="display grey-darker"></div><ul class="hidden"></ul>')
        );
        var e = $(this).next(),
            t = $(this).find("option"),
            a = $(this).find("option:selected"),
            i = e.children("ul");
        t.each(function () {
            i.append(
                $("<li></li>")
                    .addClass($(this).is(":selected") ? "selected" : "")
                    .attr("data-value", $(this).val())
                    .html($(this).text())
            );
        }),
            e.children(".display").html(a.text() + '<span class="ico ico-xs n-darrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 37.4"><polyline  points="1.5 1.5 32 35.9 62.5 1.5" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/></svg></span>');
    }),
    $(".pretty-select-container > .display").on("click", function (e) {
        $(this)
            .siblings("ul")
            .toggleClass("hidden"),
            e.stopPropagation();
    }),
    $(".pretty-select-container").on("click", "li", function () {
        var e = $(this).closest(".pretty-select-container");
        e.find(".selected").removeClass("selected"),
            $(this).addClass("selected"),
            e.find("ul").addClass("hidden"),
            e.children(".display").html($(this).text() + '<span class="ico ico-xs n-darrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 37.4"><polyline  points="1.5 1.5 32 35.9 62.5 1.5" style="fill:none;stroke:#616161;stroke-linecap:round;stroke-linejoin:round;stroke-width:3px"/></svg></span>'),
            e
                .prev("select")
                .val($(this).data("value"))
                .trigger("change");
    }),
    $("body").on("click", function () {
        $(".pretty-select-container ul").addClass("hidden");
    }),
    $("select#select-change-city").on("change", function () {
        var e = $(this).val();
        window.location = "" == e ? "/" : "/" + e;
    }),
    $(".quickflex a").click(function () {
        var e = $(this).attr("href");
        return $("html,body").animate({ scrollTop: $(e).offset().top }, 1e3), !1;
    }),
    $(document).ready(function () {
        $(window).scroll(function () {
            $(this).scrollTop() > 500 ? $(".back-top").fadeIn(500) : $(".back-top").fadeOut(500);
        }),
            $(".back-top").click(function (e) {
                return e.preventDefault(), $("html, body").animate({ scrollTop: 0 }, 500), !1;
            });
    }),
    $(".hide-section-header").on("click", function () {
        var e = $(this).attr("data-hide-height"),
            t = $(this).next(".hide-section");
        $(t).toggleClass("open"), $(t).hasClass("open") ? ($(t).css("max-height", e), $(this).text("hide")) : ($(t).css("max-height", "0px"), $(this).text("show"));
    }),
    $(".copyText").click(function () {
        var e = $(this).data("copy-target");
        $(e).select();
        try {
            document.execCommand("copy");
            $(this).text("Copied"),
                setTimeout(function () {
                    $(".copyText").text("Copy");
                }, 2e3);
        } catch (e) { }
    }),
    $("#referral-addMore").click(function (e) {
        e.stopPropagation();
        var t = $("#referralFormTemplate").clone();
        t.removeClass("hidden-imp"), $(this).before(t);
    }),
    $("#referralForm").on("click", ".removeReferralInputGroup", function () {
        $(this)
            .parent(".referral-input-group")
            .remove();
    }),
    $("#referralInvite").click(function () {
        $("#referralInviteMsg").text(""), $("#referralForm").submit();
    }),
    $("#referralForm").trigger("reset"),
    $("#referralForm").submit(function (e) {
        if ((e.preventDefault(), $(this)[0].checkValidity())) {
            var t = new FormData($(this)[0]),
                a = t.getAll("friendEmail[]"),
                i = t.getAll("friendMobile[]");
            if (a.length < 1)
                return (
                    $("#referralInviteMsg")
                        .addClass("red")
                        .removeClass("hidden")
                        .removeClass("green")
                        .text("Please refer at least 1 friend."),
                    !1
                );
            if (!checkUniqueSet(a, i))
                return (
                    $("#referralInviteMsg")
                        .addClass("red")
                        .removeClass("hidden")
                        .removeClass("green")
                        .text("Please provide unique set of entries."),
                    !1
                );
            $("#referralInvite")
                .text("Please wait")
                .prop("disabled", !0),
                $.ajax({
                    url: "/user/save-invites",
                    type: "POST",
                    data: t,
                    cache: !1,
                    contentType: !1,
                    processData: !1,
                    success: function (e) {
                        $("#referralInviteMsg")
                            .addClass("green")
                            .removeClass("hidden")
                            .removeClass("red")
                            .text("Thank You for referring your friends to us."),
                            $("#referralForm").trigger("reset"),
                            $("#referralInvite")
                                .text("Invite More Friends")
                                .prop("disabled", !1);
                    },
                    error: function (e) {
                        if (
                            ($("#referralInvite")
                                .text("Invite")
                                .prop("disabled", !1),
                                e.responseJSON)
                        ) {
                            var a = e.responseJSON.custom_error,
                                i = $.map(e.responseJSON.errors, function (e, t) {
                                    return [e];
                                });
                            if (
                                (void 0 !== a &&
                                    $("#referralInviteMsg")
                                        .addClass("red")
                                        .removeClass("hidden")
                                        .removeClass("green")
                                        .text(a),
                                    void 0 !== i)
                            ) {
                                var n = "",
                                    r = 0,
                                    s = [],
                                    o = i[0].toString();
                                o.indexOf("friendMobile") > 0 ? ((n = "mobile"), (r = o.split(".")[1].split(" ")[0]), (s = t.getAll("friendMobile[]"))) : o.indexOf("friendEmail") > 0 && ((n = "email"), (r = o.split(".")[1].split(" ")[0]), (s = t.getAll("friendEmail[]"))),
                                    $("#referralInviteMsg")
                                        .addClass("red")
                                        .removeClass("hidden")
                                        .removeClass("green")
                                        .html("The " + n + " <b>" + s[r] + "</b> is not valid");
                            }
                        } else
                            $("#referralInviteMsg")
                                .addClass("red")
                                .removeClass("hidden")
                                .removeClass("green")
                                .text("Sorry!! unable to refer your friends at the moment. Make sure to provide unique set of entries.");
                    }
                });
        } else
            $("#referralInviteMsg")
                .addClass("red")
                .removeClass("hidden")
                .removeClass("green")
                .text("Please fill the form correctly."),
                $(this)
                    .find(":submit")
                    .click();
    }),
    $(document).on("click", ".buffet-grid", function () {
        $(".buffet-list").toggleClass("hidden"), $("span.buffet-arrow-icon").toggleClass("icon-up-arrow icon-down-arrow");
    }),
    $(".scroll-anchor").on("click hover", function (e) {
        e.preventDefault();
        var t = $(this).attr("href"),
            a = $(t).offset().top - 100;
        (a = a > 0 ? a : 0), $("html, body").animate({ scrollTop: a }, 500);
    }),
    $(".reason a").on("click", function () {
        $(".reason")
            .find("a")
            .removeClass("active");
        $(this).data("item");
        $(this).toggleClass("active");
    }),
    $("#prime-cancel-form").on("submit", function (e) {
        $("#prime-cancel-form button").hide(), $(".loader-small").removeClass("hidden"), e.preventDefault();
        var t = $('input[name="subscription_id"]').val(),
            a = $(this),
            i = $(this).data("action"),
            n = a.find(".reason a.active").data("item");
        $.ajax({
            type: "post",
            url: i,
            data: { reason: n, subscriptionId: t },
            success: function (e) {
                $(".success-message").removeClass("hidden"),
                    $(".loader-small").addClass("hidden"),
                    setTimeout(function () {
                        window.location.reload();
                    }, 300);
            },
            error: function (e) {
                alert("Oops there is something wrong");
            }
        });
    }),
    $(".refferal").on("click", ".btn-reminder", function () {
        var e = $("#customer-view").val(),
            t = $(this).text(),
            a = { Source: e, Medium: "Desktop Website", State: t },
            i = { Source: e, Medium: "Desktop Website", State: t };
        referWebEngage("Refer Friends Clicked", a), referApxor("Refer Friends Clicked", i);
    }),
    $(".nav-tabs li a").on("click", function (e) {
        var t = $(this).data("toggle");
        $(".nav-tabs li").removeClass("active"),
            $(this)
                .parent("li")
                .addClass("active"),
            e.stopImmediatePropagation(),
            $(".tab-pane").removeClass("active"),
            $("#" + t).addClass("active");
    }),
    $("#changeDate").Zebra_DatePicker({
        direction: [!0, 30],
        format: "d M, Y",
        show_clear_date: !1,
        readonly_element: !0,
        default_position: "below",
        show_icon: !1,
        offset: [
            -1 *
            $(".datepicker")
                .parent()
                .outerWidth(),
            $(".datepicker").outerHeight()
        ],
        onSelect: function (e) {
            var t = $("#nav_meal_period option:selected").val();
            $.ajax({
                url: "/changeMealPeriod",
                type: "POST",
                data: { date: e },
                headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
                success: function (e) {
                    var a = "";
                    $.each(e.data, function (e, t) {
                        a += "<option value='" + t.code + "'>" + t.name + "</option>";
                    }),
                        $("#nav_meal_period").html(a),
                        $("select[name='meal_period']")
                            .find("option[value='" + t + "']")
                            .attr("selected", !0);
                },
                error: function (e) {
                    showError(e);
                }
            });
        }
    }),
    $(document).ready(function () {
        $(document).on("click", "a#srchbar", function (e) {
            $("#searchpanel").fadeIn("slow"), $("html, body").css({ overflow: "hidden", height: "100%" });
            var t;
            (t = $(this).data("view")), (data = { Source: t, Medium: "Desktop Website" }), referApxor("Change Location Clicked", data);
        }),
            $("#search-close").click(function () {
                $("#searchpanel").hide(), $("html, body").css({ overflow: "auto", height: "100%" });
            }),
            $("#search-inner").click(function () {
                event.stopPropagation();
            }),
            $("#allcities_show").click(function () {
                var e = $(this);
                $("#allcities").slideToggle("slow", function () {
                    $(this).is(":visible") ? e.text("Hide all Cities") : e.text("View all Cities");
                });
            });
    });
var questions = [
    { que: "When do you celebrate the Valentine’s Day?", ans: { a: "7th February", b: "14th February", c: "13th February" }, correctAnswer: "b" },
    { que: "Which is the most popular gift choice for Valentine’s Day?", ans: { a: "Flowers and chocolates", b: "Promise Ring With Birthstones", c: "Engagement Ring" }, correctAnswer: "a" },
    { que: "What is the most popular symbol associated with Valentine's Day?", ans: { a: "Cupid", b: "Dove", c: "Rose" }, correctAnswer: "a" },
    { que: "Valentine's Day is named after which famous Saint?", ans: { a: "St. Faustina", b: "St. Valentine", c: "St. Joan of Arc" }, correctAnswer: "b" },
    { que: "Which famous monument is the symbol of love?", ans: { a: "Qutub Minar", b: "Taj Mahal", c: "Victoria Memorial" }, correctAnswer: "b" },
    { que: "If you are single, you can celebrate Single Awareness Day", ans: { a: "True", b: "False" }, correctAnswer: "a" },
    { que: "Is Valentine's Day a public holiday in India?", ans: { a: "True", b: "False" }, correctAnswer: "b" },
    { que: "How do you greet someone on Valentine’s Day?", ans: { a: "Happy Rose Day", b: "Happy Youth Day", c: "Happy Valentine's Day" }, correctAnswer: "c" },
    { que: "Who made the first box of chocolates for Valentine's Day?", ans: { a: "Richard Cadbury", b: "Frank C. Mars", c: "H.B. Reese" }, correctAnswer: "a" },
    { que: "What does O stands for in XOXO", ans: { a: "Hugs", b: "Kisses", c: "Romance" }, correctAnswer: "a" },
    { que: "Do you know which of these animals/birds mate for life?", ans: { a: "Elephants", b: "Mice", c: "Swans" }, correctAnswer: "c" },
    { que: "Which language had no word for “love” until the 19th century?", ans: { a: "Japanese", b: "Chinese", c: "Korean" }, correctAnswer: "a" },
    { que: "Who wrote the classic love story “Romeo and Juliet”?", ans: { a: "Leonardo DiCaprio", b: "William Shakespeare", c: "Geoffrey Chaucer" }, correctAnswer: "b" },
    { que: "What is the feeling you get in stomach when you meet someone special?", ans: { a: "Tickles", b: "Butterflies", c: "Bubbles" }, correctAnswer: "b" },
    { que: "What does I <3 U signify?", ans: { a: "I hate you", b: "I like you", c: "I love you" }, correctAnswer: "c" }
];
$(".apxor_click").on("click", function () {
    var e = $(this)
        .parents(".restaurant")
        .find('input[name="bookable"]')
        .data("value")
        ? $(this)
            .parents(".restaurant")
            .find('input[name="bookable"]')
            .data("value")
        : "",
        t = $('input[name="view"]').data("content"),
        a = "";
    1 == e && (e = "Yes"),
        "cityhome" == t
            ? ((a = $(this)
                .parents(".restaurant")
                .find("h2")
                .text()),
                (e = "Yes"))
            : (a = $(".breadcrum")
                .find(".inline-block.active")
                .children()
                .text());
    var i = $(this)
        .parents(".restaurant")
        .find(".Ischain")
        .val();
    if (
        (void 0 == i && (i = !1),
            "hasMap" ==
            $(this)
                .parent()
                .attr("itemprop") ||
            "hasMenu" ==
            $(this)
                .parent()
                .attr("itemprop"))
    ) {
        var n = {
            Source: t,
            "Restaurant Name":
                "undefined" !=
                    $(this)
                        .parents(".restaurant")
                        .find(".res_name")
                        .text()
                    ? $(this)
                        .parents(".restaurant")
                        .find(".res_name")
                        .text()
                    : "",
            "Restaurant ID":
                void 0 !=
                    $(this)
                        .parents(".restaurant")
                        .find(".res_id")
                        .val()
                    ? $(this)
                        .parents(".restaurant")
                        .find(".res_id")
                        .val()
                    : "",
            Medium: "Desktop Website"
        };
        "hasMap" ==
            $(this)
                .parent()
                .attr("itemprop")
            ? referApxor("Map Viewed", n)
            : "hasMenu" ==
            $(this)
                .parent()
                .attr("itemprop") && referApxor("Menu Viewed", n);
    } else
        Apxor.logEvent("Restaurant Clicked", {
            "Restaurant ID":
                void 0 !=
                    $(this)
                        .parents(".restaurant")
                        .find(".res_id")
                        .val()
                    ? $(this)
                        .parents(".restaurant")
                        .find(".res_id")
                        .val()
                    : "",
            "Restaurant Name":
                "undefined" !=
                    $(this)
                        .parents(".restaurant")
                        .find(".res_name")
                        .text()
                    ? $(this)
                        .parents(".restaurant")
                        .find(".res_name")
                        .text()
                    : "",
            Area:
                "undefined" !=
                    $(this)
                        .parents(".restaurant")
                        .find(".res_loc")
                        .text()
                    ? $(this)
                        .parents(".restaurant")
                        .find(".res_loc")
                        .text()
                    : "",
            "Critic Rating":
                "undefined" !=
                    $(this)
                        .parents(".restaurant")
                        .find(".critic")
                        .text()
                    ? $(this)
                        .parents(".restaurant")
                        .find(".critic")
                        .text()
                    : "",
            City: CITY.cityCode,
            Medium: "Desktop Website",
            Source: t,
            Bookable: e,
            "Cost for 2":
                "undefined" !=
                    $(this)
                        .parents(".restaurant")
                        .find(".cost_for_two")
                        .text()
                    ? $(this)
                        .parents(".restaurant")
                        .find(".cost_for_two")
                        .text()
                    : "",
            "Collection Name": a,
            Currency:
                "undefined" !=
                    $(this)
                        .parents(".restaurant")
                        .find(".currency")
                        .text()
                    ? $(this)
                        .parents(".restaurant")
                        .find(".currency")
                        .text()
                    : "",
            Chain: i,
            "Deal Name":
                "undefined" !=
                    $(this)
                        .parents(".restaurant")
                        .find(".deal_name")
                        .text()
                    ? $(this)
                        .parents(".restaurant")
                        .find(".deal_name")
                        .text()
                    : "",
            Cuisine: +(
                "undefined" !=
                $(this)
                    .parents(".restaurant")
                    .find(".res_cuisine")
                    .text()
            )
                ? $(this)
                    .parents(".restaurant")
                    .find(".res_cuisine")
                    .text()
                : ""
        });
}),
    $("#apxor_search").on("click", function () {
        var e, t, a, i, n;
        (e = $(this)
            .parents("#form-search")
            .find('input[name="location"]')
            .data("content")),
            (t = $(this)
                .parents("#form-search")
                .find('input[name="location"]')
                .data("description")),
            (a =
                "restaurant" ==
                    $(this)
                        .parents("#form-search")
                        .find('input[name="location"]')
                        .data("type")
                    ? "Restaurant"
                    : "Listing"),
            (n = $(this)
                .parents("#form-search")
                .find('input[name="location"]')
                .data("keyword")),
            (i = $(this)
                .parents("#form-search")
                .find('input[name="location"]')
                .data("type")),
            referApxor("Search", { Name: $("#form-search .autocomplete").val(), Area: t, "Selection Type": a, Medium: "Desktop Website", "Type Of Search": i, Source: e, City: CITY.cityCode, Keyword: n });
    }),
    $(".bucket").on("click", function () {
        var e, t, a, i;
        (a = $(this)
            .find('input[name="code"]')
            .data("content")),
            (i = $(this)
                .find(".bucket_name")
                .text()
                ? $(this)
                    .find(".bucket_name")
                    .text()
                : ""),
            (e = $(this)
                .find('input[name="code"]')
                .data("collection")),
            (t = $(this)
                .find('input[name="code"]')
                .data("view"));
        var n = { "Bucket ID": a, Name: i, Medium: "Desktop Website", Source: t, City: CITY.cityCode, "Collection Name": e };
        Apxor.logEvent("Bucket Opened", n);
    }),
    $(".banner_click_apxor").on("click", function () {
        var e, t, a;
        (e = $(this)
            .find("a")
            .attr("href")),
            (t = $(this)
                .find("img")
                .attr("alt")),
            (a = $(this)
                .find("img")
                .data("view")),
            Apxor.logEvent("Banner Clicked", { "Banner Code": e, Name: t, Medium: "Desktop Website", Source: a, City: CITY.cityCode });
    }),
    $(".nav_link_apxor li a").on("click", function () {
        var e, t, a;
        (e = $(this).attr("href")), (t = $(this).text()), (a = $('input[name="code"]').data("view")), referApxor("Nav Link Clicked", { Link: e, Name: t, Medium: "Desktop Website", Source: a, City: CITY.cityCode });
    }),
    $(".footer_link").on("click", function () {
        var e, t, a;
        (e = $(this)
            .find("a")
            .text()),
            (t = $(this)
                .find(".res_loc")
                .text()),
            (collection = $(this)
                .parents(".apxor")
                .find("h2")
                .text()),
            (a = $('input[name="code"]').data("view")),
            referApxor("Restaurant Clicked", { "Restaurant Name": e, Area: t, Collection: collection, Source: a, Medium: "Desktop Website", City: CITY.cityCode });
    }),
    $(".bucket_link").on("click", function () {
        var e, t, a;
        (t = $(this)
            .parents(".apxor")
            .find(".h5")
            .text()),
            (e = $(this).text()),
            (a = $('input[name="code"]').data("view")),
            referApxor("Bucket Opened", { "Restaurant Name": e, Collection: t, Source: a, Medium: "Desktop Website", City: CITY.cityCode });
    }),
    $(".container  a.apxor").on("click", function () {
        if ($(this).hasClass("listing_see_all") || $(this).hasClass("bucket_see_all")) {
            var e, t, a, i;
            (a = $(this).attr("href")), (i = $(this).text()), (e = $(this).attr("data-collection")), (t = $(this).data("view"));
            var n = { "Bucket ID": a, Name: i, Medium: "Desktop Website", Source: t, City: CITY.cityCode, "Collection Name": e, Type: $(this).hasClass("listing_see_all") ? "non-restaurant listing" : "restaurant-listing" };
            $(this).hasClass("listing_see_all") && referApxor("Listing Opened", n), $(this).hasClass("bucket_see_all") && referApxor("Bucket Opened", n);
        }
    }),
    $("#search_city_content a.apxor_location").on("click", function () {
        var e, t, a;
        (t = $("#srchbar")
            .first("span")
            .text()
            .trim()),
            (e = $(this)
                .data("city")
                .trim()),
            (a = $(this).data("view")),
            (data = { Source: a, "Old Location": t, "New Location": e, Medium: "Desktop Website" }),
            referApxor("Location Changed", data);
    }),
    $(".click_map").on("click", function () {
        if ("hasMap" == $(this).attr("itemprop")) {
            referApxor("Map Viewed", {
                Source: VIEW,
                "Restaurant Name":
                    "undefined" !=
                        $(this)
                            .parents()
                            .find(".res_name")
                            .text()
                        ? $(this)
                            .parents()
                            .find(".res_name")
                            .text()
                        : "",
                "Restaurant ID":
                    void 0 !=
                        $(this)
                            .parents()
                            .find(".res_id")
                            .val()
                        ? $(this)
                            .parents()
                            .find(".res_id")
                            .val()
                        : "",
                Medium: "Desktop Website"
            });
        } else if ("hasMenu" == $(this).attr("itemprop")) {
            var e = {
                Source: VIEW,
                "Restaurant Name":
                    "undefined" !=
                        $(this)
                            .parents()
                            .find(".res_name")
                            .text()
                        ? $(this)
                            .parents()
                            .find(".res_name")
                            .text()
                        : "",
                "Restaurant ID":
                    void 0 !=
                        $(this)
                            .parents()
                            .find(".res_id")
                            .val()
                        ? $(this)
                            .parents()
                            .find(".res_id")
                            .val()
                        : "",
                Medium: "Desktop Website"
            };
            referApxor("Menu Viewed", e);
        }
    }),
    $(".resend-otp").on("click", function () {
        referApxor("OTP Resend Clicked", { Medium: "Desktop Website" });
    });
try {
    if (void 0 !== $("#header-search").offset()) {
        var searchWidgetPosition = $("#header-search").offset().top;
        $(window).scroll(function () {
            $(this).scrollTop() > searchWidgetPosition ? ($("#header-search").addClass("sticky"), $("#header-search").addClass("shadow"), $(".sticky-search").removeClass("hidden"), $("#header-search .search-bar").addClass("bd-left-grey-light")) : ($("#header-search").removeClass("sticky"), $("#header-search").removeClass("shadow"), $("#header-search .search-bar").removeClass("bd-left-grey-light"), $(".sticky-search").addClass("hidden"));
        });
    }
} catch (e) { }
$("body").on("click", ".open-popup", function () {
    $(".popup").removeClass("active");
    var e = $(this).data("popup");
    $("body").css("overflow", "hidden"), $(e).addClass("active"), $(".resend-message:hidden").removeClass("hidden"), $(".otp-sent-message:not(.hidden)").addClass("hidden");
}),
    $(".popup .close").on("click", function () {
        $(this)
            .closest(".popup")
            .removeClass("active"),
            $("body").css("overflow", "auto"),
            $("#checkout-button")
                .siblings(".loader")
                .addClass("hidden"),
            $(".resend-message:hidden").removeClass("hidden"),
            $(".otp-sent-message:not(.hidden)").addClass("hidden");
    }),
    $(document).on("keyup", function (e) {
        27 == e.which && ($(".popup").removeClass("active"), $("body").css("overflow", "auto"));
    }),
    $("#form-mobile .input-mobile").on("input", function (e) {
        (this.value = this.value.replace(/[^0-9]/g, "")), this.value.length && this.value.length > 0 ? ($('#form-mobile input[name="mobile"]').val($("#form-mobile .selected-dial-code").text() + this.value), this.value.length > 7 ? ($('#form-mobile button[type="submit"]').removeAttr("disabled"), $('#form-mobile button[type="submit"]').removeClass("disabled")) : ($('#form-mobile button[type="submit"]').attr("disabled", "disabled"), $('#form-mobile button[type="submit"]').addClass("disabled"))) : ($('#form-mobile button[type="submit"]').attr("disabled", "disabled"), $('#form-mobile button[type="submit"]').addClass("disabled"));
    }),
    $("#form-mobile .selected-dial-code").on("DOMNodeInserted", function () {
        $('#form-mobile input[name="mobile"]').val($("#form-mobile .selected-dial-code").text() + $("#form-mobile .input-mobile").val());
    }),
    $("#form-otp input[name=otp]").on("input", function () {
        (this.value = this.value.replace(/[^0-9]/g, "")), this.value.length && 4 == this.value.length ? ($('#form-otp button[type="submit"]').removeAttr("disabled"), $('#form-otp button[type="submit"]').removeClass("disabled")) : ($('#form-otp button[type="submit"]').attr("disabled", "disabled"), $('#form-otp button[type="submit"]').addClass("disabled"));
    }),
    $("#signup-date").Zebra_DatePicker({
        direction: -1,
        format: "d-m-Y",
        show_clear_date: !1,
        readonly_element: !0,
        default_position: "below",
        show_icon: !1,
        offset: [
            -1 *
            $("#signup-date")
                .parent()
                .outerWidth(),
            $("#signup-date").outerHeight()
        ]
    }),
    $("#popup-login .forgot-btn").on("click", function () {
        var e = $("#form-login .buttons"),
            t = e.siblings(".loader-small");
        e.addClass("hidden"), t.removeClass("hidden"), webengage.track("Login With OTP Clicked", { Source: "Header", Medium: "Desktop Website" });
        var a = $("#form-login").serialize();
        return (
            $.ajax({
                url: "/otp",
                type: "POST",
                data: a,
                headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
                success: function (a) {
                    e.removeClass("hidden"), t.addClass("hidden"), $("#form-login").addClass("hidden"), $("#form-otp").removeClass("hidden");
                },
                error: function (a) {
                    e.removeClass("hidden"), t.addClass("hidden"), onError(a);
                },
                cache: !1
            }),
            !1
        );
    }),
    $("#popup-login .change-mobile").on("click", function () {
        $(this)
            .closest("form")
            .addClass("hidden"),
            $("#form-mobile").removeClass("hidden"),
            $(".resend-message:hidden").removeClass("hidden"),
            $(".otp-sent-message:not(.hidden)")
                .addClass("hidden")
                .html("OTP is on the way.");
    }),
    $("#form-otp").on("submit", function () {
        var e = $("#form-otp .button"),
            t = e.siblings(".loader-small");
        e.addClass("hidden"), t.removeClass("hidden");
        var a = $(this).serialize(),
            i = location.href,
            n = !1;
        return (
            i.trim() && i.indexOf("premium-prime-dining") >= 0 && (n = !0),
            $.ajax({
                url: "/login",
                type: "POST",
                data: a,
                headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
                success: function (e) {
                    fireWebengageEvent("Logged In", "Success"), n ? (i.indexOf("?") >= 0 ? (location.href = i + "&plans=true") : (location.href = i + "?plans=true")) : "undefined" != typeof fullCheckoutURL && history.replaceState(null, null, fullCheckoutURL), location.reload(!0);
                },
                error: function (a) {
                    fireWebengageEvent("Logged In", "Failed"), e.removeClass("hidden"), t.addClass("hidden"), onError(a);
                },
                cache: !1
            }),
            !1
        );
    }),
    $("#form-register .resend-otp, #form-otp .resend-otp").on("click", function () {
        var e = $(this)
            .parents("form")
            .find('button[type="submit"]'),
            t = $(this)
                .parents("form")
                .find(".loader-small");
        e.addClass("hidden"), t.removeClass("hidden"), $(".resend-message:not(.hidden)").addClass("hidden"), $(".otp-sent-message:hidden").removeClass("hidden");
        var a = $("#form-login").serialize();
        return (
            webengage.track("OTP Resend Clicked", { Source: "Header", Medium: "Desktop Website" }),
            $.ajax({
                url: "/otp",
                type: "POST",
                data: a,
                headers: { "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content") },
                success: function (a) {
                    e.removeClass("hidden"), t.addClass("hidden"), (seconds = 6e4), countDown();
                },
                error: function (a) {
                    e.removeClass("hidden"), t.addClass("hidden"), $(".resend-message:hidden").removeClass("hidden"), $(".otp-sent-message:not(.hidden)").addClass("hidden"), onError(a);
                },
                cache: !1
            }),
            !1
        );
    });
var UTILS = {
    isEmpty: function (e) {
        return void 0 === e || null == e;
    },
    isNotEmpty: function (e) {
        return !(void 0 === e || null == e);
    },
    setCookie: function (e, t, a) {
        var i;
        if (a) {
            var n = new Date();
            n.setTime(n.getTime() + 24 * a * 60 * 60 * 1e3), (i = "; expires=" + n.toGMTString());
        } else i = "";
        document.cookie = e + "=" + t + i + "; path=/";
    },
    getCookie: function (e) {
        for (var t = e + "=", a = document.cookie.split(";"), i = 0; i < a.length; i++) {
            for (var n = a[i]; " " == n.charAt(0);) n = n.substring(1, n.length);
            if (0 == n.indexOf(t)) return n.substring(t.length, n.length);
        }
        return null;
    },
    deleteCookie: function (e) {
        UTILS.setCookie(e, "", -1);
    }
};
$(document).ready(function () {
    var e = $(window).scrollTop();
    (e += 1),
        $("html, body").animate({ scrollTop: e }, 50),
        $(".next-hack, .mn_arrow").click(function () {
            lazyload();
        });
}),
    (window.onscroll = function (e) {
        lazyload();
    });
