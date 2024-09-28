<!DOCTYPE html>
<html lang="en">

<body>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
      body {
        margin: 0;
        font-family: Arial, sans-serif;

    
        background-color: #ffd5c0; 

        background-repeat: no-repeat;
        background-size: 100%; 
        


        color: #fff;
        transition: background-color 0.3s ease, color 0.3s ease;

      }

      .footer {
        background-color: #1a1a1a;
        padding: 20px 0;
        color: #fff;
        position: absolute;


        bottom: -1500px;

        width: 110%;
      }

      .footer .container {
        display: flex;
        justify-content: space-between;
        padding: 0 10px;
      }

      .footer .column {
        flex: 1;
        margin: 0 10px;
      }

      .footer .column h3 {
        font-size: 14px;
        margin-bottom: 10px;
        color: #b3b3b3;
      }

      .footer .column a {
        display: block;
        color: #fff;
        text-decoration: none;
        margin-bottom: 5px;
        font-size: 14px;
      }

      .footer .column a:hover {
        text-decoration: underline;
      }

      .footer .social-icons {
        display: flex;
        align-items: center;
        margin-top: 10px;
        margin-left: 100px;
      }

      .footer .social-icons a {
        color: #fff;
        margin-right: 10px;
        font-size: 20px;
      }

      .footer .bottom-bar {
        background-color: #000;
        padding: 10px 50px;
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        border-top: 1px solid #333;
      }

      .footer .bottom-bar a {
        color: #b3b3b3;
        text-decoration: none;
        font-size: 14px;
        margin-right: 20px;
      }

      .footer .bottom-bar a:hover {
        text-decoration: underline;
      }

      .footer .bottom-bar .copyright {
        color: #b3b3b3;
        font-size: 14px;
      }

      .footer .bottom-bar .payment-icons img {
        margin-left: 10px;
      }

      #beautyfirst {
        background-color: #1a1a1a;
        border-radius: 10px;
        height: 55px;
        width: 100%;
        display: flex;
        align-items: center;

        padding-left: 10px;
      }

      .h1b {
        color: paleturquoise;
        transform: rotate(360deg);
        font-weight: bold;
        font-size: 55px;
        margin-left: 25px;

        /* Added 'deg' for degrees */
      }


      #header {

        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: -75px;   
        margin-left: -80px; 
      
      }

      .inner-box{
        width: 450px;
        height: 100px; 
        
     }

      

      .row{

        display: flex; 
        justify-content: space-around; 
        align-items: center; 
        gap: 20px; 
        margin: 20px; 
      }




 

      #img1 {
        display: flex;
        gap: 10px;
      }

      #image11,
      #image12,
      #image13 {
        box-sizing: border-box;
        height: 400px;
        width: 400px;
      }

      legend {
        margin-left: 50px;
        margin-top: 950px;
        width: 1200px;
      }

      fieldset {
        margin-top: 20px;
      }



      #pic {

        position: absolute;
        right: 40px;
        top: 7px;
        cursor: pointer;
      }


      #text {
        margin-top: 100px;
        margin-left: -180px;
        font-size: 53px;
        color: black;
        font-family: verdana;
      }


      #trend {
        font-size: 66px;
        color: brown;
        position: absolute;
        margin-top: 10px;
       z-index: -1; 
        white-space: nowrap;
        overflow: hidden;
        display: inline-block;
        border-right: 3px solid brown;
        /* Cursor effect */
        animation: typing 4s steps(40, end) infinite, blink 0.75s step-end infinite;
      }

      @keyframes typing {
        from {
          width: 0;
        }

        to {
          width: 50%;
        }
      }

      @keyframes blink {

        from,
        to {
          border-color: transparent;
        }

        50% {
          border-color: brown;
        }
      }

      #trend::after {
        content: '';
      }


      #btn:hover{
        background-color: blue; 
        color: white; 
        font-size: 26px; 

      }





      #btn {

        margin-top:70px;
        margin-left: 160px;
        width: 174px;
        height: 55px;
        font-size: 24px;
        font-weight: bold;
        border-radius: 10px;
        cursor: pointer;



      }

      #one table {
        padding: 10px;
      }


      #one td {

        margin-left: 200px;
        font-weight: bold;
        padding: 10px;
      }

      #two td {


        font-weight: bold;
        padding: 10px;
        font-size: 18px;
        position: relative;
        left: 5px;


      }



      #two tr {
        margin-left: 90px;
      }




      #two table {
        margin-top: -80px;
      }


      #two span {

        font-size: 29px;
        font-weight: bold;
        margin-left: 13px;
      }

      #search {
        width: 700px;
        height: 250px;
        font-weight: bold; 
        z-index: -1; 
        font-family: sans-serif;  
        font-size: 20px; 
      box-shadow: 0px 0px 10px brown;  
        border: 0.4px solid brown; 
        color: white;
        margin-top: 40px;
        border-radius: 20px;
        margin-left: 350px;
        z-index: 1000; 
        padding: 20px; 

      }

      #search select {
        padding: 15px;
        width: 400px;
        margin-left: 60px;
        border-radius: 20px;
        margin-top: 15px;
      }



      #one td {
        margin-left: 20px;
        font-size: 18px;
        font-family: sans-serif;
        margin-top: -40px;
      }

      #data {


        width: 190px;
        position: absolute;
        padding: 30px;
        margin-left: 900px;
        top: 100px;
        border-radius: 10px;
      }

      #drop {

        padding: 10px;
      }




      #one {
        width: 100%;
        height: 230px;
        border-bottom: 1px solid gray;
        color: black;
        margin-top: -10px;

      }




      #one th {

        text-align: left;
      }


      #two th {
        text-align: left;
        font-size: 15px;
      }

      #btn2 {

        position: absolute;
        top: 743px;
        margin-left: 409px;
        width: 190px;
        height: 60px;
        font-size: 24px;
        font-weight: bold; 
        border-radius: 10px;
        font-weight: bold;
        cursor: pointer;

      }

      #btn2:hover{
        background-color: blue; 
        color: white; 
        font-size: 26px; 
      }


      #dropdownbox {
        height: 600px;
        /* Adjust height for testing */
        width: 330px;
        background-color: white;
        box-shadow: 0px 0px 7px gray;
        position: absolute;
        top: 49px;
        left: 2px;
        z-index: 1;
        display: none;

        overflow-y: auto;

        overflow-x: hidden;

        padding: 10px;

      }


      #dropdownbox::-webkit-scrollbar {
        width: 15px;
        height: 50px;

      }

      #dropdownbox::-webkit-scrollbar-track {
        background: #f1f1f1;
        /* Track color */
      }

      #dropdownbox::-webkit-scrollbar-thumb {
        background: #888;
        /* Scrollbar thumb color */
      }

      #dropdownbox::-webkit-scrollbar-thumb:hover {
        background: #555;
        /* Scrollbar thumb color on hover */
      }


      #dropdownMenu::-webkit-scrollbar {
        width: 15px;
        height: 50px;

      }

      #dropdownMenu::-webkit-scrollbar-track {
        background: #f1f1f1;
        /* Track color */
      }

      #dropdownMeu::-webkit-scrollbar-thumb {
        background: #888;
        /* Scrollbar thumb color */
      }

      #dropdownMenu::-webkit-scrollbar-thumb:hover {
        background: #555;
        /* Scrollbar thumb color on hover */
      }



      span {
        font-size: 32px;
        font-weight: bold;
        margin-left: 10px;
      }


      #two {
        margin-top: 100px;
        width: 100%;
        height: 230px;
        color: black;
        border-bottom: 1px solid gray;
      }

      #logo {
        margin-top: 6px;
        font-weight: bold;

      }




      #four {

        margin-top: 30px;
        width: 100%;
        height: 230px;
        color: black;
        border-bottom: 1px solid gray;
      }


      #four span {

        font-size: 30px;
        font-weight: bold;
        margin-left: -10px;



      }

       /* Outer container box */
      



      #four th {
        text-align: left;
        font-size: 15px;
      }




      #four span {

        margin-left: 5px;
      }



      #three {
        margin-top: 20px;
        color: black;
        width: 100%;
        height: 500px;
        border-bottom: 1px solid gray;


      }

      #three span {

        font-size: 30px;
        font-weight: bold;
        margin-left: -25px;

      }


      #slidercontent {
        position: absolute;
        top: 230px;
        right: 40%;
        font-size: 50px;
        color: rgb(180, 149, 209);
      }

      #previous {
        position: absolute;
        top: 119px;
        left: 20px;
        font-size: 30px;
        background-color: lightblue;
        border-radius: 5px;
      }


      #nextstep{

        position: absolute;
        top: 1453px;
        right: 1px;
        font-size: 30px;
        background-color: lightblue;
        border-radius: 5px;


      }

      #prevstep{

      
        position: absolute;
        top: 1453px;
        left: 280px;
        font-size: 30px;
        background-color: lightblue;
        border-radius: 5px;
       



      }

    







      #next {
        position: absolute;
        top: 119px;
        right: 20px;
        font-size: 30px;
        background-color: lightblue;
        border-radius: 5px;
      }




      #mysearch {

        margin-left:220px;
        width: 550px;
        padding: 15px;
        border-radius: 5px;
        border: none;
        height: 36px;
      }

      #mysearch::placeholder {
        position: absolute;
        /* This won't work as intended */
        font-size: 20px;
        color: gray;
        margin-left: 10px;
        margin-top: -5px;
        /* You can set a color as well */
      }


      #search2 {

        width: 80px;
        height: 36px;
        border-radius: 7px;
        background-color: gray;
        color: white;
        font-weight: bold;
        font-size: 14px;
        cursor: pointer;

      }

      a{

        text-decoration: none; 
        color: black; 
      }


      #three td {

        font-weight: bold;
        padding: 10px;
        font-size: 18px;
        position: relative;
        left: 5px;


      }


      #menubar {
        margin-top: 7px;
        width: 100%;

      }

      #zero {
        width: 110%;

        color: white;
        height: 40px;
        background-color: darkslategray;

        position: absolute;

        padding: 0px;
        left: -16px;


      }




      #zero th {

        font-size: 23px;
        font-family: sans-serif;
        position: absolute;
        padding: 10px;
        font-weight: bold;
        text-align: center;
        left: 69px;
        font-weight: bold;
        color: white;

        top: -60px;

      }

      #zero td {
        margin-top: 10px;
      }


      #mains {
        color: black;
        font-family: verdana;
      }



      #four {

        margin-top: 20px;
        color: black;
        width: 100%;
        height: 230px;
        border-bottom: 1px solid gray;


      }


      #four td {

        font-weight: bold;
        padding: 10px;
        font-size: 18px;
        position: relative;
        left: 1px;



      }


      #menubar td:hover {

        width: 100%;
        background-color: lightgray;


      }

      #dropdownMenu {

        width: 230px;
        height: 320px;
        display: none;
        background-color: white;
        color: black;
        padding: 20px;

        overflow-y: auto;

        overflow-x: hidden;

        padding: 5px;

        position: absolute;
        z-index: 2000;
        left: 460px;
        top: 47px;
        text-align: justify;
        border-radius: 10px;





      }


      #dropdownMenu ul {
        text-align: justify;
        margin-top: -10px;
      }


      #dropdownMenu li {
        list-style: none;
        padding: 10px;
        text-align: left;
        font-family: sans-serif;
        margin-top: 10px;
        text-align: justify;
        margin-left: -35px;
        font-weight: bold;

      }

    

      #sliderimage {
        height: 160px;
        width: 100%;
        margin-top: -20px;
      }




      #slide{
       
       

      }

      #sliderpic{
        width: 100px;  
        height: 70px; 
        postiion:absolute; 
      }


      #dropdownMenu li:hover {
        background-color: gray;
      }




      #frame3 {
        width: 60px;
        height: 36px;
        background-color: silver;
        position: absolute;
        left: 990px;
        top: 10px;
        border-radius: 3px;
        cursor: pointer;
      }


      #entry {
        position: absolute;
        right: 180px;
        top: 5px;
        width: 160px;
        height: 45px;
        font-family: verdana;
        font-size: 19px;
     
        font-weight: bold;
        border-radius: 10px;
        cursor: pointer;

      }

      #entry a{
        color: brown; 
      }





      #label {
        background-color: transparent;
        position: absolute;
        left: 220px;
      }

      #five {
        width: 100%;
        background-color: darkslategray;
        height: 30px;
        position: absolute;
        margin-left: -10px;


      }

      #droppic {
        position: absolute;
        top: 9px;
        left: 466px;
        box-shadow: 0px 0px 5px gray;
        height: 37px; 
        width: 35px;
        background-color: white; 
        border-radius: 5px; 

      }

      #login {

        margin-left: -50px;
        margin-top: 54px;

      }

      #search td {
        position: relative;
        left: 30px;
        color: black; 
        font-weight: bold; 
        font-size: 22px; 
        font-family; verdana; 
        margin-top: 20px; 
       
      }


      #store{
      top: 900px; 
        position: absolute; 
        left: -50px; 
        width: 450px;
        height: 400px; 
        
        
        


      }

      .joiner:hover {
        background-color: silver; 
        color: white; 
        font-size: 25px; 
      
      }

      #joins: hover{
        color: white; 
      }


       /** nav2 **/
       #nav2 {
        height: 50px;
        width: 100%;
        background-color: #1a1a1a;
        text-align: justify; 

      
        justify-content: center;
        margin-top: -5px; 
        align-content: center;



    }

    #nav2 ul {
        display: flex;
        justify-content: space-evenly;
       text-align: justify; 

    }

    #joins a: hover{
      background-color: blue; 
    }

    #nav2 ul li {
        justify-content: space-evenly;
        -between;
       text-align: justify; 

        
        list-style-type: none;
        color: white; 
        font-family: verdana; 
        font-size: 23px; 
        margin-top: -7px; 
        font-weight: bold; 

    }

    #nav2 ul li a {
      
        color: white; 
        cursor: pointer;
        text-decoration: none;
        font-family: sans-serif; 
        
        
    }

    .nav2_elements {
        position: relative;
    }

    .components {
        position: absolute;
        display: flex;
        flex-direction: column;
        padding: 0;
        top: 36px;
        left: -40px;
      background-color: gray; 
        width: 305px; 
        border-radius: 10px; 






    }


   

    #slide p{
     position:absolute; 
     bottom: -700px; 
     color: black; 
    left: 670px; 
    text-align: center; 
    }




    .components li {
      font-size: 4px; 
        
        margin: 1px 0px;
        align-content: center;
        display: none;
        text-align: left;
        border-radius: 10px;
        padding: 10px; 
        z-index: 1000px; 
    }

   
   #frame-layout{
   width: 80%;
   display: flex; 
   justify-contenent: space-around; 
   align-items: center; 
   
  flex-wrap: wrap; 
   gap: 30px; 
   margin-left: 400px; 
  position:absolute; 
 top: 1000px; 
   }

