<form action="" method="post">
    <style>
        input{
            width:30%;
            margin-top:20px;
            margin-left:30%;
        }
    </style>
    <input type="submit" name="delete" value="làm rỗng database"><br>
    <input type="number" name="sl_rap" placeholder="số lượng rạp ( <5 thui nhiều quá sập sever đó =)) )"><br>
    <input type="number" name="sl_phong" placeholder="số lượng phòng 1 rạp ( <5 thui nhiều quá sập sever đó =)) )"><br>
    <input type="number" name="sl_hangghe" placeholder="số lượng hàng ghế 1 phòng ( <10 thui nhiều quá sập sever đó =)) )"><br>
    <input type="number" name="sl_ghe" placeholder="số lượng ghế 1 hàng ghế ( <16 thui nhiều quá sập sever đó =)) )"><br>
    <input type="submit" name="tool" value="bước 1"><br>
    <input type="submit" name="tool1" value="bước 2"><br>
    <input type="submit" name="tool2" value="bước 3"><br>
</form>
<?php
ini_set('max_execution_time', 3600);
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=phim", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
     echo "cdscbvdvgdcvhds hd: " . $e->getMessage();
    }
    function loadrap(){
        global $conn;
        $sql="select * from rap";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetchAll();
        return $resul;    
    }
    function loadphong($id){
        global $conn;
        $sql="select * from phongchieu where ";
        if($id>0){
            $sql.="idrap = ".$id."";
        }else{
            $sql.="1";
        }
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetchAll();
        return $resul;    
    }
    function loadhangghe(){
        global $conn;
        $sql="select * from hangghe";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetchAll();
        return $resul;    
    }
    function loadphim(){
        global $conn;
        $sql="select * from phim";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetchAll();
        return $resul;    
    }
    function loadphim_rap(){
        global $conn;
        $sql="select * from phim_rap";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetchAll();
        return $resul;    
    }
    function loadsuatchieu(){
        global $conn;
        $sql="select * from suatchieu where 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetchAll();
        return $resul;    
    }
    function addrap($ten)
	{
		global $conn ;
		$sql= "INSERT INTO rap (tenrap,diachi,idtinhthanh) VALUES ('$ten', '10 nguyen thi minh khai','1')";
		$conn->exec($sql);
    }
    function addphong($ten,$id)
	{
		global $conn ;
		$sql= "INSERT INTO phongchieu (tenphong,idrap) VALUES ('$ten','$id')";
		$conn->exec($sql);
    }
    function addhangghe($ten,$id)
	{
		global $conn ;
		$sql= "INSERT INTO `hangghe` (`tenhangghe`, `idphongchieu`) VALUES ('$ten', '$id')";
		$conn->exec($sql);
    }
    function addghe($ten,$idhangghe,$idphong)
	{
		global $conn ;
		$sql= "INSERT INTO `ghe`(`trangthai`, `ghe`, `idhangghe`, `idphong`)
         VALUES (0,'$ten','$idhangghe','$idphong')";
		$conn->exec($sql);
    }
    function addlienket($idphim,$idrap)
	{
		global $conn ;
		$sql= "INSERT INTO phim_rap (idphim,idrap) VALUES ('$idphim','$idrap')";
		$conn->exec($sql);
    }
    function addsuatchieu($ngaychieu,$thoigian,$idphim_rap,$idphongchieu)
	{
		global $conn ;
		$sql= "INSERT INTO suatchieu (ngaychieu,thoigian,idphim_rap,idphongchieu) VALUES 
        ('$ngaychieu','$thoigian','$idphim_rap','$idphongchieu')";
		$conn->exec($sql);
    }
    function add_trangthai_ghe($idsuatchieu,$idphong){
        global $conn;
        $sql="INSERT INTO trangthai_ghe (trangthai, ghe, idhangghe, idsuatchieu)
        SELECT ghe.trangthai, ghe.ghe, ghe.idhangghe, ".$idsuatchieu."
        from ghe where idphong = ".$idphong."
        ";
        $conn->exec($sql);
    }
    function loadsuatchieu_0000(){
        global $conn;
        $sql="select id from suatchieu where ngaychieu = '0000-00-00'";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $resul = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resul = $stmt->fetchAll();
        return $resul;    
    }
    function delete_0000($idsuatchieu){
        global $conn;
        $sql= "DELETE from trangthai_ghe where idsuatchieu = ".$idsuatchieu."";
        $conn->exec($sql);
    }
    function delete_suatchieu_0000(){
        global $conn;
        $sql= "DELETE from suatchieu where ngaychieu = '0000-00-00'";
        $conn->exec($sql);
    }
    function delete_thanhtoan(){
        global $conn;
        $sql= "DELETE from thanhtoan where 1";
        $conn->exec($sql);
    }
    function delete_ve(){
        global $conn;
        $sql= "DELETE from ve where 1";
        $conn->exec($sql);
    }
    function delete_ghe(){
        global $conn;
        $sql= "DELETE from ghe where 1";
        $conn->exec($sql);
    }
    function delete_hangghe(){
        global $conn;
        $sql= "DELETE from hangghe where 1";
        $conn->exec($sql);
    }
    function delete_suatchieu(){
        global $conn;
        $sql= "DELETE from suatchieu where 1";
        $conn->exec($sql);
    }
    function delete_trangthaighe(){
        global $conn;
        $sql= "DELETE from trangthai_ghe where 1";
        $conn->exec($sql);
    }
    function delete_phongchieu(){
        global $conn;
        $sql= "DELETE from phongchieu where 1";
        $conn->exec($sql);
    }
    function delete_rap(){
        global $conn;
        $sql= "DELETE from rap where 1";
        $conn->exec($sql);
    }
    function delete_phimrap(){
        global $conn;
        $sql= "DELETE from phim_rap where 1";
        $conn->exec($sql);
    }
    $br="</br>";
    $chucai = array("A","B","C","D","E");
    $chucai1 = array("A","B","C","D","E","F","G","H","L");
    $chucai2 = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
    if(isset($_POST['tool'])&&$_POST['tool']){
        $sl_rap=$_POST['sl_rap'];
        $sl_phong=$_POST['sl_phong'];
        $sl_hangghe=$_POST['sl_hangghe'];
        $sl_ghe=$_POST['sl_ghe'];
        for ($i=0;$i<=$sl_rap;$i++){
            $tenrap="nguyễn văn ";
            $chuoitenrap=$tenrap.=$chucai[$i];
            addrap($chuoitenrap);
    }
        $loadrap=loadrap();
        foreach ($loadrap as $r){
            for ($i=0; $i <= $sl_phong; $i++) { 
                $tenphong="phòng ";
                $chuoitenrap=$tenphong.=$chucai[$i];
                addphong($chuoitenrap,$r['id']);
        }
            }
                $loadphong=loadphong(0);
                foreach ($loadphong as $p){
                    for ($i=0; $i <= $sl_hangghe; $i++) { 
                        $chuoitenrap=$chucai1[$i];
                        addhangghe($chuoitenrap,$p['id']);
                }
                        $loadhangghe=loadhangghe();
                        foreach ($loadhangghe as $hg){
                            for ($i=1; $i <= $sl_ghe; $i++) { 
                                addghe($i,$hg['id'],$p['id']);
                            }
                        }
                    }
                    echo 'đã xong b1';
    }
    if(isset($_POST['tool1'])){
        $loadphim=loadphim();
        $loadrap=loadrap();
        $index_phim=0;
        $index_rap=0;
        $all=0;
        foreach ($loadphim as $p){
            $index_phim++;
        }
        foreach ($loadrap as $r){
            $index_rap++;
        }
        // print_r($loadrap[$index_rap]['id']);
        for ($i=0; $i < $index_phim; $i++) { 
            $idphim=$loadphim[$i]['id'];
            foreach ($loadrap as $r){
                addlienket($idphim,$r['id']);
            }
        }
        echo 'đã xong b2';
    }
    if(isset($_POST['tool2'])){
        function rand_time(){
            $gio2=rand(0, 9);
            if($gio2>4){
                $gio1=0;
            }else{
                $gio1=rand(0, 2);
            }
            $phut1=rand(0, 5);
            $phut2=rand(0, 9);
            $gio=$gio1.=$gio2;
            $phut=$phut1.=$phut2;
            return $time=$gio.":".$phut;
        }
        function rand_date(){
            $nam=2020;
            $thang2=rand(0, 2);
            $thang1=rand(0, 1);
            $ngay2=rand(0, 9);
            $ngay1=rand(0, 3);
            if($thang1 == 0){
                $thang2=rand(1, 9);
            }
            if($ngay1 == 0){
                $ngay2=rand(1, 9);
            }
            if($ngay1 == 3){
                $ngay2=rand(0, 1);
            }
            if($ngay1 < 3){
                $ngay2=rand(0, 9);
            }
            $date=$nam."-".$thang1.=$thang2."-".$ngay1.=$ngay2;
            return $date;
        }
        echo $m = rand_date();
        echo $br;
        echo $t = rand_time();
        $loadphim_rap=loadphim_rap();
        foreach ($loadphim_rap as $pr){
            $loadphong=loadphong($pr['idrap']);
            foreach ($loadphong as $p){
                for ($i=0; $i < 4; $i++) { 
                   echo $d = rand_date();
                    for ($j=0; $j < 4; $j++) { 
                        $t = rand_time();
                        addsuatchieu($d,$t,$pr['id_lienket'],$p['id']);
                    }
                }
            }
        }
        $loadsuatchieu=loadsuatchieu();
        foreach ($loadsuatchieu as $sc){
            add_trangthai_ghe($sc['id'],$sc['idphongchieu']);
        }
        $load0000=loadsuatchieu_0000();
        foreach ($load0000 as $load){
            delete_0000($load['id']);
        }
        delete_suatchieu_0000();
        echo 'hoan tat';
    }
    if(isset($_POST['delete'])){
        delete_trangthaighe();
        delete_suatchieu();
        delete_phimrap();
        delete_ghe();
        delete_hangghe();
        delete_phongchieu();
        delete_rap();
        delete_ve();
        delete_thanhtoan();
        echo 'đã làm rỗng database';
    }

?>