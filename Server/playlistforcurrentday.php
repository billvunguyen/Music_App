<?php
    require "connect.php";

    $query = "SELECT DISTINCT * FROM playlist ORDER BY rand(" . date("Ymd") . ") LIMIT 3";
    class PlayListToDay{
        function PlayListToDay($idplaylist,$ten,$hinh,$icon){
            $this->idPlayList = $idplaylist;
            $this->Ten = $ten;
            $this->HinhAnh = $hinh;
            $this->Icon = $icon;
        }
    }

    $arrayplaylistfortoday = array();
    $data = mysqli_query($con,$query);
    while($row = mysqli_fetch_assoc($data)){
        array_push($arrayplaylistfortoday, new PlayListToDay($row['idPlayList'],$row['Ten'],$row['HinhNen'],$row['HinhIcon']));
    }

    echo json_encode($arrayplaylistfortoday);
?>

