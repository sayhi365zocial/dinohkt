
<!DOCTYPE html>
<?php
    date_default_timezone_set('Asia/Bangkok');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require './PHPMailer/src/PHPMailer.php';
    require './PHPMailer/src/Exception.php';
    require './PHPMailer/src/SMTP.php';

    $errors = [];
    $errorMessage = '';
    $successMessage = '';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $topic = $_POST['topic'];
        $msg = $_POST['msg'];
        $msg_reply = "Hi ".$name."<br>"."We are aware of your problem. Please leave a detailed message of your problem or question here. About our products and services We are always here ready to help.";
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "contact@dinopark.com";
        $mail->Password = "poyzhvbuspouibtx";
        $mail->addReplyTo($email,$name);
        $mail->setFrom($email, $name);
        $mail->addAddress('info@dinopark.com', $name);
        $mail->Subject = $topic;
        $mail->msgHTML("$msg");
        if (!$mail->send()) {
            $errorMessage = "<p class='font-size-24' style='color: red;'>Oops, something went wrong. Please try again later</p>";
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            $mail = new PHPMailer;
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Debugoutput = 'html';
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';
            $mail->SMTPAuth = true;
            $mail->Username = "contact@dinopark.com";
            $mail->Password = "poyzhvbuspouibtx";
            $mail->addReplyTo('info@dinopark.com', 'info@dinopark.com');
            $mail->setFrom('info@dinopark.com', 'Information DinoPark');
            $mail->addAddress($email, 'Information DinoPark');
            $mail->Subject = $topic;
            $mail->msgHTML("$msg_reply");
            $mail->send();
            $successMessage = "<p class='font-size-24' style='color: green;'>Thank you for contacting us :)</p>";
            echo "<meta http-equiv='refresh' content='0'>";
        }
    }
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Find Us </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./img/Dino-park_logo-1.png">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link href="css/top-bar.css" rel="stylesheet">
        <link href="css/app.css" rel="stylesheet">
        <style>
            body {
                background: url('img/bg-texturecolor.png');
                background-repeat: repeat-y;
            }
            .bg1 {
                top: 0px;
                left: 0px;
                width: 100%;
                height: 100%;
                position: absolute;
                background: transparent url('img/banner-findus.png') 0% 0% no-repeat padding-box;
                background-size: contain;
            }
            .d-pic {
                margin-top: 600px;
                margin-left: 140px;
                margin-right: 140px;
            }
            .dino-sketch-01 {
                top: 710px;
                left: 1716px;
                width: 1254px;
                height: 463px;
                position: absolute;
            }
            .dino-sketch-02 {
                top: 930px;
                left: -796px;
                width: 1254px;
                height: 463px;
                position: absolute;
            }
            .dino-sketch-03 {
                top: 1406px;
                left: 1196px;
                width: 1169px;
                height: 683px;
                position: absolute;
            }
            .stain1 {
                top: 234px;
                left: 1083px;
                width: 1381px;
                height: 415px;
                position: absolute;
            }
            .stain2 {
                top: 1603px;
                left: -1240.658447265625px;
                width: 1381px;
                height: 415px;
                position: absolute;
            }
            /* .stain3 {
                top: 2746px;
                left: 1196px;
                width: 1381px;
                height: 415px;
                position: absolute;
            } */
            .arrow-select {
                position: absolute;
                right: 35px;
                top: 30px;
            }
            .content {
                margin-top: 120px;
            }
            @media screen and (max-width: 600px) {
                .d-pic {
                    margin-top: 100px !important;
                    margin-left: 0px !important;
                    margin-right: 0px !important;
                }
                .p--5 {
                    margin-left: -45px;
                }
                .stain1 {
                    top: -300px;
                    left: 25%;
                }
                .dino-sketch-02 {
                    top: 75px;
                    left: 20%;
                }
                .dino-sketch-03 {
                    top: 1352px;
                    left: 30%;
                }
                .content {
                    margin-top: 20px;
                }
            }
        </style>
    </head>
