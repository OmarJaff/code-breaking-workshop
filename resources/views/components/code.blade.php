@props(['message','letters'])

 <div class="text-white flex gap-8 ">
    @foreach(explode(' ', $message) as $word)
        <div class="word">
            @foreach(str_split($word) as $character)
               <x-material-font>
                {{$this->letters[strtolower($character)] ?? $character }}
               </x-material-font>
            @endforeach
        </div>
    @endforeach
</div>

