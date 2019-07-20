<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
<meta name="viewport" content="user-scalable=no"> 
<style>
		img{
			border:opx solid white;
width: 100%;
height: 100%;
max-height:610px;
}
        .loader{
        border:1px solid transparent;
        border-radius:75%;
        position:absolute;
        top:67%;
        left:44%;
        width:50px;
        height:50px;
        border-top:7px solid brown;
        -webkit-animation:spin1s linear infinite;
        animation:spin 1s linear infinite;
        }
                @-webkit-keyframes spin
        {
        0%{-webkit-transform:rotate(180deg);}
        100%{-webkit-transform:rotate(360deg);}
        }
        @keyframes spin
        {
        0%{transform:rotate(0deg);}
        100%{transform:rotate(360deg);}
        }
        .container
        {
            position: relative;
            text-align: center;
            color: white;
        }
     </style>
    </head>
   
    <body>
    
    <div class="container">
           <img  src="PDFtoJPG.me-1.jpg" alt=""  />;
           <div class="loader"></div>
		   
    </div>       
     
        
        <?php
        header("Refresh:2.5; url=index.php");
        // put your code here
        ?>
    </body>
</html>
