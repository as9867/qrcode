<?php
/**
 * QRcdr - php QR Code generator
 * ajax/png.php
 *
 * PHP version 5.4+
 *
 * @category  PHP
 * @package   QRcdr
 * @author    Nicola Franchini <info@veno.it>
 * @copyright 2015-2020 Nicola Franchini
 * @license   item sold on codecanyon https://codecanyon.net/item/qrcdr-responsive-qr-code-generator/9226839
 * @link      http://veno.es/qrcdr/
 */
if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) 
    || (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest')
) {
    exit;
}
require dirname(dirname(__FILE__)).'/config.php';

$imgdata = filter_input(INPUT_POST, 'imgdata', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$filename = filter_input(INPUT_POST, 'filename', FILTER_SANITIZE_STRING);
$isForDragnDrop = filter_input(INPUT_POST, 'isDraggable', FILTER_SANITIZE_STRING);
$existingFile = filter_input(INPUT_POST, 'existingFile', FILTER_SANITIZE_STRING);

if ($imgdata && $filename) {
    $maindir = $_CONFIG['qrcodes_dir'].'/';
    $savedir = '../'.$maindir;
    $basename = basename($filename, '.png');

    if (file_exists($savedir.$basename.'.svg') || isset($isForDragnDrop)) {
        $basename = basename($filename, '.svg');

        if (!file_exists($savedir.$filename) && !isset($isForDragnDrop)) {
            $content = file_get_contents($imgdata);
            file_put_contents($savedir.$filename, $content);
        }
        if(isset($isForDragnDrop)){
            $content = file_get_contents($imgdata);
            $filepath = "preview_".rand(10000000,99999999).".png";
            if (file_exists($savedir.$existingFile) && $existingFile) {
                 unlink($savedir.$existingFile);
            }
            file_put_contents($savedir.$filepath, $content);
            echo $maindir.$filepath;
            exit;
        }
        echo $maindir.$filename;
    }
    exit('error');
}
exit('error');
