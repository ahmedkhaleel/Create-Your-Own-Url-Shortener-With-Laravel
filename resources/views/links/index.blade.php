<x-app-layout>
    <x-slot name="header">
          My Links
    </x-slot>

<div class="max-w-6xl mx-auto mt-8">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 ">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Original Link
                </th>
                <th scope="col" class="px-6 py-3">
                    short Link
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
            </thead>
            <tbody>

            @foreach($links as $link)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">

                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                    {{$link->id}}
                </th>
                <td class="px-6 py-4">
                    {{$link->original_url}}
                </td>
                <td class="px-6 py-4">
                   <a href=" {{url('/').'/'.$link->short_url}}"> {{url('/').'/'.$link->short_url}}</a>
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>

            </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>



</x-app-layout>
