<?php
include ("../config.php");
include ("functions.php");
?>
<html>
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
                <a class="nav-link" href="../index.php">Home</a>
            </li>
<?php
foreach ($asl_config['nodes'] as $asl_conf){ ?>
            <li class="nav-item">
                <a class="nav-link" href="links.php?node=<?php echo $asl_conf; ?>"><?php echo $asl_conf; ?></a>
            </li>
            <?php } ?>
        </ul>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
