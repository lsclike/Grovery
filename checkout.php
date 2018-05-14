<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Checkout</title>
    <script type="text/javascript" defer>
        function confirm() {
            var result = true;

            if (document.the_form.first_name.value == "") {
                document.the_form.first_name.focus();
                document.the_form.first_name.style.background = "Red";
                result = false;
            }
            if (document.the_form.last_name.value == "") {
                document.the_form.last_name.focus();
                document.the_form.last_name.style.background = "Red";
                result = false;
            }
            if (document.the_form.address.value == "") {
                document.the_form.address.focus();
                document.the_form.address.style.background = "Red";
                result = false;
            }
            if (document.the_form.suburb.value == "") {
                document.the_form.suburb.focus();
                document.the_form.suburb.style.background = "Red";
                result = false;
            }
            if (document.the_form.state.value == "") {
                document.the_form.state.focus();
                document.the_form.state.style.background = "Red";
                result = false;
            }
            if (document.the_form.country.value == "") {
                document.the_form.country.focus();
                document.the_form.country.style.background = "Red";
                result = false;
            }
            if (document.the_form.post_code.value == "") {
                document.the_form.post_code.focus();
                document.the_form.post_code.style.background = "Red";
                result = false;
            }

            if (document.the_form.email.value == "") {
                document.the_form.email.focus();
                document.the_form.email.style.background = "Red";
                result = false;
                }
            return result;
            }
    </script>
</head>

<body >
<h3>Please Fill The Personal Detail Form</h3>
<p><span style="color:#F00">*</span> indicates required fields</p>
<form class="form-horizontal" name="the_form" action="email.php" method="post" target="top_right" onsubmit="return confirm()">
    <div class="form-group">
        <label class="control-label col-sm-2" for="first_name"><span style="color:#F00">* </span>First Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="first_name" id="first_name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="last_name"><span style="color:#F00">* </span>Last Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="last_name" id="last_name">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="address"><span style="color:#F00">* </span>Address</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="address" id="address">
        </div>
    </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="suburb"><span style="color:#F00">* </span>Suburb</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="suburb" id="suburb">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="state"><span style="color:#F00">* </span>State</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="state" id="state">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="post_code"><span style="color:#F00">* </span>Post Code</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="post_code" id="post_code">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="post_code"><span style="color:#F00">* </span>Country</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="country" id="country">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 col-form-label"><span style="color:#F00">* </span>Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
        </div>
    </div>
    <center>
        <input type="submit" value="Purchase">

    </center>
</form>

</body>
</html>
