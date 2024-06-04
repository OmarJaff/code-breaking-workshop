@props(['message','letters'])

 <div class="flex gap-8 print:gap-4 flex-wrap print:mt-auto">
    @foreach(explode(' ', $message) as $word)
        <div class="word gap-x-1 flex justify-center">
            @foreach(str_split($word) as $character)
                <div class="flex flex-col items-center">
               <x-material-font>
                {{$this->letters[strtolower($character)] ?? $character }}
               </x-material-font>
                <div class="bg-gray-200 print:bg-gray-950 print:border-4 print:border-black/80 h-12 w-12 rounded-lg mt-1">

                </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>

