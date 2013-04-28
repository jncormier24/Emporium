{include file="header.tpl"}
<div class="conainer row-fluid">
	<div class="span9 offset2">
		{if $listings}
			<table id="listings" class="hero-unit table table-hover" style="background-color: #FFFFFF">
				<tbody id="listings_TB">
					{foreach from=$listings item=listing}
						<tr>
							<td><a href="{$base_url}/classified/{$listing['list_id']}">{$listing['title']}</a></td>
						</tr>
					{/foreach}
				</tbody>
			</table>
		{else}
			<div class="hero-unit">
				<h1>
					There are not items that match that search.
				</h1>
			</div>
		{/if}		
	</div>
</div>
{include file="footer.tpl"}
