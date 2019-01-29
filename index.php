<?php
$file = 'source.xml';
$xml = simplexml_load_file($file) or die("Error: Cannot create object");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo $xml->page[intval($_GET['id']) - 1]->title; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <div id="main">
            <div id="header">
                <div id="logo">
                    <div id="logo_text">
                        <div class="button_container" id="toggle">
                            <span class="top"></span>
                            <span class="middle"></span>
                            <span class="bottom"></span>
                        </div>

                        <div class="overlay" id="overlay">
                            <nav class="overlay-menu">
                                <ul>
                                    <?php
                                    foreach ($xml->page as $value) {
                                        ?>
                                        <li><a href="<?php echo $value->attributes(); ?>.html"><?php echo $value->menu; ?></a></li>
                                        <?php
                                    }
                                    ?>
                                </ul>
                            </nav>
                        </div>
                        <!-- class="logo_colour", allows you to change the colour of the text -->
                        <h1><a href="index.html">Maçonnerie<span class="logo_colour">Ocordo</span></a></h1>
                    </div>
                </div>
                <div id="menubar">
                    <ul id="menu">
                        <?php
                        foreach ($xml->page as $value) {
                            ?>
                            <li><a href="<?php echo $value->attributes(); ?>.html"><?php echo $value->menu; ?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div id="site_content">
                <div class="sidebar">
                    <div class="container-fluid">
                        <?php echo $xml->page[intval($_GET['id']) - 1]->content; ?>
                    </div>
                </div>
            </div>
            <div id="footer">
                <span style="display:block;font-size:0.9em;line-height:55px;">
                    <span style="display:inline-block;">&copy; <span style="font-family:'Titillium Web';font-weight:900;letter-spacing:0.06em">LA MANU</span> Design 2018</span></span>
                <span style="display:block;font-size:0.7em;line-height:30px;margin-top:-25px">&lang; &copy; 2018-<?php echo date('Y'); ?> &rang;</span>
            </div>
        </div>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js'></script>
        <script  src="index.js"></script>
    </body>
</html>
