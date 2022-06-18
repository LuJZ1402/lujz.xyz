$(function () {

    // 点击立即购买 pc
    $(".g-btn-buy").click(function () {
        var btnJson = verification();
        if (false === btnJson) {
            window.location.reload()
        }
        if (btnJson === '') {
            return '';
        }
        // ajax 验证是否登录 
        if (false === isUserLogin()) {
            // 未登录请先登录
            layer.alert(languagePack('noLoginMessage'), function (index) {
                location.href = $.ajaxUrl("memberLoginUrl") + _http_referer;
                layer.close(index);
            });
            return '';
        }
        // 将数据传入到url中然后跳转到此url
        $.ajax({
            type: "POST",
            url: ajaxUrlMemberImmeOrder,
            data: btnJson,
            dataType: "json",
            success: function (_ret) {
                // 非法操作
                if (_ret._return !== "success" && _ret.code == "110") {
                    return  ajaxError();
                }
                if (_ret._return !== "success" && _ret.code == "11") {
                    layer.alert($.languagePack(_ret.language), function (index) {
                        window.location.reload();
                        layer.close(index);
                    });
//                    setTimeout(function () {
//                        window.location.reload();
//                    }, 2000);
                    return  '';
                }
                if (_ret._return !== "success" && _ret.code == "12") {
                    layer.alert($.languagePack(_ret.language), function (index) {
                        window.location.reload();
                        layer.close(index);
                    });
//                    setTimeout(function () {
//                        window.location.reload();
//                    }, 2000);
                    return  '';
                }
                if (_ret._return !== "success" && _ret.code == "13") {
                    layer.alert($.languagePack(_ret.language), function (index) {
                        window.location.reload();
                        layer.close(index);
                    });
//                    setTimeout(function () {
//                        window.location.reload();
//                    }, 2000);
                    return  '';
                }
                // 登录超时
                if (_ret._return !== "success" && _ret.code == "1") {
                    gotoMemberLoginPage();
                }
                // 错误信息提示
                if (_ret._return !== "success" && _ret.message !== "") {
                    if (_ret.code == "1") {
                        layer.alert(_ret.message, function (index) {
                            window.location.href = memberLoginUrl;
                            layer.close(index);
                        });
                    } else if (_ret.code == "10") {
                        var _message = !!_ret.language ? $.languagePack(_ret.language) : "";
                        if (_message == "" && !!_ret.message) {
                            _message = _ret.message;
                        }
                        layer.alert(_message, function (index) {
                            window.location.reload();
                            layer.close(index);
                        });
//                        setTimeout(function () {
//                            window.location.reload();
//                        }, 2000);
                    } else {
                        layer.alert(_ret.message, function (index) {
                            layer.close(index);
                        });
                    }
                    return false;
                }
                // 返回成功
                if (_ret._return === "success") {
                    window.location.href = _ret.url;
                }
            },
            error: function () {
                return  ajaxError();
            }
        });
    });

    // 点击加入购物车 pc
    $(".g-add-cart").click(function () {
        var btnJson = verification();
        if (false === btnJson) {
            window.location.reload();
        }
        if (btnJson === '') {
            return '';
        }
        // ajax 验证是否登录 
        if (false === isUserLogin()) {
            // 未登录请先登录
            layer.alert(languagePack('noLoginMessage'), function (index) {
                location.href = $.ajaxUrl("memberLoginUrl") + _http_referer;
                layer.close(index);
            });
            return '';
        }
        // 将数据传入到购物车数据库中，并且弹出对话框是否跳转到购物车页面
        $.ajax({
            type: "POST",
            url: $.ajaxUrl("ajaxUrlMemberAddCart"),
            data: btnJson,
            dataType: "json",
            success: function (_ret) {
                // 非法操作
                if (_ret._return !== "success" && _ret.code == "110") {
                    return  ajaxError();
                }
                if (_ret._return !== "success" && _ret.code == "11") {
                    layer.alert($.languagePack(_ret.language), function (index) {
                        window.location.reload();
                        layer.close(index);
                    });
//                    setTimeout(function () {
//                        window.location.reload();
//                    }, 2000);
                    return  '';
                }
                if (_ret._return !== "success" && _ret.code == "12") {
                    layer.alert($.languagePack(_ret.language), function (index) {
                        window.location.reload();
                        layer.close(index);
                    });
//                    setTimeout(function () {
//                        window.location.reload();
//                    }, 2000);
                    return  '';
                }
                if (_ret._return !== "success" && _ret.code == "13") {
                    layer.alert($.languagePack(_ret.language), function (index) {
                        window.location.reload();
                        layer.close(index);
                    });
//                    setTimeout(function () {
//                        window.location.reload();
//                    }, 2000);
                    return  '';
                }
                // 登录超时
                if (_ret._return !== "success" && _ret.code == "1") {
                    gotoMemberLoginPage();
                }
                // 错误信息提示
                if (_ret._return !== "success" && _ret.message !== "") {
                    if (_ret.code == "1") {
                        layer.alert(_ret.message, function (index) {
                            window.location.href = $.ajaxUrl("memberLoginUrl");
                            layer.close(index);
                        });
                    } else {
                        layer.alert(_ret.message, function (index) {
                            layer.close(index);
                        });
                    }
                    return false;
                }
                // 返回成功
                if (_ret._return === "success") {
                    // 更新购物车显示数字
                    layer.alert($.languagePack('addCartSuccessfullyConfirmToCartPage'), function (index) {
                        window.location.href = $.ajaxUrl("memberCartUrl");
                        layer.close(index);
                    });
                    updateCartNumber();
                }
            }
            ,
            error: function () {
                return  ajaxError();
            }
        });
    });

    // 点击属性功能
    $(".g-click-item").click(function () {
        reunitPriceReset($(this));
    });
    
    // 点击默认图片
    $(".default-image").click(function(){
        var _this = $(this);
        var imageid = _this.data("imageid");
        showLightBox(imageid);
    });

    if ($(".product-detail-image-big>img").length > 0 && $(".product-detail-image-big>img").data("zoom") !== false) {
        // 放大镜功能插件
        var _img = $(".product-detail-image-big>img").magnifier({
            ratio: 3,
            mover: function (magnifier, zoom) {
                zoom.click(function(){
                    var imageid = $(".default-image").data("imageid");
                    showLightBox(imageid);
                });
            },
            mout: function (magnifier, zoom) {
                zoom.unbind('click');
            }
        });
    }

    // 分享功能兼容
    $("a[class='bds_more']").hover(function () {
        $("div[id^='bdSharePopup']").each(function (index, element) {
            $(this).css({'margin-left': 0});
            if (parseInt($(this).css("left")) + parseInt($(this).css("width")) > parseInt($(window).width())) {
                $(this).css({'margin-left': -(parseInt($(this).css("left")) + parseInt($(this).css("width")) - parseInt($(window).width()))});
            }
        });
        $("iframe[id^='bdSharePopup']").each(function (index, element) {
            $(this).css({'margin-left': 0});
            if (parseInt($(this).css("left")) + parseInt($(this).css("width")) > parseInt($(window).width())) {
                $(this).css({'margin-left': -(parseInt($(this).css("left")) + parseInt($(this).css("width")) - parseInt($(window).width()))});
            }
        });
    });
    // 判断图片加载状况，加载完成后回调
    allIsImgLoad($(".product-detail-images-in img"), function () {
        // 加载完成
        productDetailImageLoad();
    });

    // 留言
    $(".g-form-message").click(function () {
        var _data = productMessage($(this));
        if (!_data) {
            return '';
        }
        $.ajax({
            type: 'POST',
            url: formUrl,
            data: _data,
            dataType: 'json',
            success: function (_ret) {
                if (_ret._return === "success") {
                    layer.alert($.languagePack('liveProductMessageSuccess'), function (index) {
                        window.location.reload();
                        layer.close(index);
                    });
                    $(".layui-layer-close").click(function () {
                        window.location.reload();
                    });
                } else {

                    if (!!_ret.language) {
                        layer.alert($.languagePack(_ret.language), function (index) {
                            if (_ret.code == "2") {
                                $("input[name='code']").focus();
                            }
                            layer.close(index);
                        });
                    } else if (!!_ret.message) {
                        layer.alert(_ret.message, function (index) {
                            layer.close(index);
                        });
                    }

                    return false;
                }
            },
            error: function () {
                return  ajaxError();
            }
        });
    });
});

