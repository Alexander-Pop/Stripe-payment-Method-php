<?php

require_once('db.php');
$db = new DB;
$db->query("SELECT * FROM `products`");
$products = $db->resultSet();
$db->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment Integration in PHP</title>
    <link rel='stylesheet' href='style.css' type='text/css' media='all' />
</head>


<body>
    <form action="checkout.html" method="POST">
        <?php
        if (!empty($products)) {
            foreach ($products as $product) {
        ?>
                <div class="container">
                    <div class="wrapper">
                        <div class='image'><img src='<?php echo $product['image']; ?> ' width="210                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  px" height="200px" />
                            <hr>
                        </div>
                        <div class='name'><?php echo $product['name']; ?></div>
                        <div class='price'>$<?php echo $product['price']; ?></div>
                        <button>Pay now</button>
                    </div>
                </div>

        <?php
            }
        }
        ?>
    </form>
</body>

</html>