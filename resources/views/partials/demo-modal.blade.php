<div x-show="demoModalOpen" x-cloak
     class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-md"
     x-transition:enter="transition ease-out duration-200"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-150"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     x-data="{
        submitted: false,
        loading: false,
        form: { name: '', email: '', phone: '', company: '', solution: 'Quality Control' },
        submitForm() {
            this.loading = true;
            fetch('{{ route('demo.store') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').getAttribute('content')
                },
                body: JSON.stringify(this.form)
            })
            .then(res => res.json())
            .then(data => {
                this.loading = false;
                this.submitted = true;
                setTimeout(() => {
                    this.submitted = false;
                    demoModalOpen = false;
                }, 2500);
            })
            .catch(err => {
                this.loading = false;
                this.submitted = true;
                setTimeout(() => {
                    this.submitted = false;
                    demoModalOpen = false;
                }, 2500);
            });
        }
     }">
    <div class="relative w-full max-w-lg bg-white border border-sky-100 rounded-3xl p-6 md:p-8 shadow-2xl shadow-sky-500/15"
         @click.outside="demoModalOpen = false">
        
        <button @click="demoModalOpen = false" class="absolute top-5 right-5 p-2 rounded-full bg-slate-100 text-slate-500 hover:text-slate-900">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <template x-if="submitted">
            <div class="py-12 flex flex-col items-center justify-center text-center space-y-4 font-sans">
                <div class="w-16 h-16 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center animate-bounce">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 font-sans">Demo Request Received!</h3>
                <p class="text-sm text-slate-600 max-w-xs font-sans">
                    Thank you! Our technical team will reach out to you shortly.
                </p>
            </div>
        </template>

        <template x-if="!submitted">
            <div>
                <div class="flex items-center gap-2 text-sky-600 font-bold text-xs uppercase tracking-wider mb-1 font-sans">
                    <svg class="w-4 h-4 text-sky-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    <span>APPAREL INDUSTRY 4.0 AUDIT</span>
                </div>
                <h3 class="text-2xl font-bold text-slate-900 mb-1 font-sans">Schedule Factory Floor Audit</h3>
                <p class="text-xs text-slate-600 mb-5 font-sans">
                    Request an on-site or digital shopfloor audit by our senior Industrial Engineering &amp; IoT technical specialists.
                </p>

                <form @submit.prevent="submitForm()" class="space-y-3 font-sans text-left">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-[11px] font-semibold text-slate-700 mb-1">Full Name *</label>
                            <input type="text" x-model="form.name" required placeholder="e.g. Rajesh Kumar"
                                   class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 text-xs">
                        </div>
                        <div>
                            <label class="block text-[11px] font-semibold text-slate-700 mb-1">Corporate Email *</label>
                            <input type="email" x-model="form.email" required placeholder="name@company.com"
                                   class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 text-xs">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-[11px] font-semibold text-slate-700 mb-1">Phone / WhatsApp Number *</label>
                            <input type="tel" x-model="form.phone" required placeholder="+91 98765 43210"
                                   class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 text-xs">
                        </div>
                        <div>
                            <label class="block text-[11px] font-semibold text-slate-700 mb-1">Company / Factory Name *</label>
                            <input type="text" x-model="form.company" required placeholder="e.g. Apex Exports Ltd"
                                   class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 text-xs">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-[11px] font-semibold text-slate-700 mb-1">Plant Location / City *</label>
                            <input type="text" x-model="form.location" required placeholder="e.g. Tirupur, Bangalore, Dhaka"
                                   class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 text-xs">
                        </div>
                        <div>
                            <label class="block text-[11px] font-semibold text-slate-700 mb-1">Preferred Audit Date</label>
                            <input type="date" x-model="form.audit_date"
                                   class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 focus:outline-none focus:border-sky-500 text-xs">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label class="block text-[11px] font-semibold text-slate-700 mb-1">Active Sewing Machines</label>
                            <select x-model="form.machines" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 focus:outline-none focus:border-sky-500 text-xs">
                                <option value="100-300">100 - 300 Machines</option>
                                <option value="300-800">300 - 800 Machines</option>
                                <option value="800-1500">800 - 1,500 Machines</option>
                                <option value="1500+">1,500+ Machines (Enterprise)</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[11px] font-semibold text-slate-700 mb-1">Primary Product Category</label>
                            <select x-model="form.category" class="w-full px-3.5 py-2.5 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 focus:outline-none focus:border-sky-500 text-xs">
                                <option value="Woven Shirts & Tops">Woven Shirts &amp; Tops</option>
                                <option value="Denim & Bottoms">Denim &amp; Bottoms</option>
                                <option value="Knitwear & T-Shirts">Knitwear &amp; T-Shirts</option>
                                <option value="Outerwear & Jackets">Outerwear &amp; Jackets</option>
                                <option value="Intimates & Activewear">Intimates &amp; Activewear</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label class="block text-[11px] font-semibold text-slate-700 mb-1">Specific Plant Pain Points (Optional)</label>
                        <textarea x-model="form.pain_points" rows="2" placeholder="e.g. High fabric end-bit scrap, WIP bottleneck disputes, sewing machine downtime..."
                                  class="w-full px-3.5 py-2 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 text-xs"></textarea>
                    </div>

                    <button type="submit" :disabled="loading"
                            class="w-full mt-2 flex items-center justify-center gap-2 bg-gradient-to-r from-sky-500 via-blue-600 to-sky-600 hover:from-sky-600 hover:to-blue-700 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-sky-500/20 transition-all text-xs uppercase tracking-wider">
                        <span x-show="!loading">Confirm Factory Audit Request</span>
                        <span x-show="loading" class="animate-spin w-5 h-5 border-2 border-white border-t-transparent rounded-full"></span>
                    </button>
                </form>
            </div>
        </template>
    </div>
</div>
