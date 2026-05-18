<div>
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 rounded-3xl p-10 md:p-20 text-white shadow-2xl relative overflow-hidden">
        <div class="relative z-10">
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-4">
                Hi, I'm <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-300 to-yellow-300">Junior Developer</span>
            </h1>
            <p class="text-xl md:text-2xl font-light mb-8 max-w-2xl">
                I build robust and scalable web applications using modern technologies. Passionate about coding and creating amazing user experiences.
            </p>
            <div class="flex space-x-4">
                <a href="{{ route('showcase') }}" class="bg-white text-blue-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition shadow">View Projects</a>
                <a href="{{ route('contact') }}" class="bg-transparent border border-white px-8 py-3 rounded-full font-semibold hover:bg-white hover:text-blue-600 transition shadow">Contact Me</a>
            </div>
        </div>
        <div class="absolute -right-20 -top-20 opacity-20 pointer-events-none">
            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
              <path fill="#FFFFFF" d="M45.7,-76.3C58.9,-69.1,69.1,-55.8,77.5,-41.8C85.9,-27.8,92.5,-13.9,91.8,-0.4C91.1,13.1,83,26.2,74.7,40.1C66.4,54,58,68.7,45,76C32,83.3,16,83.3,0.3,82.8C-15.4,82.3,-30.8,81.3,-43.3,73.8C-55.8,66.3,-65.4,52.3,-73.2,37.6C-81,22.9,-87,7.5,-86.6,-7.7C-86.2,-22.9,-79.4,-37.9,-69.2,-49.4C-59,-60.9,-45.4,-68.9,-32,-75.7C-18.6,-82.5,-9.3,-88,3.2,-93.6C15.7,-99.2,32.5,-83.5,45.7,-76.3Z" transform="translate(100 100)" />
            </svg>
        </div>
    </div>

    <!-- About & Stack Section -->
    <div class="mt-20 grid grid-cols-1 md:grid-cols-2 gap-16">
        <div>
            <h2 class="text-3xl font-bold mb-6 text-gray-800">About Me</h2>
            <p class="text-gray-600 mb-4 leading-relaxed text-lg">
                I'm a dedicated web developer focused on backend architectures, API developments, and dynamic frontend experiences. My journey started with a curiosity for how things work on the internet, and today I specialize in writing clean, maintainable code.
            </p>
            <p class="text-gray-600 leading-relaxed text-lg">
                I'm constantly learning new patterns and architectural systems. In this portfolio, you can sneak a peek at my latest Final Project report using Filament and Livewire.
            </p>
        </div>
        <div>
            <h2 class="text-3xl font-bold mb-6 text-gray-800">Tech Stack</h2>
            <div class="flex flex-wrap gap-4">
                <span class="px-4 py-2 bg-red-100 text-red-700 font-semibold rounded-lg shadow-sm">Laravel</span>
                <span class="px-4 py-2 bg-yellow-100 text-yellow-700 font-semibold rounded-lg shadow-sm">Filament v3</span>
                <span class="px-4 py-2 bg-blue-100 text-blue-700 font-semibold rounded-lg shadow-sm">Livewire</span>
                <span class="px-4 py-2 bg-gray-100 text-gray-700 font-semibold rounded-lg shadow-sm">MariaDB</span>
                <span class="px-4 py-2 bg-cyan-100 text-cyan-700 font-semibold rounded-lg shadow-sm">Tailwind CSS</span>
                <span class="px-4 py-2 bg-blue-50 text-blue-800 font-semibold rounded-lg shadow-sm">Docker</span>
            </div>
        </div>
    </div>
</div>
