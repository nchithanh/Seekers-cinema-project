<?php

	// GET FILM DATA
	
function LoadAllFilm(){
    global $conn;
    $sql= "select * from phim order by ngaychieu";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}
function LoadFilmByStatus($trangthai){
    global $conn;
    $sql= "select * from phim where trangthai = ".$trangthai."";
    $sql.=" order by id desc";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}
function LoadFilmDetailById($id){
    global $conn;
    $sql= "select * from phim where id = ".$id."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}

	// Get Cinema data

function LoadAllRap(){
	global $conn;
    $sql= "select * from rap";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}

    // Get ID Connect PHIMRAP
function LoadIdConnectFilmRap($idphim,$idrap){
    global $conn;
    $sql= "select * from phim_rap where idphim = ".$idphim." and idrap =".$idrap." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function LoadConnectFilmRapByIdRap($idrap){
    global $conn;
    $sql= "select * from phim_rap where idrap =".$idrap." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}
function LoadConnectFilmRapByIdPhim($id){
    global $conn;
    $sql= "select * from phim_rap where idphim =".$id." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}
function LoadConnectphimrapById($id){
    global $conn;
    $sql= "select * from phim_rap where id_lienket = ".$id."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
// LOAD PHONG CHIEU
function LoadAllPhongchieu(){
    global $conn;
    $sql="select * from phongchieu";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resul = $stmt->fetchAll();
    return $resul;    
}
function LoadPhongChieuById($id){
    global $conn;
    $sql= "select * from phongchieu where id = ".$id."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function LoadPhongchieuByIdRap($id){
    global $conn;
    $sql= "select * from phongchieu where idrap = ".$id."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}
function LoadIDPhongchieu($ten,$idrap){
    global $conn;
    $sql= "select * from phongchieu where tenphong ='".$ten."' and idrap = ".$idrap."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}

function raptheotinh(){
	global $conn;
    $sql= "select * from tinhthanh";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}
// load rạp và tên tỉnh thành đi kèm
function LoadRapWithTenTinhThanh(){
    global $conn;
    $sql="SELECT rap.id, rap.tenrap, rap.diachi, tinhthanh.tentinhthanh FROM rap INNER JOIN tinhthanh ON rap.idtinhthanh = tinhthanh.id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $resul = $stmt->fetchAll();
    return $resul;    
}

// Load tên tỉnh thành bởi id rạp
function LoadTenTinhByIdRap($id){
    global $conn;
    $sql= "select tinhthanh.tentinhthanh,rap.idtinhthanh from rap,tinhthanh where rap.idtinhthanh = tinhthanh.id and rap.id =".$id."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function LoadAllTinh(){
    global $conn;
    $sql= "select * from tinhthanh";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}
function LoadRapById($id){
    global $conn;
    $sql= "select * from rap where id =".$id." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}

/******** SUAT CHIEU *************/
function LoadAllSuatChieu(){
    global $conn;
    $sql= "select * from suatchieu";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}
function LoadSuatchieuByIdConnect($id){
    global $conn;
    $sql= "select * from suatchieu where idphim_rap =".$id."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}
function LoadSuatchieuByIdPhong($id){
    global $conn;
    $sql= "select * from suatchieu where idphongchieu =".$id."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}
function LoadSuatchieuById($id){
    global $conn;
    $sql= "select * from suatchieu where id =".$id."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function LoadIdSuatchieu($ngaychieu,$thoigian,$idphim_rap,$idphongchieu){
    global $conn;
    $sql= "select * from suatchieu where ngaychieu = '".$ngaychieu."' and thoigian= '".$thoigian."' and idphim_rap = ".$idphim_rap." and idphongchieu = ".$idphongchieu." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
// function LoadAllSuatChieu(){
//     global $conn;
//     $sql= "select * from suatchieu";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();
//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $result = $stmt->fetchALL();
//     return $result;
// }


/*********** TRANG THAI GHE ***************/
function LoadAllTrangthaighe(){
    global $conn;
    $sql= "select * from trangthai_ghe";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}
function LoadTrangthaigheBySuatchieuId($id){
    global $conn;
    $sql= "select * from trangthai_ghe where idsuatchieu = ".$id." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}
function LoadTrangthaigheById($id){
    global $conn;
    $sql= "select * from trangthai_ghe where id =".$id." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function CountAvailableBySuatchieuId($id){
    global $conn;
    $sql= "select count(trangthai) as 'count' from trangthai_ghe where trangthai=0 and idsuatchieu =".$id." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function CountBookedBySuatchieuId($id){
    global $conn;
    $sql= "select count(trangthai) as 'count' from trangthai_ghe where trangthai=1 and idsuatchieu =".$id." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
/*********** GHE************/
function LoadAllGhe(){
    global $conn;
    $sql= "select * from ghe";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchALL();
    return $result;
}
function LoadGheById($id){
    global $conn;
    $sql= "select * from ghe where id =".$id." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function CountGheByIdPhong($id){
    global $conn;
    $sql= "select count(id) from ghe where idphong = ".$id."";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function LoadGheByIdPhong($id){
    global $conn ;
    $sql= "select * from ghe where idphong =".$id." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}
function LoadLastGheInHangghe($id){
    global $conn ;
    $sql= "select * from ghe WHERE idhangghe = ".$id." order by ghe DESC LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}

/*********** LOAI PHONG ************/
function LoadLoaiphongById($id){
    global $conn;
    $sql= "select * from loaiphong where id =".$id." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
/*********** LOAD HANG GHE */
function LoadIdHangghe($tenhangghe,$idphongchieu){
    global $conn;
    $sql= "select * from hangghe where tenhangghe ='".$tenhangghe."' and idphongchieu=".$idphongchieu." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();
    return $result;
}
function LoadHanggheByIdphong($id){
    global $conn;
    $sql= "select * from hangghe where idphongchieu= ".$id." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}
function LoadDanhgiaphimByIDPhim($id){
    global $conn;
    $sql= "select * from danhgiaphim where idphim = ".$id." ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    return $result;
}
?>

