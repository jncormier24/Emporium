{include file="header.tpl"}
<div class="conainer row-fluid">
	<div class="span9 offset2">
		{foreach from=$item key=k item=v}
			<legend>{$v['title']}</legend>
			<p>{$v['text']}</p>
			pictures
		{/foreach}
	</div>
</div>
{include file="footer.tpl"}
