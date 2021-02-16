<style>
body{
font-family: "Century Gothic", sans-serif;
}

form {
        max-width: 300px;
        margin: 120px auto;
        border: #ccc 1px solid;
        padding: 40px 100px;
}

input{
        width:30px;
        height: 30px;
}

button {
        height: 30px;
        padding: 5px;
        box-sizing: border-box;
        text-transform:uppercase;
        float: right;
}

p {
        text-align: center;
        margin: 20px auto;
        font-size: 20px;
}

p sub {
        color:red;
        font-size: 14px;
}
</style>

<form style="" method="get">
<p> ax<sup>2</sup> + bx + c = 0</p>
    <label>a </label>
    <input type="number" name="a" value="">
    <label>b </label>
    <input type="number" name="b" value="">
    <label>c </label>
    <input type="number" name="c" value="">    
    <button type="submit">submit</button>

<?php 

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $b**2 - 4 * $a * $c;

//echo $a . " " . $b . " " . $c;
echo "<p> D = " . $d . "</p>";

switch ($d <=> 0) 
    {
    case 1: 
            $x1 = ($b* -1 + sqrt ($d)) / 2 * $a;
            $x2 = ($b * -1 - sqrt ($d)) / 2 * $a;
            echo "<p>x<sub>1</sub> = " . $x1 . " x<sub>2</sub> = " . $x2 . "</p>";
            break;
    case 0: 
            $x1 = ($b* -1 + sqrt ($d)) / 2 * $a ;
            echo "<p>x<sub>1</sub> = " . $x1 . "</p>";
            break;        
    case -1: 
            echo "<p> Нет корней </p>";
            break;

    }        

            
?>
</form>