<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php $this->head() ?>
    <title>Вкомпуктере</title>
</head>
<body>
<?php $this->beginBody() ?>
<div>
    <?php
    echo $a;
    echo $b;
    echo $c;
    echo $d;
    ?>
</div>
    <?php
    echo $content;
    ?>
</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>