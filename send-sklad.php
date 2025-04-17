<?php
include 'db.php';

$type = $_POST['type-shoes'];
$size = $_POST['size-shoes'];
$qual = $_POST['qual-shoes'];

$shoes = "SELECT * FROM shoes";
                if($result = $conn->query($shoes)){
                    if($result->rowCount() != 0){
                        // var_dump($result);
                        // die();
                        foreach($result as $row){
                        
                            $bd_id = $row["id"];
                            $bd_type = $row["type"];
                            $bd_size = $row["size"];
                            $bd_qual = $row["qual"];
                            if($type == $bd_type && $size == $bd_size){
                                
                                // echo($bd_id);
                                // echo($bd_type);
                                // echo($bd_size);
                                // echo($bd_qual);
                                $live_qual = $bd_qual + $qual;
                                if($live_qual < 0){
                                    echo ('Нельзя отгрузить больше, чем есть на складе');
                                }
                                $sql = "UPDATE shoes SET qual = '$live_qual' WHERE id = '$bd_id'";
                                // var_dump($sql);
                                // die();
                            }
                            else{
                                if($qual <= 0){
                                    echo ('Нельзя вносить товар с отрицательным чистом');
                                }
                                else{
                                    $sql = "INSERT INTO shoes (type, size, qual) VALUES ('$type', $size, $qual)";
                                }
                            }
                        }
                    }
                    else{
                        if($qual <= 0){
                            echo ('Нельзя вносить товар с отрицательным чистом');
                        }
                        else{
                            $sql = "INSERT INTO shoes (type, size, qual) VALUES ('$type', $size, $qual)";
                        }
                    }
                }
                // $sql = "INSERT INTO shoes (type, size, qual) VALUES ('$type', $size, $qual)";// переписать
                // var_dump($sql);
                //          die();
                $affectedRowsNumber = $conn->exec($sql);
// если добавлена как минимум одна строка
if($affectedRowsNumber > 0 ){
    header('Location:http://vcard/size.php');
    // echo "Данные успешно добавлены: Тип обуви = $type  Размер = $size колличество = $qual";  
}