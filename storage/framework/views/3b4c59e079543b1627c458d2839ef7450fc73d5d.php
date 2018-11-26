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
                <td><b><?php echo e($order->id); ?></b></td>
            </tr>
            <tr>
                <td>Atas Nama</td>
                <td> : </td>
                <td><?php echo e($order->User->name); ?></td>
            </tr>
            <tr>
                <td>E-Mail</td>
                <td> : </td>
                <td><?php echo e($order->User->email); ?></td>
            </tr>
            <tr>
                <td>No. KTP</td>
                <td> : </td>
                <td><?php echo e($order->User->ktp); ?></td>
            </tr>
            <tr>
                <td>No. SIM</td>
                <td> : </td>
                <td><?php echo e($order->User->sim); ?></td>
            </tr>
            <tr>
                <td>Tanggal Order</td>
                <td> : </td>
                <td><?php echo e($order->created_at); ?></td>
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

            <?php $__currentLoopData = $order->Sewa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sewa): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
            <tr>
                <td><?php echo e($sewa->Mobil->Type->nama); ?></td>
                <td><?php echo e($sewa->Mobil->plat_nomor); ?></td>
                <td><?php echo e($sewa->tgl_sewa); ?></td>
                <td><?php echo e($sewa->tgl_kembali); ?></td>
                <td><?php echo e('Rp.'.$sewa->Mobil->Type->tarif); ?></td>
                <td>
                    <?php 
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
                     ?>
                </td>
                <td>
                    <?php 
                    if($sewa->with_sopir)
                    {
                    $sopir = $lamasewa*100000;
                    }
                    else
                    {
                    $sopir = 0;
                    }
                    echo 'Rp.'.$sopir;
                     ?>
                </td>
                <td>
                    <?php echo e('Rp.'.($biayasewa+$sopir)); ?>

                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            <tr>
                <td colspan="7" align="right"><h4>Total :</h4></td>
                <td colspan="1"><h4>Rp. <?php echo e($order->total); ?></h4></td>
            </tr>
        </table>
    </body>

</html>
