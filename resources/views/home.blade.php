@extends('layouts.master')

@section('top')
@endsection

@section('content')

<!-- Welcome and Reminder Combined Box -->
<div class="box box-primary" style="border: none; box-shadow: none;">
    <div class="box-body" style="margin-bottom: 20px; background-color: #ffffff; padding: 20px; border-radius: 8px;">
    <p style="font-size: 16px; margin: 0 0 20px 0; color: black;">
            Hai, {{ Auth::user()->name ?? 'User' }}   
    <h2 style="font-weight: bold; font-size: 28px; margin: 0 0 10px 0; color: black;">
            Selamat Datang di Sistem Inventaris Barang<br>PT RAGIL PUTRA SUKSES
        </h2>
        </p>
        <div style="background-color:rgb(12, 107, 9); padding: 15px; border-radius: 5px; color: white;">
            <h4 style="margin-top: 0;">Perhatian!</h4>
            <p style="margin: 0;">Silakan pastikan semua data inventaris dan transaksi telah diperbarui hari ini.</p>
        </div>
    </div>
</div>


@endsection
