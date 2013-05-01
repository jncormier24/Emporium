{include file='header.tpl'}
<div class="container">
	<legend>Hello, {$person[0]['email']}</legend>
	<div class="container">
		<table id="listings" class="table table-hover" style="background-color: #FFFFFF">
			<thead>
				<tr>Items</tr>
			</thead>
			<tbody id="listings_TB">
				{foreach from=$listings item=listing}
					<tr>
						<form method="GET" action="delete">
							<td>
								<a href="{$base_url}/classified/{$listing['list_id']}" >{$listing['title']}</a>
							</td>
							<td>
								<button class="btn btn-danger pull-right" type="submit">Delete</button>
							</td>
							<input type="hidden" name="post_id" value="{$listing['list_id']}" />
						</form>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
	<div class="container">
		<div class="hero-unit pull-left">
			<legend>Buy</legend>
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
		<div class="hero-unit pull-right">	
			<legend>Sell</legend>	
			<div class="input-prepend">
				<div class="btn-group">
					<form method="get" action="new_item/">
						<button class="btn" type="submit" action="new_item">New Item</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
{include file='footer.tpl'}
