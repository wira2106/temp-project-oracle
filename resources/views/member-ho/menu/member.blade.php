@extends('../master')
@section('content')

    <script> $(".nav-item-home").addClass("active"); </script>

    <div class="container-fluid">
        <div class="card-header">
           View Member
        </div>
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="container mt-4">
                    <!-- ============================ -->
                    <!--             Table            -->
                    <!-- ============================ -->
                    <div class="table-container">
                        <table class="table table-bordered" id="table_member">
                        <thead>
                            <tr>
                            <th scope="col">Kode IGR</th>
                            <th scope="col">Kode Member</th>
                            <th scope="col">Nama Member</th>
                            <th scope="col">Alamat Member</th>
                            <!-- Add more headers as needed -->
                            </tr>
                        </thead>
                        <tbody id="table-content">
                            <tr>
                                <td scope="row">01</td>
                                <td>13221</td>
                                <td>RIO RISGIANO RK</td>
                                <td>JL. KESATRIA,VII, NO. 32</td>
                                <!-- Add more rows as needed -->
                            </tr>
                            <!-- Add more rows as needed -->
                            <tr>
                                <td scope="row">01</td>
                                <td>13222</td>
                                <td>RIO RISGIANO RK</td>
                                <td>JL. KESATRIA,VII, NO. 32</td>
                                <!-- Add more rows as needed -->
                            </tr>
                            <!-- Add more rows as needed -->
                            <tr>
                                <th scope="row">01</th>
                                <td>13221</td>
                                <td>RIO RISGIANO RK</td>
                                <td>JL. KESATRIA,VII, NO. 32</td>
                                <!-- Add more rows as needed -->
                            </tr>
                            <!-- Add more rows as needed -->
                            <tr>
                                <th scope="row">01</th>
                                <td>13221</td>
                                <td>RIO RISGIANO RK</td>
                                <td>JL. KESATRIA,VII, NO. 32</td>
                                <!-- Add more rows as needed -->
                            </tr>
                            <!-- Add more rows as needed -->
                            <tr>
                                <th scope="row">01</th>
                                <td>13221</td>
                                <td>RIO RISGIANO RK</td>
                                <td>JL. KESATRIA,VII, NO. 32</td>
                                <!-- Add more rows as needed -->
                            </tr>
                            <!-- Add more rows as needed -->
                        </tbody>
                        </table>
                    </div>
                    <!-- ============================ -->
                    <!--         End Table            -->
                    <!-- ============================ -->
                    
                

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div class="d-flex justify-content-start">
                                <input type="hidden" class="text">
                                <button onclick="search()" type="button" data-toggle="modal" data-target="#modal_search" class="mr-1 btn btn-lg btn-info">Search</button>
                                <button onclick="edit(this)" type="button" data-toggle="modal" data-target="#modal_edit" class="mr-1 btn btn-lg btn-default tombol_edit">Edit</button> 
                                <button onclick="reset_selected()" type="button" class="mr-1 btn btn-lg btn-danger tombol_reset">Reset</button> 
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-end">
                                <input type="hidden" class="text">
                                <button onclick="alokasi(this)" type="button" class="mr-1 btn btn-lg btn-info">Alokasi</button>
                            </div>
                        </div>
                    </div>
                    <!-- ============================ -->
                    <!--             Modal Search     -->
                    <!-- ============================ -->
                    <div class="modal fade" id="modal_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <!-- <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><span class="title modal_title_user"></span></h5>
                                </div> -->
                                <div class="modal-body tambah_perhitungan" style="margin:0px;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="user-profile text-left">
                                                <div class="name text-black modal_title_form">Member Detail</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="close  d-flex justify-content-right" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                
                                    <!-- ================================== -->
                                    <!-- Modal Form Perhitungan             -->
                                    <!-- ================================== -->

                                    <form action="" method="post" class="form_data">
                                        @csrf
                                                <div class="row pt-md-4">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <p class="font-weight-light">Masukan Nama/ Kode yang ingin dicari</p>
                                                            <input type="text" class="form-control form-control-sm" placeholder="Nama / Kode" id="datepicker" name="search" value=""/>
                                                            <div class="search">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Button Submit -->
                                                <div class="d-flex justify-content-end">
                                                    <button class="btn btn-info px-4" type="submit">OK</button>
                                                    <button class="btn btn-danger mr-2" data-dismiss="modal" type="button">Cancel</button>
                                                </div>

                                    </form>
                                    <!-- ================================== -->
                                    <!-- End Modal Form Perhitungan         -->
                                    <!-- ================================== -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================ -->
                    <!--         End Modal Search     -->
                    <!-- ============================ -->
                    <!-- ============================ -->
                    <!--             Modal Edit       -->
                    <!-- ============================ -->
                    <div class="modal fade" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <!-- <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><span class="title modal_title_user"></span></h5>
                                </div> -->
                                <div class="modal-body tambah_perhitungan" style="margin:0px;">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="user-profile text-left">
                                                <div class="name text-black modal_title_form">Member Detail</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="button" class="close  d-flex justify-content-right" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    </div>
                                
                                    <!-- ================================== -->
                                    <!-- Modal Form Perhitungan             -->
                                    <!-- ================================== -->

                                    <form action="" method="post" class="form_data">
                                        @csrf
                                                <div class="row pt-md-4">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label> Nama </label>
                                                            <input type="text" class="form-control form-control-sm" placeholder="Nama / Kode" id="datepicker" name="search" value=""/>
                                                            <div class="search">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label> Nama </label>
                                                            <input type="text" class="form-control form-control-sm" placeholder="Nama / Kode" id="datepicker" name="search" value=""/>
                                                            <div class="search">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Button Submit -->
                                                <div class="d-flex justify-content-end">
                                                    <button class="btn btn-info px-4" type="submit">Save</button>
                                                    <button class="btn btn-danger mr-2" data-dismiss="modal" type="button">Cancel</button>
                                                </div>

                                    </form>
                                    <!-- ================================== -->
                                    <!-- End Modal Form Perhitungan         -->
                                    <!-- ================================== -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================ -->
                    <!--         End Modal Edit       -->
                    <!-- ============================ -->
                    
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/app-member-ho.js')}}"></script>
    <script src="{{asset('js/app-submitForm.js')}}"></script>
    <script src="{{asset('js/app-hapus.js')}}"></script>
@endsection