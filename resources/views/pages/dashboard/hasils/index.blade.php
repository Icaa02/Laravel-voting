<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hasil Pemilihan
        </h2>
    </x-slot>

    <x-slot name="script">
        <script>
            // AJAX DataTable
            var datatable = $('#crudTable').DataTable({
                ajax: {
                    url: '{!! url()->current() !!}',
                },
                columns: [
                    {
                        data: 'id',
                        name: 'id',
                    },
                    {
                        data: 'kandidat_id',
                        name: 'kandidat_id',
                    },
                    {
                        data: 'pemilih_id',
                        name: 'pemilih_id',
                    },
                    {
                        data: 'id_nfc',
                        name: 'id_nfc',
                        width: '30%'
                    },
                    {
                        data: 'no_urut',
                        name: 'no_urut',
                        orderable: false,
                        searchable: false,
                        width: '25%'
                    },
                    {
                        data: 'nama_kandidat',
                        name: 'nama_kandidat',
                        width: '30%'
                    },
                    // {
                    //     data: 'total',
                    //     name: 'total',
                    //     width: '30%'
                    // },
                ],
            });
        </script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('dashboard.hasils.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                    Create
                </a>
            </div>
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable">
                        <thead>  
                            <tr>
                                <th class="px-2 py-4">ID</th>
                                <th class="px-2 py-4">Kandidat ID</th>
                                <th class="px-2 py-4">Pemilih ID</th>
                                <th class="px-2 py-4">ID NFC</th>
                                <th class="px-6 py-4">No Urut</th>
                                <th class="px-6 py-4">Kandidat</th>
                                {{-- <th class="px-6 py-4">Total</th> --}}
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>