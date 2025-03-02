<x-admin-layout>

<link rel="stylesheet" type="text/css" href="{{asset('/Assets/style3.css')}}"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<script>
function goBack() {
  window.history.back()
}
</script>

    <x-slot name="header">
    <button onclick="goBack()">
    <i class="fas fa-arrow-left" style="position:relative; margin-left:-60px;"></i>
    </button> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="position:relative; margin-top:-25px;">
            {{ __('Update teacher') }}
        </h2>
    </x-slot>

    <div class="mt-4 " style="margin-left:300px; margin-top:20px; position:relative;">
    <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body" style="width:800px; background-color:white; padding:15px;">
    	<x-guest-layout>
    		@foreach($teachers as $rows)
        <form method="POST" class="mt-4 ml-4" action="/teacher/update_data" method="post"  enctype="multipart/form-data">
		@csrf
            <div>
            	<input type="hidden" name="id" value="{{$rows->id}}">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <input type="text" name="name" value="{{$rows->name}}" class="block mt-1 w-full">
            </div>

            <div class="mt-4">
                <x-jet-label for="date" value="{{ __('Birthday') }}" />
                <input type="date" placeholder="format: d-m-Y" name="dateofbirth"  class="block mt-1 w-full" required="" value="{{$rows->dateofbirth}}">
            </div>
              <div class="mt-4">
                <x-jet-label for="date" value="{{ __('Gender') }}" />
                <select name="gender">
                    <option value="{{$rows->gender}}">{{$rows->gender}}</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
            <div class="mt-4">
                <x-jet-label for="level" value="{{ __('Branch') }}" />
                <input type="text" value="{{$rows->branch}}" name="branch"  class="block mt-1 w-full" required="">
            </div>
            <div class="mt-4">
                <x-jet-label for="level" value="{{ __('Note') }}" />
                <input type="text" value="{{$rows->note}}" name="note"  class="block mt-1 w-full" required="">
                <?php date_default_timezone_set("Asia/Jakarta"); ?>
            </div>
            <div class="mt-4">
                <x-jet-label for="image"  />
                <input type="file" name="image"  class="block mt-1 w-full" required="" value="old(image)">
            </div>

            <div class="flex items-center justify-end mt-4">

                <x-jet-button class="ml-4">
                    {{ __('Update') }}
                </x-jet-button>
            </div>
        </form>
        @endforeach
        </div>
</div>
</div>
</div>
</div> 

</x-guest-layout>
       
    </div>
</x-admin-layout>