<div class="w-full flex flex-col items-center mt-6">
    <form action="">
        <textarea autofocus placeholder="write your message..." wire:model.live="message" class="rounded-lg bg-white/20 text-white text-lg p-4"  name="" id="" cols="30" rows="10"></textarea>
    </form>
    <x-code :message="$message" :letters="$this->letters"></x-code>

</div>
