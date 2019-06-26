<li class="{{ Request::is('barangs*') ? 'active' : '' }}">
    <a href="{!! route('barangs.index') !!}"><i class="fa fa-edit"></i><span>Barangs</span></a>
</li>

<li class="{{ Request::is('barangKeluars*') ? 'active' : '' }}">
    <a href="{!! route('barangKeluars.index') !!}"><i class="fa fa-edit"></i><span>Barang Keluars</span></a>
</li>

<li class="{{ Request::is('keluarDetails*') ? 'active' : '' }}">
    <a href="{!! route('keluarDetails.index') !!}"><i class="fa fa-edit"></i><span>Keluar Details</span></a>
</li>

<li class="{{ Request::is('barangMasuks*') ? 'active' : '' }}">
    <a href="{!! route('barangMasuks.index') !!}"><i class="fa fa-edit"></i><span>Barang Masuks</span></a>
</li>

<li class="{{ Request::is('masukDetails*') ? 'active' : '' }}">
    <a href="{!! route('masukDetails.index') !!}"><i class="fa fa-edit"></i><span>Masuk Details</span></a>
</li>

<li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{!! route('orders.index') !!}"><i class="fa fa-edit"></i><span>Orders</span></a>
</li>

<li class="{{ Request::is('supliers*') ? 'active' : '' }}">
    <a href="{!! route('supliers.index') !!}"><i class="fa fa-edit"></i><span>Supliers</span></a>
</li>

<li class="{{ Request::is('targets*') ? 'active' : '' }}">
    <a href="{!! route('targets.index') !!}"><i class="fa fa-edit"></i><span>Targets</span></a>
</li>

