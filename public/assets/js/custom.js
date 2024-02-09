document.addEventListener("alpine:init", () => {
    Alpine.data("collapse", () => ({
        collapse: false,
        collapseSidebar() {
            this.collapse = !this.collapse;
        },
    }));
    Alpine.data("dropdown", (initialOpenState = false) => ({
        open: initialOpenState,
        toggle() {
            this.open = !this.open;
        },
    }));
    Alpine.data("modals", (initialOpenState = false) => ({
        open: initialOpenState,
        toggle() {
            this.open = !this.open;
        },
    }));
    Alpine.data("main", (value) => ({}));

    Alpine.store("app", {
        sidebar: false,
        toggleSidebar() {
            this.sidebar = !this.sidebar;
        },
        mode: Alpine.$persist("dark"),
        toggleMode(val) {
            if (!val) {
                val = this.mode || "dark";
            }
            this.mode = val;
            // Aplicar classe de ícone correspondente ao modo
            const pageTitle = document.querySelector('.page-title');
            pageTitle.classList.remove('icon-light', 'icon-dark');
            if (val === "dark") {
                pageTitle.classList.add('icon-dark');
                return;
            }
            pageTitle.classList.add('icon-light');

        },
        toggleFullScreen() {
            if (document.fullscreenElement) {
                document.exitFullscreen();
                return;
            }
            document.documentElement.requestFullscreen();
        },
        fadeOut(el) {
            el.style.opacity = 1;
            (function fade() {
                if ((el.style.opacity -= 0.1) < 0) {
                    el.style.display = "none";
                } else {
                    requestAnimationFrame(fade);
                }
            })();
        },
        fadeIn(el, display) {
            el.style.opacity = 0;
            el.style.display = display || "flex";
            (function fade() {
                let val = parseFloat(el.style.opacity);
                if (!((val += 0.2) > 1)) {
                    el.style.opacity = val;
                    requestAnimationFrame(fade);
                }
            })();
        },
        modalHandler(id, val) {
            let modal = document.getElementById(id);
            if (val) {
                fadeIn(modal);
            } else {
                fadeOut(modal);
            }
        }
    });
    Alpine.store("app").toggleMode();
});