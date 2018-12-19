var XMain = {
    theme  : "energyblue",
    height : screen.height - 257,
    width  : screen.width,
    layoutMainLeft: {
        type: 'tabbedGroup',
        width: 220,
        items: [{
            type: 'layoutPanel',
            title: 'Solution Explorer',
            contentContainer: 'MenuPanel'
        }, {
            type: 'layoutPanel',
            title: 'Properties',
            contentContainer: 'PropertiesPanel'
        }]
    },
    layoutMainCenter: {
        type: 'layoutGroup',
        orientation: 'vertical',
        width: 1608,
        items: [{
            type: 'tabbedGroup',
            height: screen.height - 257,
            items: [{
                type: 'layoutPanel',
                title: 'Main Panel',
                contentContainer: 'MainPanel'
            }, {
                type: 'layoutPanel',
                title: 'Document 2',
                contentContainer: 'Document2Panel'
            }]
        }]
    },
    layoutMainRight: {
        type: 'tabbedGroup',
        width: 220,
        items: [{
            type: 'layoutPanel',
            title: 'Solution Explorer',
            contentContainer: 'SolutionExplorerPanel'
        }, {
            type: 'layoutPanel',
            title: 'Properties',
            contentContainer: 'PropertiesPanel'
        }]
    },
    layout : [{
        type: 'layoutGroup',
        orientation: 'horizontal',
        items: [this.layoutMainLeft,this.layoutMainCenter,this.layoutMainRight]
    }],
    init: function () {
        //top navbar
        $("#navBar").jqxNavBar({theme: this.theme, width: this.width,height: 40, selectedItem: 0 });
        //main layouts
        $('#jqxLayout').jqxLayout({ theme: this.theme,width: this.width, height: this.height, layout: this.layout });
        //left menu in layout
        $("#jqxMenu").jqxMenu({ theme: this.theme,width: '220', height: this.height,mode: 'vertical'});
    },
    setupMainPanel:function (title,content,layout) {
        console.log($('div').attr('data-container','MainPanel111'));
    }
}
$(function () {
   // XMain.init();

});
