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
            {{ __('Movie List') }}
        </h2>
</x-slot>       
 

<!-- Movie list & worksheet -->
<div style="background-color:white; width:31%; height:330px; margin-left:20px; display:inline-block; margin-top:30px;">
<h1 style="margin-left:70px;  margin-top:250px; position:absolute; size:200%;"><b>HOME ALONE 2 LOST IN NEW YORK</b></h1>
<a href="{{asset('/HOME ALONE (LOST IN NEWYORK).pdf')}}" style="color:blue; position:absolute; margin-left:160px; margin-top:280px; text-decoration: underline;">Worksheet</a>

<iframe width="419" height="250" style="margin-left:1px; margin-top:1px; position:relative; " src="//www.youtube.com/embed/BarY1KLx38E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></iframe>
</div>  

<div style="background-color:white; width:31%; height:330px; margin-left:20px; display:inline-block; margin-top:30px;">
<h1 style="margin-left:150px;  margin-top:250px; position:absolute; size:200%;"><b>KUNGFU PANDA</b></h1>
<a href="{{asset('/MP - Kungfu Panda.pdf')}}" style="color:blue; position:absolute; margin-left:160px; margin-top:280px; text-decoration: underline;">Worksheet</a>

<iframe width="419" height="250" style="margin-left:1px; margin-top:1px; position:relative; " src="//www.youtube.com/embed/i_a3srvQ_WE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div> 

<div style="background-color:white; width:31%; height:330px; margin-left:20px; display:inline-block; margin-top:30px;">
<h1 style="margin-left:70px;  margin-top:250px; position:absolute; size:200%;"><b>RAYA AND THE LAST DRAGON</b></h1>
<a href="{{asset('/RAYA AND THE LAST DRAGON.pdf')}}" style="color:blue; position:absolute; margin-left:160px; margin-top:280px; text-decoration: underline;">Worksheet</a>

<iframe width="419" height="250" style="margin-left:1px; margin-top:1px; position:relative;" src="https://www.youtube.com/embed/Ok5CrttaYSY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>


 



</x-admin-layout>

