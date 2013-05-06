{include file='header.tpl'}
<div class="container">
	<legend>Hello, {$person[0]['email']}</legend>
	<div class="container">
		{if $messages}
			<div class="hero-unit">
				<p>{$messages}</p>
			</div>
		{/if}
		<table id="listings" class="table table-hover" style="background-color: #FFFFFF">
			<thead>
				<tr>Items</tr>
			</thead>
			<tbody id="listings_TB">
				{foreach from=$users item=user}
					<tr>
						<form method="GET" action="delete">
							<td>
								{$user['email']}
							</td>
							<td>
								<button class="btn btn-danger pull-right" type="submit">Delete</button>
							</td>
							<input type="hidden" name="post_id" value="{$user['u_id']}" />
						</form>
					</tr>
				{/foreach}
			</tbody>
		</table>
		<hr>
		<table id="listings" class="table table-hover" style="background-color: #FFFFFF">
			<thead>
				<tr>Items</tr>
			</thead>
			<tbody id="listings_TB">
				{foreach from=$items item=item}
					<tr>
						<form method="GET" action="delete">
							<td>
								{$item['title']}
							</td>
							<td>
								{$item['u_id']}
							</td>
							<td>
								{$item['type_id']}
							</td>
							<td>
								{$item['deleted']}
							</td>
							<td>
								<button class="btn btn-danger pull-right" type="submit">Delete</button>
							</td>
							<input type="hidden" name="post_id" value="{$item['list_id']}" />
						</form>
					</tr>
				{/foreach}
			</tbody>
		</table>
	</div>
{include file='footer.tpl'}