function verification() {
    if ($("input[name='product-price']").val() == "") {
        layer.alert(languagePack('pleaseSelectThePropertiesOfTheProduct'), function (index) {
            layer.close(index);
        });
        return '';
    }
    if ($("input[name='group-items']").length > 0 && $("input[name='group-items']").val() == "") {
        return false;
    }
    if (parseInt($("#buyNum").attr("max")) == 0) {
        layer.alert(languagePack('sorryThereIsNoInventory'), function (index) {
            layer.close(index);
        });
        return '';
    } else {
        if (!/[0-9]+$/.test($("#buyNum").val()) || isNaN(parseInt($("#buyNum").val())) || parseInt($("#buyNum").val()) == 0 || parseInt($("#buyNum").val()) < 1) {
            layer.alert(languagePack('pleaseEnterThePurchaseQuantity'), function (index) {
                layer.close(index);
            });
            return '';
        }
        if (parseInt($("#buyNum").val()) > parseInt($("#buyNum").attr("max"))) {
            layer.alert(languagePack('quantityCanNotBeGreaterThanTheInventory') + " : " + $("#buyNum").attr("max"), function (index) {
                layer.close(index);
            });
            return '';
        }
    }
    if ($("input[name='product-id']").val() < 1) {
        return false;
    }
    if ($("input[name='group-items']").length > 0) {
        return {
            product_id: $("input[name='product-id']").val(),
            num: $("#buyNum").val(),
            items: $("input[name='group-items']").val()
        };
    } else {
        return {
            product_id: $("input[name='product-id']").val(),
            num: $("#buyNum").val()
        };
    }
}

