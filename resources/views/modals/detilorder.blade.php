
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" onclick="event.preventDefault();
   document.getElementById('close-modal').submit();">&times;</button>
    <h4 class="modal-title">Detil Order</h4>
</div>

<div class="modal-content" style="padding:40px 50px;">
    {{--<div class="col-lg-12">--}}
    <div class="col-md-6">
        <h3>Order ID : <b>{{ $order->id }}</b></h3>
        <h4>Atas Nama : <b>{{ $order->User->name }}</b></h4>
        <h4>No. KTP : <b>{{ $order->User->ktp }}</b></h4>
        <h4>Tgl. Order : <b>{{ $order->created_at }}</b></h4>
        <br>
    </div>


        <table class="table">
            <tr>
                <th>Tipe Mobil</th>
                <th>Plat Nomor</th>
                <th>Tgl. Sewa</th>
                <th>Tgl. Kembali</th>
                <th>Tarif harian</th>
                <th>Biaya Sewa</th>
                <th>Biaya Sopir</th>
                <th>Sub-Total</th>
                <th>Status Sewa</th>
            </tr>

            @foreach($sewas as $sewa)
                <tr>
                    <td>{{ $sewa->Mobil->Type->nama }}</td>
                    <td>{{ $sewa->Mobil->plat_nomor }}</td>
                    <td>{{ $sewa->tgl_sewa }}</td>
                    <td>{{ $sewa->tgl_kembali }}</td>
                    <td>{{ 'Rp.'.$sewa->Mobil->Type->tarif }}</td>
                    <td>
                        @php
                            if($sewa->tgl_sewa == $sewa->tgl_kembali)
                            {
                                $lamasewa = 1;
                            }
                            else
                            {
                                $date1 = new DateTime($sewa->tgl_sewa);
                                $date2 = new DateTime($sewa->tgl_kembali);

                                $lamasewa =  $date1->diff($date2)->days + 1;
                            }
                            $biayasewa = $lamasewa * $sewa->Mobil->Type->tarif;
                            echo 'Rp.'.$biayasewa;
                        @endphp
                    </td>
                    <td>
                        @php
                            if($sewa->with_sopir)
                            {
                                $sopir = $lamasewa*100000;
                            }
                            else
                            {
                                $sopir = 0;
                            }
                            echo 'Rp.'.$sopir;
                        @endphp
                    </td>
                    <td>
                        {{ 'Rp.'.($biayasewa+$sopir) }}
                    </td>
                    <td>Under Construction</td>
                </tr>
            @endforeach
        </table>

    {{--</div>--}}

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal" onclick="event.preventDefault();
   document.getElementById('close-modal').submit();">Close</button>
</div>

<form id="close-modal" action="{{ Session::forget('sewas') }}" style="display: none;">
</form>