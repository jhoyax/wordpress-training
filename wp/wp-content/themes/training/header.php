<?php
/**
 * The header for our theme.
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(''); echo wp_title('', false) ? ' | ' : '';  bloginfo( 'name' ); ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:locale" content="ja_JP">
  <meta property="fb:admins" content="">
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:type" content="blog">
  <meta property="og:image"
    content="<?php echo resolve_asset_url('/images/common/logo_ogp.png'); ?>">

  <link rel="shortcut icon"
    href="<?php echo resolve_asset_url('/images/favicon.ico'); ?>">
  <link rel="apple-touch-icon-precomposed"
    href="<?php echo resolve_asset_url('/images/apple-touch-icon-precomposed.png'); ?>">
  <link rel="stylesheet"
    href="<?php echo resolve_asset_url('/css/style.css'); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="l-header">
    <div class="header">
      <div class="l-container">
        <div class="header-logo">
          <div class="header-logo-image">
            <a href="<?php echo site_url('/'); ?>" class="header-logo-link">Logo Here</a>
          </div>
        </div>
        <nav class="nav">
          <?php
            wp_nav_menu([
              'menu' => 'Header',
              'fallback_cb' => false
            ]);
          ?>
        </nav>
        <div class="search-form">
          <div class="search-form-category">
            <form role="search" method="get" class="search-form-category-form"
              action="<?php echo site_url('/'); ?>">
              <?php search_dropdown_categories(); ?>
              <input class="search-form-category-form-field" 
                type="search" class="search-field" 
                placeholder="Search..."
                value="<?php echo esc_attr(get_search_query()); ?>"
                name="s"
                title="<?php echo esc_attr_x('Search for:', 'label'); ?>" />
              <input type="submit" class="search-form-category-form-submit" value="Submit" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </header>