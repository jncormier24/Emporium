{include file="header.tpl"}
<div class="row-fluid">
	<form class="row span8 offset2" method="post" action="create_item/"
	enctype="multipart/form-data">
		<fieldset>
			<legend>{$title} New Post</legend>
			<div class="offset2">
			 	<div class="control-group">
			    	<label class="control-label" for="postTitle">Title</label>
			    	<div class="controls">
				    	<input class="span9" type="text" id="postTitle" placeholder="Title" name="title">
				    </div>
				</div>
				<div class="control-group">
					<label class="control-label" for="postType">Post Type</label>
		    		<select name="type">
						<option value="books">Books</option>
						<option value="furniture">Furniture</option>
						<option value="appliances">Appliances</option>
						<option value="electronics">Electronics</option>
						<option value="wanted">Wanted</option>
					</select>
				</div>
				<div class="control-group">
			    	<label class="control-label" for="postDesc">Description</label>
			    	<div class="controls">
				    	<textarea id="postDesc" class="span9" rows="11" name="text"></textarea>
				    </div>
				</div>
				<div class="control-group">
					<label class="control-label" for="postPics">Pictures</label>
					<input type="file" name="pictures[]">
					<input type="file" name="pictures[]">
					<input type="file" name="pictures[]">
				</div>
				<div class="control-group">
			    	<div class="controls">
			        	<button type="submit" class="btn">Post</button>
						</div>
				</div>
			</div>
		</fieldset>
	</form>
</div>
{include file="footer.tpl"}
