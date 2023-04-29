
<h1> Hello User3</h1>
@if($name=="muzammil")
<h1>Hello {{$name}}</h1>
@elseif($name=="ali")
<h1>Hello {{$name}}</h1>
@else
<h1>Unkonwn User</h1>
@endif