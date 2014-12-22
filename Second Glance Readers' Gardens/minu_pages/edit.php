<html>

	<head>
		<title>Second Glance Book Publishers</title>
		
		<link href="style.css" rel="stylesheet" type="text/css" />

		<script type = "text/javascript">
	
		function validate()
	 	 {
			var x=document.forms["buy"]["name"].value;
			var y=document.forms["buy"]["tp"].value;
			var y=document.forms["buy"]["address"].value;

			
			if (x.length == 0 || y.length == 0 || z.length == 0 )
 			 {
  				alert("All the fields are required to fill");
  				return false;
 			 }
			
		  }
		
	</script>

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

				<form  action="search.php" name = "login" method="post" onsubmit = "return validate()" >
					<font color=" #e6e154" size="4pt">Search  </font>
					
					
					<select  name="select" size="1" onChange ="formHandler()" >

                					
					<option      selected="selected"    >History
					<option         >Sociology
					<option       >Health
					<option       >Science/Environmental
					<option       >Sinhala
					<option       >English

					</select>	

        					<input type = "submit" name="submit" value = "Go"/>
			
					&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<input type = "checkbox" name = "checkbox" value = "checkbox"  />
					<font color=" #e6e154" size="2.5pt">Yes, please send me newsletters   </font>						
					
					<input type = "text" name = "letters" value="amodha@gmail.com" size=25 />

					<input type = "submit" name = "subscribe" value = "subscribe" />			
				</form>

				<div class="cleaner_with_height">&nbsp;</div>
				
<!-- start of content left -->
    				<div id="content_left">
      					<div class="content_left_section">

						<form  action="search_text.php" name = "login" method="post" onsubmit = "return validate()" >
						<font color=" #e6e154" ><h1>Search by name</h1>  </font>
					
						<input type = "text" name="search" size="10"value = "Harry Potter"/>	

        						<input type = "submit" name="submit" value = "Search"/>
					
						</form>

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


			if ( !( $database = mysql_connect( "localhost", "root", "1234" ) ) )                           
           				die( "Could not connect to database" );


			if ( !mysql_select_db( "bookshop", $database ) )
              				 die( "Could not open bookshop database" );
			
			$add="Add book";
			$delete="Delete book";
			$edit="Edit book";

			
			if($select== $add) {
				$query1= " INSERT INTO detail VALUES( '$section' , '$category' , '$subcategory' , '$name' , '$price' )";
				$result1 = mysql_query( $query1, $database );
			
				echo "<script type='text/javascript'>alert('New book is added successfully.')</script> 
				<a href=\"home.html\"><h4> Back to home </h4></a> ";
				

			}

			if($select== $delete) {
				$query4 = " SELECT  *  FROM detail  WHERE section = '$section' and category='$category' and subcategory='$subcategory' and name='$name' price='$price' ";				
				$result4 = mysql_query( $query4, $database );
				$num4=0;
			
				if($num4 == 0){
					echo "<script type='text/javascript'>alert('There is no such no book.')</script>  
					<a href=\"edit.html\"><h4> Back to edit </h4></a> ";
				}
				else{
					$query2 = "DELETE  FROM detail WHERE section = '$section' and category='$category' and subcategory='$subcategory' and name='$name' price='$price' ";
					$result2 = mysql_query( $query2, $database );

					echo "<script type='text/javascript'>alert('Book is deleted successfully.')</script> 
					<a href=\"home.html\"><h4> Back to home </h4></a> ";
				}

			}

			if($select== $edit) {
				$query3 = "UPDATE detail SET section = '$section' and category='$category' and subcategory='$subcategory' and name='$name' price='$price' ";
				$result3 = mysql_query( $query3, $database );
				$num3 = 1;

				if($num3==0){
					echo "<script type='text/javascript'>alert('Book you are going to edit doesn't exist.')</script> 
					<a href=\"edit.html\"><h4> Back to edit </h4></a> ";
				}
				else{
					echo "<script type='text/javascript'>alert('Book is edited successfully.')</script> 
					<a href=\"home.html\"><h4> Back to home </h4></a> ";
				}


			}


		mysql_close( $database );

		?>
    
<!-- end of content right -->






















    				<div class="cleaner_with_height">&nbsp;</div>
				
  			</div>
 
<!-- end of content -->


 <!-- start of footer -->  
	
			<div id="footer"> <a href="home.html">Home</a> | <a href="about.html">About</a> | <a href="subpage.html">Books</a> | <a href="new.html">New Arrivals</a> | <a href="faq.html">FAQs</a> | <a href="contact.html">Contact Us</a><br />

    			Copyright &copy; 2012 <a href="http://www.creata.com/"><strong>Second Glance Readers' Gardens</strong></a> | Designed by <a href="http://www.w3school.com">CREATA</a> </div>
 <!-- end of footer -->
		
		</div>

<!-- end of container -->

	</body>

</html>
