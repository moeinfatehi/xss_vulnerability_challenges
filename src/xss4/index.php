<?php
ini_set('display_errors', 'on');

if (isset ($_POST['submit']) && isset ($_POST['user_email'])) {
    $email = $_POST['user_email'];
}
function xss_check_1($data)
{
    // Converts only "<" and ">" to HTLM entities
    $input = str_replace("script", "", $data);
    // Failure is an option
    // Bypasses double encoding attacks
    // <script>alert(0)</script>
    // %3Cscript%3Ealert%280%29%3C%2Fscript%3E
    // %253Cscript%253Ealert%25280%2529%253C%252Fscript%253E
    $input = urldecode($input);
    return $input;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>XSS 4</title>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css" />
</head>
<body>
<div id="main">
    <div class="container">
        <div class="row">
            <h1>XSS4 <small>Try to secure</small></h1>
        </div>
        <div class="row">
            <p class="lead">
                I think I've fixed the XSS vuln, test if you can send &lt;script&gt; tag or not.<br />
            </p>
        </div>
    </div>
</div>
<div class="container">

    <div class="row">
        <form name="forgetPass" method="post">
            <div class="form-group col-md-2">
                <input type="email" class="form-control" id="user_email" name="user_email" placeholder="email@site.com" required>
            </div>
            <div class="form-group col-md-2">
                <input type="submit" class="form-control btn btn-default" name="submit">
            </div>
        </form>
    </div>
    <?php if (isset ($email) && !empty ($email)): ?>
        <div class="row">
            <p style="color:red;" class="well"><strong></strong><?php echo xss_check_1($email); ?> is not registered.</p>
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
