<main class="bd-masthead" id="content" role="main">
  <div class="container">

    <h1>Introdução à Web</h1>

    <p class="lead"> Nesta secção do Website, irás aprender os conceitos básicos do que se trabalha aqui na Drible e que programas se usa para criar, editar e finalizar websites.</p>

    <hr>

    <h1>Ferramentas Necessárias</h1>

    <h2>Atom</h2>

    <p class="lead">O Atom é um editor de texto, faz <a href="https://atom.io/"  target="_blank">download</a> dele, vamos utilizar esta ferramenta mais a frente. </p>

    <h3>O que é, para que serve e o que procurar num editor de texto?</h3>

    <p class="lead">Essencialmente, um editor de texto é um programa que te permite criar e editar variadas linguagens de programação.</p>

    <p class="lead"> Editores de texto são frequentemente equipados com sistemas operacionais ou pacotes de desenvolvimento de software, e pode ser usado para alterar arquivos de configuração e linguagem de programação de código fonte. </p>

    <ul>
      <li class="lead">Fácil de usar e navegar.</li>
      <li class="lead">Ferramenta de encontrar e mudar (para que possas uma mudar uma palavra no ficheiro inteiro sem muito esforço).</li>
      <li class="lead">Cortar, copiar e colar.</li>
      <li class="lead">Syntax highlighting (torna mais fácil ler o código e encontrar algum erro).</li>
      <li class="lead">Aparência Customizável (tal como mudar a fonte da letra, esquema de cores, etc., do teu editor).</li>
      <li class="lead">Extensibilidade (que forneça algum mecanismo de plugin, ou que seja programável , para que um programador possa costumizar o editor com características adicionais).</li>
    </ul>
    <hr>
    <h2>O que é XAMPP?</h2>
    <p class="lead">XAMPP significa Cross-Platform (X), Apache (A), MySQL (M), PHP (P) e Perl (P). </p>
    <p class="lead">  É uma distribuição Apache simples e leve que torna extremamente fácil para os desenvolvedores criarem um servidor web local para fins de teste. </p>
    <p class="lead">  Tudo o que você precisa para configurar um servidor da Web - aplicativo de servidor (Apache), banco de dados (MySQL) e linguagem de script (PHP) - está incluído em um arquivo extraível simples. </p>
    <p class="lead">  O XAMPP também é multi-plataforma, o que significa que funciona igualmente bem em Linux, Mac e Windows. </p>
    <p class="lead">  Como a maioria das implantações reais de servidores da Web usa os mesmos componentes que o XAMPP, a transição de um servidor de teste local para um servidor ativo também é extremamente fácil. </p>
    <hr>
    <h2>O que está incluído no XAMPP?</h2>
    <ul>
      <p class="lead">O XAMPP possui quatro componentes principais. Esses são:</p>
      <li><p class="lead">Apache: Apache é o aplicativo de servidor web real que processa e entrega o conteúdo da web para um computador. O Apache é o servidor web online mais popular, alimentando quase 54% de todos os sites.</p></li>
      <li><p class="lead">MySQL: Toda aplicação web, por mais simples ou complicada, requer um banco de dados para armazenar dados coletados. O MySQL, que é de código aberto, é o sistema de gerenciamento de banco de dados mais popular do mundo. Ele alimenta tudo, desde sites amadores a plataformas profissionais como o WordPress. Você pode aprender a dominar o PHP com este banco de dados MySQL gratuito para cursos iniciantes.</p></li>
      <li><p class="lead">PHP: PHP significa Preprocessador de Hipertexto. É uma linguagem de script do lado do servidor que alimenta alguns dos sites mais populares do mundo, incluindo WordPress e Facebook. É open source, relativamente fácil de aprender e funciona perfeitamente com o MySQL, tornando-se uma escolha popular para desenvolvedores web.</p></li>
      <li><p class="lead">Perl: Perl é uma linguagem de programação dinâmica de alto nível usada extensivamente em programação de rede, administração de sistemas, etc. Embora menos popular para propósitos de desenvolvimento web, Perl tem muitos aplicativos de nicho.</p></li>
    </ul>
    <p class="lead">Diferentes versões do XAMPP podem ter componentes adicionais, como phpMyAdmin, OpenSSL, etc., para criar servidores da Web completos.</p>
    <hr>
    <h2>Como instalar o XAMPP?</h2>
    <ul>
      <li><p class="lead">Fazer o download do ficheiro executavel atraves do <a href="https://www.apachefriends.org/index.html">site</a></p></li>
      <li><p class="lead">Inicie o processo de instalação clicando duas vezes no instalador do XAMPP. Clique em "Próximo" depois da tela inicial.</p></li>
      <li><p class="lead">Pode selecionar os componentes que deseja instalar. Escolha a seleção padrão e clique em "Avançar".</p></li>
      <li><p class="lead">Escolha a pasta na qual você deseja instalar o XAMPP. Essa pasta armazenará todos os arquivos do seu aplicativo da Web, portanto, certifique-se de selecionar uma unidade que tenha bastante espaço.</p></li>
      <li><p class="lead">A próxima tela é uma promo para BitNami, uma loja de aplicativos para software de servidor. Desmarque a caixa de seleção "Saiba mais sobre o BitNami for XAMPP".</p></li>
      <li><p class="lead">A instalação está completa agora! Selecione a caixa de seleção "Você deseja iniciar o Painel de Controle agora?" Para abrir o painel de controle do XAMPP.</p></li>
    </ul>
    <hr>
    <h2> Funcionalidades do painel de controlo </h2>
    <p class="lead">Neste momento o XAMPP encontra-se instalado e funcionando, vamos explorar o painel de controle a fim de entender melhor suas funcionalidades.</p>
    <ul>
      <li class="lead">Coluna “Service“: A coluna service serve para Instalar e Desinstalar os serviços no Windows.</li>
      <li class="lead">Coluna “PIDs”: Process identifier (identificador de processo), PID ou ainda process ID é um número único que é atribuído pelo sistema operativo quando um processo é executado. Esse número é utilizado para se fazer referência a um processo que está a executar. Fonte: http://pt.wikipedia.org/wiki/Pid.</li>
      <li class="lead">Coluna “Port(s)”: Mostra as portas utilizadas pelo determinado serviço.</li>
      <li class="lead">Coluna “Actions”: Nesta coluna estão as opção de Stop: Pausa ou iniciar o serviço; Admin: Abre a pagina de administração do serviço; Config: Atalho para os principais arquivos de configuração do serviço; e Logs: Logs relacionados ao serviço.</li>
    </ul>
    <div class="text-center p-3">
      <img src="/img/xampp2.jpg" class="fluid-img">
    </div>
    <hr>
    <h2> Pasta htdocs </h2>
    <p class="lead">Após iniciar os servidores do XAMPP, seu servidor web local estará disponível no endereço http://127.0.0.1. Para armazenar arquivos, procure pela pasta htdocs no diretório que você extraiu os arquivos do XAMPP. Todos os arquivos guardados neste local estarão disponíveis pelo endereço acima.</p>
    <div class="text-center">
      <img src="/img/htdocs.PNG" class="fluid-img">
    </div>
    <hr>
    <h2>Git</h2>
    <h3>O que é um git?</h3>
    <p class="lead">Git é um tipo de sistema de controlo de versões que torna mais fácil monitorizar as alterações no ficheiro. Por exemplo, quando editas um ficheiro, git pode ajudar te a determinar exatamente oque mudou, quando mudou e porquê.</p>

    <p class="lead">É útil para coordenar trabalho entre múltiplas pessoas num projeto, e para monitorizar o progresso ao longo do tempo guardando “checkpoints”.</p>

    <p class="lead">Existe vários tipos de alojamento online tais como o <a href="https://github.com/"  target="_blank">GitHub</a> e o <a href="https://bitbucket.org/" target="_blank">BitBucket</a>.</p>

    <hr>

    <h3>Compreender o git?</h3>

    <p class="lead">Git usa muita analogias relacionadas com “árvores”. Pensa na código principal como se fosse o tronco de uma árvore 🎄.</p>

    <p class="lead">Sempre que adicionares mais alterações (commits), o teu tronco fica maior. Mesmo que apagues o código, ainda é considerado uma mudança e isso faz com que o tronco cresça. É como a ferramenta “undo” [desfazer] funciona num editor de texto (tipo o Word), salva todas as alterações, incluindo o apagar.</p>

    <p class="lead">Pode andar para cima e para baixo no tronco — equivalente a andar para a frente e para trás no tempo — por verificar os tais “checkpoints” específicos.</p>

    <hr>

    <h3>O que é branching?</h3>

    <p class="lead">Muito dos projetos têm uma acumulação de características novas para adicionar e bugs para arranjar. Quando te queres dirigir a um destes problemas, uma maneira seria aumentar a árvore e comprometer-se diretamente ao tronco. Isto funciona perfeitamente para projetos pequenos ou projetos onde és a única pessoa a fazer alterações, mas e se múltiplas pessoas estiverem a trabalhar ao mesmo tempo? É muito fácil atrapalharmo-nos e acabar por dar conflitos de alterações.</p>

    <p class="lead">A solução é branching (ramificar). Em vez de te comprometeres ao tronco, crias o teu próprio ramo e trabalhas a partir daí. Assim tornas o ramo maior em vez do tronco.</p>

    <p class="lead">Ao visualizar ramos, normalmente eles são desenhados lateralmente para ocupar menos espaço. Imagina que o seguinte é uma árvore, tombada, com as raízes á esquerda. Cada círculo é uma alteração. Quanto mais para a direita o círculo é, mais recentemente foi alterado:</p>

    <img src="/img/branching_exemplo1.png" alt="Branching">

    <p class="lead"> Legenda: Trunk = tronco / Branch = ramo / Root = raíz </p>

    <p class="lead">Existe um tronco azul e um ramo verde. Existe várias alterações em ambos, mostrado cronologicamente da esquerda para a direita. O teu ramo começa no 2º tronco (Trunk #2). Enquanto trabalhas no teu ramo [ alterações no 1º e 2º ramo ( Branch #1 e Branch #2 )], alguém trabalhou diretamente no tronco [ alterações no 3º e 4º tronco ( Trunk #3 e Trunk #4 )]. Essas alterações ainda não afetaram o teu ramo ainda, o teu ramo está desatualizado.</p>

    <hr>

    <h2>Submeter as alterações?</h2>

    <p class="lead"> Agora tens as tuas alterações num ramo e o teu objetivo é eventualmente voltar a passar-los para o tronco como parte da “oficial” código base.</p>

    <p class="lead"> Uma vez que testado as tuas alterações, precisarás de a partilhar com a tua “equipa”. Isto é feito através de um Pull Request (PR) ou um Merge Request (MR) — são a mesma coisa, o termo apenas depende de que software estás a usar (exemplo: GitHub). Estás a pedir que as tuas alterações sejam alteradas e convergidas com o código base.</p>

    <img src="/img/branching_exemplo2.png" alt="Commiting">

    <p class="lead">Legenda: Trunk = tronco / Branch = ramo / Root = raíz / Merge = convergir </p>

    <hr>


    <h2>Como obter o GitHub?</h2>

    <p class="lead"><a href="https://desktop.github.com/" target="_blank">GitHub Desktop</a> (para Windows e Mac)</p>

    <p class="lead">Agora vamos por isto tudo em prática. Clica <a href="/estagiarios/web/hellodrible" target="_blank">aqui</a>.</p>
    <hr>

    <h2 class="pb-3">Repositórios</h2>
    <h2> Como criar um novo repositório no git usando as linhas de comando. </h2>
    <p class="lead"> Como primeiro instinto, quando se começa algo novo, devemos usar <code> git init</code>.
      <hr>
      <h2> Criar um repositório do zero: </h2>
      <ul>
        <li class="lead"> Criar um diretório para conter o projecto </li>
        <li class="lead"> Entre no novo diretório</li>
        <li class="lead"> Escreva <code> git init </code></li>
        <li class="lead"> Escreva <code> git --add all </code></li>
        <li class="lead"> Escreva <code> git commit -m "first commit" </code></li>
        <li class="lead"> Escreva <code>git remote add origin git@github.com:alexpchin/<"reponame">.git</code></li>
        <li class="lead"> Escreva <code>git push -u origin master</code></li>
      </ul>

    </div>
  </main>
