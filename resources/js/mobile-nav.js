/*!
 * Matter
 *
 * @author Creative team
 * @version 0.1.23
 */
"use strict";
+function(t) {
    t(".nav-mobile-toggle, .nav-overlay").on("click", function(e) {
        e.preventDefault(),
        t("#wrap").toggleClass("nav-mobile-active")
    })
}(jQuery);
