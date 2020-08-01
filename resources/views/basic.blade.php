<nav class="bg-default-800" x-data="{ open: false }">
    <div class="px-4 mx-auto max-w-7xl sm:px-6">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <!-- Logo -->
                    {{-- <img class="w-8 h-8" src="/img/logos/workflow-mark-on-dark.svg" alt="Workflow logo" /> --}}
                </div>
                <div class="hidden md:block">
                    <div class="flex items-baseline ml-10">
                        @foreach($features as $feature)
                            @includeWhen($feature->isSelected(),'navigation::feature-selected')
                            @includeWhen(!$feature->isSelected(),'navigation::feature')
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="flex items-center ml-4 md:ml-6">
                    @include('navigation::logout')
                    <div class="relative ml-3">
                        {{-- @include('navigation::profile') --}}
                    </div>
                </div>
            </div>
            <div class="flex mr-2 md:hidden">
            <!-- Mobile menu button -->
                @include('navigation::logout')
                <button @click="open = true"
                    class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-white hover:bg-default-700 focus:outline-none focus:bg-default-700 focus:text-white">
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg class="block w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg class="hidden w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!--
    Mobile menu, toggle classes based on menu state.

    Open: "block", closed: "hidden"
    -->
    <div class="md:hidden" x-show="open" @click.away="open = false">
        <div class="px-2 pt-2 pb-3 sm:px-3">
            
            @foreach($features as $feature)
                @includeWhen($feature->isSelected(),'navigation::sm.feature-selected')
                @includeWhen(!$feature->isSelected(),'navigation::sm.feature')
            @endforeach
        </div>
        {{-- @include('navigation::sm.profile') --}}
    </div>
</nav>