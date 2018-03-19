<?
function formatDate($val) {
   $arr = explode("-", $val);
   return date("d M Y", mktime(0,0,0, $arr[1], $arr[2], $arr[0]));
}
?>
