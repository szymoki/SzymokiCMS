<div class="module">
	<div class="module-head">
		<h3>
		Menu</h3>
	</div>
	<div class="module-body">

		<h3>Dodaj pozycję menu</h3>
		<?if($alert==true):?>
		<?=validation_errors(); ?>
		<?endif;?>
		<form class="form-control" method="post" action="<?=base_url()?>/panel/menu/addu">


			<label>Nazwa:</label>
			<input class="form-control" type="text" name="name" required>
			<label>Url:</label>
			<input class="form-control" type="text" name="url" required>

			<label>Pozycja:</label>
			<input class="form-control" type="number" name="pozycja" required>

			<label>Podmenu:</label>
			<select class="form-control" name="parent_id">
				<option value="0">Brak</option>
				<?foreach($menu as $item):?>
				<?if($item->parent_id==0):?>
				<option value="<?=$item->id?>"><?=$item->name?></option>
				<?endif;?>
				<?endforeach;?>
			</select>

			<label>Aktywny:</label>
			<select class="form-control" name="active">
				<option value="1">Tak</option>
				<option value="0">Nie</option>
			</select><Br>
			<a href="<?=base_url()?>/panel/menu" class="btn">Anuluj</a>

			<button class="btn btn-primary">Dodaj</button>
		</form>


	</div>
</div>