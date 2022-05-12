<?php 
require_once("lang.php");
include 'head.php' ?>

<body>
    <ul>
        <div class="row">
            <div class="col-md-5" style="padding:10px;">
                <img src="./pictures/red.jpg" alt="<?php echo $lang['Red'] ?>"> 
            </div>
            <div class="col-md-5">
                <p><?php echo $lang['Red-dress'] ?></p>
            </div>
            <div class="col-md-5" style="padding:10px;">
                <img src="./pictures/multi-dress.jpg" alt="<?php echo $lang['Md'] ?>">
            </div>
            <div class="col-md-5">
                <p><?php echo $lang['Multi-dress'] ?></p>
            </div>
            <div class="col-md-5" style="padding:10px;">
                <img src="./pictures/yellow.jpg" alt="<?php echo $lang['Yelow'] ?>" style="width:500px;height:600px;">
            </div>
            <div class="col-md-5">
                <p><?php echo $lang['Yellow-dress'] ?></p>
            </div>
        </div>   
    </ul>
</body>

<?php include 'footer.php' ?>