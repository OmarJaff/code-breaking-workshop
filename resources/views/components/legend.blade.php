@props(['letters'])

<div class="flex flex-wrap mt-auto">
    @foreach($letters as $letter => $symbol )
        <div class="flex flex-col items-center border border-white/10 p-4 gap-y-2 hover:bg-blue-950 transition-colors duration-200">
        <span>{{strtoupper($letter)}}</span>
        <x-material-font> {{$symbol}}</x-material-font>
        </div>

    @endforeach
</div>
