<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <div class="container">
        <h1>Formulir Pendaftaran Acara</h1>
        <form id="registrationForm" action="process.php" method="POST" enctype="multipart/form-data">
            <label for="name"><b>Nama Lengkap:</b></label>
            <input type="text" id="name" name="name" required minlength="3" placeholder="Masukkan Nama Anda">

            <label for="email"><b>Email:</b></label>
            <input type="email" id="email" name="email" required placeholder="Masukkan Email Anda">

            <label for="phone"><b>Nomor Telepon:</b></label>
            <input type="tel" id="phone" name="phone" required pattern="[0-9]{10,15}" placeholder="Masukkan Nomor Telepon Anda">

            <label><b>Jenis Kelamin :</b></label>
            <div>
                <label>
                    <input type="radio" id="male" name="gender" value="male" required>
                    Laki-laki
                </label>
                <label>
                    <input type="radio" id="female" name="gender" value="female" required>
                    Perempuan
                </label>
            </div>

            <label for="division"><b>Divisi Panitia :</b></label>
            <select id="division" name="Kepanitiaan" required>
                <option disabled selected value="">Pilih Kepanitiaan</option>
                <optgroup label="Acara">
                    <option value="manajemen_acara">Manajemen Acara</option>
                    <option value="time_keeper">Time Keeper</option>
                    <option value="kreasi">Kreasi</option>
                </optgroup>

                <optgroup label="Operasional">
                    <option value="akomodasi">Akomodasi</option>
                    <option value="logistik">Logistik</option>
                    <option value="konsumsi">Konsumsi</option>
                </optgroup>

                <optgroup label="Keamanan">
                    <option value="system_monitoring">System Monitoring</option>
                    <option value="database_security">Database Security</option>
                    <option value="access_control">Access Control</option>
                    <option value="crowd_control">Crowd Control</option>
                </optgroup>

                <optgroup label="Hubungan Masyarakat">
                    <option value="humas">Humas</option>
                    <option value="pendanaan">Pendanaan</option>
                </optgroup>

                <optgroup label="Media">
                    <option value="dokumentasi">Dokumentasi</option>
                    <option value="desain">Desain</option>
                </optgroup>
            </select>

            <label><b>Bersedia Dipindahkan ke Divisi Lain:</b></label>
            <div>
                <label>
                    <input type="radio" id="transfer_yes" name="transfer" value="yes" required>
                    Ya
                </label>
                <label>
                    <input type="radio" id="transfer_no" name="transfer" value="no" required>
                    Tidak
                </label>
            </div>
            
            <label for="file"><b>Upload File (.txt):</b></label>
            <input type="file" id="file" name="file" accept=".txt" required>

            <label class="confirmation-label">
                <input type="checkbox" name="confirmation" required>
                <i>Saya menyatakan bahwa saya telah mengisi formulir ini dengan benar dan bersungguh-sungguh.</i>
            </label>

            <input type="submit" value="Daftar">
        </form>
    </div>
</body>
</html>