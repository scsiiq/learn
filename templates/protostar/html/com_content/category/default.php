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

JHtml::_('behavior.caption');
?>

<?php//Подключаем модуль 'breadcrumbs' к странице?>
<?php
jimport( 'joomla.application.module.helper' ); //
$module = JModuleHelper::getModules('breadcrumbs'); // заполняем массив модулями, опубликованными в позиции position-748
$attribs['style'] = 'none'; // указываем стиль вывода модуля none (так как при использовании стиля xhtml наблюдается дублирование заголовков модуля)

foreach($module as $moduleitem){ // перебираем в цикле и выводим по очереди все модули из позиции position-748
    echo JModuleHelper::renderModule($moduleitem, $attribs);
}
?>

<div id="all_course" class="container"<?php echo $this->pageclass_sfx; ?>

<?php
$this->subtemplatename = 'articles';
echo JLayoutHelper::render('joomla.content.category_default', $this);
?>



</div>

<?php//Подключаем модуль 'discount_on_training' к странице?>
<?php
jimport( 'joomla.application.module.helper' ); //
$module = JModuleHelper::getModules('discount_on_training'); // заполняем массив модулями, опубликованными в позиции position-748
$attribs['style'] = 'none'; // указываем стиль вывода модуля none (так как при использовании стиля xhtml наблюдается дублирование заголовков модуля)

foreach($module as $moduleitem){ // перебираем в цикле и выводим по очереди все модули из позиции position-748
    echo JModuleHelper::renderModule($moduleitem, $attribs);
}
?>



