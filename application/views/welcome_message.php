<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/easyui/themes/default/easyui.css'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() .'assets/easyui/themes/icon.css'; ?>">
<script type="text/javascript" src="<?php echo base_url() . 'assets/easyui/jquery.min.js'; ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/easyui/jquery.easyui.min.js'; ?>"></script>

</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>
	<!-- https://www.jeasyui.com/tutorial/app/crud2.php -->
	<div id="body">

		<table id="dg" title="My Users" style="width:550px;height:250px"
		        toolbar="#toolbar" idField="id"
		        rownumbers="true" fitColumns="true" singleSelect="true">
		    <thead>
		        <tr>
		            <th field="firstname" width="50" editor="{type:'validatebox',options:{required:true}}">First Name</th>
		            <th field="lastname" width="50" editor="{type:'validatebox',options:{required:true}}">Last Name</th>
		            <th field="phone" width="50" editor="text">Phone</th>
		            <th field="email" width="50" editor="{type:'validatebox',options:{validType:'email'}}">Email</th>
		        </tr>
		    </thead>
		</table>
		<div id="toolbar">
		    <a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">New</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">Destroy</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow')">Save</a>
		    <a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">Cancel</a>
		</div>

	</div>

</div>

<script>
	$('#dg').edatagrid({
    url: 'get_users.php',
    saveUrl: 'save_user.php',
    updateUrl: 'update_user.php',
    destroyUrl: 'destroy_user.php'
});
</script>
</body>
</html>
