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


/* Переменные для доп. полей */
$napravlenie1 = '';
$napravlenie2 = '';
$napravlenie3 = '';
$napravlenie4 = '';
$napravlenie5 = '';
$napravlenie6 = '';

$napravlenie_metki1 = '';
$napravlenie_metki2 = '';
$napravlenie_metki3 = '';
$napravlenie_metki4 = '';
$napravlenie_metki5 = '';
$napravlenie_metki6 = '';

$napravlenie_file1 = '';
$napravlenie_file2 = '';
$napravlenie_file3 = '';
$napravlenie_file4 = '';
$napravlenie_file5 = '';
$napravlenie_file6 = '';

$photo1 = '';
$photo2 = '';
$photo3 = '';

$name_doc1 = '';
$file_doc1 = '';
$name_doc2 = '';
$file_doc2 = '';




foreach($this->item->jcfields as $val){
    if($val->title == 'Название направления 1'){
        $napravlenie1 = $val->rawvalue;
    }
    if($val->title == 'Название направления 2'){
        $napravlenie2 = $val->rawvalue;
    }
    if($val->title == 'Название направления 3'){
        $napravlenie3 = $val->rawvalue;
    }
    if($val->title == 'Название направления 4'){
        $napravlenie4 = $val->rawvalue;
    }
    if($val->title == 'Название направления 5'){
        $napravlenie5 = $val->rawvalue;
    }
    if($val->title == 'Название направления 6'){
        $napravlenie6 = $val->rawvalue;
    }

    if($val->title == 'Метки направления 1'){
        $napravlenie_metki1 = $val->rawvalue;
    }
    if($val->title == 'Метки направления 2'){
        $napravlenie_metki2 = $val->rawvalue;
    }
    if($val->title == 'Метки направления 3'){
        $napravlenie_metki3 = $val->rawvalue;
    }
    if($val->title == 'Метки направления 4'){
        $napravlenie_metki4 = $val->rawvalue;
    }
    if($val->title == 'Метки направления 5'){
        $napravlenie_metki5 = $val->rawvalue;
    }
    if($val->title == 'Метки направления 6'){
        $napravlenie_metki6 = $val->rawvalue;
    }

    if($val->title == 'Файл направления 1'){
        $napravlenie_file1 = $val->rawvalue;
    }
    if($val->title == 'Файл направления 2'){
        $napravlenie_file2 = $val->rawvalue;
    }
    if($val->title == 'Файл направления 3'){
        $napravlenie_file3 = $val->rawvalue;
    }
    if($val->title == 'Файл направления 4'){
        $napravlenie_file4 = $val->rawvalue;
    }
    if($val->title == 'Файл направления 5'){
        $napravlenie_file5 = $val->rawvalue;
    }
    if($val->title == 'Файл направления 6'){
        $napravlenie_file6 = $val->rawvalue;
    }


    if($val->title == 'Фото 1'){
        $photo1 = $val->rawvalue;
    }
    if($val->title == 'Фото 2'){
        $photo2 = $val->rawvalue;
    }
    if($val->title == 'Фото 3'){
        $photo3 = $val->rawvalue;
    }


    if($val->title == 'Название 1'){
        $name_doc1 = $val->rawvalue;
    }
    if($val->title == 'Файл 1'){
        $file_doc1 = $val->rawvalue;
    }
    if($val->title == 'Название 2'){
        $name_doc2 = $val->rawvalue;
    }
    if($val->title == 'Файл 2'){
        $file_doc2 = $val->rawvalue;
    }
    if($val->title == 'Название 3'){
        $name_doc3 = $val->rawvalue;
    }
    if($val->title == 'Файл 3'){
        $file_doc3 = $val->rawvalue;
    }
    if($val->title == 'Название 4'){
        $name_doc4 = $val->rawvalue;
    }
    if($val->title == 'Файл 4'){
        $file_doc4 = $val->rawvalue;
    }
    if($val->title == 'Название 5'){
        $name_doc5 = $val->rawvalue;
    }
    if($val->title == 'Файл 5'){
        $file_doc5 = $val->rawvalue;
    }
    if($val->title == 'Название 6'){
        $name_doc6 = $val->rawvalue;
    }
    if($val->title == 'Файл 6'){
        $file_doc6 = $val->rawvalue;
    }


}

