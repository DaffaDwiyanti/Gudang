<li class="{{ Request::is('barangs*') ? 'active' : '' }}">
    <a href="{!! route('barangs.index') !!}"><i class="fa fa-edit"></i><span>Barang</span></a>
</li>

<li class="{{ Request::is('keluarDetails*') ? 'active' : '' }}">
    <a href="{!! route('keluarDetails.index') !!}"><i class="fa fa-edit"></i><span>Keluar Detail</span></a>
</li>


<li class="{{ Request::is('masukDetails*') ? 'active' : '' }}">
    <a href="{!! route('masukDetails.index') !!}"><i class="fa fa-edit"></i><span>Masuk Detail</span></a>
</li>

<li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{!! route('orders.index') !!}"><i class="fa fa-edit"></i><span>Order</span></a>
</li>

<li class="{{ Request::is('supliers*') ? 'active' : '' }}">
    <a href="{!! route('supliers.index') !!}"><i class="fa fa-edit"></i><span>Suplier</span></a>
</li>

<li class="{{ Request::is('targets*') ? 'active' : '' }}">
    <a href="{!! route('targets.index') !!}"><i class="fa fa-edit"></i><span>Target</span></a>
</li>

<li class="{{ Request::is('barangMasuks*') ? 'active' : '' }}">
    <a href="{!! route('barangMasuks.index') !!}"><i class="fa fa-edit"></i><span>Barang Masuk</span></a>
</li>

<li class="{{ Request::is('barangKeluars*') ? 'active' : '' }}">
    <a href="{!! route('barangKeluars.index') !!}"><i class="fa fa-edit"></i><span>Barang Keluar</span></a>
</li>
