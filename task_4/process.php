<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $division = htmlspecialchars($_POST['Kepanitiaan']); // Sesuaikan dengan nama input di form
    $transfer = htmlspecialchars($_POST['transfer']); // Menangkap informasi tentang transfer
    $file = $_FILES['file'];

    if ($file['error'] === 0) {
        $fileName = $file['name'];
        $fileTmpPath = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileType = mime_content_type($fileTmpPath);

        if ($fileSize <= 102400 && $fileType == 'text/plain') {
            $fileContents = file($fileTmpPath);
            $fileContents = array_map('htmlspecialchars', $fileContents);

            // Redirect to result.php with serialized data
            session_start();
            $_SESSION['formData'] = compact('name', 'email', 'phone', 'gender', 'division', 'transfer', 'fileContents');
            header("Location: result.php");
            exit();
        } else {
            echo "File tidak valid.";
        }
    } else {
        echo "Terjadi kesalahan dalam upload file.";
    }
} else {
    echo "Metode tidak valid.";
}
?>