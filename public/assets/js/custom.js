document.addEventListener("alpine:init", () => {
    modalZIndex = 100,

        Alpine.data("collapse", () => ({
            collapse: false,
            collapseSidebar() {
                this.collapse = !this.collapse;
            }
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

    document.body.addEventListener('click', (event) => {
        // Verifica se o clique foi em um botão de fechar
        if (event.target.classList.contains('modal-close')) {
            const modalId = event.target.closest('.modal').id;
            // Chama a função closeModal usando o método bind
            closeModal.bind(this)(modalId);
        }
    });

    Alpine.data("main", (value) => ({

        openModal(modalId) {
            this.activeModal = modalId;
            document.body.classList.add('modal-open');
            document.getElementById(modalId).querySelector('.modal-backdrop').style.zIndex = modalZIndex;
            modalZIndex++;
            document.getElementById(modalId).querySelector('.modal-content').style.zIndex = modalZIndex;

            document.getElementById(modalId).style.display = 'block';
        },

        closeModal(e) {
            modalZIndex--;
            document.body.classList.remove('modal-open');

            const modalId = e.target.closest('.modal').id;
            // closeModal(modalId);
            document.getElementById(modalId).style.display = 'none';

            this.activeModal = null;
        }

    }));

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
        }

    });

    Alpine.directive('upper-input', (el) => {
        const toUpperCase = (event) => {
            event.target.value = event.target.value.toUpperCase();
        };
        ['blur', 'keyup', 'keypress'].forEach(event => el.addEventListener(event, toUpperCase));
    });

    Alpine.directive('lower-input', (el) => {
        const toLowerCase = (event) => {
            event.target.value = event.target.value.toLowerCase();
        };
        ['blur', 'keyup', 'keypress'].forEach(event => el.addEventListener(event, toLowerCase));
    });

    Alpine.directive('cpf_cnpj', (el) => {
        const formatCpfCnpj = (value) => {
            const length = value.replace(/\D/g, '').length;
            if (length <= 11) {
                return '000.000.000-00';
            }
            return '00.000.000/0000-00';
        };
        const applyMask = (event) => {
            const mask = formatCpfCnpj(event.target.value);
            let value = event.target.value.replace(/\D/g, '');
            let maskedValue = '';
            let maskIndex = 0;

            for (let i = 0; i < mask.length; i++) {
                if (mask[i].match(/[0-9]/)) {
                    maskedValue += value[maskIndex] || '';
                    maskIndex++;
                } else {
                    maskedValue += mask[i];
                }
            }
            if (event.inputType === 'deleteContentBackward' && event.target.value.length < maskedValue.length) {
                event.target.value = event.target.value;
            } else {
                event.target.value = maskedValue;
            }
        };
        el.addEventListener('input', applyMask);
    });

    Alpine.directive('phone_ddd', (el) => {
        const applyPhoneMask = (event) => {
            const phone = event.target.value.replace(/\D/g, '');
            let mask = '(99) 9999-99999';
            if (phone.length > 10) {
                mask = '(99) 99999-9999';
            }
            let maskedValue = '';
            let maskIndex = 0;
            for (let i = 0; i < mask.length; i++) {
                if (mask[i].match(/[0-9]/)) {
                    maskedValue += phone[maskIndex] || '';
                    maskIndex++;
                } else {
                    maskedValue += mask[i];
                }
            }
            event.target.value = maskedValue;
        };
        ['blur', 'keyup', 'keypress'].forEach(event => el.addEventListener(event, applyPhoneMask));
    });

    //Chama o modo dark por padrao, caso não exista
    Alpine.store("app").toggleMode();
});