<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Book Store</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />







<script type = "text/javascript">
	
		function validate()
	 	 {
			var x=document.forms["login"]["email"].value;
			var y=document.forms["login"]["password"].value;
			var atpos=x.indexOf("@");
			var dotpos=x.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
 			 {
  				alert("Not a valid e-mail address");
  				return false;
 			 }
			else {
				if (y.length<8)
 				 {
  					alert("Not a valid password");
  					return false;
 				 }
			}
			
		  }
		
	</script>









</head>




<body>
<div id="container">
  <div id="menu">
    <ul>
      <li><a href="home" class="current">Home</a></li>

      <li><a href="subpage.html">Product</a></li>
      <li><a href="http://www.free-css.com/">Books</a></li>
      <li><a href="http://www.free-css.com/">New Releases</a></li>
      <li><a href="http://www.free-css.com/">Creata Publications</a></li>
      <li><a href="http://www.free-css.com/">Our Service</a></li>
      <li><a href="http://www.free-css.com/">History</a></li>
      <li><a href="http://www.free-css.com/">Gallery</a></li>
      <li><a href="http://www.free-css.com/">Contact Us</a></li>
    </ul>

  </div>
  <!-- end of menu -->
  <div id="header">
    <div id="special_offers">
      <p> <span>25%</span> discounts for October </p>
      <a href="http://www.free-css.com/" style="margin-left: 50px;">Read more...</a> </div>

    <div id="new_books">
      <ul>
        <li>Science Fiction</li>
        <li>Novels</li>
        <li>Encyclopedia</li>
      </ul>
      <a href="http://www.free-css.com/" style="margin-left: 50px;">Read more...</a> </div>

  </div>
  <!-- end of header -->
  <div id="content">
    <div id="content_left">


      <div class="content_left_section">
        <h1><a href="register.html"> Register </a>/ <a href="login.html"> Login </a></h1>
        
      </div>


	<div class="content_left_section">
        <h1><a href="search.html"> Search Book </a></h1>
        
      </div>


	<div class="content_left_section">
        <h1>Categories</h1>
        <ul>
          <li><a href="http://www.free-css.com/">Biagraphy</a></li>

          <li><a href="http://www.free-css.com/">Drama</a></li>
          <li><a href="http://www.free-css.com/">Health</a></li>
          <li><a href="http://www.free-css.com/">History</a></li>
          <li><a href="http://www.free-css.com/">Music</a></li>
          <li><a href="http://www.free-css.com/">Science</a></li>
          <li><a href="http://www.free-css.com/">Novels</a></li>

          <li><a href="http://www.free-css.com/">Politics</a></li>
          <li><a href="http://www.free-css.com/">Sport</a></li>
        </ul>
      </div>



      <div class="content_left_section">
        <h1>Bestsellers</h1>
        <ul>

          <li><a href="http://www.free-css.com/">Harry potter</a></li>
          <li><a href="http://www.free-css.com/">Lord of the rings</a></li>
          <li><a href="http://www.free-css.com/">Emma</a></li>
          <li><a href="http://www.free-css.com/">Sri Lanka</a></li>
          <li><a href="http://www.free-css.com/">Maece nas metus</a></li>
          <li><a href="http://www.free-css.com/">In sed risus ac feli</a></li>

          <li><a href="http://www.free-css.com/">Flash Templates</a></li>
          <li><a href="http://www.free-css.com/">CSS Templates</a></li>
          <li><a href="http://www.free-css.com/">Web Design</a></li>
          <li><a href="http://www.free-css.com/">Free Photos</a></li>
        </ul>
      </div>
      <div class="content_left_section"> <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="images\image_03.jpg" alt="" width="88" height="31" vspace="8" border="0" /></a> <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="" vspace="8" border="0" /></a> </div>

    </div>
    <!-- end of content left -->




















    <div id="content_right">
  

<?php

EXTRACT( $_POST );

$query = "SELECT  *  FROM detail WHERE category = '$select' " ;

if ( !( $database = mysql_connect( "localhost", "root", "1234" ) ) )                           
           die( "Could not connect to database" );


if ( !mysql_select_db( "bookshop", $database ) )
               die( "Could not open bookshop database" );

$result = mysql_query( $query, $database );

   

 for ( $counter = 0; 
                  $row = mysql_fetch_row( $result );
                  $counter++ )
{
 	print( " &nbsp &nbsp &nbsp<img src=\"ssss.png\" /> </br>" );
                  foreach ( $row as $key => $value ) 
                     print( "&nbsp &nbsp &nbsp $value   </br>" );
	
	print( " </br>" );

}

mysql_close( $database );

?>




        </div>
        <div class="cleaner">&nbsp;</div>
      </div>
      <div class="cleaner_with_height">&nbsp;</div>

       </div>
    <!-- end of content right -->

















    <div class="cleaner_with_height">&nbsp;</div>
  </div>
  <!-- end of content -->
  <div id="footer"> <a href="http://www.google.com/">Home</a> | <a href="http://www.yahoo.com/">Search</a> | <a href="http://www.yahoo.com/">Books</a> | <a href="http://www.yahoo.com/">New Releases</a> | <a href="http://www.yahoo.com/">FAQs</a> | <a href="http://www.yahoo.com/">Contact Us</a><br />

    Copyright &copy; RUSL <a href="http://www.yahoo.com/"><strong>Your Company Name</strong></a> | Designed by <a href="http://www.yahoo.com">RUSL Applieds</a> </div>
  <!-- end of footer -->
</div>
<!-- end of container -->
</body>
</html>
