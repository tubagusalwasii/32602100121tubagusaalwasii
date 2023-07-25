<!DOCTYPE html>
<html>
<head>
    <title>Form Input Data</title>
</head>
<body>
    <h1>Form Input Data</h1>
    <form method="POST" action="<?php echo site_url('process-form'); ?>">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama"><br><br>
        
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim"><br><br>
        
        <label for="kelas">Kelas:</label><br>
        <input type="text" id="kelas" name="kelas"><br><br>
        
        <label for="matakuliah">Mata Kuliah:</label><br>
        <input type="text" id="matakuliah" name="matakuliah"><br><br>
        
        <label for="dosen">Dosen Pengampu:</label><br>
        <input type="text" id="dosen" name="dosen"><br><br>
        
        <label for="asisten">Asisten Praktikum:</label><br>
        <input type="text" id="asisten" name="asisten"><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
