<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php  
// A naive recursive PHP implementation  
// to count number of decodings that can 
// be formed from a given digit sequence 
  
// Given a digit sequence of length n,  
// returns count of possible decodings by  
// replacing 1 with A, 2 woth B, ... 26 with Z 
function countDecoding($digits, $n) 
{ 
    // base cases 
    if ($n == 0 || $n == 1) 
        return 1; 
  
    $count = 0; // Initialize count 
  
    // If the last digit is not 0, then last  
    // digit must add to the number of words 
    if ($digits[$n - 1] > '0') 
        $count = countDecoding($digits, $n - 1); 
  
    // If the last two digits form a number  
    // smaller than or equal to 26, then  
    // consider last two digits and recur 
    if ($digits[$n - 2] == '1' ||  
       ($digits[$n - 2] == '2' &&  
        $digits[$n - 1] < '7') ) 
        $count += countDecoding($digits, $n - 2); 
  
    return $count; 
} 
  
// Driver Code 
$digits = "222"; 
$n = strlen($digits);

echo "Count is " . countDecoding($digits, $n); 
  
// This code is contributed by ita_c 
?>

</body>
</html>