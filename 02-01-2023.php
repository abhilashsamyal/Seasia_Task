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
// PHP code to find Maximum sum
// such that no two elements
// are adjacent

/* Function to return max sum
such that no two elements
are adjacent */
function FindMaxSum($arr, $n)
{
	$incl = $arr[0];
	$excl = 0;
	$excl_new;
	$i;

for ($i = 1; $i <$n; $i++)
{
	
	// current max excluding i
	 $excl_new = ($incl > $excl)? $incl: $excl;
                                  
	// current max including i
	$incl = $excl + $arr[$i];
	$excl = $excl_new;
}

// return max of incl and excl
return (($incl > $excl)? $incl : $excl);
}

// Driver Code
$arr = array (2, 4, 6, 2, 5);
$n = sizeof($arr);
echo FindMaxSum($arr, $n);
	
// This code is contributed by Ajit
?>
</body>
</html>
