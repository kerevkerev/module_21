<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Только CSS -->
    
    <link rel="stylesheet" href="style.css">
    <title>Blog</title>
</head>

<body>


    <div class="header">
        <div class="container">
            <div class="header__inner">
                <?php include './logo.inc.php' ?>
                <?php include './menu.inc.php' ?>
            </div>
        </div>
    </div>
    <div class="about_my">
        <div class="container">
            <h1><?php echo $p ?></h1>
            <div class="data">
                <div class="myImg">
                    <?php
                    echo '<img src="./img/php.png" alt="" srcset="">'
                    ?>
                </div>
                <div class="fullname">
                    <p>Меня зовут
                        <?php
                        echo $name, ' ', $surname . '<br>';
                        echo 'город', ' ', $sity;
                        ?>
                    </p>
                    <p> Мне
                        <?php
                        echo $age;
                        ?>
                    </p>
                    <p>Я изучаю PHP</p>

                    <hr>
                </div>
            </div>
            <div class="knowledge">
                <?php include './knowlwdge.inc.php'; ?>

                <p><?php echo $a, ' ', $b, ' ', $c; ?></p>
                <p>Научился создавать переменные:
                <pre class="code"><?php echo $variable ?></pre>
                </p>
                <hr>
                <p>
                <p>Изучил простые операции с ними:
                <pre class="code"><?php echo $operation ?></pre>
                <hr>
                </p>Создавать конструкции с условиями:
                <pre class="code"><?php echo $if ?></pre>
                <p class="code">Результат: <?php echo $result ?></p>
                </p>
                <hr>
                </p>Создавать функции:
                <pre class="code"><?php echo $fun ?></pre>
                <p class="code">Результат: <?php echo fibo(7)?></p>
                </p>
                <hr>
            </div>






            <div class="article">

                <p class="text">
                </p>
            </div>
        </div>
    </div>




    </div>
    <div class="footer">
        <div class="container">
            <?php include './footer.inc.php' ?>
        </div>
</body>

</html>