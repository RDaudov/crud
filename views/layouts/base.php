<?php
/** @var $content */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <?= Html::csrfMetaTags()?>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <header>
        <h1>header</h1>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <?php echo Html::a('Index', ['post/index'], ['class' => 'nav-link'])?>
                    </li>
                    <li class="nav-item">
                        <?php echo Html::a('Show', ['post/show'], ['class' => 'nav-link'])?>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <?= $content ?>
    <footer>footer</footer>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
