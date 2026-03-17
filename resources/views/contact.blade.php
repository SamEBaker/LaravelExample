<x-layout>
    <x-slot:heading>
        Contact Me
    </x-slot:heading>
    <form method="POST" action="{{ route('contact.send') }}">
        @csrf

        @if(session('success'))
        <div class="bg-green-500 text-white p-3 rounded mb-4">
        {{ session('success') }}
        </div>
        @endif

        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-orange-500">Send me a Message</h2>
                <p class="mt-1 text-sm leading-6 text-gray-400">I will get back to you shortly.</p>

                <div class="mt-10 grid grid-cols-1 gap-y-8">

                    <x-form-field>
                        <x-form-label for="name">Your Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="name" id="name" placeholder="Jane Doe" value="{{ old('name') }}" />
                            <x-form-error name="name" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="email">Your Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="email" id="email" type="email" placeholder="jane.doe@gmail.com" value="{{ old('email') }}" />
                            <x-form-error name="email" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="message">Message</x-form-label>
                        <div class="mt-2">
                            <textarea name="message" id="message" rows="5"
                                class="block w-full rounded-md border-gray-300 shadow-sm focus:border-orange-500 focus:ring-orange-500"
                                placeholder="Tell me about your project...">{{ old('message') }}</textarea>
                            <x-form-error name="message" />
                        </div>
                    </x-form-field>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-white">Cancel</a>
            <x-form-button>Send Message</x-form-button>
        </div>
    </form>
</x-layout>
