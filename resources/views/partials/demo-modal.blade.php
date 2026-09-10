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
                <div class="flex items-center gap-2 text-sky-600 font-semibold text-xs uppercase tracking-wider mb-2 font-sans">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    <span>Schedule Personal Walkthrough</span>
                </div>
                <h3 class="text-2xl font-bold text-sky-600 mb-2 font-sans">Book a Live 3D Demo</h3>
                <p class="text-sm text-slate-900 mb-6 font-sans">
                    Discover how Track Tech Solution can optimize your garment manufacturing facility in real time.
                </p>

                <form @submit.prevent="submitForm()" class="space-y-4 font-sans">
                    <div>
                        <label class="block text-xs font-medium text-slate-700 mb-1">Full Name</label>
                        <input type="text" x-model="form.name" required placeholder="e.g. Rahul Sharma"
                               class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 text-sm">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-xs font-medium text-slate-700 mb-1">Phone Number</label>
                            <input type="tel" x-model="form.phone" required placeholder="+91 98765 43210"
                                   class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 text-sm">
                        </div>
                        <div>
                            <label class="block text-xs font-medium text-slate-700 mb-1">Work Email</label>
                            <input type="email" x-model="form.email" required placeholder="name@company.com"
                                   class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 text-sm">
                        </div>
                    </div>

                    <div>
                        <label class="block text-xs font-medium text-slate-700 mb-1">Company / Factory Name</label>
                        <input type="text" x-model="form.company" placeholder="e.g. Apex Apparels Ltd"
                               class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:border-sky-500 text-sm">
                    </div>

                    <div>
                        <label class="block text-xs font-medium text-slate-700 mb-1">Primary Interest</label>
                        <select x-model="form.solution" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 focus:outline-none focus:border-sky-500 text-sm">
                            <option value="Quality Control">Quality Control AI</option>
                            <option value="Production Tracking">Real-Time Production Tracking</option>
                            <option value="Machine Maintenance">Machine Maintenance (OEE)</option>
                            <option value="Production Planning">Production Planning & Scheduling</option>
                        </select>
                    </div>

                    <button type="submit" :disabled="loading"
                            class="w-full mt-2 flex items-center justify-center gap-2 bg-gradient-to-r from-sky-500 to-blue-600 hover:from-sky-600 hover:to-blue-700 text-white font-medium py-3.5 rounded-xl shadow-lg shadow-sky-500/20 transition-all text-sm">
                        <span x-show="!loading">Submit Demo Request</span>
                        <span x-show="loading" class="animate-spin w-5 h-5 border-2 border-white border-t-transparent rounded-full"></span>
                    </button>
                </form>
            </div>
        </template>
    </div>
</div>
