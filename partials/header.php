<?php
$siteName = "SGM Empresarial";
// TODO: domínio próprio ainda não registrado (ver documentos/PLANO_DE_NEGOCIO.md, seção 4.2/5) — ajustar quando existir.
$siteUrl  = "https://sgmempresarial.com.br";
// Contato comercial: Moacir (comercial/vendas da SGM Empresarial).
$phoneDisplay = "(43) 99607-0652";
$whatsappNumber = "5543996070652";
$contactEmail = "moacirparpinelli@gmail.com";
$address = "Rua Colombo, 560, Centro, Cornélio Procópio/PR";

$pageTitle = isset($title) ? $title . " | " . $siteName : $siteName . " — Sites profissionais para o seu negócio";
$pageDescription = isset($description) ? $description
  : "A SGM Empresarial cria sites profissionais e modernos para empresas e profissionais liberais que querem fortalecer sua presença digital. Design, desenvolvimento e suporte contínuo.";
$activeNav = isset($active) ? $active : "";

function waLink($number, $text) {
  return "https://wa.me/" . $number . "?text=" . rawurlencode($text);
}

function icon($name) {
  $icons = [
    "pin"    => '<path d="M21 10c0 6-9 13-9 13s-9-7-9-13a9 9 0 0 1 18 0Z"/><circle cx="12" cy="10" r="3"/>',
    "phone"  => '<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92Z"/>',
    "mail"   => '<path d="M4 4h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z"/><path d="m22 6-10 7L2 6"/>',
    "code"   => '<path d="m16 18 6-6-6-6"/><path d="m8 6-6 6 6 6"/>',
    "layout" => '<rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18"/><path d="M9 21V9"/>',
    "shield" => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10Z"/>',
    "cart"   => '<circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"/>',
    "check"  => '<path d="M20 6 9 17l-5-5"/>',
    "bolt"   => '<path d="M13 2 3 14h7l-1 8 10-12h-7l1-8Z"/>',
    "clock"  => '<circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/>',
  ];
  $path = $icons[$name] ?? "";
  return '<svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">' . $path . '</svg>';
}
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title><?php echo htmlspecialchars($pageTitle); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">

<meta property="og:type" content="website">
<meta property="og:site_name" content="<?php echo htmlspecialchars($siteName); ?>">
<meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($pageDescription); ?>">
<meta property="og:locale" content="pt_BR">

<link rel="icon" type="image/svg+xml" href="/assets/img/favicon.svg">
<meta name="theme-color" content="#2b0f52">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,wght@0,400;0,600;0,700;1,500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/assets/css/style.css">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ProfessionalService",
  "name": "<?php echo $siteName; ?>",
  "url": "<?php echo $siteUrl; ?>",
  "telephone": "+<?php echo $whatsappNumber; ?>",
  "email": "<?php echo $contactEmail; ?>",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Rua Colombo, 560, Centro",
    "addressLocality": "Cornélio Procópio",
    "addressRegion": "PR",
    "addressCountry": "BR"
  },
  "areaServed": "Brasil",
  "description": "Criação de sites profissionais para empresas e profissionais liberais."
}
</script>
</head>
<body>

<header class="site-header">
  <div class="container">
    <a href="/" class="brand">
      <span class="brand__mark"><img src="/assets/img/logo-sgm.png" alt="SGM Empresarial"></span>
      <span class="brand__name">
        <span class="brand__title">SGM Empresarial</span>
        <small>Site profissionais | Presença digital</small>
      </span>
    </a>

    <nav class="nav">
      <button class="nav__toggle" aria-label="Abrir menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
      <div class="nav__links">
        <a href="/#servicos" class="<?php echo $activeNav === 'servicos' ? 'is-active' : ''; ?>">Serviços</a>
        <a href="/#portfolio" class="<?php echo $activeNav === 'portfolio' ? 'is-active' : ''; ?>">Portfólio</a>
        <a href="/#como-funciona" class="<?php echo $activeNav === 'como-funciona' ? 'is-active' : ''; ?>">Como Funciona</a>
        <a href="/#depoimentos" class="<?php echo $activeNav === 'depoimentos' ? 'is-active' : ''; ?>">Depoimentos</a>
        <a href="/#planos" class="<?php echo $activeNav === 'planos' ? 'is-active' : ''; ?>">Planos</a>
        <a href="/jurifacil.php" class="<?php echo $activeNav === 'jurifacil' ? 'is-active' : ''; ?>">Jurifácil</a>
        <a href="/#contato" class="<?php echo $activeNav === 'contato' ? 'is-active' : ''; ?>">Contato</a>
        <a href="https://jurifacil.sgmempresarial.com.br/login" class="nav__login">Acessar Jurifácil</a>
      </div>
      <a class="btn btn--primary btn--sm btn--header" target="_blank" rel="noopener"
         href="<?php echo waLink($whatsappNumber, 'Olá! Vim pelo site e gostaria de solicitar um orçamento para meu site.'); ?>">
        Solicitar orçamento
      </a>
    </nav>
  </div>
</header>

<main>
