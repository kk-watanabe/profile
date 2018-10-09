"use strict"

/*! modernizr 3.5.0 (Custom Build) | MIT *
 * https://modernizr.com/download/?-canvas-csscalc-csscolumns-cssfilters-cssgrid_cssgridlegacy-csstransforms-csstransforms3d-csstransformslevel2-csstransitions-cssvminunit-cssvwunit-flexbox-flexboxtweener-flexwrap-inlinesvg-preserve3d-scriptasync-scriptdefer-svg-svgasimg-svgclippaths-svgfilters-svgforeignobject-video-webgl-willchange-wrapflow-setclasses !*/
!function(e,t,n){function r(e,t){return typeof e===t}function s(){var e,t,n,s,i,o,a;for(var l in T)if(T.hasOwnProperty(l)){if(e=[],t=T[l],t.name&&(e.push(t.name.toLowerCase()),t.options&&t.options.aliases&&t.options.aliases.length))for(n=0;n<t.options.aliases.length;n++)e.push(t.options.aliases[n].toLowerCase());for(s=r(t.fn,"function")?t.fn():t.fn,i=0;i<e.length;i++)o=e[i],a=o.split("."),1===a.length?Modernizr[a[0]]=s:(!Modernizr[a[0]]||Modernizr[a[0]]instanceof Boolean||(Modernizr[a[0]]=new Boolean(Modernizr[a[0]])),Modernizr[a[0]][a[1]]=s),C.push((s?"":"no-")+a.join("-"))}}function i(e){var t=b.className,n=Modernizr._config.classPrefix||"";if(_&&(t=t.baseVal),Modernizr._config.enableJSClass){var r=new RegExp("(^|\\s)"+n+"no-js(\\s|$)");t=t.replace(r,"$1"+n+"js$2")}Modernizr._config.enableClasses&&(t+=" "+n+e.join(" "+n),_?b.className.baseVal=t:b.className=t)}function o(){return"function"!=typeof t.createElement?t.createElement(arguments[0]):_?t.createElementNS.call(t,"http://www.w3.org/2000/svg",arguments[0]):t.createElement.apply(t,arguments)}function a(e,t){return e-1===t||e===t||e+1===t}function l(t,n,r){var s;if("getComputedStyle"in e){s=getComputedStyle.call(e,t,n);var i=e.console;if(null!==s)r&&(s=s.getPropertyValue(r));else if(i){var o=i.error?"error":"log";i[o].call(i,"getComputedStyle returning null, its possible modernizr test results are inaccurate")}}else s=!n&&t.currentStyle&&t.currentStyle[r];return s}function d(e){return e.replace(/([a-z])-([a-z])/g,function(e,t,n){return t+n.toUpperCase()}).replace(/^-/,"")}function c(e,t){if("object"==typeof e)for(var n in e)N(e,n)&&c(n,e[n]);else{e=e.toLowerCase();var r=e.split("."),s=Modernizr[r[0]];if(2==r.length&&(s=s[r[1]]),"undefined"!=typeof s)return Modernizr;t="function"==typeof t?t():t,1==r.length?Modernizr[r[0]]=t:(!Modernizr[r[0]]||Modernizr[r[0]]instanceof Boolean||(Modernizr[r[0]]=new Boolean(Modernizr[r[0]])),Modernizr[r[0]][r[1]]=t),i([(t&&0!=t?"":"no-")+r.join("-")]),Modernizr._trigger(e,t)}return Modernizr}function f(){var e=t.body;return e||(e=o(_?"svg":"body"),e.fake=!0),e}function u(e,n,r,s){var i,a,l,d,c="modernizr",u=o("div"),p=f();if(parseInt(r,10))for(;r--;)l=o("div"),l.id=s?s[r]:c+(r+1),u.appendChild(l);return i=o("style"),i.type="text/css",i.id="s"+c,(p.fake?p:u).appendChild(i),p.appendChild(u),i.styleSheet?i.styleSheet.cssText=e:i.appendChild(t.createTextNode(e)),u.id=c,p.fake&&(p.style.background="",p.style.overflow="hidden",d=b.style.overflow,b.style.overflow="hidden",b.appendChild(p)),a=n(u,e),p.fake?(p.parentNode.removeChild(p),b.style.overflow=d,b.offsetHeight):u.parentNode.removeChild(u),!!a}function p(e,t){return!!~(""+e).indexOf(t)}function h(e,t){return function(){return e.apply(t,arguments)}}function v(e,t,n){var s;for(var i in e)if(e[i]in t)return n===!1?e[i]:(s=t[e[i]],r(s,"function")?h(s,n||t):s);return!1}function g(e){return e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-")}function m(t,r){var s=t.length;if("CSS"in e&&"supports"in e.CSS){for(;s--;)if(e.CSS.supports(g(t[s]),r))return!0;return!1}if("CSSSupportsRule"in e){for(var i=[];s--;)i.push("("+g(t[s])+":"+r+")");return i=i.join(" or "),u("@supports ("+i+") 	{ #modernizr { position: absolute; } }",function(e){return"absolute"==l(e,null,"position")})}return n}function w(e,t,s,i){function a(){c&&(delete V.style,delete V.modElem)}if(i=r(i,"undefined")?!1:i,!r(s,"undefined")){var l=m(e,s);if(!r(l,"undefined"))return l}for(var c,f,u,h,v,g=["modernizr","tspan","samp"];!V.style&&g.length;)c=!0,V.modElem=o(g.shift()),V.style=V.modElem.style;for(u=e.length,f=0;u>f;f++)if(h=e[f],v=V.style[h],p(h,"-")&&(h=d(h)),V.style[h]!==n){if(i||r(s,"undefined"))return a(),"pfx"==t?h:!0;try{V.style[h]=s}catch(w){}if(V.style[h]!=v)return a(),"pfx"==t?h:!0}return a(),!1}function y(e,t,n,s,i){var o=e.charAt(0).toUpperCase()+e.slice(1),a=(e+" "+j.join(o+" ")+o).split(" ");return r(t,"string")||r(t,"undefined")?w(a,t,s,i):(a=(e+" "+O.join(o+" ")+o).split(" "),v(a,t,n))}function x(e,t,r){return y(e,n,n,t,r)}var C=[],T=[],S={_version:"3.5.0",_config:{classPrefix:"",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,t){var n=this;setTimeout(function(){t(n[e])},0)},addTest:function(e,t,n){T.push({name:e,fn:t,options:n})},addAsyncTest:function(e){T.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=S,Modernizr=new Modernizr,Modernizr.addTest("svg",!!t.createElementNS&&!!t.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect),Modernizr.addTest("svgfilters",function(){var t=!1;try{t="SVGFEColorMatrixElement"in e&&2==SVGFEColorMatrixElement.SVG_FECOLORMATRIX_TYPE_SATURATE}catch(n){}return t});var b=t.documentElement;Modernizr.addTest("willchange","willChange"in b.style);var _="svg"===b.nodeName.toLowerCase();Modernizr.addTest("canvas",function(){var e=o("canvas");return!(!e.getContext||!e.getContext("2d"))}),Modernizr.addTest("webgl",function(){var t=o("canvas"),n="probablySupportsContext"in t?"probablySupportsContext":"supportsContext";return n in t?t[n]("webgl")||t[n]("experimental-webgl"):"WebGLRenderingContext"in e}),Modernizr.addTest("preserve3d",function(){var t,n,r=e.CSS,s=!1;return r&&r.supports&&r.supports("(transform-style: preserve-3d)")?!0:(t=o("a"),n=o("a"),t.style.cssText="display: block; transform-style: preserve-3d; transform-origin: right; transform: rotateY(40deg);",n.style.cssText="display: block; width: 9px; height: 1px; background: #000; transform-origin: right; transform: rotateY(40deg);",t.appendChild(n),b.appendChild(t),s=n.getBoundingClientRect(),b.removeChild(t),s=s.width&&s.width<4)}),Modernizr.addTest("scriptasync","async"in o("script")),Modernizr.addTest("scriptdefer","defer"in o("script")),Modernizr.addTest("inlinesvg",function(){var e=o("div");return e.innerHTML="<svg/>","http://www.w3.org/2000/svg"==("undefined"!=typeof SVGRect&&e.firstChild&&e.firstChild.namespaceURI)});var E=S._config.usePrefixes?" -webkit- -moz- -o- -ms- ".split(" "):["",""];S._prefixes=E,Modernizr.addTest("csscalc",function(){var e="width:",t="calc(10px);",n=o("a");return n.style.cssText=e+E.join(t+e),!!n.style.length});var P="CSS"in e&&"supports"in e.CSS,R="supportsCSS"in e;Modernizr.addTest("supports",P||R);var k={}.toString;Modernizr.addTest("svgclippaths",function(){return!!t.createElementNS&&/SVGClipPath/.test(k.call(t.createElementNS("http://www.w3.org/2000/svg","clipPath")))}),Modernizr.addTest("svgforeignobject",function(){return!!t.createElementNS&&/SVGForeignObject/.test(k.call(t.createElementNS("http://www.w3.org/2000/svg","foreignObject")))});var N;!function(){var e={}.hasOwnProperty;N=r(e,"undefined")||r(e.call,"undefined")?function(e,t){return t in e&&r(e.constructor.prototype[t],"undefined")}:function(t,n){return e.call(t,n)}}(),S._l={},S.on=function(e,t){this._l[e]||(this._l[e]=[]),this._l[e].push(t),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},S._trigger=function(e,t){if(this._l[e]){var n=this._l[e];setTimeout(function(){var e,r;for(e=0;e<n.length;e++)(r=n[e])(t)},0),delete this._l[e]}},Modernizr._q.push(function(){S.addTest=c}),Modernizr.addTest("svgasimg",t.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1"));var z=S.testStyles=u;z("#modernizr1{width: 50vm;width:50vmin}#modernizr2{width:50px;height:50px;overflow:scroll}#modernizr3{position:fixed;top:0;left:0;bottom:0;right:0}",function(e){var t=e.childNodes[2],n=e.childNodes[1],r=e.childNodes[0],s=parseInt((n.offsetWidth-n.clientWidth)/2,10),i=r.clientWidth/100,o=r.clientHeight/100,d=parseInt(50*Math.min(i,o),10),c=parseInt(l(t,null,"width"),10);Modernizr.addTest("cssvminunit",a(d,c)||a(d,c-s))},3),z("#modernizr { width: 50vw; }",function(t){var n=parseInt(e.innerWidth/2,10),r=parseInt(l(t,null,"width"),10);Modernizr.addTest("cssvwunit",r==n)});var L="Moz O ms Webkit",j=S._config.usePrefixes?L.split(" "):[];S._cssomPrefixes=j;var A=function(t){var r,s=E.length,i=e.CSSRule;if("undefined"==typeof i)return n;if(!t)return!1;if(t=t.replace(/^@/,""),r=t.replace(/-/g,"_").toUpperCase()+"_RULE",r in i)return"@"+t;for(var o=0;s>o;o++){var a=E[o],l=a.toUpperCase()+"_"+r;if(l in i)return"@-"+a.toLowerCase()+"-"+t}return!1};S.atRule=A;var O=S._config.usePrefixes?L.toLowerCase().split(" "):[];S._domPrefixes=O;var B={elem:o("modernizr")};Modernizr._q.push(function(){delete B.elem});var V={style:B.elem.style};Modernizr._q.unshift(function(){delete V.style}),S.testAllProps=y,S.testAllProps=x,function(){Modernizr.addTest("csscolumns",function(){var e=!1,t=x("columnCount");try{e=!!t,e&&(e=new Boolean(e))}catch(n){}return e});for(var e,t,n=["Width","Span","Fill","Gap","Rule","RuleColor","RuleStyle","RuleWidth","BreakBefore","BreakAfter","BreakInside"],r=0;r<n.length;r++)e=n[r].toLowerCase(),t=x("column"+n[r]),("breakbefore"===e||"breakafter"===e||"breakinside"==e)&&(t=t||x(n[r])),Modernizr.addTest("csscolumns."+e,t)}(),Modernizr.addTest("cssgridlegacy",x("grid-columns","10px",!0)),Modernizr.addTest("cssgrid",x("grid-template-rows","none",!0)),Modernizr.addTest("cssfilters",function(){if(Modernizr.supports)return x("filter","blur(2px)");var e=o("a");return e.style.cssText=E.join("filter:blur(2px); "),!!e.style.length&&(t.documentMode===n||t.documentMode>9)}),Modernizr.addTest("flexbox",x("flexBasis","1px",!0)),Modernizr.addTest("flexboxtweener",x("flexAlign","end",!0)),Modernizr.addTest("flexwrap",x("flexWrap","wrap",!0)),Modernizr.addTest("csstransforms",function(){return-1===navigator.userAgent.indexOf("Android 2.")&&x("transform","scale(1)",!0)}),Modernizr.addTest("csstransforms3d",function(){var e=!!x("perspective","1px",!0),t=Modernizr._config.usePrefixes;if(e&&(!t||"webkitPerspective"in b.style)){var n,r="#modernizr{width:0;height:0}";Modernizr.supports?n="@supports (perspective: 1px)":(n="@media (transform-3d)",t&&(n+=",(-webkit-transform-3d)")),n+="{#modernizr{width:7px;height:18px;margin:0;padding:0;border:0}}",z(r+n,function(t){e=7===t.offsetWidth&&18===t.offsetHeight})}return e}),Modernizr.addTest("csstransformslevel2",function(){return x("translate","45px",!0)}),Modernizr.addTest("csstransitions",x("transition","all",!0));var I=S.prefixed=function(e,t,n){return 0===e.indexOf("@")?A(e):(-1!=e.indexOf("-")&&(e=d(e)),t?y(e,t,n):y(e,"pfx"))};Modernizr.addTest("wrapflow",function(){var e=I("wrapFlow");if(!e||_)return!1;var t=e.replace(/([A-Z])/g,function(e,t){return"-"+t.toLowerCase()}).replace(/^ms-/,"-ms-"),r=o("div"),s=o("div"),i=o("span");s.style.cssText="position: absolute; left: 50px; width: 100px; height: 20px;"+t+":end;",i.innerText="X",r.appendChild(s),r.appendChild(i),b.appendChild(r);var a=i.offsetLeft;return b.removeChild(r),s=i=r=n,150==a}),Modernizr.addTest("video",function(){var e=o("video"),t=!1;try{t=!!e.canPlayType,t&&(t=new Boolean(t),t.ogg=e.canPlayType('video/ogg; codecs="theora"').replace(/^no$/,""),t.h264=e.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/,""),t.webm=e.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/,""),t.vp9=e.canPlayType('video/webm; codecs="vp9"').replace(/^no$/,""),t.hls=e.canPlayType('application/x-mpegURL; codecs="avc1.42E01E"').replace(/^no$/,""))}catch(n){}return t}),s(),i(C),delete S.addTest,delete S.addAsyncTest;for(var G=0;G<Modernizr._q.length;G++)Modernizr._q[G]();e.Modernizr=Modernizr}(window,document);

/*
 * Inline Form Validation Engine 2.6.2, jQuery plugin
 *
 * Copyright(c) 2010, Cedric Dugas
 * http://www.position-absolute.com
 *
 * 2.0 Rewrite by Olivier Refalo
 * http://www.crionics.com
 *
 * Form validation engine allowing custom regex rules to be added.
 * Licensed under the MIT License
 */
(function(g){var e={init:function(a){this.data("jqv")&&null!=this.data("jqv")||(a=e._saveOptions(this,a),g(document).on("click",".formError",function(){g(this).fadeOut(150,function(){g(this).closest(".formError").remove()})}));return this},attach:function(a){a=a?e._saveOptions(this,a):this.data("jqv");a.validateAttribute=this.find("[data-validation-engine*=validate]").length?"data-validation-engine":"class";a.binded&&(this.on(a.validationEventTrigger,"["+a.validateAttribute+"*=validate]:not([type=checkbox]):not([type=radio]):not(.datepicker)",
e._onFieldEvent),this.on("click","["+a.validateAttribute+"*=validate][type=checkbox],["+a.validateAttribute+"*=validate][type=radio]",e._onFieldEvent),this.on(a.validationEventTrigger,"["+a.validateAttribute+"*=validate][class*=datepicker]",{delay:300},e._onFieldEvent));a.autoPositionUpdate&&g(window).bind("resize",{noAnimation:!0,formElem:this},e.updatePromptsPosition);this.on("click","a[data-validation-engine-skip], a[class*='validate-skip'], button[data-validation-engine-skip], button[class*='validate-skip'], input[data-validation-engine-skip], input[class*='validate-skip']",
e._submitButtonClick);this.removeData("jqv_submitButton");this.on("submit",e._onSubmitEvent);return this},detach:function(){var a=this.data("jqv");this.off(a.validationEventTrigger,"["+a.validateAttribute+"*=validate]:not([type=checkbox]):not([type=radio]):not(.datepicker)",e._onFieldEvent);this.off("click","["+a.validateAttribute+"*=validate][type=checkbox],["+a.validateAttribute+"*=validate][type=radio]",e._onFieldEvent);this.off(a.validationEventTrigger,"["+a.validateAttribute+"*=validate][class*=datepicker]",
e._onFieldEvent);this.off("submit",e._onSubmitEvent);this.removeData("jqv");this.off("click","a[data-validation-engine-skip], a[class*='validate-skip'], button[data-validation-engine-skip], button[class*='validate-skip'], input[data-validation-engine-skip], input[class*='validate-skip']",e._submitButtonClick);this.removeData("jqv_submitButton");a.autoPositionUpdate&&g(window).off("resize",e.updatePromptsPosition);return this},validate:function(a){var b=g(this),d=null;if(b.is("form")||b.hasClass("validationEngineContainer")){if(b.hasClass("validating"))return!1;
b.addClass("validating");var c=a?e._saveOptions(b,a):b.data("jqv");d=e._validateFields(this);setTimeout(function(){b.removeClass("validating")},100);if(d&&c.onSuccess)c.onSuccess();else if(!d&&c.onFailure)c.onFailure()}else if(b.is("form")||b.hasClass("validationEngineContainer"))b.removeClass("validating");else{var k=b.closest("form, .validationEngineContainer");c=k.data("jqv")?k.data("jqv"):g.validationEngine.defaults;if((d=e._validateField(b,c))&&c.onFieldSuccess)c.onFieldSuccess();else if(c.onFieldFailure&&
0<c.InvalidFields.length)c.onFieldFailure();return!d}return c.onValidationComplete?!!c.onValidationComplete(k,d):d},updatePromptsPosition:function(a){if(a&&this==window)var b=a.data.formElem,d=a.data.noAnimation;else b=g(this.closest("form, .validationEngineContainer"));var c=b.data("jqv");c||(c=e._saveOptions(b,c));b.find("["+c.validateAttribute+"*=validate]").not(":disabled").each(function(){var a=g(this);c.prettySelect&&a.is(":hidden")&&(a=b.find("#"+c.usePrefix+a.attr("id")+c.useSuffix));var f=
e._getPrompt(a),l=g(f).find(".formErrorContent").html();f&&e._updatePrompt(a,g(f),l,void 0,!1,c,d)});return this},showPrompt:function(a,b,d,c){var k=this.closest("form, .validationEngineContainer").data("jqv");k||(k=e._saveOptions(this,k));d&&(k.promptPosition=d);k.showArrow=1==c;e._showPrompt(this,a,b,!1,k);return this},hide:function(){var a=g(this).closest("form, .validationEngineContainer"),b=a.data("jqv");b||(b=e._saveOptions(a,b));b=b&&b.fadeDuration?b.fadeDuration:.3;a=a.is("form")||a.hasClass("validationEngineContainer")?
"parentForm"+e._getClassName(g(a).attr("id")):e._getClassName(g(a).attr("id"))+"formError";g("."+a).fadeTo(b,0,function(){g(this).closest(".formError").remove()});return this},hideAll:function(){var a=this.data("jqv");a=a?a.fadeDuration:300;g(".formError").fadeTo(a,0,function(){g(this).closest(".formError").remove()});return this},_onFieldEvent:function(a){var b=g(this),d=b.closest("form, .validationEngineContainer"),c=d.data("jqv");c||(c=e._saveOptions(d,c));c.eventTrigger="field";1==c.notEmpty?
0<b.val().length&&window.setTimeout(function(){e._validateField(b,c)},a.data?a.data.delay:0):window.setTimeout(function(){e._validateField(b,c)},a.data?a.data.delay:0)},_onSubmitEvent:function(){var a=g(this),b=a.data("jqv");if(a.data("jqv_submitButton")){var d=g("#"+a.data("jqv_submitButton"));if(d&&0<d.length&&(d.hasClass("validate-skip")||"true"==d.attr("data-validation-engine-skip")))return!0}b.eventTrigger="submit";return(d=e._validateFields(a))&&b.ajaxFormValidation?(e._validateFormWithAjax(a,
b),!1):b.onValidationComplete?!!b.onValidationComplete(a,d):d},_checkAjaxStatus:function(a){var b=!0;g.each(a.ajaxValidCache,function(a,c){if(!c)return b=!1});return b},_checkAjaxFieldStatus:function(a,b){return 1==b.ajaxValidCache[a]},_validateFields:function(a){var b=a.data("jqv"),d=!1;a.trigger("jqv.form.validating");var c=null;a.find("["+b.validateAttribute+"*=validate]").not(":disabled").each(function(){var f=g(this),k=[];if(0>g.inArray(f.attr("name"),k)){(d|=e._validateField(f,b))&&null==c&&
(f.is(":hidden")&&b.prettySelect?c=f=a.find("#"+b.usePrefix+e._jqSelector(f.attr("id"))+b.useSuffix):(f.data("jqv-prompt-at")instanceof jQuery?f=f.data("jqv-prompt-at"):f.data("jqv-prompt-at")&&(f=g(f.data("jqv-prompt-at"))),c=f));if(b.doNotShowAllErrosOnSubmit)return!1;k.push(f.attr("name"));if(1==b.showOneMessage&&d)return!1}});a.trigger("jqv.form.result",[d]);if(d){if(b.scroll){var k=c.offset().top,f=c.offset().left,l=b.promptPosition;"string"==typeof l&&-1!=l.indexOf(":")&&(l=l.substring(0,l.indexOf(":")));
"bottomRight"!=l&&"bottomLeft"!=l&&(l=e._getPrompt(c))&&(k=l.offset().top);b.scrollOffset&&(k-=b.scrollOffset);if(b.isOverflown){l=g(b.overflownDIV);if(!l.length)return!1;f=l.scrollTop();l=-parseInt(l.offset().top);k+=f+l-5;g(b.overflownDIV).filter(":not(:animated)").animate({scrollTop:k},1100,function(){b.focusFirstField&&c.focus()})}else g("html, body").animate({scrollTop:k},1100,function(){b.focusFirstField&&c.focus()}),g("html, body").animate({scrollLeft:f},1100)}else b.focusFirstField&&c.focus();
return!1}return!0},_validateFormWithAjax:function(a,b){var d=a.serialize(),c=b.ajaxFormValidationMethod?b.ajaxFormValidationMethod:"GET",k=b.ajaxFormValidationURL?b.ajaxFormValidationURL:a.attr("action"),f=b.dataType?b.dataType:"json";g.ajax({type:c,url:k,cache:!1,dataType:f,data:d,form:a,methods:e,options:b,beforeSend:function(){return b.onBeforeAjaxFormValidation(a,b)},error:function(a,c){if(b.onFailure)b.onFailure(a,c);else e._ajaxError(a,c)},success:function(c){if("json"==f&&!0!==c){for(var d=
!1,k=0;k<c.length;k++){var l=c[k],m=g(g("#"+l[0])[0]);if(1==m.length){var h=l[2];1==l[1]?""!=h&&h?(b.allrules[h]&&(l=b.allrules[h].alertTextOk)&&(h=l),b.showPrompts&&e._showPrompt(m,h,"pass",!1,b,!0)):e._closePrompt(m):(d|=1,b.allrules[h]&&(l=b.allrules[h].alertText)&&(h=l),b.showPrompts&&e._showPrompt(m,h,"",!1,b,!0))}}b.onAjaxFormComplete(!d,a,c,b)}else b.onAjaxFormComplete(!0,a,c,b)}})},_validateField:function(a,b,d){a.attr("id")||(a.attr("id","form-validation-field-"+g.validationEngine.fieldIdCounter),
++g.validationEngine.fieldIdCounter);if(a.hasClass(b.ignoreFieldsWithClass)||!b.validateNonVisibleFields&&(a.is(":hidden")&&!b.prettySelect||a.parent().is(":hidden")))return!1;var c=a.attr(b.validateAttribute);c=/validate\[(.*)\]/.exec(c);if(!c)return!1;var k=c[1],f=k.split(/\[|,|\]/);c=a.attr("name");var l="",p="",q=!1,t=!1;b.isError=!1;b.showArrow=1==b.showArrow;0<b.maxErrorsPerField&&(t=!0);for(var m=g(a.closest("form, .validationEngineContainer")),h=0;h<f.length;h++)f[h]=f[h].toString().replace(" ",
""),""===f[h]&&delete f[h];for(var u=h=0;h<f.length;h++){if(t&&u>=b.maxErrorsPerField){q||(d=g.inArray("required",f),q=-1!=d&&d>=h);break}var n=void 0;switch(f[h]){case "required":q=!0;n=e._getErrorMessage(m,a,f[h],f,h,b,e._required);break;case "custom":n=e._getErrorMessage(m,a,f[h],f,h,b,e._custom);break;case "groupRequired":var r="["+b.validateAttribute+"*="+f[h+1]+"]";n=m.find(r).eq(0);n[0]!=a[0]&&(e._validateField(n,b,d),b.showArrow=!0);(n=e._getErrorMessage(m,a,f[h],f,h,b,e._groupRequired))&&
(q=!0);b.showArrow=!1;break;case "ajax":(n=e._ajax(a,f,h,b))&&(p="load");break;case "minSize":n=e._getErrorMessage(m,a,f[h],f,h,b,e._minSize);break;case "maxSize":n=e._getErrorMessage(m,a,f[h],f,h,b,e._maxSize);break;case "min":n=e._getErrorMessage(m,a,f[h],f,h,b,e._min);break;case "max":n=e._getErrorMessage(m,a,f[h],f,h,b,e._max);break;case "past":n=e._getErrorMessage(m,a,f[h],f,h,b,e._past);break;case "future":n=e._getErrorMessage(m,a,f[h],f,h,b,e._future);break;case "dateRange":r="["+b.validateAttribute+
"*="+f[h+1]+"]";b.firstOfGroup=m.find(r).eq(0);b.secondOfGroup=m.find(r).eq(1);if(b.firstOfGroup[0].value||b.secondOfGroup[0].value)n=e._getErrorMessage(m,a,f[h],f,h,b,e._dateRange);n&&(q=!0);b.showArrow=!1;break;case "dateTimeRange":r="["+b.validateAttribute+"*="+f[h+1]+"]";b.firstOfGroup=m.find(r).eq(0);b.secondOfGroup=m.find(r).eq(1);if(b.firstOfGroup[0].value||b.secondOfGroup[0].value)n=e._getErrorMessage(m,a,f[h],f,h,b,e._dateTimeRange);n&&(q=!0);b.showArrow=!1;break;case "maxCheckbox":a=g(m.find("input[name='"+
c+"']"));n=e._getErrorMessage(m,a,f[h],f,h,b,e._maxCheckbox);break;case "minCheckbox":a=g(m.find("input[name='"+c+"']"));n=e._getErrorMessage(m,a,f[h],f,h,b,e._minCheckbox);break;case "equals":n=e._getErrorMessage(m,a,f[h],f,h,b,e._equals);break;case "funcCall":n=e._getErrorMessage(m,a,f[h],f,h,b,e._funcCall);break;case "creditCard":n=e._getErrorMessage(m,a,f[h],f,h,b,e._creditCard);break;case "condRequired":n=e._getErrorMessage(m,a,f[h],f,h,b,e._condRequired);void 0!==n&&(q=!0);break;case "funcCallRequired":n=
e._getErrorMessage(m,a,f[h],f,h,b,e._funcCallRequired),void 0!==n&&(q=!0)}r=!1;if("object"==typeof n)switch(n.status){case "_break":r=!0;break;case "_error":n=n.message;break;case "_error_no_prompt":return!0}0==h&&0==k.indexOf("funcCallRequired")&&void 0!==n&&(""!=l&&(l+="<br/>"),l+=n,b.isError=!0,u++,r=!0);if(r)break;"string"==typeof n&&(""!=l&&(l+="<br/>"),l+=n,b.isError=!0,u++)}!q&&!a.val()&&1>a.val().length&&0>g.inArray("equals",f)&&(b.isError=!1);d=a.prop("type");f=a.data("promptPosition")||
b.promptPosition;("radio"==d||"checkbox"==d)&&1<m.find("input[name='"+c+"']").length&&(a="inline"===f?g(m.find("input[name='"+c+"'][type!=hidden]:last")):g(m.find("input[name='"+c+"'][type!=hidden]:first")),b.showArrow=b.showArrowOnRadioAndCheckbox);a.is(":hidden")&&b.prettySelect&&(a=m.find("#"+b.usePrefix+e._jqSelector(a.attr("id"))+b.useSuffix));b.isError&&b.showPrompts?e._showPrompt(a,l,p,!1,b):e._closePrompt(a);a.trigger("jqv.field.result",[a,b.isError,l]);c=g.inArray(a[0],b.InvalidFields);-1==
c?b.isError&&b.InvalidFields.push(a[0]):b.isError||b.InvalidFields.splice(c,1);e._handleStatusCssClasses(a,b);if(b.isError&&b.onFieldFailure)b.onFieldFailure(a);if(!b.isError&&b.onFieldSuccess)b.onFieldSuccess(a);return b.isError},_handleStatusCssClasses:function(a,b){b.addSuccessCssClassToField&&a.removeClass(b.addSuccessCssClassToField);b.addFailureCssClassToField&&a.removeClass(b.addFailureCssClassToField);b.addSuccessCssClassToField&&!b.isError&&a.addClass(b.addSuccessCssClassToField);b.addFailureCssClassToField&&
b.isError&&a.addClass(b.addFailureCssClassToField)},_getErrorMessage:function(a,b,d,c,k,f,l){var p=jQuery.inArray(d,c);if("custom"===d||"funcCall"===d||"funcCallRequired"===d)d=d+"["+c[p+1]+"]",delete c[p];p=d;var q=(b.attr("data-validation-engine")?b.attr("data-validation-engine"):b.attr("class")).split(" ");a="future"==d||"past"==d||"maxCheckbox"==d||"minCheckbox"==d?l(a,b,c,k,f):l(b,c,k,f);void 0!=a&&(b=e._getCustomErrorMessage(g(b),q,p,f))&&(a=b);return a},_getCustomErrorMessage:function(a,b,
d,c){var k=/^custom\[.*\]$/.test(d)?e._validityProp.custom:e._validityProp[d];if(void 0!=k&&(k=a.attr("data-errormessage-"+k),void 0!=k))return k;k=a.attr("data-errormessage");if(void 0!=k)return k;a="#"+a.attr("id");if("undefined"!=typeof c.custom_error_messages[a]&&"undefined"!=typeof c.custom_error_messages[a][d])k=c.custom_error_messages[a][d].message;else if(0<b.length)for(a=0;a<b.length&&0<b.length;a++){var f="."+b[a];if("undefined"!=typeof c.custom_error_messages[f]&&"undefined"!=typeof c.custom_error_messages[f][d]){k=
c.custom_error_messages[f][d].message;break}}k||"undefined"==typeof c.custom_error_messages[d]||"undefined"==typeof c.custom_error_messages[d].message||(k=c.custom_error_messages[d].message);return k},_validityProp:{required:"value-missing",custom:"custom-error",groupRequired:"value-missing",ajax:"custom-error",minSize:"range-underflow",maxSize:"range-overflow",min:"range-underflow",max:"range-overflow",past:"type-mismatch",future:"type-mismatch",dateRange:"type-mismatch",dateTimeRange:"type-mismatch",
maxCheckbox:"range-overflow",minCheckbox:"range-underflow",equals:"pattern-mismatch",funcCall:"custom-error",funcCallRequired:"custom-error",creditCard:"pattern-mismatch",condRequired:"value-missing"},_required:function(a,b,d,c,e){switch(a.prop("type")){case "radio":case "checkbox":if(e){if(!a.prop("checked"))return c.allrules[b[d]].alertTextCheckboxMultiple;break}e=a.closest("form, .validationEngineContainer");a=a.attr("name");if(0==e.find("input[name='"+a+"']:checked").length)return 1==e.find("input[name='"+
a+"']:visible").length?c.allrules[b[d]].alertTextCheckboxe:c.allrules[b[d]].alertTextCheckboxMultiple;break;default:e=g.trim(a.val());var f=g.trim(a.attr("data-validation-placeholder"));a=g.trim(a.attr("placeholder"));if(!e||f&&e==f||a&&e==a)return c.allrules[b[d]].alertText}},_groupRequired:function(a,b,d,c){var k="["+c.validateAttribute+"*="+b[d+1]+"]",f=!1;a.closest("form, .validationEngineContainer").find(k).each(function(){if(!e._required(g(this),b,d,c))return f=!0,!1});if(!f)return c.allrules[b[d]].alertText},
_custom:function(a,b,d,c){var e=b[d+1],f=c.allrules[e];if(f)if(f.regex)if(b=f.regex,!b)alert("jqv:custom regex not found - "+e);else{if(!(new RegExp(b)).test(a.val()))return c.allrules[e].alertText}else if(f.func)if(f=f.func,"function"!==typeof f)alert("jqv:custom parameter 'function' is no function - "+e);else{if(!f(a,b,d,c))return c.allrules[e].alertText}else alert("jqv:custom type not allowed "+e);else alert("jqv:custom rule not found - "+e)},_funcCall:function(a,b,d,c){var e=b[d+1];if(-1<e.indexOf(".")){e=
e.split(".");for(var f=window;e.length;)f=f[e.shift()];e=f}else e=window[e]||c.customFunctions[e];if("function"==typeof e)return e(a,b,d,c)},_funcCallRequired:function(a,b,d,c){return e._funcCall(a,b,d,c)},_equals:function(a,b,d,c){b=b[d+1];if(a.val()!=g("#"+b).val())return c.allrules.equals.alertText},_maxSize:function(a,b,d,c){b=b[d+1];if(a.val().length>b)return a=c.allrules.maxSize,a.alertText+b+a.alertText2},_minSize:function(a,b,d,c){b=b[d+1];if(a.val().length<b)return a=c.allrules.minSize,a.alertText+
b+a.alertText2},_min:function(a,b,d,c){b=parseFloat(b[d+1]);if(parseFloat(a.val())<b)return a=c.allrules.min,a.alertText2?a.alertText+b+a.alertText2:a.alertText+b},_max:function(a,b,d,c){b=parseFloat(b[d+1]);if(parseFloat(a.val())>b)return a=c.allrules.max,a.alertText2?a.alertText+b+a.alertText2:a.alertText+b},_past:function(a,b,d,c,k){d=d[c+1];a=g(a.find("*[name='"+d.replace(/^#+/,"")+"']"));if("now"==d.toLowerCase())a=new Date;else if(void 0!=a.val()){if(a.is(":disabled"))return;a=e._parseDate(a.val())}else a=
e._parseDate(d);if(e._parseDate(b.val())>a)return b=k.allrules.past,b.alertText2?b.alertText+e._dateToString(a)+b.alertText2:b.alertText+e._dateToString(a)},_future:function(a,b,d,c,k){d=d[c+1];a=g(a.find("*[name='"+d.replace(/^#+/,"")+"']"));if("now"==d.toLowerCase())a=new Date;else if(void 0!=a.val()){if(a.is(":disabled"))return;a=e._parseDate(a.val())}else a=e._parseDate(d);if(e._parseDate(b.val())<a)return b=k.allrules.future,b.alertText2?b.alertText+e._dateToString(a)+b.alertText2:b.alertText+
e._dateToString(a)},_isDate:function(a){return(new RegExp(/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$|^(?:(?:(?:0?[13578]|1[02])(\/|-)31)|(?:(?:0?[1,3-9]|1[0-2])(\/|-)(?:29|30)))(\/|-)(?:[1-9]\d\d\d|\d[1-9]\d\d|\d\d[1-9]\d|\d\d\d[1-9])$|^(?:(?:0?[1-9]|1[0-2])(\/|-)(?:0?[1-9]|1\d|2[0-8]))(\/|-)(?:[1-9]\d\d\d|\d[1-9]\d\d|\d\d[1-9]\d|\d\d\d[1-9])$|^(0?2(\/|-)29)(\/|-)(?:(?:0[48]00|[13579][26]00|[2468][048]00)|(?:\d\d)?(?:0[48]|[2468][048]|[13579][26]))$/)).test(a)},_isDateTime:function(a){return(new RegExp(/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])\s+(1[012]|0?[1-9]){1}:(0?[1-5]|[0-6][0-9]){1}:(0?[0-6]|[0-6][0-9]){1}\s+(am|pm|AM|PM){1}$|^(?:(?:(?:0?[13578]|1[02])(\/|-)31)|(?:(?:0?[1,3-9]|1[0-2])(\/|-)(?:29|30)))(\/|-)(?:[1-9]\d\d\d|\d[1-9]\d\d|\d\d[1-9]\d|\d\d\d[1-9])$|^((1[012]|0?[1-9]){1}\/(0?[1-9]|[12][0-9]|3[01]){1}\/\d{2,4}\s+(1[012]|0?[1-9]){1}:(0?[1-5]|[0-6][0-9]){1}:(0?[0-6]|[0-6][0-9]){1}\s+(am|pm|AM|PM){1})$/)).test(a)},
_dateCompare:function(a,b){return new Date(a.toString())<new Date(b.toString())},_dateRange:function(a,b,d,c){if(!c.firstOfGroup[0].value&&c.secondOfGroup[0].value||c.firstOfGroup[0].value&&!c.secondOfGroup[0].value||!e._isDate(c.firstOfGroup[0].value)||!e._isDate(c.secondOfGroup[0].value)||!e._dateCompare(c.firstOfGroup[0].value,c.secondOfGroup[0].value))return c.allrules[b[d]].alertText+c.allrules[b[d]].alertText2},_dateTimeRange:function(a,b,d,c){if(!c.firstOfGroup[0].value&&c.secondOfGroup[0].value||
c.firstOfGroup[0].value&&!c.secondOfGroup[0].value||!e._isDateTime(c.firstOfGroup[0].value)||!e._isDateTime(c.secondOfGroup[0].value)||!e._dateCompare(c.firstOfGroup[0].value,c.secondOfGroup[0].value))return c.allrules[b[d]].alertText+c.allrules[b[d]].alertText2},_maxCheckbox:function(a,b,d,c,e){d=d[c+1];b=b.attr("name");if(a.find("input[name='"+b+"']:checked").length>d)return e.showArrow=!1,e.allrules.maxCheckbox.alertText2?e.allrules.maxCheckbox.alertText+" "+d+" "+e.allrules.maxCheckbox.alertText2:
e.allrules.maxCheckbox.alertText},_minCheckbox:function(a,b,d,c,e){d=d[c+1];b=b.attr("name");if(a.find("input[name='"+b+"']:checked").length<d)return e.showArrow=!1,e.allrules.minCheckbox.alertText+" "+d+" "+e.allrules.minCheckbox.alertText2},_creditCard:function(a,b,d,c){d=!1;a=a.val().replace(/ +/g,"").replace(/-+/g,"");var e=a.length;if(14<=e&&16>=e&&0<parseInt(a)){b=0;d=e-1;e=1;var f=new String;do{var g=parseInt(a.charAt(d));f+=0==e++%2?2*g:g}while(0<=--d);for(d=0;d<f.length;d++)b+=parseInt(f.charAt(d));
d=0==b%10}if(!d)return c.allrules.creditCard.alertText},_ajax:function(a,b,d,c){var k=c.allrules[b[d+1]];d=k.extraData;var f=k.extraDataDynamic;b={fieldId:a.attr("id"),fieldValue:a.val()};if("object"===typeof d)g.extend(b,d);else if("string"===typeof d){var l=d.split("&");for(d=0;d<l.length;d++){var p=l[d].split("=");p[0]&&p[0]&&(b[p[0]]=p[1])}}if(f)for(f=String(f).split(","),d=0;d<f.length;d++)l=f[d],g(l).length&&(p=a.closest("form, .validationEngineContainer").find(l).val(),l.replace("#",""),escape(p),
b[l.replace("#","")]=p);"field"==c.eventTrigger&&delete c.ajaxValidCache[a.attr("id")];if(!c.isError&&!e._checkAjaxFieldStatus(a.attr("id"),c))return g.ajax({type:c.ajaxFormValidationMethod,url:k.url,cache:!1,dataType:"json",data:b,field:a,rule:k,methods:e,options:c,beforeSend:function(){},error:function(a,b){if(c.onFailure)c.onFailure(a,b);else e._ajaxError(a,b)},success:function(b){var d=b[0],f=g("#"+d).eq(0);if(1==f.length){var h=b[2];b[1]?(c.ajaxValidCache[d]=!0,h?c.allrules[h]&&(b=c.allrules[h].alertTextOk)&&
(h=b):h=k.alertTextOk,c.showPrompts&&(h?e._showPrompt(f,h,"pass",!0,c):e._closePrompt(f)),"submit"==c.eventTrigger&&a.closest("form").submit()):(c.ajaxValidCache[d]=!1,c.isError=!0,h?c.allrules[h]&&(b=c.allrules[h].alertText)&&(h=b):h=k.alertText,c.showPrompts&&e._showPrompt(f,h,"",!0,c))}f.trigger("jqv.field.result",[f,c.isError,h])}}),k.alertTextLoad},_ajaxError:function(a,b){0==a.status&&null==b?alert("The page is not served from a server! ajax call failed"):"undefined"!=typeof console&&console.log("Ajax error: "+
a.status+" "+b)},_dateToString:function(a){return a.getFullYear()+"-"+(a.getMonth()+1)+"-"+a.getDate()},_parseDate:function(a){var b=a.split("-");b==a&&(b=a.split("/"));return b==a?(b=a.split("."),new Date(b[2],b[1]-1,b[0])):new Date(b[0],b[1]-1,b[2])},_showPrompt:function(a,b,d,c,k,f){a.data("jqv-prompt-at")instanceof jQuery?a=a.data("jqv-prompt-at"):a.data("jqv-prompt-at")&&(a=g(a.data("jqv-prompt-at")));var l=e._getPrompt(a);f&&(l=!1);g.trim(b)&&(l?e._updatePrompt(a,l,b,d,c,k):e._buildPrompt(a,
b,d,c,k))},_buildPrompt:function(a,b,d,c,k){var f=g("<div>");f.addClass(e._getClassName(a.attr("id"))+"formError");f.addClass("parentForm"+e._getClassName(a.closest("form, .validationEngineContainer").attr("id")));f.addClass("formError");switch(d){case "pass":f.addClass("greenPopup");break;case "load":f.addClass("blackPopup")}c&&f.addClass("ajaxed");g("<div>").addClass("formErrorContent").html(b).appendTo(f);b=a.data("promptPosition")||k.promptPosition;if(k.showArrow)switch(d=g("<div>").addClass("formErrorArrow"),
"string"==typeof b&&(c=b.indexOf(":"),-1!=c&&(b=b.substring(0,c))),b){case "bottomLeft":case "bottomRight":f.find(".formErrorContent").before(d);d.addClass("formErrorArrowBottom").html('<div class="line1">\x3c!-- --\x3e</div><div class="line2">\x3c!-- --\x3e</div><div class="line3">\x3c!-- --\x3e</div><div class="line4">\x3c!-- --\x3e</div><div class="line5">\x3c!-- --\x3e</div><div class="line6">\x3c!-- --\x3e</div><div class="line7">\x3c!-- --\x3e</div><div class="line8">\x3c!-- --\x3e</div><div class="line9">\x3c!-- --\x3e</div><div class="line10">\x3c!-- --\x3e</div>');
break;case "topLeft":case "topRight":d.html('<div class="line10">\x3c!-- --\x3e</div><div class="line9">\x3c!-- --\x3e</div><div class="line8">\x3c!-- --\x3e</div><div class="line7">\x3c!-- --\x3e</div><div class="line6">\x3c!-- --\x3e</div><div class="line5">\x3c!-- --\x3e</div><div class="line4">\x3c!-- --\x3e</div><div class="line3">\x3c!-- --\x3e</div><div class="line2">\x3c!-- --\x3e</div><div class="line1">\x3c!-- --\x3e</div>'),f.append(d)}k.addPromptClass&&f.addClass(k.addPromptClass);d=a.attr("data-required-class");
void 0!==d?f.addClass(d):k.prettySelect&&g("#"+a.attr("id")).next().is("select")&&(d=g("#"+a.attr("id").substr(k.usePrefix.length).substring(k.useSuffix.length)).attr("data-required-class"),void 0!==d&&f.addClass(d));f.css({opacity:0});"inline"===b?(f.addClass("inline"),"undefined"!==typeof a.attr("data-prompt-target")&&0<g("#"+a.attr("data-prompt-target")).length?f.appendTo(g("#"+a.attr("data-prompt-target"))):a.after(f)):a.before(f);c=e._calculatePosition(a,f,k);g("body").hasClass("rtl")?f.css({position:"inline"===
b?"relative":"absolute",top:c.callerTopPosition,left:"initial",right:c.callerleftPosition,marginTop:c.marginTopSize,opacity:0}).data("callerField",a):f.css({position:"inline"===b?"relative":"absolute",top:c.callerTopPosition,left:c.callerleftPosition,right:"initial",marginTop:c.marginTopSize,opacity:0}).data("callerField",a);k.autoHidePrompt&&setTimeout(function(){f.animate({opacity:0},function(){f.closest(".formError").remove()})},k.autoHideDelay);return f.animate({opacity:.87})},_updatePrompt:function(a,
b,d,c,k,f,l){b&&("undefined"!==typeof c&&("pass"==c?b.addClass("greenPopup"):b.removeClass("greenPopup"),"load"==c?b.addClass("blackPopup"):b.removeClass("blackPopup")),k?b.addClass("ajaxed"):b.removeClass("ajaxed"),b.find(".formErrorContent").html(d),a=e._calculatePosition(a,b,f),a=g("body").hasClass("rtl")?{top:a.callerTopPosition,left:"initial",right:a.callerleftPosition,marginTop:a.marginTopSize,opacity:.87}:{top:a.callerTopPosition,left:a.callerleftPosition,right:"initial",marginTop:a.marginTopSize,
opacity:.87},b.css({opacity:0,display:"block"}),l?b.css(a):b.animate(a))},_closePrompt:function(a){var b=e._getPrompt(a);b&&b.fadeTo("fast",0,function(){b.closest(".formError").remove()})},closePrompt:function(a){return e._closePrompt(a)},_getPrompt:function(a){var b=g(a).closest("form, .validationEngineContainer").attr("id");a=e._getClassName(a.attr("id"))+"formError";if(b=g("."+e._escapeExpression(a)+".parentForm"+e._getClassName(b))[0])return g(b)},_escapeExpression:function(a){return a.replace(/([#;&,\.\+\*~':"!\^$\[\]\(\)=>\|])/g,
"\\$1")},isRTL:function(a){var b=g(document),d=g("body");return!!(a&&a.hasClass("rtl")||a&&"rtl"===(a.attr("dir")||"").toLowerCase()||b.hasClass("rtl")||"rtl"===(b.attr("dir")||"").toLowerCase()||d.hasClass("rtl")||"rtl"===(d.attr("dir")||"").toLowerCase())},_calculatePosition:function(a,b,d){var c,e=a.width(),f=a.position().left,g=a.position().top;a.height();var p=b.height();var q=c=0;p=-p;d=a.data("promptPosition")||d.promptPosition;var t,m=t=0;if("string"==typeof d&&-1!=d.indexOf(":")){var h=d.substring(d.indexOf(":")+
1);d=d.substring(0,d.indexOf(":"));-1!=h.indexOf(",")&&(t=h.substring(h.indexOf(",")+1),h=h.substring(0,h.indexOf(",")),m=parseInt(t),isNaN(m)&&(m=0));t=parseInt(h);isNaN(h)}switch(d){default:case "topRight":c+=f+e-27;q+=g;break;case "topLeft":q+=g;c+=f;break;case "centerRight":q=g+4;p=0;c=f+a.outerWidth(!0)+5;break;case "centerLeft":c=f-(b.width()+2);q=g+4;p=0;break;case "bottomLeft":q=g+a.height()+5;p=0;c=f;break;case "bottomRight":c=f+e-27;q=g+a.height()+5;p=0;break;case "inline":p=q=c=0}return{callerTopPosition:q+
m+"px",callerleftPosition:c+t+"px",marginTopSize:p+"px"}},_saveOptions:function(a,b){if(g.validationEngineLanguage)var d=g.validationEngineLanguage.allRules;else g.error("jQuery.validationEngine rules are not loaded, plz add localization files to the page");g.validationEngine.defaults.allrules=d;d=g.extend(!0,{},g.validationEngine.defaults,b);a.data("jqv",d);return d},_getClassName:function(a){if(a)return a.replace(/:/g,"_").replace(/\./g,"_")},_jqSelector:function(a){return a.replace(/([;&,\.\+\*~':"!\^#$%@\[\]\(\)=>\|])/g,
"\\$1")},_condRequired:function(a,b,d,c){for(d+=1;d<b.length;d++){var g=jQuery("#"+b[d]).first();if(g.length&&void 0==e._required(g,["required"],0,c,!0))return e._required(a,["required"],0,c)}},_submitButtonClick:function(a){a=g(this);a.closest("form, .validationEngineContainer").data("jqv_submitButton",a.attr("id"))}};g.fn.validationEngine=function(a){var b=g(this);if(!b[0])return b;if("string"==typeof a&&"_"!=a.charAt(0)&&e[a])return"showPrompt"!=a&&"hide"!=a&&"hideAll"!=a&&e.init.apply(b),e[a].apply(b,
Array.prototype.slice.call(arguments,1));if("object"!=typeof a&&a)g.error("Method "+a+" does not exist in jQuery.validationEngine");else return e.init.apply(b,arguments),e.attach.apply(b)};g.validationEngine={fieldIdCounter:0,defaults:{validationEventTrigger:"blur",scroll:!0,focusFirstField:!0,showPrompts:!0,validateNonVisibleFields:!1,ignoreFieldsWithClass:"ignoreMe",promptPosition:"topRight",bindMethod:"bind",inlineAjax:!1,ajaxFormValidation:!1,ajaxFormValidationURL:!1,ajaxFormValidationMethod:"get",
onAjaxFormComplete:g.noop,onBeforeAjaxFormValidation:g.noop,onValidationComplete:!1,doNotShowAllErrosOnSubmit:!1,custom_error_messages:{},binded:!0,notEmpty:!1,showArrow:!0,showArrowOnRadioAndCheckbox:!1,isError:!1,maxErrorsPerField:!1,ajaxValidCache:{},autoPositionUpdate:!1,InvalidFields:[],onFieldSuccess:!1,onFieldFailure:!1,onSuccess:!1,onFailure:!1,validateAttribute:"class",addSuccessCssClassToField:"",addFailureCssClassToField:"",autoHidePrompt:!1,autoHideDelay:1E4,fadeDuration:300,prettySelect:!1,
addPromptClass:"",usePrefix:"",useSuffix:"",showOneMessage:!1}};g(function(){g.validationEngine.defaults.promptPosition=e.isRTL()?"topLeft":"topRight"})})(jQuery);

;/*****************************************************************
 * Japanese language file for jquery.validationEngine.js (ver2.0)
 *
 * Transrator: tomotomo ( Tomoyuki SUGITA )
 * http://tomotomoSnippet.blogspot.com/
 * Licenced under the MIT Licence
 *******************************************************************/
(function(a){a.fn.validationEngineLanguage=function(){};a.validationEngineLanguage={newLang:function(){a.validationEngineLanguage.allRules={required:{regex:"none",alertText:"* \u5fc5\u9808\u9805\u76ee\u3067\u3059",alertTextCheckboxMultiple:"* \u9078\u629e\u3057\u3066\u304f\u3060\u3055\u3044",alertTextCheckboxe:"* \u9078\u629e\u3057\u3066\u304f\u3060\u3055\u3044"},requiredInFunction:{func:function(a,b,c,d){return"test"==a.val()?!0:!1},alertText:"* Field must equal test"},minSize:{regex:"none",alertText:"* \u6587\u5b57\u4ee5\u4e0a\u306b\u3057\u3066\u304f\u3060\u3055\u3044\u3002",
alertText2:"\u6587\u5b57\u4ee5\u4e0a\u306b\u3057\u3066\u304f\u3060\u3055\u3044"},groupRequired:{regex:"none",alertText:"* You must fill one of the following fields"},maxSize:{regex:"none",alertText:"* ",alertText2:"\u6587\u5b57\u4ee5\u4e0b\u306b\u3057\u3066\u304f\u3060\u3055\u3044"},min:{regex:"none",alertText:"* ",alertText2:" \u4ee5\u4e0a\u306e\u6570\u5024\u306b\u3057\u3066\u304f\u3060\u3055\u3044"},max:{regex:"none",alertText:"* ",alertText2:" \u4ee5\u4e0b\u306e\u6570\u5024\u306b\u3057\u3066\u304f\u3060\u3055\u3044"},
past:{regex:"none",alertText:"* ",alertText2:" \u3088\u308a\u904e\u53bb\u306e\u65e5\u4ed8\u306b\u3057\u3066\u304f\u3060\u3055\u3044"},future:{regex:"none",alertText:"* ",alertText2:" \u3088\u308a\u6700\u8fd1\u306e\u65e5\u4ed8\u306b\u3057\u3066\u304f\u3060\u3055\u3044"},maxCheckbox:{regex:"none",alertText:"* \u30c1\u30a7\u30c3\u30af\u3057\u3059\u304e\u3067\u3059"},minCheckbox:{regex:"none",alertText:"* ",alertText2:"\u3064\u4ee5\u4e0a\u30c1\u30a7\u30c3\u30af\u3057\u3066\u304f\u3060\u3055\u3044"},equals:{regex:"none",
alertText:"* \u5165\u529b\u3055\u308c\u305f\u5024\u304c\u4e00\u81f4\u3057\u307e\u305b\u3093"},creditCard:{regex:"none",alertText:"* \u7121\u52b9\u306a\u30af\u30ec\u30b8\u30c3\u30c8\u30ab\u30fc\u30c9\u756a\u53f7"},phone:{regex:/^([\+][0-9]{1,3}([ \.\-])?)?([\(][0-9]{1,6}[\)])?([0-9 \.\-]{1,32})(([A-Za-z :]{1,11})?[0-9]{1,4}?)$/,alertText:"* \u96fb\u8a71\u756a\u53f7\u304c\u6b63\u3057\u304f\u3042\u308a\u307e\u305b\u3093"},email:{regex:/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
alertText:"* \u30e1\u30fc\u30eb\u30a2\u30c9\u30ec\u30b9\u304c\u6b63\u3057\u304f\u3042\u308a\u307e\u305b\u3093"},integer:{regex:/^[\-\+]?\d+$/,alertText:"* \u6574\u6570\u3092\u534a\u89d2\u3067\u5165\u529b\u3057\u3066\u304f\u3060\u3055\u3044"},number:{regex:/^[\-\+]?((([0-9]{1,3})([,][0-9]{3})*)|([0-9]+))?([\.]([0-9]+))?$/,alertText:"* \u6570\u5024\u3092\u534a\u89d2\u3067\u5165\u529b\u3057\u3066\u304f\u3060\u3055\u3044"},date:{regex:/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/,alertText:"* \u65e5\u4ed8\u306f\u534a\u89d2\u3067 YYYY-MM-DD \u306e\u5f62\u5f0f\u3067\u5165\u529b\u3057\u3066\u304f\u3060\u3055\u3044"},
ipv4:{regex:/^((([01]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))[.]){3}(([0-1]?[0-9]{1,2})|(2[0-4][0-9])|(25[0-5]))$/,alertText:"* IP\u30a2\u30c9\u30ec\u30b9\u304c\u6b63\u3057\u304f\u3042\u308a\u307e\u305b\u3093"},url:{regex:/^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i,
alertText:"* URL\u304c\u6b63\u3057\u304f\u3042\u308a\u307e\u305b\u3093"},onlyNumberSp:{regex:/^[0-9 ]+$/,alertText:"* \u534a\u89d2\u6570\u5b57\u3067\u5165\u529b\u3057\u3066\u304f\u3060\u3055\u3044"},onlyLetterSp:{regex:/^[a-zA-Z ']+$/,alertText:"* \u534a\u89d2\u30a2\u30eb\u30d5\u30a1\u30d9\u30c3\u30c8\u3067\u5165\u529b\u3057\u3066\u304f\u3060\u3055\u3044"},onlyLetterNumber:{regex:/^[0-9a-zA-Z]+$/,alertText:"* \u534a\u89d2\u82f1\u6570\u3067\u5165\u529b\u3057\u3066\u304f\u3060\u3055\u3044"},ajaxUserCall:{url:"ajaxValidateFieldUser",
extraData:"name=eric",alertText:"* This user is already taken",alertTextLoad:"* Validating, please wait"},ajaxNameCall:{url:"ajaxValidateFieldName",alertText:"* This name is already taken",alertTextOk:"* This name is available",alertTextLoad:"* Validating, please wait"},validate2fields:{alertText:"* \u300eHELLO\u300f\u3068\u5165\u529b\u3057\u3066\u304f\u3060\u3055\u3044"},katakana:{regex:/^[\u30a2-\u30f3\u30a1-\u30a9\u30e3-\u30e7\u30fc]+$/,alertText:"* \u5168\u89d2\u30ab\u30bf\u30ab\u30ca\u3067\u5165\u529b\u3057\u3066\u304f\u3060\u3055\u3044"}}}};
a.validationEngineLanguage.newLang()})(jQuery);

/* slick */
require('slick-carousel');

/* magnific-popup */
require('magnific-popup');

/*--------------------------------
　フリガナ自動入力
--------------------------------*/
(function(k){k.fn.autoKana=function(w,x,y){function z(){var a;a=c.val();if(""==a)n(),p();else{var b=a;if(b.match(h))a=b.replace(h,"");else{var d;a=h.split("");d=b.split("");for(b=0;b<a.length;b++)a[b]==d[b]&&(d[b]="");a=d.join("")}g!=a&&(g=a,f||(a=a.replace(q,"").split(""),f||(1<Math.abs(e.length-a.length)?(b=a.join("").replace(A,"").split(""),1<Math.abs(e.length-b.length)&&r()):e.length==g.length&&e.join("")!=g&&g.match(q)&&r()),p(a)))}}function p(a){if(!f&&(a&&(e=a),t)){a=l+e.join("");if(B.katakana){var b,
d,c;c=new String;for(d=0;d<a.length;d++)b=a.charCodeAt(d),c=12353<=b&&12435>=b||12445==b||12446==b?c+String.fromCharCode(b+96):c+a.charAt(d);a=c}m.val(a)}}function n(){l="";f=!1;g=h="";e=[]}function u(){l=m.val();f=!1;h=c.val()}function r(){l+=e.join("");f=!0;e=[]}var B=k.extend({katakana:!1},y),q=RegExp("[^ \u3000\u3041\u3042-\u3093\u30fc]","g"),A=RegExp("[\u3041\u3043\u3045\u3047\u3049\u3063\u3083\u3085\u3087]","g"),c,m,t=!1,v=null,f=!0,g,e,h,l;c=k(w);m=k(x);t=!0;n();c.blur(function(a){clearInterval(v)});
c.focus(function(a){u();v=setInterval(z,30)});c.keydown(function(a){f&&u()})}})(jQuery);


//共通変数（変更なし）
const 	win           = $(window),
		html          = $('html'),
		body          = $('body'),
		container     = $('.l-container'),

		selector      = $('[data-selector]'),
		header        = $('[data-selector="siteHeader"]'),
		sp_menu_open  = $('[data-selector="spMenuOpenBtn"]'),
		looding       = $('[data-selector="looding"]'),
		common_map    = '[data-selector="commonMap"]',

		address_name  = [
			'宮城県仙台市宮城野区新田2丁目8-50',
		],

		//classまとめ
		class_name    = {
			'pc_mode'         : 'is-pcMode',
			'sp_mode'         : 'is-spMode',

			'touch_device'    : 'is-touchDevice',
			'no_touch_device' : 'is-noTouchDevice',

			'scrl_move'       : 'is-scrlMoveClass',
			'open_gnavi'      : 'is-opneGnavi',
		},

		portfolio_num = 8,

		ga_code       = 'UA-15901152-1',

		sp_option     = {
			dots: true,
		},

		//イベントまとめ
		set_event     = {
			//head書き換え
			'page_in_change'       : function(newpage){
				let head          = document.head,
					new_html_head = newpage.match(/<head[^>]*>([\s\S.]*)<\/head>/i)[0],
					save_new_html = document.createElement('head'),

					remove_head_tags = [
						"meta[name='description']"
					].join(','),

					head_tags = head.querySelectorAll(remove_head_tags);

				//headの書き換え
				for(var i = 0; i < head_tags.length; i++ ){
					head.removeChild(head_tags[i]);
				}

				save_new_html.innerHTML = new_html_head;

				let new_head_tags = save_new_html.querySelectorAll(remove_head_tags)

				for(var i = 0; i < new_head_tags.length; i++ ){
					head.appendChild(new_head_tags[i]);
				}
			},

			//loadイベント
			'load_event'           : function(name){
				let main_img  = $('.l-main').find('img');

				//必要なページではclassをつけ、それ以外では外す
				set_event.add_body_info_change(name);

				setTimeout(function(){
					//data属性書き換え
					body.attr('data-load-complete', 'true');

					//AOS
					AOS.init({
						disable : 'mobile',
					});
				}, 500);

				//各ページの対応
				switch(name) {
					case 'index':
						//画像が読み込まれたら実行
						set_event.img_check(main_img).done(function() {
							set_event.top_panel_anime();
							set_event.top_mv_h_adjustment();
							set_event.top_movie_play();
							set_event.top_loopSlider();
						});

						break;

					case 'business_ec':
						//画像が読み込まれたら実行
						set_event.img_check(main_img).done(function() {
							set_event.business_mv_show_txt();
						});

						break;

					case 'business_sp':
						//画像が読み込まれたら実行
						set_event.img_check(main_img).done(function() {
							set_event.sp_portfolio();
							set_event.business_mv_show_txt();
						});

						break;

					case 'company_access':
						set_event.access_map();

						break;

					case 'contact_index':
						//お問い合わせバリデーション
						set_event.contact_form();

					case 'recruit_index':
						set_event.recruit_select();

						break;
				};
			},

			//clicjイベント
			'click_event'          : function(){
				let scrollTarget  = $('[data-scroll-target]');

				//スマホメニュー開く
				sp_menu_open.off('click.spmenu');
				sp_menu_open.on('click.spmenu', set_event.open_menu);

				//Scrollイベント
				$(document).off('click.pagesroll', '[data-scroll-target]');
				$(document).on('click.pagesroll', '[data-scroll-target]', set_event.page_in_scroll);
			},

			//imgタグチェック
			'img_check'            : function(target){
				let deferred = new $.Deferred(),
					loaded   = 0,
					max      = target.length;

				target.each(function() {
					let target_obj = new Image();

					$(target_obj).on('load', function(){
						loaded++;

						if (loaded === max){
							deferred.resolve();
						}
					});

					target_obj.src = this.src;
				});

				return deferred.promise();
			},

			//pjax
			'pjax_setting'         : function(){
				//実行
				Barba.Pjax.start();

				//ユーザーがPJAXのリンクをクリックした時
				Barba.Dispatcher.on('linkClicked', function(elemen, event) {
					//data属性書き換え
					body.attr('data-load-complete', 'false');
					body.attr('data-move-event', 'true');
					looding.fadeIn(400);
				});

				//リンクが変更された時
				// Barba.Dispatcher.on('initStateChange', function(current) {});

				//新しいコンテナがロードされ、ラッパーに挿入された時
				Barba.Dispatcher.on('newPageReady', function(current, prev, elemen, newpage) {
					//Google Analytics
					if (typeof gtag === 'function') {
						gtag('config', ga_code, {'page_path' : location.pathname});
					}

					//head情報の書き換え
					set_event.page_in_change(newpage);
					//SP用
					container.css('top', '');
				});

				//移行が完了し、古いコンテナがDOMから削除された時
				Barba.Dispatcher.on('transitionCompleted', function(current, prev) {
					$('html, body').animate({scrollTop: 0}, 0, 'swing');

					//読み込みイベント実行
					set_event.load_event(current.namespace);

					//Loading非表示
					looding.fadeOut(400);

					setTimeout(function(){
						body.attr('data-move-event', 'false');
					}, 500);
				});
			},

			//デバイス取得
			'get_device'           : function(){
				let ua = navigator.userAgent;
				if(ua.indexOf('iPhone') > 0 || ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0){
					return 'sp';
				}else if(ua.indexOf('iPad') > 0 || ua.indexOf('Android') > 0){
					return 'tab';
				}else{
					return 'other';
				}
			},

			//ブラウザ取得
			'add_class_browser'    : function(){
				let ua = window.navigator.userAgent.toLowerCase();

				if(ua.indexOf('msie') != -1 || ua.indexOf('trident') != -1) {
					html.addClass('is-browser_ie');
				} else if(ua.indexOf('edge') != -1) {
					html.addClass('is-browser_edge');
				} else if(ua.indexOf('chrome') != -1) {
					html.addClass('is-browser_chrome');
				} else if(ua.indexOf('safari') != -1) {
					html.addClass('is-browser_safari');
				} else if(ua.indexOf('firefox') != -1) {
					html.addClass('is-browser_firefox');
				} else if(ua.indexOf('opera') != -1) {
					html.addClass('is-browser_opera');
				}
			},

			//PC or SPのclassをつける
			'add_class_device'     : function(){
				//デバイス判定でclassをつける
				let device = set_event.get_device();

				if (device === 'other') {
					html.addClass(class_name.no_touch_device);
				} else {
					html.addClass(class_name.touch_device);
				}
			},

			//PC or SPのclassをつける
			'add_class_media_mode' : function(){
				const sp_w = 900;

				//ブレイクポイントによってclassを切り替え
				if(window.matchMedia('(max-width: '+sp_w+'px)').matches){
					html.addClass(class_name.sp_mode).removeClass(class_name.pc_mode);
				} else {
					html.addClass(class_name.pc_mode).removeClass(class_name.sp_mode);
				};
			},

			//スクロール位置でclassをつける
			'add_class_scrl_move'  : function(body_id, scrltop){
				let pos = 150;

				if (body_id === 'index') {
					pos = win.height() - header.outerHeight(true);
				}

				if (scrltop > pos && !body.hasClass(class_name.scrl_move)) {
					body.addClass(class_name.scrl_move);
				} else if (scrltop < pos && body.hasClass(class_name.scrl_move)) {
					body.removeClass(class_name.scrl_move);
				}
			},

			//bodyにclassをつける
			'add_body_info_change' : function(name) {
				let body_class_list = {
					'index'          : 'is-mvAnime',
					'company_access' : 'is-notCommonMap',
					'contact_index'  : 'is-notCommonMap',
				};

				//idの対応
				body.attr('id', name);

				//classの対応
				body.removeClass();
				if (body_class_list[name]) {
					body.addClass(body_class_list[name]);
				}
			},

			//SP時にメニューをclickでclassをつける
			'open_menu'            : function(){
				let href   = $(this).attr('data-href'),
					target = $('[data-target="'+href+'"]');

				scrl_top = win.scrollTop();

				if (body.hasClass(class_name.open_gnavi)) {
					body.removeClass(class_name.open_gnavi);
					target.css('top', '');
					$('html, body').animate({scrollTop: save_scol_top}, 0, 'swing');
				} else {
					body.addClass(class_name.open_gnavi);
					target.css('top', scrl_top);
					save_scol_top = scrl_top;
				}
			},

			//ページ内スクロール
			'page_in_scroll'       : function(){
				const speed = 750;

				let href    = $(this).attr('data-scroll-target'),
					target  = $('[data-target="'+href+'"]'),
					position = target.offset().top;

				if (header.css('position') === 'fixed') {
					position = position - header.outerHeight(true);
				}

				$('html, body').animate({scrollTop: position}, speed, 'swing');

				return false;
			},

			//google mapを作成
			'map_generator'        : function(target, address) {
				let geocoder      = new google.maps.Geocoder(),
					option        = {
						'address': address,
						'region': 'jp'
					},
					style_map     = new google.maps.StyledMapType(
						[
							{
							stylers: [
								{ saturation: -100 }　//彩度を変える
							]
							}
						]
					),

					set_map       = function(lat, lng) {
						let map_tag = document.querySelector(target),

							// 取得した座標をセット緯度経度をセット
							map_location = new google.maps.LatLng(lat, lng),

							//マップ表示のオプション
							map_options = {
								zoom             : 15,           //縮尺
								center           : map_location, //地図の中心座標
								//ここをfalseにすると地図上に人みたいなアイコンとか表示される
								disableDefaultUI : true,
								mapTypeId        : 'roadmap'     //地図の種類を指定
							},

							//マップを表示する
							map = new google.maps.Map(map_tag, map_options),

							//地図上にマーカーを表示させる
							marker = new google.maps.Marker({
								position : map_location, //マーカーを表示させる座標
								map      : map,               //マーカーを表示させる地図
								icon     : '/assets/img/common/icon/map01.png'
							});

						//map色変更
						map.mapTypes.set('styled_map', style_map);
						map.setMapTypeId('styled_map');
					},

					set_location  = function(results, status) {
						if (status === google.maps.GeocoderStatus.OK) {
							let lat_num = results[0].geometry.location.lat(),
								lng_num = results[0].geometry.location.lng();

							set_map(lat_num, lng_num);
						}
					};

				geocoder.geocode(option, set_location);
			},

			//表示時のpanelアニメーション
			'top_panel_anime'      : function() {
				setTimeout(function(){
					if (body.attr('data-load-complete') === 'true') {
						body.attr('data-hide-complete', 'true');
					}
				}, 800);
			},

			//TOPページの高さ合わせ
			'top_mv_h_adjustment'  : function() {
				let win_h = win.height(),
					mv    = $('[data-selector="mv"]'),
					main  = $('[data-selector="main"]'),
					video = $('[data-selector="mvVideo"]');

				mv.height(win_h);
				video.height(win_h);
				main.css('padding-top', win_h);
			},

			//TOPページの動画の再生
			'top_movie_play'      : function() {
				const top_video = document.getElementById('topVideo');

				top_video.load();
				top_video.onloadeddata = function(){
					this.classList.add('is-playing');
					top_video.play();
				}
			},

			//TOPページloopSlider
			'top_loopSlider'       : function() {
				const loop_slider = $('[data-selector="loopSlider"]');

				loop_slider.slick({
					infinite       : true,
					arrows         : false,
					autoplay       : true,
					/* ポイントここから～ */
					autoplaySpeed  : 0,
					cssEase        : 'linear',
					speed          : 4000,
					/* ～ここまで */
					slidesToShow   : 4,
					slidesToScroll : 1,
					variableWidth  : true,
					pauseOnHover   : false
				});
			},

			//MVのテキスト表示を作成
			'business_mv_show_txt' : function() {
				const 	show_line  = $('[data-show-block]'),
						show_txt    = $('[data-selector="showTxt"]'),
						random_txt = $('[data-selector="randomTxt"]');

				//行を作成
				let text           = random_txt.html(),
					text_array     = text.split('<br>'),
					text_line      = text_array.filter(Boolean),
					text_in        = '',

					tag_one_letter = function(txt) {
						let txts     = txt.split(''),
							txts_len = txts.length,
							tag      = '',
							num_list = [];

						//ランダムの数値列を作成
						for (var i = 0; i < txts_len; i++) {
							num_list.push(eval(i));
						}

						//数字の順序を変更
						num_list.sort(function() {
							return Math.random() - Math.random();
						});

						$.each(txts, function(i, val) {
							let num = num_list[i];

							tag += '<span data-leter-show-num="'+num+'">'+val+'</span>';
						});

						return tag;
					},

					show_timer     = function() {
						let count = 1,
							timer = setInterval(function(){
								$('[data-text-line="'+count+'"]').attr('data-show-line', 'true');
								count++;

								if(count > 3){　
									clearInterval(timer);　//idをclearIntervalで指定している
								}
							}, 800);
					};

				//空にする
				random_txt.html('');

				for (var i = 0; i < text_line.length; i++) {
					let line = '';

					line = text_line[i].replace(/\s+/g, "");
					line = tag_one_letter(line);
					line = '<span data-text-line="'+(i + 1)+'" data-show-line="false">'+line+'</span>';

					text_in += line;
				}

				random_txt.html(text_in);

				//それぞれ囲う
				show_line.each(function(index, el) {
					let num       = Number(index) + 1,
						elm       = $('[data-show-block="'+num+'"]'),
						inner     = elm.html(),
						inner_tag = '<span data-show-in="true" data-show-num="'+num+'">'+inner+'</span>';

					elm.html(inner_tag);
				});

				setTimeout(function(){
					show_txt.attr('data-show', 'true');
					show_timer();
				}, 1000)
			},

			//制作実績モーダルウィンドウ & スライダー
			'business_portfolio'   : function(start_slider) {
				let portfolio_popup = $('[data-selector="portfolioPopup"]');

				portfolio_popup.magnificPopup({
					delegate: 'a',
					// type: 'inline',
					gallery: { //ギャラリー表示にする
						enabled : true
					},
					removalDelay: 500,
					callbacks: {
						beforeOpen: function() {
							this.st.mainClass = this.st.el.attr('data-effect');
						},
						open: function() {
							start_slider.slick('setPosition');
						},
						change: function() {
							$('.mfp-container').addClass('is-fade');
							start_slider.slick('slickGoTo', 0, true);

							setTimeout(function(){
								start_slider.slick('setPosition');

								$('.mfp-container').removeClass('is-fade');
							}, 700);
						},
					},
					midClick: true
				});
			},

			//ポートフォリオ、タグ作成
			'create_portfolio'     : function(data, start, max) {
				let portfolio = $('[data-sp-portfolio="true"]'),
					get_popup    = function(order, path, slide) {
						let html      = '',
							slide_len = Object.keys(slide).length,
							slide_num = slide_len / 3;

						html += '<div id="popup'+order+'" class="mfp-hide mfp-with-anim">';
						html += '<div class="c-itemList01__popup" data-selector="popupSlider">';

						for (var i = 1; i <= slide_num; i++) {
							let img   = path + slide['slide' + i],
								img_w = slide['slide' + i + '_w'],
								img_h = slide['slide' + i + '_h'];

							html += '<div class="c-itemList01__popup--slide">';
							html += '<img src="'+img+'" width="'+img_w+'" height="'+img_h+'" alt="">';
							html += '</div>';
						}

						html += '</div></div>';

						return html;
					},

					get_list    = function(data) {
						let html      = '',
							speed     = 100,
							delay_num = 1,
							data_len  = Object.keys(data).length;

						for (var i = 1; i <= data_len; i++) {
							if (start <= i && max >= i) {
								if (delay_num % 4 === 1) {
									delay_num = 1;
								}

								let delay   = delay_num * speed,
									order   = data[i]['order'],
									thum    = data[i]['img'] + data[i]['thum'],
									thum_1x = data[i]['img'] + 'thum_img-min.jpg',
									thum_w  = data[i]['thum_w'],
									thum_h  = data[i]['thum_h'],
									desc    = data[i]['description'],

									popup  = get_popup(order, data[i]['img'], data[i]['slide']);

								html += '<li class="c-itemList01__list" data-aos="fade-up" data-aos-delay="'+delay+'">';
								html += '<a href="#popup'+order+'" class="c-itemList01__anchor" data-effect="mfp-zoom-in">';
								html += '<div class="c-itemList01__img">';
								html += '<img src="'+thum+'" srcset="'+thum_1x+' 1x,'+thum+' 2x" width="'+thum_w+'" height="'+thum_h+'" alt="" class="c-itemList01__img--photo">';
								html += '</div>';
								html += '</a>' + popup;
								html += '</li>';

								delay_num++;
							}
						}

						return html;
					};

				if(data === undefined) return false;

				// start_slider.slick('unslick');
				let list_html = get_list(data);

				portfolio.append(list_html);

				if (html.hasClass(class_name.touch_device)) {
					portfolio.find('.c-itemList01__list').attr('data-aos', '');
				}

				setTimeout(function(){
					if (start_slider) {
						let add_slider = $('[data-selector="popupSlider"]').not('.slick-initialized').slick(sp_option);

						$.merge(start_slider, add_slider)
					} else {
						start_slider = $('[data-selector="popupSlider"]').slick(sp_option);
					}

					set_event.business_portfolio(start_slider);
				}, 500);
			},

			//SPの制作実績
			'sp_portfolio'         : function() {
				const 	json  = '/assets/js/sp_portfolio.json';

				let img_data  = {},
					num       = 1,
					max       = portfolio_num,
					get_data  = function(data) {
						let info = {};

						$.each(data, function(i, elm) {
							$.each(elm, function(index, val) {
								let order = parseInt(val.order),
									path  = '/assets/img/business/sp/portfolio/'+ i +'/' + index + '/',
									img   = {img: path};

								$.extend(val, img);

								info[order] = val;
							});
						});

						return info;
					}

				$.ajax({
					type: 'GET',
					url: json,
					dataType: 'json',
				}).done(function(response) {
					img_data  = get_data(response);

					//スクロールで使うため保存する
					sp_ajax_info = img_data;

					set_event.create_portfolio(img_data, num, max);
				});
			},

			//scrollでリストを追加表示
			'sp_portfolio_scroll'  : function(scrl_top) {
				if(sp_ajax_info === undefined) return false;

				let win_h       = win.height(),

					portfolio   = $('[data-sp-portfolio="true"]'),
					portfolio_y = portfolio.offset().top,
					portfolio_h = portfolio.outerHeight(true),

					check_top   = scrl_top + win_h,
					add_pos     = portfolio_y + portfolio_h / 2,

					list        = portfolio.find('.c-itemList01__list'),
					list_len    = list.length,
					start_len   = list_len + 1,
					max_len     = list_len + portfolio_num,
					data_max    = Object.keys(sp_ajax_info).length;

				if (data_max <= list_len) return false;

				if (check_top >= add_pos) {
					set_event.create_portfolio(sp_ajax_info, start_len, max_len);
				}
			},

			//お問い合わせフォーム
			'contact_form'         : function() {
				//変数
				const 	form            = $('[data-selector="validationForm"]'),
						checkbox        = form.find('input[type="checkbox"]'),

						error_class     = 'is-error01',
						success_class   = 'is-success01',
						input           = form.find('[data-validation-engine]').not('[type="checkbox"]'),
						required        = form.find('[data-validation-engine]'),
						submit_btn      = form.find('[name="__submit__"]'),
						error_txt_class = '.formErrorContent',

						//validationを判定し、セットする
						set_validation  = function(elm){
							let parent_class = elm.attr('data-parts-parent'),
								parent_tag   = elm.parents('.' + parent_class);

							if (elm.validationEngine('validate')) {
								parent_tag.removeClass(error_class).attr('data-show-txt', 'success');
							} else {
								parent_tag.addClass(error_class).attr('data-show-txt', 'error');
							}

							set_error_txt(parent_tag);
							set_kana_auto_check(elm);
							set_auto_halfsize(elm);
						},

						//エラーテキスト適切なものに変更する
						set_error_txt   = function(elm){
							let error_tag = elm.find(error_txt_class),
								error_txt = error_tag.html(),
								errors    = '';

							if (typeof error_txt === 'string' && error_txt.indexOf("<br>") != -1) {
								errors = error_txt.substring(0, error_txt.indexOf("<br>"));
							} else {
								errors = error_txt;
							}

							elm.attr('data-error-txt', errors);
						},

						//フリガナが自動入力された場合のvalidation判定
						set_kana_auto_check = function(elm){
							const name = elm.attr('data-kana-target');

							if (name) {
								set_validation($('#' + name));
							}
						},

						//全角を半角に自動変換
						set_auto_halfsize = function(elm) {
							let text = '';

							if (elm.attr('data-halfsize') === "true") {
								text = elm.val().replace(/[Ａ-Ｚａ-ｚ０-９]/g, function(s) {
									return String.fromCharCode(s.charCodeAt(0) - 65248);
								});

								elm.val(text);
							}
						},

						set_all_check = function(){
							required.each(function() {
								set_validation($(this));
							});
						};

				//空であればエラーを出す
				(function(){
					setTimeout(set_all_check, 1000);
				})();

				//フリガナ自動入力
				(function(){
					const furikana = $('[data-kana-target]');

					furikana.each(function() {
						let id      = $(this).attr('id'),
							$id     = $('#' + id),
							target  = $(this).attr('data-kana-target'),
							$target = $('#' + target);

						$.fn.autoKana($id, $target, {katakana : true});
					});
				})();

				//お問い合せ項目を選択
				(function(){
					if (location.search.indexOf('job') != -1) {
						$('#ftype3').prop('checked', true);
					}
				})();

				//validation実行
				// validationForm.validationEngine();
				let validations = form.validationEngine({
					scroll          : false,
					focusFirstField : false,

					onValidationComplete : function (form, status) {
						if (!status) {
							const 	error_tag_first     = $('.' + error_class).first(),
									error_tag_first_pos = error_tag_first.offset().top,
									self_y              = 50,
									header_h            = header.outerHeight(true),
									pos                 = error_tag_first_pos - header.outerHeight(true) - self_y;

							$('html, body').animate({scrollTop: pos}, 400, 'swing');
						} else {
							return status;
						}
					}
				});

				//チェック
				input.on('blur.required', function() {
					set_validation($(this));
				});

				//checkbox
				checkbox.on('click.required', function() {
					set_validation($(this));
				});

				//確認ボタン
				submit_btn.on('click.submit', function() {
					validations;
				});
			},

			//アクセスページのmap作成
			'access_map'           : function() {
				let map_elm = [
					'[data-selector="headOfficeMap"]',
					'[data-selector="tokyoMap"]',
				];

				$.each(address_name, function(i, val) {
					set_event.map_generator(map_elm[i], val);
				});
			},

			//採用情報、募集要項表示
			'recruit_detail'       : function(val) {
				const 	json  = '/assets/js/recruit.json',
						speed = 400;

				let recruit  = $('[data-selector="recruitDetail"]'),
					joboffer = function(data) {

						let html = '',
							head = {
								'title'             : '職種',
								'business_content'  : '業務内容',
								'employment_status' : '雇用形態',
								'required_skills'   : '必要なスキル',
								'educational'       : '学歴・経験',
								'location'          : '勤務地',
								'work_time'         : '勤務時間',
								'salary'            : '給与',
								'raising_bonus'     : '昇給・賞与',
								'holiday'           : '休日',
								'welfare'           : '福利厚生',
							},
							job  = data['title'];

						if (job === 'グラフィックデザイナー') {
							html += '<div class="p-recruitRelation"><a href="/business/sp.php#spPortfolip" class="p-recruitRelation__link">制作実績を確認する</a></div>';
						}

						html += '<div class="c-table01 is-w20-80 is-vtop">';

						$.each(data, function(key, val) {
							if (key === 'salary_remarks') {
								return;
							}

							html += '<dl class="c-table01__row">';
							html += '<dt class="c-table01__cell is-th">'+head[key]+'</dt>';

							if (key === 'salary') {
								html += '<dd class="c-table01__cell">'+val+'<br>'+data['salary_remarks']+'</dd>';
							} else {
								html += '<dd class="c-table01__cell">'+val+'</dd>';
							}

							html += '</dl>';
						});

						html += '</div>';

						html += '<a href="/contact/?job='+data['title']+'" class="c-btn01 is-w300 c-btnIcon01__contact01 l-contactGuide__btn"><span class="c-btn01__txt c-btnIcon01__contact01--txt">お問い合わせ</span>';
						html += '<svg role="img" width="19" height="14" class="c-btnIcon01__contact01--icon"><use xlink:href="/assets/img/svg.svg#mail"></svg></a>';

						return html
					}

				recruit.attr('data-recruit-detail-show', 'false');

				$.ajax({
					type: 'GET',
					url: json,
					dataType: 'json',
				}).done(function(response) {
					let table = joboffer(response[val]);

					setTimeout(function(){
						recruit.html(table).attr('data-recruit-detail-show', 'true');
					}, 500);
				});
			},

			//採用情報の選択をradioとselectで共有
			'recruit_select'       : function() {
				const 	job_select = $('[data-selector="jobSelect"]'),   //radio
						selecter   = $('[data-selector="jobSelecter"]'); //select

				//radio
				job_select.off('click.jobselect');
				job_select.on('click.jobselect', function() {
					let val = $(this).val();

					set_event.recruit_detail(val);

					if ($(this).prop('checked')) {
						selecter.val(val);
					}
				});

				//select
				selecter.off('change.jobselecter');
				selecter.on('change.jobselecter', function() {
					let val = $(this).val();

					job_select.prop('checked', false);
					job_select.val([val]);
					set_event.recruit_detail(val);
				});
			},
		};

//共通変数（変更あり）
let scrl_top = win.scrollTop(),
	timer    = 0,
	body_id  = body.attr('id'),
	save_scol_top,
	start_slider,
	sp_ajax_info;

$(function(){
	//Loading表示
	looding.show();
});

//読み込み時実行
win.on('load', function() {
	//classをつける
	set_event.add_class_device();
	set_event.add_class_browser();
	set_event.add_class_media_mode();
	set_event.add_class_scrl_move(scrl_top);

	//footer下のgoogle map
	set_event.map_generator(common_map, address_name[0]);

	//IE以外
	if (!html.hasClass('is-browser_ie')) {
		//pjax
		set_event.pjax_setting();
	};

	//Loading非表示
	looding.delay(1000).fadeOut(400, function(){
		//イベント
		set_event.load_event(body_id);
		set_event.click_event();
	});
});

//リサイズイベント
win.on('resize', function() {
	body_id = body.attr('id');

	//PC or SPのclassをつける
	set_event.add_class_media_mode();
	set_event.top_mv_h_adjustment();

	//リサイズ完了後
	if (timer > 0) {
		clearTimeout(timer);
	}

	timer = setTimeout(function () {
		set_event.map_generator(common_map, address_name[0]);

		//ページごとの切り替え
		switch(body_id) {
			case 'company_access':
				set_event.access_map();

				break;
		}
	}, 200);
});

//スクロールイベント
win.on('scroll', function() {
	body_id  = body.attr('id');
	scrl_top = win.scrollTop();

	set_event.add_class_scrl_move(body_id, scrl_top);

	//ページごとの切り替え
	switch(body_id) {
		case 'business_sp':
			//画像が読み込まれたら実行
			set_event.sp_portfolio_scroll(scrl_top);

			break;
	}
});
