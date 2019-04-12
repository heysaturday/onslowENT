<?php
function getMainNav( $currentPage ) {
	ob_start();
	?>
	<div id="nav">
		<ul id="navUL" class="menu">
			<li <?php echo $currentPage == 'homepage' ? 'class="active"': NULL ?>><a href="index.php" title="Click here to go to back to the home page"><span class="icon-arrow-up"></span></a></li>
            <li <?php echo $currentPage == 'services' ? 'class="active"': NULL ?>><a href="services.php" title="Click here to view our Services"><span>Services</span></a></li>
            <li <?php echo $currentPage == 'resources' ? 'class="active"': NULL ?>><a href="postop.php" title="Click here to view our Services"><span>Patient<br />Resources</span></a></li>
            <li <?php echo $currentPage == 'staff' ? 'class="active"': NULL ?>><a href="staff.php" title="Click here to read about Our Staff"><span>Our<br />Staff</span></a></li>
            <li <?php echo $currentPage == 'forms' ? 'class="active"': NULL ?>><a href="policiesforms.php" title="Click here for Policies and Forms"><span>Policies<br />&amp; Forms</span></a></li>
            <li><a target="_blank" href="https://health.eclinicalworks.com/OAS"><span>Patient<br>Portal</span></a></li>                    
            <li <?php echo $currentPage == 'physicians' ? 'class="active"': NULL ?>><a href="physicians.php" title="Click here for Referring Physicians"><span>Referring<br />Physicians</span></a></li>
            <li <?php echo $currentPage == 'contact' ? 'class="active"': NULL ?>><a href="contact.php" title="Click here to Contact Us"><span>Contact<br />Us</span></a></li>
        </ul>
	</div>

	<?php
	$html = ob_get_contents();
	ob_end_clean();
	// return the buffer
	return $html;
}