<!-- Seção de Comparação dos Modelos (Plataformas & Ecossistema) -->
<section id="modelos" class="py-32 px-6 lg:px-12 bg-[#06080D] relative z-10 pointer-events-auto scroll-mt-28">
    <div class="max-w-7xl mx-auto">
        
        <!-- Header com Toggle Blueprint -->
        <div class="flex flex-col items-center text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center justify-center gap-2 px-4 py-2 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-[10px] font-bold tracking-[0.2em] uppercase mb-6 font-sans" data-translate="comp-badge">
                Portfólio e Conectividade
            </div>
            <h2 class="text-4xl md:text-6xl font-black text-white tracking-tight uppercase mb-6 mx-auto" data-translate="comp-title">
                Nossas <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#00E5FF] to-blue-500">Plataformas.</span>
            </h2>
            <p class="text-gray-400 max-w-2xl text-base leading-relaxed font-light mb-8 mx-auto" data-translate="comp-desc">
                Engenharia visceral combinada com conectividade total. Nossos humanoides se integram perfeitamente aos fluxos industriais de corporações e ao ecossistema digital do seu lar.
            </p>
            
            <!-- Toggle Blueprint Mode -->
            <button id="toggle-blueprint" class="flex items-center justify-center gap-3 px-5 py-2.5 rounded-full bg-white/[0.02] border border-white/10 hover:border-[#00E5FF]/40 text-gray-400 hover:text-white transition-all duration-300 text-xs font-bold uppercase tracking-wider shadow-lg group pointer-events-auto cursor-pointer mx-auto">
                <span class="relative flex h-2 w-2">
                    <span id="blueprint-ping" class="animate-ping absolute inline-flex h-full w-full rounded-full bg-gray-500 opacity-75"></span>
                    <span id="blueprint-indicator" class="relative inline-flex rounded-full h-2 w-2 bg-gray-500 transition-colors duration-300"></span>
                </span>
                <span data-translate="comp-toggle-blueprint">Modo Blueprint (Esquema Técnico)</span>
            </button>
        </div>

        <!-- Grid de Cartões -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
            
            <!-- Cartão Zetta Atlas (B2B) -->
            <div data-tilt data-tilt-max="2" data-tilt-speed="500" data-tilt-perspective="1000" data-aos="fade-up" data-aos-delay="100" class="group relative flex flex-col bg-gradient-to-b from-white/[0.03] to-transparent border border-white/10 hover:border-blue-500/30 rounded-[2.5rem] overflow-hidden transition-all duration-700 shadow-2xl backdrop-blur-xl transform-gpu scanner-card" style="transform-style: preserve-3d;">
                
                <!-- Tag Superior B2B -->
                <div class="absolute top-8 left-8 z-20">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-black/60 border border-white/10 text-gray-200 text-[10px] font-bold tracking-[0.2em] uppercase backdrop-blur-md shadow-[0_0_15px_rgba(0,0,0,0.5)]">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-500 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-blue-500"></span>
                        </span>
                        <span data-translate="comp-card1-tag">Segmento Industrial B2B</span>
                    </div>
                </div>

                <!-- Container Imagens com Efeito Laser Scanner -->
                <div class="relative h-[450px] w-full bg-gradient-to-b from-blue-900/5 to-transparent flex justify-center items-center overflow-hidden mt-6 px-10">
                    <!-- Glow de Fundo -->
                    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-blue-500/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                    
                    <!-- Linha Laser do Scanner Neon -->
                    <div class="absolute left-0 right-0 h-[2px] bg-[#00E5FF] shadow-[0_0_10px_#00E5FF,_0_0_20px_#00E5FF] z-30 pointer-events-none opacity-0 group-hover:opacity-100 scanner-line"></div>
                    
                    <!-- Invólucro de Mesclagem Otimizado (Evita Efeito Ghosting / Duplicidade) -->
                    <div class="absolute inset-0 w-full h-full mix-blend-screen pointer-events-none">
                        <!-- Imagem Estática (Fundo) -->
                        <img src="{{ asset('images/atlas-estatico.jpg') }}" alt="Zetta Atlas" class="absolute inset-0 w-full h-full object-contain z-10 estatico-img select-none">
                        
                        <!-- Imagem de Ação (Revelada pelo Clip Path) -->
                        <img src="{{ asset('images/atlas-acao.jpg') }}" alt="Zetta Atlas Ação" class="absolute inset-0 w-full h-full object-contain z-20 acao-img select-none">
                    </div>
                </div>

                <!-- Bloco de Informações Técnicas -->
                <div class="flex-1 flex flex-col p-10 md:p-12 relative z-30 bg-gradient-to-t from-[#06080D] via-[#06080D]/90 to-transparent">
                    <h3 class="text-4xl md:text-5xl font-black text-white mb-6 tracking-tight" style="transform: translateZ(30px);">
                        Zetta <span class="font-light text-blue-400">Atlas</span>
                    </h3>
                    
                    <p class="text-gray-400 text-sm leading-relaxed mb-8 font-light" style="transform: translateZ(20px);" data-translate="comp-card1-desc">
                        O trabalhador incansável. Blindagem de liga de titânio fosco aeroespacial IP67 com juntas de torque brutal. Integra aprendizado por demonstração (LbD) aplicada a forças físicas de manuseio e abertura de portas, visão transextrutural (radar mmWave e LiDAR) atrás de portas fechadas, detecção química olfativa digital de gases/vazamentos e contador Geiger-LiDAR de radiação ionizante no ar. Ideal para rondas de segurança 24/7 e logística pesada com capacidade de carga de até 85kg.
                    </p>

                    <!-- Explicação do Ecossistema Integrado B2B -->
                    <div class="p-5 rounded-2xl bg-white/[0.01] border border-white/5 mb-8 hover:bg-white/[0.02] transition-all duration-300" style="transform: translateZ(15px);">
                        <span class="block text-[9px] text-[#00E5FF] uppercase tracking-wider mb-2 font-bold" data-translate="comp-card1-ecosystem-title">Ecossistema Industrial</span>
                        <p class="text-gray-400 text-xs leading-relaxed font-light" data-translate="comp-card1-ecosystem-desc">
                            Conexão imediata via ZettaHub API. Sincroniza diretamente com o ERP da sua empresa, gerenciadores de frota logística e sistemas de monitoramento centralizados corporativos.
                        </p>
                    </div>
                    
                    <!-- Precificação -->
                    <div class="grid grid-cols-2 gap-4 mb-10" style="transform: translateZ(10px);">
                        <div class="p-5 rounded-2xl bg-white/[0.02] border border-white/5 transition-all">
                            <span class="block text-[10px] text-gray-500 uppercase tracking-widest mb-2 font-semibold" data-translate="comp-card1-price1-label">Compra Direta</span>
                            <span class="block text-2xl font-bold text-white" data-translate="comp-card1-price1-value">R$ 30M</span>
                        </div>
                        <div class="p-5 rounded-2xl bg-gradient-to-br from-blue-500/10 to-transparent border border-blue-500/20 relative overflow-hidden transition-all">
                            <span class="block text-[10px] text-blue-400 uppercase tracking-widest mb-2 font-semibold relative z-10" data-translate="comp-card1-price2-label">Parcela (12x)</span>
                            <span class="block text-2xl font-bold text-blue-400 relative z-10" data-translate="comp-card1-price2-value">R$ 2,5M<span class="text-xs font-normal text-blue-400/60 ml-1">/mês</span></span>
                        </div>
                    </div>

                    <!-- Demonstração do Core Vocal Autônomo -->
                    <div class="p-5 rounded-2xl bg-white/[0.01] border border-white/5 mb-10 hover:bg-white/[0.02] transition-all duration-300 relative overflow-hidden group/vocal" style="transform: translateZ(12px);">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-2.5">
                                <span class="relative flex h-3 w-3">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-500 opacity-75 voice-pulse-ping hidden"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-500/40 border border-blue-500 voice-pulse-indicator"></span>
                                </span>
                                <span class="text-[10px] text-blue-400 uppercase tracking-widest font-bold">Core Vocal Autônomo</span>
                            </div>
                            
                            <div class="flex items-end gap-[3px] h-4 voice-wave-container opacity-40 group-hover/vocal:opacity-75 transition-opacity">
                                <div class="w-[2px] bg-blue-500/80 rounded-full voice-bar voice-bar-1" style="height: 4px;"></div>
                                <div class="w-[2px] bg-blue-500/80 rounded-full voice-bar voice-bar-2" style="height: 6px;"></div>
                                <div class="w-[2px] bg-blue-500/80 rounded-full voice-bar voice-bar-3" style="height: 4px;"></div>
                                <div class="w-[2px] bg-blue-500/80 rounded-full voice-bar voice-bar-4" style="height: 8px;"></div>
                                <div class="w-[2px] bg-blue-500/80 rounded-full voice-bar voice-bar-5" style="height: 5px;"></div>
                            </div>
                        </div>
                        
                        <p class="text-[11px] text-gray-500 mb-4 leading-relaxed font-light">
                            Demonstração vocal tátil. Selecione uma linguagem para ouvir o protocolo vocal autônomo do humanoide.
                        </p>
                        
                        <div class="flex flex-wrap gap-2">
                            <button onclick="playRobotVoice('pt', 'atlas')" class="px-3 py-1.5 rounded-xl bg-white/[0.03] border border-white/5 hover:border-blue-500/30 hover:bg-blue-500/5 text-[10px] text-gray-400 hover:text-white transition-all cursor-pointer font-medium font-sans flex items-center gap-1.5 active:scale-95 duration-200">
                                <span>🇧🇷</span> PT
                            </button>
                            <button onclick="playRobotVoice('en', 'atlas')" class="px-3 py-1.5 rounded-xl bg-white/[0.03] border border-white/5 hover:border-blue-500/30 hover:bg-blue-500/5 text-[10px] text-gray-400 hover:text-white transition-all cursor-pointer font-medium font-sans flex items-center gap-1.5 active:scale-95 duration-200">
                                <span>🇺🇸</span> EN
                            </button>
                            <button onclick="playRobotVoice('de', 'atlas')" class="px-3 py-1.5 rounded-xl bg-white/[0.03] border border-white/5 hover:border-blue-500/30 hover:bg-blue-500/5 text-[10px] text-gray-400 hover:text-white transition-all cursor-pointer font-medium font-sans flex items-center gap-1.5 active:scale-95 duration-200">
                                <span>🇩🇪</span> DE
                            </button>
                            <button onclick="playRobotVoice('es', 'atlas')" class="px-3 py-1.5 rounded-xl bg-white/[0.03] border border-white/5 hover:border-blue-500/30 hover:bg-blue-500/5 text-[10px] text-gray-400 hover:text-white transition-all cursor-pointer font-medium font-sans flex items-center gap-1.5 active:scale-95 duration-200">
                                <span>🇪🇸</span> ES
                            </button>
                            <button onclick="playRobotVoice('ru', 'atlas')" class="px-3 py-1.5 rounded-xl bg-white/[0.03] border border-white/5 hover:border-blue-500/30 hover:bg-blue-500/5 text-[10px] text-gray-400 hover:text-white transition-all cursor-pointer font-medium font-sans flex items-center gap-1.5 active:scale-95 duration-200">
                                <span>🇷🇺</span> RU
                            </button>
                        </div>
                    </div>

                    <!-- Especificações Físicas -->
                    <div class="flex gap-8 mt-auto pt-8 border-t border-white/10" style="transform: translateZ(15px);">
                        <div class="flex flex-col">
                            <span class="text-[10px] text-gray-500 uppercase tracking-widest mb-1" data-translate="comp-card1-spec1-label">Altura</span>
                            <span class="font-mono text-white text-base font-medium" data-translate="comp-card1-spec1-value">1.95m</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-[10px] text-gray-500 uppercase tracking-widest mb-1" data-translate="comp-card1-spec2-label">Acabamento</span>
                            <span class="font-mono text-white text-base font-medium" data-translate="comp-card1-spec2-value">Titânio Fosco</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-[10px] text-gray-500 uppercase tracking-widest mb-1" data-translate="comp-card1-spec3-label">Carga Máx</span>
                            <span class="font-mono text-white text-base font-medium" data-translate="comp-card1-spec3-value">85kg</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cartão Zetta Gaia (B2C) -->
            <div data-tilt data-tilt-max="2" data-tilt-speed="500" data-tilt-perspective="1000" data-aos="fade-up" data-aos-delay="200" class="group relative flex flex-col bg-gradient-to-b from-white/[0.03] to-transparent border border-white/10 hover:border-[#00E5FF]/30 rounded-[2.5rem] overflow-hidden transition-all duration-700 shadow-2xl backdrop-blur-xl transform-gpu scanner-card" style="transform-style: preserve-3d;">
                
                <!-- Tag Superior B2C -->
                <div class="absolute top-8 left-8 z-20">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-black/60 border border-white/10 text-gray-200 text-[10px] font-bold tracking-[0.2em] uppercase backdrop-blur-md shadow-[0_0_15px_rgba(0,0,0,0.5)]">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#00E5FF] opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-[#00E5FF]"></span>
                        </span>
                        <span data-translate="comp-card2-tag">Segmento Doméstico B2C</span>
                    </div>
                </div>

                <!-- Container Imagens com Efeito Laser Scanner -->
                <div class="relative h-[450px] w-full bg-gradient-to-b from-[#00E5FF]/5 to-transparent flex justify-center items-center overflow-hidden mt-6 px-10">
                    <!-- Glow de Fundo -->
                    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_center,_var(--tw-gradient-stops))] from-[#00E5FF]/5 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                    
                    <!-- Linha Laser do Scanner Neon -->
                    <div class="absolute left-0 right-0 h-[2px] bg-[#00E5FF] shadow-[0_0_10px_#00E5FF,_0_0_20px_#00E5FF] z-30 pointer-events-none opacity-0 group-hover:opacity-100 scanner-line"></div>
                    
                    <!-- Invólucro de Mesclagem Otimizado (Evita Efeito Ghosting / Duplicidade) -->
                    <div class="absolute inset-0 w-full h-full mix-blend-screen pointer-events-none">
                        <!-- Imagem Estática (Fundo) -->
                        <img src="{{ asset('images/gaia-estatico.jpg') }}" alt="Zetta Gaia" class="absolute inset-0 w-full h-full object-contain z-10 estatico-img select-none">
                        
                        <!-- Imagem de Ação (Revelada pelo Clip Path) -->
                        <img src="{{ asset('images/gaia-acao.jpg') }}" alt="Zetta Gaia Ação" class="absolute inset-0 w-full h-full object-contain z-20 acao-img select-none">
                    </div>
                </div>

                <!-- Bloco de Informações Técnicas -->
                <div class="flex-1 flex flex-col p-10 md:p-12 relative z-30 bg-gradient-to-t from-[#06080D] via-[#06080D]/90 to-transparent">
                    <h3 class="text-4xl md:text-5xl font-black text-white mb-6 tracking-tight" style="transform: translateZ(30px);">
                        Zetta <span class="font-light text-[#00E5FF]">Gaia</span>
                    </h3>
                    
                    <p class="text-gray-400 text-sm leading-relaxed mb-8 font-light" style="transform: translateZ(20px);" data-translate="comp-card2-desc">
                        A harmonia perfeita entre tecnologia e empatia. Chassi ergonômico de toque macio em polímero branco antimicrobiano com sensores de torque suave redundantes de segurança absoluta. Integra aprendizado por demonstração (LbD) para abertura de portas e tarefas de limpeza, visão térmica transextrutural, monitoramento químico de gases domésticos, suporte e saúde de idosos com detecção de quedas e chamadas de emergência, e agricultura inteligente de alta precisão com capacidade de carga de até 35kg.
                    </p>

                    <!-- Explicação do Ecossistema Integrado B2C -->
                    <div class="p-5 rounded-2xl bg-white/[0.01] border border-white/5 mb-8 hover:bg-white/[0.02] transition-all duration-300" style="transform: translateZ(15px);">
                        <span class="block text-[9px] text-[#00E5FF] uppercase tracking-wider mb-2 font-bold" data-translate="comp-card2-ecosystem-title">Ecossistema Residencial</span>
                        <p class="text-gray-400 text-xs leading-relaxed font-light" data-translate="comp-card2-ecosystem-desc">
                            Conexão instantânea via Apple HomeKit, Google Home e o aplicativo Zetta Care. Controle rotinas de limpeza, mapeamento de jardim e horta inteligente direto do seu celular.
                        </p>
                    </div>
                    
                    <!-- Precificação -->
                    <div class="grid grid-cols-2 gap-4 mb-10" style="transform: translateZ(10px);">
                        <div class="p-5 rounded-2xl bg-white/[0.02] border border-white/5 transition-all">
                            <span class="block text-[10px] text-gray-500 uppercase tracking-widest mb-2 font-semibold" data-translate="comp-card2-price1-label">Compra Direta</span>
                            <span class="block text-2xl font-bold text-white" data-translate="comp-card2-price1-value">R$ 20M</span>
                        </div>
                        <div class="p-5 rounded-2xl bg-gradient-to-br from-[#00E5FF]/10 to-transparent border border-[#00E5FF]/20 relative overflow-hidden transition-all">
                            <span class="block text-[10px] text-[#00E5FF] uppercase tracking-widest mb-2 font-semibold relative z-10" data-translate="comp-card2-price2-label">Parcela (12x)</span>
                            <span class="block text-2xl font-bold text-[#00E5FF] relative z-10" data-translate="comp-card2-price2-value">R$ 1,67M<span class="text-xs font-normal text-[#00E5FF]/60 ml-1">/mês</span></span>
                        </div>
                    </div>

                    <!-- Demonstração do Core Vocal Autônomo -->
                    <div class="p-5 rounded-2xl bg-white/[0.01] border border-white/5 mb-10 hover:bg-white/[0.02] transition-all duration-300 relative overflow-hidden group/vocal" style="transform: translateZ(12px);">
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center gap-2.5">
                                <span class="relative flex h-3 w-3">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#00E5FF] opacity-75 voice-pulse-ping hidden"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-[#00E5FF]/40 border border-[#00E5FF] voice-pulse-indicator"></span>
                                </span>
                                <span class="text-[10px] text-[#00E5FF] uppercase tracking-widest font-bold">Core Vocal Autônomo</span>
                            </div>
                            
                            <div class="flex items-end gap-[3px] h-4 voice-wave-container opacity-40 group-hover/vocal:opacity-75 transition-opacity">
                                <div class="w-[2px] bg-[#00E5FF]/80 rounded-full voice-bar voice-bar-1" style="height: 4px;"></div>
                                <div class="w-[2px] bg-[#00E5FF]/80 rounded-full voice-bar voice-bar-2" style="height: 6px;"></div>
                                <div class="w-[2px] bg-[#00E5FF]/80 rounded-full voice-bar voice-bar-3" style="height: 4px;"></div>
                                <div class="w-[2px] bg-[#00E5FF]/80 rounded-full voice-bar voice-bar-4" style="height: 8px;"></div>
                                <div class="w-[2px] bg-[#00E5FF]/80 rounded-full voice-bar voice-bar-5" style="height: 5px;"></div>
                            </div>
                        </div>
                        
                        <p class="text-[11px] text-gray-500 mb-4 leading-relaxed font-light">
                            Demonstração vocal tátil. Selecione uma linguagem para ouvir o protocolo vocal autônomo do humanoide.
                        </p>
                        
                        <div class="flex flex-wrap gap-2">
                            <button onclick="playRobotVoice('pt', 'gaia')" class="px-3 py-1.5 rounded-xl bg-white/[0.03] border border-white/5 hover:border-[#00E5FF]/30 hover:bg-[#00E5FF]/5 text-[10px] text-gray-400 hover:text-white transition-all cursor-pointer font-medium font-sans flex items-center gap-1.5 active:scale-95 duration-200">
                                <span>🇧🇷</span> PT
                            </button>
                            <button onclick="playRobotVoice('en', 'gaia')" class="px-3 py-1.5 rounded-xl bg-white/[0.03] border border-white/5 hover:border-[#00E5FF]/30 hover:bg-[#00E5FF]/5 text-[10px] text-gray-400 hover:text-white transition-all cursor-pointer font-medium font-sans flex items-center gap-1.5 active:scale-95 duration-200">
                                <span>🇺🇸</span> EN
                            </button>
                            <button onclick="playRobotVoice('de', 'gaia')" class="px-3 py-1.5 rounded-xl bg-white/[0.03] border border-white/5 hover:border-[#00E5FF]/30 hover:bg-[#00E5FF]/5 text-[10px] text-gray-400 hover:text-white transition-all cursor-pointer font-medium font-sans flex items-center gap-1.5 active:scale-95 duration-200">
                                <span>🇩🇪</span> DE
                            </button>
                            <button onclick="playRobotVoice('es', 'gaia')" class="px-3 py-1.5 rounded-xl bg-white/[0.03] border border-white/5 hover:border-[#00E5FF]/30 hover:bg-[#00E5FF]/5 text-[10px] text-gray-400 hover:text-white transition-all cursor-pointer font-medium font-sans flex items-center gap-1.5 active:scale-95 duration-200">
                                <span>🇪🇸</span> ES
                            </button>
                            <button onclick="playRobotVoice('ru', 'gaia')" class="px-3 py-1.5 rounded-xl bg-white/[0.03] border border-white/5 hover:border-[#00E5FF]/30 hover:bg-[#00E5FF]/5 text-[10px] text-gray-400 hover:text-white transition-all cursor-pointer font-medium font-sans flex items-center gap-1.5 active:scale-95 duration-200">
                                <span>🇷🇺</span> RU
                            </button>
                        </div>
                    </div>

                    <!-- Especificações Físicas -->
                    <div class="flex gap-8 mt-auto pt-8 border-t border-white/10" style="transform: translateZ(15px);">
                        <div class="flex flex-col">
                            <span class="text-[10px] text-gray-500 uppercase tracking-widest mb-1" data-translate="comp-card2-spec1-label">Altura</span>
                            <span class="font-mono text-white text-base font-medium" data-translate="comp-card2-spec1-value">1.75m</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-[10px] text-gray-500 uppercase tracking-widest mb-1" data-translate="comp-card2-spec2-label">Acabamento</span>
                            <span class="font-mono text-white text-base font-medium" data-translate="comp-card2-spec2-value">Polímero Branco</span>
                        </div>
                        <div class="flex flex-col">
                            <span class="text-[10px] text-gray-500 uppercase tracking-widest mb-1" data-translate="comp-card2-spec3-label">Carga Máx</span>
                            <span class="font-mono text-white text-base font-medium" data-translate="comp-card2-spec3-value">35kg</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CSS do Efeito Laser Scanner & Modo Blueprint Premium -->
<style>
    /* Estilos do Efeito Scanner Laser */
    .scanner-card .acao-img {
        clip-path: inset(0 0 100% 0);
        transition: clip-path 0.9s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .scanner-card:hover .acao-img {
        clip-path: inset(0 0 0 0);
    }

    .scanner-card .scanner-line {
        top: 0%;
        opacity: 0;
        transition: top 0.9s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.3s ease;
    }
    .scanner-card:hover .scanner-line {
        top: 100%;
        opacity: 1;
    }

    /* Animação das Ondas Sonoras Neon do Core Vocal */
    @keyframes voiceWave {
        0%, 100% { height: 4px; }
        50% { height: 16px; }
    }
    .voice-wave-active .voice-bar-1 { animation: voiceWave 0.6s ease-in-out infinite alternate; }
    .voice-wave-active .voice-bar-2 { animation: voiceWave 0.4s ease-in-out infinite alternate 0.1s; }
    .voice-wave-active .voice-bar-3 { animation: voiceWave 0.7s ease-in-out infinite alternate 0.2s; }
    .voice-wave-active .voice-bar-4 { animation: voiceWave 0.5s ease-in-out infinite alternate 0.15s; }
    .voice-wave-active .voice-bar-5 { animation: voiceWave 0.65s ease-in-out infinite alternate 0.3s; }

    /* Estilos do Modo Blueprint (Fundo Preto Luxo com Grid Ciano Técnico) */
    .blueprint-mode img {
        filter: sepia(1) saturate(10) hue-rotate(150deg) brightness(1.2) contrast(1.25) !important;
        mix-blend-mode: screen !important;
        clip-path: none !important; /* Desativa o clip-path no modo blueprint para mostrar a estrutura completa */
    }
    .blueprint-mode .acao-img {
        opacity: 0 !important; /* Deixa apenas a imagem estática limpa no blueprint */
    }
    .blueprint-mode .estatico-img {
        opacity: 1 !important;
    }
    .blueprint-mode .scanner-line {
        display: none !important; /* Oculta a linha do scanner */
    }
    .blueprint-mode .scanner-card {
        border-color: rgba(0, 229, 255, 0.4) !important;
        box-shadow: 0 0 50px rgba(0, 229, 255, 0.08) !important;
        background-color: #06080D !important;
        background-image: linear-gradient(to bottom, rgba(0, 229, 255, 0.02), transparent),
                          linear-gradient(rgba(0, 229, 255, 0.03) 1px, transparent 1px),
                          linear-gradient(90deg, rgba(0, 229, 255, 0.03) 1px, transparent 1px) !important;
        background-size: 100% 100%, 24px 24px, 24px 24px !important;
    }
</style>

<!-- Lógica do Modo Blueprint -->
<script>
    // Pré-aquecimento das vozes nativas da API SpeechSynthesis
    if (typeof window !== 'undefined' && window.speechSynthesis) {
        window.speechSynthesis.getVoices();
    }

    document.addEventListener('DOMContentLoaded', function() {
        const toggleBtn = document.getElementById('toggle-blueprint');
        const indicator = document.getElementById('blueprint-indicator');
        const pingIndicator = document.getElementById('blueprint-ping');
        const grid = document.querySelector('#modelos .grid');

        if (toggleBtn && grid) {
            toggleBtn.addEventListener('click', function() {
                const isActive = grid.classList.toggle('blueprint-mode');
                
                if (isActive) {
                    indicator.classList.remove('bg-gray-500');
                    indicator.classList.add('bg-[#00E5FF]');
                    if (pingIndicator) {
                        pingIndicator.classList.remove('bg-gray-500');
                        pingIndicator.classList.add('bg-[#00E5FF]');
                    }
                    toggleBtn.classList.add('border-[#00E5FF]/40', 'text-white');
                } else {
                    indicator.classList.remove('bg-[#00E5FF]');
                    indicator.classList.add('bg-gray-500');
                    if (pingIndicator) {
                        pingIndicator.classList.remove('bg-[#00E5FF]');
                        pingIndicator.classList.add('bg-gray-500');
                    }
                    toggleBtn.classList.remove('border-[#00E5FF]/40', 'text-white');
                }
            });
        }
    });

    // ============================================================
    // NÚcLEO VOCAL ZETTA — Anti-repetição + Jarvis/FRIDAY voices
    // Atlas: voz masculina profunda britânica (estilo Jarvis)
    // Gaia:  voz feminina clara americana (estilo FRIDAY)
    // ============================================================
    let _voicePlaying = false; // guard global contra repetição

    function playRobotVoice(lang, model) {
        // --- Para tudo imediatamente ---
        _voicePlaying = false;
        if (typeof responsiveVoice !== 'undefined') {
            try { responsiveVoice.cancel(); } catch(e) {}
        }
        if (window.speechSynthesis) {
            try { window.speechSynthesis.cancel(); } catch(e) {}
        }

        // --- Reset visual ---
        document.querySelectorAll('.voice-wave-container').forEach(el => el.classList.remove('voice-wave-active'));
        document.querySelectorAll('.voice-pulse-ping').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('#modelos .voice-pulse-indicator').forEach(el => {
            el.className = 'relative inline-flex rounded-full h-3 w-3 transition-colors duration-300 voice-pulse-indicator';
            const parentVocal = el.closest('.group\\/vocal');
            if (parentVocal && parentVocal.querySelector('.text-blue-400')) {
                el.classList.add('bg-blue-500/40', 'border', 'border-blue-500');
            } else {
                el.classList.add('bg-[#00E5FF]/40', 'border', 'border-[#00E5FF]');
            }
        });

        // Frases curtas — Atlas: Jarvis | Gaia: FRIDAY
        const phrases = {
            atlas: {
                pt: 'Protocolo vocal ativo. Zetta Atlas em operação. Todos os sistemas nominais. Aguardando suas ordens.',
                en: 'Voice protocol active. Zetta Atlas standing by. All systems nominal. Awaiting your orders, sir.',
                de: 'Sprachprotokoll aktiv. Zetta Atlas einsatzbereit. Alle Systeme nominal. Ich warte auf Ihre Befehle.',
                es: 'Protocolo vocal activo. Zetta Atlas listo. Todos los sistemas nominales. Esperando sus órdenes.',
                ru: 'Голосовой протокол активен. Зетта Атлас готов. Все системы в норме. Жду ваших приказаний.'
            },
            gaia: {
                pt: 'Olá! Aqui é Zetta Gaia. Sensores térmicos e químicos calibrados. Estou pronta. O que você precisa?',
                en: 'Hi there! Zetta Gaia online. Thermal and chemical sensors calibrated. Ready to help. What do you need?',
                de: 'Hallo! Hier ist Zetta Gaia. Thermische und chemische Sensoren kalibriert. Was kann ich für Sie tun?',
                es: '¡Hola! Aquí Zetta Gaia. Sensores térmicos y químicos calibrados. Lista para ayudar. ¿Qué necesita?',
                ru: 'Привет! Это Зетта Гея. Тепловые и химические датчики откалиброваны. Готова помочь. Что вам нужно?'
            }
        };

        const phrase = phrases[model]?.[lang];
        if (!phrase) return;

        // Card ativo para animar
        const cardEl = document.querySelector(
            model === 'atlas' ? '#modelos .grid > div:first-child' : '#modelos .grid > div:last-child'
        );
        if (!cardEl) return;

        const waveEl  = cardEl.querySelector('.voice-wave-container');
        const pingEl  = cardEl.querySelector('.voice-pulse-ping');
        const pulseEl = cardEl.querySelector('.voice-pulse-indicator');

        const onStart = function() {
            if (_voicePlaying) return;  // anti-repeat guard
            _voicePlaying = true;
            if (waveEl)  waveEl.classList.add('voice-wave-active');
            if (pingEl)  { pingEl.classList.remove('hidden'); pingEl.classList.add('bg-red-500'); }
            if (pulseEl) pulseEl.className = 'relative inline-flex rounded-full h-3 w-3 transition-colors duration-300 voice-pulse-indicator bg-red-500 border border-red-500';
        };

        const onEnd = function() {
            _voicePlaying = false;
            if (waveEl)  waveEl.classList.remove('voice-wave-active');
            if (pingEl)  pingEl.classList.add('hidden');
            if (pulseEl) {
                pulseEl.className = 'relative inline-flex rounded-full h-3 w-3 transition-colors duration-300 voice-pulse-indicator';
                if (model === 'atlas') pulseEl.classList.add('bg-blue-500/40', 'border', 'border-blue-500');
                else                   pulseEl.classList.add('bg-[#00E5FF]/40',  'border', 'border-[#00E5FF]');
            }
        };

        // Vozes por gênero FIXO por modelo (nunca mistura):
        // Atlas → sempre masculino (Jarvis = UK English Male, grave e autoritário)
        // Gaia  → sempre feminino  (FRIDAY = US English Female, clara e acolhedora)
        const rvVoices = {
            atlas: { pt:'Brazilian Portuguese Male', en:'UK English Male', de:'Deutsch Male',   es:'Spanish Male',   ru:'Russian Male'   },
            gaia:  { pt:'Brazilian Portuguese Female', en:'US English Female', de:'Deutsch Female', es:'Spanish Female', ru:'Russian Female' }
        };

        // Aguarda 150ms para cancel() ter efeito antes de falar
        setTimeout(function() {
            const isFemale = (model === 'gaia'); // Gaia = SEMPRE feminino, Atlas = SEMPRE masculino
            let spokeNatively = false;

            if (window.speechSynthesis) {
                const availVoices = window.speechSynthesis.getVoices();
                if (availVoices && availVoices.length > 0) {
                    const locales = {
                        pt: ['pt-br', 'pt-pt', 'pt'],
                        en: isFemale ? ['en-us', 'en-gb', 'en'] : ['en-gb', 'en-us', 'en'],
                        de: ['de-de', 'de'],
                        es: ['es-es', 'es-mx', 'es-us', 'es'],
                        ru: ['ru-ru', 'ru']
                    };
                    const targetLocales = locales[lang] || [lang];

                    const isMaleName = (name) => {
                        const n = name.toLowerCase();
                        return n.includes('male') || n.includes('masculino') || n.includes('hombre') || n.includes('man') ||
                               n.includes('daniel') || n.includes('raul') || n.includes('raúl') || n.includes('pablo') || 
                               n.includes('antonio') || n.includes('jorge') || n.includes('alvaro') || n.includes('álvaro') || 
                               n.includes('julio') || n.includes('david') || n.includes('george') || n.includes('mark') || 
                               n.includes('stefan') || n.includes('filip') || n.includes('szabolcs') || n.includes('joao') || 
                               n.includes('joão') || n.includes('pedro') || n.includes('carlos') || n.includes('manuel') || 
                               n.includes('francisco') || n.includes('diego') || n.includes('juan') || n.includes('miguel') || 
                               n.includes('luis') || n.includes('luís') || n.includes('javier') || n.includes('andres') || 
                               n.includes('andrés') || n.includes('felipe') || n.includes('enrique') || n.includes('alonso') || 
                               n.includes('mateo') || n.includes('tomas') || n.includes('tomás') || n.includes('rodrigo') ||
                               n.includes('ricardo') || n.includes('gustavo') || n.includes('marcos') || n.includes('lucas') ||
                               n.includes('gabriel') || n.includes('rafael') || n.includes('alejandro') || n.includes('hector') ||
                               n.includes('hugo') || n.includes('adrian') || n.includes('adrián') || n.includes('ignacio') ||
                               n.includes('joaquin') || n.includes('joaquín') || n.includes('esteban') || n.includes('roberto') ||
                               n.includes('fernando') || n.includes('jose') || n.includes('josé') || n.includes('dieter') ||
                               n.includes('hans') || n.includes('karl') || n.includes('ludwig') || n.includes('michael') ||
                               n.includes('dmitry') || n.includes('pavel') || n.includes('alexander') || n.includes('sergey') ||
                               n.includes('ivan') || n.includes('maxim') || n.includes('artem');
                    };

                    const isFemaleName = (name) => {
                        const n = name.toLowerCase();
                        return n.includes('female') || n.includes('femenina') || n.includes('mujer') || n.includes('woman') ||
                               n.includes('maria') || n.includes('helena') || n.includes('laura') || n.includes('conchita') ||
                               n.includes('lucia') || n.includes('lucía') || n.includes('sabina') || n.includes('zira') || 
                               n.includes('helen') || n.includes('elena') || n.includes('paulina') || n.includes('monica') || 
                               n.includes('mónica') || n.includes('joana') || n.includes('luciana') || n.includes('sara') || 
                               n.includes('hazel') || n.includes('susan') || n.includes('google') || n.includes('zetta') || 
                               n.includes('haruka') || n.includes('elsa') || n.includes('zuzana') || n.includes('luz') || 
                               n.includes('penelope') || n.includes('penélope') || n.includes('samantha') || n.includes('kyoko') || 
                               n.includes('ana') || n.includes('gabriela') || n.includes('leticia') || n.includes('valeria') || 
                               n.includes('carmen') || n.includes('juana') || n.includes('marta') || n.includes('clara') || 
                               n.includes('silvia') || n.includes('cristina') || n.includes('sofia') || n.includes('sofía') ||
                               n.includes('isabel') || n.includes('luisa') || n.includes('teresa') || n.includes('francisca') || 
                               n.includes('heloisa') || n.includes('solange') || n.includes('yolanda') || n.includes('elvira') ||
                               n.includes('dalia') || n.includes('larisha') || n.includes('paloma') || n.includes('giovanna') ||
                               n.includes('hilda') || n.includes('karen') || n.includes('catalina') || n.includes('abigail') ||
                               n.includes('alicia') || n.includes('beatriz') || n.includes('elisa') || n.includes('lola') ||
                               n.includes('zariyah') || n.includes('estrella') || n.includes('guadalupe') || n.includes('imelda') ||
                               n.includes('ingrid') || n.includes('jimena') || n.includes('josefina') || n.includes('marina') ||
                               n.includes('rita') || n.includes('amalia') || n.includes('irene') || n.includes('lorena') ||
                               n.includes('margarita') || n.includes('tatiana') || n.includes('olga') || n.includes('irina') ||
                               n.includes('svetlana') || n.includes('natasha') || n.includes('anna') || n.includes('anastasia') ||
                               n.includes('enriqueta') || n.includes('vivinha') || n.includes('fernanda') || n.includes('juliana') ||
                               n.includes('bruna') || n.includes('camila') || n.includes('bianca') || n.includes('rafaela') ||
                               n.includes('patricia') || n.includes('sandra') || n.includes('marcia') || n.includes('márcia') ||
                               n.includes('rosa') || n.includes('flavia') || n.includes('flávia') || n.includes('vanessa') ||
                               n.includes('vanusa') || n.includes('amelie') || n.includes('amélie') || n.includes('jessica') ||
                               n.includes('jéssica') || n.includes('joyce') || n.includes('ines') || n.includes('inês');
                    };

                    let picked = null;
                    // Busca por locale preferencial e gênero
                    for (const loc of targetLocales) {
                        const langVoices = availVoices.filter(v => v.lang.toLowerCase().startsWith(loc));
                        if (langVoices.length === 0) continue;

                        // 1. Busca por nome e gênero explícito
                        picked = langVoices.find(v => isFemale ? (isFemaleName(v.name) && !isMaleName(v.name)) : (isMaleName(v.name) && !isFemaleName(v.name)));
                        if (picked) break;

                        // 2. Busca por exclusão de gênero oposto
                        picked = langVoices.find(v => isFemale ? !isMaleName(v.name) : !isFemaleName(v.name));
                        if (picked) break;

                        // 3. Pega qualquer uma
                        picked = langVoices[0];
                        break;
                    }

                    // Se não achou com locale exato, tenta idioma geral (prefixo de 2 letras)
                    if (!picked) {
                        const prefix = lang.toLowerCase();
                        const langVoices = availVoices.filter(v => v.lang.toLowerCase().startsWith(prefix));
                        if (langVoices.length > 0) {
                            picked = langVoices.find(v => isFemale ? (isFemaleName(v.name) && !isMaleName(v.name)) : (isMaleName(v.name) && !isFemaleName(v.name)));
                            if (!picked) picked = langVoices.find(v => isFemale ? !isMaleName(v.name) : !isFemaleName(v.name));
                            if (!picked) picked = langVoices[0];
                        }
                    }

                    if (picked) {
                        // Se estamos procurando uma voz feminina (Gaia) mas a voz nativa selecionada é sabidamente masculina,
                        // ou se procuramos uma masculina (Atlas) e a selecionada é sabidamente feminina,
                        // rejeitamos a voz nativa para forçar o fallback para ResponsiveVoice (que tem vozes femininas/masculinas de alta qualidade).
                        const isPickedMale = isMaleName(picked.name);
                        const isPickedFemale = isFemaleName(picked.name);
                        
                        if ((isFemale && isPickedMale && !isPickedFemale) || (!isFemale && isPickedFemale && !isPickedMale)) {
                            console.log('[Zetta Vocal Native Rejected - Gender Mismatch]', picked.name, '| Gênero Gaia:', isFemale ? 'Feminino' : 'Masculino');
                        } else {
                            const targetLocale = (lang === 'en') ? (isFemale ? 'en-US' : 'en-GB') : (lang === 'pt' ? 'pt-BR' : (lang === 'es' ? 'es-ES' : (lang === 'de' ? 'de-DE' : 'ru-RU')));
                            const utt = new SpeechSynthesisUtterance(phrase);
                            utt.voice = picked;
                            utt.lang = targetLocale;
                            utt.pitch = isFemale ? (lang === 'pt' ? 1.45 : 1.25) : 0.72;
                            utt.rate = isFemale ? (lang === 'pt' ? 1.05 : 1.0) : 0.82;
                            utt.onstart = onStart;
                            utt.onend = utt.onerror = onEnd;

                            console.log('[Zetta Vocal Native]', model.toUpperCase(), '→', picked.name, '(', picked.lang, ') | Feminino:', isFemale);
                            window.speechSynthesis.speak(utt);
                            spokeNatively = true;
                        }
                    }
                }
            }

            // Fallback para ResponsiveVoice caso a fala nativa não tenha sido executada
            if (!spokeNatively) {
                if (typeof responsiveVoice !== 'undefined') {
                    const vName = rvVoices[model][lang] || (isFemale ? 'US English Female' : 'UK English Male');
                    console.log('[Zetta Vocal ResponsiveVoice]', model.toUpperCase(), '→', vName, '| Feminino:', isFemale);
                    responsiveVoice.speak(phrase, vName, {
                        pitch:   isFemale ? (lang === 'pt' ? 1.4 : 1.2) : 0.75,
                        rate:    isFemale ? (lang === 'pt' ? 1.05 : 1.0) : 0.82,
                        onstart: onStart,
                        onend:   onEnd,
                        onerror: onEnd
                    });
                } else {
                    onEnd();
                }
            }
        }, 150);
    }
</script>

