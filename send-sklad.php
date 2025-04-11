<?php
include 'db.php';

$type = $_POST['type-shoes'];
$size = $_POST['size-shoes'];
$qual = $_POST['qual-shoes'];

$shoes = "SELECT * FROM shoes";
                if($result = $conn->query($shoes)){
                    
                    foreach($result as $row){
                        
                        $bd_id = $row["id"];
                        $bd_type = $row["type"];
                        $bd_size = $row["size"];
                        $bd_qual = $row["qual"];
                        if($type == $bd_type && $size == $bd_size){
                            
                            $live_qual = $bd_qual + $qual;
                            $sql = "UPDATE shoes SET qual = '$live_qual' WHERE id = '$bd_id'";
                        }
                        else{
                            
                            $sql = "INSERT INTO shoes (type, size, qual) VALUES ('$type', $size, $qual)";
                            
                        }
                    }
                }
                // $sql = "INSERT INTO shoes (type, size, qual) VALUES ('$type', $size, $qual)";// переписать
                $affectedRowsNumber = $conn->exec($sql);
// если добавлена как минимум одна строка
if($affectedRowsNumber > 0 ){
    header('Location:http://vcard/size.php');
    // echo "Данные успешно добавлены: Тип обуви = $type  Размер = $size колличество = $qual";  
}