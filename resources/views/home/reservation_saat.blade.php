<label for="time_id">Saat &nbsp;:</label>
@if($saat->count()!=0)
<select name="time_id" id="saat_randevu">
    @foreach($saat as $rs)
    <option  value="{{$rs->id}}">{{$rs->hour}}</option>
    @endforeach
</select>
<button class="btn-primary" type="submit">Randevu Al</button>
@else
<h4>Seçilen Tarihde Randevu Yok.</h4>
@endif