<?php

use \luya\styleguide\assets\ResourcesAsset;
ResourcesAsset::register($this);

?>

<?php $this->beginPage(); ?>
<html class="sg-html">
    <head>
        <meta charset="UTF-8" />
        <meta name="robots" content="noindex, nofollow" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= Yii::$app->siteTitle; ?> Styleguide</title>
        <?php $this->head() ?>
    </head>
    <body class="sg-body">
    <?php $this->beginBody() ?>
        <?= $content; ?>
    <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>