@extends('layouts.main')

@section('container')
    


        <div class="row">
            <div class="col-lg-8 mb-5 container p-3 my-3 border">
                <h1 class="text-center">Form Biodata Pegawai</h1>
                <form action="" id="form" method="POST">
                    <div class="alert alert-secondary">
                        <strong> DATA DIRI </strong>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                            <label for="">  Nama Lengkap <em style="color: red;">*</em></label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Lengkap">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for=""> Jenis Kelamin <em style="color: red;">*</em></label>
                                <select class="form-select form-select-sm" aria-label="Small select example">
                                    <option selected>Pilih</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for=""> Nomor Identitas (NIK KTP) <em style="color: red;">*</em></label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan No KTP">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for=""> Nomor NPWP <em style="color: red;">*</em></label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukkan No NPWP">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for=""> Agama <em style="color: red;">*</em></label>
                                <select class="form-select form-select-sm" aria-label="Small select example">
                                    <option selected>Pilih</option>
                                    <option value="islam">Islam</option>
                                    <option value="kristen_protestan">Kristen Protestan</option>
                                    <option value="kristen_katolik">Kristen Katolik</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budhha</option>
                                    <option value="konghucu">Khonghucu</option>
                                </select>
                            </div>
                        </div>
                    </div>

                        <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for=""> Tempat Lahir <em style="color: red;">*</em></label>
                                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                                        </div>
                                    </div>
                                    <div class="col-sm-4"> 
                                        <div class="form-group">
                                            <label for="">Tanggal Lahir <em style="color: red;">*</em></label>
                                            <input type="date" name="tanggal_lahir" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for=""> Status <em style="color: red;">*</em></label>
                                            <select class="form-select form-select-sm" aria-label="Small select example">
                                                <option selected>Pilih</option>
                                                <option value="belum_menikah">TK (Tidak Kawin)</option>
                                                <option value="menikah">K (Kawin)</option>
                                                <option value="janda">Janda</option>
                                                <option value="duda">Duda</option>
                                            </select>
                                        </div>
                                    </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for=""> Jumlah Anak <em style="color: red;">*</em> </label>
                                        <select class="form-select form-select-sm" aria-label="Small select example">
                                            <option selected>Pilih</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <d  iv class="form-check">
                                        <label for="">Kewarganegaraan <em style="color: red;">*</em> </label>
                                        <br>
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1"> Warga Negara Indonesia (WNI)</label>
                                    </d>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">Warga Negara Asing(WNA)</label>
                                        </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for=""> Unit Kerja <em style="color: red;">*</em> </label>
                                        <select class="form-select form-select-sm" aria-label="Small select example">
                                            <option selected>Pilih</option>
                                            <option value="sdm">SDM</option>
                                            <option value="simpin">Simpan Pinjam</option>
                                            <option value="rupus">Rupa - Rupa Usaha</option>
                                            <option value="jtk">Jasa Tenaga Kerja</option>
                                            <option value="keuangan">Keuangan</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for=""> E-mail <em style="color: red;">*</em></label>
                                        <input type="email" name="email" class="form-control" placeholder="Masukkan e-mail">
                                    </div>
                                </div>
                                <div class="col-sm-4"> 
                                    <div class="form-group">
                                        <label for="">Nomor Handphone <em style="color: red;">*</em></label>
                                        <input type="text" name="no_hp" class="form-control" placeholder="Masukkan nomor Handphone">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for=""> Nama Sodara Kandung <em style="color: red;">*</em></label>
                                        <input type="text" class="form-control" placeholder="Masukkan nama sodara kandung">
                                    </div>
                                </div>
                            </div>
                            <br> 
                            {{-- Baris baru --}}

                        <div class="alert alert-secondary">
                            <strong> DATA ALAMAT DOMISILI </strong>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for=""> Alamat Lengkap <em style="color: red;">*</em></label>
                                    <textarea class="form-control" id="" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for=""> Kode Pos <em style="color: red;">*</em></label>
                                    <input type="text" name="kode_pos" class="form-control" placeholder="">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for=""> Kecamatan <em style="color: red;">*</em></label>
                                        <input type="email" name="email" class="form-control" placeholder="Masukkan Kecamatan">
                                    </div>
                                </div>
                                <div class="col-sm-4"> 
                                    <div class="form-group">
                                        <label for="">Kabupaten/Kota<em style="color: red;">*</em></label>
                                        <input type="text" name="no_hp" class="form-control" placeholder="Masukkan Kabupaten/Kota">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for=""> Provinsi <em style="color: red;">*</em></label>
                                        <input type="text" class="form-control" placeholder="Masukkan nama sodara kandung">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        {{-- Baris baru --}}
                        
                        <div class="alert alert-secondary">
                            <strong> RIWAYAT PENDIDIKAN FORMAL </strong>
                        </div>

                        <div class="alert alert-secondary">
                            <strong> PENGALAMAN KERJA / ORGANISASI </strong>
                        </div>

                </form>
            </div>
        </div>
    
@endsection
