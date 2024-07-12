<x-layouts.main-layout>
    <div class="space-y-10">
        <section class="text-center">
            <h1 class="font-bold text-4xl">Let's Find You A Great Job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..."
                       class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl
                       focus:border-blue-600/60
                       transition-colors duration-300" >
            </form>


        </section>
        <section>
            <x-widget.section-heading>Featured Jobs</x-widget.section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-widget.job-card/>
                <x-widget.job-card/>
                <x-widget.job-card/>
            </div>
        </section>
        <section>
            <x-widget.section-heading>Tags</x-widget.section-heading>

            <div class="mt-6 space-x-1">
                <x-widget.tag>Tag</x-widget.tag>
                <x-widget.tag>Tag</x-widget.tag>
                <x-widget.tag>Tag</x-widget.tag>
                <x-widget.tag>Tag</x-widget.tag>
                <x-widget.tag>Tag</x-widget.tag>
                <x-widget.tag>Tag</x-widget.tag>
                <x-widget.tag>Tag</x-widget.tag>
                <x-widget.tag>Tag</x-widget.tag>
                <x-widget.tag>Tag</x-widget.tag>
            </div>
        </section>
        <section>
            <x-widget.section-heading>Recent Jobs</x-widget.section-heading>
            <div class="mt-6 space-y-2">
                <x-widget.job-card-wide></x-widget.job-card-wide>
                <x-widget.job-card-wide></x-widget.job-card-wide>
                <x-widget.job-card-wide></x-widget.job-card-wide>
                <x-widget.job-card-wide></x-widget.job-card-wide>
                <x-widget.job-card-wide></x-widget.job-card-wide>
                <x-widget.job-card-wide></x-widget.job-card-wide>
            </div>
        </section>
    </div>
</x-layouts.main-layout>
