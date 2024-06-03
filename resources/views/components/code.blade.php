@props(['message','letters'])
<div class="text-white mt-8 flex gap-8">
    @foreach(explode(' ', $message) as $word)
        <div class="word">
            @foreach(str_split($word) as $character)
                <span class="material-symbols-outlined character">
                {{$this->letters[strtolower($character)] ?? $character }}
            </span>
            @endforeach
        </div>
    @endforeach
</div>
