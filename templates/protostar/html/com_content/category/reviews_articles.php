<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Language\Multilanguage;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');

// Create some shortcuts.
$params     = &$this->item->params;
$n          = count($this->items);
$listOrder  = $this->escape($this->state->get('list.ordering'));
$listDirn   = $this->escape($this->state->get('list.direction'));
$langFilter = false;

// Tags filtering based on language filter 
if (($this->params->get('filter_field') === 'tag') && (Multilanguage::isEnabled()))
{ 
	$tagfilter = ComponentHelper::getParams('com_tags')->get('tag_list_language_filter');

	switch ($tagfilter)
	{
		case 'current_language' :
			$langFilter = JFactory::getApplication()->getLanguage()->getTag();
			break;

		case 'all' :
			$langFilter = false;
			break;

		default :
			$langFilter = $tagfilter;
	}
}

// Check for at least one editable article
$isEditable = false;

if (!empty($this->items))
{
	foreach ($this->items as $article)
	{
		if ($article->params->get('access-edit'))
		{
			$isEditable = true;
			break;
		}
	}
}

// For B/C we also add the css classes inline. This will be removed in 4.0.
JFactory::getDocument()->addStyleDeclaration('
.hide { display: none; }
.table-noheader { border-collapse: collapse; }
.table-noheader thead { display: none; }
');

$tableClass = $this->params->get('show_headings') != 1 ? ' table-noheader' : '';
?>


<h1><?php echo $this->category->title; ?></h1>

<div class="">
    <div class="row">

        <div class="first col-md-12 col-lg-8">
        <?php/*<pre><?php //print_r($this->items); ?></pre>*/?>

            <?php// если поместить этот <div> внутрь foreach то заголовок статьи  меняется, но не меняется  список?>
            <?php foreach($this->items as $i => $article) { ?>

                <?php// установили выбор картинки в материале?>

                <div class="map_course">

                    <img class="otzov" src="/images/not.png" alt="">
                    <?php echo $article->fulltext; ?>
                    <div class="wrap_otzov">

                    <p class="headline"><?php echo $article->title; ?></p>

                        <?php
                        $file = '';
                        foreach($article->jcfields as $jcfield) {
                            if($jcfield->label == 'Файл отзыва') {
                                $file = $jcfield->rawvalue;
                            }
                        }
                        ?>
                        <?php if($file != ''){ ?>
                            <a href="/images/reviews/<?php echo $file; ?>" target="_blank"><img class="otzovik" src="/images/pdf-file.png" alt=""><span>Читать отзыв</span></a>
                        <?php } ?>


                    <?php /*<a href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($article->slug, $article->catid, $article->language)); ?>"
                        <img class="otzovik" src="/images/pdf-file.png" alt=""><span>Читать отзыв</span></a>*/?>

                    </div>
                </div>

            <?php } ?>
        </div>

        <div class="signs col-md-10 col-lg-4">
            <div class="content">
                <div class="header"><h5 class="modal-title">Записаться на обучение</h5></div>
                    <div class="body">
                        <div class="text">
                            <div class="col-md-10 col-sm-12 col-lg-12">
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
        </div>

    </div>
</div>


