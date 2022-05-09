
<?php
ini_set('display_errors', 'on');
function xss_check($data)
{
    return htmlentities($data, ENT_QUOTES);
}
if (isset ($_POST['submit']) && isset ($_POST['search'])) {
    $keyword = $_POST['search'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>try to secure</title>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css" />
</head>
<body>
<div id="main">
    <div class="container">
        <div class="row">
            <h1>XSS 8 <small></small></h1>
        </div>
        <div class="row">
            <p class="lead">
                now I use <mark>htmlentities</mark> function :)<br />
                <mark>// htmlentities - converts all applicable characters to HTML entities</mark>
            </p>
        </div>
    </div>
</div>
<div class="container">

    <div class="row">
        <form name="forgetPass" method="post">
            <div class="form-group col-md-2">
                <input type="text" class="form-control" id="search" name="search" value="<?php if (isset ($keyword) && !empty ($keyword)){ echo xss_check($keyword); }?>"
                       placeholder="keyword" required>
            </div>
            <div class="form-group col-md-2">
                <input type="submit" class="form-control btn btn-default" name="submit">
            </div>
        </form>
    </div>

    <?php if (isset ($keyword) && !empty ($keyword)): ?>
        <div class="row">
            <p style="color:red;" class="well"><strong></strong> keyword not found.</p>
            </p>
        </div>
    <?php endif; ?>

</div>
<script type="text/javascript" src="../static/bootstrap.min.js"></script>
</body>
</html>
<?php
include ("../footer.php");
?>
<!--Moein Fatehi (twitter.com/MoeinFatehi)