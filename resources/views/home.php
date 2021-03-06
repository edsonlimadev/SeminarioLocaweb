<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>5 Seminario Locaweb PHPSP</title>

		<meta name="description" content="Slide 5 Seminario Locaweb PHPSP">
		<meta name="author" content="PHPSP">

		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <meta name="mobile-web-app-capable" content="yes">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/league.css" id="theme">

		<!-- Code syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">
		<link rel="stylesheet" href="css/style.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );

            function toggleFullScreen() {
              var noSleep = new NoSleep();
              noSleep.enable();
              if ((document.fullScreenElement && document.fullScreenElement !== null) ||
               (!document.mozFullScrgit pull https://github.com/nawarian/SeminarioLocaweb.git mastereen && !document.webkitIsFullScreen)) {
                if (document.documentElement.requestFullScreen) {
                  document.documentElement.requestFullScreen();
                } else if (document.documentElement.mozRequestFullScreen) {
                  document.documentElement.mozRequestFullScreen();
                } else if (document.documentElement.webkitRequestFullScreen) {
                  document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
                }
              } else {
                if (document.cancelFullScreen) {
                  document.cancelFullScreen();
                } else if (document.mozCancelFullScreen) {
                  document.mozCancelFullScreen();
                } else if (document.webkitCancelFullScreen) {
                  document.webkitCancelFullScreen();
                }
              }
            }
		</script>

        <style>
            .medium-poll{
                float: left;
                width: 28%;
                font-size: 0.5em;
            }

            .medium-poll:nth-child(3), .medium-poll:nth-child(6){
                float: right;
                margin-right: 0px;;
            }

            .medium-poll span{
                padding: 40px 20px;
                font-size: 60%;
            }

            .button-level.small-poll{
                clear: both;
            }

            .button-level.small-poll span b{
                display: none;
            }
        </style>

		<!--[if lt IE 9]><script src="lib/js/html5shiv.js"></script><![endif]-->
	</head>

	<body data-websockets-address="<?php echo $websocketsAddress; ?>" data-mode="<?php echo $mode; ?>">
    <img onclick="toggleFullScreen();" src="images/fullscreen.png" style="position: fixed;bottom: 1em;right: 1em;width:2em; z-index: 9999999;">

		<div class="reveal">
            <div class="users-counter"></div>

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">

                <section>
                    <h2>5 Seminario Locaweb PHPSP!</h2>
                    <h3>Smartphone / Tablet / Notebook</h3>
                    <p><img src="images/navegadores.png" /></p>
                    <p><a href="http://seminariophpsp.jelasticlw.com.br/">http://seminariophpsp.jelasticlw.com.br/</a></p>
                    <h4><a href="https://github.com/PHPSP/docs/blob/master/codigo-de-conduta.md">Código de Conduta</a></h4>
                </section>

                <!-- Slides EDA -->
                <!-- Edson José de Lima Junior-->
                <section>
                    <h1>EDA</h1>
                    <h3>Um paralelo entre desenvolvimento de software e a extinção dos mamutes</h3>
                    <h4>@edsonlimadev</h4>
                </section>

                <section>
                    <h1>Edson José de Lima Junior</h1>
                    <ul>
                        <li>
                            Um desenvolvedor web apaixonado por música e café.
                            <span>Como eu me descrevo.</span>
                        </li>
                        <li>
                            Aquele gordinho da barba ruiva e cabelos brancos.
                            <span>Como me descrevem.</span>
                        </li>
                        <li>
                            Um garoto que ficaria bem mais bonito sem aquela barba.
                            <span>Como minha mãe me descreve.</span>
                        </li>
                    </ul>
                </section>

                <section>
                    <img src="images/eda/momento-jaba.jpg" />
                </section>

                <section>
                    <h1>Natue</h1>
                    <ul>
                        <li>Maior e-commerce de produtos naturais e bem estar brasileiro.</li>
                        <li>Entrega para todo o país.</li>
                        <li>Acompanhe nosso Blog.</li>
                        <li>Siga-nos nas redes sociais.</li>
                        <li>Estamos contratando.</li>

                        <li>Use o voucher <strong>EDSON10</strong> e ganhe de
                            10% de desconto em qualquer produto do site...
                        </li>
                    </ul>
                </section>

                <section>
                    <h1>Alinhando expectativas</h1>
                    <ul>
                        <li>Não espere por código nessa palestra U.U</li>
                        <li>Não espere que essa arquitetura resolva todos os seus problemas.</li>
                    </ul>
                </section>

                <section>
                    <h1>Você lembra dos Mamutes?</h1>

                    <img src="images/eda/mamute.png" />
                </section>

                <section>
                    <h1>Surgem alterações climáticas</h1>

                    <img src="images/eda/clima.jpg" />
                </section>

                <section>
                    <h1>Era uma vez nosso amiguinho U.U</h1>

                    <img src="images/eda/mamute-extinto.png" />
                </section>

                <!-- React Além dos Websockets -->
                <!-- Nickolas "Nawarian" -->
                <section>
                  <section>
                    <h2>
                      React além dos WebSockets
                    </h2>
                    <pre><code class="php">
$seminarioLocaweb = new BigMuthaFuckinEvent(new \DateTime());

$seminarioLocaweb->setMadnessMode(true);
                      </code></pre>

                      <a href="https://joind.in/talk/23fb1">https://joind.in/talk/23fb1</a>

                  </section>

                  <section id="nawarian">
                    <h2>
                      Níckolas Daniel da Silva
                    </h2>
                    <div>
                      <div style="float: left">
                        <img data-src="http://eventos.locaweb.com.br/files/2015/12/N%C3%ADckolas-Daniel-da-Silva.jpg">
                      </div>
                      <div style="float: right; width: 18em;">
                        <ul>
                          <li>
                            Bombeiro de Software há 4 anos
                          </li>
                          <li>
                            Análise e Desenvolvimento de Sistemas [UNIFIEO]
                          </li>
                          <li>
                            Engenharia de Software Orientada para Serviços [IBTA]
                          </li>
                        </ul>
                      </div>
                    </div>

                    <small style="margin-top: 2em;">
                      <a href="http://nawarian.xyz" target="_new">
                        http://nawarian.xyz
                      </a>
                      |
                      <a href="http://git.io/vEe0o" target="_new">
                        http://git.io/vEe0o
                      </a>
                      |
                      <a href="http://phpsp.org.br" target="_new">
                        http://phpsp.org.br
                      </a>
                    </small>
                  </section>
                </section>

                <section id="introducao">
                  <section>
                    <h2>
                      Como costumamos programar
                    </h2>
                    <p>
                      Vamos registrar um novo jogador!
                    </p>
                    <pre><code class="php">
try {
    $mapper = $this->getMapper();

    $player = new Model\Player();
    $player->decorate($data); // dados do jogador

    $mapper->player->persist($player); // Player + atributos
    $this->createInventory($player); // Inventário 30x30 [slots]
    $this->createSkillset($player); // Skills + Níveis

    $mapper->flush();
    return (new JsonResponse($player));
} catch (\Exception $e) {
    return (new JsonResponse(new Error($e)));
}
                      </code></pre>
                  </section>
                  <section data-background-size="20%" data-background="images/creating-player/sincrono/01.png"></section>
                  <section data-background-size="20%" data-background="images/creating-player/sincrono/02.png"></section>
                  <section data-background-size="20%" data-background="images/creating-player/sincrono/03.png"></section>
                  <section data-background-size="20%" data-background="images/creating-player/sincrono/04.png"></section>
                  <section>
                    <h2>
                      Este código é...
                    </h2>
                    <aside style="float: left;">
                      <img src="images/reclamando.gif" alt="">
                    </aside>
                    <ul style="float: right; width: 15em;">
                      <li>
                        <strong>Síncrono</strong>: toda operação depende da diretamente anterior,
                        e o resultado final é o único que importa
                      </li>
                      <li>
                        <strong>Acoplado</strong>: toda operação só executa se sua anterior
                        também executar com sucesso
                      </li>
                      <li>
                        <strong>Catastrófico</strong>: uma falha invalida todo o progresso,
                        independentemente de seu nível de gravidade
                      </li>
                      <li>
                        <strong>Pouco responsivo</strong>: não há noção de completitude,
                        sucesso ou falhas
                      </li>
                    </ul>
                  </section>
                  <section data-background="images/processo-batch.gif">

                  </section>
                  <section>
                    <h2>
                      Qual o problema?
                    </h2>
                    <p>
                      A maior fraqueza desse modelo é o custo de programação para
                      fornecer feedback ao usuário de forma decente. <br><br>
                      Além disso, adotar processos com o formato de batch cria
                      sensação de lentidão e impotência no progresso das operações.
                    </p>
                  </section>
                </section>

                <section>
                  <section>
                    <h2>
                      Uma abordagem diferente
                    </h2>
                    <p>
                      Em vez de executar um monte de procedimentos de uma vez,
                      que tal separar um pouco mais as responsabilidades?
                    </p>
                  </section>
                  <section>
                    <h2>
                      Uma cara diferente para fazer o mesmo
                    </h2>
                    <pre><code class="php">
createPlayerFromRequest(\stdClass $request) { /*...*/ }
createInventory(Model\Player $player) { /*...*/ }
createSkillset(Model\Player $player) { /*...*/ }

try {
  $player = createPlayerFromRequest($data);
  createInventory($player);
  createSkillset($player);

  return (new JsonResponse($player));
} catch (\Exception $e) {
  return (new JsonResponse(new Error($e)));
}
                    </code></pre>
                  </section>
                  <section>
                    <p>
                      Mesmo sendo diferente, este código ainda é<br>
                      <strong>catastrófico</strong> e <strong>pouco responsivo</strong>.
                      <br><br>
                      Apesar disto, ficou menos <strong>acoplado</strong>.
                      Mas ainda é <strong>síncrono</strong>...
                    </p>
                  </section>
                  <section>
                    <h2>
                      Catastrófico e Pouco Responsivo...
                    </h2>
                    <pre><code class="php">
try {
  $player = createPlayerFromRequest($data);
  createInventory($player); // 60 ms
  createSkillset($player); // 120 ms

  // Tudo certo *-*
  return (new JsonResponse($player)); // 180 ms
} catch (InventoryCreationException $e) {
  // Deu erro no inventário
} catch (SkillsetCreationException $e) {
  // Deu erro na criação das habilidades
} catch (PlayerCreationException $e) {
  // Deu erro ao criar personagem :O
} catch (\Exception $e) {
  // Aqui deu ruim mesmo!
}
                    </code></pre>
                  </section>
                  <section>
                    <p>
                      Eu já posso indicar se o problema foi na
                      criação do jogador, do inventário ou das habilidades.
                    </p>
                    <h3 class="fragment fade-in">
                      Mas por que diabos eu tenho de criar um inventário
                      e SÓ DEPOIS criar as habilidades?
                    </h3>
                  </section>
                  <section>
                    <h2>
                      Imagina só se...
                    </h2>
                    <p>
                      ...essas coisas acontecessem ao <strong>mesmo</strong> tempo
                    </p>
                    <pre><code class="php">
createPlayerAccount(\stdClass $request) {
  // $player = createPlayerFromRequest($request); (...)
  return all([
    createInventory($player), // 60 ms
    createSkillset($player) // 120 ms
  ]);
}

createPlayerAccount($data) // 120 ms
    ->then(function (Model\Player $player) {}) // :D
    ->otherwise(function (InventoryCreationException $e) {}) // :/
    ->otherwise(function (SkillsetCreationException $e) {}) // :(
    ->otherwise(function (\Exception $e) {}); // TToTT

                    </code></pre>

                  </section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/01.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/02.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/03.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/04.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/05.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/06.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/07.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/08.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/09.png"></section>
                  <section data-background-size="42%" data-background="images/creating-player/paralelo/10.png"></section>
                  <section>
                    <p>
                      Trabalhar com processos em <strong>paralelo</strong> cria uma gama
                      de possibilidades! <br>
                      <strong>React PHP</strong> veio para realizar este sonho
                    </p>
                  </section>
                </section>

                <section id="slide-sonho">
                  <h2 style="color: #fff">
                    Quê que dá pra gente fazer com esse "sonho" aí
                  </h2>
                  <canvas id="react-sonho" style="border: 1px solid #000;"></canvas>
                </section>

                <section>
                  <section>
                    <h2>
                      Nossos conceitos chave são <strong>assíncrono</strong> e <strong>paralelo</strong>!
                    </h2>
                    <p>
                      Vamos conhecer agora as ferramentas React de acordo com estes conceitos.
                    </p>
                  </section>
                </section>
                <section>
                  <section>
                    <h2>
                      Event Loop
                    </h2>
                  </section>

                  <section>
                    <h2>
                      EventLoop - O maestro
                    </h2>
                    <p>
                      É o grande responsável por controlar os processos
                      paralelos. Possui, atualmente, quatro implementações:
                    </p>
                    <ul>
                      <li>LibEventLoop (<a href="http://php.net/manual/en/book.libevent.php" target="_new">LibEvent</a>)</li>
                      <li>LibEvLoop (<a href="https://github.com/m4rw3r/php-libev" target="_new">Libev</a>)</li>
                      <li>ExtEventLoop (<a href="http://php.net/manual/en/book.event.php" target="_new">Event</a>)</li>
                      <li>StreamSelect (standalone)</li>
                    </ul>
                    <p>
                      A <a href="https://github.com/reactphp/event-loop/blob/master/src/Factory.php" target="_new">EventLoop\Factory</a> utiliza exatamente esta ordem para adivinhar o EventLoop disponível para seu sistema.
                    </p>
                  </section>
                  <section>
                    <h2>
                      EventLoop - Básico
                    </h2>
                    <p>
                      Trata-se de um loop infinito* que, a cada ciclo, executa
                      três grupos de processos quando disponíveis:
                      <ul>
                        <li>Timers (One-off/Periodics)</li>
                        <li>Ticks (Next/Future)</li>
                        <li>Callbacks de Streams</li>
                      </ul>
                    </p>
                  </section>
                  <section data-background="images/event-loop.jpg" data-background-size="90%" data-background-color="#50534a"></section>

                  <section>
                    <h2>
                      Timers
                      <br>
                      <small>
                        One-off/Periodics
                      </small>
                    </h2>
                    <pre><code class="php">
$loop = React\EventLoop\Factory::create();
// Executa {$callback01} infinitamente a cada {$n} segundos
$eterno = $loop->addPeriodicTimer($n, $callback01);

// Executa uma única vez, daqui a 5 segundos
$unico = $loop->addTimer(
    5,
    function () use ($loop, $eterno) {
      if ($loop->isTimerActive($eterno)) {
        // Pára de inserir {$eterno} na fila
        $loop->canceltimer($eterno);
      }
    }
);
$loop->run();
                    </code></pre>
                  </section>
                  <section>
                    <h2>
                      Ticks
                      <br>
                      <small>
                        Future/Next
                      </small>
                    </h2>
                    <pre><code class="php">
$loop = React\EventLoop\Factory::create();

$nextTickCallback = function () {/*...*/};
$futureTickCallback = function () {/*...*/};

// Estes callbacks serão jogados para uma fila de execução
$loop->nextTick($nextTickCallback);
$loop->futureTick($futureTickCallback);

$loop->run();
                    </code></pre>
                  </section>

          <section>
            <h2>
              Callbacks de Streams
            </h2>
            <pre><code class="php">
$loop = React\EventLoop\Factory::create();

$streamTal = getStream(); // resource
stream_set_blocking($streamTal, 0);

$loop->addReadStream($streamTal, function ($streamTal, $loop) {
  // O que fazer quando $streamTal está pronto para leitura
});

$loop->addWriteStream($streamTal, function ($streamTal, $loop) {
  // O que fazer quando $streamTal está pronto para gravação
});

$loop->run();
            </code></pre>
          </section>
          <section>
            <p>
              Todos estes adicionam execuções à fila do EventLoop. <br>
              <strong>Este é o coração do React PHP.</strong>
            </p>
          </section>
          <section data-background="images/event-loop.jpg" data-background-size="90%" data-background-color="#50534a"></section>
                </section>
        <section>
          <section>
            <h2>
              Streams
            </h2>
          </section>
          <section data-background="images/minions.gif">
            <div style="background-color: rgba(0, 0, 0, .4); border-radius: .5em; padding: 1em">
              <h2>
                Streams - Os Minions
              </h2>
              <p>
                De nada adianta um Gru que orquestre todo o trabalho se não
                há quem o realize.
              </p>
            </div>
          </section>
          <section>
            <h2>
              React\Stream
            </h2>
            <p>
              Este pacote contém dois itens principais:
            </p>
            <ul>
              <li>Buffer</li>
              <li>Stream</li>
            </ul>
            <p>
              A partir deste tópico começaremos a abordar processos <strong>paralelos</strong>
              e <strong>assíncronos</strong>.
            </p>
          </section>
          <section>
            <h2>
              Buffer
            </h2>
            <p>
              Buffers são os responsáveis por nos comunicar com processos
              de I/O, facilitando a escrita em <strong>resources</strong>.
            </p>
            <pre><code class="php">
// Exemplo de variável do tipo *resource*
$resource = fopen('arquivo.txt', 'w+');

$buffer = new React\Stream\Buffer($resource, $loop);
$buffer->write('Hello, buffer!');
            </code></pre>
            <p>
              A implementação da classe Buffer vai além da simples escrita:<br>
              Buffer também se preocupa com o tamanho dos itens a serem
              escritos e particiona a escrita entre os ciclos do EventLoop.
            </p>
          </section>
          <section>
            <h2>Stream</h2>
            <p>
              Já os streams são nossos heróis de leitura e escrita de <strong>resources</strong>.
              Os utilizamos através do <strong>on()</strong>, <strong>write()</strong>
              e <strong>pipe()</strong>:
            </p>
            <pre><code class="php">
$phpsp = fopen('http://phpsp.org.br', 'r');
$saida = fopen('./saida.html', 'w+');
$callback = function ($data) {/*...*/};

$reader = new React\Stream\Stream($phpsp, $loop);
$writer = new React\Stream\Stream($saida, $loop);
$reader->on('data', $callback);

$reader->pipe($writer);
            </code></pre>
          </section>
          <section>
            <h2>
              Streams! Streams everywhere!
            </h2>
            <p>
              Os Streams e Buffers operam com todo tipo de <strong>resource</strong>.
              Portanto sockets, I/O de arquivos e quaisquer outros tipos de streams
              que façam leitura ou escrita.
            </p>
            <pre><code class="php">
// Um OtServer em PHP?? Quem sabe?! O.o
$sock = stream_socket_server('tcp://0.0.0.0:7171');
$server = new React\Stream\Stream($sock, $loop);

$server->on('data', function($data) use ($sock) {
  // Um readable resource => new Stream($clientSock) *-*
  $clientSock = stream_socket_accept($sock);
});
            </code></pre>
          </section>
        </section>
        <section>
          <section>
            <h2>Sockets</h2>
          </section>
          <section>
            <h2>
              Socket - O canal
            </h2>
            <p>
              React\Socket serve justamente para simplificar a criação de
              servidores utilizando o protocolo TCP/IP.
            </p>
          </section>
          <section>
            <p>
              Lembram deste trecho de código?
            </p>
            <pre><code class="php">
// Um OtServer em PHP?? Quem sabe?! O.o
$sock = stream_socket_server('tcp://0.0.0.0:7171');
$server = new React\Stream\Stream($sock, $loop);

$server->on('data', function($data) use ($sock) {
  // Um readable resource => new Stream($clientSock) *-*
  $clientSock = stream_socket_accept($sock);
});
            </code></pre>
            <p>
              Parece até simples se você não precisa identificar as conexões,
              organizar os fluxos de entrada e saída, buffers e tudo mais.
            </p>
          </section>
          <section>
            <h2>
              React\Socket
            </h2>
            <pre><code class="php">
$stdOut = new React\Stream\Stream(STDOUT, $loop);
$server = new React\Socket\Server($loop);

$server->on('connection', function ($conn) use ($stdOut) {
  // Alguém se conectou!! *-*
  $conn->write('Olá, intruso! >_<');

  $conn->pipe($stdOut);
});

$server->listen(7171, '0.0.0.0');
            </code></pre>
          </section>
        </section>
        <section>
          <section data-background="images/telecurso-revisao.gif"></section>
          <section>
            <h2>
              React PHP
            </h2>
            <p>
              Fazendo o resumão de tudo, <strong>React PHP</strong>:
              <ul>
                <li class="fragment fade-in">
                  Tem um EventLoop que organiza as execuções
                </li>
                <li class="fragment fade-in">
                  Tem Streams, que ajudam a manipular I/O
                </li>
                <li class="fragment fade-in">
                  Tem Sockets, que nos permite comunicar por rede
                </li>
                <li class="fragment fade-in">
                  Tem uma boa abstração para trabalhar com <strong>resources</strong>
                </li>
              </ul>
            </p>
          </section>
          <section>
            <h2>
              Nota: React PHP lida com <strong>resources</strong>
            </h2>
            <p>
              Portanto os resultados de <strong>popen()</strong>,
              <strong>fopen()</strong>, <strong>stream_socket_server()</strong>,
              <strong>inotify_init()</strong>, e outros, poderão ser manipulados
              dentro do código PHP de forma facilitada.
            </p>
          </section>
          <section>
            <p>
              Se eu tenho acesso a I/O, subprocessos e rede, o que
              é que eu não posso fazer!?
            </p>
          </section>
          <section data-background="images/hell-yeah.gif"></section>
          <section>
            <p>
              Nada <br>
              <strong class="fragment fade-in">:)</strong>
            </p>
          </section>
        </section>
        <section data-background="images/ross.gif">
          <div style="background-color: rgba(0, 0, 0, .4); border-radius: .5em; padding: 1em" class="fragment fade-in">
            <p>
              Legal, legal...
            </p>
            <p class="fragment fade-in">
              Isso é só a base do React PHP, agora vamos à parte interessante!!
            </p>
          </div>
        </section>
        <section>
          <h2>
            Cases legais e marotos!
          </h2>
        </section>
        <section>
          <section>
            <h2>
              Case 01: Logging não bloqueante
            </h2>
            <p>
              Através de sockets ou mesmo de subprocessos somos capazes
              de realizar o logging de aplicações sem aumentar drasticamente
              o tempo de execução.
              <br>
              O Código abaixo ilustra uma aplicação com subprocessos.
            </p>
          </section>
          <section>
            <h2>
              Exemplo chulo com Monolog:
            </h2>
            <small>
              Esta ferramenta roda como linha de comando
            </small>
            <pre><code class="php">
