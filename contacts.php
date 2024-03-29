<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
  <head>
    <!-- Site Title-->
    <title>Контакты | БВС Системы</title>
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
  </head>
  <body>
    <!-- Page-->
    <div class="page text-center">
   
   <?include("header.php"); ?>

  <!-- Page Content-->
      <main class="page-content">
        <!-- Get in touch with us-->
        <section class="section-35 section-sm-top-75 section-sm-bottom-145 text-center">
          <div class="shell">
		  <div class="range">
            <div class="cell-sm-4">
              <address class="contact-info">199178 Санкт-Петербург,<br>наб. реки Смоленки, 17</address>
              <p class="offset-top-15 offset-sm-top-29"><a href="https://www.google.ru/maps/dir//59.9494352,30.2594844/@59.949161,30.2589675,18.5z/data=!4m2!4m1!3e0" target="_blank" class="link link-primary">Проложить маршрут</a></p>
            </div>
            <div class="cell-sm-4 offset-top-45 offset-sm-top-0">
              <address class="contact-info">
                <dl>
                  <dt>Телефон</dt>
                  <dd><a href="callto:#">+7 812 309 7415</a></dd>
                </dl>
                <dl>
                  <dt>WhatsApp</dt>
                  <dd><a href="callto:#">+7 901 310 3767</a></dd>
                </dl>
                <dl>
                  <dt>Факс</dt>
                  <dd><a href="callto:#">+7 812 309 7415</a></dd>
                </dl>
              </address>
            </div>
            <div class="cell-sm-4 offset-top-45 offset-sm-top-0">
              <address class="contact-info">
                <dl class="dl-inline">
                  <dt>E-mail</dt>
                  <dd><a href="mailto:shop@bws-shop.ru">shop@bws-shop.ru</a></dd>
                </dl>
				 <dl class="dl-inline">
				   <dt>Instagram</dt>
                  <dd><a href="https://www.instagram.com/bws_cases" target="_blank">bws_cases</a></dd>
                </dl>
				
              </address>
            </div>
          </div>
		  
		  
            <div class="range range-sm-center">
              <div class="cell-xs-12">
                <div class="hr-vertical"></div>
                <h5>Форма обратной связи</h5>
              </div>
            </div>
            <div class="range">
              <div class="cell-xs-12">
                <!-- RD Mailform result field-->
                <div class="rd-mailform-validate"></div>
                <!-- RD Mailform-->
                <form data-result-class="rd-mailform-validate" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform">
                  <div class="range">
                    <div class="cell-xs-12 cell-md-5">
                      <input type="text" name="name" data-constraints="@NotEmpty" placeholder="Ваше имя">
                      <input type="text" data-constraints="@Phone" name="phone" placeholder="Номер телефона">
                      <input type="text" name="email" data-constraints="@NotEmpty @Email" placeholder="Email">
                    </div>
                    <div class="cell-xs-12 cell-md-7 offset-top-29 offset-md-top-0">
                      <textarea name="message" data-constraints="@NotEmpty" placeholder="Ваше сообщение"></textarea>
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