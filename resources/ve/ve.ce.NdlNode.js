mw.loader.using( ["ext.bluespice.visualEditorConnector"], function() {
    ve.ce.NdlNode = function VeCeNdlNode() {
        // Parent constructor
        ve.ce.NdlNode.super.apply( this, arguments );
    };

    /* Inheritance */

    OO.inheritClass( ve.ce.NdlNode, ve.ce.MWExtensionNode );

    /* Static properties */

    ve.ce.NdlNode.static.name = 'NDL';

    ve.ce.NdlNode.static.primaryCommandName = 'ndl';

    // If body is empty, tag does not render anything
    ve.ce.NdlNode.static.rendersEmpty = true;

    /* Registration */

    ve.ce.nodeFactory.register( ve.ce.NdlNode );
} );
