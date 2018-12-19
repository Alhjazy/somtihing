<!DOCTYPE html>
<html lang="en">
<head>
    <title id='Description'>XControl</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 minimum-scale=1" />
    <link rel="stylesheet" type="text/css" href="/public/jquery-easyui-1.6.11/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="/public/jquery-easyui-1.6.11/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="/public/jquery-easyui-1.6.11/demo/demo.css">
    <link rel="stylesheet" type="text/css" href="/public/vendor/style.css">

</head>

<body >
<section class='header'>
    <header>
        <ul class='menu'>
            <li class='logo'>
                <div class='cube'>
                    <div class='face front'></div>
                    <div class='face back'></div>
                    <div class='face left'></div>
                    <div class='face right'></div>
                    <div class='face top'></div>
                    <div class='face bottom'></div>
                </div>
                <a href='#'>
                    <h1>
                        <span>b</span>
                        <span>x</span>
                        <small>interactive</small>
                    </h1>
                </a>
            </li>
            <li><a href='#'>work</a></li>
            <li><a href='#'>about</a></li>
            <li><a href='#'>blog</a></li>
            <li><a href='#'>contact</a></li>
        </ul>
    </header>

</section>

<div class="easyui-layout" fit="true" style="height:250px;top: 120px;">
    <div region="west" split="false"  collapsible="false" style="width:11.3%;   margin-top: 14%;">

        <div id="sm" class="easyui-sidemenu" style="width:230px;"></div>

        <div region="west" split1="true" border="false" style="height:225px; width:225px;margin-top: 348px;">
            <div class="easyui-calendar" fit="true"></div>
        </div>
    </div>



    <div region="center" split="false" style="background: transparent; width: 88.7%;" border="false"  collapsible="false" >
        <div id="MainPanelTabs" class="easyui-tabs" style="width: 70%;" >
            <div title="Tab1">
                <table id="dg" title="DataGrid" style="width:87%;" data-options="singleSelect:true, data:data ">
                    <thead>
                    <tr>
                        <th data-options="field:'itemid',width:80">Item ID</th>
                        <th data-options="field:'productid',width:100">Product</th>
                        <th data-options="field:'listprice',width:80,align:'right'">List Price</th>
                        <th data-options="field:'unitcost',width:80,align:'right'">Unit Cost</th>
                        <th data-options="field:'attr1',width:250">Attribute</th>
                        <th data-options="field:'status',width:60,align:'center'">Status</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>






