<?/* Template name: ЖК Homecity */?>
<? get_header(); ?>

<div class="works-page">
    <? if( function_exists('bcn_display') ) : ?>
    <div class="breadcrumbs-row">
        <div class="container">
            <? bcn_display(); ?>
        </div>
    </div>
    <? endif; ?>

    <div class="detail-work-hero" style="background: url('<?=get_field("work-project_background");?>;');">
        <div class="overlay">

        </div>

        <div class="container">
            <div class="detail-work-hero__head">
                <? the_title(); ?>
            </div>

            <div class="detail-work-hero__subhead">
            Из двушки в евродвушку - это один из самых популярных запросов, с которыми сталкиваются дизайнеры и дизайн-студии. Разберем на пимере стандартной двухкомнатной квартиры 70 кв.м в ЖК "Хоум сити"
несколько вариантов удачных планировочных решений, отвечающих данному запросу. 
            </div>
        </div> 
    </div>

    <?/*
    $workproject_price = get_field("work-project_price");
    $workproject_time = get_field("work-project_time");
    $workproject_size = get_field("work-project_size");
    */?>

    <!--div class="economic-section">
        <div class="container">
            <div class="detail-work__economic-wrap">
                <div class="economic-head">Экономика проекта</div>

                <div class="economic-block">
                    <div class="economic-block__head">Стоимость проекта</div>
                    <div class="economic-block__text"><b><?=get_field("work-project_price");?></b> руб.</div>
                </div>

                <div class="economic-block">
                    <div class="economic-block__head">Срок реализации</div>
                    <div class="economic-block__text"><b><?=get_field("work-project_time");?></b></div>
                </div>

                <div class="economic-block">
                    <div class="economic-block__head">Площадь помещения</div>
                    <div class="economic-block__text"><b><?=get_field("work-project_size");?></b> кв. м.</div>
                </div>
            </div>
        </div>
    </div-->

    <? 
    $work_sizing_plan = "/wp-content/uploads/2022/07/Houm-siti_planirovochnye-reshenija_page-0001.png";
    $work_plan = "/wp-content/uploads/2022/07/Houm-siti_planirovochnye-reshenija_page-0002.png";
    $work_plan_2 = "/wp-content/uploads/2022/07/Houm-siti_planirovochnye-reshenija_page-0003.png"
    ?>

    <? if($work_sizing_plan or $work_plan): ?>
    <div class="plans-section">
        <div class="container">

            <? if($work_sizing_plan): ?>
            <div class="plans-wrap">
                <div class="plans-head">Обмерочный чертеж</div>
                <a class="plans-image" href="<?=$work_sizing_plan; ?>" data-fancybox>
                    <img src="<?=$work_sizing_plan; ?>" alt="Обмерочный чертеж <? the_title(); ?>">
                </a>
                <div class="land-descriptinon">
                В базе мы имеем вытянутую квартиру с довольной большой нежилой зоной.
                <br>
                К нежилой зоне мы относим прихожие/коридоры,кладовые и гардеробные комнаты.
                <br>
                В данном случае они занимают 13.5 кв.м площади,которые мы используем в своих целях.
                </div>
            </div>
            <? endif; ?>

            <? if ($work_plan): ?>
            <div class="plans-wrap">
                <div class="plans-head">Планировочное решение 1</div>
                <a class="plans-image" href="<?=$work_plan; ?>" data-fancybox>
                    <img src="<?=$work_plan; ?>" alt="Планировочное решение 1<? the_title(); ?>">
                </a>
                <div class="land-descriptinon">
                Самый очевидный и законный вариант - это разместить кухню-нишу на нашей большой нежилой площади, а именно на территории, которую застройщик обозначил "кладовой", зацепив небольшую часть коридора. 
              
                Напомним, что кухня-ниша должна занять не мене 5 кв.м нежилой площади. То, что застройщик обозначил, как кухню, мы занимаем спальней.
              
                Но, внимание, по документам такая комната будет проходить как кабиет.
             
                По той причине, что размещение жилых комнат на територии кухни сторого запрещено.
               
                Кабинет же по документам проходит, как нежилая зона. 
                </div>
            </div>
            <? endif; ?>

            <? if ($work_plan_2): ?>
            <div class="plans-wrap">
                <div class="plans-head">Планировочное решение 2</div>
                <a class="plans-image" href="<?=$work_plan_2; ?>" data-fancybox>
                    <img src="<?=$work_plan_2; ?>" alt="Планировочное решение 2<? the_title(); ?>">
                </a>
                <div class="land-descriptinon">
                Второй вариант - оставляем кухню в границах, обозначенных застройщиком.
           
                Половину жилой комнаты занимаем гостиной, на другой пловоине и на месте кладовки организуем комнату.
             
                Комнату от кухни-гостиной отделяет светопроводящая раздвижная перегородка.
             
                Такой вариант подойдет семьям, которым необходим кабинет или гостевая комната, в которой нет необходимости наличия окна.
            
                Остекленная перегородка прекрасно справится с доступом естественного света.
                </div>
            </div>
            <? endif; ?>
        </div>
    </div>
    <? endif; ?>

    <? 
    $work_photo_before = get_field("work-project_before");
    $work_photo_after = get_field("work-project_after");
    ?>

    <? if( $work_photo_before and $work_photo_after ) : ?>
    <div class="after-before-section">
        <div class="container">
            <div class="after-before-title">
                <span>
                    До
                </span>
                <span>
                    После
                </span>
            </div>
            <div class="after-before-wrap">
                <img src="<?=$work_photo_before['url'];?>" alt="<?=$work_photo_before['alt'];?>">
                <img src="<?=$work_photo_after['url'];?>" alt="<?=$work_photo_after['alt'];?>">
            </div>
        </div>
    </div>

    <? endif; ?>

    <? if( have_rows('work-project_collages') ): ?>   
    <div class="collages-section">
        <div class="container">
            <div class="collages-head">
                Стилистические коллажи
            </div>

            <? while ( have_rows('work-project_collages') ) : the_row(); ?>

            <a href="<?=the_sub_field('work-project_collage'); ?>" data-fancybox class="collages-block">
                <img src="<?=the_sub_field('work-project_collage'); ?>" alt="">
            </a>

            <? endwhile; ?>

        </div>
    </div>

    <? endif; ?>

    <? if( have_rows('work-project_visualisations') ): ?>   
    <div class="visualisation-section">
        <div class="container">
            <div class="visualisation-head">
                Визуализации
            </div>

            <? while ( have_rows('work-project_visualisations') ) : the_row(); ?>

            <? $blocktype = get_sub_field('work-project_visualisation_blocktype');?>

            <? if ($blocktype == "type_1pic"): ?>

            <?
            $visualisation_pic =  get_sub_field('work-project_visualisation_1pic_image');
            $visualisation_title =  get_sub_field('work-project_visualisation_title');
            $visualisation_text =  get_sub_field('work-project_visualisation_text');
            ?>

            <div class="visualisation-1pic-row">
                <? if ($visualisation_pic) : ?>
                <a href="<?=$visualisation_pic;?>" data-fancybox>
                    <img src="<?=$visualisation_pic;?>" alt="">
                </a>
                <? endif; ?>

                <? if ($visualisation_title) : ?>
                <div class="visualisation-title"><?=$visualisation_title;?></div>
                <? endif; ?>
                <? if ($visualisation_text) : ?>
                <div class="visualisation-text"><?=$visualisation_text;?></div>
                <? endif; ?>
            </div>

            <? elseif($blocktype == "type_2pic"): ?>

            <?
            $visualisation_pic1 =  get_sub_field('work-project_visualisation_2pic_image1');
            $visualisation_pic2 =  get_sub_field('work-project_visualisation_2pic_image2');
            $visualisation_title =  get_sub_field('work-project_visualisation_title');
            $visualisation_text =  get_sub_field('work-project_visualisation_text');
            ?>

            <div class="visualisation-2pic-row">
                <div class="pic-row row">
                    <? if ($visualisation_pic1) : ?>
                    <div class="col-sm-6">
                        <a href="<?=$visualisation_pic1;?>" data-fancybox>
                            <img src="<?=$visualisation_pic1;?>" alt="">
                        </a>
                    </div>
                    <? endif; ?>

                    <? if ($visualisation_pic2) : ?>
                    <div class="col-sm-6">
                        <a href="<?=$visualisation_pic2;?>" data-fancybox>
                            <img src="<?=$visualisation_pic2;?>" alt="">
                        </a>
                    </div>
                    <? endif; ?>    
                </div>

                <? if ($visualisation_title) : ?>
                <div class="visualisation-title"><?=$visualisation_title;?></div>
                <? endif; ?>
                <? if ($visualisation_text) : ?>
                <div class="visualisation-text"><?=$visualisation_text;?></div>
                <? endif; ?>
            </div>

            <? elseif($blocktype == "type_verticalpic"): ?>

            <?
            $visualisation_verticalpic =  get_sub_field('work-project_visualisation_vertical_pic');
            $visualisation_title =  get_sub_field('work-project_visualisation_title');
            $visualisation_text =  get_sub_field('work-project_visualisation_text');
            ?>

            <div class="visualisation-verticalpic-row">
                <? if ($visualisation_verticalpic) : ?>
                <div class="pic-row">
                    <a href="<?=$visualisation_verticalpic;?>" data-fancybox>
                        <img src="<?=$visualisation_verticalpic;?>" alt="">
                    </a>
                </div>
                <? endif; ?>

                <div class="text-row">
                    <? if ($visualisation_title) : ?>
                    <div class="visualisation-title"><?=$visualisation_title;?></div>
                    <? endif; ?>
                    <? if ($visualisation_text) : ?>
                    <div class="visualisation-text"><?=$visualisation_text;?></div>
                    <? endif; ?>
                </div>
            </div>
            <? endif; ?>
            <? endwhile; ?>
        </div>
    </div>

    <? endif; ?>

    <div class="detail-work-form-wrap">
        <div class="container">
            <div class="detail-work-form">

                <div class="detail-work-form_head">Рассчитать стоимость дизайн-проекта для Вашего жилья</div>

                <form class="request-form" action="." data-action="/ajax/">

                    <div class="form-group">
                        <div class="form-group-head">У вас:</div>
                        <div class="form-group-label radio">
                            <label>
                                <input type="radio" name="homeType" value="квартира" class="form-radio">
                                <span class="radiobtn"></span>
                                квартира
                            </label>
                        </div>
                        <div class="form-group-label radio">
                            <label>
                                <input type="radio" name="homeType" value="дом" class="form-radio">
                                <span class="radiobtn"></span>
                                дом
                            </label>
                        </div>
                    </div>

                    <div class="form-group form-group-size">
                        <div class="form-group-head">Площадь</div>
                        <input type="text" name="homeSize">
                        <span>кв. м.</span>
                    </div>

                    <div class="form-group">
                        <div class="form-group-head">Когда Вы хотели бы заехать в новое жилье:</div>

                        <div class="form-group-label radio">
                            <label>
                                <input type="radio" name="homeTime" value="1-2 месяца" class="form-radio">
                                <span class="radiobtn"></span>
                                1-2 месяца
                            </label>
                        </div>

                        <div class="form-group-label radio">
                            <label>
                                <input type="radio" name="homeTime" value="3-6 месяцев" class="form-radio">
                                <span class="radiobtn"></span>
                                3-6 месяцев
                            </label>
                        </div>

                        <div class="form-group-label radio">
                            <label>
                                <input type="radio" name="homeTime" value="6 месяцев - 1 год" class="form-radio">
                                <span class="radiobtn"></span>
                                6 месяцев - 1 год
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-group-head">Какой бюджет Вы планируется израсходовать на ремонт Вашего жилья ( работы + материалы + мебель и проч. ):
                        </div>

                        <div class="form-group-label radio">
                            <label>
                                <input type="radio" name="homePrice" value="от 2 000 000 до 3 000 000 руб." class="form-radio">
                                <span class="radiobtn"></span>
                                от 2 000 000 до 3 000 000 руб.
                            </label>
                        </div>

                        <div class="form-group-label radio">
                            <label>
                                <input type="radio" name="homePrice" value="от 3 000 000 до 4 000 000 руб." class="form-radio">
                                <span class="radiobtn"></span>
                                от 3 000 000 до 4 000 000 руб.
                            </label>
                        </div>

                        <div class="form-group-label radio">
                            <label>
                                <input type="radio" name="homePrice" value="от 4 000 000 до 5 000 000 руб." class="form-radio">
                                <span class="radiobtn"></span>
                                от 4 000 000 до 5 000 000 руб.
                            </label>
                        </div>

                        <div class="form-group-label radio">
                            <label>
                                <input type="radio" name="homePrice" value="от 5 000 000 до 7 000 000 руб." class="form-radio">
                                <span class="radiobtn"></span>
                                от 5 000 000 до 7 000 000 руб.
                            </label>
                        </div>

                        <div class="form-group-label radio">
                            <label>
                                <input type="radio" name="homePrice" value="более 7 000 000 руб." class="form-radio">
                                <span class="radiobtn"></span>
                                более 7 000 000 руб.
                            </label>
                        </div>
                    </div>

                    <input type="hidden" name="action" value="detailworkform">
                    <input type="text" hidden name="security">
                    <input type="hidden" name="nonce" value="<? echo wp_create_nonce('detailworkform_nonce'); ?>">

                    <div class="bottom-form-wrap">
                        <div class="row">
                            <div class="col-sm-4">
                                <input type="text" name="detailwork-email" placeholder="E-mail">
                            </div>
                            <div class="col-sm-4">
                                <input type="text" class="req" name="detailwork-phone" placeholder="Телефон*">
                            </div>
                            <div class="col-sm-4 submit-btn-wrap">
                                <button class="submit-btn">Получить расчет</button>
                            </div>
                        </div>
                    </div> 

                    <div class="result"></div>
                </form>
            </div>
        </div>
    </div>

</div>

<div class="contacts-section" id="contacts-section">
    <div class="container">
        <div class="contacts-block contacts-mail">
            <i class="mdi mdi-email-outline"></i>
            <div class="contacts-text">info@atmosphera.studio</div>
        </div>
        <div class="contacts-block contacts-phone">
            <i class="mdi mdi-phone"></i>
            <div class="contacts-text">+7 (915) 463-69-69</div>
        </div>
        <div class="contacts-block last-block">
            <a href="https://www.instagram.com/atmosphera_interiors/" target="_blank" class="instagram-link"><i class="mdi mdi-instagram"></i><span>atmosphera_interiors</span></a>
        </div>
    </div>
</div>

<? get_footer() ?>