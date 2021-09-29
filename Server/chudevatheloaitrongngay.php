<?php
    require "connect.php";

    class TheLoai{
        function TheLoai($idtheloai,$idkeychude,$tentheloai,$hinhtheloai){
            $this->idTheLoai = $idtheloai;
            $this->idKeyChuDe = $idkeychude;
            $this->TenTheLoai = $tentheloai;
            $this->HinhTheLoai = $hinhtheloai;
        }
    }

    class ChuDe{
        function ChuDe($idchude,$tenchude,$hinhchude){
            $this->idChuDe = $idchude;
            $this->TenChuDe = $tenchude;
            $this->HinhChuDe = $hinhchude;
        }
    }

    $arraytheloai = array();
    $arraychude = array();

    $querytheloai = "SELECT DISTINCT * FROM theloai ORDER BY rand(". date("Ymd"). ") LIMIT 4";
    $datatheloai = mysqli_query($con,$querytheloai);
    while($row = mysqli_fetch_assoc($datatheloai)){
        array_push($arraytheloai, new TheLoai($row['idTheLoai'], $row['idChuDe'], $row['TenTheLoai'], $row['HinhTheLoai']));
    }


    $querychude = "SELECT DISTINCT * FROM chude ORDER BY rand(". date("Ymd"). ") LIMIT 4";
    $datachude = mysqli_query($con,$querychude);
    while($row = mysqli_fetch_assoc($datachude)){
        array_push($arraychude, new ChuDe($row['idChuDe'], $row['TenChuDe'], $row['HinhChuDe']));
    }

    $arraychudetheloai = array('TheLoai'->$arraytheloai,'ChuDe'->$arraychude);
    echo json_encode($arraychudetheloai);
?>

