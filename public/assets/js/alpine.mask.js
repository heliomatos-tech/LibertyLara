(() => {
    function v(n) {
        n.directive("mask", (e, {
            value: t,
            expression: u
        }, {
            effect: s,
            evaluateLater: a,
            cleanup: l
        }) => {
            let r = () => u,
                o = "";
            queueMicrotask(() => {
                if (["function", "dynamic"].includes(t)) {
                    let i = a(u);
                    s(() => {
                        r = p => {
                            let d;
                            return n.dontAutoEvaluateFunctions(() => {
                                i(c => {
                                    d = typeof c == "function" ? c(p) : c
                                }, {
                                    scope: {
                                        $input: p,
                                        $money: x.bind({
                                            el: e
                                        })
                                    }
                                })
                            }), d
                        }, f(e, !1)
                    })
                } else f(e, !1);
                e._x_model && e._x_model.set(e.value)
            });
            let g = new AbortController;
            l(() => {
                g.abort()
            }), e.addEventListener("input", () => f(e), {
                signal: g.signal,
                capture: !0
            }), e.addEventListener("blur", () => f(e, !1), {
                signal: g.signal
            });

            function f(i, p = !0) {
                let d = i.value,
                    c = r(d);
                if (!c || c === "false") return !1;
                if (o.length - i.value.length === 1) return o = i.value;
                let b = () => {
                    o = i.value = h(d, c)
                };
                p ? w(i, c, () => {
                    b()
                }) : b()
            }

            function h(i, p) {
                if (i === "") return "";
                let d = k(p, i);
                return m(p, d)
            }
        }).before("model")
    }

    function w(n, e, t) {
        let u = n.selectionStart,
            s = n.value;
        t();
        let a = s.slice(0, u),
            l = m(e, k(e, a)).length;
        n.setSelectionRange(l, l)
    }

    function k(n, e) {
        let t = e,
            u = "",
            s = {
                9: /[0-9]/,
                a: /[a-zA-Z]/,
                A: /[A-Z]/,
                "*": /[a-zA-Z0-9]/
            },
            a = "";
        for (let l = 0; l < n.length; l++) {
            if (["9", "a", "A", "*"].includes(n[l])) {
                a += n[l];
                continue
            }
            for (let r = 0; r < t.length; r++)
                if (t[r] === n[l]) {
                    t = t.slice(0, r) + t.slice(r + 1);
                    break
                }
        }
        for (let l = 0; l < a.length; l++) {
            let r = !1;
            for (let o = 0; o < t.length; o++)
                if (s[a[l]].test(t[o])) {
                    u += t[o], t = t.slice(0, o) + t.slice(o + 1), r = !0;
                    break
                } if (!r) break
        }
        return u
    }

    function m(n, e) {
        let t = Array.from(e),
            u = "";
        for (let s = 0; s < n.length; s++) {
            if (!["9", "a", "A", "*"].includes(n[s])) {
                u += n[s];
                continue
            }
            if (t.length === 0) break;
            u += t.shift()
        }
        return u
    }

    function x(n, e = ".", t, u = 2) {
        if (n === "-") return "-";
        if (/^\D+$/.test(n)) return "9";
        t == null && (t = e === "," ? "." : ",");
        let s = (o, g) => {
            let f = "",
                h = 0;
            for (let i = o.length - 1; i >= 0; i--) o[i] !== g && (h === 3 ? (f = o[i] + g + f, h = 0) : f = o[i] + f, h++);
            return f
        },
            a = n.startsWith("-") ? "-" : "",
            l = n.replaceAll(new RegExp(`[^0-9\\${e}]`, "g"), ""),
            r = Array.from({
                length: l.split(e)[0].length
            }).fill("9").join("");
        return r = `${a}${s(r, t)}`, u > 0 && n.includes(e) && (r += `${e}` + "9".repeat(u)), queueMicrotask(() => {
            this.el.value.endsWith(e) || this.el.value[this.el.selectionStart - 1] === e && this.el.setSelectionRange(this.el.selectionStart - 1, this.el.selectionStart - 1)
        }), r
    }
    document.addEventListener("alpine:init", () => {
        window.Alpine.plugin(v)
    });
})();