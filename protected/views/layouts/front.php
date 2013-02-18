<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="copyright" content="Beautybay" />
    
    <link rel="stylesheet" href="<?php echo $this->assetsBase; ?>/css/app.css" />
    <link rel="stylesheet" href="<?php echo $this->assetsBase; ?>/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo $this->assetsBase; ?>/chosen/chosen.css" />
    <script type="text/javascript" src="<?php echo $this->assetsBase; ?>/js/jquery-1.9.0.js"></script>
    <script type="text/javascript" src="<?php echo $this->assetsBase; ?>/js/bb.js"></script>

    <script type="text/javascript" src="<?php echo $this->assetsBase; ?>/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo $this->assetsBase; ?>/chosen/chosen.jquery.js"></script>    
    <title><?php echo $this->pageTitle; ?></title>
</head>
<body style="padding-top: 50px;">
    <div class="container-fluid well">
        <div class="row-fluid">
            <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <a class="brand" href="index.php?r=product/productlist">BeautyBay</a>
                    <form class="form-search navbar-search pull-left">
                      <div class="input-append">
                            <input type="text" class="search-query" placeholder="Поиск по ключевому слову" style="width: 300px;">
                            <button type="submit" class="btn">Найти</button>
                      </div>
                    </form>
                    <ul class="nav pull-right">
                        <li><a href="#">Вход через Facebook</a></li>
                        <li class="divider-vertical"></li>
                        <li><a href="index.php?r=cart">Корзина (<span id="cart_count"><?php echo isset(Yii::app()->session['cart_count'])?Yii::app()->session['cart_count']:0; ?></span>)</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <?php echo $content; ?>
        </div>
    </div>
</body>
</html>