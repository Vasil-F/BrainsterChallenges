<?php 
include "1.php";
include "2.php";

function TypeOfNumber(string $n){
    // 1 - decimal; 2 - binary; 3 - roman;
    if($n[0]=='-' || $n[0]=='+'){
        if($n[1]==0){
            echo "Invalid number! Unexpected 0 after character '+'.";
            echo "<br>"; echo "<br>";
            return 0;
        }
        return 1;
    }
    elseif($n[0]=='1' || $n[0]=='0'){
        $flag=true;//true - number is binary, false - number is decimal
        for($i=1; $i<strlen($n); $i++){
            if($n[$i]!='0' && $n[$i]!='1'){
                $flag=false;
            }
            
        }
        if($flag){
            return 2;
            
        }
        else{
            return 1;
            
        }
    }
    elseif($n[0]<10){
        return 1;
    }
    else
        return 3;
}

$arrayOfNumbers = array("+123", 1011, "MMCL", "MMMIV", "-456", 1102, "CVIII", "+0123", 10101, 5000000);
for($i=0; $i < 10; $i++) {
    $number = $arrayOfNumbers[$i];
    $type = TypeOfNumber($number);
    $result1=0;
    $result2="";
    $br=0;
    switch($type){
        case 1: echo "$number is a Decimal number."."<br>"; 
                $numberInt = intval($number);
                if ($numberInt < 0) {
                    echo "Number $number is negative, cannot be converted into other types."; echo '<br>';
                    echo "<br>";
                    break;
                }
                if($numberInt > 3999999){
                    echo "Invalid number! $numberInt should be below 3999999.";
                    echo '<br>'; echo "<br>";
                    break;
                }
                $temp1 = DecToBin($number,$result1,$br);
                echo "Binary for $number: $temp1"; echo '<br>';
                echo "Roman for $number: "; RecDecToRom($number, $result2); echo '<br>';
                echo "<br>";
                break;
        case 2: echo "$number is a Binary number."; echo '<br>';
                $temp1 = BinToDec($number,$result1,$br);
                echo "Decimal for $number: $temp1"; echo '<br>';
                echo "Roman for $number: "; RecDecToRom($temp1, $result2); echo '<br>';
                echo "<br>";
                break;
        case 3: echo "$number is a Roman numeral."; echo '<br>';
                $temp1 = RomToDec($number);
                $temp2 = DecToBin($temp1,$result1,$br);
                echo "Decimal for $number: $temp1"; echo '<br>';
                echo "Binary for $number: $temp2"; echo '<br>';
                echo "<br>";
                break;
    
    }
}

?>