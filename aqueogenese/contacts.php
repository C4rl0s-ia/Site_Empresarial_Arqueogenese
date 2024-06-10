<!--Feito por Artur e Carlos Augusto-->
<?php
include_once("template/header.php");
?>

<br />

<section>
  <div id="contacts" class="container-md">
    <h3 id="fale">Fale conosco!</h3>

    <p id="textctt">
      O ArqueoGênese fornece para você, todo o suporte necessário para contato.
      Temos vários canais para comunicação e todos eles com resposta rápida, visando
      uma maior eficiência e conforto para você, nosso cliente. <br />
    </p>
    <p>
      Caso queira tirar alguma dúvida pessoal sobre algum tópico específico dentro de nossos artigos
      ou até mesmo entender melhor sobre nossos serviços prestados, nos chame no whatsapp. Nosso time está pronto
      para te atender.
    </p>
    <p>
      Já em caso de parcerias, em uma situação mais formal, nos chame por e-mail, a gestão informará condições e valores
      para negociações.
    </p>

    <div id="center" class="container-md">
      <a href="https://www.instagram.com/arqueogenese/" target="_blank">
        <img id="instagram" src="image/icon.contacts/instagram icon.png">
      </a>

      <a href="https://mail.google.com">
        <img id="gmail" src="image/icon.contacts/gmail icon.png" target="_blank">
      </a>

      <a href="https://web.whatsapp.com/" target="_blank">
        <img id="whatsapp" src="image/icon.contacts/wpp icon.png">
      </a>
    </div>

    <br />
    <h3>Aproveite e deixe o seu Feedback!</h3>


    <form action="config/contatos.php" method="POST">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>

      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Pontuação</label>
        <select name="pontuacao" class="form-select" aria-label="Default select example">
          <option selected>Escolha sua pontuação</option>
          <option value="1">Perfeito</option>
          <option value="2">Ótimo</option>
          <option value="3">Razoável</option>
          <option value="4">Melhore</option>
          <option value="5">Péssimo</option>
        </select>
      </div>

      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Feedback Comentado</label>
        <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <!--<input name="submit" class="btn " type="submit">-->
      <div class="d-grid gap-2 d-md-flex justify-content-end">
        <button class="btn " id="open-modal">enviar</button>
        <div id="fade" class="hide"></div>
        <div id="modal" class="hide">
          <div class="modal-header">
            <h2>Muito obrigado! 👌</h2>
            <button id="close-modal">Valeu! 😁</button>
          </div>
          <div class="modal-body">
            <p>Feedback enviado com sucesso!</p>
            <p>Logo em breve entraremos em contato. Só aguardar! 😉</p>

          </div>
        </div>
      </div>
    </form>

  </div>
</section>



<?php
include_once("template/footer.php");

?>