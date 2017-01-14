<html>
    <head>
        <h2>AutoRent</h2>
            <h4>
                Jl.HOS Cokroaminoto No.9, Ungaran <br>
                Ungaran Barat - Kab.Semarang<br>
                Jawa Tengah<br>
                Indonesia
            </h4>
            <hr>
            <br>
        <h2>
            Invoice Sewa Mobil
        </h2>
    </head>

    <body>
        <table>
            <tr>
                <td><b>Order ID</b></td>
                <td> : </td>
                <td><b>{{ $order->id }}</b></td>
            </tr>
            <tr>
                <td>Atas Nama</td>
                <td> : </td>
                <td>{{ $order->User->name }}</td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td> : </td>
                <td>{{ $order->User->email }}</td>
            </tr>
            <tr>
                <td>No. KTP</td>
                <td> : </td>
                <td>{{ $order->User->ktp }}</td>
            </tr>
            <tr>
                <td>No. SIM</td>
                <td> : </td>
                <td>{{ $order->User->sim }}</td>
            </tr>
            <tr>
                <td>Tanggal Order</td>
                <td> : </td>
                <td>{{ $order->created_at }}</td>
            </tr>
        </table>
        <br><br>

        <table border="2">
            <tr>
                <th>Tipe Mobil</th>
                <th>Plat Nomor</th>
                <th>Tgl. Sewa</th>
                <th>Tgl. Kembali</th>
                <th>Tarif harian</th>
                <th>Biaya Sewa</th>
                <th>Biaya Sopir</th>
                <th>Sub-Total</th>
            </tr>

            @foreach($order->Sewa as $sewa)
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
            </tr>
            @endforeach
            <tr>
                <td colspan="7" align="right"><h4>Total :</h4></td>
                <td colspan="1"><h4>Rp. {{ $order->total }}</h4></td>
            </tr>
        </table>
    </body>

</html>
