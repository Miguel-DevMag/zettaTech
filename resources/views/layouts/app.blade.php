<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ZettaTech - Evolução Robótica</title>
    <!-- Fontes modernas (Inter) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <!-- Bibliotecas de Animação (AOS) -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Biblioteca de Síntese de Voz (ResponsiveVoice) -->
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=jQZ2zIjj"></script>
    <!-- Integração do Tailwind CSS via Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Estilos globais, cursor e fontes -->
    <style>
        body { font-family: 'Inter', sans-serif; cursor: none; }
        #navbar {
            /* Removed translate3d to fix pointer-events issue */
        }
        /* Oculta scrollbar para visual mais clean */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0B0F19; }
        ::-webkit-scrollbar-thumb { background: #00E5FF; border-radius: 4px; }
        
        /* Cursor Customizado Neon */
        #cursor-dot, #cursor-outline {
            position: fixed;
            top: 0; left: 0;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            z-index: 9999;
            pointer-events: none;
        }
        #cursor-dot {
            width: 8px; height: 8px;
            background-color: #00E5FF;
            box-shadow: 0 0 10px #00E5FF, 0 0 20px #00E5FF;
        }
        #cursor-outline {
            width: 40px; height: 40px;
            border: 1px solid rgba(0, 229, 255, 0.5);
            transition: width 0.2s, height 0.2s, background-color 0.2s;
        }
        a:hover ~ #cursor-outline, button:hover ~ #cursor-outline {
            width: 60px; height: 60px;
            background-color: rgba(0, 229, 255, 0.1);
        }
        
        .bg-radial-gradient-vignette {
            background: radial-gradient(circle, transparent 30%, #06080D 85%);
            width: 100%; height: 100%;
            position: absolute; top: 0; left: 0;
        }

        /* ── Robô 3D — Escala e Posição Responsiva ───────────────────────────
           A lógica: o canvas é 100vw×100vh; translateY empurra PARA BAIXO
           para revelar mais do corpo do robô, enquanto scale aumenta o zoom.
           Mobile: robô menor, cabeça visível no topo do hero.
           Desktop: robô imponente, cabeça aparecendo ~15% abaixo do navbar.
        ──────────────────────────────────────────────────────────────────── */
        #robot-canvas-wrapper {
            transform: translateY(12%) scale(1.25);
            transform-origin: center center;
            will-change: transform;
        }
        @media (min-width: 640px) {
            #robot-canvas-wrapper { transform: translateY(16%) scale(1.45); }
        }
        @media (min-width: 768px) {
            #robot-canvas-wrapper { transform: translateY(20%) scale(1.6);  }
        }
        @media (min-width: 1024px) {
            #robot-canvas-wrapper { transform: translateY(22%) scale(1.75); }
        }
        @media (min-width: 1280px) {
            #robot-canvas-wrapper { transform: translateY(24%) scale(1.9);  }
        }
        @media (min-width: 1536px) {
            #robot-canvas-wrapper { transform: translateY(26%) scale(2.05); }
        }

        /* PREMIUM LIGHT MODE STYLES */
        body.light-mode {
            background-color: #F5F5F7;
            color: #1D1D1F;
        }
        body.light-mode .fixed.inset-0.z-0 {
            background-color: #E8ECEF !important;
        }
        body.light-mode .bg-radial-gradient-vignette {
            background: radial-gradient(circle, transparent 35%, #F5F5F7 85%) !important;
        }
        body.light-mode .bg-[#06080D] {
            background-color: #FAFAFC !important;
        }
        body.light-mode .bg-[#0B0F19] {
            background-color: #F5F5F7 !important;
        }
        
        /* Navbar overrides */
        body.light-mode #navbar .rounded-2xl {
            background-color: rgba(255, 255, 255, 0.8) !important;
            border-color: rgba(0, 0, 0, 0.08) !important;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.04) !important;
        }
        body.light-mode #navbar .nav-link, 
        body.light-mode #navbar .text-gray-400 {
            color: #515154 !important;
        }
        body.light-mode #navbar .nav-link:hover, 
        body.light-mode #navbar .text-white {
            color: #1D1D1F !important;
        }
        body.light-mode #navbar .lang-switcher-container {
            background-color: rgba(0, 0, 0, 0.03) !important;
            border-color: rgba(0, 0, 0, 0.06) !important;
        }
        body.light-mode #navbar .lang-switcher-container button {
            color: #515154 !important;
        }
        body.light-mode #navbar .lang-switcher-container button.text-white {
            color: white !important;
        }
        body.light-mode #navbar #theme-toggle {
            background-color: rgba(0, 0, 0, 0.03) !important;
            border-color: rgba(0, 0, 0, 0.06) !important;
        }
        body.light-mode #navbar #theme-toggle:hover {
            border-color: rgba(0, 102, 204, 0.3) !important;
        }

        /* Global Glassmorphism Cards mapping */
        body.light-mode .bg-white\/\[0\.01\],
        body.light-mode .bg-white\/\[0\.02\],
        body.light-mode .bg-white\/\[0\.03\] {
            background-color: rgba(255, 255, 255, 0.8) !important;
            border-color: rgba(0, 0, 0, 0.06) !important;
            backdrop-filter: blur(20px) !important;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02), 0 1px 3px rgba(0, 0, 0, 0.01) !important;
        }
        body.light-mode .border-white\/5,
        body.light-mode .border-white\/10 {
            border-color: rgba(0, 0, 0, 0.08) !important;
        }

        /* Headings & Texts */
        body.light-mode h1, 
        body.light-mode h2, 
        body.light-mode h3, 
        body.light-mode h4,
        body.light-mode span.text-white,
        body.light-mode .font-mono.text-white {
            color: #1D1D1F !important;
        }
        body.light-mode .text-gray-400,
        body.light-mode .text-gray-300,
        body.light-mode .text-gray-500 {
            color: #515154 !important;
        }
        body.light-mode .via-white {
            --tw-gradient-via: #1D1D1F !important;
        }

        /* Custom Hover Cards borders */
        body.light-mode .group:hover {
            border-color: rgba(0, 102, 204, 0.2) !important;
        }

        /* Hero styling */
        body.light-mode #inicio a.bg-white {
            background-color: #1D1D1F !important;
            color: white !important;
        }
        body.light-mode #inicio a.bg-white:hover {
            background-color: #3C3C3E !important;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
        }
        body.light-mode #inicio .border-t {
            border-color: rgba(0, 0, 0, 0.08) !important;
        }

        /* Proposito / Problems section */
        body.light-mode #proposito {
            background-color: #FAFAFC !important;
            border-top: 1px solid rgba(0, 0, 0, 0.04);
        }
        body.light-mode #proposito .group:hover {
            border-color: rgba(239, 68, 68, 0.2) !important; /* Soft red hover for problem 1 */
        }
        body.light-mode #proposito .group:nth-child(2):hover {
            border-color: rgba(0, 102, 204, 0.2) !important; /* Soft blue hover for problem 2 */
        }
        body.light-mode #proposito .group:nth-child(3):hover {
            border-color: rgba(34, 197, 94, 0.2) !important; /* Soft green hover for problem 3 */
        }

        /* Tecnologia / Tech section */
        body.light-mode #tecnologia {
            background-color: #F5F5F7 !important;
        }

        /* Models Comparison styling */
        body.light-mode #modelos {
            background-color: #FAFAFC !important;
        }
        body.light-mode #modelos .scanner-card {
            background-color: rgba(255, 255, 255, 0.8) !important;
            border-color: rgba(0, 0, 0, 0.08) !important;
        }
        body.light-mode #modelos .scanner-card .bg-gradient-to-t {
            background-image: linear-gradient(to top, #FAFAFC 0%, rgba(250,250,252,0.95) 60%, transparent 100%) !important;
        }
        body.light-mode #modelos .border-t {
            border-color: rgba(0, 0, 0, 0.08) !important;
        }
        body.light-mode #modelos .scanner-card:hover {
            border-color: rgba(0, 102, 204, 0.2) !important;
        }
        body.light-mode #modelos .scanner-card:nth-child(2):hover {
            border-color: rgba(0, 229, 255, 0.2) !important;
        }

        /* Blueprint Mode inside models comparison */
        body.light-mode .blueprint-mode.scanner-card {
            background-color: #06080D !important;
            border-color: rgba(0, 229, 255, 0.4) !important;
            box-shadow: 0 0 50px rgba(0, 229, 255, 0.08) !important;
        }
        body.light-mode .blueprint-mode.scanner-card span,
        body.light-mode .blueprint-mode.scanner-card h3,
        body.light-mode .blueprint-mode.scanner-card p,
        body.light-mode .blueprint-mode.scanner-card .font-mono.text-white {
            color: #FFFFFF !important;
        }
        body.light-mode .blueprint-mode.scanner-card .text-gray-500 {
            color: #888888 !important;
        }

        /* Compromisso / Ethics and accessibility section */
        body.light-mode #compromisso {
            background-color: #F5F5F7 !important;
        }
        body.light-mode #compromisso .inline-flex.items-center.space-x-3.text-\[\#00E5FF\] {
            background-color: rgba(0, 102, 204, 0.06) !important;
            border-color: rgba(0, 102, 204, 0.12) !important;
            color: #0066CC !important;
        }

        /* Reserva / Order section */
        body.light-mode #reserva {
            background-color: #FAFAFC !important;
            border-top: 1px solid rgba(0, 0, 0, 0.04);
        }
        body.light-mode #reserva select, 
        body.light-mode #reserva input {
            background-color: rgba(255, 255, 255, 0.95) !important;
            border-color: rgba(0, 0, 0, 0.1) !important;
            color: #1D1D1F !important;
        }
        body.light-mode #reserva select option {
            background-color: white !important;
            color: #1D1D1F !important;
        }
        body.light-mode #reserva select:focus, 
        body.light-mode #reserva input:focus {
            border-color: #0066CC !important;
            box-shadow: 0 0 0 4px rgba(0, 102, 204, 0.1) !important;
        }
        body.light-mode #reserva button.bg-white {
            background-color: #1D1D1F !important;
            color: white !important;
        }
        body.light-mode #reserva button.bg-white:hover {
            background-color: #3C3C3E !important;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1) !important;
        }

        /* Mobile menu overrides */
        body.light-mode #mobile-menu {
            background-color: rgba(255, 255, 255, 0.96) !important;
            border-color: rgba(0, 0, 0, 0.08) !important;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.08) !important;
        }
        body.light-mode #mobile-menu .mobile-link {
            color: #515154 !important;
            border-bottom-color: rgba(0, 0, 0, 0.05) !important;
        }
        body.light-mode #mobile-menu .mobile-link:hover {
            color: #1D1D1F !important;
        }

        /* FILTRO REVOLUCIONÁRIO PARA O ROBÔ 3D NO MODO SOL */
        /* Transforma o robô escuro em um modelo branco/prata cromado premium com contraste de alta definição */
        body.light-mode #robot-3d-canvas {
            filter: invert(0.94) hue-rotate(180deg) brightness(1.02) contrast(1.25) opacity(0.85) !important;
        }

        /* AJUSTES DE CONTRASTE SUPREMO NO MODO SOL */
        /* Câmara escura holográfica para os robôs terem contraste de metal reflexivo incrível */
        body.light-mode .scanner-card .relative.h-\[450px\] {
            background-color: #0B0F19 !important;
            background-image: radial-gradient(circle at center, #172033 0%, #06080D 100%) !important;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }
        /* Garante que o robô em si, que usa mesclagem de tela, apareça nítido na câmara */
        body.light-mode .scanner-card .relative.h-\[450px\] .mix-blend-screen {
            mix-blend-mode: screen !important;
            opacity: 1 !important;
        }
        /* Área de dados técnicos e especificações com fundo claro e limpo */
        body.light-mode .scanner-card .flex-1 {
            background: #FAFAFC !important;
        }
        /* Ajuste do badge de categoria (B2B/B2C) para padrão claro iOS/macOS */
        body.light-mode .scanner-card .absolute.top-8.left-8 .inline-flex {
            background-color: rgba(255, 255, 255, 0.9) !important;
            border-color: rgba(0, 0, 0, 0.08) !important;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08) !important;
        }
        body.light-mode .scanner-card .absolute.top-8.left-8 .inline-flex [data-translate] {
            color: #1D1D1F !important;
        }
        /* Ajuste de blocos de preços e especificações */
        body.light-mode .scanner-card .bg-white\/\[0\.02\] {
            background-color: rgba(0, 0, 0, 0.02) !important;
            border-color: rgba(0, 0, 0, 0.06) !important;
        }
        body.light-mode .scanner-card .bg-gradient-to-br.from-blue-500\/10 {
            background-image: linear-gradient(to bottom right, rgba(0, 102, 204, 0.04), transparent) !important;
            border-color: rgba(0, 102, 204, 0.15) !important;
        }
        body.light-mode .scanner-card .bg-gradient-to-br.from-\[\#00E5FF\]\/10 {
            background-image: linear-gradient(to bottom right, rgba(0, 163, 196, 0.04), transparent) !important;
            border-color: rgba(0, 163, 196, 0.15) !important;
        }
        body.light-mode .scanner-card .text-blue-400 {
            color: #0066CC !important;
        }
        body.light-mode .scanner-card .text-\[\#00E5FF\] {
            color: #008fa3 !important;
        }
    </style>
</head>
<body class="bg-[#0B0F19] text-white antialiased overflow-x-hidden relative min-h-screen">
    
    <!-- Cursor Customizado -->
    <div id="cursor-dot"></div>
    <div id="cursor-outline"></div>

    <!-- Camada Traseira (z-0): Fundo e Canvas do Robô 3D Centrado -->
    <div class="fixed inset-0 z-0 bg-[#06080D] pointer-events-none">
        <!-- Canvas 3D: posicionado e escalado via CSS (#robot-canvas-wrapper) para proporção perfeita em qualquer tela -->
        <div id="robot-canvas-wrapper" class="absolute inset-0 flex items-center justify-center">
            <canvas id="robot-3d-canvas" class="w-full h-full pointer-events-auto"></canvas>
        </div>
        
        <!-- Máscara de Gradiente Suave Centralizado para Leitura do Texto -->
        <div class="absolute inset-0 bg-gradient-to-b from-[#0B0F19]/80 via-transparent to-[#06080D] pointer-events-none"></div>
        <div class="absolute inset-0 bg-radial-gradient-vignette pointer-events-none opacity-60"></div>
    </div>

    <!-- Navegação Global da Plataforma (Movida para fora do main para evitar problemas de clique) -->
    @include('components.navbar')

    <!-- Camada Dianteira (z-10): Conteúdo Fluído da Página -->
    <main class="relative z-10 flex flex-col min-h-screen pointer-events-none">
        @yield('content')
    </main>

    <!-- Integração do Robô 3D Spline, Cursor e AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.0/vanilla-tilt.min.js"></script>
    
    <script>
        // Lógica do Cursor Customizado
        const cursorDot = document.getElementById('cursor-dot');
        const cursorOutline = document.getElementById('cursor-outline');

        window.addEventListener('mousemove', function(e) {
            const posX = e.clientX;
            const posY = e.clientY;
            
            if(cursorDot && cursorOutline) {
                cursorDot.style.left = posX + 'px';
                cursorDot.style.top = posY + 'px';
                
                cursorOutline.animate({
                    left: posX + 'px',
                    top: posY + 'px'
                }, { duration: 500, fill: 'forwards' });
            }
        });

        // ----------------------------------------------------
        // LÓGICA DE TRADUÇÃO DINÂMICA COMPLETA DE ALTO DESEMPENHO
        // ----------------------------------------------------
        const translations = {
            pt: {
                // Nav Links
                "nav-inicio": "Início",
                "nav-tecnologia": "Tecnologia",
                "nav-modelos": "Plataformas",
                "nav-compromisso": "Compromisso",
                "nav-reserva": "Reservar",
                "nav-reserva-mob": "Reservar Agora",
                
                // Hero
                "hero-badge": "Engenharia Autônoma Zetta",
                "hero-title": "Redefinindo o Possível. <br><span class=\"text-transparent bg-clip-text bg-gradient-to-r from-[#00E5FF] via-white to-blue-500 pb-2 inline-block\">A Nova Força de Trabalho é Autônoma.</span>",
                "hero-subtitle": "Humanoides que não apenas executam, mas aprendem. O futuro da produtividade global agora é pessoal e ininterrupto.",
                "hero-btn-reserva": "Reservar Unidade",
                "hero-btn-explore": "Explorar Tecnologia",
                "hero-stat-1": "Autonomia Ininterrupta",
                "hero-stat-2": "Latência Cognitiva",
                "hero-stat-3": "Aprendizado Contínuo",
                "hero-scroll-explore": "Conhecer",
                
                // Problema
                "prob-title": "O Fim da <span class=\"text-transparent bg-clip-text bg-gradient-to-r from-red-500 via-orange-400 to-yellow-500\">Exaustão</span> Humana.",
                "prob-subtitle": "Não projetamos robôs para substituir as pessoas, mas sim para amplificar o potencial humano. O mundo enfrenta uma crise silenciosa, e nós somos a resposta definitiva.",
                "prob-card1-title": "Esgotamento Crônico",
                "prob-card1-desc": "Pessoas destruindo a saúde física e mental com tarefas repetitivas e insalubres. Os robôs Zetta assumem o fardo pesado para que humanos foquem na criatividade e gestão.",
                "prob-card2-title": "Escassez de Operação",
                "prob-card2-desc": "Indústrias paralisadas por falta de mão de obra. Da logística de almoxarifado à higienização hospitalar crítica e rondas noturnas 24/7, nós preenchemos as lacunas críticas.",
                "prob-card3-title": "Sobrecarga Doméstica e Agro",
                "prob-card3-desc": "Famílias sem tempo livre e pequenos agricultores perdendo colheitas. Levamos eficiência empática para dentro de casa e precisão sustentável para a lavoura.",
                
                // Tecnologia
                "tech-badge": "Tecnologia Proprietária",
                "tech-title": "O Diferencial: <br class=\"hidden md:block\"><span class=\"text-transparent bg-clip-text bg-gradient-to-r from-[#00E5FF] via-white to-blue-500\">Learning by Demonstration.</span>",
                "tech-subtitle": "Sem programação. Nossos humanoides aprendem observando o operador humano realizar a tarefa uma única vez. A inteligência artificial que se adapta à sua realidade operacional.",
                "tech-card1-title": "Síntese Visual Volumétrica",
                "tech-card1-desc": "Câmeras estereoscópicas ultra-rápidas aliadas a sensores LiDAR de alta resolução criam um modelo 3D volumétrico do ambiente em tempo real. O sistema processa profundidade milimétrica e prevê trajetórias dinâmicas com latência zero, contornando obstáculos com precisão cirúrgica.",
                "tech-card2-title": "Mapeamento Neural Proprietário",
                "tech-card2-desc": "Nossa arquitetura de redes neurais profundas traduz a observação ótica de gestos manuais em comandos cinemáticos contínuos para os atuadores rotativos. O robô converte a flexibilidade biomecânica humana em cálculos de torque precisos para replicar tarefas de manipulação delicadas instantaneamente.",
                
                // Comparacao (Modelos)
                "comp-badge": "Portfólio e Conectividade",
                "comp-title": "Nossas <span class=\"text-transparent bg-clip-text bg-gradient-to-r from-[#00E5FF] to-blue-500\">Plataformas.</span>",
                "comp-desc": "Engenharia visceral combinada com conectividade total. Nossos humanoides se integram perfeitamente aos fluxos industriais de corporações e ao ecossistema digital do seu lar.",
                "comp-toggle-blueprint": "Modo Blueprint (Esquema Técnico)",
                "comp-card1-tag": "Segmento Industrial B2B",
                "comp-card1-desc": "O trabalhador incansável. Blindagem de liga de titânio fosco aeroespacial IP67 com juntas de torque brutal. Integra aprendizado por demonstração (LbD) aplicada a forças físicas de manuseio e abertura de portas, visão transextrutural (radar mmWave e LiDAR) atrás de portas fechadas, detecção química olfativa digital de gases/vazamentos e contador Geiger-LiDAR de radiação ionizante no ar. Ideal para rondas de segurança 24/7 e logística pesada com capacidade de carga de até 85kg.",
                "comp-card1-ecosystem-title": "Ecossistema Industrial",
                "comp-card1-ecosystem-desc": "Conexão imediata via ZettaHub API. Sincroniza diretamente com o ERP da sua empresa, gerenciadores de frota logística e sistemas de monitoramento centralizados corporativos.",
                "comp-card1-price1-label": "Compra Direta",
                "comp-card1-price1-value": "R$ 30M",
                "comp-card1-price2-label": "Parcela (12x)",
                "comp-card1-price2-value": "R$ 2,5M<span class=\"text-xs font-normal text-blue-400/60 ml-1\">/mês</span>",
                "comp-card1-spec1-label": "Altura",
                "comp-card1-spec1-value": "1.95m",
                "comp-card1-spec2-label": "Acabamento",
                "comp-card1-spec2-value": "Titânio Fosco",
                "comp-card1-spec3-label": "Carga Máx",
                "comp-card1-spec3-value": "85kg",
                
                "comp-card2-tag": "Segmento Doméstico B2C",
                "comp-card2-desc": "A harmonia perfeita entre tecnologia e empatia. Chassi ergonômico de toque macio em polímero branco antimicrobiano com sensores de torque suave redundantes de segurança absoluta. Integra aprendizado por demonstração (LbD) para abertura de portas e tarefas de limpeza, visão térmica transextrutural, monitoramento químico de gases domésticos, suporte e saúde de idosos com detecção de quedas e chamadas de emergência, e agricultura inteligente de alta precisão com capacidade de carga de até 35kg.",
                "comp-card2-ecosystem-title": "Ecossistema Residencial",
                "comp-card2-ecosystem-desc": "Conexão instantânea via Apple HomeKit, Google Home e o aplicativo Zetta Care. Controle rotinas de limpeza, mapeamento de jardim e horta inteligente direto do seu celular.",
                "comp-card2-price1-label": "Compra Direta",
                "comp-card2-price1-value": "R$ 20M",
                "comp-card2-price2-label": "Parcela (12x)",
                "comp-card2-price2-value": "R$ 1,67M<span class=\"text-xs font-normal text-[#00E5FF]/60 ml-1\">/mês</span>",
                "comp-card2-spec1-label": "Altura",
                "comp-card2-spec1-value": "1.75m",
                "comp-card2-spec2-label": "Acabamento",
                "comp-card2-spec2-value": "Polímero Branco",
                "comp-card2-spec3-label": "Carga Máx",
                "comp-card2-spec3-value": "35kg",
                
                // Garantia
                "gar-title": "Compromisso <span class=\"text-transparent bg-clip-text bg-gradient-to-r from-[#00E5FF] to-blue-500\">Ético e Acessibilidade.</span>",
                "gar-desc": "Nossos humanoides operam sob diretrizes rígidas de segurança física e ética cibernética. Equipados com sensores de torque redundantes e desacopladores magnéticos, garantimos uma colaboração 100% segura com operadores humanos. Acreditamos na robótica como um catalisador de inclusão, permitindo que nossas plataformas devolvam a autonomia laboral a pessoas com restrições motoras, com respeito absoluto à dignidade e privacidade.",
                "gar-badge1-title": "Padrão de Segurança",
                "gar-badge1-value": "ISO 13482 (Robôs Assistivos)",
                "gar-badge2-title": "Proteção de Dados",
                "gar-badge2-value": "Criptografia Ponta a Ponta",
                "gar-badge3-title": "Ética de Desenvolvimento",
                "gar-badge3-value": "Human-First Design",
                "gar-footer-badge": "Certificação Global de Conformidade Ética e Ergonomia",
                
                // Encomendar
                "enc-title": "Inicie sua <span class=\"text-transparent bg-clip-text bg-gradient-to-r from-[#00E5FF] to-blue-600 drop-shadow-[0_0_20px_rgba(0,229,255,0.25)]\">Reserva.</span>",
                "enc-desc": "Lotes iniciais de produção limitados. Garanta prioridade na fila de entrega do seu modelo Zetta. Nenhum pagamento é exigido nesta fase preliminar.",
                "enc-form-select-title": "Plataforma de Interesse",
                "enc-form-select-placeholder": "Selecione o Modelo Humanoide",
                "enc-form-select-opt1": "Zetta Atlas (Operações B2B / Industrial)",
                "enc-form-select-opt2": "Zetta Gaia (Assistência B2C / Residencial)",
                "enc-form-label-data": "Dados Cadastrais",
                "enc-form-input-name": "Nome Completo ou Razão Social",
                "enc-form-input-email": "E-mail Corporativo ou Pessoal",
                "enc-form-btn": "Confirmar Reserva Sem Custo",
                "enc-footer": "Prioridade definida por ordem de registro."
            },
            en: {
                // Nav Links
                "nav-inicio": "Home",
                "nav-tecnologia": "Technology",
                "nav-modelos": "Platforms",
                "nav-compromisso": "Commitment",
                "nav-reserva": "Reserve",
                "nav-reserva-mob": "Reserve Now",
                
                // Hero
                "hero-badge": "Zetta Autonomous Engineering",
                "hero-title": "Redefining the Possible. <br><span class=\"text-transparent bg-clip-text bg-gradient-to-r from-[#00E5FF] via-white to-blue-500 pb-2 inline-block\">The New Workforce is Autonomous.</span>",
                "hero-subtitle": "Humanoids that not only execute, but learn. The future of global productivity is now personal and uninterrupted.",
                "hero-btn-reserva": "Reserve Unit",
                "hero-btn-explore": "Explore Technology",
                "hero-stat-1": "Uninterrupted Autonomy",
                "hero-stat-2": "Cognitive Latency",
                "hero-stat-3": "Continuous Learning",
                "hero-scroll-explore": "Explore",
                
                // Problema
                "prob-title": "The End of Human <span class=\"text-transparent bg-clip-text bg-gradient-to-r from-red-500 via-orange-400 to-yellow-500\">Exhaustion</span>.",
                "prob-subtitle": "We don't design robots to replace people, but to amplify human potential. The world faces a silent crisis, and we are the ultimate answer.",
                "prob-card1-title": "Chronic Burnout",
                "prob-card1-desc": "People destroying physical and mental health with repetitive and unhealthy tasks. Zetta robots take on the heavy burden so humans can focus on creativity and management.",
                "prob-card2-title": "Operational Shortage",
                "prob-card2-desc": "Industries paralyzed by labor shortages. From warehouse logistics to critical hospital sanitization and 24/7 night patrols, we fill the critical gaps.",
                "prob-card3-title": "Home & Farm Overload",
                "prob-card3-desc": "Families with no free time and small farmers losing crops. We bring empathetic efficiency into the home and sustainable precision to the fields.",
                
                // Tecnologia
                "tech-badge": "Proprietary Technology",
                "tech-title": "The Core Difference: <br class=\"hidden md:block\"><span class=\"text-transparent bg-clip-text bg-gradient-to-r from-[#00E5FF] via-white to-blue-500\">Learning by Demonstration.</span>",
                "tech-subtitle": "No programming required. Our humanoids learn by observing the human operator perform the task just once. The artificial intelligence that adapts to your operational reality.",
                "tech-card1-title": "Volumetric Visual Synthesis",
                "tech-card1-desc": "Ultra-fast stereoscopic cameras combined with high-resolution LiDAR sensors create a real-time volumetric 3D model of the environment. The system processes millimeter depth and predicts dynamic trajectories with zero latency, bypassing obstacles with surgical precision.",
                "tech-card2-title": "Proprietary Neural Mapping",
                "tech-card2-desc": "Our deep neural network architecture translates optical observation of hand gestures into continuous kinematic commands for rotary actuators. The robot converts human biomechanical flexibility into precise torque calculations to replicate delicate manipulation tasks instantly.",
                
                // Comparacao (Modelos)
                "comp-badge": "Portfolio and Connectivity",
                "comp-title": "Our <span class=\"text-transparent bg-clip-text bg-gradient-to-r from-[#00E5FF] to-blue-500\">Platforms.</span>",
                "comp-desc": "Visceral engineering combined with full connectivity. Our humanoids seamlessly integrate into corporate industrial workflows and your home's digital ecosystem.",
                "comp-toggle-blueprint": "Blueprint Mode (Technical Scheme)",
                "comp-card1-tag": "B2B Industrial Segment",
                "comp-card1-desc": "The tireless worker. Armored in IP67 aerospace-grade matte titanium with brutal torque joints. Integrates physical learning by demonstration (LbD) of forces and doors handling, trans-structural perception (mmWave radar & active LiDAR) behind closed doors, chemical digital gas/leak sniffers, and built-in Geiger-LiDAR radiation counter for air contamination monitoring. Designed for 24/7 autonomous rounds and heavy logistics with an 85kg payload capacity.",
                "comp-card1-ecosystem-title": "Industrial Ecosystem",
                "comp-card1-ecosystem-desc": "Immediate connection via ZettaHub API. Directly synchronizes with your company's ERP, fleet logistics managers, and centralized corporate monitoring systems.",
                "comp-card1-price1-label": "Direct Purchase",
                "comp-card1-price1-value": "$ 5.5M",
                "comp-card1-price2-label": "Installment (12x)",
                "comp-card1-price2-value": "$ 458k<span class=\"text-xs font-normal text-blue-400/60 ml-1\">/month</span>",
                "comp-card1-spec1-label": "Height",
                "comp-card1-spec1-value": "1.95m",
                "comp-card1-spec2-label": "Finish",
                "comp-card1-spec2-value": "Matte Titanium",
                "comp-card1-spec3-label": "Max Payload",
                "comp-card1-spec3-value": "85kg",
                
                "comp-card2-tag": "B2C Domestic Segment",
                "comp-card2-desc": "The perfect harmony of technology and gentleness. Ergonomic soft-touch antimicrobial white polymer chassis with absolute safety soft-torque joints. Integrates learning by demonstration (LbD) for doors handling and household cleaning, thermal trans-structural perception, chemical gas leak detection, preventive elder care with fall detection and emergency calls, and smart eco-farming with a 35kg payload capacity.",
                "comp-card2-ecosystem-title": "Residential Ecosystem",
                "comp-card2-ecosystem-desc": "Instant connection via Apple HomeKit, Google Home, and the Zetta Care app. Control cleaning routines, garden mapping, and smart greenhouse directly from your phone.",
                "comp-card2-price1-label": "Direct Purchase",
                "comp-card2-price1-value": "$ 3.7M",
                "comp-card2-price2-label": "Installment (12x)",
                "comp-card2-price2-value": "$ 308k<span class=\"text-xs font-normal text-[#00E5FF]/60 ml-1\">/month</span>",
                "comp-card2-spec1-label": "Height",
                "comp-card2-spec1-value": "1.75m",
                "comp-card2-spec2-label": "Finish",
                "comp-card2-spec2-value": "White Polymer",
                "comp-card2-spec3-label": "Max Payload",
                "comp-card2-spec3-value": "35kg",
                
                // Garantia
                "gar-title": "Ethical Commitment <span class=\"text-transparent bg-clip-text bg-gradient-to-r from-[#00E5FF] to-blue-500\">and Accessibility.</span>",
                "gar-desc": "Our humanoids operate under strict physical safety and cyber-ethical guidelines. Equipped with redundant torque sensors and magnetic decouplers, we guarantee 100% safe collaboration with human operators. We believe in robotics as a catalyst for inclusion, allowing our platforms to return occupational autonomy to people with motor restrictions, with absolute respect for dignity and privacy.",
                "gar-badge1-title": "Safety Standard",
                "gar-badge1-value": "ISO 13482 (Assistive Robots)",
                "gar-badge2-title": "Data Protection",
                "gar-badge2-value": "End-to-End Encryption",
                "gar-badge3-title": "Development Ethics",
                "gar-badge3-value": "Human-First Design",
                "gar-footer-badge": "Global Ethical and Ergonomic Compliance Certification",
                
                // Encomendar
                "enc-title": "Start your <span class=\"text-transparent bg-clip-text bg-gradient-to-r from-[#00E5FF] to-blue-600 drop-shadow-[0_0_20px_rgba(0,229,255,0.25)]\">Reservation.</span>",
                "enc-desc": "Limited initial production batches. Secure priority in delivery for your Zetta model. No payment is required at this preliminary stage.",
                "enc-form-select-title": "Platform of Interest",
                "enc-form-select-placeholder": "Select the Humanoid Model",
                "enc-form-select-opt1": "Zetta Atlas (B2B Operations / Industrial)",
                "enc-form-select-opt2": "Zetta Gaia (B2C Care / Residential)",
                "enc-form-label-data": "Registration Details",
                "enc-form-input-name": "Full Name or Company Name",
                "enc-form-input-email": "Corporate or Personal E-mail",
                "enc-form-btn": "Confirm Free Reservation",
                "enc-footer": "Priority defined by order of registration."
            }
        };

        window.setLanguage = function(lang) {
            document.querySelectorAll('[data-translate]').forEach(el => {
                const key = el.getAttribute('data-translate');
                if (translations[lang] && translations[lang][key]) {
                    if (el.tagName === 'INPUT' || el.tagName === 'TEXTAREA') {
                        el.placeholder = translations[lang][key];
                    } else {
                        el.innerHTML = translations[lang][key];
                    }
                }
            });
            
            document.querySelectorAll('option[data-translate]').forEach(opt => {
                const key = opt.getAttribute('data-translate');
                if (translations[lang] && translations[lang][key]) {
                    opt.textContent = translations[lang][key];
                }
            });

            // Sincroniza botões PT/EN (Desktop e Mobile)
            const ptBtns = [document.getElementById('lang-pt'), document.getElementById('lang-pt-mob')];
            const enBtns = [document.getElementById('lang-en'), document.getElementById('lang-en-mob')];

            if (lang === 'pt') {
                ptBtns.forEach(btn => {
                    if (btn) btn.className = "px-3 py-1 rounded-full text-white bg-gradient-to-r from-[#00E5FF] to-blue-600 transition-all duration-300 shadow-[0_0_10px_rgba(0,229,255,0.3)]";
                });
                enBtns.forEach(btn => {
                    if (btn) btn.className = "px-3 py-1 rounded-full text-gray-400 hover:text-white transition-all duration-300";
                });
            } else {
                enBtns.forEach(btn => {
                    if (btn) btn.className = "px-3 py-1 rounded-full text-white bg-gradient-to-r from-[#00E5FF] to-blue-600 transition-all duration-300 shadow-[0_0_10px_rgba(0,229,255,0.3)]";
                });
                ptBtns.forEach(btn => {
                    if (btn) btn.className = "px-3 py-1 rounded-full text-gray-400 hover:text-white transition-all duration-300";
                });
            }

            localStorage.setItem('preferred-language', lang);
        }

        // ----------------------------------------------------
        // LÓGICA DE TEMA (LIGHT / DARK - COM DARK POR PADRÃO)
        // ----------------------------------------------------
        window.toggleTheme = function() {
            const isLight = document.body.classList.contains('light-mode');
            const targetTheme = isLight ? 'dark' : 'light';
            window.applyTheme(targetTheme);
        }

        window.applyTheme = function(theme) {
            const sunIcon = document.getElementById('theme-sun-icon');
            const moonIcon = document.getElementById('theme-moon-icon');
            const sunIconMob = document.getElementById('theme-sun-icon-mob');
            const moonIconMob = document.getElementById('theme-moon-icon-mob');

            if (theme === 'light') {
                document.body.classList.add('light-mode');
                sunIcon?.classList.add('hidden');
                moonIcon?.classList.remove('hidden');
                sunIconMob?.classList.add('hidden');
                moonIconMob?.classList.remove('hidden');
            } else {
                document.body.classList.remove('light-mode');
                sunIcon?.classList.remove('hidden');
                moonIcon?.classList.add('hidden');
                sunIconMob?.classList.remove('hidden');
                moonIconMob?.classList.add('hidden');
            }
            localStorage.setItem('preferred-theme', theme);
        }

        // Inicialização dos Estados Salvos
        const storedTheme = localStorage.getItem('preferred-theme') || 'dark';
        window.applyTheme(storedTheme);

        const storedLang = localStorage.getItem('preferred-language') || 'pt';
        window.setLanguage(storedLang);
    </script>

    <script type="module">
        import { Application } from 'https://unpkg.com/@splinetool/runtime@1.9.21/build/runtime.js';
        const canvas = document.getElementById('robot-3d-canvas');
        if (canvas) {
            const app = new Application(canvas);
            app.load('https://prod.spline.design/kZDDjO5HuC9GJUM2/scene.splinecode').catch(console.error);
        }

        // Inicializa AOS
        if (typeof AOS !== 'undefined') {
            AOS.init({ duration: 1000, once: true });
        }
    </script>
</body>
</html>
