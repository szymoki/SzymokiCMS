<div class="module">
    <script src="/ckfinder/ckfinder.js"></script>
    <div class="module-head">
        <h3>
        Slider</h3>
    </div>
    <div class="module-body">
        <h3>Edytuj obrazek</h3>
        <?if($alert==true):?>
        <?=validation_errors(); ?>
        <?endif;?>
        <script  src="<?=base_url()?>/ckfinder/ckfinder.js"></script>
        <script  src="<?=base_url()?>/js/ckeditor.js"></script>

        <form class="form-control" method="post" action="<?=base_url()?>/panel/slider/editu">
            <input type="hidden" name="id" value="<?=$slider->id?>">
            <label>Ścieżka obrazka:</label>
            <input class="form-control" id="ckfinder-input-1" type="text" name="image_path" value="<?=$slider->image_path?>" required>
            <a href="#" id="ckfinder-popup-1" class="btn btn-primary">Wybierz z serwera</a>
            <label>Tekst :</label>
            <input class="form-control" type="text" name="text" value="<?=$slider->text?>" required>
            <label>Tekst przycisku:</label>
            <input class="form-control" type="text" name="btn_text" value="<?=$slider->btn_text?>" required>

            <label>Adres URL przycisku:</label>
            <input class="form-control" type="text" name="url" value="<?=$slider->url?>" required>
            <br>
            <input type="checkbox" name="active" value="1" <?=$slider->active==1 ? ' checked' :"" ?>>Aktywny<br>


            <br>
            <a href="<?=base_url()?>/panel/slider" class="btn">Anuluj</a>

            <button class="btn btn-primary">Zapisz</button>
        </form>
        <script>
           ClassicEditor
           .create( document.querySelector( '#editor1' )).then( editor => {
            console.log( editor );
        } )
           .catch( error => {
            console.error( error );
        } );


           var button1 = document.getElementById( 'ckfinder-popup-1' );

           button1.onclick = function() {
            selectFileWithCKFinder( 'ckfinder-input-1' );
        };

        function selectFileWithCKFinder( elementId ) {
            CKFinder.modal( {
                chooseFiles: true,
                width: 800,
                height: 600,
                onInit: function( finder ) {
                    finder.on( 'files:choose', function( evt ) {
                        var file = evt.data.files.first();
                        var output = document.getElementById( elementId );
                        output.value = file.getUrl();
                    } );

                    finder.on( 'file:choose:resizedImage', function( evt ) {
                        var output = document.getElementById( elementId );
                        output.value = evt.data.resizedUrl;
                    } );
                }
            } );
        }
    </script>
</div>



</div>
