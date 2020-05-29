<div class="colorlib-blog colorlib-light-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h3 style="margin-top:-50px;margin-bottom:-30px; font-weight:700; text-transform: uppercase;">Aktualności</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">


                <? foreach ($news as $key => $item): ?>
                    <div class="f-blog animate-box" style="padding-left: 1em">
                        <? if ($item->mainphoto != ""): ?>

                            <a href="<?= base_url() ?>/news/<?= $item->id ?>" class="blog-img"
                               style="background-image: url(<?= base_url() ?><?= $item->mainphoto ?>);">
                           </a>
                       <? endif; ?>
                       <div class="desc">
                        <h2><a href="blog.html"><?= $item->title ?></a></h2>
                        <hr class="blue_line mt10 mb10"/>
                        <p class="admin" style="">
                            <span>  <a href="<?=base_url("news/category/".$item->category)?>"><?= $categories[$item->category] ?></a>  <?= $item->edited_date ?></span>
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
                <div class="row"><div class="col-md-4 col-md-offset-4"><?= $pager->links() ?></div> <div class="col-md-4">  Sortuj po kategorii: 
                    <select class="categories">
                        <option value="-">Wszystkie</option>
                        <?foreach($categories as $key=>$item):?>
                        <option value="<?=$key?>" <?=$cat==$key ? "selected":""?>><?=$item?></option>
                        <?endforeach;?>
                    </select></div>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    window.onload=function(){
        $(".categories").change(function(){
            if($(".categories").val()=="-"){
                window.location.replace("<?=base_url("/news/all")?>");
            }else{
                window.location.replace("<?=base_url("/news/category/")?>/"+$(".categories").val());
            }
        });
    };

</script>