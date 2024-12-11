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
<h2 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:0px; margin-top:-30px;">
            {{ __('Audio List') }}
        </h2>
</x-slot>       
 
<!-- Audio list & worksheet -->
<div class="row" style="width:60%; margin-left:250px; margin-top:50px;">
    <div class="col-sm-8" style="background-color: darkgray;">
        <h6>Breakfast or Lunch</h6>
        <audio src="{{asset('/Breakfast or Lunch .MP4')}}" width="320" controls></audio>
    </div>
    <div class="col-sm-8" style="background-color: white">
    <h6>A polite request</h6>
    <audio src="{{asset('/A polite request .MP4')}}" width="700" controls></audio>
    </div>
    <div class="col-sm-8" style="background-color: darkgray;">
        <h6>Accross the channel</h6>
    <audio src="{{asset('/Across the Channel .MP4')}}" width="320" controls></audio>
    </div>
    <div class="col-sm-8" style="background-color: white;">
    <h6>Please send me a card</h6>
    <audio src="{{asset('/please send me a card.MP4')}}" width="320" controls></audio>
    </div>
    <div class="col-sm-8" style="background-color: darkgray;">
        <h6>Private conversation</h6>
        <audio src="{{asset('/private conversation.MP4')}}" width="320" controls></audio>
    </div>
    
  </div>

 



</x-admin-layout>




 




