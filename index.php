<?php
error_reporting(0);
session_start();
$pg = $_REQUEST['pg'] ?? '';
$cat = $_REQUEST['cat'] ?? '';
if (($pg == "") && ($cat == "")) $pg = 1;

$opg = $pg . ".php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Template DSGN</title>
    <link href="css/modern.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <?php require("header-modern.php"); ?>

    <!-- Main Content -->
    <main>
        <?php 
        if ($pg != "") {
            // Show specific page
            if (file_exists($opg)) {
                include $opg;
            } else {
                echo '<div class="hero"><div class="hero-content"><h1>Page Not Found</h1><p>The page you\'re looking for doesn\'t exist.</p></div></div>';
            }
        } elseif ($cat != "") {
            // Show category content
            include("conn/conn.php");
            
            $sql = "SELECT * FROM cms WHERE cmsid=" . intval($cat);
            $res = mysql_query($sql, $lnk);
            $fres = mysql_fetch_assoc($res);
            
            if ($fres) {
                echo '<div class="container">' . base64_decode($fres['cms']) . '</div>';
            } else {
                echo '<div class="hero"><div class="hero-content"><h1>Content Not Found</h1><p>The content you\'re looking for doesn\'t exist.</p></div></div>';
            }
        } else {
            // Show default hero section
            ?>
            <section class="hero">
                <div class="hero-content">
                    <h1>Welcome.</h1>
                    <p>Experience the next generation of modern web design. Build stunning, responsive websites with our cutting-edge template solutions.</p>
                    
                    <div class="search-box">
                        <input type="text" placeholder="Search or ask something..." />
                        <button type="submit">🔍</button>
                    </div>
                    
                    <div class="hero-buttons">
                        <a href="#" class="btn btn-primary">FREE TRIAL</a>
                        <a href="<?php echo $_SERVER['SCRIPT_NAME']; ?>?cat=1" class="btn btn-secondary">SEE MORE</a>
                    </div>
                </div>

                <div class="hero-decoration">
                    <div class="wave wave-1"></div>
                    <div class="wave wave-2"></div>
                    <div style="position: absolute; top: 50%; right: -100px; color: rgba(255,255,255,0.7); font-size: 18px; font-weight: 300; letter-spacing: 1px;">Landing page.</div>
                </div>
            </section>
            <?php
        }
        ?>
    </main>

    <?php require("footer-modern.php"); ?>
</body>
</html>
