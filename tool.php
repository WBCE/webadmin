<?php
/**
 * @category        modules
 * @package         Webadmin
 * @author          Norbert Heimsath (heimsath.org), Daniel Wacker (http://cker.name/webadmin/)
 * @copyright       GPLv2
 */
 
/*
Info for module(tool) builders.
Already included here :
config.php
framework/initialize.php
framework/class.wb.php
framework/class.admin.php
framework/functions.php
yourmodule/info.php

Admin class is initialized($admin) and header printed.

Additional vars for this tool: 
$modulePath     Path to this module directory
$languagePath   Path to language files of this module
$returnToTools  Url to return to generic tools page
$returnUrl      Url for return link after saving AND for sending the form!
$doSave         Set true if form is send
$saveSettings   Set true if there are actual settings send
$saveDefault    Set true if default button was pressed
$toolDir        Plain tool directory name like "maintainance_mode"
$toolName       The name of the tool eg "Maintainance Mode"

For language vars please take a look in the language files.
Language files no longer need manual loading.

All other vars usually abailable in Admin pages schould be available here too.
Maybe you need to import them via global.

backend.js and backend.css are automatically loaded, 
manual loading is no longer required.
*/

//no direct file access
if(count(get_included_files())==1) header("Location: ../index.php",TRUE,301);

include($modulePath."includes/webadmin.php");

    