<x-layouts.app>
    <section class="px-6 container mx-auto h-full flex flex-col">
             <div class="flex w-full justify-center mt-12 print:pt-0 print:justify-start">
                 <x-Logo src="/logo.svg" alt="code breaker logo" class=" print:hidden" />
                 <x-Logo src="/inverted-logo.svg" alt="inverted logo for printing" class="hidden print:flex print:h-32 print:w-32" />
            </div>
         <livewire:create-code />
     </section>

 </x-layouts.app>
