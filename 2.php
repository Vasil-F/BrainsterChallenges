<?php

// function 3 binary to decimal
function BinToDec($n, $result, $br){
    if($n==0) {
        return $result;
    }
    if($n%10==1){
        $result=$result+pow(2,$br);
        $br++;
        return BinToDec($n/10, $result, $br);
    }
    else{
        $br++;
        return BinToDec($n/10, $result, $br);
    }
}

// main
(int)$binary=1101;
(int)$result=0;
$br=0; 
echo "Decimal number for $binary is ". BinToDec($binary, $result, $br);
echo '<br>';

function value($v)
{
    switch($v){
        case 'I': return 1; break;
        case 'V': return 5; break;
        case 'X': return 10; break;
        case 'L': return 50; break;
        case 'C': return 100; break;
        case 'D': return 500; break;
        case 'M': return 1000; break;
        default: return -1; 
    }
}

// function 4 roman to decimal 

function RomToDec(string $n)
{
    $result = 0;
    for ($i = 0; $i < strlen($n); $i++){
        //Getting value of n[i]
        $s1 = value($n[$i]);
        
        if ($i+1 < strlen($n)) //checking if $i+1 is not the last letter
        {
            // Getting value of symbol n[i+1]
            $s2 = value($n[$i + 1]);


            // Comparing both values
            if ($s1 >= $s2) //in cases of ix, iv...
            { 

                // Value of current symbol 
                // is greater or equal to 
                // the next symbol 

                $result = $result + $s1; 

            }
            else{ 

                $result = $result + $s2 - $s1;
                // primer 9=10-1 => x - i => ix                
                $i++;
            } 

        }
        else{
            // we have reached the last Roman letter
            // so we should add it to the result
            $result = $result + $s1;
            $i++; 

        } 

    }
    return $result;
}
//main
$roman = "MMCL";
$result=RomToDec($roman);
echo "Decimal number for $roman is $result";
echo '<br>';
echo '<hr>';

