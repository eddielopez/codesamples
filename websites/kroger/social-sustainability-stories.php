<?php

//Use this template for all pages and change or add what you need for that specific page.

// specific css to appear on a specific page or on every page $css = array('css/name-of-style.css');
$css = array();

// specific js to appear on a specific page or on every page  ie: $js = array('js/name-of-script.js');
$js = array('js/stories-tooltip.js');

//Site Title
$title = "Kroger | 2013 Corporate Sustainability Report";

//page specific class
$body_class = "social social-stories sus";

//page selected
$nav_selected_class = ".social-mn";

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
        <img src="img/social/social-stories-logo.jpg" width="110" height="34" alt="" />

        <h4>Sustainability Stories</h4>

    </div><!-- end .sub-left -->



</div><!-- end .subnav -->

<div class="interior-row">

    <div class="left-col">

        <div class="left-col-l">

            <div class="logo-layout">




              <div class="content">



                <h4>Perishable Donation Partnership</h4>

                <p>Kroger’s Perishable Donations Partnership (PDP) is a company-wide program that donates safe,
                nutritious, perishable food to Feeding America food banks with the capacity to safely handle and distribute fresh food.</p>

                 <p>In 2012, the PDP program expanded to more than <strong>2,300</strong> of our stores <strong>(96% participation)</strong> and resulted in <strong>49 million pounds</strong> of perishable food being donated to local food banks.</p>




              </div><!-- end .content -->

                <img class="logo left-60" src="img/social/individual-donation-logo.jpg" />


            </div><!-- end .logo-layout -->

            <span class="story-divider clear-both"></span>

            <div class="info-logo-layout">

                <img class="info" src="img/social/story-2-infograph.png" />

                <img id="cow-power-logo"  src="img/social/story-2-logo.jpg" />

                <div class="content">
                <h4>Cow Power<br> <span>Fair Oaks Farm, Indiana</span></h4>



                 <p>Last year, Fair Oaks began powering its vehicles fueled by compressed natural gas (CNG) with cleaned,
                  renewable natural gas generated from the cow manure produced on the farm. This established a first-of-its-kind “closed loop”
                  system of producing and delivering fluid milk to Kroger's dairy processing facilities. Since the CNG trucks have been up and
                  running, they have traveled more than <strong>11.6 million miles, reduced greenhouse gases by 6,892 metric tons,</strong> taken the equivalent of <strong>2.3 million gallons</strong> of diesel fuel off the road,
                  and provided more than <strong>5,000 MWh</strong> of electricity to the farm. We call it cow power!</p>

                </div>

            </div><!-- end .info-logo-wrapper -->

            <span class="story-divider"></span>

            <div class="info-logo-layout">

                 <img class="info" src="img/social/story-3-infograph.jpg" />
                <img class="logo" src="img/social/story-2-logo.png"  width="62" height="62" />

               <div class="content">
                <h4>Fish Power</h4>

                <p>Regal Springs, one of our farm raised tilapia suppliers, lets nothing go to waste. After filleting the fish, the carcasses are transported to their bioplant, where the fish oil is extracted and then processed
                        into biodiesel.  This biodiesel is used to run the company's boilers, energy generation plant, all the machinery at the processing plant and farms, as well as all the company trucks and vehicles!  Kroger supports
                        the social and environmental efforts that Regal Springs brings to life.  They are a true supplier-partner in providing us some of the highest quality, freshest, most sustainable tilapia available.</p>




               </div><!-- end .content -->

            </div><!-- end .info-logo-layout -->

            <span class="story-divider"></span>

            <div class="logo-layout">

                <div class="content">

                    <h4>Palm Oil</h4>

                    <p>Palm oil has become the world's leading oil crop and today accounts for roughly one-third of the global vegetable oil production.
                        Unless it is sourced responsibly, however, palm oil can contribute to deforestation in parts of the world.</p>
                    <p>Recently, Kroger adopted a company policy about our use of palm oil in our corporate brand products.  We committed to purchase 100% certified sustainable palm oil used in the corporate brands we manufacture, by the end of 2015. See our <a class='link' target='_blank' href=http://www.thekrogerco.com/docs/statements-policies/palm-oil-policy-statement.pdf?sfvrsn=0>policy</a>.</p>

                    <p>Today, all of the palm oil we procure is sourced from suppliers who are active Roundtable on Sustainable Palm Oil (RSPO) members, working toward certification. We are encouraging our Kroger labeled product manufacturer to do the same.</p>

                </div><!-- end .content -->

                    <img class="top-70 palm-oil"  src="img/social/individual-palm-OIL.jpg" />

            </div><!-- end .logo-layout -->

        </div><!-- end .left-col-l -->

        <div class="left-col-r">



        </div><!-- end .left-col-r -->


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
