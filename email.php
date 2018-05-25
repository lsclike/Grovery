<?php
/**
 * Created by PhpStorm.
 * User: cloud
 * Date: 13/5/18
 * Time: 3:40 PM
 */
session_start();
class Table{
    public $table;
    function __construct() {
        $this->table=array(array("Product_Id","Product_Name","Number","Price"));
    }
    public function add_row($row){
        array_push($this->table,$row);
    }
}
$address = $_POST['email'];
$subject = "Grocery Confirmation";
$message = '<html>';
$message ='<body>';
$message .= '<table border="1">';
foreach ($_SESSION['the_table']->table as $row1){
    $message .= "<tr>";
    foreach($row1 as $cell){
        $message .= "<td> ". $cell ." </td>";
    }
    $message .= "</tr>";
}
$message .= '</table></br>';
$message .= 'the total price is  ';
$message .= $_SESSION['all_total'];
$message .='</body>';
$message .='</html>';
mail($address,$subject,$message);
print ($message);
    ?>
<html>
<head>
    <body>
        <h1>Thank for ordering</h1>
        <p>the order confirmation has been sent to your e-mail address </p>
    </body>
</head>
</html>
