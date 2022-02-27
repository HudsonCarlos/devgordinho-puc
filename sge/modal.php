
  <!-- Modal 
O pai <div>do modal deve ter um ID que é o mesmo que o valor do atributo-alvo de dados usadas para desencadear o modal ( "myModal").
A .modalclasse identifica o conteúdo de <div>como modal e traz foco para ele.
A .fadeclasse adiciona um efeito de transição que se desvanece o modal dentro e para fora. Remover esta classe se você não quiser este efeito.
O atributo role="dialog"melhora a acessibilidade para as pessoas que utilizam leitores de tela.
-->
  <div class="modal fade" id="myModal" role="dialog">

  <!--A .modal-dialogclasse define a largura adequada e margem do modal. modal-lg-->
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content
O <div>com class="modal-content"estilos do modal (borda, cor de fundo, etc.). Dentro desta <div>, adicione do modal de cabeçalho, corpo e rodapé.
    -->
      <div class="modal-content">

       <!-- modal-header
A .modal-headerclasse é usada para definir o modelo para o cabeçalho do modal. 
O <button>dentro do cabeçalho tem um data-dismiss="modal"atributo que fecha o modal se você clicar nele. 
A .closeclasse estilos o botão Fechar, e os .modal-titleestilos de classe do cabeçalho com um line-height adequada.
    --> 
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Em Contrução. Titulo do modal</h4>
        </div>

       <!-- modal-body
A .modal-bodyclasse é usada para definir o modelo para o corpo do modal. Adicionar qualquer marcação HTML aqui; parágrafos, imagens, vídeos, etc.
    --> 
        <div class="modal-body">
          <h2>Titulo do corpo do modal</h2>
          <h3>O que é Lorem Ipsum?</h3>
          <p>Corpo do modal.</p>
          <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.</p>
        </div>
        
      <!-- modal-footer
A .modal-footerclasse é usada para definir o estilo para o rodapé do modal. Note-se que esta área está alinhado à direita por padrão.
    --> 
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
