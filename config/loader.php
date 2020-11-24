<?php
$ds=XQKEJI_DS;
$vendor_path=XQKEJI_ROOT_PATH.'vendor'.$ds;
if (!defined('HTMLPURIFIER_PREFIX')) {
    define('HTMLPURIFIER_PREFIX', $vendor_path.'ezyang'.$ds.'htmlpurifier'.$ds.'library'.$ds);
}
return [
	'namespaces' => [
		'Qcloud\\Sms'=>[
			$vendor_path.'qcloudsms_php-0.1.4'.$ds.'src'.$ds,
		],
		'Zend\\Escaper' => [
            $vendor_path.'zendframework'.$ds.'zend-escaper'.$ds.'src'.$ds,
        ],
        'PhpOffice\\PhpWord' => [
            $vendor_path.'phpoffice'.$ds.'phpword'.$ds.'src'.$ds.'PhpWord'.$ds,
        ],
        'PhpOffice\\Common' => [
            $vendor_path. 'phpoffice'.$ds.'common'.$ds.'src'.$ds.'Common'.$ds,
        ],
		'PhpOffice\PhpSpreadsheet'=>[
			$vendor_path.'phpoffice'.$ds.'phpspreadsheet'.$ds.'src'.$ds.'PhpSpreadsheet'.$ds,
		],
		'Psr\SimpleCache'=>[
			$vendor_path.'psr'.$ds.'simple-cache'.$ds.'src'.$ds,
		],
	],
	'underlines'=>[
		'HTMLPurifier' => [HTMLPURIFIER_PREFIX],
	],
	'classes'=>[
		 'PclZip' =>$vendor_path.'pclzip'.$ds.'pclzip'.$ds.'pclzip.lib.php',
	],
];