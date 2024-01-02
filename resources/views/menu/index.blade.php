@extends('template')

@section('content')

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="admin">Admin Restoran</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i>
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li>
                        {{-- <a class="dropdown-item" href="#!">Logout</a> --}}
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
                
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                           
                        <a class="nav-link" href="menu">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-burger"></i></div>
                           Menu
                        </a>
                        <a class="nav-link" href="kategori">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                           Kategori Menu
                        </a>
                        <a class="nav-link" href="pelanggan">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-people-group"></i></div>
                            Pelanggan
                        </a>
                        <a class="nav-link" href="pesanan">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-utensils"></i></div>
                            Pesanan
                        </a>
                        <a class="nav-link" href="detailpesanan">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-file-pen"></i></div>
                            Detail Pesanan
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="row mt-5 mb-5">
                    <div class="col-lg-12 margin-tb">
                        <div class="float-left">
                            <h2>Data Menu</h2>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-success" href="{{ route('menu.create') }}"> Tambah Menu</a>
                        </div>
                    </div>
                </div>
            
                @if ($message = Session::get('succes'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
            
                <table class="table table-bordered">
                    <tr>
                        <th width="20px" class="text-center">No</th>
                        <th width="120px" class="text-center">Id Menu</th>
                        <th width="20px" class="text-center">Kategori</th>
                        <th width="200px"class="text-center">Nama Menu</th>
                        <th width="200px"class="text-center">Harga</th>
                        <th width="280px"class="text-center">Deskripsi</th>
                        <th width="280px"class="text-center">Action</th>
                    </tr>
                    @foreach ($menu as $menu => $item)
                    <tr>
                        <td class="text-center">{{ ++$menu }}</td>
                        <td>{{ $item->id_menu }}</td>
                        <td>{{ $item->nama_kategori }}</td>
                        <td>{{ $item->nama_menu }}</td>
                        <td>{{ $item->harga }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td class="text-center">
                            <form action="{{ route('menu.destroy',$item->id_menu) }}" method="POST">
            
                               <a class="btn btn-info btn-sm" href="{{ route('menu.show',$item->id_menu) }}">Show</a>
            
                                <a class="btn btn-primary btn-sm" href="{{ route('menu.edit',$item->id_menu) }}">Edit</a>
            
                                @csrf
                                @method('DELETE')
            
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </table>
            
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2023</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
    </div>


    

    {{-- {!! $menu->links() !!} --}}

@endsection