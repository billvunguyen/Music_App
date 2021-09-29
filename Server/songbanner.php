<?php
    require "connect.php";
    $query = "SELECT quangcao.id, quangcao.HinhAnh, quangcao.NoiDung, quangcao.idBaiHat, baihat.TenBaiHat,baihat.HinhBaiHat 
    FROM `baihat` INNER JOIN quangcao ON quangcao.idBaiHat = baihat.idBaiHat WHERE quangcao.idBaiHat = baihat.idBaiHat";
    $data = mysqli_query($con,$query);

    class QuangCao{
        function QuangCao($idquangcao,$hinhanh,$noidung,$idbaihat,$tenbaihat,$hinhbaihat){
            $this->idQuangCao = $idquangcao;
            $this->HinhAnh = $hinhanh;
            $this->NoiDung = $noidung;
            $this->idBaiHat = $idbaihat;
            $this->TenBaiHat = $tenbaihat;
            $this->HinhBaiHat = $hinhbaihat;
        }
    }
    $mangquangcao = array();
    while($row = mysqli_fetch_assoc($data)){
        array_push($mangquangcao,new QuangCao($row['id'],$row['HinhAnh'],$row['NoiDung'],$row['idBaiHat'],$row['TenBaiHat'],$row['HinhBaiHat']));
    }

    echo json_encode($mangquangcao);
?>

