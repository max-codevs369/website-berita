document.addEventListener("DOMContentLoaded", function () {
        const toggle = document.querySelector(".js-menu-toggle");
        const menu   = document.querySelector(".site-mobile-menu");
        if (toggle) {
        toggle.addEventListener("click", function() {
            menu.classList.toggle("active");
        });
        }
});