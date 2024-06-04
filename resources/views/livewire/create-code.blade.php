<div class="flex flex-col flex-1 items-center gap-10 my-8">
    <form action="" class="print:hidden flex flex-col space-y-4">
        <textarea autofocus placeholder="write your message..." wire:model.live="message" class="rounded-lg bg-white/80 border border-white text-primary text-lg p-4"  name="" id="" cols="30" rows="10"></textarea>
        <button type="button" @disabled(!$message) class="py-2 px-4 bg-primary border border-white hover:bg-blue-950 rounded-lg text-white print:hidden disabled:bg-gray-500 disabled:cursor-not-allowed disabled:text-gray-300" @click="window.print()">print</button>

    </form>
    <x-code :message="$message" :letters="$this->letters" />
    @if($message)
    <x-legend :letters="$this->letters" />
    @endif
</div>