function reunitPriceReset(_this) {
    $("input[name='option-" + _this.data('optionid') + "']").val(_this.data('itemid'));
    // 首先对于选择的样式做一个selected效果
    _this.parent("div").children(".g-click-item").each(function (key) {
        if ($(this).data('itemid') === _this.data('itemid')) {
            if (!$(this).hasClass("selected")) {
                $(this).addClass("selected")
            }

        } else {
            $(this).removeClass("selected")
        }
    });

    // 需要进行一个判断，是否所有的input标签 option-XX 的内容都有值
    var items = isReadyToGetPrice();
    if (false === items) {
        return false;
    }
    var group = typeof getGroupInfoByItems != "undefined" ? getGroupInfoByItems(items) : false;
    if (false === group) {
        return false;
    }
    // 图片的变动
    if (group.image > 0) {
        $(".iamge-slide>a").each(function () {
            if (group.image == $(this).data("imageid")) {
                $(this).click();
                return '';
            }
        });
    }
    if (typeof price_negotiable === "undefined") {
        if (group.sale_price === "0.00") {
            $(".product-prices").hide();
            $(".g-price-price").show().find(".bigsize").html(number_format(group.price, 2, '.', ''));
            $("input[name='product-price']").val(group.price);
        } else {
            $(".product-prices").hide();
            $(".g-sale-price").show().find(".bigsize").html(number_format(group.sale_price, 2, '.', ''));
            $(".g-sale-price").show().find(".g-price").html(number_format(group.price, 2, '.', ''));
            $("input[name='product-price']").val(group.sale_price);
            if (group.price > 0) {

            } else {
                $(".g-sale-price").show().find(".g-price").parents(".price-market").hide();
            }
        }
    }
    // 库存
    $("input[name='group-items']").val(items);
    if (group.is_inventory === "0" || group.inventory === "-1") {
        $("#buyNum").attr({"max": "2147483648", "min": "1"});
        if ($("#buyNum").val() == 0) {
            $("#buyNum").val("1");
        }
    } else if (group.is_inventory === "1" && parseInt(group.inventory) > 0) {
        $("#buyNum").attr({"max": parseInt(group.inventory), "min": "1"});
        if ($("#buyNum").val() == 0) {
            $("#buyNum").val("1");
        }
        $(".g-stock-num").html(group.inventory);
        $(".product-quantity>.stock").show();
    } else if (group.is_inventory === "1" && parseInt(group.inventory) < 1) {
        $("#buyNum").attr({"max": "0", "min": "0"});
        if ($("#buyNum").val() != 0) {
            $("#buyNum").val("0");
        }
        $(".g-stock-num").html(group.inventory);
        $(".product-quantity>.stock").show();
    }
}

