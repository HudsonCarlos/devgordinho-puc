<section>
    <div id="dvEsquerda">
        <h2>Documetação do trabalho &raquo;</h2>
        <br/>
        <div id="dvConteudoPagina">
            <p>Trabalho Final de Banco de Dados I<br>
                Contagem - MG<br>
                2016 <br>
                Hudson da Silva Carlos<br>
                Trabalho Final de Banco de Dados I<br>
                Contagem - MG<br>
                2016 <br>
                Este Trabalho tem a proposta de implementar uma aplicação Web simples e interativa e intuitiva. Onde o usuário os visitantes poderão obter todas as informações relacionadas aos pré requisitos do BD CUP. Alem de conter informações documentais a interface da aplicação tem por finalidade implementar uma coleta massiva de dados relacionado aos congressistas e/ou parlamentares Brasileiro. Com o intuito de extrair dados de redes sociais sobre o parlamentar em questão. Após a coleta será armazenada em um banco de dados relacional e feita o tratamento de sentimento para identificar se o assunto comentário coletado sobre aquele congressista é positivo ou negative. Procuramos usar da melhor forma possível um coletor de informações para extrair postagens da rede social Twitter, fazer uma análise de sentimento dessas postagens, e armazenar seus resultados em um banco de dados para possível recuperação em uma página da web que irá ranquear os resultados obtidos.<br>





                •	Introdução ..............................................................................................................5

                •	Componentes Coletor..............................................................................................5
                a.	Aspectos de Cobertura.................................................................................5
                b.	Eficiência….................................................................................................5

                •	Componentes de Ranking (Filtro)............................................................................5
                a.	Aspectos de Efetividade...............................................................................5
                b.	Eficiência….................................................................................................5

                •	Componentes de Ranking (Analisador)....................................................................5
                a.	Aspectos de Efetividade...............................................................................5
                b.	Eficiência….................................................................................................5

                •	Componentes de Ranking (Modelo).........................................................................5
                a.	Aspectos de Efetividade...............................................................................5

                •	Sistema Integrado………………............................................................................5
                a.	Usabilidade……………..............................................................................5

                •	Referencias .............................................................................................................5
                <br>




                Este Trabalho tem a proposta de implementar uma aplicação Web simples e interativa e intuitiva. Onde o usuário os visitantes poderão obter todas as informações relacionadas aos pré requisitos do BD CUP. Alem de conter informações documentais a interface da aplicação tem por finalidade implementar uma coleta massiva de dados relacionado aos congressistas e/ou parlamentares Brasileiro. 
                Com o intuito de extrair dados de redes sociais sobre o parlamentar em questão. Após a coleta será armazenada em um banco de dados relacional e feita o tratamento de sentimento para identificar se o assunto comentário coletado sobre aquele congressista é positivo ou negative. Procuramos usar da melhor forma possível um coletor de informações para extrair postagens da rede social Twitter, fazer uma análise de sentimento dessas postagens, e armazenar seus resultados em um banco de dados para possível recuperação em uma página da web que irá ranquear os resultados obtidos.
                Para que possamos coletar as informações da rede social Twitter iremos utilizar uma aplicação própria da rede social. O API Twitter –API-Search é desenvolvido pela própria rede social e lhe dá a possibilidade de coletar postagens de diversos usuários informando alguns parâmetro. Os dados coletados serão analisados para depois serem armazenados no banco de dados.
                O API é desenvolvido em PHP e coleta dados somente na rede social Twitter e é limitado a 100 pedidos em cada janela presença  para os servidores que suportam re-autenticação como o Facebook, a classe também pode forçar o usuário a digitar essa senha aplicativo na página de autorização.

                <br>




                Esta classe pode autorizar o acesso dos usuários a uma API utilizando o protocolo OAuth. Ele abstrai OAuth 1.0, 1.0a e 2,0 na mesma classe, para que possa utilizar o mesmo obter um token para autorizar o acesso em nome do usuário atual qualquer API que suporta qualquer versão do protocolo OAuth. Ele funciona em Linux, Windows e qualquer outra plataforma sem a extensão PECL PHP OAuth. Os tokens de acesso são armazenados por padrão em variáveis de sessão, mas existem sub-classes especializadas em armazenar os tokens em tabelas de banco de dados, arquivos ou cookies. Ele fornece suporte embutido para vários servidores OAuth populares, para que você não tem que configurar a classe manualmente com todos os detalhes específicos do servidor OAuth. 
                Atualmente ele fornece suporte embutido para servidores OAuth de 37Signals, Amazon , AOL, Bitbucket, Bit.ly, Box.net, Tampão, Copy, Dailymotion, Discogs, Disqus, Dropbox com OAuth 1.0 e 2.0, Etsy, agitado, Facebook, Fitbit com OAuth 1.0a 2.0, Flickr, Foursquare, github, Google com OAuth 1.0a e OAuth 2.0, imgur, Infusionsoft, Intuit (Quickbooks), Instagram, Jawbone, LinkedIn com OAuth 1.0a e OAuth 2.0, mail.ru, MailChimp, Mavenlink, Meetup, Microsoft, Misfit Wearables, oDesk, Paypal, Paypal client_credentials aplicação só, Rdio, Reddit, RightSignature, RunKeeper, Salesforce, Scoop.it, StockTwits, SurveyMonkey, TeamViewer, Tumblr, Twitter com OAuth 1.0a e 2,0 de autorização client_credentials, Vimeo, VK, WiThings, Wordpress, Xero, XING, Yahoo e Yandex.
                Qualquer outro servidor OAuth é suportada a criação URLs ponto final e outros parâmetros usando variáveis de classe específicos. Servidores adicionais podem ser suportados sem alterar a classe principal, configurando um arquivo de configuração JSON separado. A classe também pode enviar pedidos para API usando o token de acesso OAuth obtido anteriormente. Ele também suporta 2 acesso à API pernas, para que ele possa enviar solicitações de API assinados que não necessitam de autorização do usuário para aplicações móveis ou outros que o usuário não pode ser redirecionado de volta para o local de aplicação do cliente, esta classe suporta autorização baseada pin ou usando OAuth 1.0a ou OAuth 2.0. Pode assim obter tokens de acesso para usuários específicos dadas seu nome de usuário e senha ou usando as credenciais do cliente. Ele suporta OAuth autorização 2.0 flui authorization_code, senha e client_credentials. Para os servidores que suportam o acesso offline como Google e Box.net, a classe também pode verificar se o token de acesso expirado e atualizar o valor do token antes de enviar uma chamada de API, sem que o usuário presença para os servidores que suportam re-autenticação como o Facebook, a classe também pode forçar o usuário a digitar essa senha aplicativo na página de autorização.















                Ao consumir os serviços do Twitter OAuth é aberta uma sessão utilizando a chave (token) disponibilizado pelo usuário como visto abaixo:


                A partir da interface web é possível armazenar novas chaves (token) no banco bd_cup.



                Tabela responsavel por armazenar chaves (token) de acesso ao Twitter OAuth.









                Entidade Coletor responsavel por manipular os dados de acesso.




                Classe PHP responsavel por solicitar a chave (tokem) e renderizar os twitter solicitados.






                A classe OAuth que da acesso a API do servidor do Twitter possui diverssar regras e entre ela uma em especial, o cosumo de processamento. Para que o grande número de usuários , empresas e organizações que utilizem os serviços de buncas de Twitter não prejudique o bom funcionamento do site, foi limitado o numero de 100 Twitter por requisições, um tempo limite de acesso e uma vida útil da API sendo necessários criar uma nova chave (token) a abrir uma nova sessão para continuar utilizando os serviçoes. Abaixo uma exemplo de requisições de twitter:


                Pagina web renderizando os twiters relacionado a busca por “Dilma Rousseff”.



                Pagina web renderizando os twiters relacionado a busca por “José Dirceu”.










































































                https://apps.twitter.com/app/new 

                https://www.youtube.com/watch?v=23Hgrb92joU 

                http://www.timacheson.com/Blog/2013/jun/asptwitter 

                https://twitter.com/ 

                https://dev.twitter.com/overview/api/twitter-libraries

                http://www.phpclasses.org/package/7700-PHP-Authorize-and-access-APIs-using-OAuth.html



            </p>
        </div>
    </div>
</section>