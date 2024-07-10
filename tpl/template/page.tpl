<html>
<{if $moduleName == "index" && ( $className == "login" || $className == "register" ) }>
        <{else}>
                        <{include file="includes/head.tpl" }>
                        <{/if}>
                                <{include file="$tplPath/$tplFile" }>

</html>