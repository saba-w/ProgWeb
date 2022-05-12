<?php 
require_once("lang.php");
include 'head.php' ?>

<body>

    <ul>
        <div class="row">
            <div class="col-md-5" style="padding:10px;">
                <img src="./pictures/berbere.jpg" alt="<?php echo $lang['berbere'] ?>">
            </div>
            <div class="col-md-5">
                <p><?php echo $lang['Berbere'] ?></p>
            </div> 
            <div class="col-md-5" style="padding:10px;">
                <img src="./pictures/key-shiro.jpg" alt="<?php echo $lang['shiro'] ?>" style="width:500px;height:600px;">
            </div>
            <div class="col-md-5">
                <p><?php echo $lang['Shiro'] ?></p>
            </div>   
            <div class="col-md-5" style="padding:10px;">
                <img src="./pictures/nech-shiro.jpg" alt="<?php echo $lang['shiro'] ?>" style="width:500px;height:600px;">
            </div>
            <div class="col-md-5">
                <p><?php echo $lang['Shiro'] ?></p> 
            </div> 
        </div> 
    </ul>
</body>
<?php include 'footer.php' ?>
