<?php $currentPage = curPageName(); ?>

<ul class="navtop">
          <li><a href="index_en.php" title="home" <?php if($currentPage == 'index') echo 'class="current"'?>><span></span>home</a></li>
          
          <li><a href="info_en.php" title="company information" 
          <?php if(($currentPage == 'info') ||($currentPage == 'history') ||($currentPage == 'toc')|| ($currentPage == 'faq')||($currentPage == 'links')) echo 'class="current"';?>
           ><span></span>information</a></li>
          
          <li><a href="wholesale_en.php" title="wholesale" <?php if($currentPage == 'wholesale') echo 'class="current"';?>><span></span>wholesale e-shop</a></li>
          
          <li><a href="gallery_en.php" title="gallery" <?php if($currentPage == 'gallery') echo 'class="current"';?>><span></span>gallery</a></li>
          
          <li><a href="contact_en.php" title="contact us" 
          <?php if(( $currentPage == 'contact') ||($currentPage == 'expo') ||($currentPage == 'contactform')|| ($currentPage == 'retail')||($currentPage == 'map') ) echo 'class="current"';?>
          ><span></span>contact us</a></li>
</ul>

<?php if(($currentPage == 'info') ||($currentPage == 'history') ||($currentPage == 'toc')|| ($currentPage == 'faq')||($currentPage == 'links'))
{
	echo '<ul class="navbot_info">
				<li><a href="history_en.php" title="company profile" ';
   			if($currentPage == 'history') echo 'class="current"';
   			echo '><span></span>company profile</a></li> 
          	<li><a href="toc_en.php" title="terms"';
  				if($currentPage == 'toc') echo 'class="current"';      	
  				echo '><span></span>e-shop terms and conditions</a></li>
  				<li><a href="faq_en.php" title="faq"';
  				if($currentPage == 'faq') echo 'class="current"';  			
  				echo '><span></span>faq</a></li>
          	<li><a href="links_en.php" title="useful links"';
  				if($currentPage == 'links') echo 'class="current"';          	
  echo '><span></span>useful links</a></li></ul>'; 
}
?>

<?php if(( $currentPage == 'contact') ||($currentPage == 'expo') ||($currentPage == 'contactform')|| ($currentPage == 'retail')||($currentPage == 'map') )
{
	echo '<ul class="navbot_contact">
				<li><a href="expo_en.php" title="trade shows" ';
   			if($currentPage == 'expo') echo 'class="current"';
   			echo '><span></span>trade shows</a></li> 
          	<li><a href="contactform_en.php" title="contact form"';
  				if($currentPage == 'contactform') echo 'class="current"';      	
  				echo '><span></span>contact form</a></li>
          	<li><a href="map_en.php" title="location map"';
  				if($currentPage == 'map') echo 'class="current"';          	
  echo '><span></span>location map</a></li></ul>'; 
}
?>