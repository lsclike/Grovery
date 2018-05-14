<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/leftside.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/leftuse.js"></script>

</head>
<body>
<h2>
    Grocery
</h2>
<div>
    <div id="frozen_top">
    <figure>
    <img src="images/frozen_banner.jpg" height="60" width="80" onmouseover="expandContent(1)">
    <figcaption>Frozen Food</figcaption>
    </figure>
    </div>
        <div id="l1_fresh_food" style="position: absolute; top:65px;left: 100px;">
            <figure>
                <img src="images/fresh_food.jpg" height="60" width="80" onmouseover="expandContent(2)">
                <figcaption>Fresh Food</figcaption>
            </figure>
        </div>
    <div id="l1_beverage" style="position: absolute; top:65px;left: 190px;">
        <figure>
            <img src="images/beverage.jpeg" height="60" width="80" onmouseover="expandContent(3)">
            <figcaption>Beverage</figcaption>
        </figure>
    </div>
    <div id="l1_home_health" style="position: absolute; top:65px;left: 280px;" onmouseover="expandContent(4)">
        <figure>
            <img src="images/home_health.png" height="60" width="80" >
            <figcaption>Home Health</figcaption>
        </figure>
    </div>
    <div id="l1_pet_food" style="position: absolute; top:65px;left: 380px;" onmouseover="expandContent(5)">
        <figure>
            <img src="images/pet_food.jpeg" height="60" width="80" >
            <figcaption>Pet Food</figcaption>
        </figure>
    </div>
</div>

<div id="frozen" style="visibility: hidden">
    <div>
    <figure>
        <img src="images/frozenseafood.jpeg" height="60" width="80" onmouseover="expandContent(6)">
        <figcaption>Sea Food</figcaption>
    </figure>
    </div>
    <div id="l2_milk">
        <figure>
            <img src="images/milk.jpg" height="60" width="80" onmouseover="expandContent(7)">
            <figcaption>Milk food</figcaption>
        </figure>
    </div>
    <div id="l2_other">
        <figure>
            <img src="images/others.jpg" height="60" width="80" onmouseover="expandContent(8)">
            <figcaption>Other food</figcaption>
        </figure>
    </div>
</div>
<div id="fresh" style="visibility:hidden">
    <div id="T_bone">
        <figure>
            <a href="top_right.php?product_id=3002"target="top_right">
                <img src="images/T_bone.jpeg" height="60" width="80" onmouseover="expandContent(9)">
                <figcaption>T_bone</figcaption></a>
        </figure>
    </div>
    <div id="l2_cheddar_cheese" style="position: absolute; top: 147px; left:90px;">
        <figure>

                <img src="images/cheddar_cheese.jpeg" height="60" width="80"  onmouseover="expandContent(10)">
                <figcaption>Cheddar Cheese</figcaption>
        </figure>
    </div>
    <div id="l2_orange" style="position: absolute; top: 147px; left:200px;">
        <figure>
            <a href="top_right.php?product_id=3003"target="top_right">
                <img src="images/orange.jpg" height="60" width="80" onmouseover="expandContent(9)">
                <figcaption>Navel Orange</figcaption></a>
        </figure>
    </div>
    <div id="l2_banana" style="position: absolute; top: 147px; left:290px;">
        <figure>
            <a href="top_right.php?product_id=3004"target="top_right">
                <img src="images/banana.jpeg" height="60" width="80" onmouseover="expandContent(9)">
                <figcaption>banana</figcaption></a>
        </figure>
    </div>
    <div id="l2_grape" style="position: absolute; top: 147px; left:360px;">
        <figure>
            <a href="top_right.php?product_id=3006"target="top_right">
                <img src="images/grape.jpg" height="60" width="80" onmouseover="expandContent(9)">
                <figcaption>Grape</figcaption></a>
        </figure>
    </div>
    <div id="l2_apple" style="position: absolute; top: 147px; left:430px;">
        <figure>
            <a href="top_right.php?product_id=3007"target="top_right">
                <img src="images/apple.jpg" height="60" width="80" onmouseover="expandContent(9)">
                <figcaption>Apple</figcaption></a>
        </figure>
    </div>
    <div id="l2_peach" style="position: absolute; top: 147px; left:500px;">
        <figure>
            <a href="top_right.php?product_id=3005"target="top_right">
                <img src="images/peach.jpeg" height="60" width="80" onmouseover="expandContent(9)">
                <figcaption>Peach</figcaption></a>
        </figure>
    </div>
