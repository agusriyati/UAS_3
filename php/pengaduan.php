<?php
include 'config.php';

interface PengaduanInterface
{
    public function insertData($data);
}

class Pengadu implements PengaduanInterface
{
    protected $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function insertData($data)
    {
        // Implementasi insertData
    }
}

class Kejadian extends Pengadu
{
    public function insertData($data)
    {
        // Implementasi insertData untuk Kejadian
    }
}

class FileHandler
{
    private $storagePath;

    public function __construct($storagePath)
    {
        $this->storagePath = $storagePath;
    }

    public function uploadFile($fileData)
    {
        // Implementasi uploadFile
    }
}

class PengaduanHandler
{
    public function createPengaduan(PengaduanInterface $pengaduanObj, $data)
    {
        $pengaduanObj->insertData($data);
        echo "<script>alert('Berhasil Membuat Pengaduan')</script>";
    }
}

if (isset($_POST['buat'])) {
    $pengaduanHandler = new PengaduanHandler();

    $pengaduData = array( /* ... */);
    $kejadianData = array( /* ... */);

    $pengadu = new Pengadu($conn);
    $pengaduanHandler->createPengaduan($pengadu, $pengaduData);

    $kejadian = new Kejadian($conn);
    $pengaduanHandler->createPengaduan($kejadian, $kejadianData);

    $fileHandler = new FileHandler('/path/to/storage');
    $fileHandler->uploadFile($_FILES['uploaded_file']);
}
