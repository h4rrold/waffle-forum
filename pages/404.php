<?php if(dirname($_SERVER['SCRIPT_NAME']) == '/')
{
    define('ROUTE_PATH', '');
}
else define('ROUTE_PATH', dirname($_SERVER['SCRIPT_NAME']));?>
<!DOCTYPE html>
<html>
<head>
    <title>404 – сторінка не знайдена</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <style type="text/css">
        html, body {width:100%;height:100%;overflow:hidden;margin:0px;padding:0px;font-family:'Open Sans',sans-serif;font-size:16px}
        body {background:url('<?php echo ROUTE_PATH?>/404.png') center no-repeat #262626}
        .content {width:100%;text-align:center;position:absolute;bottom:10%;left:0px;}
        .content a {display:inline-block;text-decoration:none}
        .content a, .content a:hover {color:rgba(255,255,255,0.3);}
        .content a:hover {color:rgba(255,255,255,0.5);}
    </style>
</head>
<body>
<div class="content">
    <p>Не знайдено: <?php session_start();
        echo $_SESSION['prev']?></p>
   <a href="<?php echo dirname(ROUTE_PATH)?>">Перейти на головну</a>
</div>
</body>
</html>