</div>
<div id="beverage" style="visibility:hidden">
    <div id="l2_coffee" style="position: absolute; top: 147px; left:0px;">
        <figure>
                <img src="images/coffee.jpg" height="60" width="80" onmouseover="expandContent(11)">
                <figcaption>Coffee</figcaption>
        </figure>
    </div>
    <div id="l2_tea" style="position: absolute; top: 147px; left:90px;" onmouseover="expandContent(12)">
        <figure>
            <img src="images/green_tea.jpg" height="60" width="80">
            <figcaption>Tea</figcaption>
        </figure>
    </div>
    <div id="l2_chocolate" style="position: absolute; top: 147px; left:190px;">
        <figure>
            <a href="top_right.php?product_id=4005"target="top_right">
                <img src="images/chocolate.jpg" height="60" width="80" onmouseover="expandContent(9)">
                <figcaption>Chocolate  Bar</figcaption></a>
        </figure>
    </div>
</div>
<div id="home_health" style="visibility:hidden">
    <div id="l2_bath_soap" style="position: absolute; top: 147px; left:0px;" onmouseover="expandContent(9)">
        <figure>
            <a href="top_right.php?product_id=2002"target="top_right">
            <img src="images/soap.jpeg" height="60" width="80">
                <figcaption>Bath Soap</figcaption></a>
        </figure>
    </div>
    <div id="l2_panadol" style="position: absolute; top: 147px; left:90px;" onmouseover="expandContent(13)">
        <figure>
            <img src="images/panadol.jpg" height="60" width="80">
            <figcaption>panadol</figcaption>
        </figure>
    </div>
    <div id="l2_powder" style="position: absolute; top: 147px; left:190px;" onmouseover="expandContent(9)">
        <figure>
            <a href="top_right.php?product_id=2005"target="top_right">
                <img src="images/powder.jpeg" height="60" width="80">
                <figcaption>Washing Powder</figcaption></a>
        </figure>
    </div>
    <div id="l2_garbage" style="position: absolute; top: 147px; left:300px;" onmouseover="expandContent(14)">
        <figure>
            <img src="images/garbage.jpg" height="60" width="80">
            <figcaption>Garbage Bag</figcaption>
        </figure>
    </div>
    <div id="l2_laundry" style="position: absolute; top: 147px; left:400px;" onmouseover="expandContent(9)">
        <figure>
            <a href="top_right.php?product_id=2006"target="top_right">
                <img src="images/bleach1.jpg" height="60" width="80">
                <figcaption>Laundry Bleach</figcaption></a>
        </figure>
    </div>
</div>
<div id="pet_food" style="visibility:hidden">
    <div id="l2_bird_food" style="position: absolute; top: 147px; left:0px;" onmouseover="expandContent(9)">
        <figure>
            <a href="top_right.php?product_id=5002"target="top_right">
                <img src="images/bird_food.jpeg" height="60" width="80">
                <figcaption>Bird Food</figcaption></a>
        </figure>
    </div>
    <div id="l2_cat_food" style="position: absolute; top: 147px; left:90px;" onmouseover="expandContent(9)">
        <figure>
            <a href="top_right.php?product_id=5003"target="top_right">
                <img src="images/cat_food.jpg" height="60" width="80">
                <figcaption>Cat Food</figcaption></a>
        </figure>
    </div>
    <div id="l2_dry_dog_food" style="position: absolute; top: 147px; left:180px;" onmouseover="expandContent(15)">
        <figure>
                <img src="images/dog_food.jpg" height="60" width="80">
                <figcaption>Dog Food</figcaption>
        </figure>
    </div>
</div>

<div id="l3_frozen" style="visibility: hidden">
    <div id="fresh_finger">
        <figure>
            <a href="top_right.php?product_id=1000"target="top_right">
                <img src="images/fish_finger.jpeg" height="60" width="80">
                <figcaption>Fish Finger(Small)</figcaption></a>
        </figure>
    </div>
    <div id="fresh_finger_large" style="position: absolute; top: 225px; left:120px">
        <figure>
            <a href="top_right.php?product_id=1001"target="top_right">
                <img src="images/fish_finger.jpeg" height="60" width="80">
                <figcaption>Fish Finger(Large)</figcaption></a>
        </figure>
    </div>
    <div id="shelled_prawns" style="position: absolute; top: 225px; left:240px">
        <figure>
            <a href="top_right.php?product_id=1003"target="top_right">
                <img src="images/prawn_in_bowl.jpg" height="60" width="80">
                <figcaption>Shelled Prawns</figcaption></a>
        </figure>
    </div>
</div>
<div id="l3_milk" style="visibility: hidden">
    <div id="tube_ice_cream" style="position: absolute; top: 225px; left:0px" >
        <figure>
            <a href="top_right.php?product_id=1004"target="top_right">
                <img src="images/tub_ice_cream.jpg" height="60" width="80">
                <figcaption>Tub Icea Cream(1L)</figcaption></a>
        </figure>
    </div>
    <div id="tube_ice_cream_large" style="position: absolute; top: 225px; left:140px">
        <figure>
            <a href="top_right.php?product_id=1005"target="top_right">
                <img src="images/tub_ice_cream.jpg" height="60" width="80">
                <figcaption>Tub Icea Cream(2L)</figcaption></a>
        </figure>
    </div>
