<?php
/**
 * OpenCode Presentation Theme - Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <style>
    .skip-link { position: absolute; left: -9999px; z-index: 9999; }
    .skip-link:focus { position: fixed; top: 0; left: 0; background: #89b4fa; color: #1e1e2e; padding: 0.5rem 1rem; }
    </style>
</head>
<body <?php body_class('code-editor-theme'); ?>>
    <?php wp_body_open(); ?>
    <a href="#primary" class="skip-link">Preskocit na obsah</a>