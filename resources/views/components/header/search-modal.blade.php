<div x-show="searchModal" x-data="{ searchModalTabs: 1 }"
    class="absolute top-0 w-full h-full bg-gray-50 flex flex-col justify-between">
    {{-- HEADER --}}
    <div class="relative p-6 flex items-center justify-center">
        <div class="absolute left-6 border border-gray-400 bg-white p-2 rounded-full" @click="searchModal = false">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3"
                stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>

        </div>

        <div class="flex justify-center gap-4">
            <button class="font-bold text-airbnb-gray-light"
                :class="searchModalTabs == 1 ? 'text-black underline underline-offset-8 decoration-2' : ''"
                @click="searchModalTabs = 1">Alojamientos</button>
            <button class="font-bold text-airbnb-gray-light"
                :class="searchModalTabs == 2 ? 'text-black underline underline-offset-8 decoration-2' : ''"
                @click="searchModalTabs = 2">Experiencias</button>
        </div>
    </div>
    {{-- HEADER --}}

    {{-- CONTENT --}}
    <div x-show="searchModalTabs == 1">alojamientos</div>

    <div x-show="searchModalTabs == 2">experiencias</div>
    {{-- CONTENT --}}

    {{-- FOOTER --}}
    <div class="py-2 px-6 bg-white flex items-center justify-between">
        <a href="#" class="font-semibold underline">Restablecer</a>

        <button
            class="py-3 px-6 rounded-xl flex items-center gap-2 bg-gradient-to-r from-[#e61d4d] to-[#d70666] text-white font-medium"><svg
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg><span>buscar</span></button>
    </div>
    {{-- FOOTER --}}
</div>
