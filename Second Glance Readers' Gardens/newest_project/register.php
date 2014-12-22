<html>

	<head>
		<title>Second Glance Book Publishers</title>
		
		<link href="style.css" rel="stylesheet" type="text/css" />

	</head>

	<body>
		<div id="container">

  <!-- start of menu -->
  			<div id="menu">
    				<ul>
      					<li><a href="home.html" class="current">Home</a></li>
					<li><a href="subpage.html">Publications</a></li>
      					<li><a href="new.html">New Releases</a></li>
      					<li><a href="about.html">About Us</a></li>
      					<li><a href="services.html">Our Services</a></li>
      					<li><a href="histry.html">History</a></li>
      					<li><a href="gallery.html">Gallery</a></li>
      					<li><a href="contact.html">Contact Us</a></li>
					<li><a href="comment.html">Comment</a></li>
    				</ul>

  			</div>
  <!-- end of menu -->

 <!-- start of header -->

  			<div id="header">
    				<div id="special_offers">
      					<p> <span>25%</span> discounts for the reading- month October </p>
      					<a href="readermonth.html" style="margin-left: 50px;">Read more...</a>
				</div>

    				<div id="new_books">
      					<ul>
        					<li>Science Fictions</li>
        					<li>Politics</li>
        					<li>Encyclopedia</li>
      					</ul>

      					<a href="new.html" style="margin-left: 50px;">Read more...</a> </div>

  				</div>
  <!-- end of header -->



  			<div id="content">

				<form name="booksearch">
					<font color=" #e6e154" size="5pt">Search  </font>
					
					
					<input type="text" name="search" size="70"/></span>
					<input type="submit" value="Go" style="color:Black"/>
											
				</form>

				<div class="cleaner_with_height">&nbsp;</div>
				
<!-- start of content left -->
    				<div id="content_left">
      					<div class="content_left_section">
						<a href="login.html"><h1>Login</h1></a>
						<a href="register.html"><h1>Create an Account</h1></a>
        					<h1>Categories</h1>
        					
						<ul>
          
							<li><a href="fairy.html">Fairy Tales</a></li>
							<li><a href="novel.html">Novels</a></li>
          						<li><a href="translation.html">Translations</a></li>
          						<li><a href="historys.html">History</a></li>
          						<li><a href="info.html">Information Technology</a></li>
          						
       
						 </ul>
      					</div>
      

					<div class="content_left_section">
        					<h1>Bestsellers</h1>
        					
						<ul>

          						<li><a href="harry.html">Harry potter</a></li>
          						<li><a href="lord.html">Lord of the Rings</a></li>
          						<li><a href="emma.html">Emma</a></li>
          						<li><a href="ds.html">Data Structures and Algorithm</a></li>
          						<li><a href="wd.html">Web Design</a></li>
          						
       
						 </ul>
      					</div>


      					<div class="content_left_section"> 
						<a href="http://www.macmillan.com/">
							<img style="border:0;width:88px;height:70px" src="images\mac.gif" alt="" width="88" height="31" vspace="8" border="0" />
						</a> 

						<a href="http://www.samayaprinters.com/">
							<img style="border:0;width:88px;height:70px"  src="images\sam.gif" alt="" vspace="8" border="0" />
						</a> 
					</div>
<div class="image_panel"><img src="images/boo.jpg" alt="" width="200" height="267" /></div>


    				</div>
    
<!-- end of content left -->



















                                <div id="content_right">


      					
			<?php

			EXTRACT( $_POST );

			$query = "SELECT  *  FROM login where email = '$email' ";
			$query2 = " INSERT INTO login VALUES( '$uname' , '$email' , '$password' , '$cpassword' )";


			if ( !( $database = mysql_connect( "localhost", "root", "1234" ) ) )                           
          		 		die( "Could not connect to database" );

			if ( !mysql_select_db( "bookshop", $database ) )
               				die( "Could not open bookshop database" );

			$result = mysql_query( $query, $database );
			$num=mysql_num_rows($result);

			if($num > 0){
				echo "<script type='text/javascript'>alert('Your email address already exist')</script>
				<h3> You have to try again </h3> 
				";
			}

			else{
				$result2 = mysql_query( $query2, $database);
				echo "<script type='text/javascript'>alert('Registration is successfull')</script> 
				<form  action=\"search.php\" name = \"login\" method=\"post\" onsubmit = \"return validate()\" >
				Select catagory to buy books
				<select  name=\"select\" size=1 onChange =\"formHandler()\" >

                			<option       selected=\"selected\" >Magazines	
				<option         >History
				<option         >Politics
				<option       >Health
				<option       >Science
				<option       >Medicine
				<option       >Architecture
	
				</select>	


        				<input type = \"submit\" value =\"Submit\"/>
             				</form>

				";
			}
      

		mysql_close( $database );

		?>
		

      					<div class="cleaner_with_height">&nbsp;</div>


      					<div class="cleaner_with_height">&nbsp;</div>
					<div class="cleaner_with_height">&nbsp;</div>
					<div class="cleaner_with_height">&nbsp;</div>

					<center><div class="cleaner">&nbsp;</div>
					<div class="image_panel"><img src="images/im1.jpg" alt="" width="115" height="100" /></div>
					<div class="image_panel"><img src="images/im2.jpg" alt="" width="115" height="100" /></div>				
					<div class="image_panel"><img src="images/im3.jpg" alt="" width="115" height="100" /></div>				
					<div class="image_panel"><img src="images/im5.jpg" alt="" width="115" height="100" /></div>									
					<div class="image_panel"><img src="images/bo.jpg" alt="" width="115" height="100" /></div>								
      					</center>
					<a href="http://www.vijithayapa.com/"><img src="images/ad1s.jpg" alt="ads" /></a> 
				</div>
    
<!-- end of content right -->






















    				<div class="cleaner_with_height">&nbsp;</div>
				
  			</div>
 
<!-- end of content -->


 <!-- start of footer -->  
	
			<div id="footer"> <a href="home.html">Home</a> | <a href="about.html">About</a> | <a href="publication.html">Books</a> | <a href="new.html">New Arrivals</a> | <a href="faq.html">FAQs</a> | <a href="contact.html">Contact Us</a><br />

    			Copyright &copy; 2012 <a href="http://www.creata.com/"><strong>Second Glance Readers' Gardens</strong></a> | Designed by <a href="http://www.w3school.com">CREATA</a> </div>
 <!-- end of footer -->
		
		</div>

<!-- end of container -->

	</body>

</html>
