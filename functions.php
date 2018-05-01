<?php
$debug=[];
$count=0;
function add_checkpoint($check){
  global $count;
  global $debug;
  $debug[$count]=$check;
  $count++;

}

function alert_checkpoint($check)
{

  ?>
    <script>
      alert("<?=$check;?>");
    </script>
  <?
}

?>
