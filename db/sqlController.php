<?php
// SQL Controller
// For MVList
// Copyright 2024

class SqlController {
    public function connect($db_name) {
        $connection = mysqli_connect('127.0.0.1', '*********', '*********', $db_name);
        // $connection = mysqli_connect('127.0.0.1', 'root', '', $db_name);

        if (!$connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        return $connection;
    }

    public function add_server($name, $ip, $desc, $ver) {
        $conn = $this->connect('projects_kb_mvl24');
        $query = "INSERT INTO `servers` (name, ip, description, version, rating, verified, user_confirmed) VALUES ('$name', '$ip', '$desc', '$ver', 0, false, false)";
        $cmd = mysqli_query($conn, $query);
        if (!$cmd) {
            die("". mysqli_error($conn));
        } else {
            echo "success";
        }
    }
    public function get_server($ip) {
        $conn = $this->connect('projects_kb_mvl24');
        $query = "SELECT ip, name, description, version, rating, verified, user_confirmed FROM `servers` WHERE ip='$ip'";
        $cmd = mysqli_query($conn, $query);
        if (!$cmd) {
            die("". mysqli_error($conn));
        } else {
            $row = mysqli_fetch_assoc($cmd);
            return json_encode($row);
        }
    }
    public function fetch_servers($order="name") {
        $conn = $this->connect('projects_kb_mvl24');
        $query = "SELECT ip, name, description, version, rating, verified, user_confirmed FROM `servers` WHERE verified=true ORDER BY $order ASC";
        $cmd = mysqli_query($conn, $query);
        if (!$cmd) {
            die("". mysqli_error($conn));
        } else {
            $result = [];
            while ($row = mysqli_fetch_assoc($cmd)) {
                $result[] = $row;
            }
            return json_encode($result);
        }
    }
}


$sqlController = new SqlController();
// $sqlController->add_server("Hypixel","hypixel.net","Hypixel Network | Summer Event","1.8-1.20");
// $sqlController->add_server("6b6t","6b6t.org","Cracked Anarchy Server","1.7-1.20");
// $sqlController->add_server("OP Blocks","hub.opblocks.com","Blocks Prison Season 18 Launched","1.7.2-1.20");
// $sqlController->add_server("147.135.31.207","147.135.31.207","GALAXYCRAFT NETWORK","1.7-1.20");
// $sqlController->add_server("GTA MC","grandtheftmc.net","GTA in Minecraft","1.7.2-1.20");
// $sqlController->add_server("Mineplex","us.mineplex.com","Mineplex Games","1.8-1.20");
// $sqlController->add_server("Kraina MC","krainamc.pl","Zagraj juz teraz razem z nami!","1.8-1.20");
// $sqlController->add_server("acmc.pl","acmc.pl","Zapraszamy, Survival, Gildie, Anarchia","1.8-1.20");
// $sqlController->add_server("mc.craftplay.pl","mc.craftplay.pl","CraftPlay.pl | Nowa Edycja","1.8-1.20");
// $sqlController->add_server("mcdolinamc.csrv.pl","mcdolinamc.csrv.pl","DOLINA","1.18.2");
// $sqlController->add_server("enderhc.pl","enderhc.pl","KAZDEGO DNIA KLUCZ ENDER O 18:00","1.8-1.20");
// $sqlController->add_server("MineLand","mineland.net","1000+ GAMES > BW > SW > MORE!","1.8-1.20");
// $result = $sqlController->get_server('namemc.pl');
// $result = $sqlController->fetch_servers();
// echo $result;
// $sqlController->add_server("","","","");
?>