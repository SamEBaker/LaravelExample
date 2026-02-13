<x-layout>
    <x-slot:heading>
        Request Estimate
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-white">Create a New Request</h2>
                <p class="mt-1 text-sm leading-6 text-white">We just need a handful of details from you.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="title">Description</x-form-label>

                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="Black paver boarder along 15'x15' turf..." />

                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for="salary">Budget</x-form-label>

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
