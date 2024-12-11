<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student List') }}
        </h2>
    </x-slot>
    <div>
      <x-jet-button class="ml-4 mt-4">
        <a href="/student/input_data">{{ __('Input Data') }}</a>
                </x-jet-button>
  <table width="100%" class="mt-4 border-separate border">
  <thead>
    <tr>
      <th class="border">No</th>
      <th class="border">Nama</th>
      <th class="border">Tanggal Lahir</th>
      <th class="border">Alamat</th>
      <th class="border">Cabang</th>
      <th class="border">Level</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $no=1; ?>
      @foreach($student as $row)
    <tr>
      <td class="border">{{$no++ }}</td>
      <td class="border">{{ $row->nama }}</td>
      <td class="border">{{ $row->tanggal_lahir }}</td>
      <td class="border">{{ $row->alamat }}</td>
      <td class="border">{{ $row->cabang }}</td>
      <td class="border">{{ $row->level }}</td>
      <td class="border">
        <a href="/student/update/{{ $row->id }}">Update</a>
        |
        <a href="/student/delete/{{ $row->id }}">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            Accessible only for administrators.
        </div>
    </div>
</x-admin-layout>
