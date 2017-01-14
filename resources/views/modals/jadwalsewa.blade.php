
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" onclick="event.preventDefault();
   document.getElementById('close-modal').submit();">&times;</button>
    <h4 class="modal-title">Jadwal Sewa Mobil</h4>
</div>

<div class="modal-content" style="padding:40px 50px;">
    {{--<div class="col-lg-12">--}}
    <div class="col-md-12">
        <h3>Tipe Mobil : <b>{{ $mobil->Type->nama }}</b></h3>
        <h4>Plat Nomor : <b>{{ $mobil->plat_nomor }}</b></h4>
        <h4>Tarif Sewa : <b>{{ 'Rp.'.$mobil->Type->tarif }}</b></h4>
        <br>
    </div>

        <table class="table">
            <tr>
                <th>Tgl. Sewa</th>
                <th>Tgl. Kembali</th>
            </tr>

            @foreach($mobil->Sewa as $sewa)
                <tr>
                    <td>{{ $sewa->tgl_sewa }}</td>
                    <td>{{ $sewa->tgl_kembali }}</td>
                </tr>
            @endforeach
        </table>

    {{--</div>--}}

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal" onclick="event.preventDefault();
   document.getElementById('close-modal').submit();">Close</button>
</div>

<form id="close-modal" action="{{ Session::forget('mobil') }}" style="display: none;">
</form>