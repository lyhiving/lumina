! function (e, t) {
    "object" == typeof exports && "object" == typeof module ? module.exports = t(require("Truck")) : "function" == typeof define && define.amd ? define("truck/richtext@1.1.5", ["Truck"], t) : "object" == typeof exports ? exports["truck/richtext@1.1.5"] = t(require("Truck")) : e["truck/richtext@1.1.5"] = t(e.Truck)
}(this, function (e) {
    return function (e) {
        function t(n) {
            if (r[n]) return r[n].exports;
            var i = r[n] = {
                i: n,
                l: !1,
                exports: {}
            };
            return e[n].call(i.exports, i, i.exports, t), i.l = !0, i.exports
        }
        var r = {};
        return t.m = e, t.c = r, t.i = function (e) {
            return e
        }, t.d = function (e, r, n) {
            t.o(e, r) || Object.defineProperty(e, r, {
                configurable: !1,
                enumerable: !0,
                get: n
            })
        }, t.n = function (e) {
            var r = e && e.__esModule ? function () {
                return e.default
            } : function () {
                return e
            };
            return t.d(r, "a", r), r
        }, t.o = function (e, t) {
            return Object.prototype.hasOwnProperty.call(e, t)
        }, t.p = "https://ymm-maliang.oss-cn-hangzhou.aliyuncs.com/truck/richtext/1.1.5/", t(t.s = 11)
    }([function (e, t) {
        e.exports = function () {
            var e = [];
            return e.toString = function () {
                for (var e = [], t = 0; t < this.length; t++) {
                    var r = this[t];
                    r[2] ? e.push("@media " + r[2] + "{" + r[1] + "}") : e.push(r[1])
                }
                return e.join("")
            }, e.i = function (t, r) {
                "string" == typeof t && (t = [
                    [null, t, ""]
                ]);
                for (var n = {}, i = 0; i < this.length; i++) {
                    var o = this[i][0];
                    "number" == typeof o && (n[o] = !0)
                }
                for (i = 0; i < t.length; i++) {
                    var c = t[i];
                    "number" == typeof c[0] && n[c[0]] || (r && !c[2] ? c[2] = r : r && (c[2] = "(" + c[2] + ") and (" + r + ")"), e.push(c))
                }
            }, e
        }
    }, function (e, t, r) {
        r(7);
        var n = r(5)(r(2), r(6), "data-v-2f1c7022", null);
        e.exports = n.exports
    }, function (e, t, r) {
        "use strict";
        Object.defineProperty(t, "__esModule", {
            value: !0
        });
        var n = r(10);
        t.default = {
            mixins: [n.Maliang.mixin],
            name: "richtext",
            label: "富文本",
            style: {},
            props: {
                text: {
                    type: [String, Number],
                    editer: {
                        type: "richtext",
                        label: "文字内容",
                        desc: "具体的内容数据"
                    },
                    default: "输入文字"
                }
            },
            computed: {
                cText: function () {
                    return this.scopeGet("text")
                }
            },
            editerMethods: {},
            methods: {}
        }
    }, function (e, t, r) {
        t = e.exports = r(0)(), t.i(r(4), ""), t.push([e.i, ".component[data-v-2f1c7022]{width:100%;height:100%}", "", {
            version: 3,
            sources: ["/./src/index.vue"],
            names: [],
            mappings: "AAEA,4BACE,WAAY,AACZ,WAAa,CACd",
            file: "index.vue",
            sourcesContent: ["\n@import './mce-editer.css';\n.component[data-v-2f1c7022] {\n  width: 100%;\n  height: 100%;\n}"],
            sourceRoot: "webpack://"
        }])
    }, function (e, t, r) {
        t = e.exports = r(0)(), t.push([e.i, ".mce-editor figure.align-left{float:left}.mce-editor figure.align-right{float:right}.mce-editor figure.image{display:inline-block;border:1px solid gray;margin:0 2px 0 1px;background:#f5f2f0}.mce-editor figure.image img{margin:8px 8px 0}.mce-editor figure.image figcaption{margin:6px 8px;text-align:center}.mce-editor img.align-left{float:left}.mce-editor img.align-right{float:right}.mce-editor .mce-toc{border:1px solid gray}.mce-editor .mce-toc h2{margin:4px}.mce-editor .mce-toc li{list-style-type:none}.mce-editor p{margin:.5em 0}", "", {
            version: 3,
            sources: ["/./src/mce-editer.css"],
            names: [],
            mappings: "AACA,8BACE,UAAY,CACb,AACD,+BACE,WAAa,CACd,AACD,yBACE,qBAAsB,AACtB,sBAAuB,AACvB,mBAAoB,AACpB,kBAAoB,CACrB,AACD,6BACE,gBAAsB,CACvB,AACD,oCACE,eAAwB,AACxB,iBAAmB,CACpB,AACD,2BACE,UAAY,CACb,AACD,4BACE,WAAa,CACd,AACD,qBACE,qBAAuB,CACxB,AACD,wBACE,UAAY,CACb,AACD,wBACE,oBAAsB,CACvB,AACD,cACE,aAAgB,CACjB",
            file: "mce-editer.css",
            sourcesContent: ["\r\n.mce-editor figure.align-left {\r\n  float: left;\r\n}\r\n.mce-editor figure.align-right {\r\n  float: right;\r\n}\r\n.mce-editor figure.image {\r\n  display: inline-block;\r\n  border: 1px solid gray;\r\n  margin: 0 2px 0 1px;\r\n  background: #f5f2f0;\r\n}\r\n.mce-editor figure.image img {\r\n  margin: 8px 8px 0 8px;\r\n}\r\n.mce-editor figure.image figcaption {\r\n  margin: 6px 8px 6px 8px;\r\n  text-align: center;\r\n}\r\n.mce-editor img.align-left {\r\n  float: left;\r\n}\r\n.mce-editor img.align-right {\r\n  float: right;\r\n}\r\n.mce-editor .mce-toc {\r\n  border: 1px solid gray;\r\n}\r\n.mce-editor .mce-toc h2 {\r\n  margin: 4px;\r\n}\r\n.mce-editor .mce-toc li {\r\n  list-style-type: none;\r\n}\r\n.mce-editor p {\r\n  margin: 0.5em 0;\r\n}\r\n"],
            sourceRoot: "webpack://"
        }])
    }, function (e, t) {
        e.exports = function (e, t, r, n) {
            var i, o = e = e || {},
                c = typeof e.default;
            "object" !== c && "function" !== c || (i = e, o = e.default);
            var a = "function" == typeof o ? o.options : o;
            if (t && (a.render = t.render, a.staticRenderFns = t.staticRenderFns), r && (a._scopeId = r), n) {
                var s = Object.create(a.computed || null);
                Object.keys(n).forEach(function (e) {
                    var t = n[e];
                    s[e] = function () {
                        return t
                    }
                }), a.computed = s
            }
            return {
                esModule: i,
                exports: o,
                options: a
            }
        }
    }, function (e, t) {
        e.exports = {
            render: function () {
                var e = this,
                    t = e.$createElement,
                    r = e._self._c || t;
                return r("div", {
                    staticClass: "component mce-editor"
                }, [r("div", {
                    domProps: {
                        innerHTML: e._s(e.cText)
                    }
                })])
            },
            staticRenderFns: []
        }
    }, function (e, t, r) {
        var n = r(3);
        "string" == typeof n && (n = [
            [e.i, n, ""]
        ]), n.locals && (e.exports = n.locals);
        r(8)("75d7ea96", n, !0)
    }, function (e, t, r) {
        function n(e) {
            for (var t = 0; t < e.length; t++) {
                var r = e[t],
                    n = f[r.id];
                if (n) {
                    n.refs++;
                    for (var i = 0; i < n.parts.length; i++) n.parts[i](r.parts[i]);
                    for (; i < r.parts.length; i++) n.parts.push(o(r.parts[i]));
                    n.parts.length > r.parts.length && (n.parts.length = r.parts.length)
                } else {
                    for (var c = [], i = 0; i < r.parts.length; i++) c.push(o(r.parts[i]));
                    f[r.id] = {
                        id: r.id,
                        refs: 1,
                        parts: c
                    }
                }
            }
        }

        function i() {
            var e = document.createElement("style");
            return e.type = "text/css", d.appendChild(e), e
        }

        function o(e) {
            var t, r, n = document.querySelector('style[data-vue-ssr-id~="' + e.id + '"]');
            if (n) {
                if (m) return g;
                n.parentNode.removeChild(n)
            }
            if (A) {
                var o = l++;
                n = p || (p = i()), t = c.bind(null, n, o, !1), r = c.bind(null, n, o, !0)
            } else n = i(), t = a.bind(null, n), r = function () {
                n.parentNode.removeChild(n)
            };
            return t(e),
                function (n) {
                    if (n) {
                        if (n.css === e.css && n.media === e.media && n.sourceMap === e.sourceMap) return;
                        t(e = n)
                    } else r()
                }
        }

        function c(e, t, r, n) {
            var i = r ? "" : n.css;
            if (e.styleSheet) e.styleSheet.cssText = h(t, i);
            else {
                var o = document.createTextNode(i),
                    c = e.childNodes;
                c[t] && e.removeChild(c[t]), c.length ? e.insertBefore(o, c[t]) : e.appendChild(o)
            }
        }

        function a(e, t) {
            var r = t.css,
                n = t.media,
                i = t.sourceMap;
            if (n && e.setAttribute("media", n), i && (r += "\n/*# sourceURL=" + i.sources[0] + " */", r += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(i)))) + " */"), e.styleSheet) e.styleSheet.cssText = r;
            else {
                for (; e.firstChild;) e.removeChild(e.firstChild);
                e.appendChild(document.createTextNode(r))
            }
        }
        var s = "undefined" != typeof document;
        if ("undefined" != typeof DEBUG && DEBUG && !s) throw new Error("vue-style-loader cannot be used in a non-browser environment. Use { target: 'node' } in your Webpack config to indicate a server-rendering environment.");
        var u = r(9),
            f = {},
            d = s && (document.head || document.getElementsByTagName("head")[0]),
            p = null,
            l = 0,
            m = !1,
            g = function () {},
            A = "undefined" != typeof navigator && /msie [6-9]\b/.test(navigator.userAgent.toLowerCase());
        e.exports = function (e, t, r) {
            m = r;
            var i = u(e, t);
            return n(i),
                function (t) {
                    for (var r = [], o = 0; o < i.length; o++) {
                        var c = i[o],
                            a = f[c.id];
                        a.refs--, r.push(a)
                    }
                    t ? (i = u(e, t), n(i)) : i = [];
                    for (var o = 0; o < r.length; o++) {
                        var a = r[o];
                        if (0 === a.refs) {
                            for (var s = 0; s < a.parts.length; s++) a.parts[s]();
                            delete f[a.id]
                        }
                    }
                }
        };
        var h = function () {
            var e = [];
            return function (t, r) {
                return e[t] = r, e.filter(Boolean).join("\n")
            }
        }()
    }, function (e, t) {
        e.exports = function (e, t) {
            for (var r = [], n = {}, i = 0; i < t.length; i++) {
                var o = t[i],
                    c = o[0],
                    a = o[1],
                    s = o[2],
                    u = o[3],
                    f = {
                        id: e + ":" + i,
                        css: a,
                        media: s,
                        sourceMap: u
                    };
                n[c] ? n[c].parts.push(f) : r.push(n[c] = {
                    id: c,
                    parts: [f]
                })
            }
            return r
        }
    }, function (e, t) {
        e.exports = Truck
    }, function (e, t, r) {
        e.exports = r(1)
    }])
});
//# sourceMappingURL=index.js.m
