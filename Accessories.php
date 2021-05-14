<?php
//session_start();
include ('includes/header.php');
include ('includes/connect.php');
?>
   
<body>

<div class="categories">
    <div class="grid" id="grid">
      <div id="" class="prod-view1">
        <div class="owl-carousel owl-theme">
                <?php
                require_once('includes/component.php');
                $result = $connect->query($querryaccessories);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                ?>
        </div>
      </div>
    </div>
    <style>
    
    .categories{
 background:rgb(190, 173, 173);

    }
    #grid {
    border: 1px #ccc solid;
    float:left;    
}.grid a:hover{
    color: #be1b21; text-decoration: underline;
}
#grid div { 
    float: left;
    padding: 5px;
    text-align: center;
    }

#grid div img{
    width: 200px;
    border-radius: 2% 2%; 
}
#add2cart{
    background-color: #cc1218; color: white;border-radius: 5px;
}
.categories{
    width: 100%;
    image-orientation: flip;  
}
#gridheading{
font-family: 'Times New Roman', Times, serif; font-weight: bold; padding-left: 40%;
}

#household > img{
    height: 170px;
    width: 300px;
    
}
.nav-item{
border-right: 1px solid rgb(233, 187, 187);

}
ul #category{
    columns: 2;padding-top: 30px; border: 1px #be1b21 solid;
}
.container {
    height:100% !important;margin: 0 !important;padding: 0 !important;color: black;
}
.container li:hover{
    background-color: black; color: white !important;
}
a {
    color: black;text-decoration: none ;width:100%;display:block;height:100%;
}
a:hover{
    text-decoration: none ;width:100%;display:block;height:100%;
}
li {
      list-style-type: none !important;
   
}

    </style>
<!--
<table id="table">
        
       <caption></caption>
       <tr>
           <td colspan="2"><div class="header">Accessories</div></td>
           <td colspan="2" style="text-align: right;"> 
            <img src="images/a1.webp" class="indra" alt="">
           </td>
       </tr>
       <tr><td colspan="4">
         
       </td></tr>
      <tr>
       <td>
           <div class="diiv1">
           <img src="images/a2.webp" style="width: 50%;" alt="">
           <p>
               Iphone 11pro
           </p>
           <button class="btn btn1">category 1</button>
           <br><br>
        </div>
       </td>

       <td >
        <div class="diiv1">
        <img src="images/a3.webp" style="width: 50%;" alt="">
        <p>AT$T</p>
        <button class="btn btn2">category 2</button>
        <br><br>
        </div>
       </td>

       <td>
        <div class="diiv1">
            <img src="images/a4.webp" style="width: 50%;" alt="">
            <p>Nokia</p>
            <button class="btn btn3">category 3</button>
            <br><br>
        </div>
    
    </td>

       <td>
        <div class="diiv1">
        <img src="images/a5.webp" style="width: 50%;" alt="">
        <p>Alcatel</p>
        <button class="btn btn4">category 4</button>
        <br><br>
        </div>
       </td>
      </tr>
      <tr>
          <td colspan="6">
           &nbsp;
          </td>
      </tr>
    </table>   

    <div class="container">

        <div class="box">
            <h2>01</h2>
            <h3>Service One</h3>
            <p>We have made on time delivery services as flexible as possible. We make same day deliveries within Kampala. Your items will be there within hours of making orders. We contact you about time ...</p>
        </div>

        <div class="box">
            <h2>02</h2>
            <h3>Service Two</h3>
            <p>Phone store Company also offers eCommerce solutions with 2ambale the mobile wardrobe as one of the products. This product allows you to order for what you may want to wear while in Kampala and its delivered to you in .</p>
        </div>

        <div class="box">
            <h2>03</h2>
            <h3>Service Three</h3>
            <p>We started in early 2009, this company has been at the forefront of providing the best transport and delivery services in the industry within Uganda and as of since 2012 outside of Uganda as well within ...</p>
        </div>

    </div>
-->
</body>
