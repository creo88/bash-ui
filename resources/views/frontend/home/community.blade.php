<!-- background ornament -->
<div class="hidden mx-auto hero-bg max-w-screen-2xl lg:block">
    <div class="flex justify-start -ml-24">
        <img src="{{ asset('assets/light-mode/left-ornament.svg') }}" alt="UseBash - assets"
            class="absolute z-0 block -mt-16 dark:hidden" />
        <img src="{{ asset('assets/dark-mode/left-ornament.svg') }}" alt="UseBash - assets"
            class="absolute z-0 hidden -mt-16 dark:block" />
    </div>
</div>
<section class="pt-32 pb-20 contact-us bg-light-1 dark:bg-dark-5">
    <div class="wrapper">
        <div
            class="text-5xl font-bold leading-tight text-left heading text-dark-1 dark:text-light-1 md:text-center md:text-6xl lg:leading-snug font-display">
            Join Our Community
        </div>
        <div
            class="flex flex-col items-center justify-center mt-8 md:mt-18 md:flex-row md:space-x-7 space-y-7 md:space-y-0">
            <a href="https://www.facebook.com/groups/619286293041056/"
                class="flex justify-center w-full gap-3 px-8 py-4 text-xl font-bold bg-subtleGreen rounded-xl text-light-1 md:w-auto"
                target="_blank">
                <img src="{{ asset('assets/icons/bi_facebook.svg') }}" alt="">
                Facebook Group
            </a>
            {{-- <a href="#"
                class="w-full px-8 py-4 text-xl font-normal text-center ring-inset ring-1 ring-subtleGrey-3 rounded-xl text-dark-1 dark:text-light-1 md:w-auto">View
                Demo</a> --}}
        </div>
    </div>
</section>
