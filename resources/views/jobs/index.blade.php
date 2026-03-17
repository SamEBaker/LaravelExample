<x-layout>
    <x-slot:heading>
        Previous Jobs
    </x-slot:heading>
<div class="grid md:grid-cols-3 gap-6">
    @foreach ($jobs as $job)

        <a href="/jobs/{{$job['id'] }}"
           class="flex items-center gap-4 p-4 bg-gray-900 rounded-2xl shadow hover:shadow-xl transition group">

            <img 
                src="{{ asset('images/jobs/' . ($job->image ?? 'default.jpg')) }}"
                class="w-16 h-16 object-cover rounded-xl group-hover:scale-105 transition"
            />

            <div>
                <div class="text-xs text-gray-400 uppercase tracking-wide">
                    {{ $job->employer->name }}
                </div>

                <h3 class="text-lg font-bold group-hover:text-orange-500">
                    {{ $job->title }}
                </h3>
            </div>

        </a>

    @endforeach
</div>

<div class="mt-6">
    {{ $jobs->links() }}
</div>

</x-layout>