</div>
<div id="l3_other" style="visibility: hidden">
    <div id="hamburger_patties" style="position: absolute; top: 225px; left:0px" >
        <figure>
            <a href="top_right.php?product_id=1002"target="top_right">
                <img src="images/hamburfer_patties.jpg" height="60" width="80">
                <figcaption>Hamburger Patties</figcaption></a>
        </figure>
    </div>
</div>
<div id="l3_cheddar" style="visibility: hidden">
    <div id="cheddar" style="position: absolute; top: 225px; left:0px" >
        <figure>
            <a href="top_right.php?product_id=3000"target="top_right">
                <img src="images/cheddar_cheese.jpeg" height="60" width="80">
                <figcaption>Cheddar Cheese</figcaption></a>
        </figure>
    </div>
    <div id="cheddar_large" style="position: absolute; top: 225px; left:120px" >
        <figure>
            <a href="top_right.php?product_id=3001"target="top_right">
                <img src="images/cheddar_cheese.jpeg" height="60" width="80">
                <figcaption>Cheddar Cheese(large)</figcaption></a>
        </figure>
    </div>
</div>
<div id="l3_coffee" style="visibility: hidden">
    <div id="instant coffee" style="position: absolute; top: 225px; left:0px" >
        <figure>
            <a href="top_right.php?product_id=4003"target="top_right">
                <img src="images/instance.jpeg" height="60" width="80">
                <figcaption>Instance Coffee</figcaption></a>
        </figure>
    </div>
    <div id="instant coffee_large" style="position: absolute; top: 225px; left:120px" >
        <figure>
            <a href="top_right.php?product_id=4004"target="top_right">
                <img src="images/instance.jpeg" height="60" width="80">
                <figcaption>Instance Coffee(large)</figcaption></a>
        </figure>
    </div>
</div>
<div id="l3_tea" style="visibility: hidden">
    <div id="tea_bag" style="position: absolute; top: 225px; left:0px" >
        <figure>
            <a href="top_right.php?product_id=4000"target="top_right">
                <img src="images/tea_bag.jpg" height="60" width="80">
                <figcaption>Instance Coffee</figcaption></a>
        </figure>
    </div>
    <div id="tea_bag_middle" style="position: absolute; top: 225px; left:110px" >
        <figure>
            <a href="top_right.php?product_id=4001"target="top_right">
                <img src="images/tea_bag.jpg" height="60" width="80">
                <figcaption>Tea Bag(middle)</figcaption></a>
        </figure>
    </div>
    <div id="tea_bag_large" style="position: absolute; top: 225px; left:220px" >
        <figure>
            <a href="top_right.php?product_id=4002"target="top_right">
                <img src="images/tea_bag.jpg" height="60" width="80">
                <figcaption>Tea Bag(large)</figcaption></a>
        </figure>
    </div>
</div>
<div id="l3_panadol" style="visibility: hidden">
    <div id="panadol_normal" style="position: absolute; top: 225px; left:0px" >
        <figure>
            <a href="top_right.php?product_id=2000"target="top_right">
                <img src="images/panadol.jpg" height="60" width="80">
                <figcaption>Panadol</figcaption></a>
        </figure>
    </div>
    <div id="tea_bag_middle" style="position: absolute; top: 225px; left:110px" >
        <figure>
            <a href="top_right.php?product_id=2001"target="top_right">
                <img src="images/panadol.jpg" height="60" width="80">
                <figcaption>Panadol</figcaption></a>
        </figure>
    </div>
</div>
<div id="l3_garbage" style="visibility: hidden">
    <div id="garbage_bag" style="position: absolute; top: 225px; left:0px" >
        <figure>
            <a href="top_right.php?product_id=2003"target="top_right">
                <img src="images/garbage.jpg" height="60" width="80">
                <figcaption>Garbage Bag</figcaption></a>
        </figure>
    </div>
    <div id="garbage_bag_normal" style="position: absolute; top: 225px; left:110px" >
        <figure>
            <a href="top_right.php?product_id=2004"target="top_right">
                <img src="images/garbage.jpg" height="60" width="80">
                <figcaption>Garbage Bag(Larg)</figcaption></a>
        </figure>
    </div>
</div>
<div id="l3_dog_food" style="visibility: hidden">
    <div id="l3_dry" style="position: absolute; top: 225px; left:0px" >
        <figure>
            <a href="top_right.php?product_id=5001"target="top_right">
                <img src="images/dog_food.jpg" height="60" width="80">
                <figcaption>Dry Dog Food</figcaption></a>
        </figure>
    </div>
    <div id="l3_dry_large"  style="position: absolute; top: 225px; left:110px" >
        <figure>
            <a href="top_right.php?product_id=5000"target="top_right">
                <img src="images/dog_food.jpg" height="60" width="80">
                <figcaption>Dry Dog Food(Large)</figcaption></a>
        </figure>
    </div>
</div>

</body>
<script src="js/leftuse.js"></script>

</html>


