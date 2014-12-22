<html>

	<head>
		<title>Second Glance Book Publishers</title>
		
		<link href="style.css" rel="stylesheet" type="text/css" />

		<script type = "text/javascript">
	
		function validate()
	 	 {
			var x=document.forms["buy"]["CardNumber"].value;
			var y=document.forms["buy"]["date"].value;
			var z=document.forms["buy"]["amount"].value;

			var DayIndex = 0;
        			var MonthIndex = 1;
        			var YearIndex = 2;
 
       	 		value = y.replace("-", "/").replace(".", "/"); 
        			var SplitValue = value.split("/");
       			var OK = true;



				if (!(SplitValue[DayIndex].length == 1 || SplitValue[DayIndex].length == 2)) {
            					OK = false; alert("Not a valid date");
        				}

        				if (OK && !(SplitValue[MonthIndex].length == 1 || SplitValue[MonthIndex].length == 2)) {
           	 				OK = false; alert("Not a valid date");
        				}

        				if (OK && SplitValue[YearIndex].length != 4) {
            					OK = false; alert("Not a valid date");
        				}

        				if (OK) {
            					var Day = parseInt(SplitValue[DayIndex], 10);
            					var Month = parseInt(SplitValue[MonthIndex], 10);
            					var Year = parseInt(SplitValue[YearIndex], 10);
 
            					if (OK = ((Year > 1900) && (Year < new Date().getFullYear()))) {
                					if (OK = (Month <= 12 && Month > 0)) {
                    						var LeapYear = (((Year % 4) == 0) && ((Year % 100) != 0) || ((Year % 400) == 0));
 
                    						if (Month == 2) {
                        							OK = LeapYear ? Day <= 29 : Day <= 28;
                    						}
                    						else {
                        							if ((Month == 4) || (Month == 6) || (Month == 9) || (Month == 11)) {
                            								OK = (Day > 0 && Day <= 30);
                        							}
                        							else {
                            								OK = (Day > 0 && Day <= 31);
                        							}
                    						}
               			 			}
            					}
        				}
        				return OK;

			
			if (x.length == 0 || y.length == 0 || z.length == 0 )
 			 {
  				alert("All the fields are required to be filled");
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


      					
					<div class="product_register" >
        					<h1>Credit Card </h1>
      				 	<img src="credit.jpg" alt="" /></br> </br>

        					<div class="product_info">
          					
          					<form  action="delivery.html" name = "buy" method="post" onsubmit = "return validate()" >

					<table summary="Demonstration form" >
					<tr> <td>
					Card Number: </td> <td><input name="CardNumber" size="16" maxlength="19"></td></tr>
					<tr> <td>
					Card Type: </td><td>
					<select name="CardType">
					<option value="MasterCard">MasterCard
					<option value="VisaCard">Visa
					<option value="AmExCard">American Express
					<option value="DinersClubCard">Diners Club
					<option value="DiscoverCard">Discover
					<option value="enRouteCard">enRoute
					<option value="JCBCard">JCB
					</select> </td></tr>
					<tr> <td>
					Expiration Date </td> <td> <input type = "text" name ="date"/><font size="1">mm/dd/yyyy </td></tr>
					

					<?php

					EXTRACT( $_POST );

					$query = "SELECT  price  FROM detail  WHERE name = 'select' ";
					
					


					if ( !( $database = mysql_connect( "localhost", "root", "1234" ) ) )                           
           						die( "Could not connect to database" );


					if ( !mysql_select_db( "bookshop", $database ) )
              						 die( "Could not open bookshop database" );

					$result = mysql_query( $query, $database );
					$value= mysql_fetch_row($result);
					$amount = $quantity  * 2570.00;


					echo "<tr> <td>
					Total amount  </td> <td> <input type = \"button\" name =\"amount\" value=$amount /> </td></tr>";
					?>
					

					<tr> <td>
        					<input type = "submit" value = "Check out"/> </td></tr>
					</table>

             					</form>
       			 		</div>

        					<div class="cleaner">&nbsp;</div>
      					</div>

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
