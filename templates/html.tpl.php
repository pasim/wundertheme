<!doctype html>
  <!--[if IEMobile 7]><html class="ie iem7" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"><![endif]-->
  <!--[if lte IE 6]><html class="ie lt-ie9 lt-ie8 lt-ie7" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"><![endif]-->
  <!--[if (IE 7)&(!IEMobile)]><html class="ie lt-ie9 lt-ie8" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"><![endif]-->
  <!--[if IE 8]><html class="ie lt-ie9" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"><![endif]-->
  <!--[if (gte IE 9)|(gt IEMobile 7)]><html class="ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>><![endif]-->
  <![if !IE]><html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"<?php print $rdf_namespaces; ?>><![endif]>
<head>
<title><?php print $head_title; ?></title>
<!-- 

_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ 

 __        __                      _                 _                             _   
 \ \      / /  _   _   _ __     __| |   ___   _ __  | | __  _ __    __ _   _   _  | |_ 
  \ \ /\ / /  | | | | | '_ \   / _` |  / _ \ | '__| | |/ / | '__|  / _` | | | | | | __|
   \ V  V /   | |_| | | | | | | (_| | |  __/ | |    |   <  | |    | (_| | | |_| | | |_ 
    \_/\_/     \__,_| |_| |_|  \__,_|  \___| |_|    |_|\_\ |_|     \__,_|  \__,_|  \__|

       (C) Wunderkraut Belgium - Zénobe Grammestraat 34, 2018 Antwerp, Belgium

                                   www.wunderkraut.com       
_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ 


//-->
<?php print $head; ?>
<meta name="MobileOptimized" content="width">
<meta name="HandheldFriendly" content="true">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="cleartype" content="on">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<?php print $styles; ?>
<!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php print $scripts; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
<a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
<?php print $page_top; //stuff from modules always render first ?>
<?php print $page; // uses the page.tpl ?>
<?php print $page_bottom; //stuff from modules always render last ?>
</body>
</html>

