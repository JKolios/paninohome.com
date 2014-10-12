<?php
function curPageName() {
	$pageName = substr(parse_url($_SERVER["SCRIPT_NAME"], PHP_URL_PATH),1,-4);
 	if(substr($pageName, -3,1) == '_') 
 	{ 
 		return substr($pageName, 0,-3);
 	}else{
 		return $pageName;
 }
}
?>
<div style="text-align: center" id="lang-switch"> 
		<a href="<?php echo curPageName().'.php'?>"> <img src="images/flag-gr.png" width="32" height="32" title="Ελληνικά" border="0"></a>
		<a href="<?php echo curPageName().'_en.php'?>"> <img src="images/flag-uk.png" width="32" height="32" title="English" border="0"></a>
</div>