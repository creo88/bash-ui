<!-- background ornament -->
{{-- <div class="hidden mx-auto hero-bg max-w-screen-2xl lg:block">
    <div class="flex justify-end">
        <img src="{{ asset('assets/light-mode/header-ornament.svg') }}" alt="UseBash - assets"
            class="absolute top-0 block ml-40 -mt-52 z-min10 dark:hidden" />
        <img src="{{ asset('assets/dark-mode/header-ornament.svg') }}" alt="UseBash - assets"
            class="absolute top-0 hidden ml-40 -mt-52 z-min10 dark:block" />
    </div>
</div> --}}
<!-- hero -->
<section class="pt-24 wrapper hero">
    <!-- LEFT PART -->
    <div class="max-w-[595px]">
        <div
            class="text-4xl font-bold leading-snug headline font-display md:text-[54px] text-dark-1 dark:text-light-1 md:leading-tight">
            Control <span class="text-subtleBlue-1">your income and expenses - effortlessly</span>
        </div>
        <div class="text-lg font-normal leading-8 text-dark-2 dark:text-subtleGrey-5 md:text-xl md:leading-9 mt-7">
            Streamline your inventory and accounting. <br class="hidden lg:block"> In one tool, you can set financial
            objectives, bill customers,
            manage products, automate taxation, and track your spending.
            {{-- Faster, easier and cheaper cross <br class="hidden lg:block"> border payment starts here --}}
        </div>
        <div class="grid items-start grid-cols-1 mt-20 md:grid-cols-2">
            <div class="inline-flex items-center mb-3">
                <img src="{{ asset('assets/icons/check-green.svg') }}" class="mt-1" alt="UseBash - assets" />
                <p class="ml-2 font-normal text-dark-2 dark:text-subtleGrey-5">
                    24/7 Access anytime anywhere
                </p>
            </div>
            <div class="inline-flex items-start mb-3">
                <img src="{{ asset('assets/icons/check-green.svg') }}" class="mt-1" alt="UseBash - assets" />
                <p class="ml-2 font-normal text-dark-2 dark:text-subtleGrey-5">
                    Take your accounting data with you everywhere you go
                </p>
            </div>
            <div class="inline-flex items-center mb-3">
                <img src="{{ asset('assets/icons/check-green.svg') }}" class="mt-1" alt="UseBash - assets" />
                <p class="ml-2 font-normal text-dark-2 dark:text-subtleGrey-5">
                    Support multiple currencies
                </p>
            </div>
            <div class="inline-flex items-center mb-3">
                <img src="{{ asset('assets/icons/check-green.svg') }}" class="mt-1" alt="UseBash - assets" />
                <p class="ml-2 font-normal text-dark-2 dark:text-subtleGrey-5">Across 180+ Countries</p>
            </div>
        </div>
    </div>

    <!-- RIGHT PART -->
    <div class="max-w-[595px] w-full absolute right-0 top-28 -z-10 hidden lg:block">
        <img src="{{ asset('assets/images/front/front-illustration.webp') }}" class="object-cover w-full h-auto"
            alt="">
    </div>
</section>

{{-- <div class="w-full form-placeholder p-13 bg-light-1 dark:bg-dark-3 rounded-xl shadow-formShadow md:w-465">
            <label class="block mb-7">
                <span class="font-normal text-dark-2 dark:text-subtleGrey-5">Email</span>
                <input type="email"
                    class="block w-full px-5 py-4 mt-3 font-semibold rounded-lg text-dark-1 dark:text-light-1 bg-subtleGrey-1 dark:bg-dark-4 focus:outline-none focus:ring-2 focus:ring-subtleBlue-1 dark:focus:ring-dark-4 focus:bg-light-1 dark:focus:bg-dark-5 placeholder-subtleGrey-2 dark:placeholder-subtleGrey-4"
                    placeholder="Email@example.org" />
            </label>
            <label class="block mb-7">
                <span class="font-normal text-dark-2 dark:text-subtleGrey-5">Password</span>
                <input type="password"
                    class="block w-full px-5 py-4 mt-3 font-semibold rounded-lg text-dark-1 dark:text-light-1 bg-subtleGrey-1 dark:bg-dark-4 focus:outline-none focus:ring-2 focus:ring-subtleBlue-1 dark:focus:ring-dark-4 focus:bg-light-1 dark:focus:bg-dark-5 placeholder-subtleGrey-2 dark:placeholder-subtleGrey-4"
                    placeholder="Your Password" />
            </label>
            <label class="block mb-9">
                <span class="font-normal text-dark-2 dark:text-subtleGrey-5">Business Category</span>
                <select
                    class="block w-full px-5 py-4 mt-3 font-semibold bg-no-repeat rounded-lg appearance-none bg-24 bg-selectArrowPosition bg-subtleGrey-1 dark:bg-dark-4 focus:outline-none focus:ring-2 focus:ring-subtleBlue-1 dark:focus:ring-dark-4 focus:bg-light-1 dark:focus:bg-dark-5 bg-dropdownArrowLight dark:bg-dropdownArrowDark yuyu"
                    required>
                    <option value="" disabled selected hidden>Select business category
                    </option>
                    <option value="">Food and Beverages</option>
                    <option value="">Technologies</option>
                    <option value="">Industrial</option>
                    <option value="">Fashion</option>
                </select>
            </label>
            <a href="#"
                class="block py-4 text-base font-bold text-center rounded-lg bg-subtleGreen text-light-1 focus:ring-2">Get
                Started</a>
            <div class="flex flex-row items-start mt-6 space-x-3">
                <div class="mt-1">
                    <img src="{{ asset('assets/icons/award.svg') }}" alt="award-icon" width="48px"
                        class="block dark:hidden" />
                    <img src="{{ asset('assets/icons/award-dark.svg') }}" alt="award-icon" width="48px"
                        class="hidden dark:block" />
                </div>
                <div>
                    <p class="text-xs font-normal leading-5 text-subtleGrey-3 dark:text-subtleGrey-4">
                        Licensed and regulated by The Monetary Authority of Singapore, Hong Kong Customs and
                        Excise Department and Bank Indonesia.
                    </p>
                </div>
            </div>
        </div> --}}
