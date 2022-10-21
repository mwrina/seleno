<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/barraSup.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/copyright.css">
    <link rel="stylesheet" href="css/cartao.css">
 
</head>
<body>
 
<?php
    include('barraSup.php');
?>

<div class=body>

    <div class="container">
    
        <div class="card-container">
    
            <div class="front">
                <div class="image">
                    <img src="imgs/cartao/chip.png" alt="">
                    <img src="image/visa.png" alt="">
                </div>
                <div class="card-number-box">################</div>
                <div class="flexbox">
                    <div class="box">
                        <span>Titular</span>
                        <div class="card-holder-name">Nome Completo</div>
                    </div>
                    <div class="box">
                        <span>Expiração</span>
                        <div class="expiration">
                            <span class="exp-month">mm</span>
                            <span class="exp-year">aa</span>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="back">
                <div class="stripe"></div>
                <div class="box">
                    <span>cvv</span>
                    <div class="cvv-box"></div>
                    <img src="image/visa.png" alt="">
                </div>
            </div>
    
        </div>
    
        <form action="">
            <div class="inputBox">
                <span>Número do Cartão</span>
                <input type="number" maxlength="16" class="card-number-input">
            </div>
            <div class="inputBox">
                <span>Titular do Cartão</span>
                <input type="text" class="card-holder-input">
            </div>
            <div class="flexbox">
                <div class="inputBox">
                    <span>Mês de expiração</span>
                    <select name="" id="" class="month-input">
                        <option value="month" selected disabled>Mês</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>Ano de expiração</span>
                    <select name="" id="" class="year-input">
                        <option value="Ano" selected disabled>Ano</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                    </select>
                </div>
                <div class="inputBox">
                    <span>cvv</span>
                    <input type="text" maxlength="3" class="cvv-input">
                </div>
            </div>
            <input type="submit" value="Confirmar" class="submit-btn">
        </form>
    
    </div>    
   
</div>
 
 <?php
    include('copyright.php');
 ?>
 
 
 
<script src="js/cartao.js"></script>
 
 
 
 
 
 
 
</body>
</html>

