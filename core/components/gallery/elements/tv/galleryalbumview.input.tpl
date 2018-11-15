<div id="tv{$tv->id}-form"></div>
<input id="tv{$tv->id}" type="hidden" name="tv{$tv->id}" value="{$tv->value}"/>
<!--{if $tv->value ne ''}-->
{literal}
<script type="text/javascript">
// <![CDATA[
Ext.onReady(function() {
        MODx.load({{/literal}
        xtype: 'gal-panel-album-items'
        ,border: false
        ,autoHeight: true
        ,autoScroll: true
        ,forceLayout: true
        ,width: Ext.getCmp('modx-panel-resource').getWidth() - 300
        ,album: '{$tv->value}'
        ,renderTo: 'tv{$tv->id}-form'
        ,tv: '{$tv->id}'
        ,tvValue: '{$tv->value}'

{literal}
        });
});     
// ]]>
</script>
{/literal}
<!--{else}-->
<p>Please, save document before create gallery</p>
<!--{/if}-->