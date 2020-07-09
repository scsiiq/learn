<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/** @var JDocumentHtml $this */

$app = JFactory::getApplication();
$user = JFactory::getUser();

// Output as HTML5
$this->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option = $app->input->getCmd('option', '');
$view = $app->input->getCmd('view', '');
$layout = $app->input->getCmd('layout', '');
$task = $app->input->getCmd('task', '');
$itemid = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');


$doc = JFactory::getDocument();

$scr = '/media/jui/js/jquery.min.js';
$repl_scr = '/templates/protostar/js/jquery-3.4.1.min.js';
$key = array_keys($doc->_scripts);
$value = array_values($doc->_scripts);
$key = str_replace($scr, $repl_scr, $key);
$doc->_scripts = array_combine($key, $value);


// Load Bootstrap CSS
// 3dlab\templates\protostar
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/bootstrap.min.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/animate.min.css');
//$doc->addStyleSheet ( $this->baseurl . '/templates/' . $this->template . '/bootstrap-3/css/bootstrap-theme.css' );
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/fontawesome.min.css?ver=1.1', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet('https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i|PT+Serif:400,400i,700,700i&display=swap&subset=cyrillic', $type = 'text/css', $media = 'screen,projection');


$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/swiper.min.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/jquery.fancybox.min.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/style.css?ver=1.02', $type = 'text/css', $media = 'screen,projection');

// Add JavaScript Frameworks
//JHtml::_('jquery.framework', false);
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/popper.min.js');
//$doc->addScript ( $this->baseurl . '/templates/' . $this->template . '/js/bootstrap.min.js' );


$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/swiper.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/wow.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery.fancybox.min.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/mine.js?ver=1.01');
//$doc->addScript ( $this->baseurl . '/templates/' . $this->template . '/js/roman.js?ver=1.00', $type = 'application/javascript' );

// Check for a custom js file
JHtml::_('script', 'user.js', array('version' => 'auto', 'relative' => true));


?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <jdoc:include type="head"/>
    <script src="/templates/protostar/js/bootstrap.min.js"></script>
</head>