.outer-box {
  width: 250px;
  height: 270px;
  box-shadow: 0px 0px 10px white; 
  padding: 2px;
  transition: transform 1.4s;
}

.outer-box:hover {
  transform: scale(1.1);
}



   
            

    .nav2_elements:hover .components li {
        display: block;
        
     
       
    }
    .components li:hover{

      background-color: black; 
    
       
    }
/**Nav element last **/


.nav2_elements_last {
        position: relative;
    }

    .components_last {
        position: absolute;
        display: flex;
        flex-direction: column;
        padding: 0;
        top: 19px;
        left: -70px;



    }

    

    .nav2_elements_last:hover .components_last li {
        display: block;
    }


    h5{
    position:absolute; 
    font-family:verdana; 
    color:black; 
    font-weight: bold; 
    font-size: 12px; 
    margin-top: -3px; 
    text-align:center; 
    margin-bottom: 10px;


    }


   #seen {
  width: 100%;
  height: 100%;
  transition: transform 0.5s;
  cursor: pointer; 
}

#seen:hover{
border: 1px solid black; 
border-radius: 5px; 
background-color: blue; 
}

#port{
  z-index: 0; 
}


#frame{

width: 60%; 
height: 200px; 
box-shadow: 0px 0px 10px white; 
position:relative; 
top: 500px; 
left: 400px; 
}


