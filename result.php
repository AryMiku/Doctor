<meta charset="UTF-8">
<?php 
    $DCIP = $_POST['DCIP'];
    $MCV = $_POST['MCV'];
    $Anisocy = $_POST['Anisocyfosis'];
    $haveinani = $_POST['haveinani'];
    $Poiki = $_POST['Poikilocytosis'];
    $havepoiki = $_POST['havepoiki'];
    $HBH = $_POST['HBH'];
    $HB = $_POST['HB'];
    $RBC = $_POST['RBC'];
    $body = $_POST['body'];
    $comment = $_POST['comment'];
    if($RBC == ""){
        $RBC2 = "ไม่พบ";
    }
    else{
        $RBC2 = "พบ";
    }

    if($Anisocy == "1"){
        $Anisocy2 = "1+";
    }
    else if($Anisocy == "2"){
        $Anisocy2 = "2+";
    }
    else if($Anisocy == "3"){
        $Anisocy2 = "3+";
    }

    if($Poiki == "1"){
        $Poiki2 = "1+";
    }
    else if($Poiki == "2"){
        $Poiki2 = "2+";
    }
    else if($Poiki == "3"){
        $Poiki2 = "3+";
    }

    //ส่วนโชว์ผลลัพท์ทั้งหมด
    echo "====== ผลจากการคำนวณ ====== <br>";
    echo "DCIP : $DCIP <br>";
    echo "MCV : $MCV <br>";
    echo "RBC : $RBC2 <br>";
    echo "Anisocytasis : $Anisocy2 <br>";
    echo "ลักษณะที่พบของ Anisocytasis : $haveinani <br>";
    echo "Poikilocytosis : $Poiki2 <br>";
    echo "ลักษณะที่พบของ Poikilocytosis : $havepoiki <br>";
    echo "Inclusion Body : $body <br>";
    echo "HbH : $HBH <br>";
    echo "Hb : $HB <br>";
    echo "ข้อแนะนำ : $comment <br>";

    ///

    if($DCIP == "positive") //ทำฝั่งซ้าย
    {
        if($MCV >= 80){
            echo "มีโอกาสเป็นพาหะ Hb E"; //คำตอบที่ 4
        }
        else{
            if($MCV >= 70 && $MCV <= 79){
                if($RBC == "true"){
                    echo "มีโอกาสเป็นพาหะ Hb E"; //คำตอบที่ 4
                }
                else{
                    if($Anisocy < 1 && $Poiki < 1){ //อันนี้เดี๋ยวเช็คคำตอบอีกที
                        echo "มีโอกาสเป็นพาหะ Hb E"; //คำตอบที่ 4
                    }
                    else{
                        if($body == "Done"){
                            if($HBH == "Found"){
                                echo "เป็นธาลัสซีเมีย ชนิด Hb H Disease"; //คำตอบที่ 5
                            }
                            else{
                                echo "เป็นพาหะธาลัสซีเมียชนิดรุนแรง"; //คำตอบที่ 6
                            }
                        }
                        else{
                            echo "เป็นพาหะธาลัสซีเมียชนิดรุนแรง"; //คำตอบที่ 6
                        }
                    }
                }
            }
            else{
                if($MCV <= 70){
                    if($Anisocy < 1 && $Poiki < 1){ //อันนี้เดี๋ยวเช็คคำตอบอีกที
                        echo "มีโอกาสเป็นพาหะ Hb E"; //คำตอบที่ 4
                    }
                    else{
                        if($body == "Done"){
                            if($HBH == "Found"){
                                echo "เป็นธาลัสซีเมีย ชนิด Hb H Disease"; //คำตอบที่ 5
                            }
                            else{
                                echo "เป็นพาหะธาลัสซีเมียชนิดรุนแรง"; //คำตอบที่ 6
                            }
                        }
                        else{
                            echo "เป็นพาหะธาลัสซีเมียชนิดรุนแรง"; //คำตอบที่ 6
                        }
                    }
                }
            }
        }
    }
    else //ทำฝั่งขวา
    {
        if($MCV >= 80){
            if($HB >= 12.5){
                echo "เป็นปกติ";
            }
            else{
                echo "มีภาวะซีดเล็กน้อยไม่ทราบสาเหตุ";
            }
        }
        else{
            if($MCV >= 72 && $MCV < 80){
                echo "มีภาวะซีดเล็กน้อย"; //คำตอบที่ 2
            }
            else{
                if($MCV < 72){
                    if($Anisocy < 1 && $Poiki < 1){ //อันนี้เดี๋ยวเช็คคำตอบอีกที
                        echo "มีโอกาศเป็นพาหะธาลัสซีเมีย";
                    }
                    else{
                        echo "เป็นธาลัสซีเมีย B+ -thal (Homo)"; //คำตอบที่ 6
                    }
                }
            }
        }
    }

?>
