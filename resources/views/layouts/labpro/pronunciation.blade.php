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
            {{ __('Pronunciation Requirement') }}
        </h2>
</x-slot>       
 
<!-- Audio list & worksheet -->
<div class="col-sm-8" style="background-color: white; margin-left:70px; margin-top:20px; width:90%;">
        <h6>THE CHAOS OF ENGLISH PRONUNCIATION</h6>
        <audio src="{{asset('/The Chaos Of English Pronunciation by Gerard Nolst Trenité (1).mp3')}}" width="320" controls></audio>
</div>
</br>
<iframe style=" margin-top:20px; margin-left:70px; width:90%; height:700px;" src="{{asset('/Chaos Poem Words.docx.pdf')}}"></iframe>
 



</x-admin-layout>




 




