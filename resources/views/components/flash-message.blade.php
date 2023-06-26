@if(session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 1500)" x-show="show">
    <p style="text-align: center">
        {{session('message')}}
    </p>
</div>
@endif