<div id="wrapper">
    <!-- =============================header================================= -->
    <header class="top_mini">

        <div id="top_menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo" href="/"><img src="/images/Group59.png" alt=""></a>

                    <div id="top_burger" class="tel col-md-6">
                        <div class="wrap_tel col-md-6">
                            <span class="time">Пн-Пт 08:00-18:00</span>

                            <a class="phone" href="tel:+74951203132">8 (495) 120-З1-З2</a>

                        </div>
                        <div class="text col-md-6">
                            <!--                                        Button trigger modal -->
                            <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                Записаться на обучение
                            </a>
                        </div>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsBurger"
                            aria-controls="navbarsBurger" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mob_menu_text">Меню</span>
                        <span class="wrap_nav">
                    <span class="navbar-toggler-icon"></span>
                    </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarsBurger">
                        <ul class="navbar-nav mr-auto col-md-12">
                            <li class="nav-item active col-md-7">
                                <jdoc:include type="modules" name="position-top"/>
                            </li>

                            <div id="bottom_burger" class="tel col-md-5">
                                <div class="wrap_tel col-md-6">
                                    <span class="time">Пн-Пт 08:00-18:00</span>
                                    <a class="phone" href="tel:+74951203132">8 (495) 120-З1-З2</a>
                                </div>
                                <div class="text col-md-6">
                                    <!--                                        Button trigger modal -->
                                    <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                                        Записаться на обучение
                                    </a>
                                </div>
                            </div>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>


    </header>
    <!-- \\=============================header================================= -->


    <jdoc:include type="component"/>


    <!-- ==================================footer=========================================-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <p>ООО МКЦ «Образовательный Стандарт». Все права защищены. </p>
                    <p>Обучение, переподготовка, повышение квалификации и аттестация по рабочим специальностям.</p>
                    <p>Не является публичной офертой. </p>
                    <a class="politic" href="/politika-obrabotki-personalnykh-dannykh">Политика обработки персональных
                        данных</a>
                    <ul>
                        <li>2019 © <a href="https://web2.ru" target="_blank">Студия Web2</a> – Создание и продвижение
                            сайтов
                        </li>
                    </ul>
                </div>
                <div class="two col-order-1 col-12 col-md-5">
                    <div class="icons col-md-3">
                        <a href="https://www.instagram.com/">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="https://ru-ru.facebook.com/">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                        </a>
                    </div>
                    <div class="adress col-md-9">
                        <p>8(495)120-З1-З2</p>
                        <p>Москва, пр-т Андропова, 22 БЦ «Нагатинский»</p>
                        <p>Пн-Пт 08:00-18:00</p>
                        <!--Button trigger modal -->
                        <a class="learn" href="#" data-toggle="modal" data-target="#exampleModalCenter">
                            Записаться на обучение
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--\\ ==================================footer=========================================-->

    <!--модальное окно "Записаться на обучение"-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Записаться на обучение</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="/images/union.png" alt=""></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text_form">
                        <div class="col-md-12 col-sm-12">
                            <!-- Name -->
                            <label for="defaultContactFormName" class="col-form-label">Имя Фамилия</label>
                            <input type="text" id="defaultContactFormName" class="form-control mb-1"
                                   placeholder="Представьтесь" info="Имя Фамилия">
                            <!-- Phone -->
                            <label for="defaultContactFormPhone" class="col-form-label">Телефон</label>
                            <input type="phone" id="defaultContactFormPhone" class="form-control mb-1"
                                   placeholder="Укажите ваш номер телефона" info="Телефон">
                            <!-- Email -->
                            <label for="defaultContactFormEmail" class="col-form-label">Почта</label>
                            <input type="email" id="defaultContactFormEmail" class="form-control mb-1"
                                   placeholder="Укажите ваш емаил" info="Почта">

                            <!-- Send button -->
                            <button class="btn btn-secondary  btn-rounded btn-block z-depth-0 my-4">Отправить</button>
                            <p class="small_text">
                                <!--type="button"  data-dismiss="modal"-->
                                Нажимая на кнопку «Отправить», вы даете согласие на обработку своих персональных данных
                                и соглашаетесь с политикой конфиденциальности.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//модальное окно "Записаться на обучение"-->

    <!--модальное окно "Отправить заявку-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Отправить заявку</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><img src="/images/union.png" alt=""></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text_form">
                        <div class="col-md-12 col-sm-12">
                            <!-- Name -->
                            <label for="defaultContactFormName" class="col-form-label">Имя Фамилия</label>
                            <input type="text" id="defaultContactFormName" class="form-control mb-1"
                                   placeholder="Представьтесь" info="Имя Фамилия">
                            <!-- Phone -->
                            <label for="defaultContactFormPhone" class="col-form-label">Телефон</label>
                            <input type="phone" id="defaultContactFormPhone" class="form-control mb-1"
                                   placeholder="Укажите ваш номер телефона" info="Телефон">
                            <!-- Email -->
                            <label for="defaultContactFormEmail" class="col-form-label">Почта</label>
                            <input type="email" id="defaultContactFormEmail" class="form-control mb-1"
                                   placeholder="Укажите ваш емаил" info="Почта">

                            <!-- Send button -->
                            <button class="btn btn-secondary  btn-rounded btn-block z-depth-0 my-4">Отправить</button>
                            <!--type="button"  data-dismiss="modal"-->
                            <p class="small_text">
                                Нажимая на кнопку «Отправить», вы даете согласие на обработку своих персональных данных
                                и соглашаетесь с политикой конфиденциальности.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//модальное окно "Отправить заявку-->


</div>

