
    <head>
        <title>EDIT DATA PENGGUNA</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <body>
        <div class="container-fluid px-4">
            <h2>Edit Data Pengguna</h2>
            <form action="{{route('prosesupdate',$data->id)}}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                Nama</br>
                <input class="form-control" type="text" id="name" name="name" placeholder="Nama Pengguna" value="{{$data->name}}">
                
                <div class="row">
                    <div class="form-group col-md-6"> <br>
                        <label for="role_id">Role</label>
                        <select class="form-control" id="role_id" name="role_id" >
                            @foreach($roles as $r) 
                            <option value="{{$r->id}}" {{ $data->role_id == $r->id ? 'selected' : '' }}>{{$r->name}}</option>
                            @endforeach
                        </select> 
                    </div> 
                    <div class="form-group col-md-6"> <br>
                        <label for="userpassword" >Password</label>
                        <div class="input-group">
                            
                            <input type="password" class="form-control" id="password" name="password"  placeholder="Masukkan password" value="{{$data->password}}">
                            <div class="input-group-append">
                                <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                                <span id="mybutton" onclick="change()" class="input-group-text">
                                    <!-- icon mata bawaan bootstrap  -->
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6"> <br>
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{$data->email}}">
                    </div> 
                    <div class="form-group col-md-6"><br>
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Masukkan nomor telepon anda" value="{{$data->phone}}">
                    </div>
                </div> <br>

                <div class="mb-3">
                    <label for="address" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="address" name="address" rows="3">{{$data->address}}</textarea>
                </div>
                
                <!-- <div class="mb-3">
                    <label for="foto">Unggah Foto</label> 
                    <input class="form-control" id="foto" name="foto" type="file" value="{{$data->foto}}">
                </div>
                </br> -->
                <button type="submit" name="submit_btn"  class="btn btn-primary my-3" >Update</button>
            </form>
        </div>
        
        <script>
            // membuat fungsi change
            function change() {
    
                // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
                var x = document.getElementById('password').type;
    
                //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
                if (x == 'password') {
    
                    //ubah form input password menjadi text
                    document.getElementById('password').type = 'text';
                    
                    //ubah icon mata terbuka menjadi tertutup
                    document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                                    <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                                    <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                                    </svg>`;
                }
                else {
    
                    //ubah form input password menjadi text
                    document.getElementById('password').type = 'password';
    
                    //ubah icon mata terbuka menjadi tertutup
                    document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                    </svg>`;
                }
            }
        </script>
        
    </body>
