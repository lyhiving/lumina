(window.webpackJsonp=window.webpackJsonp||[]).push([[15],{449:function(t,a,s){"use strict";s.r(a);var n=s(31),e=Object(n.a)({},(function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("ContentSlotsDistributor",{attrs:{"slot-key":t.$parent.slotKey}},[s("h2",{attrs:{id:"验证规则"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#验证规则"}},[t._v("#")]),t._v(" 验证规则")]),t._v(" "),s("div",{staticClass:"language-html extra-class"},[s("pre",{pre:!0,attrs:{class:"language-html"}},[s("code",[t._v("\n"),s("span",{pre:!0,attrs:{class:"token tag"}},[s("span",{pre:!0,attrs:{class:"token tag"}},[s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("<")]),t._v("input")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token attr-name"}},[t._v("type")]),s("span",{pre:!0,attrs:{class:"token attr-value"}},[s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("=")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v('"')]),t._v("text"),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v('"')])]),t._v(" "),s("span",{pre:!0,attrs:{class:"token attr-name"}},[t._v("lay-verify")]),s("span",{pre:!0,attrs:{class:"token attr-value"}},[s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("=")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v('"')]),t._v("required|phone|number"),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v('"')])]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v(">")])]),t._v("\n\n组件式用法：\n\n"),s("span",{pre:!0,attrs:{class:"token tag"}},[s("span",{pre:!0,attrs:{class:"token tag"}},[s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("<")]),t._v("x-input")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token attr-name"}},[t._v("name")]),s("span",{pre:!0,attrs:{class:"token attr-value"}},[s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("=")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v('"')]),t._v("username"),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v('"')])]),t._v(" "),s("span",{pre:!0,attrs:{class:"token attr-name"}},[t._v("required")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("/>")])]),t._v("\n"),s("span",{pre:!0,attrs:{class:"token tag"}},[s("span",{pre:!0,attrs:{class:"token tag"}},[s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("<")]),t._v("x-input")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token attr-name"}},[t._v("name")]),s("span",{pre:!0,attrs:{class:"token attr-value"}},[s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("=")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v('"')]),t._v("username"),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v('"')])]),t._v(" "),s("span",{pre:!0,attrs:{class:"token attr-name"}},[t._v("required")]),t._v(" "),s("span",{pre:!0,attrs:{class:"token attr-name"}},[t._v("lay-verify")]),s("span",{pre:!0,attrs:{class:"token attr-value"}},[s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("=")]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v('"')]),t._v("phone"),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v('"')])]),s("span",{pre:!0,attrs:{class:"token punctuation"}},[t._v("/>")])]),t._v("\n\n")])])]),s("h3",{attrs:{id:"自定义规则验证"}},[s("a",{staticClass:"header-anchor",attrs:{href:"#自定义规则验证"}},[t._v("#")]),t._v(" 自定义规则验证")]),t._v(" "),s("div",{staticClass:"language-script extra-class"},[s("pre",{pre:!0,attrs:{class:"language-text"}},[s("code",[t._v("\nform.verify({\n  username: function(value, item){ //value：表单的值、item：表单的DOM对象\n    if(!new RegExp(\"^[a-zA-Z0-9_\\u4e00-\\u9fa5\\\\s·]+$\").test(value)){\n      return '用户名不能有特殊字符';\n    }\n    if(/(^\\_)|(\\__)|(\\_+$)/.test(value)){\n      return '用户名首尾不能出现下划线\\'_\\'';\n    }\n    if(/^\\d+\\d+\\d$/.test(value)){\n      return '用户名不能全为数字';\n    }\n  },\n  \n  //我们既支持上述函数式的方式，也支持下述数组的形式\n  //数组的两个值分别代表：[正则匹配、匹配不符时的提示文字]\n  pass: [/^[\\S]{6,12}$/,'密码必须6到12位，且不能出现空格']\n});     \n\n")])])])])}),[],!1,null,null,null);a.default=e.exports}}]);