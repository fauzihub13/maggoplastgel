@props(['orders'])

@php
    $order_status_message = [
        'pending' => 'Menunggu Pembayaran',
        'paid' => 'Pembayaran Diterima',
        'shipped' => 'Barang Dikirim',
        'arrived' => 'Barang Diterima'
    ];

    $order_status_color = [
        'pending' => 'warning',
        'paid' => 'info',
        'shipped' => 'primary',
        'arrived' => 'success'
    ];
@endphp
                        
<table class="table-fit table">
    <tbody>
        <tr>
            <th>Pesanan</th>
            <th>Alamat</th>
            <th>Waktu Pemesanan</th>
            <th>Status</th>
        </tr>
        @foreach ($orders ?? [] as $order)
        <tr>
            <td class="pt-2">
                <div class="d-flex align-items-center">
                    <i class="fa fa-user me-1"></i>
                    <p class="m-0 ml-2">{{ $order->user->name }}</p>
                </div>
                @foreach ($order->orderItems as $item)
                <div class="card">
                    <div class="card-body border">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <img alt="image" src="/storage/{{ $item->product->productImages[0]->path ?? "" }}" class="rounded me-2 border" width="56" height="56" data-toggle="tooltip" title="{{ $item->product->name ?? "" }}">
                                <p class="m-0 ml-2">{{ $item->product->name ?? "" }}</p>
                            </div>
                            <p class="m-0 d-flex align-items-center">{{ $item->quantity }} x  <span class="rupiah"> {{ $item->price }}</span></p>
                        </div>
                    </div>
                </div>
                @endforeach

            </td>
            <td class="align-middle">
                @php
                    $user = $order->user
                @endphp
                {{ $user->phone_number }}
                <br>
                {{ $user->address_detail }}
                <br>
                {{ "$user->kelurahan, $user->kecamatan, $user->city, $user->province" }} 
                <br> 
                {{ $user->zip_code }}
            </td>
            <td>
                {{ $order->created_at->format('Y-m-d') }}
                <br>
                {{ $order->created_at->format('H:i') }}
            </td>
            <td>
                <div class="badge badge-{{ $order_status_color[$order->status] }}">{{ $order_status_message[$order->status] }}</div>
            </td>
        </tr>
        <tr class="border border-left-0 border-right-0 bg-body-secondary">
            <td>
                <strong class="rupiah">{{ $order->orderItems->sum(function($item){
                return $item->price * $item->quantity;
            }) }}</strong>
            
            </td>
            <td colspan="3" align="right">
                @if ($order->status == 'paid')
                <form action="/pesanan/kirim/{{ $order->id }}" method="post" class="d-flex w-100 justify-content-end">
                    @csrf
                    @method('PUT')
                    <select class="form-control selectric w-auto mr-2" name="courier" required>
                        <option value="" disabled selected>Ekspedisi</option>
                        <option value="jnt">J&T</option>
                        <option value="jne">JNE</option>
                        <option value="sicepat">Sicepat</option>
                    </select>
                    <input type="text" class="form-control w-auto mr-2" name="resi" placeholder="Resi pengiriman" required>
                    <button type="submit" class="btn btn-primary">Kirim pesanan</button>
                </form>
                @endif
                @if ($order->status == 'shipped')
                    <button class="btn btn-success tracking-button" data-id="{{ $order->id }}">
                        Lacak
                    </button>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>