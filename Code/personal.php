<?php 
 class personalInfo {
     public $name;
     public $phone;
     public $mail;
     public $adress;
     public $mapURL;

    function __construct($name,$phone,$mail,$adress,$mapURL){
        $this->name=$name;
        $this->phone=$phone;
        $this->mail=$mail;
        $this->adress=$adress;
        $this->mapURL=$mapURL;
    }
 }

 $info = new personalInfo("Noam Boni","0506000569","noamboni55@gmail.com","Be'er Sheva Bazel 67","https://www.google.co.il/maps/place/%D7%91%D7%96%D7%9C+67,+%D7%91%D7%90%D7%A8+%D7%A9%D7%91%D7%A2%E2%80%AD/@31.2509069,34.7924767,17z/data=!3m1!4b1!4m5!3m4!1s0x1502666c70b21337:0xc78665415053d9a7!8m2!3d31.2509069!4d34.790288");

?>

<section id="personal-info">
        <div>
            <h1>Personal info</h1>
            <p><?php echo $info->name; ?> </p>
            <hr>
            <a href="tel:<?php echo $info->phone; ?>"><?php echo $info->phone; ?></a>
            <hr>
            <a href="mailto:<?php echo $info->mail; ?>
            &subject=Hi%20Noam%20Boni
            &body=Good%20day"><?php echo $info->mail; ?></a>
            <hr>
            <a href=<?php echo $info->mapURL; ?>
                target="_blank"><?php echo $info->adress; ?></a>
            <hr>
        </div>
        <img id="myImg" class="image" src="./Pictures/noam.jpg">
    </section>

    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>