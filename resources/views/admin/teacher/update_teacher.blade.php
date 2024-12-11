<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update teacher') }}
        </h2>
    </x-slot>

    <div>
    	<x-guest-layout>
    		@foreach($teacher as $rows)
        <form method="POST" class="mt-4 ml-4" action="/teacher/update_data" method="post">
		@csrf
            <div>
            	<input type="hidden" name="id" value="{{$rows->id}}">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <input type="text" name="nama" value="{{$rows->nama}}" class="block mt-1 w-full">
            </div>

            <div class="mt-4">
                <x-jet-label for="date" value="{{ __('Birthday') }}" />
                <input type="text" placeholder="format: d-m-Y" name="date"  class="block mt-1 w-full" required="" value="{{$rows->tanggal_lahir}}">
            </div>
             <div class="mt-4">
                <x-jet-label for="address" value="{{ __('Address') }}" />
                <input type="text" value="{{$rows->alamat}}" name="address"  class="block mt-1 w-full" required="">
            </div>
            <div class="mt-4">
                <x-jet-label for="level" value="{{ __('Cabang') }}" />
                <input type="text" value="{{$rows->cabang}}" name="cabang"  class="block mt-1 w-full" required="">
            </div>
            <div class="mt-4">
                <x-jet-label for="level" value="{{ __('Level') }}" />
                <input type="text" value="{{$rows->level}}" name="level"  class="block mt-1 w-full" required="">
                <?php date_default_timezone_set("Asia/Jakarta"); ?>
                <input type="hidden"  name="update" value="<?= date('Y-m-d H:i:s') ?>">
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Update') }}
                </x-jet-button>
            </div>
        </form>
        @endforeach

</x-guest-layout>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            Accessible only for administrators.
        </div>
    </div>
</x-admin-layout>