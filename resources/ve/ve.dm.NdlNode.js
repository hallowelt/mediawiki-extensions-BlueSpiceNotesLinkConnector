mw.loader.using(["ext.bluespice.visualEditorConnector"], function() {
    ve.dm.NdlNode = function VeDmNdlNode() {
        // Parent constructor
        ve.dm.NdlNode.super.apply(this, arguments);
    };

    /* Inheritance */

    OO.inheritClass(ve.dm.NdlNode, ve.dm.MWExtensionNode);

    /* Static members */

    ve.dm.NdlNode.static.name = 'ndl';

    ve.dm.NdlNode.static.tagName = 'ndl';

    // Name of the parser tag
    ve.dm.NdlNode.static.extensionName = 'ndl';

    // This tag renders without content
    ve.dm.NdlNode.static.childNodeTypes = [];
    ve.dm.NdlNode.static.isContent = false;

    /* Registration */

    ve.dm.modelRegistry.register( ve.dm.NdlNode );
} );
