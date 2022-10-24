<?php
include("config.php");
?>
<html lang="en">
<head>
    <title>header</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<nav style="margin-left: auto; margin-right: auto; " class="navbar navbar-expand-lg navbar-light bg-light">

    <div style="margin-left: auto; margin-right: auto; " class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php if ($headerConf['aslEn']){ ?>
            <li class="nav-item">
                <a class="nav-link" href="asl-src">ASL Nodes</a>
            </li>
            <?php } ?>
            <?php if ($headerConf['piStarEn']){ ?>
            <li class="nav-item">
                <a class="nav-link" href="#">Pi-Star</a>
            </li>
            <?php } ?>
            <?php if ($headerConf['dvsEn']){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">DV-Switch</a>
                </li>
            <?php } ?>
            <?php if ($headerConf['xlxRefEn']){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">XLX Reflector</a>
                </li>
            <?php } ?>
            <?php if ($headerConf['ysfRefEn']){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">YSF Reflector</a>
                </li>
            <?php } ?>
            <?php if ($headerConf['p25RefEn']){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">P25 Reflector</a>
                </li>
            <?php } ?>
            <?php if ($headerConf['m17RefEn']){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">M17 Reflector</a>
                </li>
            <?php } ?>
            <?php if (!isset($_COOKIE['user'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
            <?php } elseif (isset($_CCOKIE['user'])){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>
            <?php } ?>

            <!--
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            -->
        </ul>

    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
