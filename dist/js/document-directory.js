/*! For license information please see document-directory.js.LICENSE.txt */
!function(){var t={440:function(t,e){var o,n;n=this,void 0===(o=function(){return n.svg4everybody=function(){function t(t,e,o){if(o){var n=document.createDocumentFragment(),r=!e.hasAttribute("viewBox")&&o.getAttribute("viewBox");r&&e.setAttribute("viewBox",r);for(var i=o.cloneNode(!0);i.childNodes.length;)n.appendChild(i.firstChild);t.appendChild(n)}}function e(e){e.onreadystatechange=function(){if(4===e.readyState){var o=e._cachedDocument;o||((o=e._cachedDocument=document.implementation.createHTMLDocument("")).body.innerHTML=e.responseText,e._cachedTarget={}),e._embeds.splice(0).map((function(n){var r=e._cachedTarget[n.id];r||(r=e._cachedTarget[n.id]=o.getElementById(n.id)),t(n.parent,n.svg,r)}))}},e.onreadystatechange()}function o(t){for(var e=t;"svg"!==e.nodeName.toLowerCase()&&(e=e.parentNode););return e}return function(n){var r,i=Object(n),a=window.top!==window.self;r="polyfill"in i?i.polyfill:/\bTrident\/[567]\b|\bMSIE (?:9|10)\.0\b/.test(navigator.userAgent)||(navigator.userAgent.match(/\bEdge\/12\.(\d+)\b/)||[])[1]<10547||(navigator.userAgent.match(/\bAppleWebKit\/(\d+)\b/)||[])[1]<537||/\bEdge\/.(\d+)\b/.test(navigator.userAgent)&&a;var s={},c=window.requestAnimationFrame||setTimeout,l=document.getElementsByTagName("use"),u=0;r&&function n(){for(var a=0;a<l.length;){var d=l[a],h=d.parentNode,p=o(h),f=d.getAttribute("xlink:href")||d.getAttribute("href");if(!f&&i.attributeName&&(f=d.getAttribute(i.attributeName)),p&&f){if(r)if(!i.validate||i.validate(f,p,d)){h.removeChild(d);var m=f.split("#"),g=m.shift(),y=m.join("#");if(g.length){var v=s[g];v||((v=s[g]=new XMLHttpRequest).open("GET",g),v.send(),v._embeds=[]),v._embeds.push({parent:h,svg:p,id:y}),e(v)}else t(h,p,document.getElementById(y))}else++a,++u}else++a}(!l.length||l.length-u>0)&&c(n,67)}()}}()}.apply(e,[]))||(t.exports=o)}},e={};!function(){"use strict";var t,e=jQuery,o=function(t,o){var n=new URL(window.ajaxUrl);return n.searchParams.append("action",t),e.post({url:n.toString(),data:JSON.stringify(o),contentType:"application/json; charset=utf-8",dataType:"json"})},n=function(t){return e.get({url:t})},r=function(){function t(){this.loadingKeys=[]}return t.prototype.startLoading=function(t){void 0===t&&(t="default"),this.loadingKeys.includes(t)||(this.loadingKeys.push(t),this.drawLoader())},t.prototype.stopLoading=function(t){void 0===t&&(t="default");var e=this.loadingKeys.indexOf(t);e<0||(this.loadingKeys.splice(e,1),this.drawLoader())},t.prototype.drawLoader=function(){this.$loader&&(this.loadingKeys.length?this.$loader.show():this.$loader.hide())},t}(),i=(t=function(e,o){return t=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var o in e)Object.prototype.hasOwnProperty.call(e,o)&&(t[o]=e[o])},t(e,o)},function(e,o){if("function"!=typeof o&&null!==o)throw new TypeError("Class extends value "+String(o)+" is not a constructor or null");function n(){this.constructor=e}t(e,o),e.prototype=null===o?Object.create(o):(n.prototype=o.prototype,new n)}),a=jQuery,s=window.popupCloseClass,c=function(t){function e(e,o){var n=t.call(this)||this;return n.id=e,n.$target=o,n}return i(e,t),e.prototype.request=function(){var t=this;this.startLoading();var e=window.localStorage.getItem("doc-data-capture");o("document_download_url",{id:this.id,token:e}).then((function(e){if(t.stopLoading(),!e.success)throw new Error(e.data);return e.data.form?t.presentForm(e.data.form):e.data.url?t.download():void 0})).catch((function(t){return console.error("An error occured: ",t)}))},e.prototype.presentForm=function(t){this.$form=a(t),this.$form.find(".".concat(s)).on("click",this.closeForm.bind(this)),a(document).one("gform_confirmation_loaded",this.onConfirmationLoaded.bind(this)),a("body").append(this.$form)},e.prototype.closeForm=function(){this.$form&&this.$form.remove()},e.prototype.onConfirmationLoaded=function(t,e){var o=window.dataCaptureResultToken;o&&(window.localStorage.setItem("doc-data-capture",o),this.request(),this.closeForm())},e.prototype.download=function(){var t=window.ajaxUrl+"?action=document_download&id="+this.id;a("<iframe />",{src:t}).css({visibility:"hidden",display:"none"}).appendTo(this.$target)},e}(r),l=function(){var t=function(e,o){return t=Object.setPrototypeOf||{__proto__:[]}instanceof Array&&function(t,e){t.__proto__=e}||function(t,e){for(var o in e)Object.prototype.hasOwnProperty.call(e,o)&&(t[o]=e[o])},t(e,o)};return function(e,o){if("function"!=typeof o&&null!==o)throw new TypeError("Class extends value "+String(o)+" is not a constructor or null");function n(){this.constructor=e}t(e,o),e.prototype=null===o?Object.create(o):(n.prototype=o.prototype,new n)}}(),u=jQuery,d=window.documentDirectoryProps,h=d.rootClassName,p=d.searchFormClassName,f=d.filterClassName,m=d.downloadClassName,g=d.loaderClassName,y=d.pagerClassName,v=d.clearSearchClassName,w=function(t){function e(e){var o=t.call(this)||this;return o.$elem=e,o.currentUrl=new URL(window.location.href),o.attach(),o.queryDom(),o}return l(e,t),e.prototype.queryDom=function(){this.$elem.find(".".concat(f)).select2({sorter:function(t){return t.sort((function(t,e){return t.text.toLowerCase()>e.text.toLowerCase()?0:-1}))}}),this.$loader=this.$elem.find(".".concat(g)),this.$clearSearch=this.$elem.find(".".concat(v))},e.prototype.setUrlParam=function(t,e){e?this.currentUrl.searchParams.set(t,e):this.currentUrl.searchParams.delete(t),this.currentUrl.href=this.currentUrl.href.replace(/\/page\/\d+/,""),history.pushState(null,"",this.currentUrl)},e.prototype.setUrl=function(t){this.currentUrl=new URL(t),history.pushState(null,"",this.currentUrl)},e.prototype.onFilterChange=function(t){var e=t.target,o=u(e),n=o.prop("multiple"),r=o.prop("name");if(o.select2("close"),r){var i=n?o.find("option:selected").map((function(t,e){return e.value})).get().join(","):e.value;r&&("language"!==r?(this.setUrlParam(r,i),this.reload()):(this.startLoading(),window.location.href=i))}},e.prototype.onSearchFormSubmit=function(t){t.preventDefault();var e=t.target,o=u(e).find("input:text").prop("value");o&&(this.setUrlParam("s",o),this.reload())},e.prototype.onSearchFormPress=function(t){if(this.$clearSearch){var e=t.target,o=u(e);this.$clearSearch.toggle(!!o.val())}},e.prototype.onClearSearchClick=function(t){t.preventDefault(),this.$elem.find(".".concat(p," input:text")).val(""),this.setUrlParam("s",""),this.reload()},e.prototype.onPagerClick=function(t){t.preventDefault();var e=t.target,o=u(e).prop("href");o&&(this.setUrl(o),this.reload())},e.prototype.reload=function(){var t=this;this.startLoading(),n(this.currentUrl.toString()).then((function(e){t.stopLoading();var o=u(e).find(".".concat(h));o.length&&(t.$elem.html(o.html()),t.queryDom())})).catch((function(t){return console.error("An error occured: ",t)}))},e.prototype.onDownloadClick=function(t){t.preventDefault();var e=u(t.target),o=e.closest("[data-document-id]").data("document-id");if(o){var n=new c(Number(o),e);n.$loader=this.$loader,n.request()}},e.prototype.onSelect2Unselect=function(t){t.params.originalEvent&&t.params.originalEvent.stopPropagation()},e.prototype.onWinPopState=function(){this.currentUrl=new URL(window.location.href),this.reload()},e.prototype.attach=function(){this.$elem.on("change",".".concat(f),this.onFilterChange.bind(this)),this.$elem.on("submit",".".concat(p),this.onSearchFormSubmit.bind(this)),this.$elem.on("input",".".concat(p," input:text"),this.onSearchFormPress.bind(this)),this.$elem.on("click",".".concat(v),this.onClearSearchClick.bind(this)),this.$elem.on("click",".".concat(y),this.onPagerClick.bind(this)),this.$elem.on("click",".".concat(m),this.onDownloadClick.bind(this)),u(window).on("popstate",this.onWinPopState.bind(this)),this.$elem.on("select2:unselect",this.onSelect2Unselect.bind(this))},e}(r),b=w;jQuery((function(t){t(".".concat(window.documentDirectoryProps.rootClassName)).each((function(e,o){var n=t(o);n.data("document-directory",new b(n))}))}))}(),function o(n){var r=e[n];if(void 0!==r)return r.exports;var i=e[n]={exports:{}};return t[n].call(i.exports,i,i.exports,o),i.exports}(440)({})}();
//# sourceMappingURL=document-directory.js.map