<body>
    <header id="page-topbar">
        <div class="header-gradient"></div>
        <div class="top-bar"></div>
    </header>
    <div class="page-content">
        <div class="container-fluid" >
            <div class="row">
                <div class="col-12">
                    <img class="stain1" src="img/stain1.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <img class="dino-sketch-01" src="img/dino-sketch-01.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <img class="dino-sketch-02" src="img/dino-sketch-01.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <img class="dino-sketch-03" src="img/dino-sketch-02.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <img class="stain2" src="img/stain1.png" alt="">
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-12">
                    <img class="stain3" src="img/stain1.png" alt="">
                </div>
            </div> -->
            <div class="row">
                <div class="col-12 bg1"></div>
            </div>
            <div class="d-pic">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="Skranji font-size-48">FIND US</p>
                    </div>
                </div>
                <div class="contract" >
                    <div class="row">
                        <div class="col-md-4 col-sm-2">
                            <div class="row">
                                <div class="col-2 text-center">
                                    <button onclick="copytel()" style="border: 0; background-color: transparent;">
                                        <img class="sign-img" src="img\sign\icon-telephone.png" alt="">
                                    </button>
                                </div>
                                <div class="col-10">
                                    <span class="font-size-28 ml--2" id="tel-text">(+66) 061-1764226</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-2">
                            <div class="row">
                                <div class="col-2 text-center">
                                    <a href="https://lin.ee/RYAdCrZ" target="_blank" rel="noopener noreferrer">
                                        <img class="sign-img" src="img\sign\icon-line.png" alt="">
                                    </a>
                                </div>
                                <div class="col-10">
                                    <a href="https://lin.ee/RYAdCrZ" target="_blank" rel="noopener noreferrer" class="link">
                                        <span class="font-size-28 ml--2">(+66) 061-1764226</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-2">
                            <div class="row">
                                <div class="col-2 text-center">
                                    <a href="https://www.instagram.com/dinopark_phuket/" target="_blank" rel="noopener noreferrer">
                                        <img class="sign-img" src="img\sign\icon-instagram.png" alt="">
                                    </a>
                                </div>
                                <div class="col-10">
                                    <a href="https://www.instagram.com/dinopark_phuket/" target="_blank" rel="noopener noreferrer" class="link">
                                        <span class="font-size-28 ml--2">dinopark_phuket</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-4 col-sm-2">
                            <div class="row">
                                <div class="col-2 text-center">
                                    <button onclick="copymail()" style="border: 0; background-color: transparent;">
                                        <img class="sign-img" src="img\sign\icon-email.png" alt="">
                                    </button>
                                </div>
                                <div class="col-10">
                                    <span class="font-size-28 ml--2" id="mail-text">info@dinopark.com</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-2">
                            <div class="row">
                                <div class="col-2 text-center">
                                    <button onclick="copywechat()" style="border: 0; background-color: transparent;">
                                        <img class="sign-img" src="img\sign\icon-wechat.png" alt="">
                                    </button>
                                </div>
                                <div class="col-10">
                                    <span class="font-size-28 ml--2" id="wechat-text">+66611764226</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-2">
                            <div class="row">
                                <div class="col-2 text-center">
                                    <button onclick="copywhatsapp()" style="border: 0; background-color: transparent;">
                                        <img class="sign-img" src="img\sign\icon-whatsapp.png" alt="">
                                    </button>
                                </div>
                                <div class="col-10">
                                    <span class="font-size-28 ml--2" id="whatsapp-text">dinoparkphuket</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-4 col-sm-2">
                            <div class="row">
                                <div class="col-2 text-center">
                                    <a href="https://www.facebook.com/dinoparkphuketminigolf" target="_blank" rel="noopener noreferrer">
                                        <img src="img\sign\icon-facebook.png" alt="">
                                    </a>
                                </div>
                                <div class="col-10">
                                    <a href="https://www.facebook.com/dinoparkphuketminigolf" target="_blank" rel="noopener noreferrer" class="link">
                                        <span class="font-size-28 ml--2">Dino Park Phuket</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-2">
                            <div class="row">
                                <div class="col-2 text-center">
                                    <a href="https://www.tiktok.com/@dinoparkphuket?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener noreferrer">
                                        <img src="img\sign\icon-tiktok.png">
                                    </a>
                                </div>
                                <div class="col-10">
                                    <a href="https://www.tiktok.com/@dinoparkphuket?is_from_webapp=1&sender_device=pc" target="_blank" rel="noopener noreferrer" class="link">
                                        <span class="font-size-28 ml--2">dinoparkphuket</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-2">
                            <div class="row">
                                <div class="col-2 text-center">
                                    <a href="https://www.youtube.com/@dinoparkphuket" target="_blank" rel="noopener noreferrer">
                                        <img class="sign-img" src="img\sign\icon-youtube.png" alt="">
                                    </a>
                                </div>
                                <div class="col-10">
                                    <a href="https://www.youtube.com/@dinoparkphuket" target="_blank" rel="noopener noreferrer" class="link">
                                        <span class="font-size-28 ml--2">DinoParkPhuket</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-12">
                            <a href="https://maps.app.goo.gl/j19Sg5hmfLW66bN3A" target="_blank" rel="noopener noreferrer">
                                <img src="img\google map.png" alt="" width="100%">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="row Skranji">
                                <div class="col-md-12">
                                    <span class="font-size-48">DON'T BE SHY</span>
                                </div>
                                <div class="col-md-12">
                                    <span class="font-size-64">SAY HI</span>
                                </div>
                                <div class="col-md-12">
                                    <img src="img\image-mascotcontact.png" alt="" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                        <?php echo((!empty($errorMessage)) ? $errorMessage : ''); 
                            
                            ?>
                        <?php echo((!empty($successMessage)) ? $successMessage : ''); 
                            
                            ?>
                            <form action="contract.php" method="post" id="contact-form">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="font-size-36 Lexend-extra">Full name</span>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <span class="font-size-36 Lexend-extra">Email address</span>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <input type="emali" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <span class="font-size-36 Lexend-extra">How can we help?</span>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <select name="topic" id="topic" class="form-control" required>
                                            <option value="" disabled selected>Select your topic</option>
                                            <option value="General Questions">General Questions</option>
                                            <option value="Ticketing">Ticketing</option>
                                            <option value="Agency">Agency</option>
                                        </select>
                                        <div class="arrow-select">
                                            <img src="img/Polygon1.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-4">
                                        <span class="font-size-36 Lexend-extra">Message</span>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <textarea class="form-control" name="msg" id="msg" cols="30" rows="5" placeholder="Type your message" required></textarea>
                                    </div>
                                    <div class="col-md-8 col-sm-12 mt-5 mb-5">
                                        <button type="submit" id="btn-submit" style="border: 0;" data-callback="onContractSuccess">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="90" viewBox="0 0 536 90">
                                                <g id="button-send" transform="translate(-1043 -778.615)">
                                                <rect id="Rectangle_44" data-name="Rectangle 44" width="536" height="90" rx="20" transform="translate(1043 778.615)" fill="#7f7f4e"/>
                                                <text id="Send" transform="translate(1311 835.615)" fill="#fdf3ec" font-size="32" font-family="Lexend" font-weight="600"><tspan x="-39" y="0">Send</tspan></text>
                                                </g>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- content -->
        
        <footer class="footer">
            <div class="footer-content"></div>
        </footer>
    </div>
    
