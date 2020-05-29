<div class="module">
	<div class="module-head">
		<h3>
		Podstrony</h3>
	</div>
	<div class="module-body">
        <h3>Dodaj podstronę</h3>
        <?if($alert==true):?>
        <?=validation_errors(); ?>
        <?endif;?>
        <script  src="<?=base_url()?>/ckfinder/ckfinder.js"></script>
        <script  src="<?=base_url()?>/ckeditor/ckeditor.js"></script>

        <form class="form-control" method="post" action="<?=base_url()?>/panel/pages/addu">

            <label>Tytuł:</label>
            <input class="form-control" type="text" name="title" required>
            <label>Treść:</label>
            <textarea name="text" id="editor1" rows="10" cols="80">
            </textarea>

            <label>Podstrona do:</label>
            <select name="parent_id" class="form-control">
                <?if(acl("pages")):?>  <option value="0">brak</option><?endif;?>
             <?foreach($pages as $item):?>
             <?if($item->parent_id==0):?>
              <?if(acl("pages") or acl("p0_".$item->id)):?>
             <option value="<?=$item->id?>"><?=$item->title?></option>
             <?foreach($pages as $item2):?>
             <?if($item2->parent_id==$item->id):?>
             <option value="<?=$item2->id?>">--<?=$item2->title?></option>
             <?endif; ?>
             <?endforeach;?>
             <?endif; ?>
             <?endif; ?>
             <?endforeach;?>
         </select>
         <label>Seolink:</label>
         <input class="form-control" type="text" name="symlink" >
         <br>
         <input type="checkbox" name="published" value="1" checked>Opublikowany<br>
         <br>
         <a href="<?=base_url()?>/panel/pages" class="btn">Anuluj</a>

         <button class="btn btn-primary">Zapisz</button>
     </form>
     <script>
         var editor=CKEDITOR.replace( 'editor1' );
         CKFinder.setupCKEditor( editor );

     </script>
 </div>
</div>