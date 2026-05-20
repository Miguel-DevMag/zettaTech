<!-- Seção de Reserva de Unidades (Estilo Apple / Tesla Minimalist) -->
<section id="reserva" class="py-32 px-6 lg:px-12 relative z-10 pointer-events-auto bg-[#06080D] border-t border-white/5 overflow-hidden scroll-mt-28">
    
    <!-- Background Grid Elements & Vignette -->
    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-[0.01] pointer-events-none"></div>
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full h-1/2 bg-gradient-to-t from-[#00E5FF]/5 to-transparent pointer-events-none"></div>

    <div class="max-w-4xl mx-auto text-center relative z-10" data-aos="fade-up" data-aos-duration="1400">
        
        <!-- Header da Seção -->
        <h2 class="text-4xl md:text-6xl font-black text-white tracking-tight mb-8 uppercase" data-translate="enc-title">
            Inicie sua <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#00E5FF] to-blue-600 drop-shadow-[0_0_20px_rgba(0,229,255,0.25)]">Reserva.</span>
        </h2>
        <p class="text-base md:text-lg text-gray-400 mb-16 font-light max-w-xl mx-auto leading-relaxed" data-translate="enc-desc">
            Lotes iniciais de produção limitados. Garanta prioridade na fila de entrega do seu modelo Zetta. Nenhum pagamento é exigido nesta fase preliminar.
        </p>
        
        <!-- Form Container Glassmorphic -->
        <div class="bg-white/[0.01] border border-white/10 rounded-[2rem] p-8 md:p-12 backdrop-blur-xl shadow-2xl relative overflow-hidden text-left max-w-2xl mx-auto">
            <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-[#00E5FF]/40 to-transparent"></div>
            
            <form class="flex flex-col gap-8">
                
                <!-- Seleção do Modelo -->
                <div>
                    <label class="block text-[9px] uppercase tracking-[0.25em] text-[#00E5FF] mb-3 ml-1 font-bold" data-translate="enc-form-select-title">Plataforma de Interesse</label>
                    <div class="relative">
                        <select class="w-full bg-black/40 border border-white/10 text-white px-6 py-5 rounded-xl focus:outline-none focus:border-[#00E5FF]/50 focus:ring-1 focus:ring-[#00E5FF]/50 transition-all appearance-none cursor-pointer backdrop-blur-md text-sm font-light font-sans" required>
                            <option value="" disabled selected class="bg-[#0B0F19]" data-translate="enc-form-select-placeholder">Selecione o Modelo Humanoide</option>
                            <option value="atlas" class="bg-[#0B0F19] text-white" data-translate="enc-form-select-opt1">Zetta Atlas (Operações B2B / Industrial)</option>
                            <option value="gaia" class="bg-[#0B0F19] text-white" data-translate="enc-form-select-opt2">Zetta Gaia (Assistência B2C / Residencial)</option>
                        </select>
                        <!-- Custom Seta -->
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-6 text-gray-400">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                </div>

                <!-- Campos de Dados Simples e Limpos -->
                <div>
                    <label class="block text-[9px] uppercase tracking-[0.25em] text-[#00E5FF] mb-3 ml-1 font-bold" data-translate="enc-form-label-data">Dados Cadastrais</label>
                    
                    <div class="flex flex-col gap-5">
                        <input type="text" placeholder="Nome Completo ou Razão Social" data-translate="enc-form-input-name" class="w-full bg-black/40 border border-white/10 text-white px-6 py-5 rounded-xl focus:outline-none focus:border-[#00E5FF]/50 focus:ring-1 focus:ring-[#00E5FF]/50 transition-all backdrop-blur-md text-sm font-light" required>
                        <input type="email" placeholder="E-mail Corporativo ou Pessoal" data-translate="enc-form-input-email" class="w-full bg-black/40 border border-white/10 text-white px-6 py-5 rounded-xl focus:outline-none focus:border-[#00E5FF]/50 focus:ring-1 focus:ring-[#00E5FF]/50 transition-all backdrop-blur-md text-sm font-light" required>
                    </div>
                </div>

                <!-- Botão de Ação Minimalista Elegante -->
                <button type="button" data-translate="enc-form-btn" class="w-full bg-white hover:bg-gradient-to-r hover:from-[#00E5FF] hover:to-blue-600 hover:text-white text-[#0B0F19] font-black uppercase tracking-[0.25em] px-6 py-5.5 rounded-xl hover:shadow-[0_0_40px_rgba(0,229,255,0.3)] transition-all duration-500 transform hover:-translate-y-0.5 mt-4 text-xs">
                    Confirmar Reserva Sem Custo
                </button>
            </form>
        </div>
        
        <p class="mt-10 text-[9px] text-gray-500 tracking-[0.2em] uppercase font-semibold" data-translate="enc-footer">Prioridade definida por ordem de registro.</p>
    </div>
</section>
