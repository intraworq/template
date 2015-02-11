{extends file="master.tpl"}
{block name='title'} Error encountered in app{/block}

{block name='body'} {$exception->getCode()} {/block}