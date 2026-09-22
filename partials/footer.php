</main>

<footer class="site-footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <h4>SGM Empresarial</h4>
        <p>Criação de sites profissionais para empresas e profissionais liberais que querem fortalecer sua presença digital, com design moderno, tecnologia atual e suporte contínuo.</p>
        <p><?php echo $address; ?></p>
      </div>
      <div>
        <h4>Navegação</h4>
        <ul class="footer-links">
          <li><a href="/#servicos">Serviços</a></li>
          <li><a href="/#portfolio">Portfólio</a></li>
          <li><a href="/#como-funciona">Como Funciona</a></li>
          <li><a href="/#depoimentos">Depoimentos</a></li>
          <li><a href="/#planos">Planos</a></li>
        </ul>
      </div>
      <div>
        <h4>Contato</h4>
        <ul class="footer-links">
          <li><a href="tel:+<?php echo $whatsappNumber; ?>"><?php echo $phoneDisplay; ?></a></li>
          <li><a target="_blank" rel="noopener" href="<?php echo waLink($whatsappNumber, 'Olá! Vim pelo site e gostaria de mais informações.'); ?>">WhatsApp</a></li>
          <li><a href="mailto:<?php echo $contactEmail; ?>"><?php echo $contactEmail; ?></a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <span id="current-year">2026</span> <?php echo $siteName; ?>. Todos os direitos reservados.</span>
      <span>Depoimentos ilustrativos — em atualização conforme novos clientes atendidos.</span>
    </div>
  </div>
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>
