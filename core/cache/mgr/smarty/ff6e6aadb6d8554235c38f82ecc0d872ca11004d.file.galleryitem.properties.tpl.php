<?php /* Smarty version Smarty-3.0.4, created on 2015-03-12 09:00:19
         compiled from "d:/os/domains/tesori/core/components/gallery/elements/tv/galleryitem.properties.tpl" */ ?>
<?php /*%%SmartyHeaderCode:36412142655012b736f1a81-08496650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff6e6aadb6d8554235c38f82ecc0d872ca11004d' => 
    array (
      0 => 'd:/os/domains/tesori/core/components/gallery/elements/tv/galleryitem.properties.tpl',
      1 => 1425362482,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36412142655012b736f1a81-08496650',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="tv-wprops-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
"></div>


<script type="text/javascript">
// <![CDATA[
var params = <?php echo $_smarty_tpl->getVariable('params')->value;?>
;
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
var tv = '<?php echo $_smarty_tpl->getVariable('tv')->value;?>
';
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,labelWidth: 150
    ,border: false
    ,items: []
    ,renderTo: 'tv-wprops-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
});
// ]]>
</script>