#imageSlider{
width: 50%; 
height: 200px; 
}


#ones,#twos,#threes{
position:absolute; 
font-size: 29px; 
font-family: sans-serif; 
width: 80px; 
height: 40px; 
font-weight: bold; 
color: black; 
border-radius: 3px;
box-shadow: 0px 0px 3px black; 

}



#ones{
top: 160px; 
left: 676px; 
}


#ones:hover{
  background-color: blue; 
  color: white; 
}

#twos:hover{
  background-color: blue; 
  color: white; 

}


#threes:hover{
  background-color: blue; 
  color: white; 

}


#twos{
top: 160px; 
left: 754px; 
}

#threes{
top: 160px; 
right: 0px; 
}

p{
position:absolute; 
left: 480px; 
font-size: 35px; 
font-weight: bold; 
top: -30px; 
color: black; 
}


h6{

position:absolute; 
left: 480px; 
font-size: 25px; 
font-weight:bold; 
top: 40px; 
color: brown; 
}


#pics{

  position: absolute; 
  top: 350px; 
  right: 50px; 
}


#picture{

  position: absolute; 
  top: 950px; 
  left: -30px; 
}



    


    </style>
  </head>

  <body>
    <div id="beautyfirst">
      <img src='images/dropdown.png' id='drop' width="30px" height="25px" />



      <h1 class="h1b" style=" color :'black'">T</h1>

      <h1 style="font-size: 38px;">rendCart</h1>
      <center>




        <input type="search" id="mysearch" placeholder="Search Your Items here" />

        <div id='frame3'> <img src='images/finder2.webp' width="25px" height="25px" id='logo' /> </div>



      </center>
	  
	  
	  

      <img src= "images/ekart99.png"  width='70px' height='45px' id='pic' />
    </div>

    <div id = 'joins'> <button class ='joiner' id='entry'><a href = "http://localhost/EkartCRUD/registerKart.php">JOIN NOW </a> </button></div>
    <br>



    





















    <div id='dropdownbox'>
      <div id="zero">

        <table>

          <tr>

            <th> <img src='images/user21.png' width='40px' height="30px" id='login' /> Hello, Sign In</th>




          </tr>


        </table>




      </div> <br> <br>




      <div id='one'>
        <table id='menubar'>

          <tr>
            <th>
              <span>
                Featured
              </span>
            </th>
          </tr>
          <tr>
            <td>Best Sellers </td>
          </tr>
          <tr>
            <td> New Products</td>
          </tr>

          <tr>
            <td> Distributors</td>
          </tr>

          <tr>
            <td> Movers & Shakers </td>
          </tr>



        </table>





      </div>
      <div id='two'>


        <table id="menubar">

          <tr>
            <th>
              <span>
                Program & Updates
              </span>
            </th>
          </tr>
          <tr>
            <td>Discount Offers</td>
          </tr>
          <tr>
            <td>Gift Cards & Coupons </td>
          </tr>

          <tr>
            <td> Exchange Products</td>
          </tr>

          <tr>
            <td> Blog Articles </td>
          </tr>



        </table>



      </div>


      <div id="three">

        <table id='menubar'>

          <tr>
            <th>
              <span>
                Shop By Catagory
              </span>



            </th>
          </tr>
          <tr>
            <td>Mobile, Computers</td>
          </tr>



          <tr>
            <td> TV, Electronic, Appliances</td>
          </tr>

          <tr>
            <td> Men's Fashion</td>
          </tr>

          <tr>
            <td>Women's Fashion</td>
          </tr>
          <tr>

          </tr>
          <td>Home, Kitchens,Pets</td>
          </tr>

          <tr>
            <td>Women's Fashion</td>
          </tr>

          <tr>
            <td>Beauty, Health, Grocery</td>
          </tr>

          <tr>
            <td>Toys, Baby Prouct, Kids Fashion</td>
          </tr>

          <tr>
            <td>Books & Stationary</td>
          </tr>

          <tr>
            <td>Movies, Music, Video Games</td>
          </tr>



        </table>






      </div>
      <div id='four'>

        <table id='menubar'>

          <tr>
            <th>
              <span>
                Help & Settings
              </span>
            </th>
          </tr>
          <tr>
            <td>Your Account</td>
          </tr>
          <tr>
            <td>Customer Service</td>
          </tr>

          <tr>
            <td> Sign In</td>
          </tr>

          <tr>
            <td> Virtual Assitant</td>
          </tr>



        </table>




      </div>
      <div id='five'>

        <table>

          <tr>

            <td> </td>

            <td> </td>


          </tr>





        </table>





      </div>


    </div>



    <div id='dropFrame'>
      <img src='images/drops.png' width="30px" height="33px" id='droppic' />
    </div>

    <div id='dropdownMenu'>
      <ul>
        <li>Computer & Accessories </li>
        <li> Car & Moterbikes</li>
        <li> Beauty Products</li>
        <li> Home Appliances</li>
        <li> Clothing</li>
        <li> Footwears</li>
        <li> Instruments</li>
        <li> Books & Stationary</li>
        <li> Laptop Devices</li>
        <li> Mobile Phones</li>


      </ul>



    </div>



    </div>
    <div>
      <img id="sliderimage">
      <h1 id="slidercontent"></h1>
      <input type="button" value=&#11176; id="previous" onclick="previousStep()" />
      <input type="button" value=&#11177; id="next" onclick="nextStep()" />
    </div>


    <div id="nav2">
      <ul>
          <li class="nav2_elements"><a>Electronics</a>
              <ul class="components">
                  <li><a>Computer & Laptops</a></li>
                  <li><a>Phone & Accessories</a></li>
                  <li><a>Camera & CCTV</a></li>
                  <li><a>Television</a></li>
                  <li><a>Fridge</a></li>
                  <li><a>Washing Machine</a></li>
              </ul>
          </li>
          <li class="nav2_elements"><a>Clothing</a>
              <ul class="components">
                  <li><a>Men's Clothings</a></li>
                  <li><a>Women Clothings</a></li>
                  <li><a>Kid's Clothing</a></li>
                  <li><a>New Arrivals</a></li>
                  <li><a>Party Wear</a></li>
                  <li><a>Ethinic Wear</a></li>
                  <li><a>Spoyal Trends</a></li>
              </ul>
          </li>
          <li class="nav2_elements"><a>Home & Garden</a>
              <ul class="components">
                   <li><a>Furniture</a></li>
                   <li><a>Home Decorations</a></li>
                   <li><a>Kitchens Items</a></li>
                   <li><a>Dinig</a></li>
                   <li><a>Painting</a></li>
                   <li><a>Garden Tools</a></li>
                   <li><a>Flower pots </a></li>
                   <li><a>Vesels</a></li>
           </ul>
      </li>
      <li class="nav2_elements"><a>Beauty & Health</a>
                 <ul class="components">
                     <li><a>Skin Care</a></li>
                     <li><a>Hair care</a></li>
                     <li><a>Suppliments</a></li>
                     <li><a>Body Care</a></li>
                     <li><a>Oils</a></li>
                     <li><a>Beauty Creams</a></li>
             </ul>
      </li>
      <li class="nav2_elements"><a>Sport & Outdoor</a>
               <ul class="components">
                   <li><a>Gym Accessories</a></li>
                   <li><a>Sport Items</a></li>
                   <li><a>Sports Machine</a></li>
                   <li><a>Sports Accessories</a></li>
                   
               </ul>
      </li>
      <li class="nav2_elements"><a>Latest Deals</a>
          <ul class="components">
              <li><a>Coupons & Vouchers</a></li>
              <li><a>Best Offers</a></li>
              <li><a>Seasonal Sale</a></li>
             
              
          </ul>
      </li>
      <li class="nav2_elements"><a>Customer Services</a>
          <ul class="components">
              <li><a>Track Orders</a></li>
              <li><a>Return & Replace</a></li>
              <li><a>Customer Support</a></li>
             
              
          </ul>
      </li>
      </ul>
  </div>

  <div id='header'>
      <h1 id='text'> Where Style Meets Convenience <br> <span id='trend' class="text "> Discover TrendCart. </span></h1>
    </div>

    <button id='btn'> Buy Now </button>

  <div id='search'>

      <table>


        <tr>

          <td> Search By Catagory </td>
          <td> <select>
              <option>Your Catagory</option>
              <option> Electronic Accessories</option>
              <option> Home Appliance </option>
              <option> Beauty Products</option>
              <option> Jewellery & Bangles</option>
              <option> Vechicle Parts </option>
              <option> Men's Footwear</option>
              <option> Women's Footwears</option>
              <option> Men's Clothes</option>
              <option> Women's Clothes</option>
              <option>Kids Footwears </option>
              <option> Kids Clothes</option>
            </select></td>
        </tr>


        <tr>


          <td> Search By Range </td>
          <td> <select>

              <option> Your Range </option>
              <option> Upto 10000 Rupeee</option>
              <option>Between 50000 to 10000 </option>
              <option> Below 50000</option>
              <option> Less than 10000 Rupee</option>
            </select>

          </td>

        </tr>

        <button id='btn2'> Get Product</button>



      </table>



    </div>


    <img src = "EkartB.png" id ='pics'  width = "350px" height = "650px"/>













    <div id = 'frame-layout'> 

    <div class="outer-box">
       <h5> Minimum 50% off | Beauty Products </h5> 
        <div class="row">
            <div class="inner-box"><img src = 'Product/Beauty/Beauty2.jpg' id = 'seen'/></div>
            <div class="inner-box"><img src = 'Product/Beauty/Beauty3.webp' id = 'seen'/></div>
        </div>
        <!-- Second row with 2 boxes -->
        <div class="row">
            <div class="inner-box"><img src = 'Product/Beauty/Beauty6.jpg' id = 'seen'/></div>
            <div class="inner-box"><img src = 'Product/Beauty/Beauty1.jpg' id = 'seen' /></div>
        </div>
    </div>
   
    <div class="outer-box">
          <h5> Up to 70% off  | HealthCare</h5>  
        <div class="row">
            <div class="inner-box"><img src = 'Product/Health/Power1.jpeg' id = 'seen'/></div>
            <div class="inner-box"><img src = 'Product/Health/Power2.jpg' id = 'seen'/> </div>
          
        </div>
        <!-- Second row with 2 boxes -->
        <div class="row">
            <div class="inner-box"><img src = 'Product/Health/Power3.jpg' id = 'seen'/></div>
            <div class="inner-box"><img src = 'Product/Health/Power4.webp' id = 'seen'/></div>
        </div>
    </div>
  
    <div class="outer-box">
        <h5> Minimum 40% off | LifeStyle </h5> 
        <div class="row">
            <div class="inner-box"><img src = 'Product/LifeStyle/Diet1.jpeg' id = 'seen'/></div>
            <div class="inner-box"><img src = 'Product/LifeStyle/Diet2.jpg' id = 'seen'/></div>
        </div>
        <!-- Second row with 2 boxes -->
        <div class="row">
            <div class="inner-box"><img src = 'Product/LifeStyle/Diet5.jpeg' id = 'seen'/></div>
            <div class="inner-box"><img src = 'Product/LifeStyle/Diet3.jpeg' id = 'seen'/></div>
        </div>
    </div>
    <!-- fourth box -->
    <div class="outer-box">
      <h5> Up to 80% off | Gym Equipment  </h5> 
       
        <div class="row">
            <div class="inner-box"><img src = 'Product/Gym/Fit1.jpg' id = 'seen'/></div>
            <div class="inner-box"><img src = 'Product/Gym/Fit6.jpeg' id = 'seen'/></div>
        </div>
        <!-- Second row with 2 boxes -->
        <div class="row">
            <div class="inner-box"><img src = 'Product/Gym/Fit3.webp' id = 'seen'/></div>
            <div class="inner-box"><img src = 'Product/Gym/Fit8.jpg' id = 'seen'/></div>
        </div>
    </div>
    <!-- fifth box -->
  

    

