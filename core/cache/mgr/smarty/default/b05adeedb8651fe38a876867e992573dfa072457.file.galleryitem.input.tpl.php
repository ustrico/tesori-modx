<?php /* Smarty version Smarty-3.0.4, created on 2015-03-12 09:00:36
         compiled from "d:/os/domains/tesori/core/components/gallery/elements/tv/galleryitem.input.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201839755155012b840bad21-79755082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b05adeedb8651fe38a876867e992573dfa072457' => 
    array (
      0 => 'd:/os/domains/tesori/core/components/gallery/elements/tv/galleryitem.input.tpl',
      1 => 1425362482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201839755155012b840bad21-79755082',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'd:/os/domains/tesori/core/model/smarty/plugins/modifier.escape.php';
?><div id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
-form"></div>
<input type="hidden" id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" value="<?php if ($_smarty_tpl->getVariable('itemjson')->value){?><?php echo smarty_modifier_escape($_smarty_tpl->getVariable('itemjson')->value);?>
<?php }else{ ?>{}<?php }?>" />


<script type="text/javascript">
// <![CDATA[
Ext.onReady(function() {
    MODx.load({
        xtype: 'gal-panel-tv'
        ,tv: '<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,tvValue: '<?php echo $_smarty_tpl->getVariable('tv')->value->value;?>
'
        <?php if ($_smarty_tpl->getVariable('itemjson')->value){?>,data: <?php echo $_smarty_tpl->getVariable('itemjson')->value;?>
<?php }?>
    });
});
// ]]>
</script>
