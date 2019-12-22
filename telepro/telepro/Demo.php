<?php

$bill_month=date("m", strtotime($bill_date));
$query="select bill_id from create_bill where ca_number=$ca_number AND (month(bill_date))=$bill_month";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
if($num==0){
   $query="INSERT INTO bill(ca_number,landline,bill_date,call_charge,plan,service_tax,due_date,total_bill,status) VALUES($ca_number,$landline,'$bill_date',$call_charge,$plan,$service_tax,'$due_date',$total_bill,'unpaid')";
		$result=mysqli_query($conn,$query);
						
                if($result)
                {
                $num=mysqli_affected_rows($conn);
		if($num==1){
		$msg= "Bill Created !!!!!!!";
		mysqli_close($conn);
                }
		else{
		$err_msg="Record not saved..Try again";	
		}
		
                
		}
                else{ $err_msg= "Something Went wrong...Try again !!";
                    
                } 
}
else{
    $err_msg="Cannot generate bill..Bill is already generated..";	
}


/*

                $time = strtotime($bill_date);
                $due_date=date("Y-m-d", strtotime("+1 month", $time));
                echo $bill_date."/n";
                
                echo $due_date;
*/
?>