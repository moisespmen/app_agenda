<tr>
<td class="header">
    <a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Super Agenda')
        <img src="http://localhost:8000/img/logo.png" class="logo">
@else
@endif
<br>
{{ $slot }}
</a>
</td>
</tr>
