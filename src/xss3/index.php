<?php
ini_set('display_errors', 'on');

if (isset ($_POST['submit']) && isset ($_POST['name'])) {
    $username = $_POST['name'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>XSS 3</title>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css" />
</head>
<body>
<div id="main">
    <div class="container">
        <div class="row">
            <h1>XSS3 <small>your name</small></h1>
        </div>
        <div class="row">
            <p class="lead">
                enter your name<br />
            </p>
        </div>
    </div>
</div>
<div class="container">

    <div class="row">
        <form name="forgetPass" method="post">
            <div class="form-group col-md-2">
                <input type="text" class="form-control" id="name" name="name"
                       placeholder="keyword" required>
            </div>
            <div class="form-group col-md-2">
                <input type="submit" class="form-control btn btn-default" name="submit">
            </div>
        </form>
    </div>
</div>
<script>
    <?php if (isset ($username) && !empty ($username)): echo ("var name=\"$username\";");?>
    <?php endif; ?>
</script>
<script type="text/javascript" src="../static/bootstrap.min.js"></script>
</body>
</html>
<?php
include ("../footer.php");
?>
<!--Moein Fatehi (twitter.com/MoeinFatehi)
