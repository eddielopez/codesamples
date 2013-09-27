<?php

	function include_css($css=null)
	{
    	 if ($css)
    		foreach($css as $css_file)
        		echo '<link rel="stylesheet" href="'.$css_file.'" type="text/css" media="screen"/>' . PHP_EOL;
	}
?>       




        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="apple-touch-icon" href="favicon.png">
		<link rel="icon" href="favicon.png">
		<!--[if IE]><link rel="shortcut icon" href="favicon.ico"><![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#D83434">
		<meta name="msapplication-TileImage" content="path/to/tileicon.png">
       
        <script>
        if (navigator.userAgent.match(/iPad/i)) {
var viewportmeta = document.querySelector('meta[name="viewport"]');
if (viewportmeta) {
    viewportmeta.content = 'width=device-width, minimum-scale=1.0, maximum-scale=1.0, initial-scale=1.0';
    jQuery(document).ready(function() {
        document.body.addEventListener('gesturestart', function () {
            viewportmeta.content = 'width=device-width, minimum-scale=0.20, maximum-scale=1.0';
        }, false);
    });
}
}
</script>
        <title><?= $title ?></title>
        <meta name="description" content="">
        
        
        <!--Stylesheet-->
        <?php include_css($css); ?>
		
        <!--[if IE]>
			<link rel="stylesheet" type="text/css" href="all-ie-only.css" />
		<![endif]-->