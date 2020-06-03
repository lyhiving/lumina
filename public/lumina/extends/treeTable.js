"use strict";layui.define(["jquery"],function(e){var d="treeTable",m=layui.jquery;(t=function(){}).prototype.config=function(){return{top_value:0,primary_field:"id",parent_field:"parentid",hide_class:"layui-hide",icon:{open:"fa fa-caret-down",close:"fa fa-caret-right",left:16},cols:[],checked:{},is_click_icon:!1,is_checkbox:!1,is_cache:!0}},t.prototype.template=function(o){var s=this,h=[],a="",p=m("table"+o.elem).length||!(o.is_click_icon=!0),f=o.is_checkbox?'<div class="layui-unselect layui-form-checkbox cbx" lay-skin="primary"><i class="fa fa-check"></i></div>':"",u=f?f.replace("cbx","cbx layui-form-checked"):"",y=f&&'<th style="width:28px;">'+(-1<m.inArray(o.top_value,o.checked.data)?u:f)+"</th>";m.each(s.data(o,o.data),function(l,d){var r="",n=!1,e=d[o.parent_field]==o.top_value||d[o.parent_field]==s.cache(o,d[o.parent_field])?"":o.hide_class;d.level=h[d[o.primary_field]]=d[o.parent_field]!=o.top_value?h[d[o.parent_field]]+1:0,d.is_end=!o.childs[d[o.primary_field]],m.each(o.cols,function(e,t){var a="";t.width&&(a+="width:"+t.width+";"),t.align&&(a+="text-align:"+t.align+";"),a=a&&'style="'+a+'"',o.is_checkbox&&o.checked&&-1<m.inArray(d[o.checked.field],o.checked.data)&&(n=!0),l||(y+="<th "+a+">"+t.title+"</th>");var i=t.field!=o.icon_field||d.is_end?"<span></span>":'<i class="mr-1 '+(s.cache(o,d[o.primary_field])?o.icon.open:o.icon.close)+'"></i>',c=t.field==o.icon_field?h[d[o.primary_field]]*o.icon.left+"px":"",i=i.replace(">",' style="margin-left:'+c+';">');r+="<td "+a+(c?'data-down class="cursor-pointer"':"")+">"+i+(p?"":n?u:f)+(t.template?t.template(d):d[t.field])+"</td>"});var t=p?m(n?u:f).wrap('<td style="width:28px;">').parent().prop("outerHTML"):"";a+='<tr class="'+e+'" data-id="'+d[o.primary_field]+'" data-pid="'+d[o.parent_field]+'" data-path="'+d.path+'">'+t+r+"</tr>"});var e=p?'<thead><tr data-id="'+o.top_value+'">'+y+"</tr></thead><tbody>"+a+"</tbody>":a.replace(/<tr/g,"<ul").replace(/tr>/g,"ul>").replace(/<td/g,"<li").replace(/td>/g,"li>"),t=o.is_click_icon?"[data-down] i:not(.layui-icon-ok)":"[data-down]";m(o.elem).html(e).off("click",t).on("click",t,function(){var e=m(this).parents("[data-id]"),t=e.find("[data-down]"),a=e.data("id"),i=e.data("pid"),c=e.data("path"),l=t.find("i:not(.layui-icon-ok)").attr("class")==o.icon.close;l?(t.find("i:not(.layui-icon-ok)").attr("class",o.icon.open),t.parents(o.elem).find("[data-pid="+a+"]").removeClass(o.hide_class),s.cache(o,a,!0)):(t.find("i:not(.layui-icon-ok)").attr("class",o.icon.close),s.childs_hide(o,a,c)),layui.event.call(this,d,"tree(flex)",{elem:this,item:o.childs[i][a],table:o.elem,is_open:l})}).off("click",".cbx").on("click",".cbx",function(){var e=$(this),t=m(this).toggleClass("layui-form-checked").hasClass("layui-form-checked"),a=m(this).parents("[data-id]"),i=a.data("id"),c=a.data("pid");t?e.addClass("layui-form-checked"):e.removeClass("layui-form-checked"),layui.event.call(this,d,"tree(box)",{elem:this,item:void 0===c?{}:o.childs[c][i],table:o.elem,is_checked:t})}).off("click","[lay-filter]").on("click","[lay-filter]",function(){var e=m(this).parents("[data-id]"),t=e.data("id"),a=e.data("pid"),i=m(this).attr("lay-filter");return layui.event.call(this,d,"tree("+i+")",{elem:this,item:o.childs[a][t]})}),o.end&&o.end(o)},t.prototype.parents_checkbox=function(e,t){var a=m(e.elem).find("[data-pid="+t+"]"),i=m(e.elem).find("[data-id="+t+"]"),c=m(e.elem).find("[data-pid="+t+"] .cbx.layui-form-checked").length;a.length!=c&&0!=c||(t=i.data("pid"),c?i.find(".cbx").addClass("layui-form-checked"):i.find(".cbx").removeClass("layui-form-checked"),void 0===t||this.parents_checkbox(e,t))},t.prototype.childs_checkbox=function(t,e,a){var i=this;m(t.elem).find("[data-pid="+e+"]").each(function(){var e=m(this).find(".cbx");a?e.addClass("layui-form-checked"):e.removeClass("layui-form-checked"),i.childs_checkbox(t,m(this).data("id"),a)})},t.prototype.childs_hide=function(i,e,c){this.cache(i,e,!1),m(i.elem).find("tbody>tr[data-path*='"+c+"']").each(function(){var e=$(this),t=e.find("i:not(.layui-icon-ok)"),a=e.data("path");t.length&&t.attr("class",i.icon.close),a!==c&&-1<a.indexOf(c)&&e.addClass(i.hide_class)})},t.prototype.data=function(a){var i=[],c=[];return m.each(a.data,function(e,t){i[t[a.primary_field]]=t,c[t[a.parent_field]]||(c[t[a.parent_field]]=[]),c[t[a.parent_field]][t[a.primary_field]]=t}),a.childs=c,this.tree_data(a,i,a.top_value,[])},t.prototype.tree_data=function(a,i,c,l){var d=this;return i[c]&&(l.push(i[c]),delete i[c]),m.each(a.data,function(e,t){t[a.parent_field]==c&&l.concat(d.tree_data(a,i,t[a.primary_field],l))}),l},t.prototype.render=function(t){var a=this;return(t=m.extend(a.config(),t)).url?m.get(t.url,function(e){t.data=e.data,a.template(t)}):a.template(t),t},t.prototype.checked=function(e){var t=[];return m(e.elem).find(".cbx.layui-form-checked").each(function(){var e=m(this).parents("[data-id]").data("id");t.push(e)}),t},t.prototype.openAll=function(a){var i=this;m.each(a.data,function(e,t){t[a.primary_field]&&i.cache(a,t[a.primary_field],!0)}),i.render(a)},t.prototype.closeAll=function(e){localStorage.setItem(e.elem.substr(1),""),this.render(e)},t.prototype.on=function(e,t){return layui.onevent.call(this,d,e,t)},t.prototype.cache=function(e,t,a){if(!e.is_cache)return!1;var i=e.elem.substr(1),t=t.toString(),c=localStorage.getItem(i)?localStorage.getItem(i).split(","):[],l=m.inArray(t,c);if(void 0===a)return-1!=l&&t;a&&-1==l&&c.push(t),!a&&-1<l&&c.splice(l,1),localStorage.setItem(i,c.join(","))};var t=new t;e(d,t)});