<?php
  /**
   * @version $Id: default.php 6229 2008-09-30 18:29:22Z matt $
   * @author Matthew McNaney <mcnaney at gmail dot com>
   */

/**
 * Setting autogrow to true forces a width of 0. This lets fckeditor have a dynamic width by
 * using its autogrow option. Setting this to false changes the editor to a specific width
 * set by this file or the module. If you want to disable autogrow entirely, comment out this
 * line in editor/custom.js. Make sure autogrow is false as well.
 * FCKConfig.Plugins.Add( 'autogrow' ) ;
 *
 */
$autogrow = true;

$data['VALUE'] = preg_replace('@src="(./)?images/@', 'src="' . PHPWS_Core::getHomeHttp() . 'images/', $data['VALUE']);


if (empty($data['WIDTH']) || empty($data['HEIGHT'])) {
    $data['WIDTH'] = 500;
    $data['HEIGHT'] = 300;
 }

if ($autogrow) {
    $data['WIDTH'] = 0;
}


if ($data['LIMITED']) {
    $data['config'] = 'limited.js';
 } else {
    $data['config'] = 'custom.js';
 }

$current_theme = Layout::getCurrentTheme();
if (is_file("themes/$current_theme/fckeditor.css")) {
    $data['current_theme'] = $current_theme;
}

if (isset($_REQUEST['module'])) {
    $data['module'] = preg_replace('/\W/', '', $_REQUEST['module']);
}

?>