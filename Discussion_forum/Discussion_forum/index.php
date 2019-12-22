<?php require("header.php");

?>

<script type="text/javascript">
	document.getElementById("auhome").className="active";
</script>

                <div class="art-contentLayout">
                    <div class="art-content">
                        <div class="art-Post">
                            <div class="art-Post-tl"></div>
                            <div class="art-Post-tr"></div>
                            <div class="art-Post-bl"></div>
                            <div class="art-Post-br"></div>
                            <div class="art-Post-tc"></div>
                            <div class="art-Post-bc"></div>
                            <div class="art-Post-cl"></div>
                            <div class="art-Post-cr"></div>
                            <div class="art-Post-cc"></div>
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
`                            <h2 class="art-PostHeaderIcon-wrapper">
                                <img src="res/images/welcome.jpg" width="9" height="9" alt="PostHeaderIcon" />
                                <span class="art-PostHeader">Welcome</span>
                            </h2>
                            <div class="art-PostContent">
                                
                                
<p align="justify"><b>Techical</b> is a discussion forum that gives information about various programming languages, general knowledge related questions, information related to Asp.net,Vb.net,Php,Os related questions ,etc. </p>

<p align="justify">A forum to discuss/reveiw ONLY software and hardware products. All your 
                   queries about the same go into respective trouble shooting sections an QnA. your use and first-hand 
                   experiences on any software and hardware from the OSes to graphics cards are all welcome here</p> 


                                <p>
                                	<span class="art-button-wrapper">
                                		<span class="l"> </span>
                                		<span class="r"> </span>
                                		<a class="art-button" href="javascript:void(0)">Read more...</a>
                                	</span>
                                </p>
                                
                                   
                            </div>
                            <div class="cleared"></div>
                        </div>
                        
                            </div>
                        </div>
                        <div class="art-Post">
                            <div class="art-Post-tl"></div>
                            <div class="art-Post-tr"></div>
                            <div class="art-Post-bl"></div>
                            <div class="art-Post-br"></div>
                            <div class="art-Post-tc"></div>
                            <div class="art-Post-bc"></div>
                            <div class="art-Post-cl"></div>
                            <div class="art-Post-cr"></div>
                            <div class="art-Post-cc"></div>
                            <div class="art-Post-body">
                        <div class="art-Post-inner">
                            <h2 class="art-PostHeaderIcon-wrapper">
                                <img src="res/images/welcome.jpg" width="9" height="9" alt="PostHeaderIcon" />
                                <span class="art-PostHeader">Who uses our site?</span>
                            </h2>
                            <div class="art-PostContent">
                                
                                    
                                   
                                  <p align="justify">NOTE:The views/reviews contained within this section are purely opinions of the posters.
</p>
                                  
                                                                     
                                	<p>
                                		<span class="art-button-wrapper">
                                			<span class="l"> </span>
                                			<span class="r"> </span>
                                			<a class="art-button" href="javascript:void(0)">Join&nbsp;Now!</a>
                                		</span>
                                	</p>
                                    
                            </div>
                            <div class="cleared"></div>
                        </div>
                        
                            </div>
                        </div>
                    </div>
                    <div class="art-sidebar1">
                        <div class="art-Block">
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="art-header-tag-icon">
                                        <div class="t">Newsletter</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-tl"></div>
                                    <div class="art-BlockContent-tr"></div>
                                    <div class="art-BlockContent-bl"></div>
                                    <div class="art-BlockContent-br"></div>
                                    <div class="art-BlockContent-tc"></div>
                                    <div class="art-BlockContent-bc"></div>
                                    <div class="art-BlockContent-cl"></div>
                                    <div class="art-BlockContent-cr"></div>
                                    <div class="art-BlockContent-cc"></div>
                                    <div class="art-BlockContent-body">
                                        <div><form action="" method="get" id="newsletterform" action="javascript:void(0)">
                                        <input type="text" value="" name="email" id="s" style="width: 95%;" />
                                        <span class="art-button-wrapper">
                                        	<span class="l"> </span>
                                        	<span class="r"> </span>
                                        	<input class="art-button" type="submit" name="search" value="Subscribe"/>
                                        </span>
                                        </form></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="art-Block">
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="art-header-tag-icon">
                                        <div class="t">Log In</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-tl"></div>
                                    <div class="art-BlockContent-tr"></div>
                                    <div class="art-BlockContent-bl"></div>
                                    <div class="art-BlockContent-br"></div>
                                    <div class="art-BlockContent-tc"></div>
                                    <div class="art-BlockContent-bc"></div>
                                    <div class="art-BlockContent-cl"></div>
                                    <div class="art-BlockContent-cr"></div>
                                    <div class="art-BlockContent-cc"></div>
                                    <div class="art-BlockContent-body">
                                        <div>
                                        
                                        
                                        <script type="text/javascript">
										function check(f)
										{
											if(f.uid.value=="")	
											{
												document.getElementById("spuid").innerHTML="Please,Enter the user id ";
												//alert("Please,Enter Your User Id")
												f.uid.focus()
												return false;
												}
											else if(f.pwd.value=="")
												{
													document.getElementById("a").innerHTML="Please,Enter the password";
													//alert("Please,Enter Your Password")
													f.pwd.focus()
													return false;
													
													}	
												
												else
												return true;
											}
										
										
										</script>
                                        <form action="loginH.php" method="POST" onsubmit="return check(this)">
<table>
<tr><td>User Id:</td></tr><tr><td><input type="text" name="uid"><span id='spuid' style="color: red;"></span></td></tr>
<tr><td>Password:</td></tr><tr><td><input type="password" name="pwd"><span id='spuid' style="color: red;"></span></td></tr>
<tr><td><input type="submit" value="login"><input type="reset" value="cancel"></td></tr>
<tr><td><a href="register.php"><input type="button" value="Sign Up"></a></td></tr>
</table>

<?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Invalid User Id / password";
				
?>

</form>

                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="art-sidebar2">
                        <div class="art-Block" >
                            <div class="art-Block-body">
                                <div class="art-BlockHeader">
                                    <div class="l"></div>
                                    <div class="r"></div>
                                    <div class="art-header-tag-icon">
                                        <div class="t">Highlights</div>
                                    </div>
                                </div><div class="art-BlockContent">
                                    <div class="art-BlockContent-tl"></div>
                                    <div class="art-BlockContent-tr"></div>
                                    <div class="art-BlockContent-bl"></div>
                                    <div class="art-BlockContent-br"></div>
                                    <div class="art-BlockContent-tc"></div>
                                    <div class="art-BlockContent-bc"></div>
                                    <div class="art-BlockContent-cl"></div>
                                    <div class="art-BlockContent-cr"></div>
                                    <div class="art-BlockContent-cc"></div>
                                    <div class="art-BlockContent-body">
                                      <marquee direction="up" onmouseover="stop()" onmouseout="start()" scrollamount="1" scrolldelay="1" style="height:400px;">  <div>
                                                          <p><b>Oct 1, 2016</b><br/>
                                                          Aliquam sit amet felis. Mauris semper, 
                                                          velit semper laoreet dictum, quam 
                                                          diam dictum urna, nec placerat elit 
                                                          nisl in quam. Etiam augue pede, 
                                                          molestie eget, rhoncus at, convallis 
                                                          ut, eros. Aliquam pharetra.<br/>
                                                          <a href="javascript:void(0)">Read more...</a></p>
                                                          
                                                          <p><b>Dec 31, 2016</b><br/>
                                                          Reliance JioFi 4G portable hotspot launched, here’s how you can buy
                                                           It seems that Reliance is planning to completely win over the 
                                                            telecom industry.The company recently launched its Jio 4G services with some of the cheapest tariff plans. 
                                                            And now, it has unveiled the JioFi portable Wi-Fi hotspot. 
                                                             The device is priced at Rs 1,999 and comes with free 
                                                            Jio welcome offer till December 31, 2016. <br/>
                                                          <a href="javascript:void(0)">Read more...</a></p>
                                                          </div>
		</marquee>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cleared"></div><div class="art-Footer">
                    
                    <?php require("footer.php")?>