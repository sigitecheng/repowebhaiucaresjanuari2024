
        <!--Main Content-->

        <div class="row main-content h-screen" color: #fff;">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center">
                        <img src="assets/img/client-img4.png" alt="" class="rounded-circle" />
                        <p><strong>{{ auth()->user()->name }}</strong></p>
                        <span class="text-primary small">Anda Adalah, <strong>
                            @if(auth()->check() && auth()->user()->is_admin == 1)
                                Super Admin
                            @else
                                User
                            @endif
                        </strong></span>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">

                            <li class="parent">
                                <a href="#" onclick="toggle_menu('tables'); return false" class=""><i class="fab fa-ravelry mr-3"></i>
                                    <span class="none">Dashboard Frontend <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="tables">
                                    <li class="child">
                                        <a href="/adminberanda/post" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-home mr-2"></i>Beranda
                                        </a>
                                    </li> 
                                    <li class="child">
                                        <a href="/adminberanda/tentangkami" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-info-circle mr-2"></i>Tentang
                                        </a>
                                    </li> 

                                    <li class="child">
                                        <a href="/adminberanda/layanankami" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-cogs mr-2"></i>Layanan
                                        </a>
                                    </li>

                                    <li class="child">
                                        <a href="/adminberanda/donasi" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-donate mr-2"></i>Donasi
                                        </a>
                                    </li>

                                    <li class="child">
                                        <a href="/adminberanda/projectkami" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-folder mr-2"></i>Project
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="parent">
                                <a href="/dashboard" class=""><i class="fab fa-bandcamp mr-3"> </i>
                                    <span class="none">Data Interface </span>
                                </a>
                            </li>
                            
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('form_element'); return false " ><i class="fas fa-hdd mr-3"></i>
                                    <span class="none">Data Pekerjaan <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>

                                @php
                                        $categoryIcons = [
                                            'All Data' => 'fa fa-database mr-2',
                                            'Infrastruktur' => 'fas fa-hammer mr-2',
                                            'Pendidikan' => 'fa fa-book mr-2',
                                            'Kesehatan' => 'fa fa-hospital mr-2',
                                            'Makanan' => 'fas fa-utensils mr-2',
                                        ];
                                    @endphp

                                    <ul class="children" id="form_element">
                                        <li class="child">
                                            <a href="/dashboard/posts" class="ml-4 btn btn-sn button-edit mb-2 rounded mr-4" style="text-align: left;">
                                                <span data-feather="file-plus"></span>
                                                <i class="fas fa-database mr-2 justify-left"></i> All Data
                                            </a>
                                        </li>
                                        @foreach ($categories as $cat)
                                        <li class="child">
                                            <a href="/blog?category={{ $cat->slug }}" class="ml-4 btn btn-sn button-custom mb-2 rounded mr-4" style="text-align: left;">
                                                <span data-feather="file-plus"></span>
                                                <i class="{{ $categoryIcons[$cat->nama_kategori] }}"></i> {{ $cat->nama_kategori }}
                                            </a>
                                        </li>
                                        
                                        @endforeach
                                    </ul>
                            </li>

                            <li class="parent">
                                <a href="#" onclick="toggle_menu('tables1'); return false" class=""><i class="fas fa-users mr-3"></i>
                                    <span class="none">Daftar Mitra <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>

                                <ul class="children" id="tables1">
                                    <li class="child">
                                        <a href="/backend/kontraktor" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                                <i class="fas fa-hammer mr-2"></i>Kontraktor
                                        </a>
                                    </li>

                                    <li class="child">
                                        <a href="/backend/rumahmakan" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fas fa-utensils mr-2"></i> Rumah Makan                         
                                        </a>
                                    </li>

                                    <li class="child">
                                        <a href="/backend/rumahsakit" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fas fa-hospital mr-2"></i> Rumah Sakit                         
                                        </a>
                                    </li> 

                                    <li class="child">
                                        <a href="/backend/instansipendidikan" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fas fa-graduation-cap mr-2"></i>Instansi Pendidikan                         
                                        </a>
                                    </li> 
                                </ul>
                            </li>

                            <li class="parent">
                                <a href="#" onclick="toggle_menu('tables2'); return false" class=""><i class="fas fa-users mr-3"></i>
                                    <span class="none">Daftar Pekerja <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>

                                <ul class="children" id="tables2">
                                  
                                    <li class="child">
                                        <a href="/users" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fas fa-user mr-2"></i> Users App                         
                                        </a>
                                    </li>

                                    <li class="child">
                                        <a href="/datapenanggungjawab/data" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fas fa-user mr-2"></i> Penanggung Jawab                         
                                        </a>
                                    </li> 
                                
                                    <li class="child">
                                        <a href="/datapengawaslapangan/data" class="ml-4 btn btn-sn button-custom  mb-2 rounded mr-4" style="text-align: left;">
                                            <i class="fas fa-user mr-2"></i> Pengawas Lapangan                         
                                        </a>
                                    </li> 
                                
                                </ul>
                            </li>
                        
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('form_element'); return false" class=""><i class="fa fa-pencil-square mr-3"></i>
                                    <span class="none">Form Elements <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="form_element">
                                    <li class="child"><a href="form-general.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Basic Elements</a></li>
                                    <li class="child"><a href="form-advanced.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Advanced Elements</a></li>
                                    <li class="child"><a href="form-validation.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Validation</a></li>
                                    <li class="child"><a href="form-wizard.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Form Wizard</a></li>
                                </ul>
                            </li>

                            <li class="parent">
                                <a href="#" onclick="toggle_menu('charts'); return false" class=""><i class="fa fa-pie-chart mr-3"></i>
                                    <span class="none">Charts <i class="fa fa-angle-down pull-right align-bottom"></i></span>
                                </a>
                                <ul class="children" id="charts">
                                    <li class="child"><a href="chart.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Chart JS</a></li>
                                    <li class="child"><a href="chartist.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Chartist JS</a></li>
                                    <li class="child"><a href="echarts.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Echarts JS</a></li>
                                    <li class="child"><a href="flot.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Flot JS</a></li>
                                    <li class="child"><a href="morris.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Morris JS</a></li>
                                    <li class="child"><a href="nvd3.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> NVD3 JS</a></li>
                                    <li class="child"><a href="sparkline.html" class="ml-4"><i class="fa fa-angle-right mr-2"></i> Sparkline JS</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->
