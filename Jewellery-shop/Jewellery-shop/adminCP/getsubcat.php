<?
include("../include/config.php"); 
$id=$_REQUEST['q'];
//echo "$id";
 ?> 
<select name="txtscat" style="width:150px; height:22px">
      <option value="0" >Select Option</option>
      <?php 
				   $SqlPatenid="select * from sub_category where parent_id='".$id."'"; 
				    $SelectPID=mysql_query($SqlPatenid);
		 			 while($rowPID=mysql_fetch_array($SelectPID))
					 {
						 echo "<option value='".$rowPID['id']."' ";
						if($_REQUEST['_Pa']=="Edit" && $_REQUEST['pid']==$rowPID['id'])
						{
							echo "selected='selected' ";
						}
						 echo ">".$rowPID['scate_name']."</option>>";
					 }
				  ?>
    </select>



