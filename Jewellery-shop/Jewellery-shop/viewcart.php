<?php 
	session_start();
	if($_SESSION['id']>0)
	{
		if($_REQUEST['deleteid']!="")
		{
			$result=mysql_query("delete from cart where cust_id=".$_SESSION['id']." and jewel_id=".$_REQUEST['deleteid']);
		}
			$result=mysql_query("select jewel_id,sum(qty) as qty from cart where cust_id=".$_SESSION['id']." group by jewel_id ");
			$i=0;
			while($row=mysql_fetch_array($result))
			{
			$sql="select * from jewellery where id=".$row['jewel_id'];
			$result1=mysql_query($sql);
			$row1=mysql_fetch_array($result1);
			?>
			<DIV style="WIDTH: 250px; FLOAT:left;COLOR: #464646;
            BORDER-BOTTOM: #e5e5e5 1px solid; POSITION: relative; BORDER-LEFT:#e5e5e5 1px solid; MARGIN: 20px 0px 0px 15px;BORDER-TOP: #e5e5e5 1px solid; BORDER-RIGHT: #e5e5e5 1px solid; height:140px">
           	<img class="left" src="./<?php if (file_exists("photos/".$row1["path"])) echo "photos/".$row1["path"]; else echo "images/nophoto.gif"; ?>" height="110" width="95" align="top"/>
            <P><B>Price:</B> <B><?php echo $row1['price']; ?></B>.</P>
	 		<P><B>Description:</B><?php echo $row1['desc']; ?></P>
   	 		<P><B>Availability:</B> Usually ships within 24 hours</P>
			<P><B>Qty: </B><?php echo $row['qty']; ?></P>
		  	<P align="center">
            <A href="index.php?Ptype=viewcart&deleteid=<?php echo $row1["id"]; ?>" ><B><font color="#FF6600">Remove</font></B></A></P>
		    </DIV><!-- end .leftbox -->
			
			<?			
			} 
	}
		
		?>
		
        