<?php /*

<div class="modal fade" id="send_rekvizit" tabindex="-1" role="dialog" aria-labelledby="send_rekvizitLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="send_rekvizitLabel">Отправка реквизитов</p>
      </div>
      <div class="modal-body">
          <div class="div_full">
             <input class="form-control name_mod" type="text" placeholder="ФИО">
          </div>
          <div class="div_full">
              <input class="form-control tel_mod" type="tel" placeholder="Телефон">
              <small class="err hidden">Укажите телефон</small>
          </div>
          <div class="div_full">
    	        <input class="form-control email_mod" type="email" placeholder="Почта">
          </div>
    	<div class="example-2">
		  <div class="form-group">
		    <input type="file" name="file" id="file" class="input-file">
		    <label for="file" class="btn btn-tertiary js-labelFile">
		      <i class="icon fa fa-check"></i>
		      <span class="js-fileName">Прикрепить реквизиты</span>
		    </label>
		    <label for="send_rekvizit_check" class="jackdaw">
		        <input type="checkbox" id="send_rekvizit_check" checked="checked">
		        <i></i>
		        Я согласен(а) на обработку <a href="/accept-licenses/">персональных данных</a>
		    </label>
		  </div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" id="send_rekvizit_submit" class="btn">Отправить</button>
      </div>
    </div>
  </div>
  <script>
  jQuery(document).ready(function($) {
    $('input[type="file"]').change(function(){
        var value = $("input[type='file']").val();
        $('.js-fileName').text(value);
    });
});
  </script>
</div>
	<div class="wrapper">
		<div class="content_all">
			<?php $main_page = $_SERVER['REQUEST_URI'][0] . $_SERVER['REQUEST_URI'][1]; ?>
			<!-- Header -->
			<?php if($_SERVER['REQUEST_URI'] == '/' || $main_page == '/?'){ ?>
			<header>
				<div class="container-fluid main_page">
						<div class="container top_nav">
							<div class="row">
								<div class="col-3 logo_block">
									<img src="../images/logo.png" alt="GP-CARD">
								</div>
								<div class="col-5 slogan_block">
									<p>Официальный дилер «газпромнефть – <br>корпоративные продажи»</p>
								</div>
								<div class="col-4 cont_block">
									<p>
										<span class="email">info@gp-card.ru</span>
										<span class="phone"><a href="tel:88005516012">8 (800) 551 60 12</a></span>
									</p>
								</div>
								<div class="col-12 menu_block">
	                                <nav class="navbar navbar-expand-lg navbar-light">
										 <button class="navbar-toggler" id="nav_button">
										    <i class="fa fa-bars" aria-hidden="true"></i>
										 </button>
										 <div class="collapse navbar-collapse" id="top_nav_menu">
										    <div class="navbar-nav">
		                                        <jdoc:include type="modules" name="top_menu" style="none" />
										    </div>
										 </div>
									</nav>
								</div>
							</div>
						</div>
					<div class="row img_block">
						<div class="container">
							<div class="col-6 title_block">
								<h1>Сервисные карты<br> от «Газпром нефти»</h1>
								<span><i class="fa fa-check" aria-hidden="true"></i>более 2600 АЗС по России и странам СНГ</span>
								<span><i class="fa fa-check" aria-hidden="true"></i>более 350 моек, шиномонтажных мастерских<br> и станций техобслуживания</span>
								<img src="/images/card-main-2big-300.png" id="main_card"/>
							</div>
						</div>
					</div>
				</div>
			</header>
			<?php } else {?>
			<header class="stok" role="banner">
				<div class="container-fluid">
					<div class="container top_nav">
							<div class="row">
								<div class="col-3 logo_block">
									<a href="/">
										<img src="../images/logo.png" alt="GP-CARD">
									</a>
								</div>
								<div class="col-5 slogan_block">
									<span>Официальный дилер «газпромнефть – <br>корпоративные продажи»</span>
								</div>
								<div class="col-4 cont_block">
									<p>
										<span class="email">info@gp-card.ru</span>
										<span class="phone"><a href="tel:88005516012">8 (800) 551 60 12</a></span>
									</p>
								</div>
								<div class="col-12 menu_block">
	                                <nav class="navbar navbar-expand-lg navbar-light">
										  <button class="navbar-toggler" id="nav_button">
										    <i class="fa fa-bars" aria-hidden="true"></i>
										 </button>
										 <div class="collapse navbar-collapse" id="top_nav_menu">
										    <div class="navbar-nav">
		                                        <jdoc:include type="modules" name="top_menu" style="none" />
										    </div>
										 </div>
									</nav>
								</div>
							</div>
						</div>
				</div>
			</header>
			<?php } ?>
			<jdoc:include type="message" />
			<jdoc:include type="component" />
		</div>
			<!-- Подвал -->
			<footer class="footer" style="position: relative;">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-lg-2">
							<img src="/images/logo_footer.png" alt="">
						</div>
						<div class="col-md-9 col-lg-10">
							 <jdoc:include type="modules" name="top_menu" style="none" />
						</div>
						<div class="col-12">
							<p class="powered">© <?php echo date('Y'); ?> GP-CARD <br>
                                <a target="_blank" href="https://web2.ru" style="color: rgba(164, 169, 186, 0.5);">Студия "Web2"</a></p>
						</div>
					</div>
				</div>
			</footer>




	</div>
	*/ ?>
</body>
</html>