function isReadyToGetPrice() {
    try {
        var items = "";
        var salePirce = getOptionsSort();
        for (var p in salePirce) {
            if ($("input[name='option-" + salePirce[p] + "']").val() == "") {
                return false;
            } else {
                items += $("input[name='option-" + salePirce[p] + "']").val() + ",";
            }
        }
        return items.substring(0, items.length - 1);
    } catch (e) {
        console.debug(e.message);
        console.debug(e.description)
        console.debug(e.number)
        console.debug(e.name)
        return false;
    }
}


function productDetailImageLoad() {
    if ($(".default-image").data("load") == "0") {
        return '';
    }
    $(".default-image").data("load", "0");
    if ($(".default-image").data("imageid") > 0) {
        if ($(".img-small-item").length > 0) {
            $(".img-small-item").each(function (key) {
                if ($(this).data("imageid") == $(".default-image").data("imageid")) {
                    $(this).children(".cur-top").show();
                } else {
                    $(this).children(".cur-top").hide();
                }
            });
        }
    }
    if ($(".img-small-item").length > 0) {
        $(".img-small-item").click(function () {
            var _this = $(this);
            if ($(".default-image").length > 0) {
                $(".default-image").data("imageid", _this.data("imageid")).attr("src", _this.find("img").attr("src"));
            }
            $(".img-small-item").each(function (key) {
                if ($(this).data("imageid") == _this.data("imageid")) {
                    $(this).children(".cur-top").show();
                } else {
                    $(this).children(".cur-top").hide();
                }
            });
        });
        var image_width_total = 0;
        $(".iamge-slide a").each(function (key) {
            image_width_total = image_width_total + $(this).width() + parseInt($(this).css("margin-left")) + parseInt($(this).css("margin-right")) + parseInt($(this).css("padding-left")) + parseInt($(this).css("padding-right"));
        });
        if (image_width_total < ($(".iamge-slide").width() + parseInt($(".iamge-slide a").css("margin-left")) + parseInt($(".iamge-slide a").css("margin-right")) + parseInt($(".iamge-slide a").css("padding-left")) + parseInt($(".iamge-slide a").css("padding-right")))) {
            $(".imgsmall-next").addClass("disabled");
        }
        $(".imgsmall-pre").addClass("disabled");
        $(".iamge-slide").css({"position": "relative"});
        clickImgNext();
        clickImgPrev();
    }


}

function clickImgPrev() {
    $(".imgsmall-pre").click(function () {
        if ($(this).hasClass("disabled")) {
            return '';
        }
        var item_left = parseInt($(".img-small-item").width()) + parseInt($(".img-small-item").css("margin-left")) + parseInt($(".img-small-item").css("margin-right")) + parseInt($(".img-small-item").css("padding-left")) + parseInt($(".img-small-item").css("padding-right"));
        var _left = (isNaN(parseInt($(".iamge-slide").css("left"))) ? 0 : parseInt($(".iamge-slide").css("left"))) + item_left;
        $(this).unbind("click");

        $(".iamge-slide").animate({left: _left}, 200, function () {
            clickImgPrev();
            imgSmallLeftRight();
        });

    });
}

function clickImgNext() {
    $(".imgsmall-next").click(function () {
        if ($(this).hasClass("disabled")) {
            return '';
        }
        var item_left = parseInt($(".img-small-item").width()) + parseInt($(".img-small-item").css("margin-left")) + parseInt($(".img-small-item").css("margin-right")) + parseInt($(".img-small-item").css("padding-left")) + parseInt($(".img-small-item").css("padding-right"));
        var _left = (isNaN(parseInt($(".iamge-slide").css("left"))) ? 0 : parseInt($(".iamge-slide").css("left"))) - item_left;
        $(this).unbind("click");
        if (true === imgSmallLeftRight()) {
            return '';
        }
        $(".iamge-slide").animate({left: _left}, 200, function () {
            clickImgNext();
            imgSmallLeftRight();
        });
    });
}

