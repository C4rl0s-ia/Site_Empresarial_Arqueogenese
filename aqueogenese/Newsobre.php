<?php
include_once("template/header.php");
?>

<!--Carlos Henrique fez essa parte-->
<!--Reconstruido pelo Carlos Augusto junto com o CSS, mas mantive a identidade da pagína. 
Trouxe mais beleza para o código em HTML e sentido a utilização do bootstrap junto com o CSS próprio da página-->
<!--Adição de novas divs como a div #barra e div #new_sobre, onde uma traz uma divisão entre as partes da página 
e a outra traz um texto referente a loja. Além disso realizei a manutençao da div #valores trazendo imagens e uma melhor estrutura responsiva  -->

<br>

<section>
    <div class="container-md">
        <div id="fundo" class="clearfix">
            <h2>Sobre a ArqueoGênese</h2>
        </div>

        <div id="barra" class="container-md">
            Bem vindo a quem nós somos!
        </div>
        <div id="valores" class="container-md text-center">
            <div class="row">
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-bullseye" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                        <path d="M8 13A5 5 0 1 1 8 3a5 5 0 0 1 0 10m0 1A6 6 0 1 0 8 2a6 6 0 0 0 0 12" />
                        <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8" />
                        <path d="M9.5 8a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                    </svg>
                    <h2>Missão</h2>
                    <p id="valores_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ratione possimus? Laborum, repudiandae odit sunt quod id, eos ea odio adipisci illo exercitationem delectus consequatur aspernatur vel saepe. Expedita, sit!</p>
                    <img src="image/arquiologa.jpg" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z" />
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0" />
                    </svg>
                    <h2>Visão</h2>
                    <p id="valores_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ratione possimus? Laborum, repudiandae odit sunt quod id, eos ea odio adipisci illo exercitationem delectus consequatur aspernatur vel saepe. Expedita, sit!</p>
                    <img src="image/arquiologa.jpg" class="img-fluid" alt="">
                </div>
                <div class="col">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
                        <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.1 6.1 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.1 8.1 0 0 1-3.078.132 4 4 0 0 1-.562-.135 1.4 1.4 0 0 1-.466-.247.7.7 0 0 1-.204-.288.62.62 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896q.19.012.348.048c.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04M4.705 11.912a1.2 1.2 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.4 3.4 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3 3 0 0 0 .126-.75zm1.44.026c.12-.04.277-.1.458-.183a5.1 5.1 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005zm3.582-3.043.002.001h-.002z" />
                    </svg>
                    <h2>Valores</h2>
                    <p id="valores_text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, ratione possimus? Laborum, repudiandae odit sunt quod id, eos ea odio adipisci illo exercitationem delectus consequatur aspernatur vel saepe. Expedita, sit!</p>
                    <img src="image/arquiologa.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>

        <div id="barra_t" class="container-md">
            <h2>Aqui você entende o surgimento da maior empresa de arqueolgia do mundo</h2>
        </div>

        <article>
            <div id="new_sobre">
                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus facere modi dicta exercitationem sapiente fugiat illo ipsum assumenda est unde cum sit amet magni voluptas veniam, iste quibusdam hic officiis.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus facere modi dicta exercitationem sapiente fugiat illo ipsum assumenda est unde cum sit amet magni voluptas veniam, iste quibusdam hic officiis.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus facere modi dicta exercitationem sapiente fugiat illo ipsum assumenda est unde cum sit amet magni voluptas veniam, iste quibusdam hic officiis.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus facere modi dicta exercitationem sapiente fugiat illo ipsum assumenda est unde cum sit amet magni voluptas veniam, iste quibusdam hic officiis. </p>

                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus facere modi dicta exercitationem sapiente fugiat illo ipsum assumenda est unde cum sit amet magni voluptas veniam, iste quibusdam hic officiis.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus facere modi dicta exercitationem sapiente fugiat illo ipsum assumenda est unde cum sit amet magni voluptas veniam, iste quibusdam hic officiis.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus facere modi dicta exercitationem sapiente fugiat illo ipsum assumenda est unde cum sit amet magni voluptas veniam, iste quibusdam hic officiis.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus facere modi dicta exercitationem sapiente fugiat illo ipsum assumenda est unde cum sit amet magni voluptas veniam, iste quibusdam hic officiis. </p>

                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus facere modi dicta exercitationem sapiente fugiat illo ipsum assumenda est unde cum sit amet magni voluptas veniam, iste quibusdam hic officiis.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus facere modi dicta exercitationem sapiente fugiat illo ipsum assumenda est unde cum sit amet magni voluptas veniam, iste quibusdam hic officiis.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus facere modi dicta exercitationem sapiente fugiat illo ipsum assumenda est unde cum sit amet magni voluptas veniam, iste quibusdam hic officiis.
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ducimus facere modi dicta exercitationem sapiente fugiat illo ipsum assumenda est unde cum sit amet magni voluptas veniam, iste quibusdam hic officiis. </p>
            </div>
        </article>

    </div>
</section>

<?php
include_once("template/footer.php");

?>