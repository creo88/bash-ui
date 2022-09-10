// toggling with animation
$(document).ready(function () {
    $(".mobile-menu-button").each(function (_, navToggler) {
        var target = $(navToggler).data("target");
        $(navToggler).on("click", function () {
            $(target).animate({
                height: "toggle",
            })
        })
    })
})