@props(['job'])

<div class="p-4 bg-white/5 rounded-xl flex flex-row gap-x-6
border
border-transparent hover:border-blue-600 group
transition-colors duration-300" >
    <div>
        <x-widget.employer-logo :width="100" :employer="$job->employer"></x-widget.employer-logo>
    </div>

    <div class="flex-1 flex flex-col justify-between">
        <div class="self-start text-sm text-gray-400">{{$job->employer->name}}</div>

            <h3 class="font-bold mt-3 text-xl glow-text">{{$job->title}}</h3>
            <p class="mt-auto">{{$job->salary}}</p>

    </div>


    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($job->tags as $tag)
                <x-widget.tag size="small" :$tag/>
            @endforeach
        </div>
    </div>
</div>
