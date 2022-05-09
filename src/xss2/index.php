 <?php
ini_set('display_errors', 'on');

if (isset ($_POST['submit']) && isset ($_POST['search'])) {
    $keyword = $_POST['search'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>XSS 2</title>
    <link rel="stylesheet" href="../static/css/bootstrap.min.css" />
</head>
    <body>
        <div id="main">
            <div class="container">
                    <div class="row">
                        <h1>XSS2 <small>search in content</small></h1>
                    </div>
                    <div class="row">
                        <p class="lead">
                            enter a keyword to search<br />
                        </p>
                    </div>
                </div>
            </div>
            <div class="container">

                    <div class="row">
                        <form name="forgetPass" method="post">
                            <div class="form-group col-md-2">
                                <input type="text" class="form-control" id="search" name="search" value="<?php if (isset ($keyword) && !empty ($keyword)){ echo $keyword; }?>"
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
            </div>
        </div>
        <script type="text/javascript" src="../static/bootstrap.min.js"></script>
    </body>
</html>
<?php
include ("../footer.php");
?>
 <!--Moein Fatehi (twitter.com/MoeinFatehi)