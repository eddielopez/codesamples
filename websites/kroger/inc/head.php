    <?php

	function include_css($css=null)
		{
    	 if ($css)
    		foreach($css as $css_file)
        		echo '<link rel="stylesheet" href="'.$css_file.'" type="text/css" media="screen"/>' . PHP_EOL;
		}
	?> 
    <head>
        <!-- fonts -->
    	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?=$title?></title>
        <meta name="description" content="">
        <script type="text/javascript">
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
        <!--the links below are for the favicon they help them appear across all broswers-->
        <link rel="apple-touch-icon" href="favicon.png">
		<link rel="icon" href="favicon.png">
		<!--[if IE]><link rel="shortcut icon" href="favicon.ico"><![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#D83434">
		<meta name="msapplication-TileImage" content="favicon.png">
       
        <script><!-- script to scale site in ipad -->
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
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:400,900italic,900,700italic,700,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,700italic' rel='stylesheet' type='text/css'>
        <?php include_css($css); ?><!-- where the css you put in the array wil appear -->
        
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        
        
    </head>