// $ php log.php meuArquivo.log 'Texto para o log'
require_once dirname(__FILE__).'/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logFile = $loggerName = $argv[1]; // meuArquivo.log
$textToLog = $argv[2]; // Texto para o log

$log = new Logger($loggerName);
$log->pushHandler(new StreamHandler($logFile), Logger::WARNING);

$log->addInfo($textToLog);
            </code></pre>
          </section>
          <section>
            <h2>
              Utilizando log.php
            </h2>
            <pre><code class="php">
use React\ChildProcess\Process;

$loop = React\EventLoop\Factory::create();
$stdIn = new React\Stream\Stream(STDIN, $loop);

$stdIn->on('data', function($input) use ($loop) {
  $comando = "php log.php input.log '{$input}'";
  (new Process($comando))->start($loop);
});

$loop->run();
            </code></pre>
          </section>
          <section data-background-size="42%" data-background="images/logging/01.png"></section>
          <section data-background-size="42%" data-background="images/logging/02.png"></section>
          <section data-background-size="42%" data-background="images/logging/03.png"></section>
          <section data-background-size="42%" data-background="images/logging/04.png"></section>
          <section data-background-size="42%" data-background="images/logging/05.png"></section>
        </section>
        <section>
          <section>
            <h2>
              Case 02: PHPBot - Automação de tarefas
            </h2>
            <small>
              <a href="https://github.com/nawarian/PHPBot" target="_new">
                https://github.com/nawarian/PHPBot
              </a>
            </small>
            <p>
              Computadores com Windows possuem a Win32 API que, dentre outas coisas,
              permite o envio de eventos de periféricos como teclado e mouse. <br>
              Para computadores com sistemas Unix-like que utilizem o X11, podemos utilizar
              a libx11 para alcançar o mesmo resultado.
            </p>
          </section>
          <section>
            <h2>
              Implementação
            </h2>
            <p>
              O PHP não tem acesso à Win32API sem utilizar extensões, para isto <strong>python</strong>
              se mostrou útil.
              Para o X11 ainda não existe uma biblioteca em PHP, mas a ferramenta de linha de comando <strong>xdotool</strong>
              já oferece tudo o que precisamos. <br>
              Trata-se portando de uma série de subprocessos chamados de forma organizada.
            </p>
          </section>
          <section>
            <h2>Exemplo: runando no Tibia :)</h2>
            <pre><code class="php">
