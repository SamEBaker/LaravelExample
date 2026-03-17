<form method="POST" action="{{ route('jobs.update', $job) }}">
    @csrf
    @method('PATCH')

    <!-- Title Field -->
    <div class="mb-4">
        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
        <input id="title" name="title" value="{{ old('title', $job->title) }}" required
               class="mt-1 block w-full border rounded-md shadow-sm p-2">
    </div>

    <!-- Description Field -->
    <div class="mb-4">
        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
        <textarea id="description" name="description" rows="4"
                  class="mt-1 block w-full border rounded-md shadow-sm p-2">{{ old('description', $job->description) }}</textarea>
    </div>

    <!-- Image Field -->
    <div class="mb-4">
        <label for="image" class="block text-sm font-medium text-gray-700">Image filename</label>
        <input id="image" name="image" value="{{ old('image', $job->image) }}"
               class="mt-1 block w-full border rounded-md shadow-sm p-2">
        <p class="text-xs text-gray-500 mt-1">Use the filename of the image in your /images/jobs folder.</p>
    </div>

    <!-- Update Button -->
    <button type="submit"
            class="rounded bg-orange-500 text-white px-4 py-2 hover:bg-orange-600">
        Update
    </button>
</form>

<!-- Delete Button -->
<form method="POST" action="{{ route('jobs.destroy', $job) }}" id="delete-form" class="hidden">
    @csrf
    @method('DELETE')
</form>
<button form="delete-form" onclick="return confirm('Are you sure?')"
        class="text-red-500 mt-2">
    Delete
</button>
    <x-button href="{{ url()->previous() }}">
        &larr; Back
    </x-button>
