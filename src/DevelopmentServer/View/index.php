<!doctype html>
<html>
    <head>

        <meta charset="utf-8">

        <title>Sample</title>

        <link rel="stylesheet" href="<?php echo $rootUrl ?>css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo $rootUrl ?>css/style.css">

    </head>
    <body>

        <div id="page" class="container" role="main">
            <nav class="navbar navbar-inverse">
                <?php echo $navigation ?>
            </nav>
            <?php echo $content ?>
        </div>

        <!-- JavaScript at the bottom for fast page loading -->

        <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo $rootUrl ?>js/libs/jquery-1.7.1.min.js"><\/script>')</script>

        <link rel="stylesheet" href="<?php echo $rootUrl ?>js/plugins/bootstrap.js">
        <link rel="stylesheet" href="<?php echo $rootUrl ?>js/script.js">
    </body>
</html>