<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Primul punct
// $sql = "SELECT `orders`.`id`, `orders`.`date_order`, `customers`.`first_name`, `customers`.`last_name`, `customers`.`email` FROM `orders`
//         LEFT JOIN `customers` ON `orders`.`id_customer`=`customers`.`id`
//         WHERE 1";
// $result = mysqli_query($conn, $sql);

// 2.
// $sql = "SELECT count(`id`) AS `numar_comenzi` FROM `orders`
//         WHERE year(`orders`.`date_order`)='2017'";
// $result = mysqli_query($conn, $sql);

// 3.
// $sql = "SELECT count(`id`) AS `numar_comenzi` FROM `orders`
        // WHERE `orders`.`status` = 1";
// $result = mysqli_query($conn, $sql);

// 4.
// $sql = "SELECT `id`, month(`orders`.`date_order`) AS `luna`, count(month(`orders`.`date_order`)) AS 'numar'  FROM `orders`
//         WHERE 1
//         GROUP BY month(`orders`.`date_order`)";
// $result = mysqli_query($conn, $sql);
// 5.
// $sql = "SELECT `orders_products`.`id_order`, (`orders_products`.`id_product`*`orders_products`.`quantity`) AS `number_products`, `orders`.`id`, `orders`.`date_order` FROM `orders`
    //  LEFT JOIN `orders_products` ON `orders`.`id` = `orders_products`.`id_order`  ";
// $result = mysqli_query($conn, $sql);
// 6.
// $sql = "SELECT `orders_products`.`id_product`, count(`orders_products`.`id_order`) AS `numar`, `products`.`name` FROM `orders_products`
            // LEFT JOIN `products` ON `orders_products`.`id_product`=`products`.`id`
            // GROUP BY `orders_products`.`id_product` 
            // ORDER BY `numar` desc limit 3   ";
// $result = mysqli_query($conn, $sql);
// 7.
// $sql = "SELECT `customers`.`id`, `customers`.`first_name`, `customers`.`last_name`,`orders`.`id`, count(`orders`.`id`)
//         FROM `orders`
//         LEFT JOIN `customers` ON `orders`.`id_customer` = `customers`.`id` group by `orders`.`id_customer` 
//         ORDER BY count(`orders`.`id`) DESC limit 10    ";
//  $result = mysqli_query($conn, $sql);
// 8.
// $sql = "SELECT `orders`.`id`, `orders`.`date_order`, `orders`.`status`, (`orders_products`.`quantity`*`products`.`price`) as `price`, `orders_products`.`id_product`
        //  FROM `orders_products` LEFT JOIN `orders` ON `orders_products`.`id_order`=`orders`.`id` 
        // LEFT JOIN `products` ON `orders_products`.`id_product` = `products`.`id`
        //  WHERE `orders`.`status` = 1 AND year(`orders`.`date_order`) = 2018  ";

// 9.
// $sql = SELECT `customers`.`id`, `customers`.`first_name`, `orders_products`.`quantity`, `products`.`name` 
// FROM `customers` 
// LEFT JOIN `orders` ON `customers`.`id` = `orders`.`id_customer` 
// LEFT JOIN `orders_products` ON `orders`.`id` = `orders_products`.`id_order` 
// Left JOIN `products` ON `orders_products`.`id_product` = `products`.`id` 
// 10.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Data</th>
            <th>nr_products</th>
        </tr>
        <?php
        foreach($result as $order){
        ?>
        <tr>
            <td><?php echo $order["id"]; ?></td>
            <td><?php echo $order["date_order"]; ?></td>
            <td><?php echo $order["quantity"]; ?></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>