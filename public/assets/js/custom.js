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
        },

        unformatCurrency(v) {
            if (typeof v !== 'string') {
                v = v.toString();
            }
            var c = v.lastIndexOf(","), p = v.lastIndexOf(".");
            if (c > p) {
                r = v.replace('.', '').replace(',', '.');
            } else {
                r = v.replace(',', '', v);
            }
            return parseFloat(r);
        },

        formatCurrency(val, _p = 2, _t = '.', _d = ',') {
            _p = !isNaN(_p = Math.abs(_p)) ? _p : 2;
            _t = _t || ".";
            _d = _d || ",";
            if (typeof val === 'string') {
                val = this.unformatCurrency(val);
            }
            var
                negative = val < 0 ? "-" : "",
                i = parseInt(val = Math.abs(+val || 0).toFixed(_p), 10) + "",
                j = (j = i.length) > 3 ? j % 3 : 0;
            return negative + (j ? i.substr(0, j) + _t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + _t) + (_p ? _d + Math.abs(val - i).toFixed(_p).slice(2) : "");
        },


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
        const applyMask = (event) => {
            const phone = event.target.value.replace(/\D/g, '');
            if (phone === '') {
                return;
            }
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
        ['blur', 'keyup', 'keypress'].forEach(event => el.addEventListener(event, applyMask));
    });
    Alpine.directive('currency', (el, _p = 2) => {
        _p = parseInt(el.getAttribute('x-currency')) || _p;
        _p = typeof _p === 'number' && !isNaN(_p) ? _p : 2;
        function fn(n) {
            return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
        function fc(value, blur) {
            if (value === "") {
                return '';
            }
            const originalLen = value.length;
            const caretPos = document.activeElement.selectionStart;
            const commaPos = value.indexOf(",");
            if (commaPos === 0 || value.indexOf(",", commaPos + 1) !== -1) {
                value = value.replace(/,/g, "");
            }
            if (commaPos !== -1 && value.length - commaPos > 3) {
                value = value.slice(0, commaPos + 3);
            }
            if (commaPos !== -1) {
                let integerPart = value.substring(0, commaPos);
                let decimalPart = value.substring(commaPos + 1);
                integerPart = fn(integerPart);
                if (blur === "blur") {
                    decimalPart += Array(_p + 1).join("0");
                }
                decimalPart = decimalPart.substring(0, _p);
                value = integerPart + "," + decimalPart;
            } else {
                value = fn(value);
                if (blur === "blur") {
                    value += "," + Array(_p + 1).join("0");
                }
            }
            return value;
        }
        el.addEventListener('blur', () => {
            el.value = fc(el.value, 'blur');
        });
        el.addEventListener('input', () => {
            el.value = fc(el.value);
        });
    });

    //Chama o modo dark por padrao, caso não exista
    Alpine.store("app").toggleMode();
});
LM = {
    strToFloat(str) {
        if (str == '') {
            return 0;
        }
        return converted = parseFloat(str.replace(',', '.'));
    },
    unformatCurrency(v) {
        if (typeof v !== 'string') {
            v = v.toString();
        }
        var c = v.lastIndexOf(","), p = v.lastIndexOf(".");
        if (c > p) {
            r = v.replace('.', '').replace(',', '.');
        } else {
            r = v.replace(',', '', v);
        }
        return parseFloat(r);
    },
    formatCurrency(val, _p = 2, _t = '.', _d = ',') {
        _p = !isNaN(_p = Math.abs(_p)) ? _p : 2;
        _t = _t || ".";
        _d = _d || ",";
        if (typeof val === 'string') {
            val = this.unformatCurrency(val);
        }
        var
            negative = val < 0 ? "-" : "",
            i = parseInt(val = Math.abs(+val || 0).toFixed(_p), 10) + "",
            j = (j = i.length) > 3 ? j % 3 : 0;
        return negative + (j ? i.substr(0, j) + _t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + _t) + (_p ? _d + Math.abs(val - i).toFixed(_p).slice(2) : "");
    }
}