<div class="flex flex-col flex-1 items-center gap-10 my-8">
    <form action="">
        <textarea autofocus placeholder="write your message..." wire:model.live="message" class="rounded-lg bg-white/80 border border-white text-primary text-lg p-4"  name="" id="" cols="30" rows="10"></textarea>
    </form>
    <x-code :message="$message" :letters="$this->letters" />
    <x-legend :letters="$this->letters" />
</div>
