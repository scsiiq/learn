<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<pre><?php //print_r($list); ?></pre>
<section id="feedback">
    <div class="container">
        <div class="row">
            <div class="first col-md-12">
                <h2>
                    Отзывы о деятельности компании
                </h2>
            </div>
            <div class="comma col-md-12">
                <img src="/images/not.png" alt="">
            </div>

            <!--    восьмой блок подключение слайдера-->
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach ($list as $item) { ?>
                        <?php
                        $file = '';
                        JLoader::register('FieldsHelper', JPATH_ADMINISTRATOR . '/components/com_fields/helpers/fields.php');
                        $item->jcfields = FieldsHelper::getFields('com_content.article', $item, true);
                        $fields = [];
                        foreach($item->jcfields as $jcfield) {
                            if($jcfield->label == 'Файл отзыва') {
                                $file = $jcfield->rawvalue;
                            }
                        }
                        ?>
                            <div class="swiper-slide">
                                <div class="wrapper_otziv_slide">
                                    <p class="comment">
                                        <?php echo $item->introtext; ?>
                                    </p>
                                    <div class="wrapper_otziv_slide">
                                        <p>
                                            <?php echo $item->title; ?>
                                            <?php if($file != ''){ ?>
                                                <a href="/images/reviews/<?php echo $file; ?>" target="_blank">
                                                    <img src="/images/pdf-file.png" alt="">
                                                    <span>Читать отзыв</span>
                                                </a>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                    <?php } ?>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"><img src="/images/right.png" alt=""></div>
                <div class="swiper-button-prev"><img src="/images/left.png" alt=""></div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div>
            <!--    восьмой блок подключение слайдера-->
        </div>
    </div>
</section>