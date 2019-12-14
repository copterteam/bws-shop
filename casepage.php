<?
include_once("admin/func.php");
include_once("admin/pdo_connect.php");

$caseart = substr($_SERVER['REQUEST_URI'],6);

$product = caseProduct($caseart,$link);
?>
<!DOCTYPE html>

<html lang="en" class="wide wow-animation">
  <head>
    <!-- Site Title-->
    <title><?print($product[art]);?> - ударопрочный пластиковый кейс IP67 | БВС Системы</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500">
    <link rel="stylesheet" href="/css/style.css">
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
       <section class="section-35 section-sm-top-75 section-sm-bottom-100 text-center">
          <div class="shell">
            <div class="range range-sm-center">
              <div >
                <h5><?print($product[art]);?> пластиковый кейс</h5>
				<div class="slider_container">
				<table class="casespec">
				<tr>
				<td colspan="2" class="half"><strong>Внешние размеры</strong></td>
				<td colspan="2" class="half"><strong>Внутренние размеры</strong></td>
				</tr>
				<tr>
				<td class="left">Длина:</td>
				<td><?print($product[outerx]/10);?> см</td>
				<td class="left">Длина:</td>
				<td><?print($product[innerx]/10);?> см</td>
				</tr>
					<tr>
				<td class="left">Ширина:</td>
				<td><?print($product[outery]/10);?> см</td>
				<td class="left">Ширина:</td>
				<td><?print($product[innery]/10);?> см</td>
				</tr>
					<tr>
				<td class="left">Высота:</td>
				<td><?print($product[outerz]/10);?> см</td>
				<td class="left">Высота:</td>
				<td><?print($product[innerz]/10);?> см</td>
				</tr>
				<tr>		
				<td colspan="2">Глубина крышки:</td>
					<td colspan="2"><?print($product[lid]/10);?> см</td>
				</tr>
				<tr>		
				<td colspan="2">Вес:</td>
					<td colspan="2"><?print($product[weight]);?> кг</td>
				</tr>
				<tr>		
				<td colspan="2">Материал:</td>
					<td colspan="2"><?print($product[material]);?></td>
				</tr>
				<tr>
				<td colspan="2"><strong>Цена:</strong></td>
				<td colspan="2" class="blue"><strong><?print(number_format($product[price],0,'.',' '));?> руб</strong></td>
				</tr>
				
				</table>
					<div id="slider_main">
				<?
				 $dirname = 'images/cases/'.$product[art].'/';
							 
				 $files = scandir($dirname);
				 
				 unset($files[0]); unset($files[1]);
											 
				 foreach($files as $pic){
		
						print('<div class="nextslide"><img  src="/'.$dirname.$pic.'" title="Ударопрочный пластиковый кейс '.$prod[art].'" /></div>');  
				 }
				?>		  
              </div>
			    </div>
				  </div>
			   <p>Продукция компании "БВС Системы" представлена в двух сериях ударопрочных пластиковых кейсов - серия M и серия S. Для серии M отличительными чертами являются: материал корпуса "конструкционный полипропилет PP", более округлые формы и улучшенная фурнитура. Серия S отличается промышленным дизайном, нестандартными моделями больших размеров и выполнена из материала "конструкционный ABS".  Обе серии имеют класс влагозащиты IP67 и повышенную ударопрочность корпуса. </p>
            </div>
			
			          <div class="range">
              <div class="cell-xs-12">
			   <h5>Остались вопросы про пластиковый кейс <?print($product[art]);?>?</h5>
			   
                <!-- RD Mailform result field-->
                <div class="rd-mailform-validate"></div>
                <!-- RD Mailform-->
                <form data-result-class="rd-mailform-validate" data-form-type="case"  method="post" action="/bat/rd-mailform.php" class="rd-mailform">
                  <div class="range offset-top-40">
                    <div class="cell-xs-12 cell-md-5">
                      <input type="text" name="name" data-constraints="@NotEmpty" placeholder="Ваше имя">
                      <input type="text" data-constraints="@Phone" name="phone" placeholder="Номер телефона">
                      <input type="text" name="email" data-constraints="@NotEmpty @Email" placeholder="Email">
					  <input type="hidden" name="casemodel" value="<?print($product[art]);?>">
                    </div>
                    <div class="cell-xs-12 cell-md-7 offset-top-29 offset-md-top-0">
                      <textarea name="message" data-constraints="@NotEmpty" placeholder="Ваш вопрос"></textarea>
                    </div>
                  </div>
                  <div class="range range-md-right text-left offset-top-40">
                    <div class="cell-xs-12 cell-md-7">
                      <button class="btn btn-lg btn-rect btn-primary">Отправить</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
			
			
          </div>
        </section>

   
    	  
      </main>
	  
  <?include("footer.php"); ?>

    </div>

    <!-- Java script-->
    <script src="/js/core.min.js"></script>
	<script src="/js/jquery.validate.min.js"></script>
    <script src="/js/script.js"></script>
  </body>
</html>