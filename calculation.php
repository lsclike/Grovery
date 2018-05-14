<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/calculation.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="javascript">
        function chartCheck(number)
        {
            if (number == 1 )
            {
                window.alert("Please select products in your shopping chart");

                return false;
            }
            else
            {
                return true;
            }
        }
    </script>
</head>
<body>
<?php
session_start();
require_once ('db_credential.php');
if (array_key_exists('Add',$_POST)) {
    $refer = ($_SERVER['HTTP_REFERER']);
    $product_id = (int)(substr($refer, strpos($refer, "=") + 1));
    $product_num = $_POST['quantity'];
    $row = getRow($product_id);
    $theProductTotal = $row['unit_price'] * $product_num;
    decision();
}
if (array_key_exists('clear',$_POST)){
    $_SESSION['the_table'] = new Table();
    $_SESSION['all_total'] = 0;
}

class Table{
    public $table;
    function __construct() {
        $this->table=array(array("Product_Id","Product_Name","Number","Price"));
    }
    public function add_row($row){
        array_push($this->table,$row);
    }
}


function decision(){
    global $theProductTotal;
    global $product_num;
    global $row;
    checkAllTotal();
    table_exist();
    $_SESSION['all_total'] += $theProductTotal;
    print ($_SESSION['all_total']);
        if (checkExist()[0]){
            echo "down to exist";
            $therow = checkExist()[1];
            $_SESSION['the_table']->table[$therow][2] += $product_num;
            $_SESSION['the_table']->table[$therow][3] += $theProductTotal;
        }
        else{
            $_SESSION['the_table']->add_row(array($row['product_id'],$row['product_name'],$product_num,$theProductTotal));
        }
    }

function checkExist(){
    global $product_id;
    print $product_id;
    for ($i = 1; $i < count($_SESSION['the_table']->table); $i++){
        if ($product_id == $_SESSION['the_table']->table[$i][0]){
            echo "exist";
            return array(true,$i);
            }
        }
        return false;
}

function table_exist(){
    if (!array_key_exists('the_table',$_SESSION)){
        $_SESSION['the_table'] = new Table();
    }
}

function checkAllTotal(){
    if (!array_key_exists('all_total',$_SESSION)){
        $_SESSION['all_total'] = 0;
    }
}

echo "<table class=\"table table-condensed\">";
foreach ($_SESSION['the_table']->table as $row1){
    echo "<tr>";
    foreach($row1 as $cell){
        echo "<td> ". $cell ." </td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
<table class="table table-condensed">
    <tr>
        <td> Total Price: <?php echo $_SESSION['all_total'] ?></td>
    </tr>
</table>
<table >
        <tr>

                <td><form action="calculation.php"  method="post" target="bottom_right" >
                    <input type="submit" name="clear" value="clear" onClick="{if(confirm('Do you want to clear your shopping cart?')) {return true} return false;}">
                </form></td>
                <td><form action="checkout.php"  method="post" target="top_right" >
                <input type="submit" name="checkout" value="checkout" onclick= "return chartCheck(<?php echo count($_SESSION['the_table']->table) ?>)">
                </form>
                </td>
        </tr>
    //TODO put button on the bottom right

</table>
</body>
</html>
