{include file="indexHead.tpl"}
		<div class="row container">
		{if $issues}
			<div class="errors">
				<span class="span11 label label-important">{$issues}</span>
			</div>
		{/if}
			<div class="">
				<form class="form-horizontal" method="post" action="{$base_url}/login/" >
					<fieldset>
						<legend><a href="{$base_url}">{$title}</a></legend>
						<div class="span6 offset2">
						 	<div class="control-group"  >
						    	<label class="control-label" for="inputEmail">Email</label>
						    	<div class="controls">
							    	<input type="text" id="inputEmail" placeholder="Email" name="email">
							    </div>
							</div>
							<div class="control-group">
						    	<label class="control-label" for="inputPassword">Password</label>
						    	<div class="controls">
							    	<input type="password" id="inputPassword" placeholder="Password" name="password">
							    </div>
							</div>
							<div class="controls">
						    	<a href="{$base_url}/registration/">Register</a>
						    </div>
						    <div class="controls">
							    <a href="{$base_url}/recover/">Forgot Password</a>
						    </div>
							<div class="control-group">
						    	<div class="controls">
						        	<button type="submit" class="btn">Sign In</button>
						        </div>
						    </div>				
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</body
</html>
