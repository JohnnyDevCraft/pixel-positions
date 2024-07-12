<x-layouts.main-layout>
    <x-widget.section-heading>Results</x-widget.section-heading>
    <div class="space-y-6 mt-4">
        @foreach($jobs as $job)
            <x-widget.job-card-wide :job="$job"/>
        @endforeach
    </div>
</x-layouts.main-layout>
