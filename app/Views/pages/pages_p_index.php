        <div id="colorlib-intro" class="colorlib-light-gray">
         <div class="container">
            <div class="row">
               <div class="col-sm-4 intro-wrap">

                  <div class="intro-flex">
                     <?=$page_left_boxes?>						
                 </div>


             </div>
             <div class="col-sm-8">

                <? if (isset($page_menu)): ?>
                   <div style="float: right; margin-top: 50px;position: relative;">    <div  class="btn-group-vertical  pull-right " role="group"
                       aria-label="Basic example">
                       <? if (count($page_menu) != 1): ?>
                         <? if ($parent_page): ?>
                         <? if ($page_menu[0]->id != $parent_page->id): ?>
                                <a type="button" href="<?= (substr($page_menu[0]->url, 0, 4) != "http" ? base_url($page_menu[0]->url) : $page_menu[0]->url) ?>"
                             class="btn">Wróć do: <?= $parent_page->title ?></a>
                            <?endif;?><?endif;?>
                        <? foreach ($page_menu as $item): ?>
                            <a type="button" href="<?= (substr($item->url, 0, 4) != "http" ? base_url($item->url) : $item->url) ?>"
                             class="btn <?= $item->active == 1 ? ' btn-primary' : " btn-default" ?>"><?= $item->title ?></a>
                             <? if ($item->active == 1 and count($page_submenu) != 0): ?>
                                <? foreach ($page_submenu as $item): ?>
                                    <a type="button" style="margin-left: 10%;width: 90%;" href="<?= (substr($item->url, 0, 4) != "http" ? base_url($item->url) : $item->url) ?>"
                                     class="btn <?= $item->active == 1 ? ' btn-primary' : " btn-default" ?>"><?= $item->title ?></a>
                                 <? endforeach; ?>
                             <? endif; ?>

                         <? endforeach; ?>
                     <? endif; ?>

                 </div></div>

             <? endif; ?>

             <div class="about-desc ">





                 <h2><?=$page->title?></h2>

                 <?=$page->text?>

             </div>
         </div>
     </div>
 </div>
 <?if($page->newsletter==1):?>
 <?if(count($news)!=0):?>
 <div class="colorlib-blog colorlib-light-grey" id="newsletter">
    <div class="container">
        <div class="row">

            <div class="col-md-12">


                <? foreach ($news as $key => $item): ?>
                    <div class="f-blog animate-box" style="padding-left: 1em">
                        <? if ($item->mainphoto != ""): ?>

                            <a href="blog.html" class="blog-img"
                            style="background-image: url(<?= base_url() ?><?= $item->mainphoto ?>);">
                        </a>
                    <? endif; ?>
                    <div class="desc">
                        <h2><a href="blog.html"><?= $item->title ?></a></h2>
                        <hr class="blue_line mt10 mb10"/>
                        <p class="admin" style="">
                            <span>  <a href="<?=base_url("/news/category/".$item->category)?>"><?= $categories[$item->category] ?></a> <?= $item->edited_date ?></span>
                        </p>
                        <?= news($item->text) ?>
                        <? if(read_many($item->text)):?>
                            <p><a href="<?= base_url() ?>/news/<?= $item->id ?>" class="color-1">
                                <button class="btn pull-right ">
                                    Czytaj dalej
                                </button>
                            </a><br></p>
                            <?endif;?>
                        </div>
                    </div>
                <? endforeach; ?>


                <p><a href="<?= base_url() ?>/news/category/<?=$page->id*100?>" class="color-1">
                    <button class="btn pull-right ">
                        Pokaż wszystkie
                    </button>
                </a><br></p>

            </div>
        </div>
    </div>
</div>
<?endif;?>
<?endif;?>
</div>