;(function(global){
    global.Ta=global.Ta||{};
    Ta.hack=function(){
        return {
            params:'',
            conf:{sid:22746551,pf:3,hot:{}}        };
    };
})(this);

(function(g,n){function v(c){c+="";var a,b,d,e,h,f;d=c.length;b=0;for(a="";b<d;){e=c.charCodeAt(b++)&255;if(b==d){a+="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(e>>2);a+="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt((e&3)<<4);a+="==";break}h=c.charCodeAt(b++);if(b==d){a+="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(e>>2);a+="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt((e&3)<<4|(h&240)>>
4);a+="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt((h&15)<<2);a+="=";break}f=c.charCodeAt(b++);a+="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(e>>2);a+="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt((e&3)<<4|(h&240)>>4);a+="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt((h&15)<<2|(f&192)>>6);a+="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/".charAt(f&63)}return a}function p(c){return(c=
document.cookie.match(new RegExp("(?:^|;\\s)"+c+"=(.*?)(?:;\\s|$)")))?c[1]:""}function q(c,a,b){c=c+"="+a+";path=/;domain=";a=window.location.host;var d={"com.cn":1,"net.cn":1,"gov.cn":1,"com.hk":1,"co.nz":1,"org.cn":1,"edu.cn":1},e=a.split(".");2<e.length&&(a=(d[e.slice(-2).join(".")]?e.slice(-3):e.slice(-2)).join("."));document.cookie=c+a+(b?";expires="+b:"")}function l(c){var a,b,d,e={};void 0===c?(d=window.location,c=d.host,a=d.pathname,b=d.search.substr(1),d=d.hash):(d=c.match(/\w+:\/\/((?:[\w-]+\.)+\w+)(?:\:\d+)?(\/[^\?\\\"\'\|\:<>]*)?(?:\?([^\'\"\\<>#]*))?(?:#(\w+))?/i)||
[],c=d[1],a=d[2],b=d[3],d=d[4]);if(b)for(var h=b.split("&"),f=0,g=h.length;f<g;f++)if(-1!=h[f].indexOf("=")){var m=h[f].indexOf("="),k=h[f].slice(0,m),m=h[f].slice(m+1);e[k]=m}return{host:c,path:a,search:b,hash:d,param:e}}function r(c){return(c||"")+Math.round(2147483647*(Math.random()||.5))*+new Date%1E10}function s(c,a){var b=document.createElement("script"),d=document.getElementsByTagName("script")[0];b.src=c;b.type="text/javascript";b.onload=b.onerror=b.onreadystatechange=function(){/loaded|complete|undefined/.test(b.readyState)&&
(b.onload=b.onerror=b.onreadystatechange=null,b.parentNode.removeChild(b),b=void 0,a())};d.parentNode.insertBefore(b,d)}function w(){var c=l(),a={dm:c.host,pvi:"",si:"",url:c.path,arg:encodeURIComponent(c.search||""),ty:1};a.pvi=function(){var b=p("pgv_pvi");b||(a.ty=0,b=r(),q("pgv_pvi",b,"Sun, 18 Jan 2038 00:00:00 GMT;"));return b}();a.si=function(){var a=p("pgv_si");a||(a=r("s"),q("pgv_si",a));return a}();return a}function x(){var c=l(document.referrer),a=l();return{rdm:c.host,rurl:c.path,rarg:encodeURIComponent(c.search||
""),adt:a.param.ADTAG||a.param.adtag}}function y(){try{var c=navigator,a=screen||{width:"",height:"",colorDepth:""},b=document.body,d=a.width+"x"+a.height,e=a.colorDepth+"-bit",h=(c.language||c.userLanguage).toLowerCase(),f=c.javaEnabled()?1:0,g=(new Date).getTimezoneOffset()/60,a="";b&&b.addBehavior&&(b.addBehavior("#default#clientCaps"),a=b.connectionType);var b={fl:"",scr:d,scl:e,lg:h,jv:f,tz:g,ct:a},m,k,l,n;if((m=c.plugins)&&(k=m.length))for(c=0;c<k;c++){if(l=m[c].description.match(/Shockwave Flash ([\d\.]+) \w*/))b.fl=
l[1]}else n=(new ActiveXObject("ShockwaveFlash.ShockwaveFlash")).GetVariable("$version"),b.fl=n.replace(/^.*\s+(\d+)\,(\d+).*$/,"$1.$2")}catch(p){return{}}return b}function z(){var c={};if("undefined"!=typeof _taadHolders&&0<_taadHolders.length)for(var a=0,b=_taadHolders,d=b.length;a<d;a++)c[b[a]]=c[b[a]]?c[b[a]]+1:1;var a=[],e;for(e in c)c.hasOwnProperty(e)&&a.push(e+"*"+c[e]);return{ext:"adid="+a.join(":")}}function A(){var c=[],a;for(a in k){var b=p(k[a].c_id),d;"afs"==a?d=(d=/ssid=([^&]*)/i.exec(l().hash))&&
d[1]?d[1]:"":(d=l().param,d=d[k[a].id]?d[k[a].id]:"");d?(c.push("ty="+k[a].key+";ck=0;id="+d),b=new Date,b.setTime(b.getTime()+2592E6),q(k[a].c_id,d,b.toGMTString())):b&&c.push("ty="+k[a].key+";ck=1;id="+b)}return{pf:c.join("|")}}function t(c){c=c||{};c.conf&&function(){var a=c.conf,b;for(b in a)a.hasOwnProperty(b)&&(g[b]=a[b])}();if(g.sid&&!Ta[g.sid]){for(var a=[],b=0,d=[w(),x(),{r2:g.sid,r3:"undefined"==typeof _speedMark?"-1":new Date-_speedMark,r4:g.pf||1},y(),z(),A(),{random:+new Date}],e=d.length;b<
e;b++)for(var h in d[b])d[b].hasOwnProperty(h)&&a.push(h+"="+(d[b][h]||""));c.params&&a.push(c.params);var a=Ta.src=("https:"==document.location.protocol?"https://pingtas":"http://pingtcss")+".qq.com/pingd?"+a.join("&"),f=new Image;Ta[g.sid]=f;f.onload=f.onerror=f.onabort=function(){f=f.onload=f.onerror=f.onabort=null;Ta[g.sid]=!0};f.src=a;(1*!g.pf||g.hot.isValid)&&B(a);g.logo&&255!=g.logo&&C(g.logo)}}function u(c,a){var b=Ta.src.replace(/ext=[^&]*/,function(){return"ext="+("evtid"==a?"ty=0;evtid=":
"clickid"==a?"ty=1;clickid=":"adid=")+c}).replace(/r2=([^&]*)/,function(b,c){return"r2="+("clickid"==a?"b":"a")+c});(new Image(1,1)).src=b}function B(c){var a=window.location,b=a.host+a.pathname,d=a.pathname,e=function(){s(("https:"==document.location.protocol?"https://":"http://")+"tajs.qq.com/ping_hotclick_min.js",function(){window.hotclick&&(new hotclick(c)).watchClick()})};1*g.pf?(new RegExp(b)).test(g.hot.url)&&e():(a=g.sid,s("http://tcss.qq.com/heatmap/"+a%100+"/"+v(a)+".js?random="+ +new Date,
function(){var a;if(window._Cnf&&(a=window._Cnf.url)){a=a.split("|");for(var b=0;b<a.length;b++)if(a[b]==d){e();break}}}))}function C(c){var a={9:"\u817e\u8baf\u5206\u6790",10:"\u7f51\u7ad9\u7edf\u8ba1",df:'<img src="'+(("https:"==document.location.protocol?"https:":"http:")+"//tajs.qq.com/icon/toss_"+c+".gif")+'" border="0" />'};document.write(['<a href="http://ta.qq.com?ADTAG=FROUM.FOOTER.CLICK.ICON" title="\u817e\u8baf\u5206\u6790" target="_blank">',a[c]||a.df,"</a>"].join(""))}var k={afs:{key:1,
id:"ssid",c_id:"pgv_afsid",fr:"hash"},afc:{key:2,id:"__tacid",c_id:"pgv_afcid",fr:"param"},gdt:{key:11,id:"qz_gdt",c_id:"pgv_gdtid",fr:"param"}};n.pgvSendClick=u;n.taClick=u;n.Ta=n.Ta||{};Ta.pgv=t;!Ta.async&&t(Ta.hack?Ta.hack():"")})({sid:"",pf:"",hot:{url:"",isValid:!1}},this);