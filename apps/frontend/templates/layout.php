<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <?php include_http_metas() ?>
        <?php include_metas() ?>
        <?php include_title() ?>
        <link rel="shortcut icon" href="/favicon.ico" />
        <link href="/css/metro.css" rel="stylesheet" />
        <link href="/css/metro-icons.css" rel="stylesheet" />
        <link href="/css/metro-responsive.css" rel="stylesheet" />
        <link href="/css/metro-schemes.css" rel="stylesheet" />
        <link href="/css/main.css" rel="stylesheet" />
        <script src="/js/jquery-2.1.3.min.js"></script>
        <script src="/js/metro.js"></script>
        <?php include_stylesheets() ?>
        <?php include_javascripts() ?>
    </head>
    <body>
        <div class="menu">
            <?php include("menu.php"); ?>
        </div>
        <div class="main">
            <?php echo $sf_content ?>
        </div>
        <div class="footer">
            <?php include("footer.php"); ?>
        </div>
    </body>
</html>
