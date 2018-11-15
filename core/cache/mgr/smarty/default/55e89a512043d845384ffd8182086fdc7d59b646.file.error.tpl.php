<?php /* Smarty version Smarty-3.0.4, created on 2015-03-22 19:22:55
         compiled from "d:/os/domains/tesori/manager/templates/default/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2022595223550eec5f5d89c4-41194699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55e89a512043d845384ffd8182086fdc7d59b646' => 
    array (
      0 => 'd:/os/domains/tesori/manager/templates/default/error.tpl',
      1 => 1425319887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2022595223550eec5f5d89c4-41194699',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="modx_error">
    <h2>Error!</h2>
    
    <p><?php echo (isset($_smarty_tpl->getVariable('_e')->value['message']) ? $_smarty_tpl->getVariable('_e')->value['message'] : null);?>
</p>
    
    <?php if (count((isset($_smarty_tpl->getVariable('_e')->value['errors']) ? $_smarty_tpl->getVariable('_e')->value['errors'] : null))>0){?>
    <p></p>
    <p><strong>Errors:</strong></p>
    <ul>
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
 $_from = (isset($_smarty_tpl->getVariable('_e')->value['errors']) ? $_smarty_tpl->getVariable('_e')->value['errors'] : null); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
?>
        <li><?php echo (isset($_smarty_tpl->tpl_vars['error']->value) ? $_smarty_tpl->tpl_vars['error']->value : null);?>
</li>
    <?php }} ?>
    </ul>
    <?php }?>
</div>