@if (auth()->user()->is_admin)

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Admin</span></a>
</li>
@endif

<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{{ url('/home') }}"><i class="fa fa-edit"></i><span>Beranda</span></a>
</li> 
@if (auth()->user()->is_admin)
<li class="{{ Request::is('jenisKejahatans*') ? 'active' : '' }}">
    <a href="{{ route('jenisKejahatans.index') }}"><i class="fa fa-edit"></i><span>Jenis Kejahatan</span></a>
</li>

<li class="{{ Request::is('files*') ? 'active' : '' }}">
    <a href="{{ route('files.index') }}"><i class="fa fa-edit"></i><span>Files</span></a>
</li>

<li class="{{ Request::is('lokasiKejahatans*') ? 'active' : '' }}">
    <a href="{{ route('lokasiKejahatans.index') }}"><i class="fa fa-edit"></i><span>Lokasi Kejahatan</span></a>
</li>
@endif

<li class="{{ Request::is('peta*') ? 'active' : '' }}">
    <a href="{{ route('peta.index')}}"><i class="fa fa-edit"></i><span>Peta Lokasi</span></a>
 
</li>

<li class="{{ Request::is('penggunaan*') ? 'active' : '' }}">
    <a href="{{ route('penggunaan.index') }}"><i class="fa fa-edit"></i><span>Prosedur Aplikasi</span></a>
</li>

<li class="{{ Request::is('tentang*') ? 'active' : '' }}">
    <a href="{{ route('tentang.index') }}"><i class="fa fa-edit"></i><span>Tentang Kami</span></a>
</li>




