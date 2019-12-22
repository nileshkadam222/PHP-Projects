<DL id="browse">
  <DT>Main Category Lists</DT>
  <?php 
  	$result=mysql_query("select * from category");
	while($row=mysql_fetch_array($result))
	{
?>
  <DD><A href="index.php?cat=<?php echo $row['id']; ?>"><?php echo $row['cate_name']; ?></A></DD>
<?php } ?>
	 <DT>Sub Category List</DT>
  <?php 
  	$p_id=$_REQUEST['cat']==""?1:$_REQUEST['cat'];

	$result=mysql_query("select * from sub_category where parent_id=".$p_id);
	while($row=mysql_fetch_array($result))
	{
  ?>
	  <DD><A href="index.php?cat=<?php echo $row['parent_id']."&amp;scat=".$row['id']; ?>"><?php echo $row['scate_name']; ?></A></DD>
	<? } ?>

  <DT>Search</DT>
  <DD class=searchform>
  <script language="javascript">
  function jname()
  {
	document.search_jwel.s_name.value="";
  }
  </script>
  <form action="index.php" method="get" name="search_jwel">
  <input type="hidden" name="Ptype" value="search" />
  	<DIV>
    <SELECT name="s_cat"> 
		<OPTION value="">CATEGORIES</OPTION> 
		<?php  $result =mysql_query("select * from category");
			while($row=mysql_fetch_array($result))
			{
				echo "<option ";
				if($_REQUEST['s_cat']==$row['id']) echo "selected='selected'";
				echo "value=".$row['id'].">".$row['cate_name']."</opton>";
			}
		?>
    </SELECT>
    </DIV>
  	<DIV>
    <INPUT value="Jwellery Name" type="text" name="s_name" onclick="jname()">
    </DIV>  	<DIV class=softright>
		    <img src="images/search.gif" onclick="javascript:SubmitSearch()" />
    </DIV>
  </form>
  </DD>
</DL>