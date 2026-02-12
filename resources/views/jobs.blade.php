<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href='/jobs/'>
                    <strong>{{ $job['title'] }}</strong>: Pays <strong>{{$job['salary']}}</strong> per year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
