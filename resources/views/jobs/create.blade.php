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

                    <!-- Title / Description -->
                    <x-form-field class="sm:col-span-6">
                        <x-form-label for="title">Title / Short Description</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id="title" placeholder="Black paver border along 15'x15' turf..." value="{{ old('title') }}" />
                            <x-form-error name="title" />
                        </div>
                    </x-form-field>

                    <!-- Full Description -->
                    <x-form-field class="sm:col-span-6">
                        <x-form-label for="description">Full Description</x-form-label>
                        <div class="mt-2">
                            <textarea name="description" id="description" rows="4" placeholder="Add more details here..." class="mt-1 block w-full border rounded-md shadow-sm p-2">{{ old('description') }}</textarea>
                            <x-form-error name="description" />
                        </div>
                    </x-form-field>

                    <!-- Optional Image filename -->
                    <x-form-field class="sm:col-span-6">
                        <x-form-label for="image">Image Filename (optional)</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="image" id="image" placeholder="example.jpg" value="{{ old('image') }}" />
                            <x-form-error name="image" />
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
