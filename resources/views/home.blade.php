@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
					<form>
						&nbsp
					 <div class="pull-right">
				
                <a class="btn btn-success" style="margin-right: 30px" style="margin-top: 30px" href="{{ route('ipadress.index') }}"> Ip Adress.</a>
				<a class="btn btn-success" href="{{ route('products.index') }}"> Inventory.</a>
            </div>
			&nbsp
		
		</form>
                </div>
               <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <h1 align="center">السلام عليكم</h1>
                        <p><code>Sistem Aset Komputer 1.0</code>(Sisip) merupakan sistem pengurusan daftar masuk aset,ip dan pengguna secara integrasi  dalam rangka melaksanakan 
                                  susunan yang teratur bagi pengelolaan dan daftar/masuk aset.</p>
                        Sistem Aset Komputer berfungsi untuk melakukan catatan atau daftar/masuk mengenai  pengesahan, penggunaan, pembaikkan, status, serta keadaan aset tersebut. 
                            Aset  meliputi komputer riba, mesin cetak, mesin salinan, komputer desktop, ip, software dan aset-aset yang terdapat di syarikat Espek Sdn. Bhd.
                            Sistem ini dapat digunakan oleh Unit Komputer Espek (IT), Aset-aset yang dimiliki Espek Sdn. Bhd. dapat dipantau tentang kewujudan, nilai, pergerakan dan keadaannya. Sistem Aset Kompter diperlukan dalam Utilisasi Ruang dan sharing Fasilitasi antar Departmen atau Pihak tertentu.
                        <p></p>
                         <p>Tetapan </p> 
                             <h5 >¤ Kemaskini IP Adress</h5>
                             <h5 >¤ Daftar/Masuk Software Pengguna</h5>
                             <h5 >¤ Kemaskini Versi Sofware</h5>
                             <h5 >¤ Kemaskini Aset No</h5>
                         
                       
                    </div>
            </div>
        </div>
    </div>
</div>


@endsection
