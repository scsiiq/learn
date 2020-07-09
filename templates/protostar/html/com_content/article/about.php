<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

// Create shortcuts to some parameters.
$params  = $this->item->params;
$images  = json_decode($this->item->images);
$urls    = json_decode($this->item->urls);
$canEdit = $params->get('access-edit');
$user    = JFactory::getUser();
$info    = $params->get('info_block_position', 0);

// Check if associations are implemented. If they are, define the parameter.
$assocParam = (JLanguageAssociations::isEnabled() && $params->get('show_associations'));
JHtml::_('behavior.caption');

?>
<?php

$images = json_decode($this->item->images);
$urls = json_decode($this->item->urls);

/* Массив дополнительных полей */
$arr_dop = $this->item->jcfields; // получили массив полей
$html_text_baner = ''; // пустая строка переменной текст банера

foreach($arr_dop as $val){
    if($val->label == 'Текст банера'){
        $html_text_baner = $val->rawvalue; // получили html текст банера
    }
}




?>
<!-- блок Все курсы -->
<!-- подключаем breadcrumbs для страницы -->
<section id="about_us"  class="about_wrap">
<?php
jimport( 'joomla.application.module.helper' ); //
$module = JModuleHelper::getModules('breadcrumbs'); // заполняем массив модулями, опубликованными в позиции position-748
$attribs['style'] = 'none'; // указываем стиль вывода модуля none (так как при использовании стиля xhtml наблюдается дублирование заголовков модуля)

foreach($module as $moduleitem){ // перебираем в цикле и выводим по очереди все модули из позиции position-748
    echo JModuleHelper::renderModule($moduleitem, $attribs);
}
?>

    <div class="container">
        <h1><?php echo $this->escape($this->item->title); ?></h1>
    </div>
</section>

<div class="wrapper_about">
<section id="fire_wrap">
    <div class="container">
        <div class="row">
            <div class="base col-md-12 col-lg-8 ">
                <div class="tags">
                    <?php echo $this->item->text; ?>
                </div>
            </div>

            <div class="sign col-md-8 col-lg-4 ">
                <!--модальное окно "Записаться на обучение"-->
                <div class="content">
                    <div class="header">
                        <h5 class="modal-title">Записаться на обучение</h5>
                    </div>
                    <div class="body">
                        <div class="text">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <!-- Name -->
                                <label for="defaultContactFormName" class="col-form-label">Имя Фамилия</label>
                                <input type="text" id="defaultContactFormName" class="form-control mb-1" placeholder="Представьтесь" info="Имя Фамилия">
                                <!-- Phone -->
                                <label for="defaultContactFormPhone" class="col-form-label">Телефон</label>
                                <input type="phone" id="defaultContactFormPhone" class="form-control mb-1" placeholder="Укажите ваш номер телефона" info="Телефон">
                                <!-- Email -->
                                <label for="defaultContactFormEmail" class="col-form-label">Почта</label>
                                <input type="email" id="defaultContactFormEmail" class="form-control mb-1" placeholder="Укажите ваш емаил" info="Почта">

                                <!-- Send button -->
                                <div class="wrap">
                                    <button type="button" class="btn btn-secondary my-4" data-dismiss="modal">Отправить</button>
                                </div>
                                <p class="small_text">
                                    Нажимая на кнопку «Отправить», вы даете согласие на обработку
                                    своих персональных данных и соглашаетесь с политикой конфиденциальности.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//модальное окно "Записаться на обучение"-->
            </div>

        </div>
    </div>
</section>
</div>

<!-- подключаем модуль НАМ ДОВЕРЯЮТ для страницы -->
    <?php
    jimport( 'joomla.application.module.helper' ); //
    $module = JModuleHelper::getModules('trust_us'); // заполняем массив модулями, опубликованными в позиции position-748
    $attribs['style'] = 'none'; // указываем стиль вывода модуля none (так как при использовании стиля xhtml наблюдается дублирование заголовков модуля)

    foreach($module as $moduleitem){ // перебираем в цикле и выводим по очереди все модули из позиции position-748
        echo JModuleHelper::renderModule($moduleitem, $attribs);
    }
    ?>

<?php /*<pre><?php //print_r($this->item); ?></pre>*/?>
<!-- //блок Все курсы -->





