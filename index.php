
<?php
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
                $result = $connect->query($querrypdts);
                while ($row = mysqli_fetch_assoc($result)) {
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['product_id']);
                }
                
                ?>
        </div>
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
.main{
    width: 100%;
    height: 100%;
    padding: 2%;
    position: relative;
    overflow: hidden;
    background:none;
}
    </style>


    <script >
        var circle = document.getElementById('circle');
        var up = document.getElementById("up");
        var down = document.getElementById("down");
        var rotateValue = circle.style.transform;
        var rotateSum;
        up.onclick = function(){
            rotateSam = rotateValue +"rotate(-90deg)";
            circle.style.transform = rotateSam;
            rotateValue = rotateSam;
        }
        down.onclick = function(){
            rotateSam =rotateValue +"rotate(90deg)";
            circle.style.transform = rotateSam;
            rotateValue = rotateSam;
        }
    </script>
</body>
</html>