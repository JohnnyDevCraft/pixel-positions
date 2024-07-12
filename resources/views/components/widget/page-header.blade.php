<section class="text-center">
    <h1 class="font-bold text-4xl">{{$slot}}</h1>

    @if(isset($extra))
        {{$extra}}
    @endif
</section>
