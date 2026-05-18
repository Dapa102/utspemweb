<div>
    <div class="mb-8">
        <a href="{{ route('showcase') }}" class="text-blue-600 hover:underline flex items-center mb-6">
            <svg class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Showcase
        </a>

        <div class="flex items-center space-x-4 mb-4">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900">{{ $project->title }}</h1>
            <span class="px-4 py-1 rounded-full text-sm font-semibold
                @if($project->progress_status == 'completed') bg-green-100 text-green-800 
                @elseif($project->progress_status == 'in_progress') bg-blue-100 text-blue-800 
                @elseif($project->progress_status == 'testing') bg-yellow-100 text-yellow-800 
                @else bg-gray-100 text-gray-800 
                @endif">
                {{ ucfirst(str_replace('_', ' ', $project->progress_status)) }}
            </span>
        </div>
        
        <p class="text-xl text-gray-600">{{ $project->short_description }}</p>
    </div>

    <!-- Content Split -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
        <div class="lg:col-span-2 space-y-12">
            
            @if($project->problem_analysis)
            <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-900 mb-4 border-b pb-2">Analisis Masalah</h2>
                <div class="prose max-w-none text-gray-700">
                    {!! $project->problem_analysis !!}
                </div>
            </section>
            @endif

            @if($project->system_requirements)
            <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-900 mb-4 border-b pb-2">Kebutuhan Sistem</h2>
                <div class="prose max-w-none text-gray-700">
                    {!! $project->system_requirements !!}
                </div>
            </section>
            @endif

            @if($project->design_plan_image)
            <section class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-900 mb-4 border-b pb-2">Rencana Perancangan (ERD / Flowchart)</h2>
                <div class="mt-4 border rounded-xl overflow-hidden bg-gray-50 flex justify-center p-4">
                    <img src="{{ Storage::url($project->design_plan_image) }}" alt="Design Diagram" class="max-w-full h-auto rounded shadow-sm">
                </div>
            </section>
            @endif
            
        </div>

        <!-- Sidebar -->
        <div class="space-y-8">
            @if($project->architecture)
            <div class="bg-blue-50 p-6 rounded-2xl border border-blue-100">
                <h3 class="text-lg font-bold text-blue-900 mb-2">Architecture</h3>
                <p class="text-blue-800 whitespace-pre-wrap">{{ $project->architecture }}</p>
            </div>
            @endif

            @if($project->tech_stack)
            <div class="bg-gray-50 p-6 rounded-2xl border border-gray-200">
                <h3 class="text-lg font-bold text-gray-900 mb-2">Tech Stack</h3>
                <p class="text-gray-700 whitespace-pre-wrap">{{ $project->tech_stack }}</p>
            </div>
            @endif
        </div>
    </div>
</div>
