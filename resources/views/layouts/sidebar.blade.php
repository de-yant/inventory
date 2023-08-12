<div class="iq-sidebar  sidebar-default">
    <div class="iq-sidebar-logo d-flex align-items-center">
        <a href="dashboard" class="header-logo">
            {{-- <img src="../assets/images/logo.svg" alt="logo"> --}}
            <h3 class="logo-title light-logo">INV</h3>
        </a>
        <div class="iq-menu-bt-sidebar ml-0">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    {{-- <li class=" ">
        <a href="#otherpage" class="collapsed" data-toggle="collapse" aria-expanded="false">
            <svg class="svg-icon" id="p-dash19" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
            </svg>
            <span class="ml-4">Pengaturan</span>
            <i class="las la-angle-right iq-arrow-right arrow-active"></i>
            <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
        </a>
        <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle"> --}}
    <div class="data-scrollbar" data-scroll="4">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu" data-parent="#iq-sidebar-toggle">
            {{-- <ul id="iq-sidebar-toggle" class="iq-menu "> --}}
                <li class="">
                    <a href="{{ url('dashboard') }}" class="svg-icon">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        <span class="ml-4">Dashboards</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#master_brg" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash16" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                        </svg>
                        <span class="ml-4">Master Barang</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="master_brg" class="iq-submenu collapse" data-parent="#otherpage">
                            <li class="">
                                <a href="{{ url('jenisbarang') }}">
                                    <i class="las la-minus"></i><span>Jenis</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('satuanbarang') }}">
                                    <i class="las la-minus"></i><span>Satuan</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('merkbarang') }}">
                                    <i class="las la-minus"></i><span>Merk</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('barang') }}">
                                    <i class="las la-minus"></i><span>Barang</span>
                                </a>
                            </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#pelanggan" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span class="ml-4">Pelanggan</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="pelanggan" class="iq-submenu collapse" data-parent="#otherpage">
                        <li class="">
                            <a href="{{ url('pembeli') }}">
                                <i class="las la-minus"></i><span>Pembeli</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ url('penjual') }}">
                                 <i class="las la-minus"></i><span>Penjual</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#transaksi" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path>
                            <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                        </svg>
                        <span class="ml-4">Transaksi</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="transaksi" class="iq-submenu collapse" data-parent="#otherpage">
                            <li class="">
                                <a href="{{ url('barangmasuk') }}">
                                    <i class="las la-minus"></i><span>Barang Masuk</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('barangkeluar') }}">
                                    <i class="las la-minus"></i><span>Barang Keluar</span>
                                </a>
                            </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#otherpage" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="6 9 6 2 18 2 18 9"></polyline>
                            <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                            <rect x="6" y="14" width="12" height="8"></rect>
                        </svg>
                        <span class="ml-4">Laporan</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                        <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li class="">
                                <a href="{{ url('laporanmasuk') }}">
                                    <i class="las la-minus"></i><span>Lap Barang Masuk</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('laporankeluar') }}">
                                    <i class="las la-minus"></i><span>Lap Barang Keluar</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ url('laporanstok') }}">
                                    <i class="las la-minus"></i><span>Lap Stok Barang</span>
                                </a>
                            </li>
                    </ul>
                </li>
                {{-- <li class=" ">
                    <a href="#otherpage" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash19" width="25" height="25" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                        </svg>
                        <span class="ml-4">Pengaturan</span>
                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                    </a>
                    <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="">
                            <a href="../backend/pages-invoice.html" class="svg-icon">
                                <svg class="svg-icon" id="p-dash14" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                                <span class="ml-4">Menu</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ url('profile') }}" class="svg-icon">
                                <svg class="svg-icon" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="ml-4">Profil</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ url('web') }}" class="svg-icon">
                                <svg class="svg-icon" id="p-dash07" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <span class="ml-4">Web</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="{{ url('user') }}" class="svg-icon">
                                <svg class="svg-icon" id="p-dash10" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline>
                                </svg>
                                <span class="ml-4">User</span>
                            </a>
                        </li>
                            <li class=" ">
                                <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                    <svg class="svg-icon" id="p-dash10" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline>
                                    </svg>
                                    <span class="ml-4">User Details</span>
                                    <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                    <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                </a>
                                <ul id="user" class="iq-submenu collapse" data-parent="#otherpage">
                                        <li class="">
                                            <a href="../app/user-profile.html">
                                                <i class="las la-minus"></i><span>List</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../app/user-add.html">
                                                <i class="las la-minus"></i><span>Role</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../app/user-list.html">
                                                <i class="las la-minus"></i><span>Akses</span>
                                            </a>
                                        </li>
                                </ul>
                        </li>
                    </ul>
                </li> --}}
                <li class="">
                    <a href="#modalLogout" class="svg-icon" data-bs-effect="effect-super-scaled" data-bs-toggle="modal">
                        <svg class="svg-icon" id="h-05-p" width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span class="ml-4">Keluar</span>
                    </a>
                </li>
            </ul>
        </nav>
        <li class="">
        </li>
        <div class="pt-5 pb-2"></div>
    </div>
</div>
