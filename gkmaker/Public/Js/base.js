(function(d){onerror=function(a,c,b){var e=(new Date).getTime(),a="/img/js_err.gif?e="+encodeURIComponent(a+"_"+c+"_"+b+"_"+e+"_"+location.href);if(c.indexOf("google-analytics")!=-1&&c.indexOf("dmacore")!=-1)return d.get(a),!0}})(jQuery);
(function(d){d.fn.floatUp=function(a){a=d.extend({},a||{});return this.each(function(){$this=d(this);var c=$this.height();$this.css({height:0,opacity:0});$this.show();var b=$this.position().top;MGTOOL.empty($this.data("top"))?$this.data("top",b):(b=$this.data("top"),$this.css("top",b));$this.animate({height:c+"px",top:b-c+"px",opacity:"1"},a.time||1E3)})};d.fn.floatDown=function(a){a=d.extend({},a||{});return this.each(function(){$this=d(this);var c=$this.height(),b=$this.position().top;MGTOOL.empty($this.data("top"))?
$this.data("top",b):(b=$this.data("top"),$this.css("top",b));$this.animate({height:"0px",top:b+c+"px",opacity:"0"},a.time||1E3,function(){$this.remove()})})};MOGU={WB_Goods_Array:{},WB_Goods_Id_Array:{},WB_Goods_Dapei_Array:{},WB_Goods_Dapei_Id_Array:{},WB_Goods_ShaiHuo_Array:{},WB_Goods_ShaiHuo_Id_Array:{},WB_Images_Array:"",WB_Shop_Array:"",WB_Images_Tab:"",Globe_Textarea_Auto_Height:function(a){var c=a.height(),b=function(){c<0&&(c=a.height());(d.browser.mozilla||d.browser.safari)&&a.height(c);
var b=a[0].scrollHeight,g=b<c?c:b,g=g<c*1.5?c:b;a.height(g)};a.bind("keyup",b).bind("input",b).bind("propertychange",b).bind("focus",b)},Globe_Goods_URL_Support:function(a){var c=/tmall.com/i,b=/auction\d?.paipai.com/i,e=/buy.caomeipai.com\/goods/i,d=/www.360buy.com\/product/i,f=/product.dangdang.com\/Product.aspx\?product_id=/i,h=/book.360buy.com/i,k=/www.vancl.com\/StyleDetail/i,l=/www.vancl.com\/Product/i,m=/vt.vancl.com\/item/i,n=/item.vancl.com\/\d+/i,o=/item.vt.vancl.com\/\d+/i,p=/mbaobao.com\/pshow/i,
q=/item.buy.qq.com\/item/i,r=/[www|us].topshop.com\/webapp\/wcs\/stores\/servlet\/ProductDisplay/i,s=/quwan.com\/goods/i,t=/nala.com.cn\/product/i,u=/maymay.cn\/pitem/i,v=/asos.com/i,w=/www.100f1.com\/ProductInfo_/i,x=/www.gaojie.com\/product/i;return/item(.[\w]+)?.taobao.com\/(.?)[item.htm|item_num_id|item_detail|itemID|item_id|default_item_id]/i.test(a)||c.test(a)||h.test(a)||d.test(a)||b.test(a)||e.test(a)||f.test(a)||k.test(a)||l.test(a)||m.test(a)||n.test(a)||o.test(a)||p.test(a)||r.test(a)||
s.test(a)||t.test(a)||u.test(a)||v.test(a)||w.test(a)||x.test(a)||q.test(a)},Globe_Input_Text:function(a,c){c=c||a.val();a.focus(function(){MGTOOL.trim(a.val())==c&&a.val("");a.css("color","#000")});a.blur(function(){MGTOOL.trim(a.val())==""&&(a.val(c),a.css("color","#ccc"))})},WB_Word_Count:function(a,c,b){var e=b?b:140;d("#"+a)[0]&&(b=function(){var b=0,b=c?MGTOOL.getMsgLength(d("#"+c).val()):MGTOOL.getMsgLength(d("#"+a).find(".pub_txt").val()),f=e-b;b==0?d("#"+a).find(".word_count").html(e):(d("#"+
a).find(".word_count").html(f),b>e?d("#"+a).find(".word_count").addClass("out"):d("#"+a).find(".word_count").removeClass("out"))},b(),c?d("#"+c).bind("keyup",b).bind("input",b).bind("propertychange",b):d("#"+a).find(".pub_txt").bind("keyup",b).bind("input",b).bind("propertychange",b))},Globe_Range_Input:function(a){if(a[0].createTextRange){var c=a[0].createTextRange();c.moveEnd("character",a.val().length);c.moveStart("character",a.val().length);c.select()}else a[0].setSelectionRange(a.val().length,
a.val().length),a.focus()},Globe_Check_Login:function(){if(MOGUPROFILE.userid=="")return MOGU.user_handsome_login_init(),MOGU.user_handsome_login(),!1;return!0},Globe_Short_Link_From:function(){d(".mg_slink").live("click",function(){var a=this,c=a.href,b=d(a).attr("s"),e=d(a).attr("c");if(e=="")e=MOGUPROFILE.userid;var g=c,f="",f=c.indexOf("?")==-1?"?c="+e+"&s="+b:"&c="+e+"&s="+b;g+=f;a.href=g;setTimeout(function(){a.href=c},500)})},Globe_Bind_Keybord_Submit:function(a,c,b){b=b||"need_focus";b=="need_focus"&&
(a.focus(function(){d("body").unbind("keydown");d("body").bind("keydown",function(a){a.ctrlKey&&a.keyCode==13&&c.click()})}),a.blur(function(){d("body").unbind("keydown")}));b=="not_need_focus"&&d(document).bind("keydown",function(a){a.ctrlKey&&a.keyCode==13&&(c.click(),d("body").unbind("keydown"))})}};MGTOOL={distance2Bottom:function(a){var c=d(document).scrollTop(),b=d(window).height(),e=d(document).height();return c+b+a>=e?!0:!1},trim:function(a){return a.replace(/(^\s*)|(\s*$)/g,"").replace(/(^\u3000*)|(\u3000*$)/g,
"")},isURl:function(a){return/([\w-]+\.)+[\w-]+.([^a-z])(\/[\w-.\/?%&=]*)?|[a-zA-Z0-9\-\.][\w-]+.([^a-z])(\/[\w-.\/?%&=]*)?/i.test(a)?!0:!1},byteLength:function(a){var c=a.match(/[^\x00-\x80]/g);return a.length+(!c?0:c.length)},getMsgLength:function(a){var c=a.length;if(c>0){for(var b=a,a=a.match(/http[s]?:\/\/[a-zA-Z0-9-]+(\.[a-zA-Z0-9]+)+([-A-Z0-9a-z_\$\.\+\!\*\(\)\/\/,:;@&=\?\~\#\%]*)*/gi)||[],e=0,d=0,c=a.length;d<c;d++){var f=MGTOOL.byteLength(a[d]);/^(http:\/\/mogujie.cn)/.test(a[d])||(e+=/^(http:\/\/)+(mogujie.cn|mogujie.com)/.test(a[d])?
f<=41?f:f<=140?24:f-140+24:f<=140?24:f-140+24,b=b.replace(a[d],""))}return Math.ceil((e+MGTOOL.byteLength(b))/2)}else return 0},jsMbSubstr:function(a,c){if(!a||!c)return"";for(var b=0,e=0,d="",e=0;e<a.length;e++){a.charCodeAt(e)>255?b+=2:b++;if(b>c*2)return d;d+=a.charAt(e)}return a},getAbsoluteLocation:function(a){if(arguments.length!=1||a==null)return null;var c=d(a),b=c.offset(),e=b.top,b=b.left,c=c.height(),g=d(window).height(),f=d(document).scrollTop();return{absoluteTop:e,absoluteLeft:b,isInView:e>=
f&&e<=f+g,isLoad:e+c+200>=f&&e-400<=f+g}},objToJson:function(a){var c="{",b;for(b in a)a[b]!=null&&(c+=typeof a[b]==="object"?'"'+b+'":'+MGTOOL.objToJson(a[b])+",":'"'+b+'":"'+a[b]+'",');c+="}";return c=c.replace(/,}/g,"}")},getPicExtension:function(a){return a.toLowerCase().substring(a.lastIndexOf(".")+1)},empty:function(a){return void 0===a||null===a||""===a},emptyObj:function(a){for(var c in a)return!1;return!0},isParent:function(a,c){for(;a!=void 0&&a!=null&&a.tagName.toUpperCase()!="BODY";){if(a==
c)return!0;a=a.parentNode}return!1},setCookie:function(a,c,b){b=b||{};if(c===null)c="",b.expires=-1;var d="";if(b.expires&&(typeof b.expires=="number"||b.expires.toUTCString))typeof b.expires=="number"?(d=new Date,d.setTime(d.getTime()+b.expires*864E5)):d=b.expires,d="; expires="+d.toUTCString();var g=b.path?"; path="+b.path:"",f=b.secure?"; secure":"",h="";null!=b.domain||void 0!=b.domain?h="; domain="+b.domain:(h=document.domain.toString().split("."),h="; domain=."+h[1]+"."+h[2]);document.cookie=
[a,"=",encodeURIComponent(c),d,g,h,f].join("")},getCookie:function(a){a=document.cookie.match(RegExp("(^| )"+a+"=([^;]*)(;|$)"));if(a!=null)return unescape(a[2]);return""},setCacheCookie:function(a,c,b,e){b=b||{};c===null&&(c="");e=typeof e=="undefined"?MGTOOL.getCookie("__mgjuuid"):e;d.ajax({url:"/collect/uedcookie",type:"POST",timeout:6E4,data:{cookiename:a,uuid:e,type:"set",value:c,lifetime:b.expires*86400},dataType:"json",success:function(a){a==""&&alert(MGLANG.msgTimeout)}})},getCacheCookie:function(a,
c){var b=typeof c=="undefined"?MGTOOL.getCookie("__mgjuuid"):c,e="";d.ajax({url:"/collect/uedcookie",type:"POST",timeout:6E4,async:!1,data:{cookiename:a,uuid:b,type:"get"},dataType:"json",success:function(a){a.status.code==1001?e=a.result.data.value:alert(MGLANG.msgTimeout)}});return e},getMousePosition:function(a){var c=0,b=0;if(!a)a=window.event;if(a.pageX||a.pageY)c=a.pageX,b=a.pageY;else if(a.clientX||a.clientY)c=a.clientX+document.body.scrollLeft+document.documentElement.scrollLeft,b=a.clientY+
document.body.scrollTop+document.documentElement.scrollTop;return{x:c,y:b}},getQueryString:function(a){if(RegExp("(^|\\?|&)"+a+"=([^&]*)(\\s|&|$)","i").test(location.href))return unescape(RegExp.$2.replace(/\+/g," "));return""},isIOS:function(){return/\((iPhone|iPad|iPod)/i.test(navigator.userAgent)},getRequest:function(a,c){var c=typeof c!="undefined"?c:location.href,b=c.substring(c.indexOf("?")+1,c.length).split("&"),d={};for(i=0;j=b[i];i++)d[j.substring(0,j.indexOf("=")).toLowerCase()]=j.substring(j.indexOf("=")+
1,j.length);b=d[a.toLowerCase()];return typeof b=="undefined"?"":b},template:function(a,c){return doT.template(a)(c)}};MGLANG={msgTimeout:"\u7f51\u7edc\u94fe\u63a5\u8d85\u65f6\uff01",msgNologin:"\u60a8\u672a\u767b\u5f55\uff01"};MGTEMPLATE={lightBox:'<div id="{id}" class="light_box"><div></div><iframe frameborder="0" scrolling="no" class="lb_fix"></iframe><div><table class="lb_wrap"><tbody><tr><td class="topleft"></td><td class="border"></td><td class="topright"></td></tr><tr><td class="border"></td><td class="content"><div class="lb_hd">{title}<a href="javascript:;" class="lb_close" ></a></div><div class="lb_bd">{body}</div></td><td class="border"></td></tr><tr><td class="bottomleft"></td><td class="border"></td><td class="bottomright"></td></tr></tbody></table></div></div>',
lightBoxLoading:'<div class="lb_loading"><img class="fl" src="/img/loading.gif">\u8bf7\u7a0d\u540e......\uff08<a class="lb_cs" href="javascript:;">\u53d6\u6d88</a>\uff09</div>',addPicUp:'<div class="pic_box"><div class="clearfix upload_box"><form class="picUploadForm" action="/upload/addpic" method="POST" enctype="multipart/form-data"><div class="upload_img mb20"><input type="button" class="upload_btn r3" value="\u4e0a\u4f20\u56fe\u7247"><input hidefocus="true" type="file" class="tfile" name="image"></div><div class="pic_tab"><input type="radio" name="tab" value="0" id="tab_pt"><label for="tab_pt">\u4e00\u822c\u56fe\u7247</label><input class="ml30" type="radio" name="tab" value="4" id="tab_dp"><label for="tab_dp">\u6211\u7684\u642d\u914d</label><input class="ml30" type="radio" name="tab" value="3" id="tab_sh"><label for="tab_sh">\u6211\u7684\u6652\u8d27</label></div></form></div></div>',
picFeed:'<li iid="{id}" tab="{tab}" class="p_f"><div class="r5"><a href="javascript:;" class="del"></a><img src="{src}" class="i"></div></li>',picFeedFashionElement:'<div class="fashion_element" id="fashion_element"><input type="text" class="fashion_input r3" def_val="\u6dfb\u52a0\u65f6\u5c1a\u5143\u7d20\uff0c\u6700\u591a\u53ef\u4ee5\u586b\u519910\u4e2a\uff0c\u7528\u9017\u53f7\u9694\u5f00" value="\u6dfb\u52a0\u65f6\u5c1a\u5143\u7d20\uff0c\u6700\u591a\u53ef\u4ee5\u586b\u519910\u4e2a\uff0c\u7528\u9017\u53f7\u9694\u5f00" /><div class="fashion_ele">{fashions}</div></div>',
goodsFeed:'<li iid="{id}" tab="{tab}" class="g_f"><div class="r5 g"><a href="javascript:;" class="del"></a><img src="{src}" class="i"><img src="/img/goods_tag.png" class="tag" alt=""></div></li>',addGoodsStart:'<div class="goods_box"><span>\u5c06\u5546\u54c1\u7f51\u5740\u7c98\u8d34\u5230\u4e0b\u9762\u6846\u4e2d\u5373\u53ef\u3002</span><div style="overflow:hidden;zoom:1"><input class="g_url fl rl3" type="text" ><input class="g_s fl rr3" value="\u786e \u5b9a" type="button"></div><div class="support">\u5df2\u652f\u6301\u4ee5\u4e0b\u7f51\u7ad9\uff08<a class="in" href="mailto:service@mogujie.com">\u5546\u5bb6\u7533\u8bf7\u52a0\u5165</a>\uff09\uff1a<p><a style="background-image:url(/img/taobao.gif);" href="http://www.taobao.com/" target="_blank">\u6dd8\u5b9d</a><a style="background-image:url(/img/paipai.gif);" href="http://www.paipai.com/" target="_blank">\u62cd\u62cd</a><a style="background-image:url(/img/dangdang.gif);" href="http://www.dangdang.com/" target="_blank">\u5f53\u5f53</a><a style="background-image:url(/img/vancl.gif);" href="http://www.vancl.com/" target="_blank">\u51e1\u5ba2</a><a style="background-image:url(/img/360buy.gif);" href="http://www.360buy.com/" target="_blank">\u4eac\u4e1c</a><a style="background-image:url(/img/topshop.gif);" href="http://www.topshop.com/" target="_blank">TopShop</a><a style="background-image:url(/img/caomeipai.gif);" href="http://buy.caomeipai.com/" target="_blank">\u8349\u8393\u6d3e</a><br/><a style="background-image:url(/img/mbaobao.gif);" href="http://www.mbaobao.com/" target="_blank">\u9ea6\u5305\u5305</a><a style="background-image:url(/img/nala.gif);" href="http://www.nala.com.cn/" target="_blank">NALA</a><a style="background-image:url(/img/maymay.png);" href="http://www.maymay.cn/" target="_blank">Maymay</a><a style="background-image:url(/img/asos.gif);" href="http://www.asos.com/" target="_blank">asos</a><a style="background-image:url(/img/100f1.ico);" href="http://www.100f1.com/" target="_blank">\u6211\u7684\u767e\u5206\u4e4b\u4e00</a></p></div></div>',
addGoodsResult:'<div class="goods_box_r"><img src="{src}"><p>{title}<span>{price}</span></p><input type="button" class="g_a r3" value="\u786e\u3000\u5b9a\uff083\uff09" /></div>',addShopUp:'<div class="shop_box"><span>\u5c06\u5e97\u94fa\u7f51\u5740\u7c98\u8d34\u5230\u4e0b\u9762\u6846\u4e2d\u5373\u53ef\u3002\uff08\u76ee\u524d\u53ea\u652f\u6301\u6dd8\u5b9d\u5e97\u94fa\uff09</span><div><input class="s_url fl rl3" type="text"><input class="s_s fl rr3" value="\u786e \u5b9a" type="button"></div></div> ',
addFollow:'<span>\u5df2\u4e92\u76f8\u5173\u6ce8</span><br><a class="unFollow" href="javascript:void(0);">\u53d6\u6d88\u5173\u6ce8</a><br><a href="javascript:void(0);" class="unFollow">\u79fb\u9664\u7c89\u4e1d</a><br><a href="/message/send/toId/{uid}">\u53d1\u79c1\u4fe1</a>',twitterLightBox:'<div id="{id}" class="light_box twitter_light_box"><iframe frameborder="0" scrolling="no" class="lb_fix"></iframe><div class="content" ><b class="arrows" ></b><div class="lb_hd">{title}<a class="lb_close" href="javascript:;"></a></div><div class="lb_bd">{body}</div></div></div>'};
MGFACE={faceTab:'<ul class="lb_tab"><li title="\u9ed8\u8ba4" f="1" class="c rt3 "><a href="javascript:void(0)" onclick="return false;">\u9ed8\u8ba4</a></li><li class="rt3" f="2" title="\u5fc3\u60c5"><a href="javascript:void(0)" onclick="return false;">\u5fc3\u60c5</a></li><li class="rt3" f="3" title="\u4f11\u95f2"><a href="javascript:void(0)" onclick="return false;">\u4f11\u95f2</a></li><li f="4" class="rt3" title="\u641e\u602a"><a href="javascript:void(0)" onclick="return false;">\u641e\u602a</a></li></ul>',
facePage:{f1:'<ul class="face_l" title="\u9ed8\u8ba4"><li title="\u5475\u5475"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.eb.smile.gif" /></a></li><li title="\u563b\u563b"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.c2.tooth.gif" /></a></li><li title="\u54c8\u54c8"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.6a.laugh.gif" /></a></li><li title="\u7231\u4f60"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.7e.love.gif" /></a></li><li title="\u6655"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.a4.dizzy.gif" /></a></li><li title="\u6cea"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d8.sad.gif" /></a></li><li title="\u998b\u5634"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b8.cz_thumb.gif" /></a></li><li title="\u6293\u72c2"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.4d.crazy.gif" /></a></li><li title="\u54fc"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.19.hate.gif" /></a></li><li title="\u53ef\u7231"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.9c.tz_thumb.gif" /></a></li><li title="\u6012"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.57.angry.gif" /></a></li><li title="\u6c57"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.13.sweat.gif" /></a></li><li title="\u56f0"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.8b.sleepy.gif" /></a></li><li title="\u5bb3\u7f9e"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.05.shame_thumb.gif" /></a></li><li title="\u7761\u89c9"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.7d.sleep_thumb.gif" /></a></li><li title="\u94b1"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.90.money_thumb.gif" /></a></li><li title="\u5077\u7b11"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.7e.hei_thumb.gif" /></a></li><li title="\u9177"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.40.cool_thumb.gif" /></a></li><li title="\u8870"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.af.cry.gif" /></a></li><li title="\u5403\u60ca"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.f4.cj_thumb.gif" /></a></li><li title="\u95ed\u5634"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.29.bz_thumb.gif" /></a></li><li title="\u9119\u89c6"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.71.bs2_thumb.gif" /></a></li><li title="\u6316\u9f3b\u5c4e"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b6.kbs_thumb.gif" /></a></li><li title="\u82b1\u5fc3"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.64.hs_thumb.gif" /></a></li><li title="\u9f13\u638c"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.1b.gz_thumb.gif" /></a></li><li title="\u5931\u671b"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.0c.sw_thumb.gif" /></a></li><li title="\u601d\u8003"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.e9.sk_thumb.gif" /></a></li><li title="\u751f\u75c5"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b6.sb_thumb.gif" /></a></li><li title="\u4eb2\u4eb2"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.8f.qq_thumb.gif" /></a></li><li title="\u6012\u9a82"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.89.nm_thumb.gif" /></a></li><li title="\u592a\u5f00\u5fc3"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.58.mb_thumb.gif" /></a></li><li title="\u61d2\u5f97\u7406\u4f60"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.17.ldln_thumb.gif" /></a></li><li title="\u53f3\u54fc\u54fc"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.98.yhh_thumb.gif" /></a></li><li title="\u5de6\u54fc\u54fc"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.6d.zhh_thumb.gif" /></a></li><li title="\u5618"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.a6.x_thumb.gif" /></a></li><li title="\u59d4\u5c48"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.73.wq_thumb.gif" /></a></li><li title="\u5410"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.9e.t_thumb.gif" /></a></li><li title="\u53ef\u601c"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.af.kl_thumb.gif" /></a></li><li title="\u6253\u54c8\u6c14"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.f3.k_thumb.gif" /></a></li><li title="\u505a\u9b3c\u8138"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.88.zgl_thumb.gif" /></a></li><li title="\u63e1\u624b"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.0c.ws_thumb.gif" /></a></li><li title="\u8036"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d9.ye_thumb.gif" /></a></li><li title="good"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d8.good_thumb.gif" /></a></li><li title="\u5f31"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d8.sad_thumb.gif" /></a></li><li title="\u4e0d\u8981"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.c7.no_thumb.gif" /></a></li><li title="ok"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d6.ok_thumb.gif" /></a></li><li title="\u8d5e"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d0.z2_thumb.gif" /></a></li><li title="\u6765"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.40.come_thumb.gif" /></a></li><li title="\u86cb\u7cd5"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.6a.cake.gif" /></a></li><li title="\u5fc3"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.6d.heart.gif" /></a></li><li title="\u4f24\u5fc3"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.ea.unheart.gif" /></a></li><li title="\u949f"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d3.clock_thumb.gif" /></a></li><li title="\u732a\u5934"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.58.pig.gif" /></a></li><li title="\u5496\u5561"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.64.cafe_thumb.gif" /></a></li><li title="\u8bdd\u7b52"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.1b.m_thumb.gif" /></a></li><li title="\u5e72\u676f"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.bd.cheer.gif" /></a></li><li title="\u7eff\u4e1d\u5e26"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b8.green.gif" /></a></li><li title="\u8721\u70db"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.cc.candle.gif" /></a></li><li title="\u5fae\u98ce"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.a5.wind_thumb.gif" /></a></li><li title="\u6708\u4eae"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b9.moon.gif" /></a></li></ul>',
f2:'<ul class="face_l" title="\u5fc3\u60c5"><li title="\u6324\u773c"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.c3.zy_thumb.gif" /></a></li><li title="\u4eb2\u4eb2"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.8f.qq_thumb.gif" /></a></li><li title="\u6012\u9a82"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.89.nm_thumb.gif" /></a></li><li title="\u592a\u5f00\u5fc3"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.58.mb_thumb.gif" /></a></li><li title="\u61d2\u5f97\u7406\u4f60"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.17.ldln_thumb.gif" /></a></li><li title="\u6253\u54c8\u6c14"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.f3.k_thumb.gif" /></a></li><li title="\u751f\u75c5"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b6.sb_thumb.gif" /></a></li><li title="\u4e66\u5446\u5b50"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.61.sdz_thumb.gif" /></a></li><li title="\u5931\u671b"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.0c.sw_thumb.gif" /></a></li><li title="\u53ef\u601c"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.af.kl_thumb.gif" /></a></li><li title="\u6316\u9f3b\u5c4e"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b6.kbs_thumb.gif" /></a></li><li title="\u9ed1\u7ebf"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.91.h_thumb.gif" /></a></li><li title="\u82b1\u5fc3"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.64.hs_thumb.gif" /></a></li><li title="\u53ef\u7231"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.9c.tz_thumb.gif" /></a></li><li title="\u5410"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.9e.t_thumb.gif" /></a></li><li title="\u59d4\u5c48"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.73.wq_thumb.gif" /></a></li><li title="\u601d\u8003"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.e9.sk_thumb.gif" /></a></li><li title="\u54c8\u54c8"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.6a.laugh.gif" /></a></li><li title="\u5618"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.a6.x_thumb.gif" /></a></li><li title="\u53f3\u54fc\u54fc"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.98.yhh_thumb.gif" /></a></li><li title="\u5de6\u54fc\u54fc"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.6d.zhh_thumb.gif" /></a></li><li title="\u7591\u95ee"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.5c.yw_thumb.gif" /></a></li><li title="\u9634\u9669"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.6d.yx_thumb.gif" /></a></li><li title="\u505a\u9b3c\u8138"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.88.zgl_thumb.gif" /></a></li><li title="\u7231\u4f60"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.7e.love.gif" /></a></li><li title="\u998b\u5634"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b8.cz_thumb.gif" /></a></li><li title="\u9876"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.91.d_thumb.gif" /></a></li><li title="\u94b1"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.90.money_thumb.gif" /></a></li><li title="\u563b\u563b"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.c2.tooth.gif" /></a></li><li title="\u6c57"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.13.sweat.gif" /></a></li><li title="\u5475\u5475"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.eb.smile.gif" /></a></li><li title="\u7761\u89c9"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.7d.sleep_thumb.gif" /></a></li><li title="\u56f0"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.8b.sleepy.gif" /></a></li><li title="\u5bb3\u7f9e"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.05.shame_thumb.gif" /></a></li><li title="\u60b2\u4f24"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.1a.bs_thumb.gif" /></a></li><li title="\u9119\u89c6"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.71.bs2_thumb.gif" /></a></li><li title="\u62b1\u62b1"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.7c.bb_thumb.gif" /></a></li><li title="\u62dc\u62dc"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.70.88_thumb.gif" /></a></li><li title="\u6012"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.57.angry.gif" /></a></li><li title="\u5403\u60ca"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.f4.cj_thumb.gif" /></a></li><li title="\u95ed\u5634"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.29.bz_thumb.gif" /></a></li><li title="\u6cea"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d8.sad.gif" /></a></li><li title="\u5077\u7b11"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.7e.hei_thumb.gif" /></a></li><li title="\u54fc"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.19.hate.gif" /></a></li><li title="\u6655"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.a4.dizzy.gif" /></a></li><li title="\u8870"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.af.cry.gif" /></a></li><li title="\u6293\u72c2"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.4d.crazy.gif" /></a></li><li title="\u6124\u6012"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.bd.fn_thumb.gif" /></a></li><li title="\u611f\u5192"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.a0.gm_thumb.gif" /></a></li><li title="\u9f13\u638c"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.1b.gz_thumb.gif" /></a></li><li title="\u9177"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.40.cool_thumb.gif" /></a></li><li title="\u6765"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.40.come_thumb.gif" /></a></li><li title="good"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d8.good_thumb.gif" /></a></li><li title="haha"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.13.ha_thumb.gif" /></a></li><li title="\u4e0d\u8981"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.c7.no_thumb.gif" /></a></li><li title="ok"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d6.ok_thumb.gif" /></a></li><li title="\u62f3\u5934"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.cc.o_thumb.gif" /></a></li><li title="\u5f31"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d8.sad_thumb.gif" /></a></li><li title="\u63e1\u624b"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.0c.ws_thumb.gif" /></a></li><li title="\u8d5e"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d0.z2_thumb.gif" /></a></li><li title="\u8036"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d9.ye_thumb.gif" /></a></li><li title="\u6700\u5dee"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.3e.bad_thumb.gif" /></a></li><li title="\u53f3\u62b1\u62b1"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.0d.right_thumb.gif" /></a></li><li title="\u5de6\u62b1\u62b1"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.54.left_thumb.gif" /></a></li></ul>',
f3:'<ul class="face_l" title="\u4f11\u95f2"><li title="\u5927\u5df4"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.9c.dynamicbus_thumb.gif" /></a></li><li title="\u843d\u53f6"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.79.yellowMood_thumb.gif" /></a></li><li title="\u706b\u70ac"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.3b.hj_thumb.gif" /></a></li><li title="\u9152\u58f6"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.64.wine_thumb.gif" /></a></li><li title="\u6708\u997c"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.96.mooncake3_thumb.gif" /></a></li><li title="\u6ee1\u6708"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.5d.moon1_thumb.gif" /></a></li><li title="\u98de\u673a"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.6d.travel_thumb.gif" /></a></li><li title="\u81ea\u884c\u8f66"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.46.zxc_thumb.gif" /></a></li><li title="\u836f"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.5d.y_thumb.gif" /></a></li><li title="\u624b\u7eb8"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.55.sz_thumb.gif" /></a></li><li title="\u624b\u673a"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.4b.sj2_thumb.gif" /></a></li><li title="\u94bb\u6212"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.31.r_thumb.gif" /></a></li><li title="\u5de7\u514b\u529b"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b1.qkl_thumb.gif" /></a></li><li title="\u811a\u5370"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.12.jy_thumb.gif" /></a></li><li title="\u6c7d\u8f66"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.a4.jc_thumb.gif" /></a></li><li title="\u9152"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.39.j2_thumb.gif" /></a></li><li title="\u72d7"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.5d.g_thumb.gif" /></a></li><li title="\u5de5\u4f5c"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b2.gz3_thumb.gif" /></a></li><li title="\u6863\u6848"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.ce.gz2_thumb.gif" /></a></li><li title="\u53f6\u5b50"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b8.green_thumb.gif" /></a></li><li title="\u94a2\u7434"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b2.gq_thumb.gif" /></a></li><li title="\u5370\u8ff9"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.84.foot_thumb.gif" /></a></li><li title="\u7535\u8111"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.df.dn_thumb.gif" /></a></li><li title="\u94bb\u77f3"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.9f.diamond_thumb.gif" /></a></li><li title="\u949f"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d3.clock_thumb.gif" /></a></li><li title="\u8336"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.a8.cha_thumb.gif" /></a></li><li title="\u7167\u76f8\u673a"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.33.camera_thumb.gif" /></a></li><li title="\u897f\u74dc"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.6b.watermelon.gif" /></a></li><li title="\u96e8\u4f1e"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.33.umb_thumb.gif" /></a></li><li title="\u7535\u89c6\u673a"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b3.tv_thumb.gif" /></a></li><li title="\u7535\u8bdd"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.9d.tel_thumb.gif" /></a></li><li title="\u592a\u9633"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.e5.sun.gif" /></a></li><li title="\u661f"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.0b.star_thumb.gif" /></a></li><li title="\u54e8\u5b50"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.a0.shao.gif" /></a></li><li title="\u8bdd\u7b52"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.1b.m_thumb.gif" /></a></li><li title="\u97f3\u4e50"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d0.music_thumb.gif" /></a></li><li title="\u7535\u5f71"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.77.movie_thumb.gif" /></a></li><li title="\u6708\u4eae"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b9.moon.gif" /></a></li><li title="\u5531\u6b4c"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.79.ktv_thumb.gif" /></a></li><li title="\u51b0\u68cd"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.3a.ice.gif" /></a></li><li title="\u623f\u5b50"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d1.house_thumb.gif" /></a></li><li title="\u5e3d\u5b50"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.25.hat_thumb.gif" /></a></li><li title="\u8db3\u7403"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.c0.football.gif" /></a></li><li title="\u9c9c\u82b1"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.6c.flower_thumb.gif" /></a></li><li title="\u82b1"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.6c.flower.gif" /></a></li><li title="\u98ce\u6247"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.92.fan.gif" /></a></li><li title="\u5e72\u676f"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.bd.cheer.gif" /></a></li><li title="\u86cb\u7cd5"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.6a.cake.gif" /></a></li><li title="\u5496\u5561"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.64.cafe_thumb.gif" /></a></li></ul>',
f4:'<ul class="face_l" title="\u641e\u602a"><li title="\u5965\u7279\u66fc"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.bc.otm_thumb.gif" /></a></li><li title="\u56e7"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.15.j_thumb.gif" /></a></li><li title="\u5b85"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d7.z_thumb.gif" /></a></li><li title="\u6254\u9e21\u86cb"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.91.rjd_thumb.gif" /></a></li><li title="\u56f4\u89c2"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.f2.wg_thumb.gif" /></a></li><li title="\u5a01\u6b66"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.70.vw_thumb.gif" /></a></li><li title="\u7ec7"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.41.zz2_thumb.gif" /></a></li><li title="orz"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.c0.orz1_thumb.gif" /></a></li><li title="\u5b9e\u4e60"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.48.sx_thumb.gif" /></a></li><li title="\u5c0f\u4e11"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.6b.xc_thumb.gif" /></a></li><li title="\u5e05"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.36.s2_thumb.gif" /></a></li><li title="\u732a\u5934"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.58.pig.gif" /></a></li><li title="\u9ab7\u9ac5"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.bd.kl2_thumb.gif" /></a></li><li title="\u4fbf\u4fbf"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.34.s_thumb.gif" /></a></li><li title="\u96ea\u4eba"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d9.xx2_thumb.gif" /></a></li><li title="\u70ed\u543b"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.60.rw_thumb.gif" /></a></li><li title="\u4f24\u5fc3"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.ea.unheart.gif" /></a></li><li title="\u9ec4\u724c"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.a0.yellowcard.gif" /></a></li><li title="\u7ea2\u724c"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.64.redcard.gif" /></a></li><li title="\u8df3\u821e\u82b1"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.70.twh_thumb.gif" /></a></li><li title="\u793c\u82b1"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.3d.bingo_thumb.gif" /></a></li><li title="\u6253\u9488"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.b0.zt_thumb.gif" /></a></li><li title="\u7701\u7565\u53f7"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.49.slh_thumb.gif" /></a></li><li title="\u53f9\u53f7"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.3b.th_thumb.gif" /></a></li><li title="\u95ee\u53f7"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.9d.wh_thumb.gif" /></a></li><li title="\u53e5\u53f7"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.9b.jh_thumb.gif" /></a></li><li title="\u9017\u53f7"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.cc.dh_thumb.gif" /></a></li><li title="1"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.9b.1_thumb.gif" /></a></li><li title="2"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.2c.2_thumb.gif" /></a></li><li title="3"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.f3.3_thumb.gif" /></a></li><li title="4"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.2c.4_thumb.gif" /></a></li><li title="5"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d5.5_thumb.gif" /></a></li><li title="6"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.dc.6_thumb.gif" /></a></li><li title="7"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.43.7_thumb.gif" /></a></li><li title="8"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.6d.8_thumb.gif" /></a></li><li title="9"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.26.9_thumb.gif" /></a></li><li title="0"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d8.ling_thumb.gif" /></a></li><li title="\u95ea"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.ce.03_thumb.gif" /></a></li><li title="\u5566\u5566"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.c1.04_thumb.gif" /></a></li><li title="\u543c\u543c"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.34.05_thumb.gif" /></a></li><li title="\u5e86\u795d"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.67.06_thumb.gif" /></a></li><li title="\u563f"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.d3.01_thumb.gif" /></a></li><li title="kiss"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.59.kiss2_thumb.gif" /></a></li><li title="\u5706"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.53.yuan_thumb.gif" /></a></li><li title="\u56e2"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.11.tuan_thumb.gif" /></a></li><li title="\u56e2\u5706\u6708\u997c"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.e6.tuanyuan_thumb.gif" /></a></li><li title="\u6b22\u6b22"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.c3.liaobuqi_thumb.gif" /></a></li><li title="\u4e50\u4e50"><a href="javascript:void(0)" ><img src="/img/face/ext.normal.66.guanbuzhao_thumb.gif" /></a></li></ul>'}};
MGGLOBE={talkType1:{imgLimited:3,goodsLimited:3,shopLimited:1},talkType2:{imgLimited:0,goodsLimited:1,shopLimited:0},talkType3:{imgLimited:1,goodsLimited:3,shopLimited:0}};MGWIDGET={};MGPLUGIN={}})(jQuery);$(function(){if($.browser.msie&&$.browser.version=="6.0")try{document.execCommand("BackgroundImageCache",!1,!0)}catch(d){}MOGU.Globe_Short_Link_From();var a=MGTOOL.getQueryString("invite");a!=""&&MGTOOL.getCookie("from_user")==""&&MGTOOL.setCookie("from_user",a,{expires:7,path:"/"})});
