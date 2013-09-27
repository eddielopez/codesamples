


<div class="fixed-wrapper">

<div class="header box-shadow">

	<div class="container">

       <div class="logo-container"> 	
            
            <a href="index.php" id="logo"></a>
            
            <p id="annualreport-text">2012 Annual Report</p>
            
       </div><!-- end .logo-container -->
                
        <?php  $script=strtolower(substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1));	?>
		<ul class="nav">
       
            <li><a href="unparalleled.php"<?php if ($script=="unparalleled.php" || $script =="unparallel.php") echo ' class="active"';?>>Unparalleled</a></li>
            
            <li><a href="letter-to-shareholders.php"<?php if ($script=="letter-to-shareholders.php") echo ' class="active"';?>>Letter to Shareholders</a></li>
            
            <li><a href="financial-highlights.php"<?php if ($script=="financial-highlights.php") echo ' class="active"';?>>Financial Highlights</a></li>
            
            <li><a href="corporate-information.php"<?php if ($script=="corporate-information.php") echo ' class="active"';?>>Corporate Information</a></li>
          
          
            <li><a href="#" id="download-toggle"<?php if ($script=="#download-toggle") echo ' class="active"';?>>Downloads</a></li>
      
		
		</ul><!-- end .nav -->                       
      
      </div><!-- end .container -->

</div><!-- end .header -->


</div>