<?php
function DateThai($strDate){
    $strMonthCut = Array("", "ม.ค.", "ก.ม.", "มี.ค.","ม.ย.","พ.ค.","มิ.ย.","ก.ค.","ส.ค.","ก.ย.","ต.ค.","พ.ย.","ธ.ค.");

    $inputDate = array(
      'year'   => date("Y",strtotime($strDate))+543,
  		'month'  => date("n",strtotime($strDate)),
  		'day'    => date("j",strtotime($strDate)),
  		'hour'   => date("H",strtotime($strDate)),
  		'minute' => date("i",strtotime($strDate)),
  		'seconds' => date("s",strtotime($strDate)),
      'monthThai' => $strMonthCut[date("n",strtotime($strDate))],
    );

    if(isset($strDate)){
      if ($inputDate['hour'] == "00" || $inputDate['hour'] == "0") {
        $strNew =  $inputDate['day'] ." ". $inputDate['monthThai'] ." ". $inputDate['year'];
      } else {
        $strNew =  $inputDate['day'] ." ". $inputDate['monthThai'] ." ". $inputDate['year'] ." เวลา ". $inputDate['hour'] .":". $inputDate['seconds'];
      }
    }else {
      $strNew = null;
    }
    return $strNew;
}
?>
