<?php
$fbookIconUrl = 'images/icon_fbook.png';
$twitterIconUrl = 'images/icon_twitter.png';
$youtubeIconUrl = 'images/icon-youtube.png';
function getIconHtml($imgurl, $href, $iconWidth = 20) {	
	ob_start();
	?>
	<a href="<?php echo $href ?>" target="_blank"><img src="<?php echo $imgurl ?>" alt="Facebook" width="<?php echo $iconWidth ?>" border="0" /></a>
	<?php
	$html = ob_get_contents();
	ob_end_clean();
	// return the buffer
	return $html;
	
} 



$practice = new stdClass();
$practice->fbookUrl = 'https://www.facebook.com/OnslowEarNoseThroat';
$practice->twitterUrl = 'https://twitter.com/OAS_Practices';
$practice->youtubeUrl = 'https://www.youtube.com/channel/UCioC3eXyDwRj7q4jUnvUtxw';

$hospital = new stdClass();
$hospital->fbookUrl = 'http://www.facebook.com/OnslowHospital';
$hospital->twitterUrl = 'http://www.twitter.com/onslowhospital';
$hospital->youtubeUrl = 'http://www.youtube.com/onslowhospital';



 ?>
   </div><!--end #mainColumn -->
<?php include 'right-column.php' ?>
   
</div>


    <div class="clear">&nbsp;</div>
   <!--end #page -->
</div>
 <!--end #wrapper -->
</body>
<div id="footer">
	<img src="images/footer-top.png" width="920" height="9" />
	 <p class="footer-nav"><img src="images/spacer.gif" width="55" height="1" />&copy;<?php echo date("Y") ;?> Onslow Ear, Nose &amp; Throat&nbsp;&nbsp;|&nbsp;&nbsp;<a href="index.php" title="Click here to go back to the home page">Home</a>&nbsp;|&nbsp;<a href="services.php" title="Click here to view our Services">Services</a>&nbsp;|&nbsp;<a href="postop.php" title="Click here for Patient Resources">Patient Resources</a>&nbsp;|&nbsp;<a href="staff.php" title="Click here to view Our Staff">Our Staff</a>&nbsp;|&nbsp;<a href="policiesforms.php" title="Click here for Policies and Forms">Policies And Forms</a>&nbsp;|&nbsp;<a href="physicians.php" title="Click here for Referring Physicians">Referring Physicians</a>&nbsp;|&nbsp;<a href="contact.php" title="Click here to Contact Us">Contact Us</a></p>
  <p><?php echo getIconHtml($fbookIconUrl, $practice->fbookUrl) ?><?php echo getIconHtml($twitterIconUrl, $practice->twitterUrl) ?><?php echo getIconHtml($youtubeIconUrl, $practice->youtubeUrl) ?> Connect with Onslow Ear, Nose &amp; Throat </p>
  <p><?php echo getIconHtml($fbookIconUrl, $hospital->fbookUrl) ?><?php echo getIconHtml($twitterIconUrl, $hospital->twitterUrl) ?><?php echo getIconHtml($youtubeIconUrl, $hospital->youtubeUrl) ?>  Connect with Onslow Memorial Hospital </p>
  <div class="logo-wrap" style="text-align: center; margin: 20px;"><img src="images/logo-oas.png" width="76px;"></div>
</div>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11358640-11']);
  _gaq.push(['_setDomainName', 'auto']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
var dropdown=new TINY.dropdown.init("dropdown", {id:'navUL', active:'menuhover'});
</script>

        <map name="Map" id="Map">
          <area shape="rect" coords="454,75,622,98" href="http://www.onslow.org" target="_blank" alt="Visit Onslow.org" />
        <area shape="rect" coords="39,12,394,101" href="index.php" />
</map>
</html>


