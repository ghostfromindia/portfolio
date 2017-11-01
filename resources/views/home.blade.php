@extends('core')
@section('body')
<style type="text/css">

.sky1 {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position:absolute;
    animation-name: sky1;
    animation-duration: 60s;
    animation-iteration-count: 3;
}
.sky2 {
    width: 100px;
    height: 100px;
    border-radius: 50%;
   position:absolute;
    animation-name: sky2;
    animation-duration: 60s;
    animation-iteration-count: 3;
}
.baloon {
    width: 150px;
    border-radius: 50%;
    position:absolute;
    animation-name: baloon;
    animation-duration: 60s;
    animation-iteration-count: 3;
}
.sun {
    animation-name: sun;width: 100px;
    animation-duration: 1s;
    animation-iteration-count: 60;
}

@keyframes sun {
     0%   {width: 100px; }
    50%  { width: 101px;}
    100% {width: 100px;}
}


@keyframes sky1 {
    0%   {left:0px; top:200px;}
    100% {left:1000px; top:200px;}
}

@keyframes sky2 {
    0%   {left:-100px; top:100px;}
    100% {left:1100px; top:100px;}
}
@keyframes baloon {
    0%   {left:-100px; top:100px;}
    100% {left:2000px; top:100px;}
}



</style>
<div><img src="img/baloon.png" class="baloon" width="290px" ></div>
<div class="sky1"><img src="img/sky1.png" width="80%"></div>
<div class="sky2"><img src="img/sky1.png" width="80%"></div>
<div><img src="img/sun.png" class="sun" style="top: 30px;position:absolute;left:250px;"></div>
<div><img src="img/tree.png" width="290px" style="bottom: 0px;position:absolute;left:0px;"></div>

@endsection