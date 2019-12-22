<?php
session_start();
if(isSet($_SESSION['user']))
{
	include "header1.php";
}
else
{
	include "header.php";
}
?>
		<!-- Start of Item 1 Description -->

		<div id="new_item">
			<div id="new_item_link">
			<a href="saries.php">Saris ...</a>
			</div>
			
			<div id="new_item_image">
			<img src="images/sari.gif" width="200" height="200" alt="Saris" />
			</div>

			<div id="new_item_text">
<p>Today's bride is more likely to wear a Indian sari or bollywood sari in regular life</p>
<p>and also like to wear a bridal sari or fancy sari Desiner Sari to her wedding And Most of always like to wear Wedding on Merrage. </p>
			</div>
			<div class="clearthis">&nbsp;</div>
			<div>
			<img src="images/line.gif" width="700" alt="Saris" />
			</div>
		</div>

		<!-- End of Item 1 Description -->

		<!-- Start of Item 2  Description -->

		<div id="new_item1">

			<div id="new_item_image1">
			<img src="images/dress.gif" width="200" height="170" alt="Dress" />
			</div>

			<div id="new_item_link1">
			<a href="dress.php">... Dress</a>
			</div>
			
			
			<div id="new_item_text1">
<p>Today the  stands as the second most popular dress in most parts of India after Saris.
The Indian Salwar Kameez is designed keeping in mind the structure of Indian women.</p>
<p>The Indian salwaar kameez consists of 3 elements in it's creation namely the kurta, salwaar and a dupatta.
There are so many Indian fashion designers and fashion boutiques it becomes difficult to choose from amongst them. 
</p>
			</div>
			
			<div class="clearthis">&nbsp;</div>
			<div>
			<img src="images/line.gif" width="700" alt="Saris" />
			</div>
		</div>

		<!-- End of Item 2  Description -->
		<!-- Start of Item 3 Description -->

		<div id="new_item">

			<div id="new_item_link">
			<a href="choli.php">Choli ...</a>
			</div>
			
			<div id="new_item_image">
			<img src="images/choli.gif" width="200" height="150" alt="Choli" />
			</div>

			<div id="new_item_text">
<p>Today's bride is more likely to wear a Lehnga Choli to her wedding than a bridal sari due to the intense weight of bridal saris. Women of all ages also love Lehnga Choli for formal occasions and dress occasions.</p>
<p>Extremely beautiful and flattering to all female shapes, these suits are often HAND decorated in the traditional designs of India such as zarcosi and soonf embroidery.</p>
			</div>
			<div class="clearthis">&nbsp;</div>
			<div>
			<img src="images/line.gif" width="700" alt="Choli" />
			</div>
		</div>

		<!-- End of Item 3 Description -->

		<!-- Start of Item 4  Description -->

		<div id="new_item1">

			<div id="new_item_image1">
			<img src="images/jewelari.gif" width="200" height="150" alt="Jewelary" />
			</div>

			<div id="new_item_link1">
			<a href="jewelary.php">... Jewelary</a>
			</div>
			
			
			<div id="new_item_text1">
		<P>We see the girl or woman to wear Jewelary with sari or dress or choli.</P>
		<p>Jewelari is the most popular for its desings which can be wear with sari, dress, Choli</p>
			</div>	
			<div class="clearthis">&nbsp;</div>
			<div>
			<img src="images/line.gif" width="700" alt="Jewelary" />
			</div>
		</div>

		<!-- End of New Item Description -->
	
<?
include "footer.php";
?>
</div>
</body>
</html>