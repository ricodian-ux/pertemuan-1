<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    <form method="post">
        <input type="number" name="angka1" required placeholder="Angka 1">
        <input type="number" name="angka2" required placeholder="Angka 2">
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        
        switch ($operator) {
            case '+':
                $hasil = $angka1 + $angka2;
                break;
            case '-':
                $hasil = $angka1 - $angka2;
                break;
            case '*':
                $hasil = $angka1 * $angka2;
                break;
            case '/':
                if ($angka2 != 0) {
                    $hasil = $angka1 / $angka2;
                } else {
                    $hasil = "Tidak bisa membagi dengan nol!";
                }
                break;
        }
        echo "<h2>Hasil: $hasil</h2>";
    }
    ?>
</body>
</html>
