{include file='header.tpl'}
<div class="container">
	<legend>Hello, {$user[0]}</legend>
	<div class="container">
		{if $messages}
			<div class="hero-unit">
				<p>{$messages}</p>
			</div>
		{/if}
		<table id="listings" class="table table-hover" style="background-color: #FFFFFF">
			<thead>
				<tr>
					<th>Users</th>
					<th>User ID</th>
				</tr>
			</thead>
			<tbody id="listings_TB">
				{foreach from=$users item=user}
					<tr>
						<td>
							{$user['email']}
						</td>
						<td>
							{$user['u_id']}
						</td>
						<td>
							<button class="btn btn-danger pull-right" type="submit">Delete</button>
						</td>
						<input type="hidden" name="post_id" value="{$user['u_id']}" />
					</tr>
				{/foreach}
			</tbody>
		</table>
		<hr>
		<table id="listings" class="table table-hover" style="background-color: #FFFFFF">
			<thead>
				<tr>
					<th>Items</th>
					<th>Item ID</th>
					<th>User ID</th>
					<th>Type</th>
					<th>Deleted</th>
				</tr>
			</thead>
			<tbody id="listings_TB">
				{foreach from=$items item=item}
					<form method="POST" action="admin_delete/">
						<tr>	
							<td>
							<a href="{$base_url}/classified/{$item['list_id']}">{$item['title']}</a>
							</td>
							<td>
								{$item['list_id']}
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
						</tr>
					</form>
				{/foreach}
			</tbody>
		</table>
	</div>
{include file='footer.tpl'}
