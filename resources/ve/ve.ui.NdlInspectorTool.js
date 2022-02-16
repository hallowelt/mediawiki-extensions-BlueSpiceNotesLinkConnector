mw.loader.using( ["ext.bluespice.visualEditorConnector"], function() {
    ve.ui.NdlInspectorTool = function VeUiNdlInspectorTool( toolGroup, config ) {
        ve.ui.NdlInspectorTool.super.call( this, toolGroup, config );
    };
    OO.inheritClass( ve.ui.NdlInspectorTool, ve.ui.FragmentInspectorTool );
    ve.ui.NdlInspectorTool.static.name = 'ndlTool';
    ve.ui.NdlInspectorTool.static.group = 'none';
    ve.ui.NdlInspectorTool.static.autoAddToCatchall = false;
    ve.ui.NdlInspectorTool.static.icon = 'markup';
    ve.ui.NdlInspectorTool.static.title = OO.ui.deferMsg(
        'bs-noteslinkconnector-ve-ndl-title'
    );
    ve.ui.NdlInspectorTool.static.modelClasses = [ve.dm.NdlNode];
    ve.ui.NdlInspectorTool.static.commandName = 'ndlCommand';
    ve.ui.toolFactory.register( ve.ui.NdlInspectorTool );

    ve.ui.commandRegistry.register(
        new ve.ui.Command(
            'ndlCommand', 'window', 'open',
            { args: ['ndlInspector'], supportedSelections: ['linear'] }
        )
    );
} );
