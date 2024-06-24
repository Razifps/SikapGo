@foreach ($nilaisensor as $data)
<span class="no2_masuk" id="no2_masuk_{{ $loop->index }}">{{ $data->NO2_Masuk }}</span>
<span class="co_masuk" id="co_masuk_{{ $loop->index }}">{{ $data->CO_Masuk }}</span>
<span class="no2_keluar" id="no2_keluar_{{ $loop->index }}">{{ $data->NO2_Keluar }}</span>
<span class="co_keluar" id="co_keluar_{{ $loop->index }}">{{ $data->CO_Keluar }}</span>
<span class="co_keluar" id="air_{{ $loop->index }}">{{ $data->Air }}</span>

@endforeach