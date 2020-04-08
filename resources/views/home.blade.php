<!DOCTYPE html><html lang=zh-cmn-Hans><head><meta charset=utf-8><meta http-equiv=X-UA-Compatible content="IE=edge"><title>Lumina</title><meta name=viewport content="width=device-width,initial-scale=1"><meta name=csrf-token content="{{ csrf_token() }}"><link rel=icon href=/logo.png><style>#loading-mask{position:fixed;left:0;top:0;height:100%;width:100%;background:#fff;user-select:none;z-index:9999;overflow:hidden}.loading-wrapper{position:absolute;top:50%;left:50%;transform:translate(-50%,-100%)}.loading-dot{animation:antRotate 1.2s infinite linear;transform:rotate(45deg);position:relative;display:inline-block;font-size:64px;width:64px;height:64px;box-sizing:border-box}.loading-dot i{width:22px;height:22px;position:absolute;display:block;background-color:#1890ff;border-radius:100%;transform:scale(.75);transform-origin:50% 50%;opacity:.3;animation:antSpinMove 1s infinite linear alternate}.loading-dot i:nth-child(1){top:0;left:0}.loading-dot i:nth-child(2){top:0;right:0;-webkit-animation-delay:.4s;animation-delay:.4s}.loading-dot i:nth-child(3){right:0;bottom:0;-webkit-animation-delay:.8s;animation-delay:.8s}.loading-dot i:nth-child(4){bottom:0;left:0;-webkit-animation-delay:1.2s;animation-delay:1.2s}@keyframes antRotate{to{-webkit-transform:rotate(405deg);transform:rotate(405deg)}}@-webkit-keyframes antRotate{to{-webkit-transform:rotate(405deg);transform:rotate(405deg)}}@keyframes antSpinMove{to{opacity:1}}@-webkit-keyframes antSpinMove{to{opacity:1}}</style><link href=/dist/css/chunk-0703c07a.33da8b38.css rel=prefetch><link href=/dist/css/chunk-0c358e6e.2708afc4.css rel=prefetch><link href=/dist/css/chunk-0d9f224a.b104981c.css rel=prefetch><link href=/dist/css/chunk-0f0995e5.13280b6b.css rel=prefetch><link href=/dist/css/chunk-1f89ac99.4160f644.css rel=prefetch><link href=/dist/css/chunk-2a656dee.1db0e440.css rel=prefetch><link href=/dist/css/chunk-31972db2.ff2de2cd.css rel=prefetch><link href=/dist/css/chunk-3f7ab229.47ff8cec.css rel=prefetch><link href=/dist/css/chunk-4a9950e0.0bcf81fc.css rel=prefetch><link href=/dist/css/chunk-61ae41f4.4b1c1336.css rel=prefetch><link href=/dist/css/chunk-62de63aa.e3ae2261.css rel=prefetch><link href=/dist/css/chunk-654649a6.2f66f4df.css rel=prefetch><link href=/dist/css/chunk-72b3fbea.2c938728.css rel=prefetch><link href=/dist/css/chunk-75c254d2.2f000df6.css rel=prefetch><link href=/dist/css/chunk-7ad735f3.24a9064f.css rel=prefetch><link href=/dist/css/chunk-947baca2.ab834657.css rel=prefetch><link href=/dist/css/chunk-d2934716.f02ba902.css rel=prefetch><link href=/dist/css/chunk-feeebd36.83503da7.css rel=prefetch><link href=/dist/css/user.b44c607f.css rel=prefetch><link href=/dist/js/chunk-0703c07a.9c84a765.js rel=prefetch><link href=/dist/js/chunk-0c358e6e.55bf76ca.js rel=prefetch><link href=/dist/js/chunk-0d9f224a.57cf0a39.js rel=prefetch><link href=/dist/js/chunk-0f0995e5.739473b6.js rel=prefetch><link href=/dist/js/chunk-1f89ac99.d1c2be75.js rel=prefetch><link href=/dist/js/chunk-2a656dee.c500d3cb.js rel=prefetch><link href=/dist/js/chunk-2d0aecfc.5d462646.js rel=prefetch><link href=/dist/js/chunk-2d0cef18.12b5f760.js rel=prefetch><link href=/dist/js/chunk-2d0cfc2a.c338485a.js rel=prefetch><link href=/dist/js/chunk-2d0e4e51.94cf4beb.js rel=prefetch><link href=/dist/js/chunk-2d209ae6.21e67460.js rel=prefetch><link href=/dist/js/chunk-2d231599.f3ce0315.js rel=prefetch><link href=/dist/js/chunk-30929e79.9917d7f8.js rel=prefetch><link href=/dist/js/chunk-31972db2.33ca3239.js rel=prefetch><link href=/dist/js/chunk-3f7ab229.47a7a0c7.js rel=prefetch><link href=/dist/js/chunk-4a9950e0.f208e302.js rel=prefetch><link href=/dist/js/chunk-4aafda52.2d055558.js rel=prefetch><link href=/dist/js/chunk-5856536b.d3a57a37.js rel=prefetch><link href=/dist/js/chunk-61ae41f4.3ba6b59e.js rel=prefetch><link href=/dist/js/chunk-62de63aa.130eca67.js rel=prefetch><link href=/dist/js/chunk-654649a6.3189a467.js rel=prefetch><link href=/dist/js/chunk-72b3fbea.0d1937d1.js rel=prefetch><link href=/dist/js/chunk-7484ed5e.6a8aa717.js rel=prefetch><link href=/dist/js/chunk-75c254d2.35d572ff.js rel=prefetch><link href=/dist/js/chunk-7ad735f3.e97c74bc.js rel=prefetch><link href=/dist/js/chunk-8ced9576.77002668.js rel=prefetch><link href=/dist/js/chunk-947baca2.07064a92.js rel=prefetch><link href=/dist/js/chunk-d2934716.b786418b.js rel=prefetch><link href=/dist/js/chunk-feeebd36.0b43a631.js rel=prefetch><link href=/dist/js/fail.bd042873.js rel=prefetch><link href=/dist/js/lang-pt-BR.7dc2f709.js rel=prefetch><link href=/dist/js/lang-zh-CN.0a0ebf28.js rel=prefetch><link href=/dist/js/lang-zh-TW.91e9d7c6.js rel=prefetch><link href=/dist/js/result.efdca452.js rel=prefetch><link href=/dist/js/user.ab126ce6.js rel=prefetch><link href=/dist/css/app.0b0fc2f0.css rel=preload as=style><link href=/dist/css/chunk-vendors.baa056cf.css rel=preload as=style><link href=/dist/js/app.86cba106.js rel=preload as=script><link href=/dist/js/chunk-vendors.8ba9cfb2.js rel=preload as=script><link href=/dist/css/chunk-vendors.baa056cf.css rel=stylesheet><link href=/dist/css/app.0b0fc2f0.css rel=stylesheet></head><body><noscript><strong>We're sorry but lumina doesn't work properly without JavaScript enabled. Please enable it to continue.</strong></noscript><div id=app><div id=loading-mask><div class=loading-wrapper><span class="loading-dot loading-dot-spin"><i></i><i></i><i></i><i></i></span></div></div></div><script src=/dist/js/chunk-vendors.8ba9cfb2.js></script><script src=/dist/js/app.86cba106.js></script></body></html>