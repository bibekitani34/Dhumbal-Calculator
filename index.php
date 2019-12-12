<html>
<head>
<title>Dhumbal Calculator</title>
<link rel="image" href= "cards.png">
<style>
    h2{
        color:red;
    }

    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
    -o-font-smoothing: antialiased;
    font-smoothing: antialiased;
    text-rendering: optimizeLegibility;
    }

    body {
    font-family: "Roboto", Helvetica, Arial, sans-serif;
    font-weight: 100;
    font-size: 12px;
    line-height: 30px;
    color: #777;
    background: #800000;
    }

    .container {
    max-width: 400px;
    width: 100%;
    margin: 0 auto;
    position: relative;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact input[type="tel"],
    #contact input[type="url"],
    #contact textarea,
    #contact button[type="submit"] {
    font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
    }

    #contact {
    background: #F9F9F9;
    padding: 25px;
    margin: 150px 0;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    }

    #contact h3 {
    display: block;
    font-size: 30px;
    font-weight: 300;
    margin-bottom: 10px;
    }

    #contact h4 {
    margin: 5px 0 15px;
    display: block;
    font-size: 13px;
    font-weight: 400;
    }

    fieldset {
    border: medium none !important;
    margin: 0 0 10px;
    min-width: 100%;
    padding: 0;
    width: 100%;
    }

    #contact input[type="text"],
    #contact input[type="email"],
    #contact input[type="tel"],
    #contact input[type="url"],
    #contact textarea {
    width: 100%;
    border: 1px solid #ccc;
    background: #FFF;
    margin: 0 0 5px;
    padding: 10px;
    }

    #contact input[type="text"]:hover,
    #contact input[type="email"]:hover,
    #contact input[type="tel"]:hover,
    #contact input[type="url"]:hover,
    #contact textarea:hover {
    -webkit-transition: border-color 0.3s ease-in-out;
    -moz-transition: border-color 0.3s ease-in-out;
    transition: border-color 0.3s ease-in-out;
    border: 1px solid #aaa;
    }

    #contact textarea {
    height: 100px;
    max-width: 100%;
    resize: none;
    }

    #contact button[type="submit"] {
    cursor: pointer;
    width: 10%;
    border: none;
    background: #800000;
    color: #FFF;
    margin: 0 0 5px;
    padding: 10px;
    font-size: 15px;
    }

    #contact button[type="submit"]:hover {
    background: #43A047;
    -webkit-transition: background 0.3s ease-in-out;
    -moz-transition: background 0.3s ease-in-out;
    transition: background-color 0.3s ease-in-out;
    }

    #contact button[type="submit"]:active {
    box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
    }

    .copyright {
    text-align: center;
    }

    #contact input:focus,
    #contact textarea:focus {
    outline: 0;
    border: 1px solid #aaa;
    }

    ::-webkit-input-placeholder {
    color: #888;
    }

    :-moz-placeholder {
    color: #888;
    }

    ::-moz-placeholder {
    color: #888;
    }

    :-ms-input-placeholder {
    color: #888;
    }
    
</style>
</head>

    <body>

    <?php
        $_SESSION['order'] = 0;
        $_SESSION['man'] = 0;
        $_SESSION['dog'] = 0;
        $_SESSION['cat'] = 0;
        
            session_start();
            
            if(isset($_POST['submit'])){
                $_SESSION['order']++;
            }else if(isset($_POST['submit1'])){
                $_SESSION['order']--;
            }
            if(isset($_POST['submit3'])){
                $_SESSION['man']++;

            }else if(isset($_POST['submit4'])){
                $_SESSION['man']--;
            }

            if(isset($_POST['submit5'])){
            

                $_SESSION['dog']++;

            }else if(isset($_POST['submit6'])){
                $_SESSION['dog']--;
            }

            if(isset($_POST['submit7'])){
            

                $_SESSION['cat']++;

            }else if(isset($_POST['submit8'])){
                $_SESSION['cat']--;
            }

            if($_SESSION['order'] == 10){
                
                $ans = "Bibek lost!!!";
                

            }else if($_SESSION['man'] == 10){

                $k = "Adarsh lost!!!";
            }else
            if($_SESSION['dog'] == 10){

                $l = "Sam lost!!!";
            }else
            if($_SESSION['cat'] == 10){

                $m = "Mrm lost!!!";
            }

     ?>
    <div class="container">  
        <form id="contact" method="post" >
            <h3>Dhumbal Calculator</h3>
            <h4>Latest Dhumbal Updates</h4>
            <h2 align="center"><?= $ans ?></h2>
            <h2 align="center"><?= $k ?></h2>
            <h2 align="center"><?= $l ?></h2>
            <h2 align="center"><?= $m ?></h2>
            <h2 align="center"><?= $ans1 ?></h2>
           
            <fieldset>
               <h1>Bibek</h1>
            </fieldset>
            <button  type="submit" value="<?php  ?>" name="submit">+</button>
        <?php
        //   echo "
        //  <input value='".$_SESSION['order']++."'>";
       echo $_SESSION['order'];

 ?>
         <button  name="submit1" type="submit" id="contact-submit" >-</button>
        
         <br>
         <fieldset>
         <h1>Adarsh</h1>
            </fieldset>
         <button name="submit3" type="submit" id="contact-submit" data-submit="...Sending">+</button>
         <?php echo $_SESSION['man']; ?>
         <button name="submit4" type="submit" id="contact-submit" data-submit="...Sending">-</button>
         <br>
         <fieldset>
         <h1>Sam</h1>
            </fieldset>
         <button name="submit5" type="submit" id="contact-submit" data-submit="...Sending">+</button>
         <?php echo $_SESSION['dog']; ?>
         <button name="submit6" type="submit" id="contact-submit" data-submit="...Sending">-</button>
         <fieldset>
         <h1>Mrm</h1>
            </fieldset>
         <button name="submit7" type="submit" id="contact-submit" data-submit="...Sending">+</button>
         <?php echo $_SESSION['cat']; ?>
         <button name="submit8" type="submit" id="contact-submit" data-submit="...Sending">-</button>
    </body>

</html>
