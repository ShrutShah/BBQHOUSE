<?php

require_once 'header.php';

echo"</body></html>"
;
echo <<<_END
<html>
<head>

<link rel="stylesheet" href="style2.css">



<style>
*, *:after, *:before {
  box-sizing: border-box;
  font-family: Helvetica, Arial, sans-serif;
}

.container {
  width: 80%;
  margin: 1em auto;
  border: 1px solid #ddd;
  padding: .3em .6em;
}
.container:after, .container:before {
  display: table;
  content: " ";
  line-height: 0;
  font-size: 0;
  clear: both;
}
.container p {
  font-size: 1.2em;
  color: #777;
  margin-bottom: 1.5em;
  font-style: italic;
}

.group-header {
  float: right;
  font-weight: 700;
  width: 20%;
  margin: 2em 0 1em 0;
}
.group-header span {
  float: left;
  font-size: 1.2em;
  width: 50%;
  text-align: center;
  display: block;
}

h3 {
  position: relative;
  font-weight: 500;
  margin: 0.7em 0 1em 0;
}
h3:after, h3:before {
  display: table;
  content: " ";
  line-height: 0;
  font-size: 0;
  clear: both;
}
h3 span {
  float: left;
  width: 10%;
  text-align: center;
  display: block;
  font-size: 1.2em;
 }
h3 span:first-child{
  width: 60%;
  text-align:left;
}





h3 .dots {
  width: 20%;
  border-bottom: 2px dotted #ccc;
  margin-top: 1em;
}


table {
  width: 100%;
  border: 1px solid #000;
}

th, td {
  width: 25%;
  text-align: left;
  vertical-align: top;
  border: 1px solid #000;
  border-collapse: collapse;
  padding: 0.3em;
  caption-side: bottom;
}

caption {
  padding: 0.3em;
  color: #fff;
  background: #000;
}

th {
  background: #eee;
}

img {
border :1px solid black;
margin-right :15px;
border-radius: 50%
-moz-box-shadow :2px 2px 2px #888;
-webkit-box-shadow:2px 2px 2px #888;
box-shadow :2px 2px 2px #888;
}

input[type=button]{
display :inline;
padding :4px 6px;
border :1px solid #777;
background :#ddd;
color :#d04;
margin-right :8px;
border-radius :5px;
-moz-box-shadow :2px 2px 2px #888;
-webkit-box-shadow:2px 2px 2px #888;
box-shadow :2px 2px 2px #888;
}

</style>
<script>
  window.console = window.console || function(t) {};
</script>






</head>

<body>


<div class="module" align="center">

<br>
<br>

<h1>BBQ HOUSE<h1>

<br>
<br>
<hr>

<h3><marquee>Happy hours: Monday to Friday 3pm to 6pm</marquee></h3>
<hr>

<br>

<h1>MENU<h1>
<br>


<div class="container">

<h2>Ala carte menu <h2>

<br>

<h2>Vegetarian</h2>

