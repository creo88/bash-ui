<nav class="pt-10 wrapper">
    <div class="flex flex-col items-stretch lg:flex-row lg:items-center">
        <!-- Logo & Toggler Button here -->
        <div class="flex items-center justify-between">
            <!-- LOGO -->
            <div class="mr-0 lg:mr-10">
                <img src="{{ asset('assets/logo/bash-logo-blue.svg') }}" alt="UseBash - assets"
                    class="block h-8 dark:hidden" />
                <img src="{{ asset('assets/logo/bash-logo-white.svg') }}" alt="UseBash - assets"
                    class="hidden h-8 dark:block" />
            </div>
            <!-- RESPONSIVE NAVBAR BUTTON TOGGLER -->
            <div>
                <button class="block p-1 outline-none lg:hidden mobile-menu-button" data-target="#navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 text-dark-1 dark:text-light-1"
                        x-show="!showMenu" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div class="hidden w-full mobile-menu lg:block" id="navigation">
            <div class="flex flex-col items-baseline justify-between mt-6 lg:flex-row lg:items-center lg:mt-0">
                <div
                    class="flex flex-col w-full ml-0 font-normal lg:flex-row text-dark-1 dark:text-light-1 lg:ml-10 lg:w-max">
                    <a href="#useBashFeatures" class="nav-link-item">Features</a>
                    <a href="#useBashPricing" class="nav-link-item">Pricing</a>
                    <a href="https://www.notion.so/Bash-Resources-5c30245712474a75ad8e7a9a66cf11bf"
                        class="nav-link-item" target="_blank">Resources</a>
                    <a href="https://forms.gle/WtM9rjuTYodetwNP8" class="nav-link-item" target="_blank">Hire a Book
                        Keeper</a>
                </div>
                <div class="flex flex-col items-baseline justify-between w-full lg:w-max lg:flex-row lg:items-center">
                    <div
                        class="w-full py-4 my-3 mr-0 text-center rounded-lg lg:my-0 bg-subtleBlue-1 lg:bg-transparent lg:text-left lg:mb-0 lg:w-max lg:mr-9 lg:py-0">
                        <a href="{{ route('login') }}" class="font-bold text-light-1 lg:text-light-1 dark:text-light-1">
                            Sign In
                        </a>
                    </div>
                    <div class="w-full lg:w-max">
                        <a href="{{ route('register') }}"
                            class="inline-flex justify-center w-full p-4 text-base font-bold rounded-lg lg:w-max text-subtleBlue-2 dark:text-navy-2 bg-light-1">
                            Sign Up
                            &nbsp;
                            <img src="{{ asset('assets/icons/arrow-right-light.svg') }}" alt="UseBash - assets"
                                class="block dark:hidden" />
                            <img src="{{ asset('assets/icons/arrow-right-dark.svg') }}" alt="UseBash - assets"
                                class="hidden dark:block" />
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</nav>
