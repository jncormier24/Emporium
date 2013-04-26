{include file="indexHead.tpl"}
	<div class="row container">
		<div class="">
			<form class="form-horizontal" method="post" action="register" >
				<fieldset>
					<legend>{$title} Registration</legend>
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
						<div class="control-group">
					    	<label class="control-label" for="inputPassword">Re-type Password</label>
					    	<div class="controls">
						    	<input type="password" id="retypePassword" placeholder="Password">
						    </div>
						</div>
						<div class="control-group">
					    	<div class="controls">
					        	<button type="submit" class="btn">Sign Up</button>
					        </div>
					    </div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
{include file="footer.tpl"}
