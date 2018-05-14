<?php
/**
 * Created by PhpStorm.
 * User: cloud
 * Date: 11/5/18
 * Time: 11:51 AM
 */
define("DB_SERVER", "rerun.it.uts.edu.au");
define("DB_USER", "potiro");
define("DB_PASS", "pcXZb(kL");
define("DB_NAME", "poti");
function getRow($product_id)
{
    $db = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    $result = $db->query("SELECT * FROM products WHERE Product_Id = $product_id");
    mysqli_close($db);
    return $row = $result->fetch_assoc();


}
?>