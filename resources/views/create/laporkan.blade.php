@extends('layouts.main')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form action="/success" method="POST">
                        @csrf
                        <label>namalengkap</label>
                        <input type="text" class="form-control" @error('namalengkap') is-invalid @enderror id="namalengkap" name="namalengkap" placeholder="Masukan Nama Lengkap ..">
                        <label>Keluhan</label>
                        <select name="keluh" id="keluh" class="form-control">
                            <option hidden>keluhan</option>
                            <option value="kebersihan">kebersihan</option>
                            <option value="fasilitas">fasilitas</option>
                            <option value="administrasi">administrasi</option>
                        </select>
                        <label>kelas</label>
                        <select name="kelas" id="kelas" class="form-control">
                            <option hidden>kelas</option>
                            <option value="X">X</option>
                            <option value="XI">XI</option>
                            <option value="XII">XII</option>
                        </select>
                        <label>nomorhp</label>
                        <input type="text" class="form-control" name="nomorhp" id="nomor hp" placeholder="Masukan nomor anda">
                        <label>jenis kelamin</label>
                        <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                            <option hidden>jenis kelamin</option>
                            <option value="laki laki">laki laki</option>
                            <option value="perempuan">perempuan</option>
                            <option value="tidak disebukan">tidak disebutkan</option>
                        </select>
                        <label>komentar</label>
                        <textarea name="kategori" id="kategori" cols="10" rows="3" class="form-control"></textarea>
                        <button type="submit" class="btn btn-outline-primary float-right mt-3">Kirim Laporan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>