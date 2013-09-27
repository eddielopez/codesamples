<?php 

   // Site Assests
   $css = array('css/normalize.min.css', 'css/style.css', 'css/webfonts.css');
   
   $js = array('js/rubicon.js');
   
   //Site Title
   $title = "Rubicon | 2012 Annual Report";
   
   $body_id = "financial";
   
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<?php include('inc/head.php') ?>
       
         		
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
    
    </head>
    <body id="<?=$body_id?>">
   		<?php include('inc/nav.php') ?>
        <?php include('inc/downloads.php') ?>
    
    	  
         
    <div class="content">
            
	  <h3 class="blue">Financial Highlights</h3>
            
      <table border="1" id="financial-highlights">
        <tr class="border">
          <td class="small bottom-offset1">In thousands, except share and per share data</td>
          <td class="bottom-offset1">2012</td>
          <td align="right" class="bottom-offset1">2011</td>
          <td align="right" class="bottom-offset1">2010</td>
        </tr>
        <tr>
          <td class="top-offset1">Revenue</td>
          <td class="top-offset1"><span class="dollarsign0">$</span>67,243</td>
          <td align="right"  class="top-offset1"><span class="dollarsign1">$</span>134,000</td>
          <td align="right" class="top-offset1"><span class="dollarsign0">$</span>77,362</td>
        </tr>
        <tr>
          <td>Gross profit (loss)</td>
          <td><span class="parathesis">(40)</span></td>
          <td align="right">69,635</td>
          <td align="right">41,157</td>
        </tr>
        <tr>
          <td>Total operating expenses</td>
          <td>12,996</td>
          <td align="right">14,884</td>
          <td align="right">12,463</td>
        </tr>
        <tr>
          <td>Income (loss) from operations</td>
          <td><span class="parathesis">(13,036)</span></td>
          <td align="right">54,751</td>
          <td align="right">28,694</td>
        </tr>
        <tr>
          <td>Net income (loss)</td>
          <td><span class="parathesis">(5,538)</span></td>
          <td align="right">38,059</td>
          <td align="right">29,111</td>
        </tr>
        <tr>
          <td>Net Iincome (loss) per common share</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="tab-left">Basic</td>
          <td><span class="dollarsign2_0">$</span><span class="parathesis">(0.25)</span></td>
          <td align="right"><span class="dollarsign3_0">$</span>1.67</td>
          <td align="right"><span class="dollarsign3">$</span>1.34</td>
        </tr>
        <tr>
          <td class="tab-left">Diluted</td>
          <td><span class="dollarsign2_0">$</span><span class="parathesis">(0.25)</span></td>
          <td align="right"><span class="dollarsign3">$</span>1.61</td>
          <td align="right"><span class="dollarsign2">$</span><span class="parathesis">(1.28)</span></td>
        </tr>
        <tr>
          <td>Shares used in computing net income (loss) per common share</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td class="tab-left">Basic</td>
          <td>22,523,951</td>
          <td align="right">22,852,205</td>
          <td align="right">21,726,090</td>
        </tr>
        <tr class="border">
          <td class="bottom-offset1 tab-left">Diluted</td>
          <td class="bottom-offset1">22,523,951</td>
          <td align="right" class="bottom-offset1">23,596,162</td>
          <td align="right" class="bottom-offset1">22,790,896</td>
        </tr>
        
        <tr>
          <td class="top-offset1">Cash and cash equivalents and short-term investments</td>
          <td class="top-offset1"><span class="dollarsign4">$</span>43,934</td>
          <td align="right" class="top-offset1"><span class="dollarsign4_0">$</span>54,818</td>
          <td align="right" class="top-offset1"><span class="dollarsign4">$</span>82,204</td>
        </tr>
        <tr>
          <td>Working capital</td>
          <td>114,337</td>
          <td align="right" >119,056</td>
          <td align="right" >106,524</td>
        </tr>
        <tr>
          <td>Long-term investments</td>
          <td align="right">—</td>
          <td align="right" >2,000</td>
          <td align="right" >2,000</td>
        </tr>
        <tr>
          <td>Stockholders' equity</td>
          <td>225,386</td>
          <td align="right" >228,231</td>
          <td align="right" >192,094</td>
        </tr>
        <tr>
          <td>Net Cash from (used in) operations</td>
          <td><span class="parathesis">(2,738)</span></td>
          <td align="right" >24,612</td>
          <td align="right" >24,059</td>
        </tr>
        <tr class="border">
          <td>Capital expenditures</td>
          <td>10,975</td>
          <td align="right" >48,228</td>
          <td class="bottom-offset" align="right" >49,429</td>
        </tr> 
      </table>
      </div><!-- end .content -->
        
        
        
        
        
        
		<?php include('inc/footer.php') ?>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>  
        <?php include('inc/scripts.php') ?>       
    </body>
</html>
