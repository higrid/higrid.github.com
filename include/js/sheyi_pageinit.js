
/*

//dont obtain the errors
function killErrors() { 
return true; 
} 
window.onerror = killErrors; 





// IE HIDE html source code
//USAGE: 在BODY 标签中增加 <body onload=sheyiclear()>

function sheyiclear() {
Source=document.body.firstChild.data;
document.open();
document.close();
document.body.innerHTML=Source;
}
*/


var copybq="商务数据！请勿私自复制传播!"
document.body.oncopy = function () { 
        setTimeout( function () { 
                var text = clipboardData.getData("text");
                if (text) { 
						if(copybq){
                        text = text + "\r\n请注意:" + copybq + "详细出处参考："+location.href; 
						}else{
						text = text + "\r\n本文来自: C3C4商务管理系统 详细出处参考："+location.href; 
						}
						clipboardData.setData("text", text);
						
                } 
                                }, 100 )  
}




function addCookie(){// 加入收藏夹  
if (document.all){
window.external.addFavorite('http://10.1.10.34', 'C3C4商务管理');
} else if (window.sidebar){
window.sidebar.addPanel('C3C4商务管理', 'http://10.1.10.34', "");
}}   
function setHomepage(){　 // 设置首页  
if (document.all){
document.body.style.behavior = 'url(#default#homepage)';
document.body.setHomePage('http://10.1.10.34');
} else if (window.sidebar){
if (window.netscape){
 try {netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
} catch (e) {
alert("该操作被浏览器拒绝，如果想启用该功能，请在地址栏内输入 about:config ,然后将项为signed.applets.codebase_principal_support的值改为true");
}  
}  var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
 prefs.setCharPref('browser.startup.homepage', 'http://10.1.10.34');
}  }   
/*
<a href="javascript:setHomepage();" >设为首页</a>
<a href="javascript:addCookie();">加入收藏</a> 
*/