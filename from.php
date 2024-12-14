<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Rata-Rata Nilai</title>
    <script>
        function hitungRataRata() {
            let nilai1 = parseFloat(document.getElementById('nilai1').value) || 0;
            let nilai2 = parseFloat(document.getElementById('nilai2').value) || 0;
            let nilai3 = parseFloat(document.getElementById('nilai3').value) || 0;
            
            let rataRata = (nilai1 + nilai2 + nilai3) / 3;
            document.getElementById('rataRata').textContent = rataRata.toFixed(2);

            let keterangan = "Tidak Lulus";
            if (rataRata >= 75) {
                keterangan = "Lulus";
            }

            let grade = "C";
            if (rataRata >= 85) {
                grade = "B";
            }
            if (rataRata >= 90) {
                grade = "A";
            }

            document.getElementById('keterangan').textContent = keterangan;
            document.getElementById('grade').textContent = grade;
        }

        function resetForm() {
            document.getElementById('formNilai').reset();
            document.getElementById('rataRata').textContent = "";
            document.getElementById('keterangan').textContent = "";
            document.getElementById('grade').textContent = "";
        }
    </script>
</head>
<body>
    <h2>Hitung Rata-Rata Nilai</h2>
    <form id="formNilai">
        <label for="nama">Nama Mahawasiswa:</label>
        <input type="text" id="nama" name="nama"><br><br>
        
        <label for="nilai1">Ujian Tengah Semester:</label>
        <input type="number" id="nilai1" name="nilai1"><br><br>

        <label for="nilai2">Tugas Mandiri:</label>
        <input type="number" id="nilai2" name="nilai2"><br><br>

        <label for="nilai3">Ujian Akhir Semester:</label>
        <input type="number" id="nilai3" name="nilai3"><br><br>

        <button type="button" onclick="hitungRataRata()">Riset</button>
        <button type="button" onclick="resetForm()">Hitung Rata-Rata</button>
    </form>

</body>
</html>