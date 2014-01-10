<!doctype html>
<!--[if IE 8]><html class="ie8" dir="ltr" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" dir="ltr" lang="en"><![endif]-->
<!--[if gt IE 9]><!--> <html dir="ltr" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Storm Creative" />
        <title><?php echo SITE_NAME; ?> | <?php echo $title; ?></title>
        <meta name="keywords" content="<?php echo $meta_keywords; ?>">
        <meta name="description" content="<?php echo $meta_desc; ?>">
        <script src="<?php echo DIRECTORY; ?>assets/scripts/utils/modernizr.min.js"></script>
        <?php if( !!$is_mobile ) : ?>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <?php else: ?>
            <meta name="viewport" content="width=1250">
        <?php endif; ?>
        <?php if (MEDIA_QUERIES): ?>
            <!--[if lte IE 8]>
            <link rel="stylesheet" href="<?php echo DIRECTORY; ?>assets/styles/nomq.css">
            <![endif]-->
        <?php else: ?>
            <?php foreach ( $stylesheets as $style ): ?>
                <!--[if lte IE 8]>
                <link rel="stylesheet" href="<?php echo $style; ?>">
                <![endif]-->
            <?php endforeach; ?>
        <?php endif; ?>
        <?php foreach ( $stylesheets as $style ): ?>
            <!--[if gt IE 8]>-->
            <link rel="stylesheet" href="<?php echo $style; ?>">
            <!--<![endif]-->
        <?php endforeach; ?>
    </head>
    <body>
        <div class="wrapper">
            <?php require "assets/includes/ie-notification.php"; flush(); ?>
            <?php include "assets/includes/navigation.php"; ?>