/* \\END Переменные для доп. полей */





echo "<pre>";
//print_r($this->item->jcfields);
echo "</pre>";




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

<div class="wrapper_courses">
<section id="all_course">
    <div class="container">
        <h1 class="wrap_course"><?php echo $this->escape($this->item->title); ?></h1>
    </div>
</section>
</div>

<section id="fire_security">
    <div class="container">
        <div class="row">
            <div class="base col-md-12 col-lg-8">
                <div class="body_course">
                    <?php echo $this->item->text; ?>
                </div>

                <?php /* Направления курса  */ ?>
                <div class="napravleniya">
                    <?php if(trim($napravlenie1) != ''){ ?>
                    <p class="headline">
                        <?php echo $napravlenie1; ?>
                    </p>
                        <?php if(trim($napravlenie_metki1) != ''){ ?>
                            <?php
                            $tags = explode(",", $napravlenie_metki1);
                            ?>
                            <div class="tags">
                                <?php if(is_array($tags) && !empty($tags)){ ?>
                                <ul>
                                    <?php $x = 1; ?>
                                    <?php foreach($tags as $tag){ ?>
                                        <?php if($x > 7){ ?>
                                                <li class="hidden"><?php echo trim($tag); ?></li>
                                        <?php }else{ ?>
                                                <li><?php echo trim($tag); ?></li>
                                        <?php } ?>
                                        <?php $x++; ?>
                                    <?php } ?>

                                    <?php if($x > 8){ $x = $x - 8; ?>
                                        <li class="plus"><button type="button" class="btn btn-outline-success">+ еще <?php echo trim($x); ?> направлений</button></li>
                                    <?php } ?>
                                </ul>
                               <?php } ?>

                                <?php if(trim($napravlenie_file1) != ''){ ?>
                                <p class="load btn">
                                    <a href="/images/files/<?php echo $napravlenie_file1; ?>"> ↓ Скачать полную программу курса</a>
                                </p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>

                    <?php if(trim($napravlenie2) != ''){ ?>
                        <p class="headline">
                            <?php echo $napravlenie2; ?>
                        </p>
                        <?php if(trim($napravlenie_metki2) != ''){ ?>
                            <?php
                            $tags = explode(",", $napravlenie_metki2);
                            ?>
                            <div class="tags">
                                <?php if(is_array($tags) && !empty($tags)){ ?>
                                    <ul>
                                        <?php $x = 1; ?>
                                        <?php foreach($tags as $tag){ ?>
                                            <?php if($x > 7){ ?>
                                                <li class="hidden"><?php echo trim($tag); ?></li>
                                            <?php }else{ ?>
                                                <li><?php echo trim($tag); ?></li>
                                            <?php } ?>
                                            <?php $x++; ?>
                                        <?php } ?>

                                        <?php if($x > 8){ $x = $x - 8; ?>
                                            <li><button type="button" class="btn btn-outline-success">+ еще <?php echo trim($x); ?> направлений</button></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>

                                <?php if(trim($napravlenie_file2) != ''){ ?>
                                    <p class="load btn">
                                        <a href="/images/files/<?php echo $napravlenie_file2; ?>"> ↓ Скачать полную программу курса</a>
                                    </p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>


                    <?php if(trim($napravlenie3) != ''){ ?>
                        <p class="headline">
                            <?php echo $napravlenie3; ?>
                        </p>
                        <?php if(trim($napravlenie_metki3) != ''){ ?>
                            <?php
                            $tags = explode(",", $napravlenie_metki3);
                            ?>
                            <div class="tags">
                                <?php if(is_array($tags) && !empty($tags)){ ?>
                                    <ul>
                                        <?php $x = 1; ?>
                                        <?php foreach($tags as $tag){ ?>
                                            <?php if($x > 7){ ?>
                                                <li class="hidden"><?php echo trim($tag); ?></li>
                                            <?php }else{ ?>
                                                <li><?php echo trim($tag); ?></li>
                                            <?php } ?>
                                            <?php $x++; ?>
                                        <?php } ?>

                                        <?php if($x > 8){ $x = $x - 8; ?>
                                            <li><button type="button" class="btn btn-outline-success">+ еще <?php echo trim($x); ?> направлений</button></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>

                                <?php if(trim($napravlenie_file3) != ''){ ?>
                                    <p class="load btn">
                                        <a href="/images/files/<?php echo $napravlenie_file3; ?>"> ↓ Скачать полную программу курса</a>
                                    </p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>


                    <?php if(trim($napravlenie4) != ''){ ?>
                        <p class="headline">
                            <?php echo $napravlenie4; ?>
                        </p>
                        <?php if(trim($napravlenie_metki4) != ''){ ?>
                            <?php
                            $tags = explode(",", $napravlenie_metki4);
                            ?>
                            <div class="tags">
                                <?php if(is_array($tags) && !empty($tags)){ ?>
                                    <ul>
                                        <?php $x = 1; ?>
                                        <?php foreach($tags as $tag){ ?>
                                            <?php if($x > 7){ ?>
                                                <li class="hidden"><?php echo trim($tag); ?></li>
                                            <?php }else{ ?>
                                                <li><?php echo trim($tag); ?></li>
                                            <?php } ?>
                                            <?php $x++; ?>
                                        <?php } ?>

                                        <?php if($x > 8){ $x = $x - 8; ?>
                                            <li><button type="button" class="btn btn-outline-success">+ еще <?php echo trim($x); ?> направлений</button></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>

                                <?php if(trim($napravlenie_file4) != ''){ ?>
                                    <p class="load btn">
                                        <a href="/images/files/<?php echo $napravlenie_file4; ?>"> ↓ Скачать полную программу курса</a>
                                    </p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>


                    <?php if(trim($napravlenie5) != ''){ ?>
                        <p class="headline">
                            <?php echo $napravlenie5; ?>
                        </p>
                        <?php if(trim($napravlenie_metki5) != ''){ ?>
                            <?php
                            $tags = explode(",", $napravlenie_metki5);
                            ?>
                            <div class="tags">
                                <?php if(is_array($tags) && !empty($tags)){ ?>
                                    <ul>
                                        <?php $x = 1; ?>
                                        <?php foreach($tags as $tag){ ?>
                                            <?php if($x > 7){ ?>
                                                <li class="hidden"><?php echo trim($tag); ?></li>
                                            <?php }else{ ?>
                                                <li><?php echo trim($tag); ?></li>
                                            <?php } ?>
                                            <?php $x++; ?>
                                        <?php } ?>

                                        <?php if($x > 8){ $x = $x - 8; ?>
                                            <li><button type="button" class="btn btn-outline-success">+ еще <?php echo trim($x); ?> направлений</button></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>

                                <?php if(trim($napravlenie_file5) != ''){ ?>
                                    <p class="load btn">
                                        <a href="/images/files/<?php echo $napravlenie_file5; ?>"> ↓ Скачать полную программу курса</a>
                                    </p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>


                    <?php if(trim($napravlenie6) != ''){ ?>
                        <p class="headline">
                            <?php echo $napravlenie6; ?>
                        </p>
                        <?php if(trim($napravlenie_metki6) != ''){ ?>
                            <?php
                            $tags = explode(",", $napravlenie_metki6);
                            ?>
                            <div class="tags">
                                <?php if(is_array($tags) && !empty($tags)){ ?>
                                    <ul>
                                        <?php $x = 1; ?>
                                        <?php foreach($tags as $tag){ ?>
                                            <?php if($x > 7){ ?>
                                                <li class="hidden"><?php echo trim($tag); ?></li>
                                            <?php }else{ ?>
                                                <li><?php echo trim($tag); ?></li>
                                            <?php } ?>
                                            <?php $x++; ?>
                                        <?php } ?>

                                        <?php if($x > 8){ $x = $x - 8; ?>
                                            <li><button type="button" class="btn btn-outline-success">+ еще <?php echo trim($x); ?> направлений</button></li>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>

                                <?php if(trim($napravlenie_file6) != ''){ ?>
                                    <p class="load btn">
                                        <a href="/images/files/<?php echo $napravlenie_file6; ?>"> ↓ Скачать полную программу курса</a>
                                    </p>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    <?php } ?>


                </div>


                <?php if ($name_doc1 != '' || $name_doc2 != '' || $name_doc3 != '' || $name_doc4 != '' || $name_doc5 != '' || $name_doc6 != '' ){ ?>
                    <div class="wrappers col-md-12">
                        <div class="one col-md-2">
                            <img src="/images/court.png" alt="">
                            <p class="headline">
                                Нормативные документы
                            </p>
                        </div>
                        <div class="two col-md-10">
                            <ul>
                                <?php if($name_doc1 != ''){?>
                                    <li>
                                       <?php echo $name_doc1; ?>
                                    </li>
                                    <?php if($file_doc1 != ''){?>
                                    <li class="load">
                                        <a class="loading" href="/images/files/<?php echo $file_doc1; ?>"><img src="/images/arrow_down.svg" alt="">Скачать</a>

                                    </li>
                                        <?php } ?>
                                <?php } ?>
                                <?php if($name_doc2 != ''){?>
                                    <li>
                                        <?php echo $name_doc2; ?>
                                    </li>
                                <?php if($file_doc2 != ''){?>
                                    <li class="load">
                                        <a class="loading" href="/images/files/<?php echo $file_doc2; ?>"> ↓ Скачать</a>
                                    </li>
                                    <?php } ?>
                                <?php } ?>
                                <?php if($name_doc3 != ''){?>
                                    <li>
                                        <?php echo $name_doc3; ?>
                                    </li>
                                    <?php if($file_doc3 != ''){?>
                                        <li class="load">
                                            <a class="loading" href="/images/files/<?php echo $file_doc3; ?>"> ↓ Скачать</a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                                <?php if($name_doc4 != ''){?>
                                    <li>
                                        <?php echo $name_doc4; ?>
                                    </li>
                                    <?php if($file_doc4 != ''){?>
                                        <li class="load">
                                            <a class="loading" href="/images/files/<?php echo $file_doc4; ?>"> ↓ Скачать</a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                                <?php if($name_doc5 != ''){?>
                                    <li>
                                        <?php echo $name_doc5; ?>
                                    </li>
                                    <?php if($file_doc5 != ''){?>
                                        <li class="load">
                                            <a class="loading" href="/images/files/<?php echo $file_doc5; ?>"> ↓ Скачать</a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                                <?php if($name_doc6 != ''){?>
                                    <li>
                                        <?php echo $name_doc6; ?>
                                    </li>
                                    <?php if($file_doc6 != ''){?>
                                        <li class="load">
                                            <a class="loading" href="/images/files/<?php echo $file_doc6; ?>"> ↓ Скачать</a>
                                        </li>
                                    <?php } ?>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                <?php } ?>




            </div>

            <div class="sign col-md-12 col-lg-4">
                <!--модальное окно "Записаться на обучение"-->
                <div class="content">
                    <div class="header">
                        <h5 class="modal-title">Записаться на обучение</h5>
                    </div>
                    <div class="body">
                        <div class="text">
                            <div class="col-md-12 col-sm-12">
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


                <?php if($photo1 != '' || $photo2 != '' || $photo3 != ''){ ?>
                <p class="headline_slide">
                    Образец документов
                </p>
                <!--    Пожарная безопасность подключение слайдера-->
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php if($photo1 != ''){ ?>

                            <div class="swiper-slide"><a data-fancybox="gallery" href="/<?php echo $photo1; ?>"><img src="/<?php echo $photo1; ?>" alt=""></a></div>
                        <?php } ?>
                        <?php if($photo2 != ''){ ?>
                            <div class="swiper-slide"><a data-fancybox="gallery" href="/<?php echo $photo2; ?>"><img src="/<?php echo $photo2; ?>" alt=""></a></div>
                        <?php } ?>
                        <?php if($photo3 != ''){ ?>
                            <div class="swiper-slide"><a data-fancybox="gallery" href="/<?php echo $photo3; ?>"><img src="/<?php echo $photo3; ?>" alt=""></a></div>
                        <?php } ?>

                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>

                </div>
                <!--    Пожарная безопасность подключение слайдера-->
                <?php } ?>

            </div>
        </div>
    </div>
</section>



<pre><?php //print_r($this->item); ?></pre>
<!-- //блок Все курсы -->


