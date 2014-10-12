<?php $currentPage = curPageName(); ?>

<ul class="navtop">
          <li><a href="index.php" title="home" <?php if($currentPage == 'index') echo 'class="current"'?>><span></span>home</a></li>
          <li><a href="info.php" title="πληροφορίες" 
          <?php if(($currentPage == 'info') ||($currentPage == 'history') ||($currentPage == 'toc')|| ($currentPage == 'faq')||($currentPage == 'links')) echo 'class="current"';?>
           ><span></span>πληροφορίες</a></li>
          <li><a href="wholesale.php" title="χονδρική" <?php if($currentPage == 'wholesale') echo 'class="current"';?>><span></span>χονδρική</a></li>
          <li><a href="gallery.php" title="gallery" <?php if($currentPage == 'gallery') echo 'class="current"';?>><span></span>gallery</a></li>
          <li><a href="contact.php" title="επαφή" 
          <?php if(( $currentPage == 'contact') ||($currentPage == 'expo') ||($currentPage == 'contactform')|| ($currentPage == 'retail')||($currentPage == 'map') ) echo 'class="current"';?>
          ><span></span>επαφή</a></li>
</ul>

<?php if(($currentPage == 'info') ||($currentPage == 'history') ||($currentPage == 'toc')|| ($currentPage == 'faq')||($currentPage == 'links'))
{
	echo '<ul class="navbot_info">
				<li><a href="history.php" title="history" ';
   			if($currentPage == 'history') echo 'class="current"';
   			echo '><span></span>ιστορία</a></li> 
          	<li><a href="toc.php" title="terms"';
  				if($currentPage == 'toc') echo 'class="current"';      	
  				echo '><span></span>όροι συνεργασίας</a></li>
  				<li><a href="faq.php" title="faq"';
  				if($currentPage == 'faq') echo 'class="current"';  			
  				echo '><span></span>συχνές ερωτήσεις</a></li>
          	<li><a href="links.php" title="links"';
  				if($currentPage == 'links') echo 'class="current"';          	
  echo '><span></span>χρήσιμοι σύνδεσμοι</a></li></ul>'; 
}
?>

<?php if(( $currentPage == 'contact') ||($currentPage == 'expo') ||($currentPage == 'contactform')|| ($currentPage == 'retail')||($currentPage == 'map') )
{
	echo '<ul class="navbot_contact">
				<li><a href="expo.php" title="εκθέσεις" ';
   			if($currentPage == 'expo') echo 'class="current"';
   			echo '><span></span>εκθέσεις</a></li> 
          	<li><a href="contactform.php" title="φόρμα επικοινωνίας"';
  				if($currentPage == 'contactform') echo 'class="current"';      	
  				echo '><span></span>φόρμα επικοινωνίας</a></li> 				
          	<li><a href="map.php" title="χάρτης"';
  				if($currentPage == 'map') echo 'class="current"';          	
  echo '><span></span>χάρτης</a></li></ul>'; 
}
?>
