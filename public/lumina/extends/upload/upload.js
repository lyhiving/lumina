"use strict";layui.extend({webuploader:"extends/upload/webuploader/webuploader"}).define(["webuploader","admin"],function(e){function i(e){var i=this;i.uploadObj={},i.uploadFiles=[],i.config=C.extend({},i.config,n.config,e),i.render()}var C=layui.jquery,N=layui.layer,o=layui.admin,S=layui.webuploader,a="upload",n={config:{},set:function(e){var i=this;return i.config=C.extend({},i.config,e),i},on:function(e,i){return layui.onevent.call(this,a,e,i)},open:function(){}};i.prototype.config={fileNumLimit:9,imgVal:".img_val"},i.prototype.render=function(){var a,n=this.config,s=this,t=0,e=['<div class="p-4"><input type="text" placeholder="请输入网络图片地址" id="push_img" class="border w-full h-12 px-4"></div>'].join("");s.$el=C(this),a=N.tab({area:["660px","535px"],skin:"m-upload-dialog layui-layer-tab",tab:[{title:"图片上传",content:'<div id="uploader">                <div class="queueList">                    <div id="dndArea" class="placeholder">                        <div id="filePicker"></div>                        <p>或将照片拖到这里，单次最多可选300张</p>                    </div>                </div>                <div class="statusBar" style="display:none;">                    <div class="progress">                        <span class="text">0%</span>                        <span class="percentage"></span>                    </div><div class="info"></div>                </div>            </div>'},{title:"网络图片",content:e},{title:"相册",content:"内容3"}],btn:["确认使用","取消"],yes:function(i){var e;0==t?s.done(a,i):1==t?(e=C("#push_img").val(),o.request.post(n.url,{type:"fetch",url:e},function(e){s.uploadFiles.push(e.data.url),s.done(a,i)})):2==t&&s.done(a,i)},btn2:function(){return!0},success:function(i){i.find(".layui-layer-title").children().on("mousedown",function(e){t=i.find(".layui-this").index()}),s.uploadFiles=[],s.uploadObj=S.create({pick:{id:"#filePicker",label:"点击选择图片"},auto:!0,dnd:"#dndArea",paste:"#uploader",swf:layui.cache.base+"/extends/upload/webuploader/Uploader.swf",server:n.url,headers:C.extend({"X-CSRF-TOKEN":C('meta[name="csrf-token"]').attr("content"),"X-Requested-With":"XMLHttpRequest"},n.headers),fileNumLimit:9,fileSizeLimit:209715200,fileSingleSizeLimit:52428800,accept:{title:"Images",extensions:"gif,jpg,jpeg,bmp,png",mimeTypes:"image/gif,image/jpg,image/jpeg,image/bmp,image/png"}}),s.events(),s.uploadObj.refresh()}})},i.prototype.events=function(e){function n(){var e,a=0,n=0,i=v.children();C.each(F,function(e,i){n+=i[0],a+=i[0]*i[1]}),e=n?a/n:0,i.eq(0).text(Math.round(100*e)+"%"),i.eq(1).css("width",Math.round(100*e)+"%"),s()}function s(){var e,i="";"ready"===k?i="选中"+h+"张图片，共"+S.formatSize(b)+"。":"confirm"===k?(e=l.getStats()).uploadFailNum&&(i="已成功上传"+e.successNum+"张照片至XX相册，"+e.uploadFailNum+'张照片上传失败，<a class="retry" href="#">重新上传</a>失败图片或<a class="ignore" href="#">忽略</a>'):"error"===k?i='Error: <strong class="text-error">'+d+"</strong>":(e=l.getStats(),i="共"+h+"张（"+S.formatSize(b)+"），已上传"+e.successNum+"张",e.uploadFailNum&&(i+="，失败"+e.uploadFailNum+"张")),f.html(i)}function t(e){var i;if(e!==k){switch(m.removeClass("state-"+k),m.addClass("state-"+e),k=e){case"pedding":g.removeClass("element-invisible"),c.hide(),p.addClass("element-invisible"),l.refresh();break;case"ready":g.addClass("element-invisible"),c.show(),p.removeClass("element-invisible"),l.refresh();break;case"uploading":v.show(),m.text("暂停上传");break;case"paused":v.show(),m.text("继续上传");break;case"confirm":if(v.hide(),m.text("开始上传").addClass("disabled"),i=l.getStats(),!d&&i.successNum&&!i.uploadFailNum)return void t("finish");t("error");break;case"finish":(i=l.getStats()).successNum||(k="done",location.reload())}s()}}function i(a){function n(e){switch(e){case"exceed_size":i="文件大小超出";break;case"interrupt":i="上传暂停";break;default:i="上传失败，请重试"}d.text(i).appendTo(s)}var s=C('<li id="'+a.id+'"><p class="title">'+a.name+'</p><p class="imgWrap"></p><p class="progress"><span></span></p></li>'),i="",t=C('<div class="file-panel"><span class="cancel">删除</span><span class="rotateRight">向右旋转</span><span class="rotateLeft">向左旋转</span></div>').appendTo(s),o=s.find("p.progress span"),r=s.find("p.imgWrap"),d=C('<p class="error"></p>');"invalid"===a.getStatus()?n(a.statusText):(r.text("预览中"),l.makeThumb(a,function(e,i){var a;e?r.text("不能预览"):(a=C('<img src="'+i+'">'),r.empty().append(a))},x,w),F[a.id]=[a.size,0],a.rotation=0),a.on("statuschange",function(e,i){"progress"===i?o.hide().width(0):"queued"===i&&(s.off("mouseenter mouseleave"),t.remove()),"error"===e||"invalid"===e?(n(a.statusText),F[a.id][1]=1):"interrupt"===e?n("interrupt"):"queued"===e?F[a.id][1]=0:"progress"===e?(d.remove(),o.css("display","block")):"complete"===e&&s.append('<span class="success"></span>'),s.removeClass("state-"+i).addClass("state-"+e)}),s.on("mouseenter",function(){t.stop().animate({height:30})}),s.on("mouseleave",function(){t.stop().animate({height:0})}),t.on("click","span",function(){var e;switch(C(this).index()){case 0:return void l.removeFile(a);case 1:a.rotation+=90;break;case 2:a.rotation-=90}T?(e="rotate("+a.rotation+"deg)",r.css({"-webkit-transform":e,"-mos-transform":e,"-o-transform":e,transform:e})):r.css("filter","progid:DXImageTransform.Microsoft.BasicImage(rotation="+~~(a.rotation/90%4+4)%4+")")}),s.appendTo(c)}var a,o,r=this,l=r.uploadObj,d=(r.config,""),u=C("#uploader"),c=C('<ul class="filelist"></ul>').appendTo(u.find(".queueList")),p=u.find(".statusBar"),f=p.find(".info"),m=u.find(".uploadBtn"),g=u.find(".placeholder"),v=p.find(".progress").hide(),h=0,b=0,y=window.devicePixelRatio||1,x=110*y,w=110*y,k="pedding",F={},T=(a="transition"in(o=document.createElement("p").style)||"WebkitTransition"in o||"MozTransition"in o||"msTransition"in o||"OTransition"in o,o=null,a);l.onUploadProgress=function(e,i){C("#"+e.id).find(".progress span").css("width",100*i+"%"),F[e.id][1]=i,n()},l.onFileQueued=function(e){h++,b+=e.size,1===h&&(g.addClass("element-invisible"),p.show()),i(e),t("ready"),n()},l.onFileDequeued=function(e){var i,a;h--,b-=e.size,h||t("pedding"),a=C("#"+(i=e).id),delete F[i.id],n(),a.off().find(".file-panel").off().end().remove(),n()},l.onUploadSuccess=function(e,i){0==i.errcode?r.uploadFiles.push(i.data.url):(t("error"),d=i.msg||"未知错误",r.uploadFailNum+=1)},l.onUploadError=function(e){var i=C("#"+e.id),a=i.find("div.error");a.length||(a=C('<div class="error"></div>').appendTo(i)),a.text("上传失败")},l.on("all",function(e){switch(e){case"uploadFinished":t("confirm");break;case"startUpload":t("uploading");break;case"stopUpload":t("paused")}}),l.onError=function(e){N.msg("Eroor: "+e)},m.on("click",function(){return!C(this).hasClass("disabled")&&void("ready"===k||"paused"===k?l.upload():"uploading"===k&&l.stop())}),f.on("click",".retry",function(){l.retry()}),f.on("click",".ignore",function(){alert("todo")}),m.addClass("state-"+k),n()},i.prototype.done=function(e,i){var a=this;a.uploadFiles.length<1?N.msg("请选择图片",{icon:5}):(N.close(e),a.$el.next(a.config.imgVal).val(a.uploadFiles[0]),"function"==typeof a.config.done&&a.config.done(a.uploadFiles,a.$el))},n.render=function(e){return new i(e)},e(a,n)});