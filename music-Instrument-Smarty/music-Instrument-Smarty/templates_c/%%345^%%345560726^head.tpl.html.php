<?php /* Smarty version 2.6.0, created on 2010-05-30 21:52:12
         compiled from head.tpl.html */ ?>
<?php require_once(SMARTY_DIR . 'core' . DIRECTORY_SEPARATOR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'head.tpl.html', 6, false),)), $this); ?>
<head>

<link rel=STYLESHEET href="style1.css" type="text/css">

<meta http-equiv="Content-Type" content="text/html; charset=<?php echo @constant('DEFAULT_CHARSET'); ?>
">
<title><?php echo ((is_array($_tmp=@$this->_tpl_vars['page_title'])) ? $this->_run_mod_handler('default', true, $_tmp, "Shop-Script FREE shopping cart solution") : smarty_modifier_default($_tmp, "Shop-Script FREE shopping cart solution")); ?>
</title>

<meta name="Title" content="<?php echo ((is_array($_tmp=@$this->_tpl_vars['page_title'])) ? $this->_run_mod_handler('default', true, $_tmp, "Shop-Script FREE based shopping cart system") : smarty_modifier_default($_tmp, "Shop-Script FREE based shopping cart system")); ?>
">
<meta name="Description" content="<?php echo ((is_array($_tmp=@$this->_tpl_vars['page_meta'])) ? $this->_run_mod_handler('default', true, $_tmp, "powered by Shop-Script FREE shopping cart software") : smarty_modifier_default($_tmp, "powered by Shop-Script FREE shopping cart software")); ?>
">
<meta name="KeyWords" content="<?php echo ((is_array($_tmp=@$this->_tpl_vars['page_meta'])) ? $this->_run_mod_handler('default', true, $_tmp, "Shop-Script FREE shopping cart software") : smarty_modifier_default($_tmp, "Shop-Script FREE shopping cart software")); ?>
">

<script>
<!--
<?php echo '
	function open_window(link,w,h) //opens new window
	{
		var win = "width="+w+",height="+h+",menubar=no,location=no,resizable=yes,scrollbars=yes";
		newWin = window.open(link,\'newWin\',win);
		newWin.focus();
	}

	function confirmDelete() //unsubscription confirmation
	{
		temp = window.confirm(\'';  echo @constant('QUESTION_UNSUBSCRIBE');  echo '\');
		if (temp) //delete
		{
			window.location="index.php?killuser=yes";
		}
	}

	function validate_custinfo() //validate customer information
	{
		if (document.custinfo_form.first_name.value=="" || document.custinfo_form.last_name.value=="")
		{
			alert("';  echo @constant('ERROR_INPUT_NAME');  echo '");
			return false;
		}
		if (document.custinfo_form.email.value=="")
		{
			alert("';  echo @constant('ERROR_INPUT_EMAIL');  echo '");
			return false;
		}
		if (document.custinfo_form.country.value=="")
		{
			alert("';  echo @constant('ERROR_INPUT_COUNTRY');  echo '");
			return false;
		}
		if (document.custinfo_form.state.value=="")
		{
			alert("';  echo @constant('ERROR_INPUT_STATE');  echo '");
			return false;
		}
		if (document.custinfo_form.zip.value=="")
		{
			alert("';  echo @constant('ERROR_INPUT_ZIP');  echo '");
			return false;
		}
		if (document.custinfo_form.city.value=="")
		{
			alert("';  echo @constant('ERROR_INPUT_CITY');  echo '");
			return false;
		}


		return true;
	}
'; ?>

-->
</script>

</head>