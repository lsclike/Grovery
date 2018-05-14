<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="JavaScript">
    function check_quantity(quantity)
    {
    required_numers=document.quantity.quantity.value;
    if (isNaN(required_numers))
        {
            window.alert("Please enter a valid number");
            return false;

        }
    if (required_numers == "" || required_numers <= 0)
    {
        window.alert("Please enter a positive number");
        return false;

    }
    if (quantity < required_numers)
    {
        window.alert("There is a shortage in the product");
        return false;

    }

    return true;
    }
    </script>
</head>
<body>
<div id="data for mql">
<?php
require_once ('db_credential.php');
$row = getRow($_GET['product_id'])
?>

<div class="container">
    <h2>Detail Information</h2>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Product Name</th>
            <th>Unit Price</th>
            <th>Unit Quantity </th>
            <th>InStock</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo $row['product_name'] ;?></td>
            <td><?php echo $row['unit_price'] ;?></td>
            <td><?php echo $row['unit_quantity'] ;?></td>
            <td><?php echo $row['in_stock'] ;?></td>
            <td align="center">
                <form action="calculation.php" name="quantity" method="post" target="bottom_right" onsubmit="return check_quantity(<?php echo $row['in_stock']?>)">
                    <input name="quantity" type="text" size="3" >
                    <input type="submit" name="Add" value="Add" >
                        </form></td>
        </tr>
        </tbody>
    </table>
    </div>
</div>

</body>
</html>
