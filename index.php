<?
include_once("admin/func.php");
include_once("admin/pdo_connect.php");

$maxsizes = maxSizes($link);

?>
<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
  <head>
    <!-- Site Title-->
    <title>Защитные пластиковые кейсы | БВС Системы</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500">
    <link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
		
		<style>
		.caseselect{
			clear:both;
		}
		
		 .caseitem{
			 position:relative;
			 border:1px solid #cccccc;
			 padding:0;
			 text-align:center;
			 margin: 20px 20px;
		 }
		 
		 .caseitem span.caseart{
			 display:block;
			 position:absolute;
			 width:100%;
			 background-color:rgba(130,130,130,.7);
			 color:#fff;
		 }
		 .caseitem img{
			 display:inline-block;
			 width:300px;			 
		 }
		  .caseitem span.hrline{
			  display:block;
			  border-bottom:1px solid #cccccc;
			  text-align:left;
			  padding-left:8px;
			  font-size:0.9em;
		  }
		  .caseitem span.size{
			  display:inline-block;
			  margin-top:0px;
			  padding:8px;
			  color:rgb(60,60,60);
			  background-color:rgba(255,255,255,.7);
		  }
		  .caseitem strong.price{
			  display:inline-block;
			  position:absolute;
			  right:0;
			  bottom:80px;
			  background-color:#063ec4;
			  color:#fff;
			  padding: 3px 12px;
			
		  }
		</style>
  </head>
  <body>
  
   <!-- Page-->
    <div class="page text-center">
	
<?include("header.php"); ?>

      <!-- Page Content-->
      <main class="page-content">
        <!-- Links -->
             
       <section>
         <img src="images/4316.jpg">
        </section>
       <section class="section-35 section-sm-top-75 section-sm-bottom-145 text-center">
          <div class="shell">
            <div class="range range-sm-center">
              <div class="cell-xs-12">
                <div class="hr-vertical"></div>
                <h5>ONLINE подбор кейса по размеру</h5>
              </div>
            </div>
            <div class="range">
              <div class="cell-xs-12">
                <!-- RD Mailform result field-->
                <div class="rd-mailform-validate"></div>
				
                <!-- RD Mailform-->
				<span>Укажите минимальные размеры (длина, ширина, высота) ВНУТРЕННЕГО ПРОСТРАНСТВА кейса, которые Вам необходимы</span>
				
                <form   style="margin-top:49px" method="post"  action="bat/searchbase.php" class="rd-mailform2">
                  <div class="range">
                    <div class="cell-xs-12 cell-md-5">
                      <div class="forinput"><input type="text"  name="innerx"  placeholder="Длина (Max: <?echo($maxsizes[0]);?> см)"></div>
                      <div class="forinput"><input style="margin-top:29px" type="text"  name="innery" placeholder="Ширина (Max: <?echo($maxsizes[1]);?> см)"></div>
                      <div class="forinput"><input style="margin-top:29px" type="text"  name="innerz" placeholder="Высота (Max: <?echo($maxsizes[2]);?> см)"></div>
                   
				  
					<button type="submit" class="btn btn-lg btn-rect btn-primary">Подобрать</button>
					</div>
                    <div class="cell-xs-12 cell-md-7 offset-top-29 offset-md-top-0">
                  <img src="images/5117-5.png" style="margin-top:29px">
                 </div>
                  </div>
                
                </form>
              </div>
            </div>
			 <div class="range caseselect"></div>
          </div>
        </section>
        <!-- Google map-->
        <section>
          <!-- RD Google Map-->
          <div class="rd-google-map">
            <div id="google-map" data-zoom="14" data-x="30.258712" data-y="59.949686" class="rd-google-map__model"></div>
            <ul class="rd-google-map__locations">
              <li data-x="30.258712" data-y="59.949686">
              </li>
            </ul>
          </div>
        </section>

      </main>
 
 
<?include("footer.php"); ?>


 </div>

    <!-- Java script-->
    <script src="js/core.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
    <script src="js/script.js"></script>

	
  </body>
</html>