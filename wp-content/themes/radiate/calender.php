<?php

$weekDay  = array( 'S', 'M', 'T', 'W', 'T', 'F', 'S');
$argMonth = array( "01" => "January", "02" => "February", "03" => "March", "04" => "April",
      "05" => "May","06" => "June", "07" => "July", "08" => "August",
      "09" => "September", "10" => "October", "11" => "November", "12" => "December");

//Sun - Sat
$month = isset($_GET['month']) ? $_GET['month'] : date('m'); //ถ้าส่งค่าเดือนมาใช้ค่าที่ส่งมา ถ้าไม่ส่งมาด้วย ใช้เดือนปัจจุบัน
$year = isset($_GET['year']) ? $_GET['year'] : date('Y'); //ถ้าส่งค่าปีมาใช้ค่าที่ส่งมา ถ้าไม่ส่งมาด้วย ใช้ปีปัจจุบัน

//วันที่
$startDay = $year.' '.$argMonth[$month];   //วันที่เริ่มต้นของเดือน

$timeDate = strtotime($startDay);   //เปลี่ยนวันที่เป็น timestamp
$lastDay = date("t", $timeDate);   //จำนวนวันของเดือน

$endDay = $year.'-'.$month."-". $lastDay;  //วันที่สุดท้ายของเดือน

$startPoint = date('w', $timeDate);   //จุดเริ่มต้น วันในสัปดาห์

$title = "<strong>". $argMonth[$month]. " ". $year."</strong>";

$prevMonTime = strtotime ( '-1 month' , $timeDate  );
$prevMon = date('m', $prevMonTime);
$prevYear = date('Y', $prevMonTime);
//เพิ่มเวลาขึ้น 1 เดือน
$nextMonTime = strtotime ( '+1 month' , $timeDate  );
$nextMon = date('m', $nextMonTime);
$nextYear = date('Y', $nextMonTime);

$headstyle = "style='color: #fff;'";
?>

<style type="text/css">

table#wp-calendar th
{
  border: 0px;
  text-align: center;
}

table#wp-calendar td{
  border: 0px;
  text-align: center;
}

table tr{
  color: #fff;
}

.badge{
  color: #000;
  background-color: #FFBF00;
  font-size: 90%;
  padding: 3px 3px 4px 4px;
  text-align: center;

}
.widget{

}

</style>

<div class="widget-area" role="complementary" style="width: 100%;">
  <aside id="calendar-2" class="widget widget_calendar" style="margin-bottom: 0px;">
    <div id="calendar_wrap" class="calendar_wrap">
      <table id="wp-calendar">
        <h5><span class='badge' style="width: 100%; margin-bottom: 55px; 
           background-color: #FFBF00; color: #000;"><?= $title ?></span></h5>
        <thead>
        <tr>
          <th scope="col" title="Sunday" <?= $headstyle ?> >S</th>
          <th scope="col" title="Monday" <?= $headstyle ?> >M</th>
          <th scope="col" title="Tuesday" <?= $headstyle ?> >T</th>
          <th scope="col" title="Wednesday" <?= $headstyle ?> >W</th>
          <th scope="col" title="Thursday" <?= $headstyle ?> >T</th>
          <th scope="col" title="Friday" <?= $headstyle ?> >F</th>
          <th scope="col" title="Saturday" <?= $headstyle ?> >S</th>
        </tr>
        </thead>

        

        <tbody>
        <?php
          $col = $startPoint;          //ให้นับลำดับคอลัมน์จาก ตำแหน่งของ วันในสับดาห์ 
          if($startPoint < 7){         //ถ้าวันอาทิตย์จะเป็น 7
            echo str_repeat("<td> </td>", $startPoint); //สร้างคอลัมน์เปล่า กรณี วันแรกของเดือนไม่ใช่วันอาทิตย์
          }

          for($i=1; $i <= $lastDay; $i++){ 
            $col++;

            if( $i == date('d') ){ $active = "<span class='badge'>".$i."</span>"; }else{ $active = $i; }
            
            echo "<td>". $active ."</td>";
            
            if($col % 7 == false){
              echo "</tr><tr>";
              $col = 0;
            }
          }

          if($col < 7){
            echo str_repeat("<td> </td>", 7-$col);
          }
        ?>
        </tbody>
      </table>
    </div>
  </aside>  
</div>

<script type='text/javascript'>
    function goTo(month, year){
   window.location.href = "day_of_week.php?year="+ year +"&month="+ month;
    }
 </script>