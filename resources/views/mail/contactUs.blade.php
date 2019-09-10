@component('mail::message')
<div class="row ml-5">
<h2>You have a new message from user - {{$contact->name}}</h2>
</div>
<div>
{{$contact->message}}
</div>
<br>
<div>
User phone number {{$contact->phone}}
</div>
@endcomponent
