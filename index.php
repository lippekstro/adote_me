<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_cabecalho.php';
?>

<section>
    <div class="conteudo">
        <img src="/adote_me/imgs/img_fundo2.png" alt="" title="" id="img_fundo" />

        <p style="text-align: center"><b>Seu amigo está a sua espera.</b></p>
    </div>

    <div class="text">
        <p>
            <b>A adoção de pets é um gesto de <i>amor e responsabilidade</i>. Ao
                escolher adotar um animal de estimação em vez de comprar, você dá a
                eles uma segunda chance e um lar amoroso. Além disso, a adoção ajuda a
                reduzir o número de animais abandonados em abrigos. Ao receber um novo
                <i>membro na família</i>, você enriquece sua vida com alegria e
                lealdade, fortalecendo os laços afetivos. Portanto, considere a adoção
                como a melhor opção para trazer um pet para sua vida.</b>
        </p>


        <p>
            <b>Uma pesquisa realizada pela plataforma TIM Ads identificou que a maioria dos pets que fazem parte de famílias no
                Brasil foi adotada. A adoção foi a maneira escolhida por 43% dos respondentes, enquanto 20% ganharam de presente e
                apenas 16% afirmam ter comprado o pet.</b>
        </p>
        <p>
            <b>Para o levantamento, foram ouvidos 106.944 clientes pré-pagos da operadora, que recebem bônus de dados e recarga
                pela participação na pesquisa. Dos entrevistados, 80% afirmaram ter pets em casa. Destes, 45% afirmaram ter cães e
                24% gatos.</b>
        </p>
        <p>
            <b>Com relação ao número de animais, a maioria, 33%, tinha apenas um pet; os que têm entre dois e três pets somam 26%;
                e as pessoas com quatro a seis animais de estimação chegam a 14% dos entrevistados.</b>
        </p>

    </div>

    <div class="conteudo2">
        <a href="/adote_me/views/catalogo_pet.php"><button type="submit" class="btn btn-dark" id="Queroadotar">
                Quero adotar
            </button></a>
        <a href="/adote_me/views/faleconosco.php"><button type="submit" class="btn btn-dark" id="Queroadotar">
                Seja Parceiro
            </button></a>
    </div>
    <br />
    <h2>Conheça alguns de nosso parceiros</h2>

    <div class="row row-cols-1 row-cols-md-3 g-4" id="card">
        <div class="col">
            <div class="card h-100">
                <img src="/adote_me/imgs/lovepetfoto.png" class="card-img-top" alt="Love Pet Foto" title="Love Pet Foto" id="lovepetfoto" />
                <div class="card-body">
                    <h5 class="card-title">Love Pet Foto</h5>
                    <p class="card-text">
                        A <strong> "Love Pet Foto" e o "Adot.Me"</strong> uniram forças para promover a adoção
                        responsável de animais de estimação. A "Love Pet Foto" é conhecida por
                        sua linha de produtos de alta qualidade para pets, e agora, eles
                        estão apoiando o "Adot.Me" com doações regulares de alimentos e
                        suprimentos. Essa parceria reforça o compromisso de ambas as
                        empresas em fornecer um lar amoroso e saudável para animais
                        abandonados. Além disso, os adotantes no "Adot.Me" recebem
                        descontos exclusivos na "Love Pet Foto" para ajudar a cuidar de seus
                        novos companheiros.
                    </p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <div class="card">
                    <img src="/adote_me/imgs/lupapet.jpg" class="card-img-top" alt="Lupa Pet" title="Lupa Pet" id="lupapet" />
                    <div class="card-body">
                        <h5 class="card-title">Lupa Pet</h5>
                        <p class="card-text">
                            A <strong> "lupa Pet" e "Adot.Me"</strong> são duas empresas
                            que encontraram sinergias na causa da adoção de pets.
                            A "Lupa Pet" é uma clínica veterinária renomada, enquanto
                            "Adot.Me" é um grupo de voluntários dedicados a
                            encontrar lares amorosos para animais necessitados. Juntos,
                            oferecem cuidados médicos gratuitos para animais resgatados pelo
                            "Adot.Me" e descontos especiais para adotantes que
                            buscam a clínica "Lupa Pet". Essa parceria visa garantir
                            que os animais adotados tenham a melhor saúde possível em seus
                            novos lares.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="/adote_me/imgs/popularpet.png" class="card-img-top" alt="Popular Pet" title="Popular Pet" id="popularpet" />
                <div class="card-body">
                    <h5 class="card-title">Popular Pet</h5>
                    <p class="card-text">
                        A parceria entre <strong> "Popular Pet" e "Adot.Me" </strong> visa
                        simplificar o processo de adoção de pets. "Popular Pet" é um
                        aplicativo de adoção de animais de estimação que conecta adotantes
                        em potencial com abrigos e resgatadores. "Popular Pet" é
                        uma loja de produtos para pets que agora oferece um desconto
                        exclusivo para os usuários do "Adot.Me". Com essa parceria, os
                        adotantes podem encontrar facilmente suprimentos de qualidade para
                        seus novos amigos de quatro patas, incentivando a adoção
                        responsável e garantindo que os pets tenham tudo o que precisam em
                        seus novos lares.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/adote_me/templates/_rodape.php';
?>