{include file="indexHead.tpl"}
	<div class="row container">
		{if $error}
			<span class="span11 label label-important">{$error}</span>
		{/if}
		<div class="">
			<form id="register" class="form-horizontal" method="post" action="recovery/" >
				<fieldset>
					<legend><a href="{$base_url}">{$title}</a> Forgot Password</legend>
					<div class="span6 offset2">
						<div class="control-group"  >
							<label class="control-label" for="inputEmail">Email</label>
							<div class="controls">
						    	<input type="text" id="inputEmail" placeholder="Email" name="email" required="email">	
						    </div>
						</div>
						<div class="control-group">
							<label class="control-label" for="question">Security Question</label>
							<div class="controls">
								<select name="question">
									<option value="1">What is your mother's maiden name?</option>
									<option value="2">What was the make of your first car?</option>
									<option value="3">What is the name of your favorite teacher?</option>
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputAnswer">Answer</label>
							<div class="controls">
						    	<input type="password" id="inputAnswer" placeholder="Answer" name="answer" required>
						    </div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputPassword">Re-type Answer</label>
							<div class="controls">
						    	<input type="password" id="retypeAnswer" placeholder="Answer" name="reanswer" required>
						    </div>
						</div>
						<div class="control-group">
					    	<label class="control-label" for="inputPassword">Password</label>
					    	<div class="controls">
						    	<input type="password" id="inputPassword" placeholder="Password" name="password" required>		
						    </div>
						</div>
						<div class="control-group">
					    	<label class="control-label" for="inputPassword">Re-type Password</label>
					    	<div class="controls">
						    	<input type="password" id="retypePassword" placeholder="Password" name="repassword" required>
						    </div>
						</div>
						<div class="control-group">
							<div class="controls">
						    	<button type="submit" class="btn">Reset</button>
						    </div>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
{include file="footer.tpl"}
