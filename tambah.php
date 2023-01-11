<html>
<head>
</head>
<body>
    <center>
    <h1>Daftar Siswa</h1>
    <from action="proses_tamabh.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" />
            </p>

            <p>
                <label for="kelas">Kelas :</label>
                <input type="text" name="nama" />
            </P>
            <P>
                <label for="Jumlah">Jumlah :</label>
                <select name="Jurusan">
                <option value="RPL">RPL </option>
                     <option value="TSM">TSM </option>
                     <option value="TB">TB </option>
                     <option value="TL">TL </option>
                     <option value="TBG">TBG </option>
</select></br>
            </p>
            <p>
                <label for="tahun">Tahun :</label>
                <input type="text" name="tahun" />
            </p>
            <p>
                <label for="nominal">Nominal :</label>
                <input type="text" name="nominal" />
            </p>
            <p>
                <input type="submit" value="kirim" name="kirim_bayar" />
            </p>
        </fieldset>
</from>
</center>
</body>
</html>