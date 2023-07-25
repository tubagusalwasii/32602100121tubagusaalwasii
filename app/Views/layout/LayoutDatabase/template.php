<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/assets/css/crud.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>CRUD</title>
    </head>
    <body>
        <header>
            <nav>
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td>Nama / Kelas / Praktikum</td>
                    </tr>
                    <tr>
                        <td>Nim</td>
                        <td>:</td>
                        <td>Nim</td>
                    </tr>
                </table>
            </nav>
        </header>
        <?= $this->renderSection('content') ?>
    </body>
</html>