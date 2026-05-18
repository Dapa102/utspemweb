<div>
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Project Showcase</h1>
        <p class="text-xl text-gray-600">A collection of things I've built and am currently working on.</p>
    </div>

    @if($projects->isEmpty())
        <div class="text-center py-10 bg-white rounded-xl shadow-sm border border-gray-100">
            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
            </svg>
            <h3 class="mt-2 text-sm font-semibold text-gray-900">No projects</h3>
            <p class="mt-1 text-sm text-gray-500">Get started by creating a new project in the admin panel.</p>
        </div>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 text-left">
            @foreach($projects as $project)
                <a href="{{ route('project-detail', $project->slug) }}" class="group block bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden border border-gray-100 flex flex-col h-full">
                    <div class="p-8 flex-grow">
                        <div class="flex items-center justify-between mb-4">
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium 
                                @if($project->progress_status == 'completed') bg-green-100 text-green-800 
                                @elseif($project->progress_status == 'in_progress') bg-blue-100 text-blue-800 
                                @elseif($project->progress_status == 'testing') bg-yellow-100 text-yellow-800 
                                @else bg-gray-100 text-gray-800 
                                @endif">
                                {{ ucfirst(str_replace('_', ' ', $project->progress_status)) }}
                            </span>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors">{{ $project->title }}</h3>
                        <p class="text-gray-600 line-clamp-3 leading-relaxed">{{ $project->short_description }}</p>
                    </div>
                    <div class="bg-gray-50 px-8 py-4 mt-auto border-t border-gray-100">
                        <span class="text-blue-600 font-semibold text-sm group-hover:underline flex items-center">
                            View Details 
                            <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </span>
                    </div>
                </a>
            @endforeach
        </div>
    @endif
</div>
