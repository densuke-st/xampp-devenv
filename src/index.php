<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>テストページ</title>
</head>
<body>
<p>
<?php
    echo("これが出てればPHPは機能しています");
    $hostname =  explode(":", $_SERVER['HTTP_HOST'])[0];

?>
</p>
<p>
    phpMyAdminを使いたい場合は、別ポートになっております → <a href="http://<?= $hostname ?>:8081/">phpMyAdminに移動する</a>
</p>
<?php
    phpinfo();
?>
</body>
</html>
