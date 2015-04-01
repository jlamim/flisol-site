<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="utf-8" />
    <link href='http://fonts.googleapis.com/css?family=Fira+Sans' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/bootstrap.min.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/bootstrap-theme.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/template.css" type="text/css" media="screen" />
    <title><?php echo $title; ?></title>
    <link rel="icon" href="<?php echo URL; ?>assets/images/favicon.png">
</head>

<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"> <img src="<?php echo URL; ?>assets/images/FLISoL-2015-amarillo.png" alt="Flisol Vila VElha 2015" width='85px'/></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="<?php echo ($page == 'principal') ? 'active' : ''; ?>">
                        <a href="<?php echo URL; ?>"><i class="fa fa-home"></i></a>
                    </li>
                    <li class="<?php echo ($page == 'flisol') ? 'active' : ''; ?>">
                        <a href="<?php echo URL; ?>flisol">Flisol</a>
                    </li>
                    <li class="<?php echo ($page == 'programacao') ? 'active' : ''; ?>">
                        <a href="<?php echo URL; ?>programacao">Programação</a>
                    </li>
                    <li class="<?php echo ($page == 'local') ? 'active' : ''; ?>">
                        <a href="<?php echo URL; ?>local">Local</a>
                    </li>
                    <li class="<?php echo ($page == 'organizadores') ? 'active' : ''; ?>">
                        <a href="<?php echo URL; ?>organizadores">Organização & Apoio</a>
                    </li>

                    <li>
                        <a href="#" target="_blank">Increva-se</a>
                    </li>

                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

    <!-- Banner content -->
    <div class="full-container banner banner-<?=$page?>" style="background:url(<?php echo URL; ?>assets/images/banner-<?=$page?>.jpg) no-repeat center transparent">
        <img src="<?php echo URL; ?>assets/images/banner-<?=$page?>.jpg" style="visibility:hidden" width="100%"/>
    </div>

    <!-- Begin page content -->
    <div class="container">
        <?php include("pages/{$page}.php"); ?>
    </div>

    <footer class="footer">
        <div class="container">
            <p>
                &copy; Flisol Vila Velha :: 2015
            </p>
        </div>
    </footer>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