<div>


 <h3>
	
	<span>	<img src="crispycorn.jpg" width=200, height=200> Crispy Corn</span>
	
	<span>Rs.150</span>
  </h3>
  <p>Spiced snack made by frying sweet corn kernels</p>
  </div>
  <h3>
    <span>	<img src="cajunp.jpg" width=200, height=200> Cajun Potatoes</span>
    <span>Rs.200</span>
    
  </h3>
  <p>Crispy baked potatoes with Cajun spice and special mayo-chilli sauce</p>
  <h3>
    <span>	<img src="paneer.jpg" width=200, height=200> Shahi Paneer</span>
    <span>Rs.250</span>
  </h3>
  <p>Paneer cooked in thick gravy of cream, tomatoes and Indian spices</p>
  
   <h3>
    <span>	<img src="vegb.jpg" width=200, height=200> Veg Biryani</span>
    <span>Rs.350</span>
  </h3>
  <p>Aromatic rice dish loaded with veggies, cashews, spices and herbs</p>
  
  
  <h2> Non Vegetarian</h2>

 <h3>
    <span>	<img src="bbqchicken.jpg" width=200, height=200> Chicken Wings</span>
    <span>Rs.200</span>
  </h3>
  <p>Spiced snack made by frying chicken in hot sauce and butter</p>
  <h3>
    <span>	<img src="butterchicken.jpg" width=200, height=200> Butter Chicken</span>
    <span>Rs.300</span>
    
  </h3>
  <p>Aromatic golden chicken in mildy spiced tomato sauce loaded with butter</p>
  <h3>
    <span>	<img src="muttonb.jpg" width=200, height=200> Mutton Biryani</span>
    <span>Rs.400</span>
  </h3>
  <p>Hyderabadi dum biryani loaded with mutton gosht and variety of spices</p>
  
  
  
  <h2>Drinks</h2>
  


  <div class="group-header">
    <span>12 oz.</span>
    <span>34 oz.</span>
  </div>
  
  <h3>
    <span>	<img src="margarita.jpg" width=200, height=200> Margarita</span>
    <span>150</span>
    <span>275</span>
	
  </h3>
  <p>Refreshing crisp drink with tequila and lime</p>
  <h3>
    <span>	<img src="mojito.jpg" width=200, height=200> Mojito</span>
    <span>125</span>
    <span>250</span>
  </h3>
  <p>Refreshing cocktail with mint, syrup and white rum</p>
  <h3>
   
   
   <hr>
   
   
   <h3>Buffet<h3>
   
   
   <h3>
    <span>Vegetarian</span>
    <span>Rs.799</span>
  </h3>
  <p>Caesar salad</p>
  <p>Mixed green salad</p>
  <p>Cajun potatoes</p>
  <p>Crispy corn</p>
  <p>Veggie Pasta</p>
  <p>Farmhouse Pizza</p>
  <p>Mix veg</p>
  <p>One complimentary drink</p>
  
  <h3>
    <span>Non-vegetarian</span>
    <span>Rs.849</span>
    
  </h3>
  <p>All vegetarian options</p>
  <p>Chicken salad</p>
  <p>Chicken soup</p>
  <p>Chicken wings</p>
<p>Kebabs</p>
<p>Fish curry</p>
  <p>Non-veg pizzas and pastas</p>
<p>One Complimentary drink</p>


<br>
<p>All buffet options include sweet dishes too!</p>
   
</div>





<br>
	<br>
	
	<br>
	<br>

<!--
	<table>
	<th>Find a table</th>
	<tr>
	<td><label for="guests">Choose number of guests:</label>

<select id="guests">
  <option value="1-2 people">1-2 people</option>
  <option value="3-6 people">3-6 people</option>
  <option value="6-10 people">6-10 people</option>
  <option value="More than 10 people">More than 10 people</option>
</select>
	</td>
	
	<td><label for="date">Select date:</label>
	<input type="date" id="date" value="select">
	</td>
	
	<td><label for="timeslot">Choose timeslot:</label>

<select id="timeslot">
  <option value="11am">11 am</option>
  <option value="12noon">12 noon</option>
  <option value="1pm">1 pm</option>
  <option value="2pm">2 pm</option>
  <option value="3pm">3 pm</option>
  <option value="4pm">4 pm</option>
  <option value="5pm">5 pm</option>
  <option value="6pm">6 pm</option>
  <option value="7pm">7 am</option>
  <option value="8pm">8 noon</option>
  <option value="9pm">9 pm</option>
  <option value="10pm">10 pm</option>
</select>
	</td>
	
	<td>
	<input type="button" value="BOOK">
	</td>
	
	</tr>
	</table>
	-->
	<br>
	<br>
	
	
	<hr>
	
	<h1>Contact: +91-9142635721</h1>
	
	<h1>Address: Deccan Heights, Fourth Floor, Jangali Maharaj Rd, Pulachi Wadi, Deccan Gymkhana, Pune, Maharashtra 411004</h1>






</div>

<script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-9bf952ccbbd13c245169a0a1190323a27ce073a3d304b8c0fdf421ab22794a58.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script id="rendered-js">
$('h3 span:first-child').after("<span class=\"dots\"> </span>");
//# sourceURL=pen.js
    </script>

	
	
	
	
	
	
	
</body>

</html>
_END;






?>