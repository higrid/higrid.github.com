<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/** 
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 *
 * See http://code.google.com/p/minify/wiki/CustomSource for other ideas
 **/

return array(
	////////////////////////////////////////////////////

    'sheyiformcss' => array(
	//'//include/assets/ui/themes/redmond/jquery-ui-custom.css', 
	'//include/css/cnf_form_other_style.css', 
	),

    'sheyiformjs' => array(
	//'//a/grid/js/jquery.js', ////采用新浪js
	//'//include/assets/ui/js/jquery-ui-custom.min.js', 
	'//include/assets/ui/js/jquery.form.js', 
	'//include/assets/ui/js/modernizr-2.0.6.js', 
	'//include/js/sheyiform.js', 
	),




////////////////////////////////////////////////////////////2013-10-13
    'higridjs' => array(
	//'//include/assets/ui/js/jquery-ui-custom.min.js', 
	'//include/assets/ui/js/i18n/grid.locale-cn.js', 
	'//include/js/sheyigrid.js',
	'//include/assets/ui/js/ui.multiselect.js', 
	'//include/assets/ui/js/jquery.jqGrid.min.js', 
	'//include/assets/highstock.js', 
	//'//include/assets/highcharts.js', 
	//'//include/assets/data.js', 

	//'//include/js/highstock.js', //升版
	//'//include/js/highcharts-exporting.js', //导出中文是乱码
	//'//a/chartcsv/common/sheyitock115.js',
	//'//include/js//include/js/amcharts/amcharts.js', //amcharts发生冲突
	),
//higrid 中CSV表格
    'higridcss' => array(
	//'//include/assets/ui/themes/redmond/jquery-ui-custom.css', 
	'//include/assets/ui/themes/ui.jqgrid.css', 
	'//include/assets/ui/themes/ui.multiselect.css', 
	//'//include/tab/official.css', 
	),




    'sheyitttcss' => array(
	'//include/tab/cnfarticletab.css',
	//'//a/cc/grid_sql/themes/redmond/jquery-ui-1.8.2.custom.css', 
	'//include/assets/ui/themes/redmond/jquery-ui-custom.css', 
	'//include/assets/ui/themes/ui.jqgrid.css', 
	'//include/assets/ui/themes/ui.multiselect.css', 
	'//include/tab/official.css', 
	),

    'sheyitttjs' => array(
	'//include/assets/ui/js/jquery-ui-custom.min.js', 
	'//include/tab/jquery.layout-latest.min.js', 
	'//include/assets/ui/js/i18n/grid.locale-cn.js', 
	'//include/js/sheyigrid.js', 
	'//a/cc/grid_sql/js/jquery.jqGrid.min.js', 
	'//include/assets/ui/js/jquery.jqGrid.min.js', 
	'//include/tab/tab.js', 
	'//include/assets/highstock.js', 
	//'//a/chartcsv/common/sheyitock115.js',
	//'//include/js//include/js/amcharts/amcharts.js', //amcharts发生冲突
	),














);