
<?= include_js($js) ?>
<?php function include_js($js=null)
{
    if ($js)
    foreach($js as $js_file)
        if(strpos($js_file, '.js'))
            echo '<script type="text/javascript" src="' . $js_file .'"></script>' . PHP_EOL;
        else
            echo '<script type="text/javascript" src="' . $js_file .'.js"></script>' . PHP_EOL;

}
?>
<script type="text/javascript" src="js/vendor/cycle.js"></script>