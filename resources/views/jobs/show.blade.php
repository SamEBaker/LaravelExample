<x-layout>
    <x-slot:heading>
        {{ $job->title }} Job Info
    </x-slot:heading>

    <div class="max-w-3xl space-y-6">

        <div>
            <div class="text-sm text-gray-500 uppercase tracking-wide">
                {{ $job->employer->name }}
            </div>

            <h2 class="font-bold text-2xl">
                {{ $job->title }}
            </h2>
        </div>
        <img 
            src="{{ asset('images/jobs/' . ($job->image ?? 'default.jpg')) }}"
            class="w-full rounded-2xl shadow"
        />

        <p class="text-gray-700 leading-relaxed">
            {{ $job->description }}
        </p>

        @if($job->salary)
            <div class="text-indigo-600 font-semibold">
                Salary: {{ $job->salary }}
            </div>
        @endif

        @can('edit', $job)
            <div class="pt-4">
                <x-button href="{{ route('jobs.edit', $job) }}">
                    Edit Job
                </x-button>
            </div>
        @endcan
        <div class="mb-4">
    <x-button href="{{ url()->previous() }}">
        &larr; Back
    </x-button>
</div>
    </div>
</x-layout>
