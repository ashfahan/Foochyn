(self.AMP=self.AMP||[]).push({n:"amp-mustache",v:"2001141706210",f:(function(AMP,_){
function fa(a){var b=0;return function(){return b<a.length?{done:!1,value:a[b++]}:{done:!0}}}var ha="function"==typeof Object.defineProperties?Object.defineProperty:function(a,b,c){a!=Array.prototype&&a!=Object.prototype&&(a[b]=c.value)},p=function(a){return"undefined"!=typeof window&&window===a?a:"undefined"!=typeof global&&null!=global?global:a}(this);function z(){z=function(){};p.Symbol||(p.Symbol=ia)}function ja(a,b){this.G=a;ha(this,"description",{configurable:!0,writable:!0,value:b})}
ja.prototype.toString=function(){return this.G};var ia=function(){function a(c){if(this instanceof a)throw new TypeError("Symbol is not a constructor");return new ja("jscomp_symbol_"+(c||"")+"_"+b++,c)}var b=0;return a}();function ka(){z();var a=p.Symbol.iterator;a||(a=p.Symbol.iterator=p.Symbol("Symbol.iterator"));"function"!=typeof Array.prototype[a]&&ha(Array.prototype,a,{configurable:!0,writable:!0,value:function(){return la(fa(this))}});ka=function(){}}
function la(a){ka();var b={next:a};b[p.Symbol.iterator]=function(){return this};return b}var ma="function"==typeof Object.create?Object.create:function(a){function b(){}b.prototype=a;return new b},na;if("function"==typeof Object.setPrototypeOf)na=Object.setPrototypeOf;else{var ua;a:{var va={a:!0},wa={};try{wa.__proto__=va;ua=wa.a;break a}catch(a){}ua=!1}na=ua?function(a,b){a.__proto__=b;if(a.__proto__!==b)throw new TypeError(a+" is not extensible");return a}:null}var xa=na;function ya(){var a,b=Object.create(null);a&&Object.assign(b,a);return b}function C(a){return a||{}};function za(a){var b=["\u26a14email","amp4email"],c=a.documentElement,d=b.some(function(a){return c.hasAttribute(a)});return d};function Aa(a,b){b=void 0===b?"":b;try{return decodeURIComponent(a)}catch(c){return b}};var Ba=/(?:^[#?]?|&)([^=&]+)(?:=([^&]*))?/g;var E=self.AMP_CONFIG||{},Ca={thirdParty:E.thirdPartyUrl||"https://3p.ampproject.net",thirdPartyFrameHost:E.thirdPartyFrameHost||"ampproject.net",thirdPartyFrameRegex:("string"==typeof E.thirdPartyFrameRegex?new RegExp(E.thirdPartyFrameRegex):E.thirdPartyFrameRegex)||/^d-\d+\.ampproject\.net$/,cdn:E.cdnUrl||"https://cdn.ampproject.org",cdnProxyRegex:("string"==typeof E.cdnProxyRegex?new RegExp(E.cdnProxyRegex):E.cdnProxyRegex)||/^https:\/\/([a-zA-Z0-9_-]+\.)?cdn\.ampproject\.org$/,localhostRegex:/^https?:\/\/localhost(:\d+)?$/,
errorReporting:E.errorReportingUrl||"https://amp-error-reporting.appspot.com/r",localDev:E.localDev||!1,trustedViewerHosts:[/(^|\.)google\.(com?|[a-z]{2}|com?\.[a-z]{2}|cat)$/,/(^|\.)gmail\.(com|dev)$/]};self.__AMP_LOG=self.__AMP_LOG||{user:null,dev:null,userForEmbed:null};var Da=self.__AMP_LOG;function Ea(){if(!Da.user)throw Error("failed to call initLogConstructor");return Da.user}function F(a,b,c){Ea().assert(a,b,c,void 0,void 0,void 0,void 0,void 0,void 0,void 0,void 0)};function Fa(){var a=100;this.H=a;this.o=this.w=0;this.l=Object.create(null)}Fa.prototype.has=function(a){return!!this.l[a]};Fa.prototype.get=function(a){var b=this.l[a];if(b)return b.access=++this.o,b.payload};
Fa.prototype.put=function(a,b){this.has(a)||this.w++;this.l[a]={payload:b,access:this.o};if(!(this.w<=this.H)){if(Da.dev)a=Da.dev;else throw Error("failed to call initLogConstructor");a.warn("lru-cache","Trimming LRU cache");a=this.l;var c=this.o+1,d;for(d in a){var e=a[d].access;if(e<c){c=e;var f=d}}void 0!==f&&(delete a[f],this.w--)}};function I(a,b){return b.length>a.length?!1:0==a.lastIndexOf(b,0)};var Ga=C({c:!0,v:!0,a:!0,ad:!0,action:!0}),Ha,Sa,Ta=/[?&]amp_js[^&]*/,Ua=/[?&]amp_gsa[^&]*/,Va=/[?&]amp_r[^&]*/,Wa=/[?&]amp_kit[^&]*/,Xa=/[?&]usqp[^&]*/;
function L(a){var b;Ha||(Ha=self.document.createElement("a"),Sa=self.__AMP_URL_CACHE||(self.__AMP_URL_CACHE=new Fa));var c=b?null:Sa,d=Ha;if(c&&c.has(a))a=c.get(a);else{d.href=a;d.protocol||(d.href=d.href);var e={href:d.href,protocol:d.protocol,host:d.host,hostname:d.hostname,port:"0"==d.port?"":d.port,pathname:d.pathname,search:d.search,hash:d.hash,origin:null};"/"!==e.pathname[0]&&(e.pathname="/"+e.pathname);if("http:"==e.protocol&&80==e.port||"https:"==e.protocol&&443==e.port)e.port="",e.host=
e.hostname;e.origin=d.origin&&"null"!=d.origin?d.origin:"data:"!=e.protocol&&e.host?e.protocol+"//"+e.host:e.href;c&&c.put(a,e);a=e}return a}function Ya(a){"string"==typeof a&&(a=L(a));return Ca.cdnProxyRegex.test(a.origin)}
function Za(a){"string"==typeof a&&(a=L(a));if(!Ya(a))return a.href;var b=a.pathname.split("/");F(Ga[b[1]],"Unknown path prefix in url %s",a.href);var c=b[2],d="s"==c?"https://"+decodeURIComponent(b[3]):"http://"+decodeURIComponent(c);F(0<d.indexOf("."),"Expected a . in origin %s",d);b.splice(1,"s"==c?3:2);b=d+b.join("/");d=(d=a.search)&&"?"!=d?(d=d.replace(Ta,"").replace(Ua,"").replace(Va,"").replace(Wa,"").replace(Xa,"").replace(/^[?&]/,""))?"?"+d:"":"";return b+d+(a.hash||"")}
function $a(a,b){"string"==typeof b&&(b=L(b));if("function"==typeof URL)var c=(new URL(a,b.href)).toString();else{c=a;var d=b;"string"==typeof d&&(d=L(d));c=c.replace(/\\/g,"/");var e=L(c);c=I(c.toLowerCase(),e.protocol)?e.href:I(c,"//")?d.protocol+c:I(c,"/")?d.origin+c:d.origin+d.pathname.replace(/\/[^/]*$/,"/")+c}return c}
function ab(a){var b=L(a);var c=b.search,d=Object.create(null);if(c)for(var e;e=Ba.exec(c);){var f=Aa(e[1],e[1]);e=e[2]?Aa(e[2].replace(/\+/g," "),e[2]):"";d[f]=e}F(!("__amp_source_origin"in d),"Source origin is not allowed in %s",a)};var bb=/(\S+)(?:\s+(?:(-?\d+(?:\.\d+)?)([a-zA-Z]*)))?\s*(?:,|$)/g;function cb(a){for(var b=[],c;c=bb.exec(a);){var d=c[1],e=void 0,f=void 0;if(c[2]){var t=c[3].toLowerCase();if("w"==t)e=parseInt(c[2],10);else if("x"==t)f=parseFloat(c[2]);else continue}else f=1;b.push({url:d,width:e,dpr:f})}return new db(b)}
function db(a){F(0<a.length,"Srcset must have at least one source");this.j=a;for(var b=!1,c=!1,d=0;d<a.length;d++){var e=a[d];b=b||!!e.width;c=c||!!e.dpr}F(!!(b^c),"Srcset must have width or dpr sources, but not both");a.sort(b?eb:fb);this.F=b}
db.prototype.select=function(a,b){if(this.F){b*=a;a=this.j;for(var c=0,d=Infinity,e=Infinity,f=0;f<a.length;f++){var t=a[f].width,q=Math.abs(t-b);if(q<=1.1*d||1.2<b/e)c=f,d=q,e=t;else break}b=c}else{a=this.j;c=0;d=Infinity;for(e=0;e<a.length;e++)if(f=Math.abs(a[e].dpr-b),f<=d)c=e,d=f;else break;b=c}return this.j[b].url};db.prototype.getUrls=function(){return this.j.map(function(a){return a.url})};
db.prototype.stringify=function(a){for(var b=[],c=this.j,d=0;d<c.length;d++){var e=c[d],f=e.url;a&&(f=a(f));f=this.F?f+(" "+e.width+"w"):f+(" "+e.dpr+"x");b.push(f)}return b.join(", ")};function eb(a,b){F(a.width!=b.width,"Duplicate width: %s",a.width);return a.width-b.width}function fb(a,b){F(a.dpr!=b.dpr,"Duplicate dpr: %s",a.dpr);return a.dpr-b.dpr};function gb(a,b,c){return hb(b)?ib(a,b,c):c}function hb(a){return"src"==a||"href"==a||"xlink:href"==a||"srcset"==a}function ib(a,b,c){var d=self.location;ab(c);var e=Ya(d),f=L(Za(d));if("href"==b&&!I(c,"#"))return $a(c,f);if("src"==b)return"amp-img"==a?jb(c,f,e):$a(c,f);if("srcset"==b){try{var t=cb(c)}catch(q){return Ea().error("URL-REWRITE","Failed to parse srcset: ",q),c}return t.stringify(function(a){return jb(a,f,e)})}return c}
function jb(a,b,c){a=L($a(a,b));return"data:"==a.protocol||Ya(a)||!c?a.href:Ca.cdn+"/i/"+("https:"==a.protocol?"s/":"")+encodeURIComponent(a.host)+a.pathname+(a.search||"")+(a.hash||"")};var kb={"AMP-IMG":["src","srcset","layout","width","height"]};function lb(a,b){var c=I(a.tagName,"AMP-"),d=a.hasAttribute("i-amphtml-binding");if(!d&&kb[a.tagName])a.setAttribute("i-amphtml-ignore","");else if(d||c)a.hasAttribute("i-amphtml-key")||a.setAttribute("i-amphtml-key",b())}
var mb={applet:!0,audio:!0,base:!0,embed:!0,frame:!0,frameset:!0,iframe:!0,img:!0,link:!0,meta:!0,object:!0,style:!0,video:!0},nb={"amp-accordion":!0,"amp-anim":!0,"amp-bind-macro":!0,"amp-carousel":!0,"amp-fit-text":!0,"amp-img":!0,"amp-layout":!0,"amp-selector":!0,"amp-sidebar":!0,"amp-timeago":!0},ob="a b br caption colgroup code del div em hr i ins li mark ol p q s small span strong sub sup table tbody time td th thead tfoot tr u ul".split(" "),pb="amp-fx fallback heights layout min-font-size max-font-size on option placeholder submitting submit-success submit-error validation-for verify-error visible-when-invalid href style text subscriptions-action subscriptions-actions subscriptions-decorate subscriptions-dialog subscriptions-display subscriptions-section subscriptions-service amp-nested-submenu amp-nested-submenu-open amp-nested-submenu-close itemprop".split(" "),
qb={a:["rel","target"],div:["template"],form:["action-xhr","verify-xhr","custom-validation-reporting","target"],input:["mask-output"],template:["type"],textarea:["autoexpand"]},rb=["_top","_blank"],zb=/^(?:\w+script|data|blob):/i,Ab=/^(?:blob):/i,Bb=/[\u0000-\u0020\u00A0\u1680\u180E\u2000-\u2029\u205f\u3000]/g,Cb=Object.freeze(C({input:{type:/(?:image|button)/i}})),Db=Object.freeze(C({input:{type:/(?:button|file|image|password)/i}})),Eb=Object.freeze("form formaction formmethod formtarget formnovalidate formenctype".split(" ")),
Fb=Object.freeze(C({input:Eb,textarea:Eb,select:Eb})),Gb=Object.freeze(C({"amp-anim":["controls"],form:["name"]})),Hb=/!important|position\s*:\s*fixed|position\s*:\s*sticky/i;
function Ib(a,b,c,d){var e=!0;e=void 0===e?!1:e;var f=c?c.replace(Bb,""):"";if(!e){if(I(b,"on")&&"on"!=b)return!1;var t=f.toLowerCase();if(0<=t.indexOf("<script")||0<=t.indexOf("\x3c/script")||zb.test(f))return!1}if(Ab.test(f))return!1;if("style"==b)return!Hb.test(c);if("class"==b&&c&&/(^|\W)i-amphtml-/i.test(c)||hb(b)&&/__amp_source_origin/.test(c))return!1;var q=za(d),r=Object.assign(ya(),Fb,q?Gb:{})[a];if(r&&-1!=r.indexOf(b))return!1;var w=Object.assign(ya(),Cb,q?Db:{})[a];if(w){var y=w[b];if(y&&
-1!=c.search(y))return!1}return!0};/*
 https://mths.be/cssescape v1.5.1 by @mathias | MIT license */
function Jb(a,b){for(var c=a.length,d=0;d<c;d++)b(a[d],d)};var M=Object.freeze||function(a){return a},Kb=M("a abbr acronym address area article aside audio b bdi bdo big blink blockquote body br button canvas caption center cite code col colgroup content data datalist dd decorator del details dfn dir div dl dt element em fieldset figcaption figure font footer form h1 h2 h3 h4 h5 h6 head header hgroup hr html i img input ins kbd label legend li main map mark marquee menu menuitem meter nav nobr ol optgroup option output p pre progress q rp rt ruby s samp section select shadow small source spacer span strike strong style sub summary sup table tbody td template textarea tfoot th thead time tr track tt u ul var video wbr".split(" ")),
Lb=M("svg a altglyph altglyphdef altglyphitem animatecolor animatemotion animatetransform audio canvas circle clippath defs desc ellipse filter font g glyph glyphref hkern image line lineargradient marker mask metadata mpath path pattern polygon polyline radialgradient rect stop style switch symbol text textpath title tref tspan video view vkern".split(" ")),Mb=M("feBlend feColorMatrix feComponentTransfer feComposite feConvolveMatrix feDiffuseLighting feDisplacementMap feDistantLight feFlood feFuncA feFuncB feFuncG feFuncR feGaussianBlur feMerge feMergeNode feMorphology feOffset fePointLight feSpecularLighting feSpotLight feTile feTurbulence".split(" ")),
Nb=M("math menclose merror mfenced mfrac mglyph mi mlabeledtr mmultiscripts mn mo mover mpadded mphantom mroot mrow ms mspace msqrt mstyle msub msup msubsup mtable mtd mtext mtr munder munderover".split(" ")),Ob=M(["#text"]),Pb=Object.freeze||function(a){return a},Qb=Pb("accept action align alt autocomplete background bgcolor border cellpadding cellspacing checked cite class clear color cols colspan controls coords crossorigin datetime default dir disabled download enctype face for headers height hidden high href hreflang id integrity ismap label lang list loop low max maxlength media method min minlength multiple name noshade novalidate nowrap open optimum pattern placeholder poster preload pubdate radiogroup readonly rel required rev reversed role rows rowspan spellcheck scope selected shape size sizes span srclang start src srcset step style summary tabindex title type usemap valign value width xmlns".split(" ")),
Rb=Pb("accent-height accumulate additive alignment-baseline ascent attributename attributetype azimuth basefrequency baseline-shift begin bias by class clip clip-path clip-rule color color-interpolation color-interpolation-filters color-profile color-rendering cx cy d dx dy diffuseconstant direction display divisor dur edgemode elevation end fill fill-opacity fill-rule filter filterunits flood-color flood-opacity font-family font-size font-size-adjust font-stretch font-style font-variant font-weight fx fy g1 g2 glyph-name glyphref gradientunits gradienttransform height href id image-rendering in in2 k k1 k2 k3 k4 kerning keypoints keysplines keytimes lang lengthadjust letter-spacing kernelmatrix kernelunitlength lighting-color local marker-end marker-mid marker-start markerheight markerunits markerwidth maskcontentunits maskunits max mask media method mode min name numoctaves offset operator opacity order orient orientation origin overflow paint-order path pathlength patterncontentunits patterntransform patternunits points preservealpha preserveaspectratio primitiveunits r rx ry radius refx refy repeatcount repeatdur restart result rotate scale seed shape-rendering specularconstant specularexponent spreadmethod stddeviation stitchtiles stop-color stop-opacity stroke-dasharray stroke-dashoffset stroke-linecap stroke-linejoin stroke-miterlimit stroke-opacity stroke stroke-width style surfacescale tabindex targetx targety transform text-anchor text-decoration text-rendering textlength type u1 u2 unicode values viewbox visibility version vert-adv-y vert-origin-x vert-origin-y width word-spacing wrap writing-mode xchannelselector ychannelselector x x1 x2 xmlns y y1 y2 z zoomandpan".split(" ")),
Sb=Pb("accent accentunder align bevelled close columnsalign columnlines columnspan denomalign depth dir display displaystyle encoding fence frame height href id largeop length linethickness lspace lquote mathbackground mathcolor mathsize mathvariant maxsize minsize movablelimits notation numalign open rowalign rowlines rowspacing rowspan rspace rquote scriptlevel scriptminsize scriptsizemultiplier selection separator separators stretchy subscriptshift supscriptshift symmetric voffset width xmlns".split(" ")),
Tb=Pb(["xlink:href","xml:id","xlink:title","xml:space","xmlns:xlink"]),Ub=Object.hasOwnProperty,Vb=Object.setPrototypeOf,Wb=("undefined"!==typeof Reflect&&Reflect).apply;Wb||(Wb=function(a,b,c){return a.apply(b,c)});function N(a,b){Vb&&Vb(a,null);for(var c=b.length;c--;){var d=b[c];if("string"===typeof d){var e=d.toLowerCase();e!==d&&(Object.isFrozen(b)||(b[c]=e),d=e)}a[d]=!0}return a}function Xb(a){var b={},c=void 0;for(c in a)Wb(Ub,a,[c])&&(b[c]=a[c]);return b}
var Q=Object.seal||function(a){return a},Yb=Q(/\{\{[\s\S]*|[\s\S]*\}\}/gm),Zb=Q(/<%[\s\S]*|[\s\S]*%>/gm),$b=Q(/^data-[\-\w.\u00B7-\uFFFF]/),ac=Q(/^aria-[\-\w]+$/),bc=Q(/^(?:(?:(?:f|ht)tps?|mailto|tel|callto|cid|xmpp):|[^a-z]|[a-z+.\-]+(?:[^a-z+.\-:]|$))/i),cc=Q(/^(?:\w+script|data):/i),dc=Q(/[\u0000-\u0020\u00A0\u1680\u180E\u2000-\u2029\u205f\u3000]/g);z();z();ka();
var R="function"===typeof Symbol&&"symbol"===typeof Symbol.iterator?function(a){return typeof a}:function(a){z();z();z();return a&&"function"===typeof Symbol&&a.constructor===Symbol&&a!==Symbol.prototype?"symbol":typeof a};function X(a){if(Array.isArray(a)){for(var b=0,c=Array(a.length);b<a.length;b++)c[b]=a[b];return c}return Array.from(a)}var ec=("undefined"!==typeof Reflect&&Reflect).apply,fc=Array.prototype.slice,gc=Object.freeze;ec||(ec=function(a,b,c){return a.apply(b,c)});
function hc(a,b){if("object"!==("undefined"===typeof a?"undefined":R(a))||"function"!==typeof a.createPolicy)return null;var c=null,d="data-tt-policy-suffix";b.currentScript&&b.currentScript.hasAttribute(d)&&(c=b.currentScript.getAttribute(d));var e="dompurify"+(c?"#"+c:"");try{return a.createPolicy(e,{createHTML:function(a){return a}})}catch(f){return console.warn("TrustedTypes policy "+e+" could not be created."),null}}
function ic(){function a(a){var c,oa=void 0,h;d("beforeSanitizeAttributes",a,null);var e=a.attributes;if(e){var l={attrName:"",attrValue:"",keepAttr:!0,allowedAttributes:m};for(h=e.length;h--;){var ca=c=e[h],g=ca.name,D=ca.namespaceURI;c=c.value.trim();var f=g.toLowerCase();l.attrName=f;l.attrValue=c;l.keepAttr=!0;d("uponSanitizeAttribute",a,l);c=l.attrValue;if("name"===f&&"IMG"===a.nodeName&&e.id)oa=e.id,e=ec(fc,e,[]),r("id",a),r(g,a),e.indexOf(oa)>h&&a.setAttribute("id",oa.value);else if("INPUT"!==
a.nodeName||"type"!==f||"file"!==c||!l.keepAttr||!m[f]&&O[f])"id"===g&&a.setAttribute(g,""),r(g,a);else continue;if(l.keepAttr)if(/svg|math/i.test(a.namespaceURI)&&(new RegExp("</("+Object.keys(tb).join("|")+")","i")).test(c))r(g,a);else{S&&(c=c.replace(Yb," "),c=c.replace(Zb," "));var A=a.nodeName.toLowerCase();if(b(A,f,c))try{D?a.setAttributeNS(D,g,c):a.setAttribute(g,c),k.removed.pop()}catch(Gc){}}}d("afterSanitizeAttributes",a,null)}}function b(a,b,c){if(ub&&("id"===b||"name"===b)&&(c in x||c in
uc))return!1;if(!Ia||!$b.test(b))if(!H||!ac.test(b))if(!m[b]||O[b]||!(Ja[b]||Ka.test(c.replace(dc,""))||("src"===b||"xlink:href"===b||"href"===b)&&"script"!==a&&0===c.indexOf("data:")&&vc[a]||vb&&!cc.test(c.replace(dc,"")))&&c)return!1;return!0}function c(a){d("beforeSanitizeElements",a,null);if(f(a))return w(a),!0;var b=a.nodeName.toLowerCase();d("uponSanitizeElement",a,{tagName:b,allowedTags:v});if(("svg"===b||"math"===b)&&0!==a.querySelectorAll("p, br").length)return w(a),!0;if(!v[b]||pa[b]){if(La&&
!tb[b]&&"function"===typeof a.insertAdjacentHTML)try{var c=a.innerHTML;a.insertAdjacentHTML("AfterEnd",l?l.createHTML(c):c)}catch(Ec){}w(a);return!0}if("noscript"===b&&/<\/noscript/i.test(a.innerHTML)||"noembed"===b&&/<\/noembed/i.test(a.innerHTML))return w(a),!0;!wb||a.firstElementChild||a.content&&a.content.firstElementChild||!/</g.test(a.textContent)||(k.removed.push({element:a.cloneNode()}),a.innerHTML=a.innerHTML?a.innerHTML.replace(/</g,"&lt;"):a.textContent.replace(/</g,"&lt;"));S&&3===a.nodeType&&
(b=a.textContent,b=b.replace(Yb," "),b=b.replace(Zb," "),a.textContent!==b&&(k.removed.push({element:a.cloneNode()}),a.textContent=b));d("afterSanitizeElements",a,null);return!1}function d(a,b,c){G[a]&&G[a].forEach(function(a){a.call(k,b,c,T)})}function e(a){return"object"===("undefined"===typeof J?"undefined":R(J))?a instanceof J:a&&"object"===("undefined"===typeof a?"undefined":R(a))&&"number"===typeof a.nodeType&&"string"===typeof a.nodeName}function f(a){return a instanceof Ma||a instanceof Na?
!1:"string"===typeof a.nodeName&&"string"===typeof a.textContent&&"function"===typeof a.removeChild&&a.attributes instanceof qa&&"function"===typeof a.removeAttribute&&"function"===typeof a.setAttribute&&"string"===typeof a.namespaceURI?!1:!0}function t(a){return K.call(a.ownerDocument||a,a,U.SHOW_ELEMENT|U.SHOW_COMMENT|U.SHOW_TEXT,function(){return U.FILTER_ACCEPT},!1)}function q(a){var b=void 0,c=void 0;if(Oa)a="<remove></remove>"+a;else{var h=a.match(/^[\s]+/);(c=h&&h[0])&&(a=a.slice(c.length))}if(ra)try{b=
(new aa).parseFromString(a,"text/html")}catch(Fc){}P&&N(pa,["title"]);if(!b||!b.documentElement){var d=b=A.createHTMLDocument("");h=d.body;h.parentNode.removeChild(h.parentNode.firstElementChild);h.outerHTML=l?l.createHTML(a):a}a&&c&&b.body.insertBefore(x.createTextNode(c),b.body.childNodes[0]||null);return wc.call(b,ba?"html":"body")[0]}function r(a,b){try{k.removed.push({attribute:b.getAttributeNode(a),from:b})}catch(sb){k.removed.push({attribute:null,from:b})}b.removeAttribute(a)}function w(a){k.removed.push({element:a});
try{a.parentNode.removeChild(a)}catch(tc){a.outerHTML=ca}}function y(a){T&&T===a||(a&&"object"===("undefined"===typeof a?"undefined":R(a))||(a={}),v="ALLOWED_TAGS"in a?N({},a.ALLOWED_TAGS):u,m="ALLOWED_ATTR"in a?N({},a.ALLOWED_ATTR):B,Ja="ADD_URI_SAFE_ATTR"in a?N(Xb(xb),a.ADD_URI_SAFE_ATTR):xb,pa="FORBID_TAGS"in a?N({},a.FORBID_TAGS):{},O="FORBID_ATTR"in a?N({},a.FORBID_ATTR):{},V="USE_PROFILES"in a?a.USE_PROFILES:!1,H=!1!==a.ALLOW_ARIA_ATTR,Ia=!1!==a.ALLOW_DATA_ATTR,vb=a.ALLOW_UNKNOWN_PROTOCOLS||
!1,wb=a.SAFE_FOR_JQUERY||!1,S=a.SAFE_FOR_TEMPLATES||!1,ba=a.WHOLE_DOCUMENT||!1,da=a.RETURN_DOM||!1,Pa=a.RETURN_DOM_FRAGMENT||!1,yb=a.RETURN_DOM_IMPORT||!1,Qa=a.RETURN_TRUSTED_TYPE||!1,Oa=a.FORCE_BODY||!1,ub=!1!==a.SANITIZE_DOM,La=!1!==a.KEEP_CONTENT,sa=a.IN_PLACE||!1,Ka=a.ALLOWED_URI_REGEXP||Ka,S&&(Ia=!1),Pa&&(da=!0),V&&(v=N({},[].concat(X(Ob))),m=[],!0===V.html&&(N(v,Kb),N(m,Qb)),!0===V.svg&&(N(v,Lb),N(m,Rb),N(m,Tb)),!0===V.svgFilters&&(N(v,Mb),N(m,Rb),N(m,Tb)),!0===V.mathMl&&(N(v,Nb),N(m,Sb),N(m,
Tb))),a.ADD_TAGS&&(v===u&&(v=Xb(v)),N(v,a.ADD_TAGS)),a.ADD_ATTR&&(m===B&&(m=Xb(m)),N(m,a.ADD_ATTR)),a.ADD_URI_SAFE_ATTR&&N(Ja,a.ADD_URI_SAFE_ATTR),La&&(v["#text"]=!0),ba&&N(v,["html","head","body"]),v.table&&(N(v,["tbody"]),delete pa.tbody),gc&&gc(a),T=a)}function k(a){return ic(a)}var g=0<arguments.length&&void 0!==arguments[0]?arguments[0]:"undefined"===typeof window?null:window;k.version="2.0.7";k.removed=[];if(!g||!g.document||9!==g.document.nodeType)return k.isSupported=!1,k;var n=g.document,
ra=!1,P=!1,x=g.document,ta=g.DocumentFragment,J=g.Node,U=g.NodeFilter,W=g.NamedNodeMap,qa=void 0===W?g.NamedNodeMap||g.MozNamedAttrMap:W,Ma=g.Text,Na=g.Comment,aa=g.DOMParser;W=g.TrustedTypes;if("function"===typeof g.HTMLTemplateElement){var h=x.createElement("template");h.content&&h.content.ownerDocument&&(x=h.content.ownerDocument)}var l=hc(W,n),ca=l?l.createHTML(""):"",D=x,A=D.implementation,K=D.createNodeIterator,wc=D.getElementsByTagName,ea=D.createDocumentFragment,xc=n.importNode,G={};k.isSupported=
A&&"undefined"!==typeof A.createHTMLDocument&&9!==x.documentMode;var Ka=bc,v=null,u=N({},[].concat(X(Kb),X(Lb),X(Mb),X(Nb),X(Ob))),m=null,B=N({},[].concat(X(Qb),X(Rb),X(Sb),X(Tb))),pa=null,O=null,H=!0,Ia=!0,vb=!1,wb=!1,S=!1,ba=!1,Ra=!1,Oa=!1,da=!1,Pa=!1,yb=!1,Qa=!1,ub=!0,La=!0,sa=!1,V={},tb=N({},"annotation-xml audio colgroup desc foreignobject head iframe math mi mn mo ms mtext noembed noframes plaintext script style svg template thead title video xmp".split(" ")),vc=N({},["audio","video","img",
"source","image"]),Ja=null,xb=N({},"alt class for id label name pattern placeholder summary title value style xmlns".split(" ")),T=null,uc=x.createElement("form");k.isSupported&&(function(){try{q('<svg><p><textarea><img src="</textarea><img src=x abc=1//">').querySelector("svg img")&&(ra=!0)}catch(oa){}}(),function(){try{var a=q("<x/><title>&lt;/title&gt;&lt;img&gt;");/<\/title/.test(a.querySelector("title").innerHTML)&&(P=!0)}catch(tc){}}());var yc=function sb(b){var h=void 0,e=t(b);for(d("beforeSanitizeShadowDOM",
b,null);h=e.nextNode();)d("uponSanitizeShadowNode",h,null),c(h)||(h.content instanceof ta&&sb(h.content),a(h));d("afterSanitizeShadowDOM",b,null)};k.sanitize=function(b,h){var d=void 0,f=void 0,D=void 0,A=void 0;b||(b="\x3c!--\x3e");if("string"!==typeof b&&!e(b)){if("function"!==typeof b.toString)throw new TypeError("toString is not a function");b=b.toString();if("string"!==typeof b)throw new TypeError("dirty is not a string, aborting");}if(!k.isSupported){if("object"===R(g.toStaticHTML)||"function"===
typeof g.toStaticHTML){if("string"===typeof b)return g.toStaticHTML(b);if(e(b))return g.toStaticHTML(b.outerHTML)}return b}Ra||y(h);k.removed=[];if(!sa)if(b instanceof J)d=q("\x3c!--\x3e"),f=d.ownerDocument.importNode(b,!0),1===f.nodeType&&"BODY"===f.nodeName?d=f:"HTML"===f.nodeName?d=f:d.appendChild(f);else{if(!da&&!S&&!ba&&Qa&&-1===b.indexOf("<"))return l?l.createHTML(b):b;d=q(b);if(!d)return da?null:ca}d&&Oa&&w(d.firstChild);for(var m=t(sa?b:d);h=m.nextNode();)3===h.nodeType&&h===D||c(h)||(h.content instanceof
ta&&yc(h.content),a(h),D=h);D=null;if(sa)return b;if(da){if(Pa)for(A=ea.call(d.ownerDocument);d.firstChild;)A.appendChild(d.firstChild);else A=d;yb&&(A=xc.call(n,A,!0));return A}var K=ba?d.outerHTML:d.innerHTML;S&&(K=K.replace(Yb," "),K=K.replace(Zb," "));return l&&Qa?l.createHTML(K):K};k.setConfig=function(a){y(a);Ra=!0};k.clearConfig=function(){T=null;Ra=!1};k.isValidAttribute=function(a,c,h){T||y({});a=a.toLowerCase();c=c.toLowerCase();return b(a,c,h)};k.addHook=function(a,b){"function"===typeof b&&
(G[a]=G[a]||[],G[a].push(b))};k.removeHook=function(a){G[a]&&G[a].pop()};k.removeHooks=function(a){G[a]&&(G[a]=[])};k.removeAllHooks=function(){G={}};return k}var jc=ic();var kc={script:{attribute:"type",values:["application/json","application/ld+json"]}},lc={USE_PROFILES:{html:!0,svg:!0,svgFilters:!0}};function mc(a){var b={},c=gb;this.m=a;this.I=1;this.h=jc(self);this.A=jc(self);a=Object.assign(b||{},Object.assign({},lc,{ADD_ATTR:pb,ADD_TAGS:["use"],FORBID_TAGS:Object.keys(mb),FORCE_BODY:!0,RETURN_DOM:!0,ALLOW_UNKNOWN_PROTOCOLS:!0}));this.h.setConfig(a);nc(this,this.h,c);oc(this.A)}mc.prototype.purifyHtml=function(a){return this.h.sanitize(a)};
mc.prototype.purifyTagsForTripleMustache=function(a){a=this.A.sanitize(a,{ALLOWED_TAGS:ob,FORCE_BODY:!0,RETURN_DOM_FRAGMENT:!0});var b=this.m.createElement("div");b.appendChild(a);return b.innerHTML};mc.prototype.getAllowedTags=function(){var a={};this.h.addHook("uponSanitizeElement",function(b,d){Object.assign(a,d.allowedTags)});var b=this.m.createElement("p");this.h.sanitize(b);Object.keys(mb).forEach(function(b){a[b]=!1});this.h.removeHook("uponSanitizeElement");return a};
mc.prototype.validateAttributeChange=function(a,b,c){var d=a.nodeName.toLowerCase(),e=kc[d];if(e){var f=e,t=f.attribute;f=f.values;if(t===b&&(null==c||!f.includes(c)))return!1}if("a"===d&&"target"===b&&(null==c||!rb.includes(c)))return!1;if(null==c)return!0;if(pc(b)!==qc)return!1;var q=this.h.isValidAttribute(d,b,c);if(!q){var r=qb[d],w=r&&r.includes(b);if(!w&&!I(d,"amp-"))return!1}a=a.ownerDocument?a.ownerDocument:a;return c&&!Ib(d,b,c,a)?!1:!0};
function nc(a,b,c){function d(b){lb(b,function(){return String(a.I++)});k.forEach(function(a){delete y[a]});k.length=0;"use"===b.nodeName.toLowerCase()&&["href","xlink:href"].forEach(function(a){b.hasAttribute(a)&&!I(b.getAttribute(a),"#")&&(b.parentElement&&b.parentElement.removeChild(b),Ea().error("purifier",'Removed invalid <use>. use[href] must start with "#".'))})}function e(b,d){function e(){y[g]||(y[g]=!0,k.push(g))}var f=b.nodeName.toLowerCase(),g=d.attrName,n=d.attrValue;y=d.allowedAttributes;
if(I(f,"amp-"))e();else{if("a"==f&&"target"==g){var t=n.toLowerCase();n=rb.includes(t)?t:"_top"}var q=qb[f];q&&q.includes(g)&&e()}var r=pc(g);r===rc&&(q=g.substring(1,g.length-1),b.setAttribute("data-amp-bind-"+q,n));r!==qc&&b.setAttribute("i-amphtml-binding","");Ib(f,g,n,a.m)?c&&n&&!I(g,"data-amp-bind-")&&(n=c(f,g,n)):(d.keepAttr=!1,Ea().error("purifier",'Removed invalid attribute %s[%s="%s"].',f,g,n));d.attrValue=n}function f(){w.forEach(function(a){delete r[a]});w.length=0}function t(a,b){var c=
b.tagName;r=b.allowedTags;I(c,"amp-")&&(r[c]=!q||nb[c]);"a"===c&&a.hasAttribute("href")&&!a.hasAttribute("target")&&a.setAttribute("target","_top");var d=kc[c];d&&(b=d.attribute,d=d.values,a.hasAttribute(b)&&d.includes(a.getAttribute(b))&&(r[c]=!0,w.push(c)))}var q=za(a.m),r,w=[],y,k=[];b.addHook("uponSanitizeElement",t);b.addHook("afterSanitizeElements",f);b.addHook("uponSanitizeAttribute",e);b.addHook("afterSanitizeAttributes",d)}
function oc(a){var b;a.addHook("uponSanitizeElement",function(a,d){var c=d.tagName;b=d.allowedTags;"template"===c&&(a=a.getAttribute("type"))&&"amp-mustache"===a.toLowerCase()&&(b.template=!0)});a.addHook("afterSanitizeElements",function(){b.template=!1})}var qc=0,rc=1,sc=2;function pc(a){return"["==a[0]&&"]"==a[a.length-1]?rc:I(a,"data-amp-bind-")?sc:qc};/*
 mustache.js - Logic-less {{mustache}} templates with JavaScript
 http://github.com/janl/mustache.js
*/
var zc={};
(function(a){function b(a){return"function"===typeof a}function c(a){return P(a)?"array":typeof a}function d(a){return a.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g,"\\$&")}function e(a,b){return null!=a&&"object"===typeof a&&Object.prototype.hasOwnProperty.call(a,b)}function f(a,b){return x.call(a,b)}function t(a){return!f(ta,a)}function q(a){return String(a).replace(/[&<>"'`=\/]/g,function(a){return J[a]})}function r(b,c){function h(){if(ea&&!n)for(;g.length;)delete f[g.pop()];else g=[];n=ea=!1}function e(a){"string"===
typeof a&&(a=a.split(W,2));if(!P(a)||2!==a.length)throw Error("Invalid tags: "+a);q=new RegExp(d(a[0])+"\\s*");r=new RegExp("\\s*"+d(a[1]));v=new RegExp("\\s*"+d("}"+a[1]))}if(!b)return[];var l=[],f=[],g=[],ea=!1,n=!1,q,r,v;e(c||a.tags);for(var u=new k(b),m,B,x,O,H;!u.eos();){b=u.pos;if(B=u.scanUntil(q)){m=0;for(var J=B.length;m<J;++m)x=B.charAt(m),t(x)?g.push(f.length):n=!0,f.push(["text",x,b,b+1]),b+=1,"\n"===x&&h()}if(!u.scan(q))break;ea=!0;m=u.scan(Na)||"name";u.scan(U);"="===m?(B=u.scanUntil(qa),
u.scan(qa),u.scanUntil(r)):"{"===m?(B=u.scanUntil(v),u.scan(Ma),u.scanUntil(r),m="&"):B=u.scanUntil(r);if(!u.scan(r))throw Error("Unclosed tag at "+u.pos);O=[m,B,b,u.pos];f.push(O);if("#"===m||"^"===m)l.push(O);else if("/"===m){H=l.pop();if(!H)throw Error('Unopened section "'+B+'" at '+b);if(H[1]!==B)throw Error('Unclosed section "'+H[1]+'" at '+b);}else if("name"===m||"{"===m||"&"===m)n=!0}if(H=l.pop())throw Error('Unclosed section "'+H[1]+'" at '+u.pos);return y(w(f))}function w(a){for(var b=[],
c,d,h=0,e=a.length;h<e;++h)if(c=a[h])"text"===c[0]&&d&&"text"===d[0]?(d[1]+=c[1],d[3]=c[3]):(b.push(c),d=c);return b}function y(a){for(var b=[],c=b,d=[],h,e,f=0,g=a.length;f<g;++f)switch(h=a[f],h[0]){case "#":case "^":c.push(h);d.push(h);c=h[4]=[];break;case "/":e=d.pop();e[5]=h[2];c=0<d.length?d[d.length-1][4]:b;break;default:c.push(h)}return b}function k(a){this.tail=this.string=a;this.pos=0}function g(a,b){this.view=a;this.cache={".":this.view};this.parent=b}function n(){this.cache={}}var ra=Object.prototype.toString,
P=Array.isArray||function(a){return"[object Array]"===ra.call(a)},x=RegExp.prototype.test,ta=/\S/,J={"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;","/":"&#x2F;","`":"&#x60;","=":"&#x3D;"},U=/\s*/,W=/\s+/,qa=/\s*=/,Ma=/\s*\}/,Na=/#|\^|\/|>|\{|&|=|!/;k.prototype.eos=function(){return""===this.tail};k.prototype.scan=function(a){a=this.tail.match(a);if(!a||0!==a.index)return"";a=a[0];this.tail=this.tail.substring(a.length);this.pos+=a.length;return a};k.prototype.scanUntil=function(a){a=this.tail.search(a);
switch(a){case -1:var b=this.tail;this.tail="";break;case 0:b="";break;default:b=this.tail.substring(0,a),this.tail=this.tail.substring(a)}this.pos+=b.length;return b};g.prototype.push=function(a){return new g(a,this)};g.prototype.lookup=function(a){var c=this.cache;if(c.hasOwnProperty(a))var d=c[a];else{for(var h=this,f,g,k=!1;h;){if(0<a.indexOf("."))for(d=h.view,f=a.split("."),g=0;null!=d&&g<f.length;){if(!e(d,f[g])){d=null;break}g===f.length-1&&(k=!0);d=d[f[g++]]}else e(h.view,a)?(d=h.view[a],
k=!0):d=null;if(k)break;h=h.parent}c[a]=d}b(d)&&(d=d.call(this.view));return d};n.prototype.clearCache=function(){this.cache={}};n.prototype.parse=function(a,b){var c=this.cache,d=c[a];null==d&&(d=c[a]=r(a,b));return d};n.prototype.render=function(a,b,c){var d=this.parse(a);b=b instanceof g?b:new g(b);return this.renderTokens(d,b,c,a)};n.prototype.renderTokens=function(a,b,c,d){for(var e="",h,f,g,l=0,k=a.length;l<k;++l)g=void 0,h=a[l],f=h[0],"#"===f?g=this.renderSection(h,b,c,d):"^"===f?g=this.renderInverted(h,
b,c,d):">"===f?g=this.renderPartial(h,b,c,d):"&"===f?g=this.unescapedValue(h,b):"name"===f?g=this.escapedValue(h,b):"text"===f&&(g=this.rawValue(h)),void 0!==g&&(e+=g);return e};n.prototype.renderSection=function(a,c,d,e){function h(a){return f.render(a,c,d)}var f=this,g="",l=c.lookup(a[1]);if(l){if(P(l))for(var k=0,n=l.length;k<n;++k)g+=this.renderTokens(a[4],c.push(l[k]),d,e);else if("object"===typeof l||"string"===typeof l||"number"===typeof l)g+=this.renderTokens(a[4],c.push(l),d,e);else if(b(l)){if("string"!==
typeof e)throw Error("Cannot use higher-order sections without the original template");l=l.call(c.view,e.slice(a[3],a[5]),h);null!=l&&(g+=l)}else g+=this.renderTokens(a[4],c,d,e);return g}};n.prototype.renderInverted=function(a,b,c,d){var e=b.lookup(a[1]);if(!e||P(e)&&0===e.length)return this.renderTokens(a[4],b,c,d)};n.prototype.renderPartial=function(a,c,d){if(d&&(a=b(d)?d(a[1]):d[a[1]],null!=a))return this.renderTokens(this.parse(a),c,d,a)};n.prototype.unescapedValue=function(b,c){b=c.lookup(b[1]);
if(null!=b)return a.sanitizeUnescaped?a.sanitizeUnescaped(b):b};n.prototype.escapedValue=function(b,c){b=c.lookup(b[1]);if(null!=b)return a.escape(b)};n.prototype.rawValue=function(a){return a[1]};a.name="mustache.js";a.version="2.2.0";a.tags=["{{","}}"];var aa=new n;a.clearCache=function(){return aa.clearCache()};a.parse=function(a,b){return aa.parse(a,b)};a.render=function(a,b,d){if("string"!==typeof a)throw new TypeError('Invalid template! Template should be a "string" but "'+c(a)+'" was given as the first argument for mustache#render(template, view, partials)');
return aa.render(a,b,d)};a.to_html=function(c,d,e,f){c=a.render(c,d,e);if(b(f))f(c);else return c};a.escape=q;a.sanitizeUnescaped=null;a.setUnescapedSanitizer=function(b){a.sanitizeUnescaped=b};a.Scanner=k;a.Context=g;a.Writer=n})(zc);var Y=AMP.BaseTemplate;function Z(a,b){var c=Y.call(this,a,b)||this;c.C=new mc(c.win.document);zc.setUnescapedSanitizer(function(a){return c.C.purifyTagsForTripleMustache(a)});return c}Z.prototype=ma(Y.prototype);Z.prototype.constructor=Z;if(xa)xa(Z,Y);else for(var Ac in Y)if("prototype"!=Ac)if(Object.defineProperties){var Bc=Object.getOwnPropertyDescriptor(Y,Ac);Bc&&Object.defineProperty(Z,Ac,Bc)}else Z[Ac]=Y[Ac];Z.J=Y.prototype;
Z.prototype.compileCallback=function(){if(!this.viewerCanRenderTemplates()){this.B={};if("TEMPLATE"==this.element.tagName){var a=this.element;if("content"in a)var b=a.content.cloneNode(!0);else{b=a.ownerDocument.createDocumentFragment();var c=b.ownerDocument.createDocumentFragment();for(a=a.firstChild;a;a=a.nextSibling)c.appendChild(a.cloneNode(!0));b.appendChild(c)}Cc(this,b);c=this.element.ownerDocument.createElement("div");c.appendChild(b);b=c.innerHTML}else b="SCRIPT"==this.element.tagName?this.element.textContent:
"";this.D=b;zc.parse(this.D,void 0)}};function Cc(a,b){var c=b.querySelectorAll("template");Jb(c,function(b,c){c="__AMP_NESTED_TEMPLATE_"+c;a.B[c]=b.outerHTML;var d=a.element.ownerDocument.createTextNode("{{{"+c+"}}}");b.parentNode.replaceChild(d,b)})}Z.prototype.setHtml=function(a){return Dc(this,a)};Z.prototype.render=function(a){var b=a;"object"===typeof a&&(b=Object.assign({},a,this.B));a=zc.render(this.D,b,void 0);return Dc(this,a)};
function Dc(a,b){b=a.C.purifyHtml("<div>"+b+"</div>").firstElementChild;return a.unwrap(b)}(function(a){a.registerTemplate("amp-mustache",Z)})(self.AMP);
})});

//# sourceMappingURL=amp-mustache-0.2.js.map
