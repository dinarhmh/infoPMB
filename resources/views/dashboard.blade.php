<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-xl sm:rounded-lg p-6">
                <!-- Alert Success -->
                @if (session('success'))
                    <div class="mb-4 bg-green-100 text-green-800 border-l-4 border-green-500 p-4 rounded">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Form Upload -->
                <div class="mb-8">
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Upload Gambar</h3>
                    <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="file" class="block text-sm font-medium text-gray-700 dark:text-gray-300">File Gambar</label>
                            <input type="file" name="file" id="file" 
                                   class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @error('file')
                                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="keterangan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" rows="3" 
                                      class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            @error('keterangan')
                                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit" 
                                class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-green-700 focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Upload
                        </button>

                    </form>
                </div> <br><br><br><br><br><br>

                <!-- Tabel Data Gambar -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-700 dark:text-gray-300 mb-4">Data Gambar</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead class="bg-gray-50 dark:bg-gray-700">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Gambar</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Keterangan</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                                @forelse ($gambar as $item)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <img src="{{ asset('storage/data_file/' . $item->file) }}" alt="Gambar" class="w-24 h-24 object-cover rounded-md">
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">{{ $item->keterangan }}</td>
                                        <td class="px-6 py-4 text-sm">
                                            <form action="{{ route('dashboard.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="bg-red-500 text-white py-1 px-3 rounded-md hover:bg-red-600 focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="px-6 py-4 text-center text-gray-500">Tidak ada gambar yang diupload</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>