function imgSmallLeftRight() {
    var item_left = parseInt($(".img-small-item").width()) + parseInt($(".img-small-item").css("margin-left")) + parseInt($(".img-small-item").css("margin-right")) + parseInt($(".img-small-item").css("padding-left")) + parseInt($(".img-small-item").css("padding-right"));
    var js_left = $(".small-list").offset().left + $(".small-list").width() - item_left;
    var sj_left = $(".iamge-slide a:last").offset().left;
    var result = '';
    if ($(".iamge-slide").offset().left === $(".small-list").offset().left) {
        $(".imgsmall-pre").addClass("disabled");
    }
    if ($(".iamge-slide").offset().left < $(".small-list").offset().left) {
        $(".imgsmall-pre").removeClass("disabled");
    }
    if (Math.abs(Math.abs(js_left) - Math.abs(sj_left)) < item_left) {
        $(".imgsmall-next").addClass("disabled");
    } else {
        $(".imgsmall-next").removeClass("disabled");
    }
    return false;
}

function productMessage(dataJson) {
    return dataJson.formsValidation({
        beginStyle: function (_this) {

        },
        endStyle: function (_this, result) {

        },
        forms: {
            code: $("input[name='code']"),
            name: $("input[name='name']"),
            phone: $("input[name='phone']"),
            email: $("input[name='email']"),
            message: $("textarea[name='message']")
        },
        datas: {
            code: $("input[name='code']").val(),
            name: $("input[name='name']").val(),
            phone: $("input[name='phone']").val(),
            email: $("input[name='email']").val(),
            message: $("textarea[name='message']").val()
        },
        validation: {
            code: [
                {rule: "required", failure: function (ele) {
                        layer.alert(languagePack('verificationCodeCannotBeEmpty'), function (index) {
                            ele.focus().parent("div").addClass("has-error");
                            layer.close(index);
                        });
                    }
                },
                {rule: "length", min: 4, max: 4, failure: function (ele) {
                        layer.alert(languagePack('pleaseEnter4VerificationCode'), function (index) {
                            ele.focus().parent("div").addClass("has-error");
                            layer.close(index);
                        });
                    }
                }
            ],
            name: [
                {rule: "required", failure: function (ele) {
                        layer.alert(languagePack('onloneMessageFormNameRequired'), function (index) {
                            ele.focus().parent("div").addClass("has-error");
                            layer.close(index);
                        });
                    }
                },
                {rule: "length", min: 4, max: 100, failure: function (ele) {
                        layer.alert(languagePack('onloneMessageFormNameLength'), function (index) {
                            ele.focus().parent("div").addClass("has-error");
                            layer.close(index);
                        });
                    }
                }
            ],
            phone: [
                {rule: "required", failure: function (ele) {
                        layer.alert(languagePack('onloneMessageFormPhoneRequired'), function (index) {
                            ele.focus().parent("div").addClass("has-error");
                            layer.close(index);
                        });
                    }
                },
                {rule: "length", min: 1, max: 50, failure: function (ele) {
                        layer.alert(languagePack('onloneMessageFormPhoneLength'), function (index) {
                            ele.focus().parent("div").addClass("has-error");
                            layer.close(index);
                        });
                    }
                }
            ],
            email: [
                {rule: "required", failure: function (ele) {
                        layer.alert(languagePack('onloneMessageFormMailRequired'), function (index) {
                            ele.focus().parent("div").addClass("has-error");
                            layer.close(index);
                        });
                    }
                },
                {rule: "email", failure: function (ele) {
                        layer.alert(languagePack('onloneMessageFormMailEmail'), function (index) {
                            ele.focus().parent("div").addClass("has-error");
                            layer.close(index);
                        });
                    }
                },
                {rule: "length", min: 2, max: 100, failure: function (ele) {
                        layer.alert(languagePack('onloneMessageFormMailLength'), function (index) {
                            ele.focus().parent("div").addClass("has-error");
                            layer.close(index);
                        });
                    }
                }
            ],
            message: [
                {rule: "required", failure: function (ele) {
                        layer.alert(languagePack('onloneMessageFormMessageRequired'), function (index) {
                            ele.focus().parent("div").addClass("has-error");
                            layer.close(index);
                        });
                    }
                },
                {rule: "length", min: 1, max: 1000, failure: function (ele) {

                        layer.alert(languagePack('onloneMessageFormMessageLength'), function (index) {
                            ele.focus().parent("div").addClass("has-error");
                            layer.close(index);
                        });
                    }
                }
            ]
        }
    });
}

function showLightBox(imageid){
    if($("#imageid"+imageid).length > 0){
        $("#imageid"+imageid).click();
    }
}