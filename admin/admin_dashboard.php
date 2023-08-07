


<?php
include "../db_conn.php";
?>
<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/stylemain.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/cssmenu.css" />
    <title> admin dashboard</title>
<style>
    html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,dl,dt,dd,ol,nav ul,nav li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}
article, aside, details, figcaption, figure,footer, header, hgroup, menu, nav, section {display: block;}
ol,ul{list-style:none;margin:0;padding:0;}
blockquote,q{quotes:none;}
blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}
.glass-effect {
        background-color: rgba(255, 255, 255, 0.3);
  backdrop-filter: blur(15px);
  border-radius: 10px;
  padding: 20px;
  margin-top:50px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
}
body{
    background-color: white;
    background-image: url('../assets/img/login.jpeg');
    background-size: cover;
    background-repeat: no-repeat;
    }
    .header_top {
	    background:white;
    }
    .wrap {
	    width:80%;
	    margin: 0 auto;
	    transition:all .2s linear;
	    -moz-transition:all .2s linear;/* firefox */
	    -webkit-transition:all .2s linear; /* safari and chrome */
	    -o-transition:all .2s linear; /* opera */
	    -ms-transition:all .2s linear;
    }
    .clear{
        clear:both;
    }
    .header_bottom {
	    background:#391378;
	    padding:10px 0;
	    box-shadow:inset 0px 8px 10px #d10bc1;
}
h6{
    font-size: 12px;
    color: black;
    text-transform:uppercase;
    font-weight: bolder;
    text-align: center;
}
.menu {
	float: right;
}
.menu li {
	display:inline-block;
    
}
.menu li a {
	font-family: 'ambleregular';
	font-size:20px;
	text-transform:uppercase;
	color: #fff;
	padding:4px 20px;
    -webkit-transition: all .9s;
   	-moz-transition: all .9s;
   	-o-transition: all .9s;
   -ms-transition: all .9s;
   transition: all .9s;
   text-decoration-line: none;
}
div p{
    font-size: 24px;
    font-family: 'arial,sans-serif';
    text-transform:uppercase;
    color: black;
    font-weight: bolder;
    padding-top: 4%;
    padding-left: 4%;
    text-decoration-line: underline;
}
@media only screen and (max-width: 480px) {
	.wrap {
		width: 90%;
	}
	.logo{
		float:none;
		text-align:center;
	}
    .menu{
		float:none;
	    text-align:center;
	}
	.menu li a{
		padding:10px 6px;
	}
    .image_1_of_3{
	width:94%;
	padding:3%;
	margin:5px 0;
}
}
@media only screen and (max-width: 320px) {
	.wrap {
		width: 95%;
	}
    .menu li a{
		font-size:0.65em;
		padding:10px 2px;
	}
    .content p{
		font-size:20px;
	}
    .image_1_of_3 h3{
		font-size:1.2em;
	}
}
@media only screen and (max-width: 640px) {
	.wrap {
		width: 95%;
	}
    .menu li a{
		padding:10px 7px;
	}
    .image_1_of_3 h3{
		font-size:1.4em;
	}
}
@media only screen and (max-width: 800px) {
	.wrap {
		width: 95%;
	}
	.menu li a{
		padding:10px 15px;
	}
    .content{
		padding:30px 0;
	}
	.content p{
		font-size:20px;
	}
}
@media only screen and (max-width: 1024px) {
	.wrap {
		width: 90%;
	}
}
.image {
	clear: both;
	padding: 0px;
	margin: 0px;
	padding:1.5%;
	border: 1px solid lightgray;
	background:#391378;
	border-radius: 10px;-webkit-border-radius:10px;-moz-border-radius:10px;-o-border-radius: 10px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.dimages{
	padding:50px 0;
}
.section {
	clear: both;
	padding: 0px;
	margin: 0px;
}
.group:before,
.group:after {
    content:"";
    display:table;
}
.group:after {
    clear:both;
}
.group {
    zoom:1;
}
.image_1_of_3:first-child { 
	margin-left: 0; 
} 
.image_1_of_3{
	width: 29.2%;
	padding:1.5%; 
	display: block;
	float:left;
    text-align:center;
	margin: 1% 0 1% 1.6%;
}
.image_1_of_3  img {
	max-width:100%;
	display:block;
	padding: 3px;
	background: #FFF;
	border: 1px solid #DDD;
 
	border-radius: 20px;-webkit-border-radius: 20px;-moz-border-radius: 20px;-o-border-radius: 20px;
}
.image_1_of_3  h3{
	font-size: 1.5em;
	margin:10px 0;
	color:white;
	font-family: 'bonvenocflight';
	text-transform: uppercase;
}
.image_1_of_3  p  {
	font-size: 0.85em;
	color: #fcfcfc;
	line-height: 1.8em;
}
</style>
</head>
    <body>
        
            <div class="header_bottom">
                <div class="wrap">
	     	<div id="cssmenu">
                         <ul>
                            <li ><a href="admin_dashboard.php"><span>DASHBOARD</span></a></li>
                            <li class="has-sub"><a href="#"><span>CATEGORIES</span></a>
                                <ul>
                                   <li ><a href="add_new_category.php"><span>Add Categories</span></a></li>
                                </ul>
                             </li>
                             <li class="has-sub"><a href="#"><span>AUTHORS</span></a>
                                <ul>
                                   <li ><a href="add_author.php"><span>Add Author</span></a></li>
                                   <li ><a href="author_listing.php"><span>Author Listing</span></a></li>
                                </ul>
                             </li>
                             <li class="has-sub"><a href="#"><span>BOOKS</span></a>
                                <ul>
                                   <li ><a href="add_book.php"><span>Add Book</span></a></li>
                                   <li ><a href="manage_book.php"><span>Manage Book</span></a></li>
                                   <li ><a href="edit_book.php"><span>Edit Book</span></a></li>
                                 </ul>
                             </li>
                             <li class="has-sub"><a href="#"><span>ISSUE BOOKS</span></a>
                                <ul>
                                   <li ><a href="issue_book.php"><span>Issue</span></a></li>
                                   <li ><a href="manage_issued_book.php"><span>Issued Book</span></a></li>
                                </ul>
                             </li>
                             <li class="has-sub"><a href="#"><span>USERS</span></a>
                                <ul>
                                    <li ><a href="manage_rstudents.php"><span>Details</span></a></li>
                                </ul>
                            </li>
                            <li ><a href="change_password.php"><span>CHANGE PASSWORD</span></a></li>
                            
                            
                             <div class="clear"></div>
                         </ul>
                     </div>
              <div class="clear"></div>
                  </div>	     
              </div>	
               <div class="strip"> </div>
            </div> 
            <div class="header">
            <div class="header_top">
                <div class="wrap">
                 <div class="logo">
                            <img src="../assets/img/LOGO.png" alt="" /></a>
                        </div>
                <div class="clear"></div>
              </div>
            </div>
            
            <div class="main">
                <div class="content">
                     <div class="wrap">
                        
                         <div class="glass-effect">
                            <div class="dimages">
                            
                            <div class="section group">
                            <div class="row">
                            <div class="image_1_of_3">
                            <center><a href="manage_book.php"><img src="../assets/img/books.png" alt="" /></a>
                                  <h6>Book Listed</h6></center> 
                            </div>
                            <div class="image_1_of_3">
                                   <center><a href="manage_issued_book.php"><img src="../assets/img/notreturned.png" alt="" /></a>
                                   <h6>Books Not Returned</h6></center>                        
                            </div>
                            <div class="image_1_of_3">
                                <center><a href="author_listing.php"><img src="../assets/img/author.png" alt="" /></a>
                                  <h6>Authors</h6></center>  
                                 
                           </div>
                          </div>
                      </div>
                   </div>
                </div>
             </div>
             </div>
</div>
                <div class="clear"></div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

    </body>
</html>