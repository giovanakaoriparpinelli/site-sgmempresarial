<?php
$title = "Jurifácil — sistema de gestão jurídica desenvolvido pela SGM";
$description = "Conheça o Jurifácil, o sistema de gestão jurídica que a SGM Empresarial está desenvolvendo para ajudar advogados a organizar tarefas, documentos e minutas com simplicidade e segurança.";
$active = "jurifacil";
include __DIR__ . "/partials/header.php";
?>

<section class="hero section--tight">
  <div class="container" data-reveal>
    <span class="eyebrow">Produto próprio</span>
    <h1>Jurifácil</h1>
    <p class="lede">Além de criar sites para outras empresas, a SGM Empresarial também desenvolve seus próprios produtos de tecnologia. O Jurifácil é um sistema de gestão jurídica pensado para o dia a dia real de advogados e escritórios — simples, leve e seguro, sem a complexidade dos grandes sistemas do mercado.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="about">
      <div data-reveal>
        <h2>Por que o Jurifácil existe</h2>
        <p>Grande parte dos sistemas jurídicos disponíveis hoje foi feita para bancas grandes: são caros, complexos e exigem treinamento só para usar o básico. Advogados autônomos e pequenos escritórios acabam recorrendo a planilhas, papel e aplicativos genéricos que não conversam entre si.</p>
        <p>O Jurifácil nasce da experiência prática de quem vive essa rotina e está sendo desenvolvido pela equipe de tecnologia da SGM Empresarial, com o objetivo de entregar um sistema robusto, simples e seguro para o dia a dia do advogado.</p>
      </div>
      <div class="credentials" data-reveal>
        <div><strong>Gestão de tarefas</strong><br>Prazos processuais e follow-ups organizados num só lugar.</div>
        <div><strong>Ferramentas de consulta</strong><br>Consulta de movimentações processuais e intimações direto no painel.</div>
        <div><strong>Minutas e petições</strong><br>Geração assistida de minutas a partir de modelos — sempre com revisão humana antes de qualquer uso.</div>
      </div>
    </div>
  </div>
</section>

<section class="section section--alt">
  <div class="container">
    <div data-reveal>
      <span class="eyebrow">Status atual</span>
      <h2>Em desenvolvimento</h2>
      <p class="lede">O Jurifácil está em construção. As primeiras funcionalidades — gestão de tarefas, documentos e ferramentas de consulta processual — estão em desenvolvimento ativo. A geração de minutas assistida por IA é a próxima etapa do roadmap.</p>
    </div>

    <div class="grid grid--3" style="margin-top:32px;">
      <div class="card" data-reveal>
        <div class="card__icon">1</div>
        <h3>Tarefas e ferramentas de consulta</h3>
        <p>Em desenvolvimento — primeira versão a ser testada com early adopters.</p>
      </div>
      <div class="card" data-reveal>
        <div class="card__icon">2</div>
        <h3>Minutas e petições</h3>
        <p>Próxima etapa do roadmap, com apoio de inteligência artificial e revisão humana obrigatória.</p>
      </div>
      <div class="card" data-reveal>
        <div class="card__icon">3</div>
        <h3>Acesso a outros escritórios</h3>
        <p>Planejado para depois da validação inicial com um grupo pequeno de advogados parceiros.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container text-center" data-reveal>
    <h2>Quer ser um dos primeiros a testar?</h2>
    <p class="lede" style="margin:0 auto 24px;">Se você é advogado ou tem um escritório e quer participar do grupo inicial de testes do Jurifácil, entre em contato com a SGM Empresarial.</p>
    <a class="btn btn--primary" target="_blank" rel="noopener"
       href="<?php echo waLink($whatsappNumber, 'Olá! Tenho interesse em conhecer mais sobre o Jurifácil e participar dos testes iniciais.'); ?>">
      Quero saber mais no WhatsApp
    </a>
  </div>
</section>

<?php include __DIR__ . "/partials/footer.php"; ?>
