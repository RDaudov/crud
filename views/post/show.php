<?php
//$categories = $model->products;
//    foreach($categories as $mode) {
//        echo '<pre>' .  print_r($mode) . '<br>';
//    }
//    print_r($model->products);
//print_r('<pre>' );

echo '<pre>' . '<pre>';

use yii\helpers\ArrayHelper;


foreach ($categories as $category)  {
    echo '<ul>';
        echo "<li> {$category->title} </li>";
        $products = $category->products;
        foreach ($products as $product) {
            echo '<ul>';
                echo "<li> {$product->title} </li>";
            echo '</ul>';
        }
    echo '</ul>';
}