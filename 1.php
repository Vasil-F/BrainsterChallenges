<?php 

//function 1 decimal to binary
function DecToBin($n, $result, $br)
{
   if($n==0){
       return $result;
   }
   if($n%2==1){
       $result=$result+pow(10,$br);
       $br++;
       $n = $n/2;
       return DecToBin($n, $result, $br);
   }
   else{
       $br++;
       return DecToBin($n/2, $result, $br);
   }
} 
//main
(int)$decimal= rand(1,1000);
(int)$result=0;
$br=0; 

echo "Binary number for $decimal is ". DecToBin($decimal, $result, $br); 
echo '<br>';

// function 2 decimal to roman
function DecToRom($n){
    if($n>3999999){
        echo "Invalid number! $n should be below 3999999.";
        echo '<br>';
        return 0;
    }
    while($n!=0){
        switch($n){
            case ($n>=1000000): 
                echo "M|";
                $n-=1000000;
                break;
            case ($n>=900000): 
                echo "CM|";
                $n-=900000;
                break;
            case ($n>=500000): 
                echo "D|";
                $n-=500000;
                break;
            case ($n>=400000): 
                echo "CD|";
                $n-=400000;
                break;
            case ($n>=100000): 
                echo "C|";
                $n-=100000;
                break;
            case ($n>=90000): 
                echo "XC|";
                $n-=90000;
                break;
            case ($n>=50000): 
                echo "L|";
                $n-=50000;
                break;
            case ($n>=40000): 
                echo "XL|";
                $n-=40000;
                break;
            case ($n>=10000): 
                echo "X|";
                $n-=10000;
                break;
            case ($n>=9000): 
                echo "IX|";
                $n-=9000;
                break;
            case ($n>=5000): 
                echo "V|";
                $n-=5000;
                break;
            case ($n>=4000): 
                echo "IV|";
                $n-=4000;
                break;
            case ($n>=1000): 
                echo "M";
                $n-=1000;
                break;
            case ($n>=900): 
                echo "CM";
                $n-=900;
                break;
            case ($n>=500): 
                echo "D";
                $n-=500;
                break;
            case ($n>=400): 
                echo "CD";
                $n-=400;
                break;
            case ($n>=100): 
                echo "C";
                $n-=100;
                break;
            case ($n>=90): 
                echo "XC";
                $n-=90;
                break;
            case ($n>=50): 
                echo "L";
                $n-=50;
                break;
            case ($n>=40): 
                echo "XL";
                $n-=40;
                break;
            case ($n>=10): 
                echo "X";
                $n-=10;
                break;
            case ($n>=9): 
                echo "IX";
                $n-=9;
                break;
            case ($n>=5): 
                echo "V";
                $n-=5;
                break;
            case ($n>=4): 
                echo "IV";
                $n-=4;
                break;
            case ($n>=1): 
                echo "I";
                $n-=1;
                break;
            default: 
                echo "Error";
                break;
        }
    }
}
// function 2 recursive decimal to roman
function RecDecToRom($n, $result) {
    if($n>3999999){
        echo "Invalid number! $n should be below 3999999.";
        echo '<br>';
        return 0;
    }
    if($n==0){
        echo "$result";
        return 0;
    }
    switch($n){
        case ($n>=1000000): 
            $result=$result."M|";
            $n-=1000000;
            return RecDecToRom($n, $result);
            break;
        case ($n>=900000): 
            $result=$result."CM|";
            $n-=900000;
            return RecDecToRom($n, $result);
            break;
        case ($n>=500000): 
            $result=$result."D|";
            $n-=500000;
            return RecDecToRom($n, $result);
            break;
        case ($n>=400000): 
            $result=$result."CD|";
            $n-=400000;
            return RecDecToRom($n, $result);
            break;
        case ($n>=100000): 
            $result=$result."C|";
            $n-=100000;
            return RecDecToRom($n, $result);
            break;
        case ($n>=90000): 
            $result=$result."XC|";
            $n-=90000;
            return RecDecToRom($n, $result);
            break;
        case ($n>=50000): 
            $result=$result."L|";
            $n-=50000;
            return RecDecToRom($n, $result);
            break;
        case ($n>=40000): 
            $result=$result."XL|";
            $n-=40000;
            return RecDecToRom($n, $result);
            break;
        case ($n>=10000): 
            $result=$result."X|";
            $n-=10000;
            return RecDecToRom($n, $result);
            break;
        case ($n>=9000): 
            $result=$result."IX|";
            $n-=9000;
            return RecDecToRom($n, $result);
            break;
        case ($n>=5000): 
            $result=$result."V|";
            $n-=5000;
            return RecDecToRom($n, $result);
            break;
        case ($n>=4000): 
            $result=$result."IV|";
            $n-=4000;
            return RecDecToRom($n, $result);
            break;
        case ($n>=1000): 
            $result=$result."M";
            $n-=1000;
            return RecDecToRom($n, $result);
            break;
        case ($n>=900): 
            $result=$result."CM";
            $n-=900;
            return RecDecToRom($n, $result);
            break;
        case ($n>=500): 
            $result=$result."D";
            $n-=500;
            return RecDecToRom($n, $result);
            break;
        case ($n>=400): 
            $result=$result."CD";
            $n-=400;
            return RecDecToRom($n, $result);
        case ($n>=100): 
            $result=$result."C";
            $n-=100;
            return RecDecToRom($n, $result);
            break;
        case ($n>=90): 
            $result=$result."XC";
            $n-=90;
            return RecDecToRom($n, $result);
            break;
        case ($n>=50): 
            $result=$result."L";
            $n-=50;
            return RecDecToRom($n, $result);
            break;
        case ($n>=40): 
            $result=$result."XL";
            $n-=40;
            return RecDecToRom($n, $result);
            break;
        case ($n>=10): 
            $result=$result."X";
            $n-=10;
            return RecDecToRom($n, $result);
            break;
        case ($n>=9): 
            $result=$result."IX";
            $n-=9;
            return RecDecToRom($n, $result);
            break;
        case ($n>=5): 
            $result=$result."V";
            $n-=5;
            return RecDecToRom($n, $result);
            break;
        case ($n>=4): 
            $result=$result."IV";
            $n-=4;
            return RecDecToRom($n, $result);
            break;
        case ($n>=1): 
            $result=$result."I";
            $n-=1;
            return RecDecToRom($n, $result);
            break;
        default: 
            echo "Error";
            break;
    }
}
//main
$decimal= rand(1,10000000);
$result="";

if($decimal>3999999){
    echo "Invalid number! $decimal should be below 3999999.";
    echo '<br>';
}
else{
    echo "Roman number for $decimal is ";
    DecToRom($decimal);
    echo "<br>";
    echo "(Recursive) Roman number for $decimal is ";
    RecDecToRom($decimal, $result);
    echo '<br>';
}
echo '<hr>';


?>