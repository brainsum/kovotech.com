<?php
/**
 * @file
 * Returns the HTML for the basic html structure of a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728208
 */
?>


<!DOCTYPE html>
<html <?php print $html_attributes . $rdf_namespaces; ?>>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>

  <?php if ($default_mobile_metatags): ?>
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width">
  <?php endif; ?>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php print base_path() . path_to_theme() ?>/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php print base_path() . path_to_theme() ?>/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php print base_path() . path_to_theme() ?>/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php print base_path() . path_to_theme() ?>/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php print base_path() . path_to_theme() ?>/images/favicon/safari-pinned-tab.svg" color="#000000">
    <link rel="shortcut icon" href="<?php print base_path() . path_to_theme() ?>/favicon.ico">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="<?php print base_path() . path_to_theme() ?>/images/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

  <?php print $styles; ?>
  <?php print $scripts; ?>
  <?php if ($add_html5_shim): ?>
    <!--[if lt IE 9]>
    <script src="<?php print $base_path . $path_to_zen; ?>/js/html5shiv.min.js"></script>
    <![endif]-->
  <?php endif; ?>
</head>
<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php if ($skip_link_text && $skip_link_anchor): ?>
    <p class="skip-link__wrapper">
      <a href="#<?php print $skip_link_anchor; ?>" class="skip-link visually-hidden visually-hidden--focusable" id="skip-link"><?php print $skip_link_text; ?></a>
    </p>
  <?php endif; ?>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
