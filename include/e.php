<?php
   if (!isset($_SERVER['REDIRECT_STATUS'])) {
        $_SERVER['REDIRECT_STATUS'] = '403';
   }
 $error = $_SERVER['REDIRECT_STATUS']; // - Displays HTTP response from original page, 404, 500 etc.
 switch($error){
         case 404:
         $title = 'Error 404 - Page not found';
         $error = 'The document/file requested was not found on this server.';
         break;
         case 400:
         $title = 'Error 400 - Bad Request';
         $error = 'Your browser sent a request that this server could not understand.';
         break;
         case 401:
         $title = 'Error 401 - Authorization Required';
         $error = 'This server could not verify that you are authorized to access the document requested. Either you supplied the wrong credentials (e.g., bad password), or your browser doesn\'t understand how to supply the credentials required.';
         break;
         case 403:
         $title = 'Error 403 - Forbidden';
         $error = 'You don\'t have permission to access on this server';
         break;
         case 405:
         $title = 'Error 405 - Method Not Allowed';
         $error = 'The method specified in the Request-Line is not allowed for the specified resource.';
         break;
         case 406:
         $title = 'Error 406 - Not Acceptable';
         $error = '';
		 case 408:
         $title = 'Error 408 - Request Timeout';
         $error = 'Your browser failed to send a request in the time allowed by the server.';
         break;
         case 409:
         $title = 'Error 409 - Conflict';
         $error = '';
         break;
         case 413:
         $title = 'Error 413 - Request Entity Too Large';
         $error = 'The requested resource does not allow request data with GET requests, or the amount of data provided in the request exceeds the capacity limit.';
         break;
         case 414:
         $title = 'Error 414 - Request-URI Too Large';
         $error = 'The requested URL\'s length exceeds the capacity limit for this server.';
         break;
         case 500:
         $title = 'Error 500 - Internal Server Error';
         $error = 'The server encountered an internal error or misconfiguration and was unable to complete your request.';
         break;
         case 501:
         $title = 'Error 501 - Method Not Implemented';
         $error = 'GET to URL not supported.';
         break;
		 case 502:
         $title = 'Error 502 - Bad Gateway';
         $error = 'The server received an invalid response from the upstream server while trying to fulfill the request.';
         break;
		 case 504:
         $title = 'Error 504 - Gateway Timeout';
         $error = 'The upstream server failed to send a request in the time allowed by the server.';
         break;


         default:
         $title = 'Error '.$error;
         $error = '';
 } ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML lang=cn xml:lang="cn" xmlns="http://www.w3.org/1999/xhtml">
<HEAD><TITLE><?php echo $title ?></TITLE>
<!-- Copyright 2003-2011 by Sheyi. All rights reserved. -->
<meta http-equiv="Content-type" content="text/html;charset=utf-8" />
<style>@media print{ body{display:none} } </style>
<META http-equiv=Refresh content="30; url=/" />
<STYLE type=text/css>BODY {
	BACKGROUND: #fff; MARGIN: 80px auto; FONT: 14px/150% Verdana, Georgia, Sans-Serif; COLOR: #000; TEXT-ALIGN: center
}
A:link {
	COLOR: #2c4c78; TEXT-DECORATION: none
}
A:visited {
	COLOR: #2c4c78; TEXT-DECORATION: none
}
A:hover {
	COLOR: #2c4c78; TEXT-DECORATION: none
}
A:active {
	COLOR: #2c4c78; TEXT-DECORATION: none
}
H1 {
	PADDING-RIGHT: 4px; PADDING-LEFT: 4px; FONT-SIZE: 14px; BACKGROUND: #eee; PADDING-BOTTOM: 4px; MARGIN: 0px; PADDING-TOP: 4px; BORDER-BOTTOM: #84b0c7 1px solid
}
DIV {
	BORDER-RIGHT: #84b0c7 1px solid; BORDER-TOP: #84b0c7 1px solid; BACKGROUND: #e5eef5; MARGIN: 0px auto; BORDER-LEFT: #84b0c7 1px solid; WIDTH: 500px; BORDER-BOTTOM: #84b0c7 1px solid
}
P {
	PADDING-RIGHT: 15px; PADDING-LEFT: 15px; PADDING-BOTTOM: 15px; MARGIN: 0px; PADDING-TOP: 15px
}
</STYLE>
</HEAD>
<BODY>

<DIV>
<H1><?php echo $title;?></H1>
<p><?php 
echo "The requested <b> $REQUEST_URI </b>encountered an internal error.<br />"; 
echo $error; 
?></p>

<?php
require(str_replace('\\','/',dirname(__FILE__)).'/../a/config/global.php');
if(defined('HIGRIDNET'))
		{
echo '<P>请访问<a href="http://higrid.net/">嗨网HiGrid首页</a>重新搜索你需要的资源，30秒后自动返回首页</P><P><A href="/"><FONT color=blue>http://higrid.net/</FONT></A></P>';		
			}
	else {
echo '<P>请登陆<a href="/">商务管理系统首页</a>重新搜索你需要的资源，30秒后自动返回首页</P><P><A href="/"><FONT color=blue>http://10.1.10.34</FONT></A></P>';		
		}
?>
</DIV>
<script type="text/javascript">var GOOG_FIXURL_LANG = 'zh_CN';
  var GOOG_FIXURL_SITE = 'http:/higrid.net'
</script><script type="text/javascript"
  src="http://linkhelp.clients.google.com/tbproxy/lh/wm/fixurl.js"></script>


</BODY></HTML>
