/*
全体超链接新窗口打开
var a=document.getElementsByTagName("a");
for (var i=0;i<a.length;i++)
  { 

  a[i].target="_blank";
  }
 
if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
	location="wap/";
}
*/
var banner=document.getElementById("banner");
banner.innerHTML="<a href='../up/bridegroom.apk'><b>下载APP，体验更快捷</b></a>";