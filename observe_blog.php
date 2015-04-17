<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap-3.3.4-dist\css\bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap-3.3.4-dist\css\bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="bootstrap-3.3.4-dist\js\bootstrap.min.js"></script>

    <link rel="stylesheet" href="css\view.css"/>
    <link rel="stylesheet" href="css\header-footer.css"/>
    <link rel="stylesheet" href="css\style.css" type="text/css" />

    <title class="h1">Blog Title</title>
</head>

<body>
<div id='nav'>
    <a href="http://localhost/mahdis/observe_blog.php">Home</a>
    <a href="#"> About us</a>
    <a href="#some-where">Some link</a>
</div>
<div class="post">
    <?php include 'post_observe_blog.php' ;  ?>
    <h1><?php echo "". $blog_title ;?></h1>
    <?php
        for($x = $index ; $x > 0 ; $x--){ ?>
            <p class="bg-danger"><?php echo "".$row[$x]["title"] ;?></p>
            <p><?php echo "".$row[$x]["body"] ;?></p>
            <div id='footer'>
            <span>
            <small>
            <p class="text-muted">
                <?php echo "".$row[$x]["date"] ;?>
                <br/>
                <a href="#">comments</a>
                <br/>author
            </p>
            </small>
            </span>
            </div>
        <?php }
    ?>
</div>

<div id='left-block'>
    <div id='widge' class="block">

        <div id='profilePic'>
            <img src="css\profile.jpg" alt="My name">
        </div>

        <h1>My Information</h1>
        <p>this is my information.......</p>

    </div>
    <div id='archive' class="block">
        <h1>Archive</h1>
        <a href="#">Last Week</a>
        <br>
        <a href="#">2 Weeks Before</a>
        <br>
        <a href="#">3 Weeks Before</a>
        <br>
        <a href="#">4 Weeks Before</a>
        <br>
        <a href="#some-where">Last Month</a>
        <br>
    </div>

    <div id='links' class="block">
        <h1>Related Links</h1>
        <?php
        for($x = $index1 ; $x > 0 ; $x--){ ?>
            <a href="<?php echo "".$row1[$x]["link_address"] ;?>"><?php echo "".$row1[$x]["link_title"] ;?></a>
            <br/>
        <?php }
        ?>

    </div>
    <div id='Blog-Categories' class="block">
        <h1>blog categories</h1>
        <a href="#">This</a><br>
        <a href="#">This</a><br>
        <a href="#">This</a><br>
        <a href="#">This</a><br>
    </div>

</div>
<div id='body'></div>
</body>
</html>