$dm = PHPBot\DesktopManager\Factory::create($loop);
$runa = $argv[1];

$runar = $dm->createCommandPipeline(
  $dm->wait(.5),
  $dm->keyboard()->sendKey(Keys::ENTER()),
  $dm->wait(.5),
  $dm->keyboard()->type($runa),
  $dm->wait(.5),
  $dm->keyboard()->sendKey(Keys::ENTER()),
  $dm->wait(2)
);

$runar->start()
    ->then($onPipelineEndedCallback);
            </code></pre>
          </section>
          <section>
            <video class="stretch" src="images/phpbot/tibiabot.mp4"></video>
          </section>
        </section>
        <section data-background="images/duvidas-lego.gif">
          <h2>
            <a href="#nawarian">
              Dúvidas?
            </a>
          </h2>
        </section>

                <!-- Slides JWT -->
                <!-- Ivan Rosolen -->
                <section>
                    <h1>JSON WEB TOKEN</h1>
                    <h4>Ivan Rosolen</h4>
                </section>

                <section>
                    <h1>Ivan Rosolen</h1>
                    <p>Graduado em Sistemas de Informa&ccedil;&atilde;o</p>
                    <p>P&oacute;s-graduado em Ger&ecirc;ncia de Projetos</p>
                    <p>Desenvolvedor a 15+ anos</p>
                    <p>Autor de v&aacute;rios PHPT (testes para o PHP)</p>
                    <p>Entusiasta de novas tecnologias</p>
                    <h3>Head of Innovation @ Arizona</h3>
                    <h3>CTO @ Mokation</h3>
                </section>

                <section>
                    <h1>@ivanrosolen</h1>
                </section>

                <section class="poll" data-number="4211">
                    <p>Criei ou utilizei uma API</p>

                    <div class="button-level" data-value="sim">
                        <span>Sim (<b>0</b>)</span>
                        <div class="level green"></div>
                    </div>

                    <div class="button-level" data-value="não">
                        <span>Não (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>
                </section>

                <section class="poll" data-number="4212">
                    <p>Autentica&ccedil;&atilde;o</p>

                    <div class="button-level" data-value="jwt">
                        <span>JWT (<b>0</b>)</span>
                        <div class="level green"></div>
                    </div>

                    <div class="button-level" data-value="oauth">
                        <span>OAuth (<b>0</b>)</span>
                        <div class="level blue"></div>
                    </div>

                    <div class="button-level" data-value="outros">
                        <span>Outros (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>
                </section>

                <section>
                    <h1>Authentication</h1>
                </section>

                <section>
                    <ul>
                        <li>Form Request Post/Get</li>
                        <li>OAuth</li>
                        <li>Key/Hash</li>
                        <li>Plain Text Credentials</li>
                        <li>Session Cookies</li>
                    </ul>
                </section>

                <section>
                    <ul>
                        <li>Data is stored in plain text on the server</li>
                        <li>Filesystem read/write requests</li>
                        <li>Distributed/clustered applications</li>
                        <li>Redis</li>
                        <li>Sticky sessions</li>
                    </ul>
                </section>

                <section>
                    <h1>API</h1>
                </section>

                <section>
                    <ul>
                        <li>Stateless authentication (simplifies horizontal scaling)</li>
                        <li>Prevent (mitigate) Cross-Site Request Forgery (CSRF) attacks</li>
                        <li>Security (https)</li>
                        <li>Authorization: Bearer</li>
                    </ul>
                </section>

                <section>
                    <h2>Authentication vs. Authorization</h2>
                    <h2 class="fragment" data-fragment-index="1">401 unauthorized / 403 forbidden</h2>
                    <h2 class="fragment" data-fragment-index="2">JWT != ACL</h2>
                </section>

                <section>
                    <h1>JOSE</h1>
                </section>

                <section>
                    <h1>JSON Object Signing and Encryption</h1>
                    <ul>
                        <li>JWT</li>
                        <li>JWS</li>
                        <li>JWA</li>
                        <li>JWK</li>
                        <li>JWE</li>
                    </ul>
                </section>

                <section>
                    <h1>Advantages</h1>
                </section>

                <section>
                    <ul>
                        <li>JSON Web Tokens work across different programming languages</li>
                        <li>JWTs are self-contained</li>
                        <li>JWTs can be passed around easily and secure</li>
                        <li>Better control like “one time token” to forgot password, confirm user, request rates, access, etc.</li>
                        <li>One token to rule them all (Stateless)</li>
                    </ul>
                </section>

                <section>
                    <h1>Anatomy</h1>
                </section>

                <section>
                    <h2>header.claims.signature</h2>
                </section>

                <section>
                    <h1>Header</h1>
                    <pre>
                        <code class="json" data-trim>
{
"typ": "JWT",
"alg": "HS256"
}
                        </code>
                    </pre>
                </section>

                <section>
                    <h1>Claims</h1>
                    <ul>
                        <li>iss: The issuer of the token</li>
                        <li>sub: The subject of the token</li>
                        <li>aud: The audience of the token</li>
                        <li>exp: This will define the expiration in NumericDate value. MUST be after the current time</li>
                        <li>nbf: Defines the time before which the JWT MUST NOT be accepted for processing</li>
                        <li>iat: The time the JWT was issued</li>
                        <li>jti: Unique identifier for the JWT</li>
                    </ul>
                    <p><small>Ref.:
                            <a href="http://www.slideshare.net/lcobucci/jwt-to-authentication-and-beyond" target="_blank">
                                http://www.slideshare.net/lcobucci/jwt-to-authentication-and-beyond
                            </a></small>
                    </p>
                </section>

                <section>
                    <h2>Payload / Claims</h2>
                    <pre>
                        <code class="json" data-trim>
{
"iss": "ivanrosolen.com",
"exp": 1300819380,
"name": "Ivan Rosolen",
"admin": true
}
                        </code>
                    </pre>
                </section>

                <section>
                    <h1>JWT</h4>
                        <h4>eyJ0eXAiOiAiSldUIiwiYWxnIjogIkhTMjU2In0=</h4>
                        <h4>.</h4>
                        <h4>eyJpc3MiOiAiaXZhbnJvc29sZW4uY29tIiwiZXhwIjogMTMwMDgxOTM4MCwibmFtZSI6ICJJdmFuIFJvc29sZW4iLCJhZG1pbiI6IHRydWV9</h4>
                        <h4>.</h4>
                </section>

                <section>
                    <h1>JWS</h1>
                    <ul>
                        <li>header</li>
                        <li>claims</li>
                    </ul>
                    <p>payload</p>
                    <p>base64(header) . base64(claims)</p>
                </section>

                <section>
                    <h1>JWA</h1>
                    <ul>
                        <li>secret (hmac sha256, rsa256 ....)</li>
                        <li>encrypt payload with key ‘Xuplau’</li>
                    </ul>
                </section>

                <section>
                    <h1>Signature</h1>
                    <pre>
                        <code class="javascript" data-trim>
var encodedString = base64UrlEncode(header) + "." + base64UrlEncode(payload);

HMACSHA256(encodedString, 'Xuplau');
                        </code>
                    </pre>
                </section>

                <section>
                    <h1>JWT</h4>
                        <h4>eyJ0eXAiOiAiSldUIiwiYWxnIjogIkhTMjU2In0=</h4>
                        <h4>.</h4>
                        <h4>eyJpc3MiOiAiaXZhbnJvc29sZW4uY29tIiwiZXhwIjogMTMwMDgxOTM4MCwibmFtZSI6ICJJdmFuIFJvc29sZW4iLCJhZG1pbiI6IHRydWV9</h4>
                        <h4>.</h4>
                        <h4>M2FjZTM0M2ZiNjhhMzBiOWNiYTkxN2U1Zjk4YjUxOWYzMTY3NGZlMmU4MTIzYjU1NTRkMjNlNjYzOTkyZGU2Nw==</h4>
                </section>

                <section>
                    <h1>Code</h1>
                </section>

                <section>
                    <h1>lcobucci/jwt</h1>
                    <p>Ref.:
                        <a href="https://github.com/lcobucci/jwt" target="_blank">
                            https://github.com/lcobucci/jwt
                        </a>
                    </p>
                </section>

                <section>
                    <h1>New Token</h1>
                    <pre>
                        <code class="php" data-trim>
use Lcobucci\JWT\Builder;
use Lcobucci\JWT\Signer\Hmac\Sha256;
                        </code>
                    </pre>
                </section>

                <section>
                    <pre>
                        <code class="php" data-trim>
$signer  = new Sha256;
$builder = new Builder;

$token   = $builder->setIssuer($config['jwt']['issuer'])
->setAudience($config['jwt']['audience'])
->setId(hash('sha256',$config['jwt']['key'].$login->hash), true)
->setIssuedAt(time())
->setNotBefore(time() - 1)
->setExpiration(time() + 3600)
->set('uid', $login->hash)
->sign($signer, $config['jwt']['key'])
->getToken();

$tmp          = new stdClass;
$tmp->name    = $login->name;
$tmp->hash    = $login->hash;
$tmp->token   = (string) $token;
                        </code>
                    </pre>
                </section>

                <section>
                    <h1>Validate/Verify</h1>
                    <pre>
                        <code class="php" data-trim>
use Lcobucci\JWT\ValidationData;
use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Signer\Hmac\Sha256;
                        </code>
                    </pre>
                </section>

                <section>
                    <pre>
                        <code class="php" data-trim>
$parser = new Parser;
$token = $parser->parse($token);

$data = new ValidationData;
$data->setIssuer($config['jwt']['issuer']);
$data->setAudience($config['jwt']['audience']);

// unique id - blacklist
$data->setId( hash('sha256', $config['jwt']['key'].$login->hash), true) ;

$signer = new Sha256;

if ( $token->validate($data) !== true ||
$token->verify($signer, $config['jwt']['key']) !== true )
{
return false;
}
                        </code>
                    </pre>
                </section>

                <section>
                    <h1>Warning!</h1>
                    <img class="fragment" data-fragment-index="1" src="images/ivanrosolen/jwt_payload_wtf.png" />
                </section>

                <section>
                    <h1>Demo</h1>
                </section>

                <section>
                    <h1>Github</h1>
                    <ul>
                        <li>Session</li>
                        <li>JWT</li>
                        <li>JOSE</li>
                    </ul>
                    <p>Ref.:
                        <a href="https://github.com/ivanrosolen/crud-demo" target="_blank">
                            https://github.com/ivanrosolen/crud-demo
                        </a>
                    </p>
                </section>

                <section>
                    <h1>Refs</h1>
                </section>

                <section>
                    <h3>Github</h3>
                    <p>
                        <a href="https://github.com/ivanrosolen/crud-demo" target="_blank">
                            https://github.com/ivanrosolen/crud-demo
                        </a>
                    </p>
                </section>

                <section>
                    <h3>JWT</h3>
                    <p>
                        <a href="https://github.com/dwyl/learn-json-web-tokens" target="_blank">
                            https://github.com/dwyl/learn-json-web-tokens
                        </a>
                    </p>
                    <p>
                        <a href="http://jwt.io" target="_blank">
                            http://jwt.io
                        </a>
                    </p>
                    <p>
                        <a href="https://developer.atlassian.com/static/connect/docs/latest/concepts/understanding-jwt.html" target="_blank">
                            https://developer.atlassian.com/.../understanding-jwt.html
                        </a>
                    </p>
                    <p>
                        <a href="http://stackoverflow.com/questions/20588467/how-to-do-stateless-session-less-cookie-less-authentication" target="_blank">
                            http://stackoverflow.com/....less-cookie-less-authentication
                        </a>
                    </p>
                </section>

                <section>
                    <h3>Talks</h3>
                    <p>
                        <a href="http://www.slideshare.net/erickt86/secureapi" target="_blank">
                            Erick Belluci Tedeschi <br>
                            Applying Security Controls on REST APIs
                        </a>
                    </p>
                    <br>
                    <p>
                        <a href="http://www.slideshare.net/lcobucci/jwt-to-authentication-and-beyond" target="_blank">
                            Luís Cobucci <br>
                            JWT - To authentication and beyond!
                        </a>
                    </p>
                </section>

                <section>
                    <h3>Luís Otávio Cobucci Oblonczyk</h3>
                    <p>
                        <a href="https://github.com/lcobucci/jwt" target="_blank">
                            https://github.com/lcobucci/jwt
                        </a>
                    </p>
                    <p>
                        <a href="https://github.com/Ocramius/PSR7Session" target="_blank">
                            https://github.com/Ocramius/PSR7Session
                        </a>
                    </p>
                </section>

                <section>
                    <h1>????</h1>
                </section>

                <section>
                    <h1>OBRIGADO!</h1>
                    <p>Visite
                        <a href="http://phpsp.org.br" target="_blank">
                            phpsp.org.br
                        </a>
                    </p>
                </section>
                <!-- Slides JWT - Ivan Rosolen -->

                <!-- Painel -->
                <section class="poll" data-number="pannel" data-change="true">
                    <p>Decida Sobre o Painel</p>
                    <div class="button-level" data-value="keep">
                        <span>Mantenha o Tema (<b>0</b>)</span>
                        <div class="level green"></div>
                    </div>

                    <div class="button-level medium-poll" data-value="php7">
                        <span>PHP7 (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>

                    <div class="button-level medium-poll" data-value="psr7">
                        <span>PSR7 e Demais PSR's (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>

                    <div class="button-level medium-poll" data-value="frameworks">
                        <span>Frameworks e Microframeworks (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>

                    <div class="button-level medium-poll" data-value="diversidade">
                        <span>Diversidade na Tecnologia (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>

                    <div class="button-level medium-poll" data-value="ci">
                        <span>Integração Continua e Deploy (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>

                    <div class="button-level medium-poll" data-value="testes">
                        <span>Testes de Software (<b>0</b>)</span>
                        <div class="level red"></div>
                    </div>

                    <?php if ($mode == 'presenter') : ?>
                        <div class="button-level small-poll" data-value="clean">
                            <span>Limpar Dados <b></b></span>
                            <div class="level red"></div>
                        </div>
                    <?php endif; ?>
                </section>

                <!-- Sorteio -->
                <section class="raffle" data-number="pannel" data-change="true">
                    <h2 class="winner-message"></h2>
                    <p>Vencedor</p>
                    <p class="winner-nickname"></p>

                    <?php if ($mode == 'presenter') : ?>
                        <div class="button-level" data-value="raffle">
                            <span>Sortear</span>
                            <div class="level green"></div>
                        </div>
                    <?php endif; ?>
                </section>

			</div>

		</div>

		<script src="js/plugins/jquery.min.js"></script>
		<script src="lib/js/head.min.js"></script>
		<script src="js/plugins/reveal.js"></script>
    <script src="js/plugins/soundjs-0.6.0.combined.js"></script>

		<script>
            var mode = $('body').attr('data-mode');
            var websocketsAddress = $('body').attr('data-websockets-address');

            var revealConfig = {
                controls: false,
                progress: true,
                history: false,
                keyboard: false,
                overview: false,
                touch: false,
                center: true,
                autoSlideStoppable: false,
                help: false,

                transition: 'slide', // none/fade/slide/convex/concave/zoom

                // Optional reveal.js plugins
                dependencies: [
                    { src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
                    { src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
                    { src: 'plugin/highlight/highlight.js', async: true, condition: function() { return !!document.querySelector( 'pre code' ); }, callback: function() { hljs.initHighlightingOnLoad(); } },
                    { src: 'plugin/multiplex-ratchet/ratchet.js', async: true },
                    { src: 'js/code.min.js', async: true },
                    //{ src: 'plugin/zoom-js/zoom.js', async: true },
                    //{ src: 'plugin/notes/notes.js', async: true }
                ],

                multiplex: {
                    secret: 'issoehumsegredo',
                    id: 'nossaqueidlegal',
                    url: websocketsAddress
                },
            };

            if (mode == 'presenter') {
                revealConfig.controls = true;
                revealConfig.keyboard = true;
                revealConfig.touch = true;
                revealConfig.dependencies.push({ src: 'plugin/multiplex-ratchet/master.js', async: true });
            } else {
                revealConfig.dependencies.push({ src: 'plugin/multiplex-ratchet/client.js', async: true });
            }

			// Full list of configuration options available at:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize(revealConfig);
		</script>
    <script src="js/plugins/NoSleep.min.js"></script>

    <script>
      window.onload = function () {
        var reactCanvas = document.getElementById('react-sonho'),
            ctx = reactCanvas.getContext('2d'),
            drawing = false;
        window.toDraw = new Array;
        window.toDrawReceived = new Array;

        var radius = 10;

        window.drawCircle = function (context, x, y) {
          context.fillStyle = '#fff';

          context.beginPath();
          context.moveTo(x, y);
          context.arc(x, y, radius, 0, 2 * Math.PI, false);
          context.fill();
        };

        function toggleDrawing (evt) {
          drawing = !drawing;
          evt.preventDefault();
        }

        window.addEventListener('mouseup', toggleDrawing);
        window.addEventListener('mousedown', toggleDrawing);

        reactCanvas.addEventListener('mousemove', function (e) {
          if (!drawing) return;

          toDraw.push({
            x: e.offsetX + 30,
            y: e.layerY + 30
          });
        });

        setInterval(function () {
          if (window.drawingWs && toDraw.length) {
            window.drawingWs.send(JSON.stringify({
              type: 'coords',
              coords: toDraw
            }));
          }

          var draw = toDraw.concat(toDrawReceived);
          toDrawReceived = new Array;
          toDraw = new Array;

          for (var i in draw) {
            var coords = draw[i];
            drawCircle(ctx, coords.x, coords.y);

            draw.splice(draw.indexOf(coords), 1);
          }
        }, 300);

        window.drawingWs = new WebSocket('ws://'+websocketsAddress);
        window.drawingWs.onopen = function () {
          window.onresize();
        };

        window.drawingWs.onmessage = function (e) {
          var msg = JSON.parse(e.data);

          if (msg.type == 'coords') {
            toDrawReceived = toDrawReceived.concat(msg.coords);
          }
        };

        window.onresize = function () {
          reactCanvas.width = 600;
          reactCanvas.height = 800;
        };

      };
    </script>

	</body>
</html>
