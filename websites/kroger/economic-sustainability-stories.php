<?php

//Use this template for all pages and change or add what you need for that specific page.

// specific css to appear on a specific page or on every page $css = array('css/name-of-style.css');
$css = array();

// specific js to appear on a specific page or on every page  ie: $js = array('js/name-of-script.js');
$js = array('js/stories-tooltip.js');

//Site Title
$title = "Kroger | 2013 Corporate Sustainability Report";

//page specific class
$body_class = "economic eco-stories sus";

//page selected
$nav_selected_class = ".economic-mn";

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<?php include_once('inc/head.php')?>

<body class="<?=$body_class?>">


<?php include_once('inc/header.php'); ?>

<div class="subnav-bar">

    <div class="sub-left">
        <img src="img/economic/social-stories-logo.jpg" width="178" height="28" alt="" />

        <h4>Sustainability Stories</h4>

    </div><!-- end .sub-left -->



</div><!-- end .subnav -->

<div class="interior-row">

        <div class="left-col bottom-150">


            <div class="logo-layout">

            <img class="logo" src="img/economic/individual-story-logo.jpg" />

            <div class="frieda-content">

            <h4>Frieda’s</h4>

            <p>For over 50 years, specialty wholesaler Frieda's Inc has been famously innovating unusual and exotic fruits and vegetables in supermarket produce departments.  This woman-owned company was recently recognized as <strong>Vendor of the Year</strong> by one of our divisions for produce merchandising.</p>



            </div><!-- end .frieda-content -->

            <ul id="frieda-list">
                <li>a. black garlic</li>
                <li>b. Buddha's hand</li>
                <li>c. rambutan eyeball</li>
                <li>d. sangria artichoke </li>
                <li>e. purple potatoes</li>
            </ul>


        </div><!-- end .logo-layout -->






        </div><!-- end .left-col-l -->


    </div><!-- end .left-col -->

</div><!-- end .interiror-row -->


<?php include_once('inc/footer.php');?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<script>
    $(document).ready(function () {
        $("<?=$nav_selected_class?>").addClass("selected");
    });
</script>

<?php include_once('inc/scripts.php')?>
</body>
