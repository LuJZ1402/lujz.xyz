/**
 * 使用方法
 * 加入放大镜的css样式 style 标签
 <!-- 放大镜效果的style样式 -->
 <style type="text/css">
 .class-zoom{
 border:1px solid #DEDEDE;
 background-color:#FFFFFF;
 display:none;
 opacity: .75;
 filter: alpha(opacity=75);
 -ms-filter: "alpha(opacity=75)";
 -khtml-opacity: .75;
 -moz-opacity: .75; 
 }
 .class-zoom-img{
 border:1px solid #DEDEDE;
 }
 </style>
 // 放大镜功能插件
 var _img = $(".product-detail-image-big>img").magnifier({
 ratio: 3,
 });
 // 传入的参数在 var defaults = {} 有定义默认参数
 */
// 放大镜插件
(function ($) {
    $.fn.extend({
        "magnifier": function (options) {
            var defaults = {
                beginStyle: function (_this) {
                },
                ratio: 2,
                display: "left",
                margin: 8,
                endStyle: function (_this) {
                },
                mover: function (magnifier, zoom) {
                },
                mout: function (magnifier, zoom) {
                }
            };
            var options = $.extend(defaults, options);
            var _this = this;
            if (typeof options.beginStyle === "function") {
                options.beginStyle(_this);
            }
            // 获取left以及top ，还有 zoom 的宽度根高度 定义zoom的div层
            _this.mouseover(function (e) {
                // 首先删除已有的显示层结构
                $(".class-zoom-img").each(function (key) {
                    $(this).remove()
                });
                $(".class-zoom").each(function (key) {
                    $(this).remove()
                });
                var X = _this.offset().left;
                var Y = _this.offset().top;
                var _zoom_width = parseInt(_this.width() / options.ratio);
                var _zoom_height = parseInt(_this.height() / options.ratio);
                var _img_tag = "<div class=\"class-zoom\"></div>";
                $("body").append(_img_tag);
                var _class_coom = $(".class-zoom");
                _class_coom.css({"position": "absolute", "z-index": "100", "top": (e.pageY - _zoom_height / 2) + "px", "left": (e.pageX - _zoom_width / 2) + "px", "width": parseInt(_zoom_width - 1) + "px", "height": parseInt(_zoom_height - 1) + "px", "border": "1px solid #BBBBBB", "cursor": "pointer"});  //  
                _class_coom.show();
                // 显示放大镜效果时执行的配置方法
                if (typeof options.mover === "function") {
                    options.mover(_this, _class_coom);
                }
                // 图片显示
                if (_class_coom.next(".class-zoom-img").length > 0) {
                    var _coom_img_f = _class_coom.next(".class-zoom-img");
                } else {
                    var _img_f = "<span class=\"class-zoom-img\"><img width=\"" + parseInt(_this.width() * options.ratio) + "\" height=\"" + parseInt(_this.height() * options.ratio) + "\" src=\"" + _this.attr("src") + "\" /></span>";
                    _class_coom.after(_img_f);
                    var _coom_img_f = _class_coom.next(".class-zoom-img");
                }
                var _zoomX = parseInt(_zoom_width / options.ratio);
                var _zoomY = parseInt(_zoom_height / options.ratio);
                if (options.display === "left") {
                    var imgX = X + _this.width() + options.margin;
                    var imgY = Y;
                } else if (options.display === "right") {
                    var imgX = X - _this.width() - options.margin;
                    var imgY = Y;
                } else {
                    console.log("显示方式只有 左右 两种 (display:\"left\" OR \"right\")");
                }
                _coom_img_f.css({"overflow": "hidden", "width": _this.width() + "px", "height": _this.height() + "px", "position": "absolute", "z-index": "100", "left": imgX + "px", "top": imgY + "px", "background-image": "none"/*url(" + _this.attr("src") + ")*/, "background-repeat": "no-repeat"});
                classZoomMove(X, Y, _zoom_width, _zoom_height, e, _class_coom, _coom_img_f);
                _class_coom.mousemove(function (es) {
                    classZoomMove(X, Y, _zoom_width, _zoom_height, es, _class_coom, _coom_img_f);
                });
                _class_coom.mouseout(function () {
                    // 显示放大镜效果时执行的配置方法
                    if (typeof options.mout === "function") {
                        options.mout(_this, _class_coom);
                    }
                    $(".class-zoom").each(function (key) {
                        $(this).remove()
                    });
                    $(".class-zoom-img").each(function (key) {
                        $(this).remove()
                    });
                    if (typeof options.endStyle === "function") {
                        options.endStyle(_this);
                    }
                });
                $(document).mousemove(function (dme) {
                    var dmeX = dme.pageX;
                    var dmeY = dme.pageY;
                    if ((_class_coom.offset().top - 10) > dmeY || (_class_coom.height() + _class_coom.offset().top + 10) < dmeY) {
                        _class_coom.mouseout();
                        $(document).unbind('mousemove');
                    }
                    if ((_class_coom.offset().left - 10) > dmeX || (_class_coom.width() + _class_coom.offset().left + 10) < dmeX) {
                        _class_coom.mouseout();
                        $(document).unbind('mousemove');
                    }
                });
            });

            function classZoomMove(X, Y, _zoom_width, _zoom_height, e, _class_coom, _coom_img_f) {
                if ((Y + _this.height() - (_zoom_height / 2)) < e.pageY) {
                    var pointY = Y + _this.height() - _zoom_height;
                } else if ((Y + (_zoom_height / 2)) > e.pageY) {
                    var pointY = Y;
                } else {
                    var pointY = (e.pageY - _zoom_height / 2);
                }
                if ((X + _this.width() - (_zoom_width / 2)) < e.pageX) {
                    var pointX = X + _this.width() - _zoom_width;
                } else if (X + (_zoom_width / 2) > e.pageX) {
                    var pointX = X;
                } else {
                    var pointX = (e.pageX - _zoom_width / 2);
                }
                _class_coom.css({"position": "absolute", "top": pointY + "px", "left": pointX + "px"});
                var positionX = parseInt((X - _class_coom.offset().left) * options.ratio);
                var positionY = parseInt((Y - _class_coom.offset().top) * options.ratio);
                _coom_img_f.children("img").css({"position": "relative", "top": positionY + "px", "left": positionX + "px"});
            }
        }
    });
})(jQuery);