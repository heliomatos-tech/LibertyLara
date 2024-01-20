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
        mode: Alpine.$persist("light"),
        toggleMode(val) {
            if (!val) {
                val = this.mode || "light"; // light/Dark
            }
            this.mode = val;
        },

        toggleFullScreen() {
            if (document.fullscreenElement) {
                document.exitFullscreen();
                return;
            }
            document.documentElement.requestFullscreen();
        },
    });
});
