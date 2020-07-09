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

<?php
jimport( 'joomla.application.module.helper' ); //
$module = JModuleHelper::getModules('breadcrumbs'); // заполняем массив модулями, опубликованными в позиции position-748
$attribs['style'] = 'none'; // указываем стиль вывода модуля none (так как при использовании стиля xhtml наблюдается дублирование заголовков модуля)

foreach($module as $moduleitem){ // перебираем в цикле и выводим по очереди все модули из позиции position-748
    echo JModuleHelper::renderModule($moduleitem, $attribs);
}
?>

<section id="all_course">
    <div class="container">
        <h1><?php echo $this->escape($this->item->title); ?></h1>
    </div>
</section>
<section id="fire_security">
    <div class="container">
        <div class="row">
            <div class="base col-md-8">
                <div class="tags">

                </div>
            </div>

        </div>
    </div>
</section>


<?php echo $this->item->text; ?>
<? php/*<pre><?php //print_r($this->item); ?></pre>?>*/?>
<!-- //блок Все курсы -->


