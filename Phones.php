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
                $result = $connect->query($querryphone);
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
    <div class="header">

   <div class="navbar">
       <div class="logo">
           <img src="images/e.webp" width="125" alt="">
       </div>
   </div>

   <div class="row">
       <div class="col2">
           <h1>Get Your Self <br>A New Phone</h1>
           <p>Money isnt all about Knowledge <br> but working hard to get it</p>
           <a href="" class="btn">Explore Now &#8594;</a>
       </div>
       <div class="col2">
           <img src="images/m3.webp" alt="">
       </div>
   </div>

</div>
<div class="categories">
    <div class="small-container">
    <div class="row">
        <div class="col3">
         <img src="images/e2.webp" alt="">

        </div>
        <div class="col3">
            <img src="images/m.webp" alt="">
   
           </div>
           <div class="col3">
            <img src="images/m2.webp" alt="">
   
           </div>
    </div>
</div>
</div>

<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col4">
            <img src="images/e3.webp" alt="">
            <h4>Camon 16 pro</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <p>$500.00</p>
            <button>Acquire</button>
        </div>
        <div class="col4">
            <img src="images/e4.webp" alt="">
            <h4>Galaxy J4</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <p>$600.00</p>
            <button>Acquire</button>
        </div>
        <div class="col4">
            <img src="images/e5.webp" alt="">
            <h4>Note 5</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
            </div>
            <p>$700.00</p>
            <button>Acquire</button>
        </div>
        <div class="col4">
            <img src="images/m.webp" alt="">
            <h4>Alcatel</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <p>$300.00</p>
            <button>Acquire</button>
        </div>
    </div>

    <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col4">
            <img src="images/e6.webp" alt="">
            <h4>Camon 16 pro</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <p>$500.00</p>
            <button>Acquire</button>
        </div>
        <div class="col4">
            <img src="images/e7.webp" alt="">
            <h4>Galaxy J4</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <p>$600.00</p>
            <button>Acquire</button>
        </div>
        <div class="col4">
            <img src="images/e8.webp" alt="">
            <h4>Note 5</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
            </div>
            <p>$700.00</p>
            <button>Acquire</button>
        </div>
        <div class="col4">
            <img src="images/e9.webp" alt="">
            <h4>Alcatel</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <p>$300.00</p>
            <button>Acquire</button>
        </div>
    </div>

    <div class="row">
        <div class="col4">
            <img src="images/e10.webp" alt="">
            <h4>Camon 16 pro</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <p>$500.00</p>
            <button>Acquire</button>
        </div>
        <div class="col4">
            <img src="images/e13.webp" alt="">
            <h4>Galaxy J4</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <p>$600.00</p>
            <button>Acquire</button>
        </div>
        <div class="col4">
            <img src="images/e14.webp" alt="">
            <h4>Note 5</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
            </div>
            <p>$700.00</p>
            <button>Acquire</button>
        </div>
        <div class="col4">
            <img src="images/e15.webp" alt="">
            <h4>Alcatel</h4>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
            <p>$300.00</p>
            <button>Acquire</button>
        </div>
    </div>



</div>


<div class="offer">
    <div class="smallcontainer">
        <div class="row">
            <div class="col2">
                <img src="images/x2.webp" class="offerimg" alt="">
            </div>
            <div class="col2">
                <p>
                    Exclusively Available here
                </p>
                <h1>
                    Iphone 11
                </h1>
                <small>
                    Very good storage capacity
                </small>
                <a href="" class="btn">Purchase &#8594</a>
            </div>
        </div>
    </div>
</div>

<div class="testimonial">
    <div class="smallcontainer">
        <div class="row">
            <div class="col3">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <p>Easy to fall because of the
                     slim in size....</p>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <img src="images/collins.jpg" alt="" class="c">
                <h3>Bigomba Collins </h3>
            </div>

            <div class="col3">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <p>very good storage </p>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <img src="images/u1.webp" alt="" class="c">
                <h3>Georgina Woods </h3>
            </div>

            <div class="col3">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                <p>Very nice image quality</p>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <img src="images/u2.webp" alt="" class="c">
                <h3>Nicky Jones </h3>
            </div>
        </div>
    </div>
</div>
-->
</body>
