<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex mb-4">
        <div class="w-1/3 mx-auto">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="max-w-sm rounded bg-white overflow-hidden shadow-lg mt-6">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Total Daftar Kandidat</div>
                        <p class="text-gray-700 text-base">
                            Total daftar kandidat saat ini {{ $kandidat->count() }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2 mb-5">
                        <a href="{{ route('dashboard.kandidats.index') }}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3 mx-auto">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="max-w-sm rounded bg-white overflow-hidden shadow-lg mt-6">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Total Daftar Pemilih</div>
                        <p class="text-gray-700 text-base">
                            Total dafar pemilih saat ini {{ $pemilih->count() }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2 mb-5">
                        <a href="{{ route('dashboard.pemilihs.index') }}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/3 mx-auto">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="max-w-sm rounded bg-white overflow-hidden shadow-lg mt-6">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Admin</div>
                        <p class="text-gray-700 text-base">
                            Admin terdaftar saat ini {{ $users->count() }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2 mb-5">
                        <a href="{{ route('dashboard.user.index') }}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Selengkapya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex mb-4">
        <div class="w-1/3 mx-auto">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="max-w-sm rounded bg-white overflow-hidden shadow-lg mt-6">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">Total Hasil Pemilihan</div>
                        <p class="text-gray-700 text-base">
                            Hasil saat ini {{ $hasil->count() }}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2 mb-5">
                        <a href="{{ route('dashboard.hasils.index') }}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="flex mb-4">
            <div class="w-1/3 mx-auto">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="max-w-sm rounded bg-white overflow-hidden shadow-lg mt-6">
                        <div class="px-6 py-4">
                            <div class="font-bold text-xl mb-2">Total Hasil Kandidat 1</div>
                            <p class="text-gray-700 text-base">
                                Hasil saat ini {{ $kandidat1->count() }}
                            </p>
                        </div>
                        <div class="px-6 pt-4 pb-2 mb-5">
                            <a href="{{ route('dashboard.hasils.index') }}" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div> --}}
    


</x-app-layout>