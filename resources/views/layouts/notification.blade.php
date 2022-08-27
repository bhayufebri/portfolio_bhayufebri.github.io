<script>
@if(Session::has('success'))
var placementFrom = 'top';
var placementAlign = 'right';
var colorName = 'alert-success';
var text = "{{ Session::get('success') }}";

showNotification(colorName, text, placementFrom, placementAlign, null, null);

@php
Session::forget('success');
@endphp
@endif



@if(Session::has('info'))
var placementFrom = 'top';
var placementAlign = 'right';
var colorName = 'alert-info';
var text = "{{ Session::get('info') }}";
showNotification(colorName, text, placementFrom, placementAlign, null, null);

@php
Session::forget('info');
@endphp
@endif


@if(Session::has('warning'))

var placementFrom = 'top';
var placementAlign = 'right';
var colorName = 'alert-warning';
var text = "{{ Session::get('warning') }}";
showNotification(colorName, text, placementFrom, placementAlign, null, null);
@php
Session::forget('warning');
@endphp
@endif


@if(Session::has('error'))

var placementFrom = 'top';
var placementAlign = 'right';
var colorName = 'alert-danger';
var text = "{{ Session::get('error') }}";
showNotification(colorName, text, placementFrom, placementAlign, null, null);
@php
Session::forget('error');
@endphp
@endif
</script>