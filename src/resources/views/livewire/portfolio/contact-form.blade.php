<div>
    <div class="max-w-3xl mx-auto bg-white rounded-3xl overflow-hidden shadow-2xl border border-gray-100">
        <div class="p-10 md:p-14">
            <h1 class="text-4xl font-extrabold text-gray-900 mb-4 text-center">Contact Me</h1>
            <p class="text-xl text-gray-600 mb-8 text-center">Got a question or want to work together? Leave a message.</p>
            
            @if($successMessage)
                <div class="mb-8 p-4 bg-green-50 rounded-xl border border-green-200 flex items-start text-green-800">
                    <svg class="w-6 h-6 mr-3 flex-shrink-0 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="font-medium">{{ $successMessage }}</span>
                </div>
            @endif

            <form wire:submit.prevent="submit" class="space-y-6">
                <div>
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                    <input type="text" id="name" wire:model="name" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50 text-gray-900 transition-colors" placeholder="John Doe">
                    @error('name') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>
                
                <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                    <input type="email" id="email" wire:model="email" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50 text-gray-900 transition-colors" placeholder="john@example.com">
                    @error('email') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                    <textarea id="message" wire:model="message" rows="5" class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50 text-gray-900 transition-colors" placeholder="How can I help you?"></textarea>
                    @error('message') <span class="text-red-500 text-sm mt-1 block font-medium">{{ $message }}</span> @enderror
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-xl shadow-lg hover:shadow-xl transition-all transform hover:-translate-y-1 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <span wire:loading.remove wire:target="submit">Send Message</span>
                        <span wire:loading wire:target="submit" class="flex justify-center items-center">
                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                              <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                              <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Sending...
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
