(function ($) {
    "use strict";

    // Install + Activate button
    $("#install-activate-button").on("click", function (e) {
        e.preventDefault();

        var button = $(this);
        button.prop("disabled", true)
              .text("Installing & Activating recommended plugins…")
              .addClass("processing-spinner");

        $.post(home_styling_interior_localize.ajax_url, {
            action: "home_styling_interior_install_and_activate_plugins",
            nonce: home_styling_interior_localize.nonce
        }, function (response) {
            if (response.success) {
                window.location.href = home_styling_interior_localize.redirect_url;
            } else {
                button.text(response.data?.message || "Installation failed");
            }
        });
    });

})(jQuery);