</div> 


   
<div id = 'frame4'>



<img src = 'store11.png' id ='picture'  width = "400px" height = "360x"/>


  


</div> 






    </div>

    
<div id = 'frame'> 
<p> Health, Beauty, Lifestyle & Fitness <h6> Up To 40% off</h6> </p> 
<img src ='Product/Beauty/Beauty1.jpg' id ='imageSlider'/>

<button id = 'ones'  onclick = "prev()"> &#8592;</button> 
<button id = 'twos' onclick = "stop()"> &#183;</button> 
<button id = 'threes'onclick = "next()"> &#8594; </button> 
</div> 

    
    





    

      




    <div class="footer">
      <div class="container">
        <div class="column">
          <h3>ABOUT</h3>
          <a href="#">Contact Us</a>
          <a href="#">About Us</a>
          <a href="#">Careers</a>
          <a href="#">Flipkart Stories</a>
          <a href="#">Press</a>
          <a href="#">Corporate Information</a>
        </div>
        <div class="column">
          <h3>GROUP COMPANIES</h3>
          <a href="#">Myntra</a>
          <a href="#">Cleartrip</a>
          <a href="#">Shopsy</a>
        </div>
        <div class="column">
          <h3>HELP</h3>
          <a href="#">Payments</a>
          <a href="#">Shipping</a>
          <a href="#">Cancellation & Returns</a>
          <a href="#">FAQ</a>
          <a href="#">Report Infringement</a>
        </div>
        <div class="column">
          <h3>CONSUMER POLICY</h3>
          <a href="#">Cancellation & Returns</a>
          <a href="#">Terms Of Use</a>
          <a href="#">Security</a>
          <a href="#">Privacy</a>
          <a href="#">Sitemap</a>
          <a href="#">Grievance Redressal</a>
          <a href="#">EPR Compliance</a>
        </div>
        <div class="column">
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
      <div class="bottom-bar">
        <div>
          <a href="#">Become a Seller</a>
          <a href="#">Advertise</a>
          <a href="#">Gift Cards</a>
          <a href="#">Help Center</a>
        </div>
        <div class="copyright">© 2007-2024 Trendcart</div>
      </div>
    </div>


   

  </body>

  <script>
    var dropdown = document.getElementById('dropdownbox');
    var icon = document.getElementById('drop');
    var dropbox = document.getElementById('dropFrame');
    var dropMenu = document.getElementById('dropdownMenu');

    icon.addEventListener('click', (event) => {
      event.stopPropagation(); // Prevents the click from bubbling up to the document
      dropdown.style.display = (dropdown.style.display === 'none' || dropdown.style.display === '') ? 'block' : 'none';
    });

    document.addEventListener('click', () => {
      dropdown.style.display = 'none';
    });

    // Prevent clicks inside the dropdown from closing it
    dropMenu.addEventListener('click', (event) => {
      event.stopPropagation();
    });

    dropbox.addEventListener('click', (event) => {
      event.stopPropagation(); // Prevents the click from bubbling up to the document
      dropMenu.style.display = (dropMenu.style.display === 'none' || dropMenu.style.display === '') ? 'block' : 'none';
    });

    document.addEventListener('click', () => {
      dropMenu.style.display = 'none';
    });

    dropMenu.addEventListener('click', (event) => {
      event.stopPropagation();
    });

    var count = 0
    const mysliderfunction = () => {
      sliderimagearray = ['s2.png', 's9.png', 's8.png', 's3.png', 's5.png', 's7.png', 's6.png']
      slidercontetntarray = ['Handbags', 'Smartwatches', 'Footwear', 'Beauty', 'Womens Clothing', 'Elevated Classis', 'Jewellery',]
      document.getElementById('sliderimage').src = './images/' + sliderimagearray[count]


      if (count < 6) {
        count++;
      } else {
        count = 0;
      }

    }

    var mysetinterval = setInterval(() => { mysliderfunction() }, 2000)
    const nextStep = () => {

      clearInterval(mysetinterval);
      console.log(count)
      if (count < 6) {
        count++;
      } else {
        count = 0;
      }
      sliderimagearray = ['s2.png', 's9.png', 's8.png', 's3.png', 's5.png', 's7.png', 's6.png']
      slidercontetntarray = ['Handbags', 'Smartwatches', 'Footwear', 'Beauty', 'Womens Clothing', 'Elevated Classis', 'Jewellery',]
      document.getElementById('sliderimage').src = './images/' + sliderimagearray[count]

    }
    const previousStep = () => {

      clearInterval(mysetinterval);
      console.log(count)
      if (count <= 0) {
        count = 6;
      } else {
        count = count - 1;
      }
      sliderimagearray = ['s2.png', 's9.png', 's8.png', 's3.png', 's5.png', 's7.png', 's6.png']
      slidercontetntarray = ['Handbags', 'Smartwatches', 'Footwear', 'Beauty', 'Womens Clothing', 'Elevated Classis', 'Jewellery',]
      document.getElementById('sliderimage').src = './images/' + sliderimagearray[count]

    }


    </script> 



  <script> 


