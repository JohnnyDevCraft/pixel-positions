<x-layouts.main-layout>
    <div class="space-y-10">

        <x-widget.page-header>
            Let's Find You A Great Job
            <x-slot:extra>
                <x-forms.form action="/search/jobs" method="POST" class="mt-6">
                    <x-forms.input :label="false" name="q" placeholder="Web Developer..."/>
                </x-forms.form>
            </x-slot:extra>
        </x-widget.page-header>


        <section>
            <x-widget.section-heading>Featured Jobs</x-widget.section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                @foreach($featuredJobs as $job)
                    <x-widget.job-card :$job/>
                @endforeach
            </div>
        </section>
        <section>
            <x-widget.section-heading>Tags</x-widget.section-heading>

            <div class="mt-6 space-x-1">
                @foreach($tags as $tag)
                    <x-widget.tag :$tag/>
                @endforeach


            </div>
        </section>
        <section>
            <x-widget.section-heading>Recent Jobs</x-widget.section-heading>
            <div class="mt-6 space-y-2">
                @foreach($jobs as $job)
                    <x-widget.job-card-wide :$job/>
                @endforeach
            </div>
        </section>
    </div>
</x-layouts.main-layout>
