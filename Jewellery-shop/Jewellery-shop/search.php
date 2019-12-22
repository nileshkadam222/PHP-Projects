<?php
			if($_REQUEST['Ptype']!="login")
			{
				$search="";
				$search_name=$_REQUEST['s_name'];
				if($_REQUEST['s_name']!="Jwellery+Name")
				$search_name="";
				if($_REQUEST['s_cat']!="")
				$search="and category in (select id from sub_category where parent_id=".$_REQUEST['s_cat'].")";
				
			$result=mysql_query("select * from jewellery where name like '%".$search_name."%' ".$search);
			$i=0;
			while($row1=mysql_fetch_array($result))
			{

			?>
			<DIV style="WIDTH: 250px; FLOAT:left;COLOR: #464646;
            BORDER-BOTTOM: #e5e5e5 1px solid; POSITION: relative; BORDER-LEFT:#e5e5e5 1px solid; MARGIN: 20px 0px 0px 15px;BORDER-TOP: #e5e5e5 1px solid; BORDER-RIGHT: #e5e5e5 1px solid; height:140px">
           	<img class="left" src="./<?php if (file_exists("photos/".$row1["path"])) echo "photos/".$row1["path"]; else echo "images/nophoto.gif"; ?>" height="110" width="95" align="top"/>
            <P><B>Price:</B> <B><?php echo $row1['price']; ?></B>.</P>
	 		<P><B>Description:</B><?php echo $row1['desc']; ?></P>
   	 		<P><B>Availability:</B> Usually ships within 24 hours</P>
           	<P align="center"><A href="buy.php?cat=<?php echo $_REQUEST['cat']."&amp;scat=".$_REQUEST['scat']."&amp;id=".$row1["id"]; ?>" ><font color="#FF9900">BUY <B>NOW</B></font></A></P>
		    </DIV><!-- end .leftbox -->
			
			<?			} }
		?>