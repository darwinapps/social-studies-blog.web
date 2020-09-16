!function(e,t){for(var n in t)e[n]=t[n]}(window,function(e){var t={};function n(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}return n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)n.d(r,i,function(t){return e[t]}.bind(null,i));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=26)}([function(e,t,n){t.log=function(){var e;return"object"==typeof console&&console.log&&(e=console).log.apply(e,arguments)},t.formatArgs=function(t){if(t[0]=(this.useColors?"%c":"")+this.namespace+(this.useColors?" %c":" ")+t[0]+(this.useColors?"%c ":" ")+"+"+e.exports.humanize(this.diff),!this.useColors)return;var n="color: "+this.color;t.splice(1,0,n,"color: inherit");var r=0,i=0;t[0].replace(/%[a-zA-Z%]/g,(function(e){"%%"!==e&&(r++,"%c"===e&&(i=r))})),t.splice(i,0,n)},t.save=function(e){try{e?t.storage.setItem("debug",e):t.storage.removeItem("debug")}catch(n){}},t.load=function(){var e;try{e=t.storage.getItem("debug")}catch(n){}!e&&"undefined"!=typeof process&&"env"in process&&(e=process.env.DEBUG);return e},t.useColors=function(){if("undefined"!=typeof window&&window.process&&("renderer"===window.process.type||window.process.__nwjs))return!0;if("undefined"!=typeof navigator&&navigator.userAgent&&navigator.userAgent.toLowerCase().match(/(edge|trident)\/(\d+)/))return!1;return"undefined"!=typeof document&&document.documentElement&&document.documentElement.style&&document.documentElement.style.WebkitAppearance||"undefined"!=typeof window&&window.console&&(window.console.firebug||window.console.exception&&window.console.table)||"undefined"!=typeof navigator&&navigator.userAgent&&navigator.userAgent.toLowerCase().match(/firefox\/(\d+)/)&&parseInt(RegExp.$1,10)>=31||"undefined"!=typeof navigator&&navigator.userAgent&&navigator.userAgent.toLowerCase().match(/applewebkit\/(\d+)/)},t.storage=function(){try{return localStorage}catch(e){}}(),t.colors=["#0000CC","#0000FF","#0033CC","#0033FF","#0066CC","#0066FF","#0099CC","#0099FF","#00CC00","#00CC33","#00CC66","#00CC99","#00CCCC","#00CCFF","#3300CC","#3300FF","#3333CC","#3333FF","#3366CC","#3366FF","#3399CC","#3399FF","#33CC00","#33CC33","#33CC66","#33CC99","#33CCCC","#33CCFF","#6600CC","#6600FF","#6633CC","#6633FF","#66CC00","#66CC33","#9900CC","#9900FF","#9933CC","#9933FF","#99CC00","#99CC33","#CC0000","#CC0033","#CC0066","#CC0099","#CC00CC","#CC00FF","#CC3300","#CC3333","#CC3366","#CC3399","#CC33CC","#CC33FF","#CC6600","#CC6633","#CC9900","#CC9933","#CCCC00","#CCCC33","#FF0000","#FF0033","#FF0066","#FF0099","#FF00CC","#FF00FF","#FF3300","#FF3333","#FF3366","#FF3399","#FF33CC","#FF33FF","#FF6600","#FF6633","#FF9900","#FF9933","#FFCC00","#FFCC33"],e.exports=n(13)(t),e.exports.formatters.j=function(e){try{return JSON.stringify(e)}catch(t){return"[UnexpectedJSONParseError]: "+t.message}}},function(e,t){!function(){e.exports=this.lodash}()},function(e,t){!function(){e.exports=this.wp.data}()},function(e,t,n){"use strict";
/*!
 * cookie
 * Copyright(c) 2012-2014 Roman Shtylman
 * Copyright(c) 2015 Douglas Christopher Wilson
 * MIT Licensed
 */t.parse=function(e,t){if("string"!=typeof e)throw new TypeError("argument str must be a string");for(var n={},i=t||{},s=e.split(o),u=i.decode||r,c=0;c<s.length;c++){var f=s[c],l=f.indexOf("=");if(!(l<0)){var h=f.substr(0,l).trim(),p=f.substr(++l,f.length).trim();'"'==p[0]&&(p=p.slice(1,-1)),null==n[h]&&(n[h]=a(p,u))}}return n},t.serialize=function(e,t,n){var r=n||{},o=r.encode||i;if("function"!=typeof o)throw new TypeError("option encode is invalid");if(!s.test(e))throw new TypeError("argument name is invalid");var a=o(t);if(a&&!s.test(a))throw new TypeError("argument val is invalid");var u=e+"="+a;if(null!=r.maxAge){var c=r.maxAge-0;if(isNaN(c))throw new Error("maxAge should be a Number");u+="; Max-Age="+Math.floor(c)}if(r.domain){if(!s.test(r.domain))throw new TypeError("option domain is invalid");u+="; Domain="+r.domain}if(r.path){if(!s.test(r.path))throw new TypeError("option path is invalid");u+="; Path="+r.path}if(r.expires){if("function"!=typeof r.expires.toUTCString)throw new TypeError("option expires is invalid");u+="; Expires="+r.expires.toUTCString()}r.httpOnly&&(u+="; HttpOnly");r.secure&&(u+="; Secure");if(r.sameSite){switch("string"==typeof r.sameSite?r.sameSite.toLowerCase():r.sameSite){case!0:u+="; SameSite=Strict";break;case"lax":u+="; SameSite=Lax";break;case"strict":u+="; SameSite=Strict";break;case"none":u+="; SameSite=None";break;default:throw new TypeError("option sameSite is invalid")}}return u};var r=decodeURIComponent,i=encodeURIComponent,o=/; */,s=/^[\u0009\u0020-\u007e\u0080-\u00ff]+$/;function a(e,t){try{return t(e)}catch(n){return e}}},function(e,t,n){"use strict";var r=n(5),i=n(20);function o(e,t){return 55296==(64512&e.charCodeAt(t))&&(!(t<0||t+1>=e.length)&&56320==(64512&e.charCodeAt(t+1)))}function s(e){return(e>>>24|e>>>8&65280|e<<8&16711680|(255&e)<<24)>>>0}function a(e){return 1===e.length?"0"+e:e}function u(e){return 7===e.length?"0"+e:6===e.length?"00"+e:5===e.length?"000"+e:4===e.length?"0000"+e:3===e.length?"00000"+e:2===e.length?"000000"+e:1===e.length?"0000000"+e:e}t.inherits=i,t.toArray=function(e,t){if(Array.isArray(e))return e.slice();if(!e)return[];var n=[];if("string"==typeof e)if(t){if("hex"===t)for((e=e.replace(/[^a-z0-9]+/gi,"")).length%2!=0&&(e="0"+e),i=0;i<e.length;i+=2)n.push(parseInt(e[i]+e[i+1],16))}else for(var r=0,i=0;i<e.length;i++){var s=e.charCodeAt(i);s<128?n[r++]=s:s<2048?(n[r++]=s>>6|192,n[r++]=63&s|128):o(e,i)?(s=65536+((1023&s)<<10)+(1023&e.charCodeAt(++i)),n[r++]=s>>18|240,n[r++]=s>>12&63|128,n[r++]=s>>6&63|128,n[r++]=63&s|128):(n[r++]=s>>12|224,n[r++]=s>>6&63|128,n[r++]=63&s|128)}else for(i=0;i<e.length;i++)n[i]=0|e[i];return n},t.toHex=function(e){for(var t="",n=0;n<e.length;n++)t+=a(e[n].toString(16));return t},t.htonl=s,t.toHex32=function(e,t){for(var n="",r=0;r<e.length;r++){var i=e[r];"little"===t&&(i=s(i)),n+=u(i.toString(16))}return n},t.zero2=a,t.zero8=u,t.join32=function(e,t,n,i){var o=n-t;r(o%4==0);for(var s=new Array(o/4),a=0,u=t;a<s.length;a++,u+=4){var c;c="big"===i?e[u]<<24|e[u+1]<<16|e[u+2]<<8|e[u+3]:e[u+3]<<24|e[u+2]<<16|e[u+1]<<8|e[u],s[a]=c>>>0}return s},t.split32=function(e,t){for(var n=new Array(4*e.length),r=0,i=0;r<e.length;r++,i+=4){var o=e[r];"big"===t?(n[i]=o>>>24,n[i+1]=o>>>16&255,n[i+2]=o>>>8&255,n[i+3]=255&o):(n[i+3]=o>>>24,n[i+2]=o>>>16&255,n[i+1]=o>>>8&255,n[i]=255&o)}return n},t.rotr32=function(e,t){return e>>>t|e<<32-t},t.rotl32=function(e,t){return e<<t|e>>>32-t},t.sum32=function(e,t){return e+t>>>0},t.sum32_3=function(e,t,n){return e+t+n>>>0},t.sum32_4=function(e,t,n,r){return e+t+n+r>>>0},t.sum32_5=function(e,t,n,r,i){return e+t+n+r+i>>>0},t.sum64=function(e,t,n,r){var i=e[t],o=r+e[t+1]>>>0,s=(o<r?1:0)+n+i;e[t]=s>>>0,e[t+1]=o},t.sum64_hi=function(e,t,n,r){return(t+r>>>0<t?1:0)+e+n>>>0},t.sum64_lo=function(e,t,n,r){return t+r>>>0},t.sum64_4_hi=function(e,t,n,r,i,o,s,a){var u=0,c=t;return u+=(c=c+r>>>0)<t?1:0,u+=(c=c+o>>>0)<o?1:0,e+n+i+s+(u+=(c=c+a>>>0)<a?1:0)>>>0},t.sum64_4_lo=function(e,t,n,r,i,o,s,a){return t+r+o+a>>>0},t.sum64_5_hi=function(e,t,n,r,i,o,s,a,u,c){var f=0,l=t;return f+=(l=l+r>>>0)<t?1:0,f+=(l=l+o>>>0)<o?1:0,f+=(l=l+a>>>0)<a?1:0,e+n+i+s+u+(f+=(l=l+c>>>0)<c?1:0)>>>0},t.sum64_5_lo=function(e,t,n,r,i,o,s,a,u,c){return t+r+o+a+c>>>0},t.rotr64_hi=function(e,t,n){return(t<<32-n|e>>>n)>>>0},t.rotr64_lo=function(e,t,n){return(e<<32-n|t>>>n)>>>0},t.shr64_hi=function(e,t,n){return e>>>n},t.shr64_lo=function(e,t,n){return(e<<32-n|t>>>n)>>>0}},function(e,t){function n(e,t){if(!e)throw new Error(t||"Assertion failed")}e.exports=n,n.equal=function(e,t,n){if(e!=t)throw new Error(n||"Assertion failed: "+e+" != "+t)}},function(e,t){!function(){e.exports=this.wp.i18n}()},function(e,t){e.exports=function(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}},function(e,t){function n(e,t,n,r,i,o,s){try{var a=e[o](s),u=a.value}catch(c){return void n(c)}a.done?t(u):Promise.resolve(u).then(r,i)}e.exports=function(e){return function(){var t=this,r=arguments;return new Promise((function(i,o){var s=e.apply(t,r);function a(e){n(s,i,o,a,u,"next",e)}function u(e){n(s,i,o,a,u,"throw",e)}a(void 0)}))}}},function(e,t){!function(){e.exports=this.wp.domReady}()},function(e,t){!function(){e.exports=this.wp.hooks}()},function(e,t,n){"use strict";var r=n(4),i=n(21),o=n(22),s=n(5),a=r.sum32,u=r.sum32_4,c=r.sum32_5,f=o.ch32,l=o.maj32,h=o.s0_256,p=o.s1_256,d=o.g0_256,v=o.g1_256,g=i.BlockHash,m=[1116352408,1899447441,3049323471,3921009573,961987163,1508970993,2453635748,2870763221,3624381080,310598401,607225278,1426881987,1925078388,2162078206,2614888103,3248222580,3835390401,4022224774,264347078,604807628,770255983,1249150122,1555081692,1996064986,2554220882,2821834349,2952996808,3210313671,3336571891,3584528711,113926993,338241895,666307205,773529912,1294757372,1396182291,1695183700,1986661051,2177026350,2456956037,2730485921,2820302411,3259730800,3345764771,3516065817,3600352804,4094571909,275423344,430227734,506948616,659060556,883997877,958139571,1322822218,1537002063,1747873779,1955562222,2024104815,2227730452,2361852424,2428436474,2756734187,3204031479,3329325298];function y(){if(!(this instanceof y))return new y;g.call(this),this.h=[1779033703,3144134277,1013904242,2773480762,1359893119,2600822924,528734635,1541459225],this.k=m,this.W=new Array(64)}r.inherits(y,g),e.exports=y,y.blockSize=512,y.outSize=256,y.hmacStrength=192,y.padLength=64,y.prototype._update=function(e,t){for(var n=this.W,r=0;r<16;r++)n[r]=e[t+r];for(;r<n.length;r++)n[r]=u(v(n[r-2]),n[r-7],d(n[r-15]),n[r-16]);var i=this.h[0],o=this.h[1],g=this.h[2],m=this.h[3],y=this.h[4],w=this.h[5],C=this.h[6],b=this.h[7];for(s(this.k.length===n.length),r=0;r<n.length;r++){var _=c(b,p(y),f(y,w,C),this.k[r],n[r]),x=a(h(i),l(i,o,g));b=C,C=w,w=y,y=a(m,_),m=g,g=o,o=i,i=a(_,x)}this.h[0]=a(this.h[0],i),this.h[1]=a(this.h[1],o),this.h[2]=a(this.h[2],g),this.h[3]=a(this.h[3],m),this.h[4]=a(this.h[4],y),this.h[5]=a(this.h[5],w),this.h[6]=a(this.h[6],C),this.h[7]=a(this.h[7],b)},y.prototype._digest=function(e){return"hex"===e?r.toHex32(this.h,"big"):r.split32(this.h,"big")}},function(e,t,n){"use strict";var r,i="object"==typeof Reflect?Reflect:null,o=i&&"function"==typeof i.apply?i.apply:function(e,t,n){return Function.prototype.apply.call(e,t,n)};r=i&&"function"==typeof i.ownKeys?i.ownKeys:Object.getOwnPropertySymbols?function(e){return Object.getOwnPropertyNames(e).concat(Object.getOwnPropertySymbols(e))}:function(e){return Object.getOwnPropertyNames(e)};var s=Number.isNaN||function(e){return e!=e};function a(){a.init.call(this)}e.exports=a,a.EventEmitter=a,a.prototype._events=void 0,a.prototype._eventsCount=0,a.prototype._maxListeners=void 0;var u=10;function c(e){if("function"!=typeof e)throw new TypeError('The "listener" argument must be of type Function. Received type '+typeof e)}function f(e){return void 0===e._maxListeners?a.defaultMaxListeners:e._maxListeners}function l(e,t,n,r){var i,o,s,a;if(c(n),void 0===(o=e._events)?(o=e._events=Object.create(null),e._eventsCount=0):(void 0!==o.newListener&&(e.emit("newListener",t,n.listener?n.listener:n),o=e._events),s=o[t]),void 0===s)s=o[t]=n,++e._eventsCount;else if("function"==typeof s?s=o[t]=r?[n,s]:[s,n]:r?s.unshift(n):s.push(n),(i=f(e))>0&&s.length>i&&!s.warned){s.warned=!0;var u=new Error("Possible EventEmitter memory leak detected. "+s.length+" "+String(t)+" listeners added. Use emitter.setMaxListeners() to increase limit");u.name="MaxListenersExceededWarning",u.emitter=e,u.type=t,u.count=s.length,a=u,console&&console.warn&&console.warn(a)}return e}function h(){if(!this.fired)return this.target.removeListener(this.type,this.wrapFn),this.fired=!0,0===arguments.length?this.listener.call(this.target):this.listener.apply(this.target,arguments)}function p(e,t,n){var r={fired:!1,wrapFn:void 0,target:e,type:t,listener:n},i=h.bind(r);return i.listener=n,r.wrapFn=i,i}function d(e,t,n){var r=e._events;if(void 0===r)return[];var i=r[t];return void 0===i?[]:"function"==typeof i?n?[i.listener||i]:[i]:n?function(e){for(var t=new Array(e.length),n=0;n<t.length;++n)t[n]=e[n].listener||e[n];return t}(i):g(i,i.length)}function v(e){var t=this._events;if(void 0!==t){var n=t[e];if("function"==typeof n)return 1;if(void 0!==n)return n.length}return 0}function g(e,t){for(var n=new Array(t),r=0;r<t;++r)n[r]=e[r];return n}Object.defineProperty(a,"defaultMaxListeners",{enumerable:!0,get:function(){return u},set:function(e){if("number"!=typeof e||e<0||s(e))throw new RangeError('The value of "defaultMaxListeners" is out of range. It must be a non-negative number. Received '+e+".");u=e}}),a.init=function(){void 0!==this._events&&this._events!==Object.getPrototypeOf(this)._events||(this._events=Object.create(null),this._eventsCount=0),this._maxListeners=this._maxListeners||void 0},a.prototype.setMaxListeners=function(e){if("number"!=typeof e||e<0||s(e))throw new RangeError('The value of "n" is out of range. It must be a non-negative number. Received '+e+".");return this._maxListeners=e,this},a.prototype.getMaxListeners=function(){return f(this)},a.prototype.emit=function(e){for(var t=[],n=1;n<arguments.length;n++)t.push(arguments[n]);var r="error"===e,i=this._events;if(void 0!==i)r=r&&void 0===i.error;else if(!r)return!1;if(r){var s;if(t.length>0&&(s=t[0]),s instanceof Error)throw s;var a=new Error("Unhandled error."+(s?" ("+s.message+")":""));throw a.context=s,a}var u=i[e];if(void 0===u)return!1;if("function"==typeof u)o(u,this,t);else{var c=u.length,f=g(u,c);for(n=0;n<c;++n)o(f[n],this,t)}return!0},a.prototype.addListener=function(e,t){return l(this,e,t,!1)},a.prototype.on=a.prototype.addListener,a.prototype.prependListener=function(e,t){return l(this,e,t,!0)},a.prototype.once=function(e,t){return c(t),this.on(e,p(this,e,t)),this},a.prototype.prependOnceListener=function(e,t){return c(t),this.prependListener(e,p(this,e,t)),this},a.prototype.removeListener=function(e,t){var n,r,i,o,s;if(c(t),void 0===(r=this._events))return this;if(void 0===(n=r[e]))return this;if(n===t||n.listener===t)0==--this._eventsCount?this._events=Object.create(null):(delete r[e],r.removeListener&&this.emit("removeListener",e,n.listener||t));else if("function"!=typeof n){for(i=-1,o=n.length-1;o>=0;o--)if(n[o]===t||n[o].listener===t){s=n[o].listener,i=o;break}if(i<0)return this;0===i?n.shift():function(e,t){for(;t+1<e.length;t++)e[t]=e[t+1];e.pop()}(n,i),1===n.length&&(r[e]=n[0]),void 0!==r.removeListener&&this.emit("removeListener",e,s||t)}return this},a.prototype.off=a.prototype.removeListener,a.prototype.removeAllListeners=function(e){var t,n,r;if(void 0===(n=this._events))return this;if(void 0===n.removeListener)return 0===arguments.length?(this._events=Object.create(null),this._eventsCount=0):void 0!==n[e]&&(0==--this._eventsCount?this._events=Object.create(null):delete n[e]),this;if(0===arguments.length){var i,o=Object.keys(n);for(r=0;r<o.length;++r)"removeListener"!==(i=o[r])&&this.removeAllListeners(i);return this.removeAllListeners("removeListener"),this._events=Object.create(null),this._eventsCount=0,this}if("function"==typeof(t=n[e]))this.removeListener(e,t);else if(void 0!==t)for(r=t.length-1;r>=0;r--)this.removeListener(e,t[r]);return this},a.prototype.listeners=function(e){return d(this,e,!0)},a.prototype.rawListeners=function(e){return d(this,e,!1)},a.listenerCount=function(e,t){return"function"==typeof e.listenerCount?e.listenerCount(t):v.call(e,t)},a.prototype.listenerCount=v,a.prototype.eventNames=function(){return this._eventsCount>0?r(this._events):[]}},function(e,t,n){var r=n(14);e.exports=function(e){function t(e){for(var t=0,n=0;n<e.length;n++)t=(t<<5)-t+e.charCodeAt(n),t|=0;return i.colors[Math.abs(t)%i.colors.length]}function i(e){var n;function r(){for(var e=arguments.length,t=new Array(e),o=0;o<e;o++)t[o]=arguments[o];if(r.enabled){var s=r,a=Number(new Date),u=a-(n||a);s.diff=u,s.prev=n,s.curr=a,n=a,t[0]=i.coerce(t[0]),"string"!=typeof t[0]&&t.unshift("%O");var c=0;t[0]=t[0].replace(/%([a-zA-Z%])/g,(function(e,n){if("%%"===e)return e;c++;var r=i.formatters[n];if("function"==typeof r){var o=t[c];e=r.call(s,o),t.splice(c,1),c--}return e})),i.formatArgs.call(s,t);var f=s.log||i.log;f.apply(s,t)}}return r.namespace=e,r.enabled=i.enabled(e),r.useColors=i.useColors(),r.color=t(e),r.destroy=o,r.extend=s,"function"==typeof i.init&&i.init(r),i.instances.push(r),r}function o(){var e=i.instances.indexOf(this);return-1!==e&&(i.instances.splice(e,1),!0)}function s(e,t){var n=i(this.namespace+(void 0===t?":":t)+e);return n.log=this.log,n}function a(e){return e.toString().substring(2,e.toString().length-2).replace(/\.\*\?$/,"*")}return i.debug=i,i.default=i,i.coerce=function(e){if(e instanceof Error)return e.stack||e.message;return e},i.disable=function(){var e=[].concat(r(i.names.map(a)),r(i.skips.map(a).map((function(e){return"-"+e})))).join(",");return i.enable(""),e},i.enable=function(e){var t;i.save(e),i.names=[],i.skips=[];var n=("string"==typeof e?e:"").split(/[\s,]+/),r=n.length;for(t=0;t<r;t++)n[t]&&("-"===(e=n[t].replace(/\*/g,".*?"))[0]?i.skips.push(new RegExp("^"+e.substr(1)+"$")):i.names.push(new RegExp("^"+e+"$")));for(t=0;t<i.instances.length;t++){var o=i.instances[t];o.enabled=i.enabled(o.namespace)}},i.enabled=function(e){if("*"===e[e.length-1])return!0;var t,n;for(t=0,n=i.skips.length;t<n;t++)if(i.skips[t].test(e))return!1;for(t=0,n=i.names.length;t<n;t++)if(i.names[t].test(e))return!0;return!1},i.humanize=n(19),Object.keys(e).forEach((function(t){i[t]=e[t]})),i.instances=[],i.names=[],i.skips=[],i.formatters={},i.selectColor=t,i.enable(i.load()),i}},function(e,t,n){var r=n(15),i=n(16),o=n(17),s=n(18);e.exports=function(e){return r(e)||i(e)||o(e)||s()}},function(e,t,n){var r=n(7);e.exports=function(e){if(Array.isArray(e))return r(e)}},function(e,t){e.exports=function(e){if("undefined"!=typeof Symbol&&Symbol.iterator in Object(e))return Array.from(e)}},function(e,t,n){var r=n(7);e.exports=function(e,t){if(e){if("string"==typeof e)return r(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?r(e,t):void 0}}},function(e,t){e.exports=function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}},function(e,t){var n=1e3,r=60*n,i=60*r,o=24*i,s=7*o,a=365.25*o;function u(e,t,n,r){var i=t>=1.5*n;return Math.round(e/n)+" "+r+(i?"s":"")}e.exports=function(e,t){t=t||{};var c=typeof e;if("string"===c&&e.length>0)return function(e){if((e=String(e)).length>100)return;var t=/^(-?(?:\d+)?\.?\d+) *(milliseconds?|msecs?|ms|seconds?|secs?|s|minutes?|mins?|m|hours?|hrs?|h|days?|d|weeks?|w|years?|yrs?|y)?$/i.exec(e);if(!t)return;var u=parseFloat(t[1]);switch((t[2]||"ms").toLowerCase()){case"years":case"year":case"yrs":case"yr":case"y":return u*a;case"weeks":case"week":case"w":return u*s;case"days":case"day":case"d":return u*o;case"hours":case"hour":case"hrs":case"hr":case"h":return u*i;case"minutes":case"minute":case"mins":case"min":case"m":return u*r;case"seconds":case"second":case"secs":case"sec":case"s":return u*n;case"milliseconds":case"millisecond":case"msecs":case"msec":case"ms":return u;default:return}}(e);if("number"===c&&isFinite(e))return t.long?function(e){var t=Math.abs(e);if(t>=o)return u(e,t,o,"day");if(t>=i)return u(e,t,i,"hour");if(t>=r)return u(e,t,r,"minute");if(t>=n)return u(e,t,n,"second");return e+" ms"}(e):function(e){var t=Math.abs(e);if(t>=o)return Math.round(e/o)+"d";if(t>=i)return Math.round(e/i)+"h";if(t>=r)return Math.round(e/r)+"m";if(t>=n)return Math.round(e/n)+"s";return e+"ms"}(e);throw new Error("val is not a non-empty string or a valid number. val="+JSON.stringify(e))}},function(e,t){"function"==typeof Object.create?e.exports=function(e,t){t&&(e.super_=t,e.prototype=Object.create(t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}))}:e.exports=function(e,t){if(t){e.super_=t;var n=function(){};n.prototype=t.prototype,e.prototype=new n,e.prototype.constructor=e}}},function(e,t,n){"use strict";var r=n(4),i=n(5);function o(){this.pending=null,this.pendingTotal=0,this.blockSize=this.constructor.blockSize,this.outSize=this.constructor.outSize,this.hmacStrength=this.constructor.hmacStrength,this.padLength=this.constructor.padLength/8,this.endian="big",this._delta8=this.blockSize/8,this._delta32=this.blockSize/32}t.BlockHash=o,o.prototype.update=function(e,t){if(e=r.toArray(e,t),this.pending?this.pending=this.pending.concat(e):this.pending=e,this.pendingTotal+=e.length,this.pending.length>=this._delta8){var n=(e=this.pending).length%this._delta8;this.pending=e.slice(e.length-n,e.length),0===this.pending.length&&(this.pending=null),e=r.join32(e,0,e.length-n,this.endian);for(var i=0;i<e.length;i+=this._delta32)this._update(e,i,i+this._delta32)}return this},o.prototype.digest=function(e){return this.update(this._pad()),i(null===this.pending),this._digest(e)},o.prototype._pad=function(){var e=this.pendingTotal,t=this._delta8,n=t-(e+this.padLength)%t,r=new Array(n+this.padLength);r[0]=128;for(var i=1;i<n;i++)r[i]=0;if(e<<=3,"big"===this.endian){for(var o=8;o<this.padLength;o++)r[i++]=0;r[i++]=0,r[i++]=0,r[i++]=0,r[i++]=0,r[i++]=e>>>24&255,r[i++]=e>>>16&255,r[i++]=e>>>8&255,r[i++]=255&e}else for(r[i++]=255&e,r[i++]=e>>>8&255,r[i++]=e>>>16&255,r[i++]=e>>>24&255,r[i++]=0,r[i++]=0,r[i++]=0,r[i++]=0,o=8;o<this.padLength;o++)r[i++]=0;return r}},function(e,t,n){"use strict";var r=n(4).rotr32;function i(e,t,n){return e&t^~e&n}function o(e,t,n){return e&t^e&n^t&n}function s(e,t,n){return e^t^n}t.ft_1=function(e,t,n,r){return 0===e?i(t,n,r):1===e||3===e?s(t,n,r):2===e?o(t,n,r):void 0},t.ch32=i,t.maj32=o,t.p32=s,t.s0_256=function(e){return r(e,2)^r(e,13)^r(e,22)},t.s1_256=function(e){return r(e,6)^r(e,11)^r(e,25)},t.g0_256=function(e){return r(e,7)^r(e,18)^e>>>3},t.g1_256=function(e){return r(e,17)^r(e,19)^e>>>10}},function(e,t){!function(){e.exports=this["a8c-fse-common-data-stores"]}()},function(e,t){!function(){e.exports=this.wp.editor}()},function(e,t,n){},function(e,t,n){"use strict";n.r(t);var r=n(8),i=n.n(r),o=n(6),s=n(9),a=n.n(s),u=n(10),c=n(2),f=n(0),l=n.n(f),h=l()("calypso:analytics");n(11);"undefined"!=typeof window&&window.addEventListener("popstate",(function(){null}));var p=function(){return(p=Object.assign||function(e){for(var t,n=1,r=arguments.length;n<r;n++)for(var i in t=arguments[n])Object.prototype.hasOwnProperty.call(t,i)&&(e[i]=t[i]);return e}).apply(this,arguments)};var d=n(1),v=(n(3),n(12)),g=l()("lib/load-script/callback-handler"),m=new Map;function y(){return m}function w(e){return y().has(e)}function C(e,t){var n=y();w(e)?(g('Adding a callback for an existing script from "'.concat(e,'"')),n.get(e).add(t)):(g('Adding a callback for a new script from "'.concat(e,'"')),n.set(e,new Set([t])))}function b(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:null,n=y(),r=n.get(e);if(r){var i='Executing callbacks for "'.concat(e,'"')+(null===t?" with success":' with error "'.concat(t,'"'));g(i),r.forEach((function(e){"function"==typeof e&&e(t)})),n.delete(e)}}function _(){var e=this.getAttribute("src");g('Handling successful request for "'.concat(e,'"')),b(e),this.onload=null}function x(){var e=this.getAttribute("src");g('Handling failed request for "'.concat(e,'"')),b(e,new Error('Failed to load script "'.concat(e,'"'))),this.onerror=null}var F=l()("lib/load-script/dom-operations");l()("package/load-script");function S(e,t){var n;if(!w(e)&&(n=function(e){F('Creating script element for "'.concat(e,'"'));var t=document.createElement("script");return t.src=e,t.type="text/javascript",t.async=!0,t.onload=_,t.onerror=x,t}(e),F("Attaching element to head"),document.head.appendChild(n)),"function"!=typeof t)return new Promise((function(t,n){C(e,(function(e){null===e?t():n(e)}))}));C(e,t)}var L,E=["a8c_cookie_banner_ok","wcadmin_storeprofiler_create_jetpack_account","wcadmin_storeprofiler_connect_store","wcadmin_storeprofiler_login_jetpack_account","wcadmin_storeprofiler_payment_login","wcadmin_storeprofiler_payment_create_account"];Promise.resolve();function O(e){"undefined"!=typeof window&&(window._tkq=window._tkq||[],window._tkq.push(e))}"undefined"!=typeof document&&S("//stats.wp.com/w.js?61");var j=new v.EventEmitter;function A(e,t){if(h('Record event "%s" called with props %o',e,t=t||{}),e.startsWith("calypso_")||Object(d.includes)(E,e)){if(L){var n=L(t);t=p(p({},t),n)}t=Object(d.omitBy)(t,d.isUndefined),h('Recording event "%s" with actual props %o',e,t),O(["recordEvent",e,t]),j.emit("record-event",e,t)}else h('- Event name must be prefixed by "calypso_" or added to `EVENT_NAME_EXCEPTIONS`')}"undefined"!=typeof crypto&&crypto.getRandomValues&&crypto.getRandomValues.bind(crypto)||"undefined"!=typeof msCrypto&&"function"==typeof msCrypto.getRandomValues&&msCrypto.getRandomValues.bind(msCrypto),new Uint8Array(16);for(var k=[],M=0;M<256;++M)k[M]=(M+256).toString(16).substr(1);n(23),n(24),n(25);a()((function(){P(),Object(u.addAction)("setGutenboardingStatus","a8c-gutenboarding",P)}));var T=!1;function P(){var e,t,n,r;if(!T&&(null===(e=window)||void 0===e||null===(t=e.calypsoifyGutenberg)||void 0===t?void 0:t.isGutenboarding)&&(null===(n=window)||void 0===n||null===(r=n.calypsoifyGutenberg)||void 0===r?void 0:r.frankenflowUrl)){T=!0;var s=setInterval((function(){var e,t,n,r,a,u,f=document.querySelector(".edit-post-header__settings");if(f){clearInterval(s);var l=window.innerWidth<768,h=null===(e=window)||void 0===e||null===(t=e.calypsoifyGutenberg)||void 0===t?void 0:t.isNewLaunch,p=null===(n=window)||void 0===n||null===(r=n.calypsoifyGutenberg)||void 0===r?void 0:r.isExperimental,d=null===(a=window)||void 0===a||null===(u=a.calypsoifyGutenberg)||void 0===u?void 0:u.frankenflowUrl,v=l?Object(o.__)("Launch","full-site-editing"):Object(o.__)("Complete setup","full-site-editing"),g=function(){var e=i()(regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,Object(c.dispatch)("core/editor").savePost();case 2:window.top.location.href=d;case 3:case"end":return e.stop()}}),e)})));return function(){return e.apply(this,arguments)}}();document.querySelector("body").classList.add("editor-gutenberg-launch__fse-overrides");var m=f.querySelector(".editor-post-publish-button__button"),y=document.createElement("a");y.href=d,y.target="_top",y.className="editor-gutenberg-launch__launch-button components-button is-primary";var w=document.createTextNode(v);y.appendChild(w),y.addEventListener("click",(function(e){e.preventDefault();var t=h&&!l;A("calypso_newsite_editor_launch_click",{is_new_flow:t,is_experimental:p}),t?(p&&Object(c.dispatch)("automattic/launch").enableExperimental(),Object(c.dispatch)("automattic/launch").openSidebar(),setTimeout((function(){Object(c.dispatch)("core/editor").savePost()}),1e3)):g()})),f.prepend(y),m&&f.prepend(m)}}))}}}]));
