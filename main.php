<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice </title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

    <div class="flex-container">

        <div class="header">
               <?php include 'logo.inc.php' ?>
               <?php include 'menu.inc.php' ?>
        </div>

        <div class="about_me">

            <h1> <?php echo $p ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php echo '<img src="/img/php.jpg">';?>
                </div>

                <div class="fullname">
                    <p> Меня зовут
                    <?php echo $name, ' ', $surname . '<br>';
                            echo 'город', ' ', $city; ?>
                    </p>

                    <p> Мне 
                    <?php echo $age; ?>
                    года</p>
                    <p> Мы научились создавать переменные </p>
                    <p> Изучили простые операции с ними </p>
                </div>
            </div>
            
            <div class="knowledge">
                <?php include 'knowledge.inc.php'; ?>
                <?php
                echo $a, ' ', $b, ' ', $c;
                ?> <br>

                <?php
                    $a = 10;
                    $b = 20;
                    $c = $a + $b;
                    echo $c;
                ?> <br>
                <?php
                    echo $d . '<br>';
                    echo $del . '<br>';
                    echo $proiz;
                ?>

            </div>
            <div class="article">
                <hr>
                <p class="text">
                    First of all, it is necessary to follow the official documentation on PHP,
                    which consists of a function reference, a language reference, and many other additional information.
                    And be extremely careful about other resources on the Internet, since outdated information is often found.,
                    unreliable and unprofessional information.
                    In extreme cases, if an example is required, it is better to rely on solid sources of information, with fresh data and correlate with official PHP documentation.
                </p>
                <hr>
            </div>
        </div>
        <?php include 'footer.inc.php' ?>

    </div>
</body>
</html>
