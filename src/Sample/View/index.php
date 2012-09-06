<!doctype html>
<html>
    <head>

        <meta charset="utf-8">

        <title>Sample</title>

        <link rel="stylesheet" href="<?php echo $rootUrl ?>css/admin.css">

    </head>
    <body>

      <div id="page" role="main">
          <?php echo $content ?>
      </div>

      <!-- JavaScript at the bottom for fast page loading -->

      <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="<?php echo $rootUrl ?>js/libs/jquery-1.7.1.min.js"><\/script>')</script>

    </body>
</html>