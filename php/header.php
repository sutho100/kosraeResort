<?php
   //disable cache
   header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
   header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
   header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
   header("Cache-Control: post-check=0, pre-check=0", false);
   header("Pragma: no-cache");
?>
<!doctype html>
<!--[if lt IE 7]>      
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="">
   <![endif]-->
   <!--[if IE 7]>         
   <html class="no-js lt-ie9 lt-ie8" lang="">
      <![endif]-->
      <!--[if IE 8]>         
      <html class="no-js lt-ie9" lang="">
         <![endif]-->
         <!--[if gt IE 8]><!--> 
         <html class="no-js" lang="">
            <!--<![endif]-->
            <head>
               <meta charset="utf-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
               <title>Kosrae Nautilus Resort | Micronesia 
                    <?php 
                        if (basename($_SERVER['PHP_SELF']) != "index.php") {
                            echo "| " . ucfirst(str_replace(".php", "", basename($_SERVER['PHP_SELF']))); 
                        }
                    ?>
                </title>
               <link rel="canonical" href="http://www.kosraenautilus.com/" />
               <meta name="description" content="Come join us at Kosrae Nautilus Resort, where your own private beach is our front yard, which is on a paradise island known as the Jewel of Micronesia">
               <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-touch-icon-57x57.png">
                <link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-touch-icon-60x60.png">
                <link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-touch-icon-72x72.png">
                <link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-touch-icon-76x76.png">
                <link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-touch-icon-114x114.png">
                <link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-touch-icon-120x120.png">
                <link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-touch-icon-144x144.png">
                <link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-touch-icon-152x152.png">
                <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon-180x180.png">
                <link rel="icon" type="image/png" href="favicons/favicon-32x32.png" sizes="32x32">
                <link rel="icon" type="image/png" href="favicons/android-chrome-192x192.png" sizes="192x192">
                <link rel="icon" type="image/png" href="favicons/favicon-16x16.png" sizes="16x16">
                <link rel="manifest" href="favicons/manifest.json">
                <link rel="mask-icon" href="favicons/safari-pinned-tab.svg" color="#5bbad5">
                <link rel="shortcut icon" href="favicons/favicon.ico">
                <meta name="msapplication-TileColor" content="#1ea7f7">
                <meta name="msapplication-TileImage" content="favicons/mstile-144x144.png">
                <meta name="msapplication-config" content="favicons/browserconfig.xml">
                <meta name="theme-color" content="#1ea7f7">
               <link rel="stylesheet" href="css/bootstrap.min.css">
               <link rel="stylesheet" href="css/bootstrap-theme.min.css">
               <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
               <link href="https://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet">
               <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
               <link rel="stylesheet" href="css/main.css?version=<?php echo hash_file('md5', 'css/main.css'); ?>">
               <div id="google_translate_element" style="display: none;">
               </div>
               <script type="text/javascript">
               function googleTranslateElementInit() {
                 new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
               }
               </script>
               <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
               </script>
            </head>
           