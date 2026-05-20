<!-- Navbar Fixa com Efeito Glassmorphism Ultra Premium -->
<header class="fixed top-0 left-0 w-full z-50 pointer-events-none pt-4 md:pt-6 transition-all duration-500" id="navbar">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pointer-events-auto relative">
        <div class="flex items-center justify-between h-20 px-6 rounded-2xl bg-[#0B0F19]/90 md:bg-white/[0.02] border border-white/10 backdrop-blur-2xl shadow-[0_8px_32px_rgba(0,0,0,0.5)] transition-all duration-300 hover:bg-white/[0.04]">
            
            <!-- Esquerda: Logo -->
            <div class="flex-shrink-0 flex items-center gap-3.5 cursor-pointer group">
                <img src="{{ asset('images/logo.jpeg') }}" alt="ZettaTech Logo" class="h-8 md:h-9 w-auto object-contain transition-all duration-500 group-hover:scale-105 group-hover:drop-shadow-[0_0_15px_rgba(0,229,255,0.6)]">
                <span class="text-white text-xs font-black tracking-[0.3em] uppercase group-hover:text-[#00E5FF] transition-colors duration-500 font-sans select-none">
                    Zetta<span class="font-light text-gray-400">Tech</span>
                </span>
            </div>

            <!-- Centro: Links de Navegação com Destaque Ativo -->
            <nav class="hidden md:flex items-center space-x-8 lg:space-x-12">
                <a href="#inicio" class="nav-link relative text-xs font-bold text-gray-400 hover:text-white transition-colors duration-300 tracking-[0.2em] uppercase group">
                    <span data-translate="nav-inicio">Início</span>
                    <span class="nav-span absolute -bottom-2 left-0 w-0 h-[2px] bg-gradient-to-r from-[#00E5FF] to-blue-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#tecnologia" class="nav-link relative text-xs font-bold text-gray-400 hover:text-white transition-colors duration-300 tracking-[0.2em] uppercase group">
                    <span data-translate="nav-tecnologia">Tecnologia</span>
                    <span class="nav-span absolute -bottom-2 left-0 w-0 h-[2px] bg-gradient-to-r from-[#00E5FF] to-blue-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#modelos" class="nav-link relative text-xs font-bold text-gray-400 hover:text-white transition-colors duration-300 tracking-[0.2em] uppercase group">
                    <span data-translate="nav-modelos">Plataformas</span>
                    <span class="nav-span absolute -bottom-2 left-0 w-0 h-[2px] bg-gradient-to-r from-[#00E5FF] to-blue-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#compromisso" class="nav-link relative text-xs font-bold text-gray-400 hover:text-white transition-colors duration-300 tracking-[0.2em] uppercase group">
                    <span data-translate="nav-compromisso">Compromisso</span>
                    <span class="nav-span absolute -bottom-2 left-0 w-0 h-[2px] bg-gradient-to-r from-[#00E5FF] to-blue-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </nav>

            <!-- Direita: Idioma, Tema e CTA Premium -->
            <div class="hidden md:flex items-center gap-6 pointer-events-auto">
                <!-- Seletor de Idioma Segmentado -->
                <div class="flex items-center gap-1 bg-white/[0.03] border border-white/10 rounded-full p-1 text-[10px] font-bold uppercase tracking-wider relative lang-switcher-container pointer-events-auto">
                    <button id="lang-pt" onclick="window.setLanguage('pt')" class="pointer-events-auto px-3 py-1 rounded-full text-white bg-gradient-to-r from-[#00E5FF] to-blue-600 transition-all duration-300 shadow-[0_0_10px_rgba(0,229,255,0.3)] cursor-pointer">PT</button>
                    <button id="lang-en" onclick="window.setLanguage('en')" class="pointer-events-auto px-3 py-1 rounded-full text-gray-400 hover:text-white transition-all duration-300 cursor-pointer">EN</button>
                </div>

                <!-- Seletor de Tema (Sol/Lua) -->
                <button id="theme-toggle" onclick="window.toggleTheme()" class="pointer-events-auto p-2 rounded-xl bg-white/[0.03] border border-white/10 text-gray-400 hover:text-white hover:border-[#00E5FF]/40 transition-all duration-300 relative overflow-hidden group shadow-lg cursor-pointer" aria-label="Toggle Theme">
                    <svg id="theme-sun-icon" class="w-4 h-4 text-[#00E5FF] transition-transform duration-500 transform group-hover:rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707m12.728 12.728A9 9 0 115.636 5.636m12.728 12.728A9 9 0 015.636 5.636"></path>
                    </svg>
                    <svg id="theme-moon-icon" class="w-4 h-4 text-blue-600 hidden transition-transform duration-500 transform group-hover:-rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                    </svg>
                </button>

                <!-- CTA Reservar -->
                <a href="#reserva" class="pointer-events-auto group relative px-6 py-2.5 font-bold text-white uppercase tracking-[0.15em] overflow-hidden rounded-lg bg-white/[0.03] border border-white/10 hover:border-[#00E5FF]/50 transition-all duration-500 text-[10px] md:text-xs">
                    <div class="absolute inset-0 w-0 bg-gradient-to-r from-[#00E5FF] to-blue-600 transition-all duration-500 ease-out group-hover:w-full z-0"></div>
                    <span data-translate="nav-reserva" class="relative z-10 drop-shadow-[0_0_8px_rgba(255,255,255,0.3)]">Reservar</span>
                </a>
            </div>

            <!-- Hamburger Button (Mobile) -->
            <div class="flex md:hidden items-center">
                <button id="mobile-menu-btn" class="text-gray-400 hover:text-white focus:outline-none p-2 transition-colors duration-300" aria-label="Toggle Menu">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

        </div>

        <!-- Mobile Menu Panel -->
        <div id="mobile-menu" class="hidden md:hidden absolute top-24 left-4 right-4 bg-[#0B0F19]/95 border border-white/10 backdrop-blur-3xl rounded-2xl p-6 shadow-2xl flex flex-col space-y-4 transition-all duration-300 opacity-0 transform scale-95 origin-top pointer-events-none z-50">
            <a href="#inicio" class="mobile-link text-xs font-bold text-gray-400 hover:text-white tracking-[0.2em] uppercase py-3 border-b border-white/5 transition-colors duration-300" data-translate="nav-inicio">Início</a>
            <a href="#tecnologia" class="mobile-link text-xs font-bold text-gray-400 hover:text-white tracking-[0.2em] uppercase py-3 border-b border-white/5 transition-colors duration-300" data-translate="nav-tecnologia">Tecnologia</a>
            <a href="#modelos" class="mobile-link text-xs font-bold text-gray-400 hover:text-white tracking-[0.2em] uppercase py-3 border-b border-white/5 transition-colors duration-300" data-translate="nav-modelos">Plataformas</a>
            <a href="#compromisso" class="mobile-link text-xs font-bold text-gray-400 hover:text-white tracking-[0.2em] uppercase py-3 border-b border-white/5 transition-colors duration-300" data-translate="nav-compromisso">Compromisso</a>
            
            <!-- Controles Mobile (Idioma e Tema) -->
            <div class="flex items-center justify-between py-4 border-b border-white/5">
                <span class="text-[10px] text-gray-500 uppercase tracking-widest font-bold">Configuração</span>
                <div class="flex items-center gap-4">
                    <!-- Idioma Mobile -->
                    <div class="flex items-center gap-1 bg-white/[0.03] border border-white/10 rounded-full p-1 text-[9px] font-bold uppercase tracking-wider relative lang-switcher-container">
                        <button id="lang-pt-mob" onclick="window.setLanguage('pt')" class="px-2.5 py-1 rounded-full text-white bg-gradient-to-r from-[#00E5FF] to-blue-600 transition-all duration-300 cursor-pointer">PT</button>
                        <button id="lang-en-mob" onclick="window.setLanguage('en')" class="px-2.5 py-1 rounded-full text-gray-400 hover:text-white transition-all duration-300 cursor-pointer">EN</button>
                    </div>

                    <!-- Tema Mobile -->
                    <button id="theme-toggle-mob" onclick="window.toggleTheme()" class="p-2 rounded-xl bg-white/[0.03] border border-white/10 text-gray-400 hover:text-white transition-all duration-300 cursor-pointer shadow-lg" aria-label="Toggle Theme">
                        <svg id="theme-sun-icon-mob" class="w-4 h-4 text-[#00E5FF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707m12.728 0l-.707-.707M6.343 6.343l-.707-.707m12.728 12.728A9 9 0 115.636 5.636m12.728 12.728A9 9 0 015.636 5.636"></path>
                        </svg>
                        <svg id="theme-moon-icon-mob" class="w-4 h-4 text-blue-600 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <a href="#reserva" class="mobile-link group relative w-full text-center py-4 font-bold text-white uppercase tracking-[0.15em] overflow-hidden rounded-xl bg-gradient-to-r from-[#00E5FF]/20 to-blue-600/20 border border-[#00E5FF]/30 hover:border-[#00E5FF]/50 transition-all duration-500 text-xs cursor-pointer">
                <span data-translate="nav-reserva-mob">Reservar Agora</span>
            </a>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        const icon = document.getElementById('menu-icon');
        const links = document.querySelectorAll('.mobile-link');

        function toggleMenu() {
            const isHidden = menu.classList.contains('hidden');
            if (isHidden) {
                menu.classList.remove('hidden');
                setTimeout(() => {
                    menu.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
                    menu.classList.add('opacity-100', 'scale-100', 'pointer-events-auto');
                }, 10);
                icon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
            } else {
                menu.classList.remove('opacity-100', 'scale-100', 'pointer-events-auto');
                menu.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                setTimeout(() => {
                    menu.classList.add('hidden');
                }, 300);
                icon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
            }
        }

        btn.addEventListener('click', toggleMenu);
        links.forEach(link => {
            link.addEventListener('click', () => {
                if (!menu.classList.contains('hidden')) {
                    toggleMenu();
                }
            });
        });

        // Rastreamento Dinâmico de Scroll (ScrollSpy / Active Links)
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-link');

        function scrollSpy() {
            let current = '';
            const scrollPos = window.scrollY || window.pageYOffset || document.documentElement.scrollTop;

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                // Margem de tolerância (140px) para acomodar a navbar e comportamento visual
                if (scrollPos >= (sectionTop - 140)) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                const span = link.querySelector('.nav-span');
                
                if (href === `#${current}`) {
                    link.classList.remove('text-gray-400');
                    link.classList.add('text-white');
                    if (span) {
                        span.classList.remove('w-0');
                        span.classList.add('w-full');
                    }
                } else {
                    link.classList.remove('text-white');
                    link.classList.add('text-gray-400');
                    if (span) {
                        span.classList.remove('w-full');
                        span.classList.add('w-0');
                    }
                }
            });
        }

        window.addEventListener('scroll', scrollSpy);
        scrollSpy(); // Executa inicialmente para destacar a seção ativa
    });
</script>
