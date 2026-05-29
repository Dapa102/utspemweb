<div class="min-h-screen relative overflow-hidden bg-white">
        <!-- Hero Section Background -->
    <div class="absolute inset-0 z-0">
        <div class="absolute inset-0 bg-gradient-to-br from-blue-50 via-white to-slate-50 opacity-90"></div>
        <!-- Lingkaran warna/blob telah dihilangkan agar tampak bersih -->
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 pt-20 pb-32">
        <div class="text-center font-outfit">
            <h1 class="text-5xl md:text-7xl font-extrabold text-slate-800 mb-6 tracking-tight font-space-grotesk">
                Hi, I'm <br class="md:hidden" />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500 animate-gradient">
                    A Developer
                </span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-600 mb-10 max-w-2xl mx-auto font-light leading-relaxed">
                Crafting robust admin panels and secure digital solutions with Laravel, Docker, and a security-first mindset
            <div class="flex justify-center gap-4">
                <a href="/showcase" wire:navigate class="px-8 py-4 bg-slate-900 text-white font-semibold rounded-full hover:bg-slate-800 hover:shadow-xl hover:-translate-y-1 transition duration-300 transform ring-2 ring-transparent hover:ring-slate-500 ring-offset-2">
                    View My Work
                </a>
                <a href="/contact" wire:navigate class="px-8 py-4 bg-white text-slate-900 font-semibold rounded-full hover:bg-slate-50 shadow-sm border border-slate-200 hover:shadow-md transition duration-300 ring-2 ring-transparent hover:ring-slate-200 ring-offset-1">
                    Contact Me
                </a>
            </div>
        </div>

        <div class="mt-32 max-w-5xl mx-auto">

            <!-- Dinamis Foto Header Profil -->
            <div class="mb-16 flex justify-center">
                @if($profile->photo)
                    <div class="w-40 h-40 md:w-48 md:h-48 rounded-full overflow-hidden shadow-2xl border-4 border-white transform hover:scale-105 transition duration-500">
                        <img src="{{ Storage::url($profile->photo) }}" alt="My Profile Photo" class="w-full h-full object-cover">
                    </div>
                @else
                    <div class="w-40 h-40 md:w-48 md:h-48 rounded-full overflow-hidden shadow-2xl border-4 border-white bg-slate-100 flex items-center justify-center text-slate-400 mb-8 transform hover:scale-105 transition duration-500">
                        <svg class="w-20 h-20" fill="currentColor" viewBox="0 0 24 24"><path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" /></svg>
                    </div>
                @endif
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 backdrop-blur-sm bg-white/60 p-10 rounded-3xl border border-white shadow-xl">
                <!-- Tentang Saya dinamis dari Database -->
                <div class="font-outfit">
                    <h2 class="text-3xl font-extrabold text-slate-800 mb-6 font-space-grotesk tracking-tight flex items-center gap-3">
                        <span class="p-2 bg-blue-100/50 rounded-lg text-blue-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        </span>
                        About Me
                    </h2>
                    <div class="prose prose-lg text-slate-600 leading-relaxed space-y-4 text-justify">
                        @if($profile->about_me)
                            {!! nl2br(e($profile->about_me)) !!}
                        @else
                            <p class="italic text-slate-400">Profile description hasn't been added yet.</p>
                        @endif
                    </div>
                </div>

                <!-- Bagian Tech Stack (Dinamis juga) -->
                <div class="font-outfit">
                    <h2 class="text-3xl font-extrabold text-slate-800 mb-6 font-space-grotesk tracking-tight flex items-center gap-3">
                        <span class="p-2 bg-purple-100/50 rounded-lg text-purple-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </span>
                        Tech Stack
                    </h2>
                    <div class="flex flex-wrap gap-3">
                        @if($profile->tech_stack && count($profile->tech_stack) > 0)
                            @php
                                $colors = [
                                    'bg-red-50 text-red-600 border border-red-100',
                                    'bg-yellow-50 text-yellow-600 border border-yellow-100',
                                    'bg-blue-50 text-blue-600 border border-blue-100',
                                    'bg-cyan-50 text-cyan-600 border border-cyan-100',
                                    'bg-emerald-50 text-emerald-600 border border-emerald-100',
                                    'bg-purple-50 text-purple-600 border border-purple-100',
                                    'bg-fuchsia-50 text-fuchsia-600 border border-fuchsia-100'
                                ];
                            @endphp

                            @foreach($profile->tech_stack as $index => $stack)
                                @php $color = $colors[$index % count($colors)]; @endphp
                                <span class="px-5 py-2.5 {{ $color }} font-semibold text-sm rounded-xl shadow-sm hover:shadow-md transition duration-300 transform hover:-translate-y-1">
                                    {{ $stack }}
                                </span>
                            @endforeach
                        @else
                            <p class="text-slate-400 italic">No tech stack added.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