var val =0; 

var imageArray = ['Beauty/Beauty1.jpg', 'Beauty/Beauty2.jpg', 'Beauty/Beauty3.webp', 'Beauty/Beauty4.webp', 'Beauty/Beauty5.jpg', 'Beauty/Beauty6.jpg', 'Beauty/Beauty7.webp', 'Beauty/Beauty8.webp', 'Beauty/Beauty9.jpg', 'Health/Power1.jpeg', 'Health/Power2.jpg', 'Health/Power3.jpg', 'Health/Power4.webp', 'Gym/Fit1.jpg', 'Gym/Fit3.webp', 'Gym/Fit5.jpg', 'Gym/Fit6.jpeg', 'Gym/Fit7.jpg', 'Gym/Fit8.jpg', 'LifeStyle/Diet1.jpeg', 'LifeStyle/Diet2.jpg', 'LifeStyle/Diet3.jpeg', 'LifeStyle/Diet4.webp','LifeStyle/Diet5.jpeg', 'LifeStyle/Diet6.jpeg']; 


function sliderImage(){

document.getElementById('imageSlider').src =  'Product/'+ imageArray[val];

if(val<24){
val++; 
}

else{
val=0; 

}


}

const myIntervals = setInterval(sliderImage,1000); 

 
function prev(){

clearInterval(myIntervals); 

if(val<=0){

val =24; 

}
else{
val=val-1; 
}




var imageArray = ['Beauty/Beauty1.jpg', 'Beauty/Beauty2.jpg', 'Beauty/Beauty3.webp', 'Beauty/Beauty4.webp', 'Beauty/Beauty5.jpg', 'Beauty/Beauty6.jpg', 'Beauty/Beauty7.webp', 'Beauty/Beauty8.webp', 'Beauty/Beauty9.jpg', 'Health/Power1.jpeg', 'Health/Power2.jpg', 'Health/Power3.jpg', 'Health/Power4.webp', 'Gym/Fit1.jpg', 'Gym/Fit3.webp', 'Gym/Fit5.jpg', 'Gym/Fit6.jpeg', 'Gym/Fit7.jpg', 'Gym/Fit8.jpg', 'LifeStyle/Diet1.jpeg', 'LifeStyle/Diet2.jpg', 'LifeStyle/Diet3.jpeg', 'LifeStyle/Diet4.webp','LifeStyle/Diet5.jpeg', 'LifeStyle/Diet6.jpeg']; 

document.getElementById('imageSlider').src =  'Product/'+ imageArray[val];

}


