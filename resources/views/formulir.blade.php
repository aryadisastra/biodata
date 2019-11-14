<html>
<head>
</head>

<body>
    <form action="/formulir/proses" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        Nama :
        <input type="text" name="nama"> <br/>
        Alamat :
        <input type="text" name="alamat"> <br/>
        Kelas :
        <input type="text" name="kelas"> <br/>
        Umur :
        <input type="text" name="umur"> <br/>
        Jenis Kelamin :
        <input type="text" name="gender"> <br/>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
