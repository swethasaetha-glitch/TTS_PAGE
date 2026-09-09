@extends('layouts.app')

@section('title', 'Contact Us - Track Tech Solution')

@section('content')
<div class="pt-32 pb-24 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto space-y-16">
    <div class="text-center space-y-4 max-w-2xl mx-auto">
        <span class="text-xs font-semibold uppercase tracking-wider text-sky-700 px-4 py-1.5 rounded-full bg-sky-100 border border-sky-200 inline-block font-serif">
            Get In Touch
        </span>
        <h1 class="text-4xl sm:text-5xl font-bold text-sky-600 font-serif tracking-tight leading-tight">
            Let's Digitize Your Factory
        </h1>
        <p class="text-slate-900 font-serif text-base sm:text-lg">
            Have questions about Track Tech Solution? Reach out to our technical team for a personalized discussion.
        </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        <div class="lg:col-span-5 space-y-8 p-8 rounded-3xl bg-white border border-sky-200 shadow-xl">
            <h3 class="text-2xl font-bold text-sky-600 font-serif">Direct Contact</h3>

            <div class="space-y-6 text-sm text-slate-900 font-serif">
                <div class="flex items-start gap-4">
                    <div class="p-3 rounded-2xl bg-sky-100 text-sky-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    </div>
                    <div>
                        <div class="font-semibold text-slate-900 font-serif">Phone Support</div>
                        <a href="tel:+917868925566" class="text-sky-600 font-bold hover:underline font-serif">+91 78689 25566</a>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="p-3 rounded-2xl bg-sky-100 text-sky-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    </div>
                    <div>
                        <div class="font-semibold text-slate-900 font-serif">Email Address</div>
                        <a href="mailto:info@tracktechsolutions.com" class="text-sky-600 font-bold hover:underline font-serif">info@tracktechsolutions.com</a>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="p-3 rounded-2xl bg-sky-100 text-sky-600 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <div>
                        <div class="font-semibold text-slate-900 font-serif">Headquarters</div>
                        <div class="text-slate-700 text-sm font-serif">Track Tech Solution HQ, Manufacturing Technology Corridor</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-7 p-8 rounded-3xl bg-white border border-sky-200 shadow-xl space-y-6">
            <h3 class="text-2xl font-bold text-sky-600 font-serif">Send Us a Message</h3>

            <form action="{{ route('demo.store') }}" method="POST" class="space-y-4" @submit.prevent="
                fetch('{{ route('demo.store') }}', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    body: JSON.stringify({ name: $refs.name.value, email: $refs.email.value, phone: $refs.phone.value, message: $refs.message.value })
                }).then(r => r.json()).then(d => alert(d.message));
            ">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-900 mb-1 font-serif">Full Name</label>
                        <input x-ref="name" type="text" required placeholder="John Doe" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder:text-slate-400 focus:outline-none focus:border-sky-500 text-sm font-serif">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-900 mb-1 font-serif">Phone Number</label>
                        <input x-ref="phone" type="tel" required placeholder="+91 98765 43210" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder:text-slate-400 focus:outline-none focus:border-sky-500 text-sm font-serif">
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-900 mb-1 font-serif">Work Email</label>
                    <input x-ref="email" type="email" required placeholder="john@company.com" class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder:text-slate-400 focus:outline-none focus:border-sky-500 text-sm font-serif">
                </div>

                <div>
                    <label class="block text-xs font-semibold text-slate-900 mb-1 font-serif">Message</label>
                    <textarea x-ref="message" rows="4" placeholder="Tell us about your factory lines..." class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder:text-slate-400 focus:outline-none focus:border-sky-500 text-sm font-serif"></textarea>
                </div>

                <button type="submit" class="bg-gradient-to-r from-sky-500 via-blue-600 to-sky-600 hover:from-sky-600 hover:to-blue-700 text-white font-medium text-base px-9 py-4 rounded-full shadow-lg shadow-sky-500/25 hover:shadow-sky-500/40 hover:scale-105 transition-all">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
