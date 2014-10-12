<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="el" xml:lang="el">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>Paninohome.com - ΠΑΝΙΝΟ, Θεμελίδου Ι. - Μπάνου Γ. ΟΕ</title>
<meta name="description" content="ΠΑΝΙΝΟ, Θεμελίδου Ι. - Μπάνου Γ. ΟΕ, Είδη σπιτιού, δώρου, Φόρμα Επικοινωνίας" />
<link rel="stylesheet" href="style.css" />

<script type="text/javascript" src="jquery-latest.pack.js"></script>
<script type="text/javascript" src="jquery.form.js"></script>
<script type="text/javascript">
$(document).ready(function() { 
var options = { 
target:        '#alert',
}; 
$('#contactForm').ajaxForm(options); 
}); 

$.fn.clearForm = function() {
  return this.each(function() {
	var type = this.type, tag = this.tagName.toLowerCase();
	if (tag == 'form')
	  return $(':input',this).clearForm();
	if (type == 'text' || type == 'password' || tag == 'textarea')
	  this.value = '';
	else if (type == 'checkbox' || type == 'radio')
	  this.checked = false;
	else if (tag == 'select')
	  this.selectedIndex = -1;
  });
};

</script>
</head>

<body>
<img src="images/panino.png" alt="Panino Logo" />
<?php include("language_switch.php"); ?>
<div id="mod-id" class="mod">

   <div class="mod-content">
     <div class="hd">
         <?php include("nav.php"); ?>
     </div>
     <div class="bd">
     <h2> ΦΟΡΜΑ ΕΠΙΚΟΙΝΩΝΙΑΣ</h2>     
      <div class="message"><div id="alert"></div></div>

        <div class="contact">
          <form action="sendmail.php" method="post" id="contactForm">
            <ul>
              <li>
              <label for="name">Όνομα:</label>
              <input type="text" name="name" value="" id="name" />
              </li>
              <li>
              <label for="email">Email:</label>
              <input type="text" name="email" value="" id="email" />
              </li>
              <li>
              <label for="tele">Τηλέφωνο:</label>
              <input type="text" name="tele" value="" id="tele" />
              </li>
              <li class="special">
              <label for="last">Don't fill this in:</label>
              <input type="text" name="last" value="" id="last" />
              </li>
              <li>
              <label for="message">Μήνυμα: </label><textarea rows="5" name="message"></textarea>
              </li>
              <li class="submitbutton">
              <input type="submit" value="Αποστολή Μηνύματος" />
              </li>
            </ul>
          </form>
        </div>
     Μπορείτε επίσης να μας στείλετε e-mail στο: <a href="mailto:info@panino.gr">info@panino.gr</a>. 
     </div>
     

     <div class="ft">
      <?php include("foot.php"); ?> 
</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("UA-6754715-1");
pageTracker._trackPageview();
} catch(err) {}
</script>
</body>
</html>