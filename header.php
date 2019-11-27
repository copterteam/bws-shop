<?	$file = $_SERVER['SCRIPT_FILENAME']; ?>

      <!-- Page Header-->
      <header class="page-head">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fullwidth" data-lg-layout="rd-navbar-fullwidth" data-lg-device-layout="rd-navbar-fullwidth" class="rd-navbar">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                <!-- RD Navbar Brand-->
                <div class="rd-navbar-brand"><img src="images/header_logo.png" ><a href="index.html" class="brand-name">БВС СИСТЕМЫ</a></div>
                <aside class="rd-navbar-aside">
                  <div data-rd-navbar-toggle=".rd-navbar-aside" class="rd-navbar-aside-toggle"><span></span></div>
                  <div class="rd-navbar-aside-content">
                    <address class="rd-navbar-aside-contact-info rd-navbar-aside-contact-info-variant-1">
                      <p>199178 Санкт-Петербург,<br>наб. реки Смоленки, 17</p>
                    </address>
                    <address class="rd-navbar-aside-contact-info rd-navbar-aside-contact-info-variant-2">
                      <p><a href="callto:#">+7 812 309 7415</a></p>
                      <p><a href="callto:#">+7 901 310 3767</a></p>
                    </address>
                  </div>
                </aside>
              </div>
              <div class="rd-navbar-nav-wrap">
                <!-- RD Navbar Nav-->
                <ul class="rd-navbar-nav">
                  <li <?if(substr($file,-9) == 'index.php'){?>	class="active"<?}?> ><a href="/">Главная</a></li>
                  <li <?if(substr($file,-9) == 'about.php'){?>	class="active"<?}?>><a href="/about">О нас</a></li>
                  <li <?if(substr($file,-10) == 'uslugi.php'){?>	class="active"<?}?> ><a href="/uslugi">Услуги</a></li>
                  <li <?if(substr($file,-12) == 'products.php'){?>	class="active"<?}?>><a href="/products" target="_blanck">Продукция</a></li>
                  <li <?if(substr($file,-12) == 'contacts.php'){?>	class="active"<?}?>><a href="/contacts">Контакты</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </div>

	<?	if(substr($file,-9) == 'index.php'){?>	
  <!-- Swiper-->
        <div class="page-head-body">
          <div class="swiper-wrap">
            <div class="swiper-container swiper-slider">
              <div class="swiper-wrapper">			  
                <div data-slide-bg="images/4316.jpg" class="swiper-slide"></div>
              <div data-slide-bg="images/5729.jpg" class="swiper-slide"></div>
              </div>
              <!-- Swiper Pagination-->
              <div class="swiper-pagination"></div>
            </div>
          </div>
          <div class="page-head-content bg-context-dark text-center">
            <div class="section-bottom-80 section-md-bottom-100 section-sh2-bottom-204 bg-context-dark block-top-level">
              <div class="section-35 section-sm-89">
                <div class="shell text-center">
                  <ul class="list-inline-separated">
                    <li><a href="#">facebook</a></li>
                    <li><a href="#">youtube</a></li>
                    <li><a href="#">instagram</a></li>
                  </ul>
                </div>
              </div>
              <div class="section-35 section-md-100 section-lg-35 section-sh2-189">
                <div class="shell">
                  <div class="range range-condensed range-md-center text-center">
                    <div class="cell-xs-12 cell-md-10">
                      <h2 style="color:#222323;background-color:rgba(120,120,120,.5)">
                        Защитные пластиковые кейсы для промышленного оборудования
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
	<?}?>	

      </header>