</body>

</html>
<script src="js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script> 
    $(function(){
      $(".top-bar").load("svg/topbar.html"); 
    });
    $(function(){
      $(".footer-content").load("svg/Footer.html"); 
    });
    function onContractSuccess() {
      document.getElementById('contact-form').submit();
    }
    function copytel () {
        var textToCopy = $('#tel-text').text();
        var tempTextarea = $('<textarea>');
        $('body').append(tempTextarea);
        tempTextarea.val(textToCopy).select();
        document.execCommand('copy');
        tempTextarea.remove();
        alert("Text copied")
    }
    function copymail () {
        var textToCopy = $('#mail-text').text();
        var tempTextarea = $('<textarea>');
        $('body').append(tempTextarea);
        tempTextarea.val(textToCopy).select();
        document.execCommand('copy');
        tempTextarea.remove();
        alert("Text copied")
    }
    function copywechat () {
        var textToCopy = $('#wechat-text').text();
        var tempTextarea = $('<textarea>');
        $('body').append(tempTextarea);
        tempTextarea.val(textToCopy).select();
        document.execCommand('copy');
        tempTextarea.remove();
        alert("Text copied")
    }
    function copywhatsapp () {
        var textToCopy = $('#whatsapp-text').text();
        var tempTextarea = $('<textarea>');
        $('body').append(tempTextarea);
        tempTextarea.val(textToCopy).select();
        document.execCommand('copy');
        tempTextarea.remove();
        alert("Text copied")
    }
</script>