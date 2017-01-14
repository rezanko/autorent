
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" onclick="event.preventDefault();
   document.getElementById('close-modal').submit();">&times;</button>
    <h4 class="modal-title">Upload Bukti Pembayaran</h4>
</div>

<div class="modal-body" style="padding:40px 50px;">

        {!! Form::open(['id'=>'bayar','name'=>'bayar','action'=>'OrderController@buktiBayar', 'files'=>true])  !!}
        {{ csrf_field() }}

        {!! Form::hidden('order_id',$order->id) !!}

        <div class="row">
            <div class="col-md-10">
                <h4>Silahkan mengupload bukti pembayaran untuk order dengan detil sebagai berikut :</h4>
                <table  class="table">
                    <tr>
                        <th>ID</th>
                        <th>Tanggal Transaksi</th>
                        <th>Total Biaya</th>
                    </tr>

                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td>{{ 'Rp. '.$order->total }}</td>
                </table>
            </div>
        </div>

        <div class="form-group">
            <label for="pic" class="control-label">Upload Gambar</label>
            <input id="pic" type="file" class="form-control-file" name="pic" required>
            <p class="help-block">Upload gambar/foto bukti pembayaran order yang bersangkutan.</p>
        </div>

    </form>
    {!! Form::close() !!}
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-warning pull-left" data-dismiss="modal" onclick="event.preventDefault();
   document.getElementById('close-modal').submit();">Close</button>
    <button type="submit" form="bayar" class="btn btn-primary">Upload</button>
</div>

<form id="close-modal" action="{{ Session::forget('sewas') }}" style="display: none;">
</form>
