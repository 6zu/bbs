$(document).ready(function(){   
	$("div[id='bdshare']").each(function(i){ this.innerHTML="<span class='bds_more'>分享到：</span> <a class='bds_qzone'></a> <a class='bds_tsina'></a> <a class='bds_tqq'></a> <a class='bds_renren'></a> <a class='shareCount'></a>"; });
	var baidujs = document.getElementById("bdshell_js");
	if(baidujs) baidujs.src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
});