function next(){

clearInterval(myIntervals); 

if(val<24){

val++;   
}

else{
val=0; 

}

var imageArray = ['Beauty/Beauty1.jpg', 'Beauty/Beauty2.jpg', 'Beauty/Beauty3.webp', 'Beauty/Beauty4.webp', 'Beauty/Beauty5.jpg', 'Beauty/Beauty6.jpg', 'Beauty/Beauty7.webp', 'Beauty/Beauty8.webp', 'Beauty/Beauty9.jpg', 'Health/Power1.jpeg', 'Health/Power2.jpg', 'Health/Power3.jpg', 'Health/Power4.webp', 'Gym/Fit1.jpg', 'Gym/Fit3.webp', 'Gym/Fit5.jpg', 'Gym/Fit6.jpeg', 'Gym/Fit7.jpg', 'Gym/Fit8.jpg', 'LifeStyle/Diet1.jpeg', 'LifeStyle/Diet2.jpg', 'LifeStyle/Diet3.jpeg', 'LifeStyle/Diet4.webp','LifeStyle/Diet5.jpeg', 'LifeStyle/Diet6.jpeg']; 

document.getElementById('imageSlider').src =  'Product/'+ imageArray[val];

} 




function stop(){

clearInterval(myIntervals); 

}



    





















  </script>



</body>

</html>