<?php
include ('applying.php');
  if(isset($_POST['submit']))
  {
    // echo "Click";
    $c1 = $obj->sanitize($conn,$_POST['c1']);
    $c2 = $obj->sanitize($conn,$_POST['c2']);
    $amt = $obj->sanitize($conn,$_POST['amt']);
    $date = date('Y-m-d H:i:s');

    $tbl_name = 'transaction';

    $data= "
      c1 = '$c1',
      c2 = '$c2',
      amt = '$amt',
      date = '$date'
    ";

    $query = $obj->insert_data($tbl_name,$data);

    $res = $obj->execute_query($conn,$query);

      $tbl_name1 = 'customer';
    	$where = "name='$c1'";
    	$query = $obj->select_data($tbl_name1,$where);
    	$res1 = $obj->execute_query($conn,$query);
      $sn = 1;

    	if($res1)
    	{
        $row=$obj->fetch_data($res1);
        $decrease = $row['balance']-$amt;
        echo $decrease;

        $tbl_name1 = 'customer';

    $data= "
    	balance = '$decrease'
    ";
    $where = "name='$c1'";

    $query = $obj->update_data($tbl_name1,$data,$where);

    $res = $obj->execute_query($conn,$query);

      }

      $tbl_name1 = 'customer';
    	$where = "name='$c2'";
    	$query = $obj->select_data($tbl_name1,$where);
    	$res1 = $obj->execute_query($conn,$query);
      $sn = 1;

    	if($res1)
    	{
        $row=$obj->fetch_data($res1);
        $increase = $row['balance']+$amt;

        $tbl_name1 = 'customer';

    $data= "
    	balance = '$increase'
    ";
    $where = "name='$c2'";

    $query = $obj->update_data($tbl_name1,$data,$where);

    $res = $obj->execute_query($conn,$query);

    echo"<script type='text/javascript' > alert(' Transaction successful!! ');</script>";
    header("Location:transaction.php");

      }

    }
    else{
      echo"<script type='text/javascript' > alert(' No transaction');</script>";
    }

?>
