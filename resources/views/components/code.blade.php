@props(['message','letters'])

 <div class="text-white flex gap-8 flex-wrap">
    @foreach(explode(' ', $message) as $word)
        <div class="word  gap-x-1 flex justify-center">
            @foreach(str_split($word) as $character)
                <div class="flex flex-col items-center">
               <x-material-font>
                {{$this->letters[strtolower($character)] ?? $character }}
               </x-material-font>
                <div class="bg-gray-200 h-12 w-12 rounded-lg mt-1">

                </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>

