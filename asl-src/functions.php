<?php
//get who's connected
function get_current_connections($node){
//    NODE      PEER                RECONNECTS  DIRECTION  CONNECT TIME        CONNECT STATE
//    ----      ----                ----------  ---------  ------------        -------------
//    1572191   127.0.0.1           0           OUT        196:39:48:755       ESTABLISHED
//    532441    71.249.108.85       2           IN         136:03:27:187       ESTABLISHED
//    560380    192.168.1.222       0           OUT        72:59:12:476        ESTABLISHED
    $node = strip_tags($node);
    $out = shell_exec("sudo asterisk -rx \"rpt lstats $node\"");
    $conns = explode("\n", $out);
    //$conns = str_replace("NODE", "",$conns);
    ?>
    <table>
        <thead>
        <tr>
            <th>Nodes</th>
            <th>State</th>
        </tr>
        </thead>
        <tbody>
    <?php
  // $conns = array_filter($conns);
    foreach($conns as $con){
        if (strpos($con, "NODE") !== false){
           continue;
        }
        if (strpos($con, "--") !== false){
           continue;
        }
        $con = explode(" ", $con);

        echo "<tr><td>" . $con[0] . "</td>";
        echo "<td>" . $con[41] . "</td>";
        echo "</tr>";
$con = array_filter($con);
	var_dump($con);
}
echo "</tbody></table>";
//    var_dump($conns);
}
