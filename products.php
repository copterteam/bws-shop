<?
include_once("admin/func.php");
include_once("admin/pdo_connect.php");

$allproducts = allProducts($link);

?>
<!DOCTYPE html>

<html lang="en" class="wide wow-animation">
  <head>
    <!-- Site Title-->
    <title>Продукция - ударопрочные пластиковые кейсы IP67 | БВС Системы</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500">
    <link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
   
   <?include("header.php"); ?>
  <!-- Page Content-->
      <main class="page-content">
        <!-- ABOUT US-->
       <section class="section-35 section-sm-top-75 section-sm-bottom-0 text-center">
          <div class="shell">
            <div class="range range-sm-center">
              <div class="cell-xs-12 cell-md-10">
                              <h5>Продукция</h5>
              </div>
			   <p>Продукция компании "БВС Системы" представлена в двух сериях ударопрочных пластиковых кейсов - серия M и серия S. Для серии M отличительными чертами являются: материал корпуса "конструкционный полипропилет PP", более округлые формы и улучшенная фурнитура. Серия S отличается промышленным дизайном, нестандартными моделями больших размеров и выполнена из материала "конструкционный ABS".  Обе серии имеют класс влагозащиты IP67 и повышенную ударопрочность корпуса. </p>
            </div>
          </div>
        </section>

   
        <section class="section-bottom-150 text-center">
          <div class="shell">
            <div class="range caseselect">
			 <div class="partition">Кейсы серии M</div>

				<?
			foreach ($allproducts[0] as $prod) {
			echo('<div class="caseitem"><span class="caseart">'.$prod[art].'</span><a href="case/'.$prod[art].'"><img  src="images/cases/'.$prod[art].'.jpg" title="Ударопрочный пластиковый кейс '.$prod[art].'" /></a><br><span class="hrline">Внутренние размеры:</span><span class="size">Д: '.($prod[innerx]/10).' см</span><span class="size">Ш: '.($prod[innery]/10).' см</span><span class="size">В: '.($prod[innerz]/10).' см</span><strong class="price">'.number_format($prod[price],0,'.',' ').' р</strong></div>');
			
			}?>	 
        			  
			  <div class="partition">Кейсы серии S</div>

			<?
			foreach ($allproducts[1] as $prod) {
			echo('<div class="caseitem"><span class="caseart">'.$prod[art].'</span><a href="case/'.$prod[art].'"><img  src="images/cases/'.$prod[art].'.jpg" title="Ударопрочный пластиковый кейс '.$prod[art].'" /></a><br><span class="hrline">Внутренние размеры:</span><span class="size">Д: '.($prod[innerx]/10).' см</span><span class="size">Ш: '.($prod[innery]/10).' см</span><span class="size">В: '.($prod[innerz]/10).' см</span><strong class="price">'.number_format($prod[price],0,'.',' ').' р</strong></div>');

			}?>	 
						 
            </div>
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