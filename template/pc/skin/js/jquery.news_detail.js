$(function () {
    // 点击评论提交评论
    $(".g-click-comment").click(function () {
        // 验证是否不用登陆就可以评论
        var commentLimit = $("input[name='comment-limit']").val();
        if (commentLimit == 2) {
            // 需要验证是否登录
            if (false === isUserLogin()) {
                layer.alert(languagePack('noLoginMessage'), function (index) {
                    window.location.href = memberLoginUrl;
                    layer.close(index);
                });
                return '';
            }
        }
        // 获取验证码
        var code = $("input[name='code']").val();
        if (code === "") {
            layer.alert(languagePack('verificationCodeCannotBeEmpty'), function (index) {
                layer.close(index);
            });
            return '';
        }
        // 获取文章的id
        var articleId = $("input[name='article-id']").val();
        if (parseInt(articleId) < 1) {
            return '';
        }
        // 是否匿名
        if ($("input[name='anonymous']").length < 1 || $("input[name='anonymous']").is(":checked")) {
            var anonymous = 1;
        } else {
            var anonymous = 0;
        }
        // 获取评论内容
        var message = $("textarea[name='comment-message']").val();
        if (message == "") {
            layer.alert(languagePack('pleaseEnterComments'), function (index) {
                layer.close(index);
            });
            return '';
        }
        if (strlen(message) > 1000) {
            layer.alert(languagePack('commentaryContentCanNotMoreThan500Words'), function (index) {
                layer.close(index);
            });
            return '';
        }
        $.ajax({
            type: "POST",
            url: ajaxUrlArticleComment,
            data: {
                commentLimit: commentLimit,
                articleId: articleId,
                anonymous: anonymous,
                message: message,
                code: code
            },
            dataType: 'json',
            success: function (_ret) {
                // 非法操作
                if (_ret._return !== "success" && _ret.code == "110") {
                    return  ajaxError();
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
                    } else {
                        layer.alert(_ret.message, function (index) {
                            layer.close(index);
                        });
                    }
                    return false;
                }
                // 返回成功
                if (_ret._return === "success") {
                    setTimeout(function () {
                        window.location.reload();
                    }, 3000);
                    layer.alert(languagePack('commentOnSuccess'), function (index) {
                        window.location.reload();
                        layer.close(index);
                    });
                }
            },
            error: function () {
                return  ajaxError();
            }
        });
    });
});

