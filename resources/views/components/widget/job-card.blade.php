@props(['job'])

<div class="p-4 bg-white/5 rounded-xl
flex flex-col text-center border
border-transparent hover:border-blue-600 group
transition-colors duration-300" >
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8">
        <h3 class="font-bold glow-text">{{$job->title}}</h3>
        <p class="text-sm mt-6">{{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-widget.tag size="small" :$tag/>
            @endforeach
        </div>

        <x-widget.employer-logo :employer="$job->employer" :width="42"></x-widget.employer-logo>
    </div>
</div>
