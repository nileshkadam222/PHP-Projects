<%@ Page Language="C#" MasterPageFile="~/Home.master" AutoEventWireup="true" CodeFile="Home.aspx.cs" Inherits="home" Title="Mobile Shope - Home Page" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    
    <asp:Panel ID="Panel1" runat="server">
            <style>
.messagestyle{
	font-family:Arial;
	font-size:11px;
	color:white;
	background-color:#888888;
	text-align:center;
	position:absolute;
	bottom:0px;
	vertical-align:middle;
	margin:0px;
	line-height:15px;
	height:17px;
}

</style>
<script>
var pictures = [
    { src : 'images/1.jpg',
     
    },
    { src : 'images/2.jpg',
       
    },
    { src : 'images/3.jpg',
       
    },
    { src : 'images/4.gif',
        
    },
    
//    { src : 'images/i7.jpeg',
//        msg : 'My chess set',
//        url : '#'
//    }
];

// target of the picture-links ("_blank", "_top", "_self", "_parent" or "nameOfYourFrame")
var target_url="_blank"
var x_slices=8
// width of slideshow
var slideshow_width=400
// height of slideshow
var slideshow_height=300
// height of messagebox
var message_height=17
// pause beween the pictures (seconds)
var pause=1
// - End of JavaScript - -->
</script>
<script src="slideshow-lamellar.js"></script>
             <br /><br />
             <p><strong>About The mobileshop</strong>
              <br/><br/>The mobileshop format is a <strong>one stop mobile solution shop</strong>
                that provides, multi brand handsets, accessories, connections, repairs, VAS etc all under one roof.
     </p>
        <p>
                <strong>The mobileshop</strong> currently has over 1300 outlets and the vision 
                is to have a network of 1500 stores by 2011 across 200 cities, thus covering 
                 virtually every major town in every state across India.
        </p> 
        <p>
                <strong>The mobileshop</strong> outlets are in three formats: Large - 1000-1500 
                square feet, Medium - 800-1000 square feet and small - 150-200 square feet. Key 
                thrust areas for the retail format are: Comprehensive Product Range, 
                Knowledgeable Store Staff &amp; Interactive Environment, Competitive Prices and 
                Handset Repairs.
         </p>
         <p>
                The mobileshop caters to the Indian consumer‘s choice of the widest and most 
                comprehensive range of mobile phones with special offers from all the key brands 
                available across the globe. The mobileshop offers complete telecom solutions 
                right from handset purchase to the choice of service operator and miscellaneous 
                services like monthly bill collections etc.,wallpapers and gaming and prompt 
                after sales service, available not only in the city of purchase but in all The 
                mobileshop outlets across the country.
         </p>
            <p>
                The mobileshop has undertaken an extensive training program to equip all its 
                employees with in-depth knowledge of the products and brands available at the 
                store, thereby allowing them to provide the right kind of guidance to the 
                customer.
            </p>
            
            <p>
                The mobileshop has categorized its mobile device offerings into consumer 
                segments keeping in mind the profiles and needs of different consumers. The 
                unique segments available in The mobileshop are: <strong>Business</strong> - PDA 
                &amp; Smartphones, Emails, data transfer etc., <strong>Lifestyle</strong> - Fashion 
                phones, Look and elegance, <strong>Fun</strong> - Multimedia &amp; music, camera, 
                games, <strong>Value for Money</strong> - Special offers, discounts and budget 
                phones.
            </p>
            <p>
                All major handset brands like Nokia, Sony Ericsson, LG, Samsung, Motorola, Fly, 
                Sagem, HP, iMate, Dopod, HTC and Blackberry are available at the store. The 
                mobileshop has also tied up with all leading operators including Airtel, 
                Vodafone, BPL, Idea, MTNL/BSNL and Reliance, Tata Indicom.
           </p>      
            <br />
           <p>
      <marquee>
           <asp:ImageButton runat="server" alt="Nokia" src="images/nokia-logo.gif" style="margin: 0px 
                10px;" align="middle" height="80px" width="120px"></asp:ImageButton>
	     
            <asp:ImageButton runat="server" alt="Sony Ericsion" src="images/Sony-Ericsson.gif" style="margin: 0px 10px;" 
                align="middle" height="80px" width="120px"></asp:ImageButton>
	        <asp:ImageButton runat="server" alt="apple" src="images/apple-logo.png" style="margin: 0px 
                10px;" align="middle" height="80px" width="120px"></asp:ImageButton>
	        <asp:ImageButton runat="server" alt="Mototrola" src="images/M_logo.gif" style="margin:
                0px 10px;" align="middle" height="80px" width="120px"></asp:ImageButton>
            <asp:ImageButton runat="server" alt="samsung" src="images/samsung-logo.gif" style="margin: 0px 
                10px;" align="middle" height="80px" width="120px"></asp:ImageButton>
	        <asp:ImageButton runat="server" alt="Micromax" src="images/micromax-logo.gif " style="margin:
                0px 10px;" align="middle" height="80px" width="120px"></asp:ImageButton>
	        <asp:ImageButton runat="server" alt="spice" src="images/spice-logo.gif " style="margin: 
                0px 10px;" align="middle" height="80px" width="120px"></asp:ImageButton>	
    </marquee>
            </p>
        <p></p>
    </asp:Panel>    
</asp:Content>

