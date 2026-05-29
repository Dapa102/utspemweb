<div class="min-h-screen bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header Section -->
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-4 tracking-tight">
                My <span class="text-blue-600">Showcase</span>
            </h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Discover my skills and the projects I've built. Everything you see here is dynamic.
            </p>
        </div>

        <!-- Skills Section -->
        <div class="mb-16">

            <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                Core Skills
            </h2>
            <div class="flex flex-wrap gap-4">
                @forelse($skills as $skill)
                    <div class="flex items-center space-x-2 bg-white px-5 py-2.5 rounded-full border border-gray-200 shadow-sm hover:shadow-md transition-all hover:-translate-y-1">
                        @if($skill->icon)
                            <!-- Icon dinamis dari admin panel -->
                            <img src="{{ Storage::url($skill->icon) }}" alt="{{ $skill->name }}" class="w-6 h-6 object-contain">
                        @else
                            <!-- Icon default -->
                            <div class="w-6 h-6 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 2a8 8 0 100 16 8 8 0 000-16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                            </div>
                        @endif
                        <span class="text-gray-800 font-semibold">{{ $skill->name }}</span>
                    </div>
                @empty
                    <p class="text-gray-500 italic px-2">No skills added yet. Add some in the admin panel!</p>
                @endforelse
            </div>
        </div>

        <!-- Portfolio/Projects Section -->
        <div>
            <br>
            <h2 class="text-2xl font-bold text-gray-900 mb-6 flex items-center gap-2">
                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                Featured Projects
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($projects as $project)
                    <a href="{{ route('project-detail', $project->slug) }}"
                       class="group block bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden flex flex-col">

                        <!-- Project Image Dynamic -->
                        <div class="w-full h-48 bg-gray-100 overflow-hidden relative">
                            @if($project->design_plan_image)
                                <img src="{{ Storage::url($project->design_plan_image) }}"
                                     alt="{{ $project->title }}"
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            @else
                                <div class="w-full h-full flex items-center justify-center text-gray-400 font-medium">
                                    No Image Provided
                                </div>
                            @endif
                        </div>

                        <!-- Card Content Section -->
                        <div class="p-6 flex-grow">
                            <!-- Status Badge -->
                            <div class="mb-4">
                                @php
                                    $statusColors = [
                                        'planning' => 'bg-gray-100 text-gray-700',
                                        'in_progress' => 'bg-yellow-100 text-yellow-800',
                                        'testing' => 'bg-blue-100 text-blue-800',
                                        'completed' => 'bg-green-100 text-green-800',
                                        'on_hold' => 'bg-red-100 text-red-800'
                                    ];
                                    $colorClass = $statusColors[$project->progress_status] ?? 'bg-gray-100 text-gray-700';
                                @endphp
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold {{ $colorClass }}">
                                    {{ ucfirst(str_replace('_', ' ', $project->progress_status)) }}
                                </span>
                            </div>

                            <!-- Title -->
                            <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">{{ $project->title }}</h3>

                            <!-- Short Description -->
                            <p class="text-gray-600 line-clamp-3 text-sm">{{ $project->short_description }}</p>
                        </div>

                        <!-- Footer with CTA -->
                        <div class="bg-gray-50 px-6 py-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-blue-600 font-semibold text-sm group-hover:underline">
                                View Details
                            </span>
                            <svg class="w-5 h-5 text-blue-600 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-12 bg-white rounded-2xl border border-dashed border-gray-300">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No projects</h3>
                        <p class="mt-1 text-sm text-gray-500">Get started by creating a new project in the admin panel.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
