<?php /* Smarty version Smarty-3.0.4, created on 2015-03-22 17:07:49
         compiled from "d:/os/domains/tesori/manager/templates/default/element/tv/renders/input/number.tpl" */ ?>
<?php /*%%SmartyHeaderCode:843109957550eccb5d51987-70775949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e392461816a07de599dc0a524cec87ea524bcc20' => 
    array (
      0 => 'd:/os/domains/tesori/manager/templates/default/element/tv/renders/input/number.tpl',
      1 => 1425319895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '843109957550eccb5d51987-70775949',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'd:/os/domains/tesori/core/model/smarty/plugins/modifier.escape.php';
?><input id="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
" name="tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
"
	type="text" class="textfield"
	value="<?php echo smarty_modifier_escape($_smarty_tpl->getVariable('tv')->value->get('value'));?>
"
	<?php echo $_smarty_tpl->getVariable('style')->value;?>

	tvtype="<?php echo $_smarty_tpl->getVariable('tv')->value->type;?>
"
/>

<script type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld = MODx.load({
    
        xtype: 'numberfield'
        ,applyTo: 'tv<?php echo $_smarty_tpl->getVariable('tv')->value->id;?>
'
        ,width: 400
        ,enableKeyEvents: true
        ,autoStripChars: true
        ,allowBlank: <?php if ((isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)==1||(isset($_smarty_tpl->getVariable('params')->value['allowBlank']) ? $_smarty_tpl->getVariable('params')->value['allowBlank'] : null)=='true'){?>true<?php }else{ ?>false<?php }?> 
        ,allowDecimals: <?php if ((isset($_smarty_tpl->getVariable('params')->value['allowDecimals']) ? $_smarty_tpl->getVariable('params')->value['allowDecimals'] : null)&&(isset($_smarty_tpl->getVariable('params')->value['allowDecimals']) ? $_smarty_tpl->getVariable('params')->value['allowDecimals'] : null)!='false'&&(isset($_smarty_tpl->getVariable('params')->value['allowDecimals']) ? $_smarty_tpl->getVariable('params')->value['allowDecimals'] : null)!='No'){?>true<?php }else{ ?>false<?php }?> 
        ,allowNegative: <?php if ((isset($_smarty_tpl->getVariable('params')->value['allowNegative']) ? $_smarty_tpl->getVariable('params')->value['allowNegative'] : null)&&(isset($_smarty_tpl->getVariable('params')->value['allowNegative']) ? $_smarty_tpl->getVariable('params')->value['allowNegative'] : null)!='false'&&(isset($_smarty_tpl->getVariable('params')->value['allowNegative']) ? $_smarty_tpl->getVariable('params')->value['allowNegative'] : null)!='No'){?>true<?php }else{ ?>false<?php }?> 
        ,decimalPrecision: <?php if ((isset($_smarty_tpl->getVariable('params')->value['decimalPrecision']) ? $_smarty_tpl->getVariable('params')->value['decimalPrecision'] : null)>=0){?><?php echo sprintf("%d",(isset($_smarty_tpl->getVariable('params')->value['decimalPrecision']) ? $_smarty_tpl->getVariable('params')->value['decimalPrecision'] : null));?>
<?php }else{ ?>2<?php }?> 
        ,decimalSeparator: <?php if ((isset($_smarty_tpl->getVariable('params')->value['decimalSeparator']) ? $_smarty_tpl->getVariable('params')->value['decimalSeparator'] : null)){?>'<?php echo (isset($_smarty_tpl->getVariable('params')->value['decimalSeparator']) ? $_smarty_tpl->getVariable('params')->value['decimalSeparator'] : null);?>
'<?php }else{ ?>'.'<?php }?> 
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['maxValue']) ? $_smarty_tpl->getVariable('params')->value['maxValue'] : null)!=''&&is_numeric((isset($_smarty_tpl->getVariable('params')->value['maxValue']) ? $_smarty_tpl->getVariable('params')->value['maxValue'] : null))){?>,maxValue: <?php echo (isset($_smarty_tpl->getVariable('params')->value['maxValue']) ? $_smarty_tpl->getVariable('params')->value['maxValue'] : null);?>
<?php }?> 
        <?php if ((isset($_smarty_tpl->getVariable('params')->value['minValue']) ? $_smarty_tpl->getVariable('params')->value['minValue'] : null)!=''&&is_numeric((isset($_smarty_tpl->getVariable('params')->value['minValue']) ? $_smarty_tpl->getVariable('params')->value['minValue'] : null))){?>,minValue: <?php echo (isset($_smarty_tpl->getVariable('params')->value['minValue']) ? $_smarty_tpl->getVariable('params')->value['minValue'] : null);?>
<?php }?> 
        ,msgTarget: 'under'
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    MODx.makeDroppable(fld);
    Ext.getCmp('modx-panel-resource').getForm().add(fld);
});

// ]]>
</script>
