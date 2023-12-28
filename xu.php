<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>老徐折腾🤣傻逼</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<?php include 'navbar.html'; ?>

<?php
$directories = glob('xu/*', GLOB_ONLYDIR);
foreach ($directories as $directory) {
    // 遍历每个目录中的HTML文件
    foreach (glob($directory . "/*.html") as $htmlFile) {
        // 为每个HTML文件设置基路径
        $basePath = $directory . '/'; // 确保这是相对于网站根的路径
        // 然后包含HTML文件
        include $htmlFile;
    }
}
?>

<?php include 'info.html'; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
