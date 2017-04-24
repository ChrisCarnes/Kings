/*!
 * Mobile Nav
 */
"use strict";
+function(t) {
    t(".nav-mobile-toggle, .nav-overlay").on("click", function(e) {
        e.preventDefault(),
        t("#wrap").toggleClass("nav-mobile-active")
    })
}(jQuery);
