<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/barraSup.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/copyright.css">
    <link rel="stylesheet" href="css/prods.css">
    <title>Tela de Compra - Camisetas</title>
</head>
<body>
    
    <?php
        include("barraSup.php");
        include("menu.php");
    ?>

<div class="body">

<!-- SIDEBAR -->

    <div class="sidebar">
        <h1>Camisetas</h1>
        <hr>
        <h2>Filtrar por:</h2>

        <button type="button" class="collapsible">Marca</button>
            <div class="conteudo">
                <input type="checkbox" id="jordans" name="jordans" value="Jordans">
                <label for="jordans" class="labelSidebar">Jordans</label> <br/>
                <input type="checkbox" id="adidas" name="adidas" value="Adidas">
                <label for="adidas" class="labelSidebar">Adidas</label> <br/>
                <input type="checkbox" id="nike" name="nike" value="Nike">
                <label for="nike" class="labelSidebar">Nike</label> <br/>
                <input type="checkbox" name="vans" value="Vans">
                <label for="vans" class="labelSidebar">Vans</label> <br/>
            </div>
        <button type="button" class="collapsible">Preço</button>
            <div class="conteudo">
                <input type="checkbox" id="preco" name="preco1">
                <label for="preco" class="labelSidebar">&lt; R$200</label> <br/>
                <input type="checkbox" id="preco" name="preco2">
                <label for="preco" class="labelSidebar">&lt; R$400</label> <br/>
                <input type="checkbox" id="preco" name="preco3">
                <label for="preco" class="labelSidebar">&lt; R$550</label> <br/>
                <input type="checkbox" id="preco" name="preco4">
                <label for="preco" class="labelSidebar">&gt; R$700</label> <br/>
            </div>
    </div>

<!-- PRODUTOS -->

    <div class="produtos">

        <hr id=linhaMenu>

        <div class="lin">
            
            <a href="CAM01.php">
                <div class="prod">
                    <img src="imgs/camisetas/CAM01.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="img01" class="nomeProd">CAMISETA VANS EASY DECO</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$229,90</label>
                            <label for="nomeProd" class="preco02">R$165,50</label>
                        </div>
                        <div class="promo">
                            <label for="preco">28% OFF</label>
                        </div>

                    </div>
                
                </div>
            </a>

            <a href="CAM02.php">
                <div class="prod">
                    <img src="imgs/camisetas/CAM02.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">CAMISETA PUMA HC POCKET MASCULINA</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$130,00</label>
                            <label for="nomeProd" class="preco02">R$80,00</label>
                        </div>
                        <div class="promo">
                            <label for="preco">38% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

            <a href="CAM03.php">
                <div class="prod">
                    <img src="imgs/camisetas/CAM03.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">CAMISETA PUMA RARE BASKETBALL MASCULINA</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$150,00</label>
                            <label for="nomeProd" class="preco02">R$127,50</label>
                        </div>
                        <div class="promo">
                            <label for="preco">15% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

            <a href="CAM04.php">
                <div class="prod">
                    <img src="imgs/camisetas/CAM04.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">CAMISETA VANS FLOWER POWER - OFF THE WALL</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$199,90</label>
                            <label for="nomeProd" class="preco02">R$170,00</label>
                        </div>
                        <div class="promo">
                            <label for="preco">15% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

        </div>
    

        <div class="lin">
            
            <a href="CAM05.php">
                <div class="prod">
                    <img src="imgs/camisetas/CAM05.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="img01" class="nomeProd">CAMISETA VANS HAPPY MUSHROOMS SS - OFF THE WALL CREW</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco02">R$200,00</label>
                        </div>
                        <div class="promo">

                        </div>

                    </div>
                
                </div>
            </a>

            <a href="CAM06.php">
                <div class="prod">
                    <img src="imgs/camisetas/CAM06.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">CAMISETA JORDANS THE SHOES MASCULINA</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$350,00</label>
                            <label for="nomeProd" class="preco02">R$280,00</label>
                        </div>
                        <div class="promo">
                            <label for="preco">20% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

            <a href="CAM07.php">
                <div class="prod">
                    <img src="imgs/camisetas/CAM07.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">CAMISETA NIKE SB MASCULINA</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$149,99</label>
                            <label for="nomeProd" class="preco02">R$104,99</label>
                        </div>
                        <div class="promo">
                            <label for="preco">30% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

            <a href="CAM08.php">
                <div class="prod">
                    <img src="imgs/camisetas/CAM08.png" class="imgProd"> <br/>

                    <div class="prodTxt">

                        <label for="imgProd" class="nomeProd">CAMISETA NIKE BASQUETE CASUAL MASCULINA - JUST DO IT</label> <br/>
                        <div class="preco">
                            <label for="nomeProd" class="preco01">R$109,90</label>
                            <label for="nomeProd" class="preco02">R$78,02</label>
                        </div>
                        <div class="promo">
                            <label for="preco">29% OFF</label>
                        </div>
                        
                    </div>

                </div>
            </a>

        </div>

    </div>

</div>

<!-- COPYRIGHT -->
    <?php
        include('copyright.php')
    ?>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {

        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var conteudo = this.nextElementSibling;
            if (conteudo.style.display === "block") {
            conteudo.style.display = "none";
            } else {
            conteudo.style.display = "block";
            }
        });

        }
    </script>
</body>
</html>