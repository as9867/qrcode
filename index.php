<?php
/**
 * QRcdr - php QR Code generator
 * index.php
 *
 * PHP version 5.4+
 *
 * @category  PHP
 * @package   QRcdr
 * @author    Nicola Franchini <info@veno.it>
 * @copyright 2015-2021 Nicola Franchini
 * @license   item sold on codecanyon https://codecanyon.net/item/qrcdr-responsive-qr-code-generator/9226839
 * @version   5.1.5
 * @link      http://veno.es/qrcdr/
 */
$version = '5.1.5';

if (version_compare(phpversion(), '5.4', '<')) {
    exit("QRcdr requires at least PHP version 5.4.");
}
// Update this path if you have a custom relative path inside config.php
require dirname(__FILE__)."/lib/functions.php";

if (qrcdr()->getConfig('debug_mode')) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(E_ALL ^ E_NOTICE);
}

$relative = qrcdr()->relativePath();
qrcdr()->init();
qrcdr()->setLayout();

require dirname(__FILE__).'/'.$relative.'include/head.php';
?>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <title><?php echo qrcdr()->getString('title'); ?></title>
        <meta name="description" content="<?php echo qrcdr()->getString('description'); ?>">
        <meta name="keywords" content="<?php echo qrcdr()->getString('tags'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link rel="shortcut icon" href="<?php echo $relative; ?>images/favicon.ico">

        <link href="<?php echo $relative; ?>bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $relative; ?>css/font-awesome.min.css" rel="stylesheet">
        <script src="<?php echo $relative; ?>js/jquery-3.5.1.min.js"></script>
        <script src="<?php echo $relative; ?>subjx/dist/js/subjx.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
       <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/1.5.0/fabric.min.js"></script>-->

         <script src="<?php echo $relative; ?>js/fabric.js"></script>
        <style type="text/css" href="<?php echo $relative; ?>subjx/dist/style/subjx.css"></style>
        <?php
        qrcdr()->loadQRcdrCSS($version);
        qrcdr()->loadPluginsCss();
        qrcdr()->setMainColor(qrcdr()->getConfig('color_primary'));
        ?>
    </head>
    <body class="qrcdr">
        <?php
        if (file_exists(dirname(__FILE__).'/'.$relative.'template/navbar.php')) {
            include dirname(__FILE__).'/'.$relative.'template/navbar.php';
        }
        if (file_exists(dirname(__FILE__).'/'.$relative.'template/header.php')) {
            include dirname(__FILE__).'/'.$relative.'template/header.php';
        }
        // Generator required
        require dirname(__FILE__).'/'.$relative.'include/generator.php';
        require dirname(__FILE__).'/'.$relative.'include/background-image-with-qrcode.php';
        if (file_exists(dirname(__FILE__).'/'.$relative.'template/footer.php')) {
            include dirname(__FILE__).'/'.$relative.'template/footer.php';
        }
        qrcdr()->loadQRcdrJS($version);
        qrcdr()->loadPlugins(); ?>
    </body>
</html>