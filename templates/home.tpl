{include file='header.tpl'}
<div class="container">
	<legend>Hello, {$person[0]['email']}</legend>
	<div class="hero-unit">
		<div class="input-prepend">
			<form method="get" action="classifieds/">
				<div class="input-prepend">
					<div class="btn-group">
						<select name="type">
							<option value="books">Books</option>
							<option value="furniture">Furniture</option>
							<option value="appliances">Appliances</option>
							<option value="electronics">Electronics</option>
							<option value="wanted">Wanted</option>
						</select>
					</div>
					<input class="span3" id="appenededPrependedDropdownButton" type="text" name="search">
					<button class="btn" type="submit">Search</button>
				</div>
			</form>
		</div>
	</div>
	<div class="hero-unit">		
		<div class="input-prepend">
			<div class="btn-group">
				<form method="get" action="new_item/">
					<button class="btn" type="submit" action="new_item">New Item</button>
				</form>
			</div>
		</div>
	</div>
</div>
{include file='footer.tpl'}
