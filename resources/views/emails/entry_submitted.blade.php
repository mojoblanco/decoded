@component('mail::message')
# Entry recieved

**Name:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

**Phone No:** {{ $data['phone'] }}

**ALAT No:** {{ $data['alat_no'] }}


Click on the button below to view the song.

@component('mail::button', ['url' => URL::to($data['link']) ])
View Song
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

