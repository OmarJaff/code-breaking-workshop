<section class="px-6">
    <div class="container mx-auto ">
        <div class="flex w-full justify-center my-8">
        <img src="/logo.svg"   alt="code breaker logo">
        </div>
    </div>
    <div class="w-full flex justify-center mt-6">
        <form action="">
            <textarea wire:model.live="message" class="rounded-lg bg-white/20 text-white text-lg p-4"  name="" id="" cols="30" rows="10"></textarea>
            <div class="text-white">
                {{$message}}
            </div>
        </form>

    </div>
</section>
