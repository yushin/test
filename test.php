<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?
$atime="2014-06-24 10:00:00"; 
$btime="2014-06-24 10:00:08"; 


$time = strtotime($btime) - strtotime($atime);
echo ($time)."秒<br>"; 
echo ($time/60)."分<br>"; //計算相差幾分 
echo (($time)/3600)."小時"; //計算相差幾小時 
?>
<title>計算時間差</title>
<br>
<?
echo $time."<br>";
$time0 = explode(".",($time)/3600);
echo "取得 ".$time0[0]." 小時<br>";
$time1 = substr($time0[1],0,2);
$time1 = explode(".",$time1/100*60);
echo "取得 ".$time1[0]." 分鐘<br>";

$time3 = $time%3600;
$time3 = $time%60;
//$time3 = substr($time,-1,2);
echo "取得 ".$time3." 秒鐘";



?>
