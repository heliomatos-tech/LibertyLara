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
        modalState: 'CLOSED', // [CLOSED, TRANSITION, OPEN]
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
    });
    Alpine.store("app").toggleMode();
});