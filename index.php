<!DOCTYPE html>
<!--
Copyright (C) 2017 RTG
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> INDI2U | Welcome </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../bootstrap.min.css">
        <link rel="stylesheet" href="/css/mudah_homepage_min_00193.css" type="text/css">
        <link href="/css/mudah_homepage_libraries.css?00001" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <style>
                   
                /* 
                    Only Needed in Multi-Coloured Variation 
                                                               */
                .social-fb:hover {
                    color: #3B5998;
                }
                .social-tw:hover {
                    color: #4099FF;
                }
                .social-gp:hover {
                    color: #d34836;
                }
                .social-em:hover {
                    color: #f39c12;
                }
                .nomargin { 
                    margin:0px; padding:0px;
                }
                .footer-bottom {
                    background-color: #15224f;
                    min-height: 30px;
                    width: 100%;
                }
                .copyright {
                    color: #fff;
                    line-height: 30px;
                    min-height: 30px;
                    padding: 7px 0;
                }
                .design {
                    color: #fff;
                    line-height: 30px;
                    min-height: 30px;
                    padding: 7px 0;
                    text-align: right;
                }
                .design a {
                    color: #fff;
                }

                .full {
                    width: 100%;    
                }
                .gap {
                    height: 30px;
                    width: 100%;
                    clear: both;
                    display: block;
                }
                .footer {
                    background: #EDEFF1;
                    height: auto;
                    padding-bottom: 30px;
                    position: relative;
                    width: 100%;
                    border-bottom: 1px solid #CCCCCC;
                    border-top: 1px solid #DDDDDD;
                }
                .footer p {
                    margin: 0;
                }
                .footer img {
                    max-width: 100%;
                }
                .footer h3 {
                    border-bottom: 1px solid #BAC1C8;
                    color: #54697E;
                    font-size: 18px;
                    font-weight: 600;
                    line-height: 27px;
                    padding: 40px 0 10px;
                    text-transform: uppercase;
                }
                .footer ul {
                    font-size: 13px;
                    list-style-type: none;
                    margin-left: 0;
                    padding-left: 0;
                    margin-top: 15px;
                    color: #7F8C8D;
                }
                .footer ul li a {
                    padding: 0 0 5px 0;
                    display: block;
                }
                .footer a {
                    color: #78828D
                }
                .supportLi h4 {
                    font-size: 20px;
                    font-weight: lighter;
                    line-height: normal;
                    margin-bottom: 0 !important;
                    padding-bottom: 0;
                }
                .newsletter-box input#appendedInputButton {
                    background: #FFFFFF;
                    display: inline-block;
                    float: left;
                    height: 30px;
                    clear: both;
                    width: 100%;
                }
                .newsletter-box .btn {
                    border: medium none;
                    -webkit-border-radius: 3px;
                    -moz-border-radius: 3px;
                    -o-border-radius: 3px;
                    -ms-border-radius: 3px;
                    border-radius: 3px;
                    display: inline-block;
                    height: 40px;
                    padding: 0;
                    width: 100%;
                    color: #fff;
                }
                .newsletter-box {
                    overflow: hidden;
                }
                .bg-gray {
                    background-image: -moz-linear-gradient(center bottom, #BBBBBB 0%, #F0F0F0 100%);
                    box-shadow: 0 1px 0 #B4B3B3;
                }
                .social li {
                    background: none repeat scroll 0 0 #B5B5B5;
                    border: 2px solid #B5B5B5;
                    -webkit-border-radius: 50%;
                    -moz-border-radius: 50%;
                    -o-border-radius: 50%;
                    -ms-border-radius: 50%;
                    border-radius: 50%;
                    float: left;
                    height: 36px;
                    line-height: 36px;
                    margin: 0 8px 0 0;
                    padding: 0;
                    text-align: center;
                    width: 36px;
                    transition: all 0.5s ease 0s;
                    -moz-transition: all 0.5s ease 0s;
                    -webkit-transition: all 0.5s ease 0s;
                    -ms-transition: all 0.5s ease 0s;
                    -o-transition: all 0.5s ease 0s;
                }
                .social li:hover {
                    transform: scale(1.15) rotate(360deg);
                    -webkit-transform: scale(1.1) rotate(360deg);
                    -moz-transform: scale(1.1) rotate(360deg);
                    -ms-transform: scale(1.1) rotate(360deg);
                    -o-transform: scale(1.1) rotate(360deg);
                }
                .social li a {
                    color: #EDEFF1;
                }
                .social li:hover {
                    border: 2px solid #2c3e50;
                    background: #2c3e50;
                }
                .social li a i {
                    font-size: 16px;
                    margin: 0 0 0 5px;
                    color: #EDEFF1 !important;
                }
                .footer-bottom {
                    background: #E3E3E3;
                    border-top: 1px solid #DDDDDD;
                    padding-top: 10px;
                    padding-bottom: 10px;
                }
                .footer-bottom p.pull-left {
                    padding-top: 6px;
                }
                .payments {
                    font-size: 1.5em;   
                }
                .right {
                    float: right;
                    padding-right: 60px;
                }

                a {
                    color: black;
                    font-family: Arial;
                    font-weight: 200;
                }

                a:hover {
                    color: red;
                }

                body {
                    background-color: white;
                }

                .body { 
                    background-color: white;
                    width: 900px;
                    height: 700px;
                    padding: 40px;
                    /**  box-shadow: 0 0 45px; **/
                }

                .form-group {
                    padding-right: 20px;
                }

                .strong {
                    background-color:#dcdcc3;
                    font-weight:bold;
                    color:#000000;
                }

        </style>

        <nav class="navbar navbar-default">
            
            <div class="container-fluid">
                
                <div class="navbar-header">
                    
                    <a class="navbar-brand" href="#"> INDI2U </a>
                    
                </div>
                
                <ul class="nav navbar-nav navbar-left">
                   
                    <li> <a href="../"> Back </a> </li>
                    <li class="active"> <a href="#"> Placing your Ads </a> </li>
                    
                </ul>
                
            </div>
            
        </nav>

    </head>

    <body>
        
        <center>

        <br><br><br><br><br><br>

        <div class="body">
            
            <h3> <strong> Category </strong> </h3><br>

            <form>
                
            <select name="category" class="form-control" required>
                
                <option value="#"> Select your Category </option>
                <option value="#" class="strong" disabled> -- Vehicles -- </option>
                <option value="cars"> Cars </option>
                 <option value="Cars"> Cars (12 photos) </option>
                 <option value="Cars"> Motorcycles </option>
                 <option value="Cars"> Car accessories & Parts  </option>
                 <option value="Cars"> Motorcycles accessories & Parts</option>
                 <option value="Cars"> Other accessories & Parts </option>
                 <option value="Cars"> Commercial Vehicles & Boats </option>

                 <option value="#" class="strong" disabled> -- Properties -- </option>
                 <option value="Properties"> Apartments  </option>
                 <option value="Properties"> Houses  </option>
                 <option value="Properties"> Commercial Properties  </option>
                 <option value="Properties"> Land  </option>
                 <option value="Properties"> Rooms  </option>

                  <option value="#" class="strong" disabled> -- Electronics -- </option>
                   <option value="Electronics"> Mobile phones & Gadgets  </option>
                    <option value="Electronics"> Accessories for Phones & Gadgets  </option>
                     <option value="Electronics"> TV/Audio/Video  </option>
                      <option value="Electronics"> Computers & Accessories  </option>
                       <option value="Electronics"> Cameras & Photography  </option>
                        <option value="Electronics"> Games & Console  </option>

                         <option value="#" class="strong" disabled> -- HOME & PERSONAL ITEMS -- </option>
                         <option value="HOME & PERSONAL ITEMS"> Bags & Wallets  </option>
                         <option value="HOME & PERSONAL ITEMS"> Shoes  </option>
                         <option value="HOME & PERSONAL ITEMS"> Watches & Fashion accessories  </option>
                         <option value="HOME & PERSONAL ITEMS"> Clothes  </option>
                         <option value="HOME & PERSONAL ITEMS"> Health & Beauty  </option>
                         <option value="HOME & PERSONAL ITEMS"> Wedding   </option>
                         <option value="HOME & PERSONAL ITEMS"> Moms & Kids  </option>
                         <option value="HOME & PERSONAL ITEMS"> Bed & Bath  </option>
                         <option value="HOME & PERSONAL ITEMS"> Home appliances  </option>
                         <option value="HOME & PERSONAL ITEMS"> Furniture & Decorations  </option>
                         <option value="HOME & PERSONAL ITEMS"> Garden Items  </option>

                         <option value="#" class="strong" disabled> -- LEISURE/SPORTS/HOBBIES -- </option>
                         <option value="LEISURE/SPORTS/HOBBIES"> Textbook  </option>
                         <option value="LEISURE/SPORTS/HOBBIES"> Sports & Outdoors  </option>
                         <option value="LEISURE/SPORTS/HOBBIES"> Hobby & Collection  </option>
                         <option value="LEISURE/SPORTS/HOBBIES"> Music/Movies/Books/Magazines  </option>
                         <option value="LEISURE/SPORTS/HOBBIES"> Pets  </option>
                         <option value="LEISURE/SPORTS/HOBBIES"> Tickets & Vouchers  </option>
                         <option value="LEISURE/SPORTS/HOBBIES"> Music Instrument  </option>

                         <option value="#" class="strong" disabled> -- BUSINESS TO BUSINESS -- </option>
                          <option value="BUSINESS TO BUSINESS"> Professional/Business Equipment  </option>
                           <option value="BUSINESS TO BUSINESS"> Business for Sale  </option>

                           <option value="#" class="strong" disabled> -- JOBS & SERVICES -- </option>
                            <option value="JOBS & SERVICES"> Jobs  </option>
                             <option value="JOBS & SERVICES"> Services  </option>

                              <option value="#" class="strong" disabled> -- TRAVELS -- </option>
                              <option value="TRAVELS"> Accommodations & Homestays  </option>
                              <option value="TRAVELS"> Tours & Holidays  </option>

                               <option value="#" class="strong" disabled> -- EVERTHING ELSE -- </option>
                               <option value="EVERTHING ELSE"> Others  </option>
                               <option value="EVERTHING ELSE"> Food  </option>
                               <option value="EVERTHING ELSE"> Garage sale  </option>




            </select>

            <br><br>

            <div class="form-inline">
                <div class="form-group">
                    <input name="group1" type="radio" id="radio1" checked>
                    <label for="radio1">For Sale</label>
                </div>

                <div class="form-group">
                    <input name="group1" type="radio" id="radio2">
                    <label for="radio2">Wanted</label>
                </div>
            </div>

            <br><br>

            <hr />

            <br><br>

            <h3> <strong> Ad Details </strong> </h3>

            <div class="form-inline">

               <h3> Make <select name="make" class="form-control"> <option value="#"> Make </option> </select> Model </h3>

            </div>

            </form>

        </div>

        </center>
        
    </body>

<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> About US </h3>
                    <ul>
                        <li> <a href="#"> To be added </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Our Services </h3>
                    <ul>
                        <li> <a href="india/cars"> Cars </a> </li>
                        <li> <a href="india/electronics"> Electronics </a> </li>
                        <li> <a href="india/jobs"> Jobs </a> </li>
                        <li> <a href="india/properties"> Properties </a> </li>
                        <li> <a href="india/home-appliances"> Home Appliances </a> </li>
                        <li> <a href="india/sports-hobbies"> Sports & Hobbies </a> </li>
                        <li> <a href="india/properties"> Properties </a> </li>
                        <li> <a href="india/women-col"> Women's Collections </a> </li>
                        <li> <a href="india/pets"> Pets </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">  
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Our Support </h3>
                    <ul>
                        <li> <a href="mailto:igadget28@gmail.com"> Email us NOW! </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Our Social Media </h3>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
                    </ul>
                </div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
    
    <div class="footer-bottom">
        <div class="container"><center>
            <p> Copyright © INDI2U 2017. All right reserved. </p>
        </div></center>
    </div>
    <!--/.footer-bottom--> 
</footer>

</html>