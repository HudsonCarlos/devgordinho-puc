<section>
    <div id="dvEsquerda">
        <h2>BD CUP &raquo;</h2>
        <br/>
        <div id="dvConteudoPagina">
            <p>

                Instituto de  Ciˆencias  Exatas e Inform´atica  (ICEI)


                BD  Cup

                Curso: Gradua¸cao em Sistemas de Informa¸cao Disciplina: Banco de Dados (01/2016) Professor: Wladmir  Cardoso Brand˜ao
                Site: http://www.wladmirbrandao.com



                O BD  Cup  ´e um desafio computacional  em que as equipes participantes devem apresentar modelos para ranking de agentes pol´ıticos federais brasileiros por popularidade,  a partir  de dados coletados na Web.   Agentes pol´ıticos federais s˜ao tamb´em conhecidos como congressistas  ou parlamentares (senadores  e deputados  federais).  O objetivo ´e desenvolver um sistema  de informa¸cao Web capaz de receber consultas  de usuarios e prover como resultado  uma lista de congressistas ordenada  pelo grau de popularidade.





                1    Arquitetura do  Sistema

                A Figura  1 apresenta  um modelo de arquitetura a ser tomado  como referˆencia pelas equipes par- ticipantes  para  implementa¸c˜ao das funcionalidades  essenciais do sistema.  A arquitetura proposta pode ser estendida  a crit´erio das equipes participantes.



















                Figura  1: Modelo de referˆencia para  a arquitetura do sistema



                Coletor   O componente  coletor, a partir  de uma lista de nomes de congressistas,  deve capturar postagens  sobre eles em redes sociais na Web e armazenar  em uma base de dados para  posterior consulta.


                Ranking   O componente  de ranking deve ser capaz de analisar  os sentimentos  presentes nas pos- tagens coletadas,  implementando  um modelo de ranking capaz de calcular o grau de popularidade de cada  congressista,  a fim de apresentar uma  lista  de congressistas  ordenada  de acordo com as consultas  submetidas  pelo usuario a partir  da interface Web. 



                Interface   O componente de interface deve ser capaz de receber as consultas do usuario, interpreta- las e encaminha-las ao componente de ranking para processamento.  As fun¸coes de auto-complemento e recomenda¸cao de consulta devem ser implementadas.


                2    Modelo de  Ranking

                O modelo de ranking implementado por cada equipe participante do desafio deve incorporar evidˆencias de popularidade,  ou seja, do sentimento  da popula¸cao em relac˜ao aos congressistas, tais como:

                • Opinio˜es  Positivas (OP ):  Nu´mero  de postagens  com opinioes positivas  sobre o congres- sista.

                • Opinio˜es Negativas (ON ): Nu´mero de postagens com opini˜oes negativas sobre o congres- sista.

                O modelo de ranking  deve estabelecer  a forma de combina¸c˜ao das evidˆencias para  composi¸cao do grau  de popularidade  P C de cada  congressista.   Por  exemplo, uma  forma de combinac˜ao  das evidˆencias para  um dado congressista i seria:

                OPi − ONi 
                P Ci = OP


                + ONi 
                As equipes podem ainda  considerar  outras  evidˆencias,  al´em  das supra  citadas,  desde que elas sejam especificadas nos documentos  submetidos  para avalia¸cao.


                3    Regras do  Desafio

                Tarefa   Desenvolvimento  de  um  sistema  de  informa¸c˜ao  Web  de  acordo  com  o modelo  arqui- tetonico descrito na Sec˜ao 1. No endere¸co www.wladmirbrandao.com/course/prototype/bdcup.html 
                apresenta-se  um modelo de interface  que dever ferˆencia m´ınima por todas as equipes.

                ser considerado  como uma implementa¸cao de re- 


                Dados	As fontes de dados utilizadas  na coleta poderao  ser escolhidas livremente  pelas equipes, desde que representem  fontes confiaveis e que as referˆencias bibliograficas a tais fontes sejam espe- cificadas nos documentos  submetidos  para  avaliac˜ao.


                Equipes   As equipes podem ser compostas  por at´e 3 integrantes.  Uma mesma pessoa n˜ao pode participar de mu´ltiplas equipes e nao ser´a permitida  a migrac˜ao entre  membros de equipes.  Caso 
                uma equipe perca um membro, independentemente da razao, n˜ao haver

                recomposi¸c˜ao da equipe. 


                Avalia

                o˜es    Os resultados submetidos por cada equipe ser˜ao avaliados por um grupo de avaliadores 
                definido pelo professor da disciplina.  As avalia¸coes ocorrerao em 5 fases distintas:

                1. ( AS01 ) Componente  Coletor → Aspectos de cobertura  (nu´mero de redes sociais e postagens coletadas)  e eficiˆencia (nu´mero de postagens  coletadas  por segundo) devem ser reportados  e serao avaliados. 



                2. ( AS02 ) Componente de Ranking (Filtro)  → Aspectos de efetividade (qualidade das opera¸coes em itens de informa¸cao) e eficiˆencia (quantidade de itens processados por segundo) devem ser reportados  e serao avaliados.

                3. ( AS03 ) Componente  de Ranking  (Analisador)  → Aspectos de efetividade  (acur´acia na in- dica¸cao de positividade  e negatividade)  devem ser reportados  e serao avaliados.

                4. ( AS04 ) Componente  de Ranking (Modelo) → Aspectos de efetividade (precis˜ao e revoca¸c˜ao dos rankings gerados) devem ser reportados  e serao avaliados.

                5. ( AS05 ) Sistema  Integrado  → Aspectos  relacionados  a usabilidade  (interface  minimalista, facilidade de uso, est´etica) serao avaliados.


                Submiss˜oes   As submissoes dos codigos-fonte, bases de dados, relatorios t´ecnicos e apresenta¸c˜oes produzidas  por cada equipe em cada fase de avaliac˜ao deve ser feita exclusivamente  pelo SGA at´e as datas  limites ali especificadas. Submiss˜oes encaminhadas  por qualquer outro meio ou em atraso nao serao consideradas.


                Recursos   As equipes podem utilizar  quaisquer  recursos de codigo aberto  para  desenvolvimento do sistema, incluindo, e nao se restringindo  a, servidores de aplica¸c˜ao, linguagens de programac˜ao, bibliotecas e ambientes  de desenvolvimento.  Todos os recursos utilizados devem estar especificados nos documentos submetidos.  Cabe ressaltar que os alunos do ICEI da PUC Minas tem amplo acesso a linguagens e ambientes  de desenvolvimento  disponibilizados  por parceiros,  como EMC2, IBM e Microsoft (vide http://icei.pucminas.br/parcerias).  Abaixo alguns recursos que podem ser u´teis no desenvolvimento:

                • Elastic Tools → http://www.elastic.co

                • IBM Bluemix → http://www.ibm.com/cloud-computing/bluemix

                • Lucene → http://lucene.apache.org

                • Microsoft Azure → http://www.azure.microsoft.com

                • MySQL → http://www.mysql.com

                • MongoDB → http://www.mongodb.org

                • Overleaf LATEXEditor → http://www.overleaf.com

                Premia¸c˜ao    Al´em do desafio compor a avalia¸cao global da disciplina, a equipe primeira colocada 
                no desafio receber

                um bonus extra de 25% na pontua¸cao das 5 fases avaliativas,  e a equipe segunda 
                colocada receber´a um bonus extra  de 15% na pontua¸cao das das 5 fases avaliativas.


                Bonus   As equipes que desenvolverem um aplicativo movel para interface com o usu´ario receber˜ao um bˆonus extra  de 25% na pontua¸cao das das 5 fases avaliativas.

            </p>
        </div>
    </div>
</section>