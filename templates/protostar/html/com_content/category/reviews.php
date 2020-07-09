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

<?php//Подключаем модуль 'breadcrumbs' к странице ОТЗЫВЫ?>
<?php
jimport( 'joomla.application.module.helper' ); //
$module = JModuleHelper::getModules('breadcrumbs'); // заполняем массив модулями, опубликованными в позиции position-748
$attribs['style'] = 'none'; // указываем стиль вывода модуля none (так как при использовании стиля xhtml наблюдается дублирование заголовков модуля)

foreach($module as $moduleitem){ // перебираем в цикле и выводим по очереди все модули из позиции position-748
    echo JModuleHelper::renderModule($moduleitem, $attribs);
}
?>

<div id="reviews" class="container"<?php echo $this->pageclass_sfx; ?>>
    <?php
        $this->subtemplatename = 'articles';
        echo JLayoutHelper::render('joomla.content.category_default', $this);
    ?>
</div>



<?php // Add pagination links ?>
<?php if (!empty($this->items)) : ?>
    <?php if (($this->params->def('show_pagination', 2) == 1  || ($this->params->get('show_pagination') == 2)) && ($this->pagination->pagesTotal > 1)) : ?>

        <div class="container">
            <div class="pagination">

                <?php if ($this->params->def('show_pagination_results', 1)) : ?>
                      <?php/*<p class="counter pull-right">
                         <?php echo $this->pagination->getPagesCounter(); ?>
                    </p>*/?>

                    <?php echo $this->pagination->getPagesLinks(); ?>

                    <?php/*<p class="counter pull-right">
                        <?php echo $this->pagination->getPagesCounter(); ?>
                    </p>*/?>


                <?php endif; ?>
            </div>
        </div>

    <?php endif; ?>
<?php endif; ?>



