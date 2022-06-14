<x-guest-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="px-4 sm:px-0">
                <div class="text-3xl text-center text-gray-900  items-center">
                    <section class="mb-4" >
                        @if(session()->has('success'))
                        <div class="text-green-800">
                            {!! session()->get('success') !!}
                        </div>
                        @endif
                        <h1 class="text-6xl text-blue-800">
                            short your link
                        </h1>
                    </section>
                    <form action="{{ route('short.url') }}" method="POST" >
                        @csrf

                        <input type="url" name="original_url" class="bg-green-700  appearance-none border-2 border-gray-200 rounded  py-2 px-4 text-gray-700 mb-4  " placeholder="Enter your URL here">


                        <button type="submit" class=" bg-amber-500 border border-gray-200 rounded px-4 py-2 bg-cyan-900">
                            Shorten
                        </button>

                    </form>
                </div>

            </div>
    </div>
    </div>
</x-guest-layout>
