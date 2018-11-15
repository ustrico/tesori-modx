<?php /* Smarty version Smarty-3.0.4, created on 2015-03-12 20:33:46
         compiled from "d:/os/domains/tesori/manager/templates/default/element/tv/renders/inputproperties/listbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12631664735501cdfa599df3-89716480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52f21cf66661eedb60e78276d59e1b7a02943646' => 
    array (
      0 => 'd:/os/domains/tesori/manager/templates/default/element/tv/renders/inputproperties/listbox.tpl',
      1 => 1425319898,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12631664735501cdfa599df3-89716480',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include 'd:/os/domains/tesori/core/model/smarty/plugins/modifier.escape.php';
?><div id="tv-input-properties-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
"></div>


<script type="text/javascript">
// <![CDATA[
var params = {
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('params')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
if ($_smarty_tpl->tpl_vars['v']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['p']['last'] = $_smarty_tpl->tpl_vars['v']->last;
?>
 '<?php echo (isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null);?>
': '<?php echo smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null),"javascript");?>
'<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['p']['last']){?>,<?php }?>
<?php }} ?>
};
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,cls: 'form-with-labels'
    ,labelAlign: 'top'
    ,border: false
    ,items: [{
        xtype: 'combo-boolean'
        ,fieldLabel: _('required')
        ,description: MODx.expandHelp ? '' : _('required_desc')
        ,name: 'inopt_allowBlank'
        ,hiddenName: 'inopt_allowBlank'
        ,id: 'inopt_allowBlank<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['allowBlank'] == 0 || params['allowBlank'] == 'false' ? false : true
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_allowBlank<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('required_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('combo_listwidth')
        ,description: MODx.expandHelp ? '' : _('combo_listwidth_desc')
        ,name: 'inopt_listWidth'
        ,id: 'inopt_listWidth<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['listWidth'] || ''
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_listWidth<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('combo_listwidth_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('combo_title')
        ,description: MODx.expandHelp ? '' : _('combo_title_desc')
        ,name: 'inopt_title'
        ,id: 'inopt_title<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['title'] || ''
        ,anchor: '100%'
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_title<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('combo_title_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: _('combo_typeahead')
        ,description: MODx.expandHelp ? '' : _('combo_typeahead_desc')
        ,name: 'inopt_typeAhead'
        ,hiddenName: 'inopt_typeAhead'
        ,id: 'inopt_typeAhead<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['typeAhead'] || false
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_typeAhead<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('combo_typeahead_desc')
        ,cls: 'desc-under'
    },{
        xtype: 'textfield'
        ,fieldLabel: _('combo_typeahead_delay')
        ,description: MODx.expandHelp ? '' : _('combo_typeahead_delay_desc')
        ,name: 'inopt_typeAheadDelay'
        ,id: 'inopt_typeAheadDelay<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['typeAheadDelay'] || 250
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_typeAheadDelay<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('combo_typeahead_delay_desc')
        ,cls: 'desc-under'
        
    },{
        xtype: 'combo-boolean'
        ,fieldLabel: _('combo_forceselection')
        ,description: MODx.expandHelp ? '' : _('combo_forceselection_desc')
        ,name: 'inopt_forceSelection'
        ,hiddenName: 'inopt_forceSelection'
        ,id: 'inopt_forceSelection<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['forceSelection'] || false
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_forceSelection<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('combo_forceselection_desc')
        ,cls: 'desc-under'
        
    },{
        xtype: 'textfield'
        ,fieldLabel: _('combo_listempty_text')
        ,description: MODx.expandHelp ? '' : _('combo_listempty_text_desc')
        ,name: 'inopt_listEmptyText'
        ,id: 'inopt_listEmptyText<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['listEmptyText'] || ''
        ,anchor: '100%'
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_listEmptyText<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('combo_listempty_text_desc')
        ,cls: 'desc-under'
    }]
    ,renderTo: 'tv-input-properties-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
});
// ]]>
</script>

