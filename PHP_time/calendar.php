
<style>
    table, td{
        border: 1px solid grey;
        text-align:center;
    }
    tr{background-color:lightyellow;}

</style>

<h3>CALENDAR</h3>


<?php

$theMonth=strtotime("2024-02-25");
$month=date("n",$theMonth);
$days=date("t",$theMonth);
$_1stDay=date('Y-n-1', $theMonth);
$_1stDayWeek=date("w", strtotime($_1stDay));
$lastDay=date("Y-n-t", $theMonth);
$lastDayWeek=date("w", strtotime($lastDay));
$Weeks=ceil(($days+$_1stDayWeek)/7);  // (31-(7-6))/7+1 = (31+6)/7
$tmp=1;

echo "月數：".$month."<br>";
echo "天數：".$days."<br>";
echo "第一天：".$_1stDay."<br>";
echo "第一天週幾：".$_1stDayWeek."<br>";
echo "最後一天：".$lastDay."<br>";
echo "最後一天週幾：".$lastDayWeek."<br>";
echo "共有幾週：".$Weeks."<br>";


echo "<h3>以for迴圈執行</h3>";

echo "<table>";
    echo "<tr>";
        echo "<td>日</td>";
        echo "<td>一</td>";
        echo "<td>二</td>";
        echo "<td>三</td>";
        echo "<td>四</td>";
        echo "<td>五</td>";
        echo "<td>六</td>";
    echo "</tr>";

for($wk=0; $wk<$Weeks; $wk++){
    echo "<tr>";

        for($d=0; $d<7; $d++){ 
            echo "<td>";
                if (($wk==0)&&$d< $_1stDayWeek){
                    echo "-";
                }
                else if(($wk==0)&&$d>= $_1stDayWeek){
                    echo $tmp;
                    $tmp++;
                    }
                else if(($wk!=0)&&($tmp <= $days)){
                    echo $tmp;
                    $tmp++;
                    }
                else{echo "-";}

            echo "</td>";
        }
                           
    echo "</tr>";
}

echo "</table>";
?>

<br><hr><br>
