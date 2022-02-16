mw.loader.using( ["ext.bluespice.visualEditorConnector"], function() {
    ve.ui.NdlInspector = function VeUiNdlInspector( config ) {
        // Parent constructor
        ve.ui.NdlInspector.super.call( this, ve.extendObject( {padded: true}, config ) );
    };

    /* Inheritance */

    OO.inheritClass( ve.ui.NdlInspector, ve.ui.MWLiveExtensionInspector );

    /* Static properties */

    ve.ui.NdlInspector.static.name = 'ndlInspector';

    ve.ui.NdlInspector.static.title = OO.ui.deferMsg( 'bs-noteslinkconnector-ve-ndlinspector-title' );

    ve.ui.NdlInspector.static.modelClasses = [ve.dm.NdlNode];

    ve.ui.NdlInspector.static.dir = 'ltr';

    //This tag does not have any content
    ve.ui.NdlInspector.static.allowedEmpty = false;
    ve.ui.NdlInspector.static.selfCloseEmptyBody = false;

    /* Registration */

    ve.ui.windowFactory.register( ve.ui.NdlInspector );
} );
