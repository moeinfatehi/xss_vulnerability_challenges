
<?php
ini_set('display_errors', 'on');
function xss_check($data)
{
    // Converts only "<" and ">" to HTLM entities
    $input = str_replace("<", "&lt;", $data);
    $input = str_replace(">", "&gt;", $input);
    $input = str_replace("\"", "&quot;", $input);
    // Failure is an option
    // Bypasses double encoding attacks
    // <script>alert(0)</script>
    // %3Cscript%3Ealert%280%29%3C%2Fscript%3E
    // %253Cscript%253Ealert%25280%2529%253C%252Fscript%253E
    $input = urldecode($input);
    return $input;
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
            <h1>XSS 7 <small></small></h1>
        </div>
        <div class="row">
            <p class="lead">
                now I encode below characters. try to bypass.<br />
                <mark> &lt; &gt; &quot; </mark>
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