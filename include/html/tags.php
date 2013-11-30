<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>google ads</title>
<base   target=_top> 
</head>
<body topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0">
<?php
function getCloud( $data = array(), $minFontSize = 12, $maxFontSize = 30 ){
$minimumCount = min( array_values( $data ) );
$maximumCount = max( array_values( $data ) );
$spread = $maximumCount - $minimumCount;
$cloudHTML = '';
$cloudTags = array();

$spread == 0 && $spread = 1;

foreach( $data as $tag => $count )
	{
$size = $minFontSize + ( $count - $minimumCount ) * ( $maxFontSize - $minFontSize ) / $spread;
$font_size = rand(12,40);
$font_color = dechex(rand(0,16777215));
$cloudTags[] = 
	'<a style="font-size: ' . $font_size . 'px;color:'.$font_color.
	'" href=/cn/tags.html#'. $tag.'>'. htmlspecialchars( stripslashes( $tag ) ) . '</a>';


//style=\"color:".$font_color.";font-size:".$font_size."px;
}

return join( "\n", $cloudTags ) . "\n";
}

/***
 * Sample usage 
***/
$arr = Array('php' => 35, 'emacs' => 22, 'orgmode' => 44, 'html5' => 43,
'ajax' => 18, 'mysql' => 33, 'grid' => 15, 'latex' => 11,'tips' => 28, 'Filters' => 42);
echo getCloud($arr, 12, 36);
?>
</body></html>