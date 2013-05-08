{include file="header.tpl"}
<div class="conainer row-fluid">
	<div class="span9 offset2">
		{foreach from=$item key=k item=v}
			<legend>{$v['title']}, posted by <a href="mailto:{$user}?Subject=Emporium - {$v['title']}" target="_blank">{$user}</a></legend>
			{if $person[0]['u_id'] == $u_id}
				<form class="row span8 offset2" method="post" action="{$base_url}/update/" enctype="multipart/form-data">
					<div class="control-group">
						<label class="control-label" for="postType">Post Type</label>
			    		<select name="type">
							<option value="books">Books</option>
							<option value="furniture">Furniture</option>
							<option value="appliances">Appliances</option>
							<option value="electronics">Electronics</option>
							<option value="other">Other</option>
							<option value="wanted">Wanted</option>
						</select>
					</div>
					<div class="control-group">
				    	<label class="control-label" for="postDesc">Description</label>
				    	<div class="controls">
					    	<textarea id="postDesc" class="span9" rows="11" name="text">{$v['description']}</textarea>
					    </div>
					</div>
					<div class="control-group">
				    	<div class="controls">
					        <button type="submit" class="btn btn-success" name="update">Update</button>
					        <button type="submit" class="btn btn-danger" name="delete">Delete</button>
						</div>
					</div>
					<input type="hidden" name="list_id" value="{$list_id}"/>
				</form>
			{else}
				<p>{$v['description']}</p>
			{/if}
			{foreach from=$pics item=pic}
				<img src="{$base_url}/users/{$u_id}/{$pic}" >
			{/foreach}
		{/foreach}
	</div>
</div>
{include file="footer.tpl"}
