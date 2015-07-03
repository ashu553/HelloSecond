<?php /* Smarty version 3.1.28-dev/21, created on 2015-07-03 10:34:38
         compiled from "C:\wamp\www\smarty\smarty\first\templates\test.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:243165596653e1312d7_70803362%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a24074740364f550cc8b97370b27acd47182d18b' => 
    array (
      0 => 'C:\\wamp\\www\\smarty\\smarty\\first\\templates\\test.tpl',
      1 => 1435919642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '243165596653e1312d7_70803362',
  'variables' => 
  array (
    'title' => 0,
    'hello' => 0,
    'contac' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.28-dev/21',
  'unifunc' => 'content_5596653e1ab3f0_54512218',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5596653e1ab3f0_54512218')) {
function content_5596653e1ab3f0_54512218 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '243165596653e1312d7_70803362';
?>
<html>
  <head>
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  </head>
  <body>
    <p><?php echo $_smarty_tpl->tpl_vars['hello']->value;?>
</p>
	
	Name : <p><?php echo $_smarty_tpl->tpl_vars['contac']->value->name;?>
</p>
	Place : <p><?php echo $_smarty_tpl->tpl_vars['contac']->value->city;?>
</p>
	Contact : <p><?php echo $_smarty_tpl->tpl_vars['contac']->value->phone;?>
</p>
  </body>
</html><?php }
}
?>