</div>
{{--<div class="easyui-dialog" title="Dialog" iconCls="icon-save" style="width:300px;left:70%;top:300px;padding:10px"--}}
     {{--data-options="--}}
			{{--resizable:true,--}}
			{{--toolbar:[{--}}
				{{--iconCls:'icon-add'--}}
			{{--},{--}}
				{{--iconCls:'icon-edit'--}}
			{{--}],--}}
			{{--buttons:[{--}}
				{{--text:'Ok',--}}
				{{--iconCls:'icon-ok'--}}
			{{--},{--}}
				{{--text:'Cancel',--}}
				{{--iconCls:'icon-cancel'--}}
			{{--}]--}}
		{{--">--}}
    {{--<p>Dialog Content.</p>--}}
{{--</div>--}}

{{--<div data-options="region:'north',border:false" style="height:60px;background:#2d3e50;color:#fff;padding:10px">north region</div>--}}
{{--<div data-options="region:'west',split:true,collapsed:false,title:'EXPLORER'" style="width:295px;">--}}
    {{--<div id="tt" class="easyui-tabs" style="height:524px;">--}}
        {{--<div title="Tab1" style="display:none;">--}}
            {{--<div id="sm" class="easyui-sidemenu" data-options="data:data"></div>--}}
        {{--</div>--}}
        {{--<div title="Tab2" data-options="closable:true" style="overflow:auto;padding:20px;display:none;">--}}
            {{--tab2--}}
        {{--</div>--}}
        {{--<div title="Tab3" data-options="iconCls:'icon-reload',closable:true" style="display:none;">--}}
            {{--tab3--}}
        {{--</div>--}}
        {{--<div title="Tab3" data-options="iconCls:'icon-reload',closable:true" style="display:none;">--}}
            {{--tab3--}}
        {{--</div>--}}
        {{--<div title="Tab3" data-options="iconCls:'icon-reload',closable:true" style="display:none;">--}}
            {{--tab3--}}
        {{--</div>--}}
        {{--<div title="Tab3" data-options="iconCls:'icon-reload',closable:true" style="display:none;">--}}
            {{--tab3--}}
        {{--</div>--}}
        {{--<div title="Tab3" data-options="iconCls:'icon-reload',closable:true" style="display:none;">--}}
            {{--tab3--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
{{--<div data-options="region:'east',split:true,collapsed:false,title:'East'" style="width:100px;padding:10px;">east region</div>--}}
{{--<div data-options="region:'south',collapsed:false,border:false" style="height:50px;background:#fff;color:#000;padding:10px;">south region</div>--}}
{{--<div data-options="region:'center',title:'Preview'" style="height: 518px;">--}}
    {{--<div class="easyui-layout" data-options="fit:true">--}}
        {{--<div data-options="region:'north',split:true" style="height:50px">--}}
            {{--<div class="easyui-panel" style="padding:5px;">--}}
                {{--<a href="#" class="easyui-linkbutton" data-options="plain:true">Home</a>--}}
                {{--<a href="#" class="easyui-splitbutton" data-options="menu:'#mm1',iconCls:'icon-edit'">Edit</a>--}}
                {{--<a href="#" class="easyui-splitbutton" data-options="menu:'#mm2',iconCls:'icon-ok'">Ok</a>--}}
                {{--<a href="#" class="easyui-menubutton" data-options="menu:'#mm3',iconCls:'icon-help'">Help</a>--}}
            {{--</div>--}}
            {{--<div id="mm1" style="width:150px;">--}}
                {{--<div data-options="iconCls:'icon-undo'">Undo</div>--}}
                {{--<div data-options="iconCls:'icon-redo'">Redo</div>--}}
                {{--<div class="menu-sep"></div>--}}
                {{--<div>Cut</div>--}}
                {{--<div>Copy</div>--}}
                {{--<div>Paste</div>--}}
                {{--<div class="menu-sep"></div>--}}
                {{--<div>--}}
                    {{--<span>Toolbar</span>--}}
                    {{--<div>--}}
                        {{--<div>Address</div>--}}
                        {{--<div>Link</div>--}}
                        {{--<div>Navigation Toolbar</div>--}}
                        {{--<div>Bookmark Toolbar</div>--}}
                        {{--<div class="menu-sep"></div>--}}
                        {{--<div>New Toolbar...</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div data-options="iconCls:'icon-remove'">Delete</div>--}}
                {{--<div>Select All</div>--}}
            {{--</div>--}}
            {{--<div id="mm2" style="width:100px;">--}}
                {{--<div data-options="iconCls:'icon-ok'">Ok</div>--}}
                {{--<div data-options="iconCls:'icon-cancel'">Cancel</div>--}}
            {{--</div>--}}
            {{--<div id="mm3" style="width:150px;">--}}
                {{--<div>Help</div>--}}
                {{--<div>Update</div>--}}
                {{--<div>--}}
                    {{--<span>About</span>--}}
                    {{--<div class="menu-content" style="padding:10px;text-align:left">--}}
                        {{--<img src="http://www.jeasyui.com/images/logo1.png" style="width:150px;height:50px">--}}
                        {{--<p style="font-size:14px;color:#444">Try jQuery EasyUI to build your modern, interactive, javascript applications.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div data-options="region:'east',split:true" style="width:180px">--}}

        {{--</div>--}}
        {{--<div data-options="region:'west',split:true" style="width:210px">--}}
            {{--<div class="easyui-accordion" style="width:205px;height:200px;">--}}
                {{--<div title="About" data-options="iconCls:'icon-ok'" style="overflow:auto;padding:10px;">--}}
                    {{--<h3 style="color:#0099FF;">Accordion for jQuery</h3>--}}
                    {{--<p>Accordion is a part of easyui framework for jQuery. It lets you define your accordion component on web page more easily.</p>--}}
                {{--</div>--}}
                {{--<div title="Help" data-options="iconCls:'icon-help'" style="padding:10px;">--}}
                    {{--<p>The accordion allows you to provide multiple panels and display one or more at a time. Each panel has built-in support for expanding and collapsing. Clicking on a panel header to expand or collapse that panel body. The panel content can be loaded via ajax by specifying a 'href' property. Users can define a panel to be selected. If it is not specified, then the first panel is taken by default.</p>--}}
                {{--</div>--}}
                {{--<div title="TreeMenu" data-options="iconCls:'icon-search'" style="padding:10px 0;">--}}
                    {{--<ul class="easyui-tree">--}}
                        {{--<li>--}}
                            {{--<span>Foods</span>--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--<span>Fruits</span>--}}
                                    {{--<ul>--}}
                                        {{--<li>apple</li>--}}
                                        {{--<li>orange</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                    {{--<span>Vegetables</span>--}}
                                    {{--<ul>--}}
                                        {{--<li>tomato</li>--}}
                                        {{--<li>carrot</li>--}}
                                        {{--<li>cabbage</li>--}}
                                        {{--<li>potato</li>--}}
                                        {{--<li>lettuce</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div data-options="region:'center'">--}}
            {{--<div id="tt" class="easyui-tabs" style="height:524px;">--}}
                {{--<div title="Tab1" style="display:none;"></div>--}}
                {{--<div title="Tab2" data-options="closable:true" style="overflow:auto;padding:20px;display:none;"> </div>--}}
                {{--<div title="Tab3" data-options="iconCls:'icon-reload',closable:true" style="display:none;"> </div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div data-options="region:'south',split:true" style="width:1736px;height:230px;">--}}
            {{--<div data-options="region:'west',split:true" style="width:205px">--}}
                {{--<div class="easyui-calendar" style="width:205px;height:220px;"></div>--}}
            {{--</div>--}}
            {{--<div data-options="region:'east',split:true" style="width: 300px">--}}
            {{--</div>--}}
            {{--<div data-options="region:'center',split:true" style="width:1232px">--}}
                {{--<form id="ff" method="post">--}}
                    {{--<div style="margin-bottom:20px">--}}
                        {{--<input class="easyui-textbox" name="name" style="width:100%" data-options="label:'Name:',required:true">--}}
                    {{--</div>--}}
                    {{--<div style="margin-bottom:20px">--}}
                        {{--<input class="easyui-textbox" name="email" style="width:100%" data-options="label:'Email:',required:true,validType:'email'">--}}
                    {{--</div>--}}
                    {{--<div style="margin-bottom:20px">--}}
                        {{--<input class="easyui-textbox" name="subject" style="width:100%" data-options="label:'Subject:',required:true">--}}
                    {{--</div>--}}
                    {{--<div style="margin-bottom:20px">--}}
                        {{--<input class="easyui-textbox" name="message" style="width:100%;height:60px" data-options="label:'Message:',multiline:true">--}}
                    {{--</div>--}}
                    {{--<div style="margin-bottom:20px">--}}
                        {{--<select class="easyui-combobox" name="language" label="Language" style="width:100%"><option value="ar">Arabic</option><option value="bg">Bulgarian</option><option value="ca">Catalan</option><option value="zh-cht">Chinese Traditional</option><option value="cs">Czech</option><option value="da">Danish</option><option value="nl">Dutch</option><option value="en" selected="selected">English</option><option value="et">Estonian</option><option value="fi">Finnish</option><option value="fr">French</option><option value="de">German</option><option value="el">Greek</option><option value="ht">Haitian Creole</option><option value="he">Hebrew</option><option value="hi">Hindi</option><option value="mww">Hmong Daw</option><option value="hu">Hungarian</option><option value="id">Indonesian</option><option value="it">Italian</option><option value="ja">Japanese</option><option value="ko">Korean</option><option value="lv">Latvian</option><option value="lt">Lithuanian</option><option value="no">Norwegian</option><option value="fa">Persian</option><option value="pl">Polish</option><option value="pt">Portuguese</option><option value="ro">Romanian</option><option value="ru">Russian</option><option value="sk">Slovak</option><option value="sl">Slovenian</option><option value="es">Spanish</option><option value="sv">Swedish</option><option value="th">Thai</option><option value="tr">Turkish</option><option value="uk">Ukrainian</option><option value="vi">Vietnamese</option></select>--}}
                    {{--</div>--}}
                {{--</form>--}}
                {{--<div style="text-align:center;padding:5px 0">--}}
                    {{--<a href="javascript:void(0)" class="easyui-linkbutton" onclick="submitForm()" style="width:80px">Submit</a>--}}
                    {{--<a href="javascript:void(0)" class="easyui-linkbutton" onclick="clearForm()" style="width:80px">Clear</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


<script type="text/javascript" src="/public/jquery-easyui-1.6.11/jquery.min.js"></script>
<script type="text/javascript" src="/public/jquery-easyui-1.6.11/jquery.easyui.min.js"></script>
<script type="text/javascript">
    var data = [
        {"productid":"FI-SW-01","productname":"Koi","unitcost":10.00,"status":"P","listprice":36.50,"attr1":"Large","itemid":"EST-1"},
        {"productid":"K9-DL-01","productname":"Dalmation","unitcost":12.00,"status":"P","listprice":18.50,"attr1":"Spotted Adult Female","itemid":"EST-10"},
        {"productid":"RP-SN-01","productname":"Rattlesnake","unitcost":12.00,"status":"P","listprice":38.50,"attr1":"Venomless","itemid":"EST-11"},
        {"productid":"RP-SN-01","productname":"Rattlesnake","unitcost":12.00,"status":"N","listprice":26.50,"attr1":"Rattleless","itemid":"EST-12"},
        {"productid":"RP-LI-02","productname":"Iguana","unitcost":12.00,"status":"N","listprice":35.50,"attr1":"Green Adult","itemid":"EST-13"},
        {"productid":"FL-DSH-01","productname":"Manx","unitcost":12.00,"status":"P","listprice":158.50,"attr1":"Tailless","itemid":"EST-14"},
        {"productid":"FL-DSH-01","productname":"Manx","unitcost":12.00,"status":"P","listprice":83.50,"attr1":"With tail","itemid":"EST-15"},
        {"productid":"FL-DLH-02","productname":"Persian","unitcost":12.00,"status":"N","listprice":23.50,"attr1":"Adult Female","itemid":"EST-16"},
        {"productid":"FL-DLH-02","productname":"Persian","unitcost":12.00,"status":"P","listprice":89.50,"attr1":"Adult Male","itemid":"EST-17"},
        {"productid":"AV-CB-01","productname":"Amazon Parrot","unitcost":92.00,"status":"N","listprice":63.50,"attr1":"Adult Male","itemid":"EST-18"}
    ];
    $(function(){
        var dg = $('#dg').datagrid();
        dg.datagrid('enableFilter', [{
            field:'listprice',
            type:'numberbox',
            options:{precision:1},
            op:['equal','notequal','less','greater']
        },{
            field:'unitcost',
            type:'numberbox',
            options:{precision:1},
            op:['equal','notequal','less','greater']
        },{
            field:'status',
            type:'combobox',
            options:{
                panelHeight:'auto',
                data:[{value:'',text:'All'},{value:'P',text:'P'},{value:'N',text:'N'}],
                onChange:function(value){
                    if (value == ''){
                        dg.datagrid('removeFilterRule', 'status');
                    } else {
                        dg.datagrid('addFilterRule', {
                            field: 'status',
                            op: 'equal',
                            value: value
                        });
                    }
                    dg.datagrid('doFilter');
                }
            }
        }]);
    });
</script>
<script type="text/javascript" src="/public/vendor/item-sidemenu.js"></script>
<script>

    function addTab (title, url) {
        if ($('#MainPanelTabs').tabs('exists',title)) {
            $('#MainPanelTabs').tabs('select',title);
        }else{
            var content = '<div>'+url+'</div>';
            $('#MainPanelTabs').tabs( 'add', {
                title: title,
                content: content,
                closable: true
            });
        }
    }
    var hoverOver = '.header';
    // document, '.header', '.logo'

    $(hoverOver).on('mousemove', function(e){
        $('.cube').css({
            'transform': 'rotateY('+ e.pageX/4 +'deg) rotateX('+ e.pageY/2 +'deg)'
        })
    });
    $('#MainPanelTabs').tabs({
        plain:true,
        justified:true,
        fit:true,
        border:false
    });
    $('#sm').sidemenu({
        data: data,
        onSelect : function (e) {
            console.log(e.text);
            addTab(e.text,'ContnetOf'+e.text);
        }
    });

</script>
<script type="text/javascript" src="/public/vendor/main.js"></script>

</body>
</html>
