<div class="w-full flex flex-col items-center mt-6">
    <form action="">
        <textarea autofocus placeholder="write your message..." wire:model.live="message" class="rounded-lg bg-white/20 text-white text-lg p-4"  name="" id="" cols="30" rows="10"></textarea>
    </form>
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

</div>
