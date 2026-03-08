<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>Form Ubah Data User</h1>
    <form method="post" action="/user/ubah_simpan/{{ $data->user_id}}">
    {{csrf_field()}}
    {{method_field('PUT')}}
    <label>Username</label>
    <input type="text" name="username" placeholder="Masukkan Username">
    <br>
    <label>Nama</label>
    <input type="text" name="nama" placeholder="Masukkan Nama">
    <br>
    <label>Password</label>
    <input type="password" name="password" placeholder="Masukkan Passwrod">
    <br>
    <label>Level ID</label>
    <input type="number" name="level_id" placeholder="Masukkan ID Level">
    <br><br>
    <input type="submit" class="btn btn-success" value="Simpan">
    </form>
</body>
</html>