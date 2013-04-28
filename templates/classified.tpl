{include file="header.tpl"}
<div class="conainer row-fluid">
	<div class="span9 offset2">
		{foreach from=$item key=k item=v}
			<legend>{$v['title']}, posted by {$user}</legend>
			<p>{$v['text']}</p>
			{foreach from=$pics item=pic}
				<img src="{$base_url}/users/{$u_id}/{$pic}" >
			{/foreach}
		{/foreach}
	</div>
</div>
{include file="footer.tpl"}
