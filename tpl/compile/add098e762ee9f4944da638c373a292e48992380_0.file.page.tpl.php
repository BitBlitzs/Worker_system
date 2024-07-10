<?php
/* Smarty version 4.3.4, created on 2023-12-06 13:09:07
  from 'c:\xampp\htdocs\tpl\template\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_657001f3bc84d4_53338993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'add098e762ee9f4944da638c373a292e48992380' => 
    array (
      0 => 'c:\\xampp\\htdocs\\tpl\\template\\page.tpl',
      1 => 1701778620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:includes/head.tpl' => 1,
  ),
),false)) {
function content_657001f3bc84d4_53338993 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<?php if ($_smarty_tpl->tpl_vars['moduleName']->value == "index" && ($_smarty_tpl->tpl_vars['className']->value == "login" || $_smarty_tpl->tpl_vars['className']->value == "register")) {?>
        <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender("file:includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                        <?php }?>
                                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['tplPath']->value)."/".((string)$_smarty_tpl->tpl_vars['tplFile']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</html><?php }
}
