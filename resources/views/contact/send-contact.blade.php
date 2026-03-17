<x-layout>
    <x-slot:heading>
        Send Message 
    </x-slot:heading>

    <form method="POST" action="/contact">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-white">Send me a Message</h2>
                <p class="mt-1 text-sm leading-6 text-white">I will get back to you shortly.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Email</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="jane.doe@gmail.com..." />

                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Message</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="salary" id="salary" placeholder="$50,000 USD" />

                            <x-form-error name="salary" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm font-semibold leading-6 text-white">Cancel</button>
            <x-form-button>Save</x-form-button>
        </div>
    </form>
</x-layout>
