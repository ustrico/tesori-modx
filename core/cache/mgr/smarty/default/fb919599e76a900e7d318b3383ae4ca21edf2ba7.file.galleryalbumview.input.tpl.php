<?php /* Smarty version Smarty-3.0.4, created on 2015-03-22 18:39:09
         compiled from "d:/os/domains/tesori/core/components/gallery/elements/tv/galleryalbumview.input.tpl" */ ?>
<?php /*%%SmartyHeaderCode:537481192550ee21d6fa594-53712938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb919599e76a900e7d318b3383ae4ca21edf2ba7' => 
    array (
      0 => 'd:/os/domains/tesori/core/components/gallery/elements/tv/galleryalbumview.input.tpl',
      1 => 1427038744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '537481192550ee21d6fa594-53712938',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
-form"></div>
<input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" type="hidden" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" value="<?php echo $_smarty_tpl->getVariable('tv')->value->value;?>
"/>
<!--<?php if ($_smarty_tpl->getVariable('tv')->value->value!=''){?>-->

<script type="text/javascript">
// <![CDATA[
Ext.onReady(function() {
        MODx.load({
        xtype: 'gal-panel-album-items'
        ,border: false
        ,autoHeight: true
        ,autoScroll: true
        ,forceLayout: true
        ,width: Ext.getCmp('modx-panel-resource').getWidth() - 300
        ,album: '<?php echo $_smarty_tpl->getVariable('tv')->value->value;?>
'
        ,renderTo: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
-form'
        ,tv: '<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,tvValue: '<?php echo $_smarty_tpl->getVariable('tv')->value->value;?>
'


        });
});     
// ]]>
</script>

<!--<?php }else{ ?>-->
<p>Please, save document before create gallery</p>
<!--<?php }?>-->