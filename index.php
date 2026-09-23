<?php
$title = "Sites Profissionais para Empresas";
$description = "A SGM Empresarial cria Sites profissionais e modernos para empresas e profissionais liberais. Design tecnológico, entrega rápida e suporte contínuo. Solicite um orçamento.";
$active = "";
include __DIR__ . "/partials/header.php";
?>

<!-- HERO -->
<section class="hero">
  <div class="container">
    <div class="hero__layout">
      <div data-reveal>
        <span class="hero__rating"><span class="stars-inline">★★★★★</span> Design tecnológico · Entrega ágil</span>
        <h1>Sua empresa merece um site à altura do seu trabalho.</h1>
        <p class="lede">Criamos sites profissionais, rápidos e seguros que transformam visitantes em clientes — com identidade visual própria, tecnologia moderna e acompanhamento humano do início ao fim.</p>
        <div class="hero__cta">
          <a class="btn btn--primary" target="_blank" rel="noopener"
             href="<?php echo waLink($whatsappNumber, 'Olá! Gostaria de solicitar um orçamento para o site da minha empresa.'); ?>">
            Solicitar orçamento no WhatsApp
          </a>
          <a class="btn btn--ghost" href="#portfolio">Ver exemplos de sites</a>
        </div>

        <p class="trust-bar">
          <strong>Design + desenvolvimento + publicação</strong> &middot;
          <strong>2 rodadas de ajustes inclusas</strong> &middot;
          <strong>Suporte contínuo</strong>
        </p>

        <div class="stat-row">
          <div class="stat"><span class="stat__value" data-count="100">0</span><span class="stat__label">% responsivo (celular e desktop)</span></div>
          <div class="stat"><span class="stat__value" data-count="15">0</span><span class="stat__label">Dias, prazo médio de entrega*</span></div>
          <div class="stat"><span class="stat__value" data-count="2">0</span><span class="stat__label">Rodadas de ajustes inclusas</span></div>
        </div>
      </div>

      <div class="hero__mock" data-reveal>
        <div class="browser-frame hero-carousel" style="max-width:460px;">
          <div class="browser-frame__shot hero-carousel__viewport">
            <?php
            $heroSlides = [
              ["/assets/img/portfolio/advogado-ricardo-mendes.jpeg", "Exemplo de site — escritório de advocacia"],
              ["/assets/img/portfolio/beleza-salao.jpeg", "Exemplo de site — salão de beleza"],
              ["/assets/img/portfolio/psicologa-ana-beatriz.jpeg", "Exemplo de site — psicóloga"],
              ["/assets/img/portfolio/construcao-estrutural-prime.png", "Exemplo de site — construtora"],
              ["/assets/img/portfolio/estetica-bella-derma.png", "Exemplo de site — clínica de estética"],
              ["/assets/img/portfolio/imobiliaria-primelar.png", "Exemplo de site — imobiliária"],
              ["/assets/img/portfolio/advogado-monteiro-almeida.png", "Exemplo de site — escritório de advocacia"],
              ["/assets/img/portfolio/consultoria-sgm.png", "Exemplo de site — consultoria empresarial"],
              ["/assets/img/portfolio/contabil-sgm.png", "Exemplo de site — assessoria contábil"],
              ["/assets/img/portfolio/saude-viva-saude.png", "Exemplo de site — clínica médica"],
              ["/assets/img/portfolio/psicologia-mente-serena.png", "Exemplo de site — clínica de psicologia"],
            ];
            foreach ($heroSlides as $i => $s) {
              [$src, $alt] = $s;
              $activeClass = $i === 0 ? ' is-active' : '';
              $loading = $i === 0 ? 'eager' : 'lazy';
              echo '<img class="hero-carousel__slide' . $activeClass . '" src="' . $src . '" alt="' . $alt . '" loading="' . $loading . '">';
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <p style="font-size:0.78rem;color:var(--ink-faint);margin-top:8px;">*Prazo médio estimado após o briefing aprovado; pode variar conforme a complexidade do projeto.</p>
  </div>
</section>

<!-- PERSONALIZAÇÃO -->
<section class="section section--tight">
  <div class="container">
    <div data-reveal style="max-width:720px;">
      <span class="eyebrow">Feito sob medida</span>
      <h2>Seu site, com a cara do seu negócio</h2>
      <p class="lede">Nada de templates genéricos. Cada projeto é pensado para refletir a identidade, o tom e o público da sua empresa — o visitante sente que está no site de vocês, não em um molde reaproveitado.</p>
    </div>
    <div class="grid grid--3" style="margin-top:36px;">
      <?php
      $personalizacao = [
        ["layout", "Identidade visual própria", "Cores, tipografia e estilo alinhados à sua marca — não um template genérico e reconhecível."],
        ["code", "Estrutura sob medida", "As seções e o conteúdo são pensados para o seu tipo de negócio, não um molde único para todo mundo."],
        ["bolt", "Experiência única para o seu cliente", "Cada detalhe pensado para o público que você quer atrair e converter."],
      ];
      foreach ($personalizacao as $p) {
        [$ic, $nome, $desc] = $p;
        echo '<div class="card" data-reveal>';
        echo '<div class="card__icon">' . icon($ic) . '</div>';
        echo '<h3>' . $nome . '</h3>';
        echo '<p>' . $desc . '</p>';
        echo '</div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- SERVIÇOS -->
<section id="servicos" class="section section--alt">
  <div class="container">
    <div data-reveal>
      <span class="eyebrow">Serviços</span>
      <h2>Tudo que sua presença digital precisa</h2>
      <p class="lede">Do primeiro contato à publicação, cuidamos de cada etapa — design, desenvolvimento, conteúdo e manutenção.</p>
    </div>

    <div class="grid grid--3" style="margin-top:40px;">
      <?php
      $servicos = [
        ["layout", "Site Institucional", "Apresente sua empresa com uma página profissional: quem você é, o que faz e como falar com você — pronta para transmitir credibilidade."],
        ["bolt", "Landing Page", "Página focada em conversão para campanhas, lançamentos ou captação de leads, com um único objetivo claro."],
        ["code", "Site para Profissionais Liberais", "Advogados, médicos, dentistas, contadores e consultores: um site que reforça autoridade e facilita o contato com o cliente."],
        ["cart", "Loja Virtual Simples", "Catálogo de produtos ou serviços com botão de compra ou contato direto via WhatsApp, sem complicação."],
        ["shield", "Segurança e Performance", "Certificado SSL, hospedagem confiável e páginas leves — seu site carrega rápido e protege os dados de quem visita."],
        ["clock", "Manutenção Contínua", "Depois do site no ar, seguimos ao seu lado com planos de manutenção para manter tudo atualizado."],
      ];
      foreach ($servicos as $s) {
        [$ic, $nome, $desc] = $s;
        echo '<div class="card" data-reveal>';
        echo '<div class="card__icon">' . icon($ic) . '</div>';
        echo '<h3>' . $nome . '</h3>';
        echo '<p>' . $desc . '</p>';
        echo '</div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- PORTFÓLIO / EXEMPLOS -->
<section id="portfolio" class="section">
  <div class="container">
    <div data-reveal>
      <span class="eyebrow">Portfólio</span>
      <h2>O tipo de site que entregamos</h2>
      <p class="lede">Cada projeto é único e construído sob medida, mas estes exemplos mostram o padrão de qualidade, organização e visual que você pode esperar.</p>
    </div>

    <div class="grid grid--3" style="margin-top:40px;">
      <?php
      $exemplos = [
        [
          "tag" => "Advocacia",
          "titulo" => "Site para escritório de advocacia",
          "desc" => "Áreas de atuação, depoimentos e contato direto por WhatsApp — estilo já validado em produção.",
          "foto" => "/assets/img/portfolio/advogado-ricardo-mendes.jpeg",
          "link" => "https://advmauro.com.br", "linkLabel" => "Ver case real →",
          "chrome" => false,
        ],
        [
          "tag" => "Beleza & Estética",
          "titulo" => "Site para salão de beleza",
          "desc" => "Serviços, agendamento e depoimentos, com visual sofisticado alinhado à identidade da marca.",
          "foto" => "/assets/img/portfolio/beleza-salao.jpeg",
          "chrome" => false,
        ],
        [
          "tag" => "Saúde Mental",
          "titulo" => "Site para psicóloga",
          "desc" => "Acolhimento, especialidades de atendimento e agendamento de consulta em poucos cliques.",
          "foto" => "/assets/img/portfolio/psicologa-ana-beatriz.jpeg",
          "chrome" => false,
        ],
        [
          "tag" => "Construção Civil",
          "titulo" => "Site para construtora",
          "desc" => "Projetos em destaque, áreas de atuação e formulário de orçamento, transmitindo solidez e credibilidade.",
          "foto" => "/assets/img/portfolio/construcao-estrutural-prime.png",
          "chrome" => false,
        ],
        [
          "tag" => "Clínica de Estética",
          "titulo" => "Site para clínica de estética",
          "desc" => "Tratamentos, resultados antes/depois e agendamento de avaliação, com visual acolhedor e sofisticado.",
          "foto" => "/assets/img/portfolio/estetica-bella-derma.png",
          "chrome" => false,
        ],
        [
          "tag" => "Imobiliária",
          "titulo" => "Site para imobiliária",
          "desc" => "Busca de imóveis, destaques à venda/aluguel e contato direto com a equipe de corretores.",
          "foto" => "/assets/img/portfolio/imobiliaria-primelar.png",
          "chrome" => false,
        ],
      ];
      foreach ($exemplos as $e) {
        $showChrome = !isset($e['chrome']) || $e['chrome'] !== false;
        echo '<div class="portfolio-card card" data-reveal>';
        echo '<div class="browser-frame">';
        if ($showChrome) {
          echo '<div class="browser-frame__bar"><span></span><span></span><span></span><div class="browser-frame__url">' . (isset($e['url']) ? $e['url'] : 'exemplo.com.br') . '</div></div>';
        }
        if (!empty($e['foto'])) {
          echo '<div class="browser-frame__shot"><img src="' . $e['foto'] . '" alt="Exemplo de site — ' . $e['titulo'] . '" loading="lazy"></div>';
        } else {
          echo '<div class="browser-frame__body">';
          echo '<div class="mock-nav"><div class="mock-line" style="width:50px;"></div><div style="display:flex;gap:5px;"><div class="mock-line" style="width:26px;"></div><div class="mock-line" style="width:26px;"></div></div></div>';
          echo '<div class="mock-hero" style="background:' . $e['grad'] . ';padding:18px 14px;">';
          echo '<div class="mock-line" style="width:75%;"></div><div class="mock-line" style="width:45%;"></div><div class="mock-btn" style="width:70px;"></div>';
          echo '</div>';
          echo '<div class="mock-grid">';
          for ($i = 0; $i < 3; $i++) {
            $c = $i % 2 === 0 ? $e['cor1'] : $e['cor2'];
            echo '<div class="mock-card"><div class="mock-dot" style="background:' . $c . ';"></div><div class="mock-line"></div></div>';
          }
          echo '</div></div>';
        }
        echo '</div>';
        echo '<span class="portfolio-card__tag">' . $e['tag'] . '</span>';
        echo '<h3>' . $e['titulo'] . '</h3>';
        echo '<p>' . $e['desc'] . '</p>';
        if (!empty($e['link'])) {
          echo '<a class="portfolio-card__link" target="_blank" rel="noopener" href="' . $e['link'] . '">' . $e['linkLabel'] . '</a>';
        }
        echo '</div>';
      }
      ?>
    </div>
    <p style="font-size:0.8rem;color:var(--ink-faint);margin-top:24px;">Exemplos de design representando os estilos de projeto que desenvolvemos — o site do seu negócio é sempre construído sob medida, com sua identidade visual.</p>
  </div>
</section>

<!-- COMO FUNCIONA -->
<section id="como-funciona" class="section section--alt">
  <div class="container">
    <div data-reveal>
      <span class="eyebrow">Como Funciona</span>
      <h2>Do briefing ao site no ar</h2>
    </div>
    <div class="steps" style="margin-top:40px;">
      <div class="step" data-reveal>
        <span class="step__num">01</span>
        <h3>Briefing</h3>
        <p>Conversamos sobre seu negócio, objetivos e identidade visual — em uma reunião rápida ou formulário guiado.</p>
      </div>
      <div class="step" data-reveal>
        <span class="step__num">02</span>
        <h3>Design &amp; Desenvolvimento</h3>
        <p>Construímos o site com base no briefing, cuidando de layout, textos e performance.</p>
      </div>
      <div class="step" data-reveal>
        <span class="step__num">03</span>
        <h3>Rodadas de Ajustes</h3>
        <p>Você revisa o resultado e pedimos os ajustes necessários — 2 rodadas já inclusas na compra.</p>
      </div>
      <div class="step" data-reveal>
        <span class="step__num">04</span>
        <h3>Publicação &amp; Suporte</h3>
        <p>Site no ar, com certificado de segurança, e suporte contínuo disponível por planos de manutenção.</p>
      </div>
    </div>
  </div>
</section>

<!-- DEPOIMENTOS -->
<section id="depoimentos" class="section">
  <div class="container">
    <div data-reveal>
      <span class="eyebrow">Depoimentos</span>
      <h2>O que dizem sobre a SGM Empresarial</h2>
    </div>

    <div class="rating-summary" data-reveal>
      <span class="rating-summary__score">5,0</span>
      <div>
        <div class="rating-summary__stars">★★★★★</div>
        <p class="rating-summary__meta mt-0">Avaliação média dos clientes atendidos</p>
      </div>
    </div>

    <div class="grid grid--3">
      <?php
      $depoimentos = [
        ["Ricardo M.", "Escritório de advocacia", "Precisávamos de um site que transmitisse seriedade e confiança. Ficou exatamente assim, e já recebemos elogios de clientes sobre a primeira impressão."],
        ["Camila S.", "Salão de beleza", "O site do nosso salão ficou lindo e muito fácil de usar no celular. As clientes elogiam bastante e as marcações pelo WhatsApp aumentaram."],
        ["Juliana C.", "Clínica de psicologia", "Precisava de um site acolhedor para a clínica. O resultado passou exatamente a sensação de cuidado que eu queria transmitir aos pacientes."],
        ["Paulo H.", "Construtora", "Nosso site de construção civil ficou com uma cara profissional, à altura dos projetos que entregamos. Atendimento rápido do início ao fim."],
        ["Ana R.", "Clínica de estética", "O site da nossa clínica ficou moderno e sofisticado, do jeito que a marca merecia. O suporte depois da entrega também foi ótimo."],
        ["Eduardo T.", "Imobiliária", "Precisávamos de um site rápido para apresentar os imóveis com uma boa vitrine visual. Ficou exatamente o que buscávamos, e já geramos os primeiros contatos por lá."],
      ];
      foreach ($depoimentos as $d) {
        [$nome, $segmento, $texto] = $d;
        $inicial = mb_substr($nome, 0, 1);
        echo '<div class="review-card card" data-reveal>';
        echo '<div class="review-card__stars">★★★★★</div>';
        echo '<p class="review-card__text">"' . $texto . '"</p>';
        echo '<div class="review-card__author">';
        echo '<span class="review-card__avatar">' . $inicial . '</span>';
        echo '<div><strong>' . $nome . '</strong><span>' . $segmento . '</span></div>';
        echo '</div></div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- PLANOS -->
<section id="planos" class="section section--alt">
  <div class="container">
    <div data-reveal>
      <span class="eyebrow">Planos</span>
      <h2>Investimento claro, sem letras miúdas</h2>
      <p class="lede">Um valor fixo para o seu site, com a opção de acompanhamento contínuo para quem quer manter tudo sempre atualizado.</p>
    </div>

    <div class="grid grid--3" style="margin-top:40px;">
      <div class="card plan-card" data-reveal>
        <h3>Site Padrão</h3>
        <div class="plan-card__price">R$ 100<small>,00/mês</small></div>
        <p>Site profissional completo, construído a partir do briefing com você.</p>
        <ul>
          <li><?php echo icon('check'); ?> Design personalizado para sua marca</li>
          <li><?php echo icon('check'); ?> Site responsivo (celular e desktop)</li>
          <li><?php echo icon('check'); ?> 2 rodadas de ajuste inclusas antes da entrega final</li>
          <li><?php echo icon('check'); ?> Publicação com certificado de segurança</li>
        </ul>
      </div>

      <div class="card plan-card plan-card--featured" data-reveal>
        <span class="plan-card__badge">Mais escolhido</span>
        <h3>Site + Manutenção Mensal</h3>
        <div class="plan-card__price">R$ 150<small>,00/mês</small></div>
        <p>O mesmo Site Padrão, com acompanhamento contínuo todo mês — sem se preocupar com detalhes técnicos depois da entrega.</p>
        <ul>
          <li><?php echo icon('check'); ?> Tudo do Site Padrão</li>
          <li><?php echo icon('check'); ?> 1 alteração inclusa por mês</li>
          <li><?php echo icon('check'); ?> Prioridade no atendimento</li>
        </ul>
      </div>

      <div class="card plan-card" data-reveal>
        <h3>Ajuste Avulso</h3>
        <div class="plan-card__price">R$ 100<small>/rodada</small></div>
        <p>Para quem já usou as rodadas inclusas e precisa de um ajuste pontual, sem contrato mensal.</p>
        <ul>
          <li><?php echo icon('check'); ?> Sem mensalidade</li>
          <li><?php echo icon('check'); ?> Pode agrupar vários pedidos em uma rodada</li>
          <li><?php echo icon('check'); ?> Ideal para ajustes ocasionais</li>
        </ul>
      </div>
    </div>
    <p style="font-size:0.8rem;color:var(--ink-faint);margin-top:24px;">Necessidades de manutenção mais frequente (ex. posts semanais em blog) são negociadas à parte, sob consulta.</p>
  </div>
</section>

<!-- CONTATO -->
<section id="contato" class="section">
  <div class="container">
    <div data-reveal>
      <span class="eyebrow">Contato</span>
      <h2>Vamos colocar sua empresa no ar</h2>
    </div>
    <div class="contact-grid" style="margin-top:32px;">
      <div data-reveal>
        <div class="contact-item">
          <div class="contact-item__icon"><?php echo icon('phone'); ?></div>
          <div>
            <strong>WhatsApp / Telefone</strong><br>
            <a href="<?php echo waLink($whatsappNumber, 'Olá! Vim pelo site e gostaria de mais informações sobre criação de sites.'); ?>" target="_blank" rel="noopener"><?php echo $phoneDisplay; ?></a>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-item__icon"><?php echo icon('mail'); ?></div>
          <div>
            <strong>E-mail</strong><br>
            <a href="mailto:<?php echo $contactEmail; ?>"><?php echo $contactEmail; ?></a>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-item__icon"><?php echo icon('pin'); ?></div>
          <div>
            <strong>Endereço</strong><br>
            <?php echo $address; ?>
          </div>
        </div>
        <div class="contact-item">
          <div class="contact-item__icon"><?php echo icon('clock'); ?></div>
          <div>
            <strong>Atendimento</strong><br>
            Segunda a sexta, 9h às 18h
          </div>
        </div>
        <a class="btn btn--primary" style="margin-top:10px;" target="_blank" rel="noopener"
           href="<?php echo waLink($whatsappNumber, 'Olá! Vim pelo site e gostaria de solicitar um orçamento.'); ?>">
          Falar agora no WhatsApp
        </a>
      </div>
      <div class="map-frame" data-reveal>
        <iframe
          src="https://www.google.com/maps?q=Rua+Colombo,+560,+Centro,+Cornélio+Procópio,+PR&output=embed"
          loading="lazy" referrerpolicy="no-referrer-when-downgrade"
          title="Mapa de localização — Rua Colombo, 560, Centro, Cornélio Procópio/PR"></iframe>
      </div>
    </div>
  </div>
</section>

<!-- BOTÃO FLUTUANTE WHATSAPP -->
<a class="whatsapp-float" target="_blank" rel="noopener" aria-label="Falar no WhatsApp"
   href="<?php echo waLink($whatsappNumber, 'Olá! Vim pelo site e gostaria de mais informações.'); ?>">
  <svg viewBox="0 0 32 32" aria-hidden="true">
    <path d="M16.001 3C9.373 3 4 8.373 4 15c0 2.34.652 4.53 1.782 6.396L4 29l7.803-1.75A11.94 11.94 0 0 0 16.001 27C22.63 27 28 21.627 28 15S22.63 3 16.001 3Zm6.965 16.845c-.294.826-1.455 1.512-2.386 1.71-.633.13-1.46.235-4.24-.91-3.56-1.462-5.854-5.06-6.033-5.294-.171-.234-1.442-1.918-1.442-3.66 0-1.742.912-2.598 1.234-2.955.322-.357.703-.446.938-.446.234 0 .469.002.674.012.216.01.507-.082.793.605.294.703.998 2.445 1.086 2.622.088.176.147.383.03.617-.117.234-.176.38-.352.585-.176.205-.37.457-.528.615-.176.176-.36.366-.155.72.206.353.914 1.51 1.964 2.446 1.35 1.204 2.488 1.577 2.84 1.752.353.176.557.147.763-.088.206-.235.88-1.026 1.115-1.378.235-.353.47-.294.793-.176.323.117 2.055.97 2.408 1.146.352.176.586.264.674.41.088.147.088.85-.206 1.677Z"/>
  </svg>
</a>

<?php include __DIR__ . "/partials/footer.php"; ?>
