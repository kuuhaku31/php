 <!-- array laptop -->
<?php 
    $laptops = [
        [ "merk" => "Asus",
        "nama" => "Asus Zenbook UM431DA",
        "procie" => "R5 3500U",
        "vga" => "Radeon Vega 8",
        "ram" => "8 GB DDR4",
        "storage" => "512 GB SSD",
        "pic" => "Asus-Zenbook.jpg"
        ],
        [ "merk" => "HP",
        "nama" => "HP PAV X360 Hybrid 15",
        "procie" => "i3 8145U",
        "vga" => "UHD Grapics 620 + MX130 2GB",
        "ram" => "4 GB DDR4",
        "storage" => "1 TB HDD",
        "pic" => "HP-PAV-X360.jpg"
        ],
        [ "merk" => "Lenovo",
        "nama" => "Lenovo ThinkBook 14",
        "procie" => "i3 10110U",
        "vga" => "UHD Grapics 620",
        "ram" => "4 GB DDR4",
        "storage" => "1 TB HDD",
        "pic" => "Lenovo-ThinkBook-14.jpg"
        ],
        [ "merk" => "HP",
        "nama" => "HP Pavilion x360 Convert 14",
        "procie" => "i5 10210U",
        "vga" => "MX130 2GB",
        "ram" => "8 GB DDR4",
        "storage" => "512 GB SSD",
        "pic" => "HP-Pavilion-x360.jpg"
        ],
        [ "merk" => "Acer",
        "nama" => "Acer Swift 3",
        "procie" => "Athlon 300U",
        "vga" => "Radeon Vega 3",
        "ram" => "4 GB DDR4",
        "storage" => "256 GB SSD",
        "pic" => "Acer-Swift-3.jpg"
        ],
        [ "merk" => "Asus",
        "nama" => "Asus A412FL",
        "procie" => "i5 8265U",
        "vga" => "MX250 2 GB",
        "ram" => "8 GB DDR4",
        "storage" => "512 GB SSD",
        "pic" => "Asus-A412FL.jpg"
        ],
        [ "merk" => "Acer",
        "nama" => "Acer SF314",
        "procie" => "i5 8265U",
        "vga" => "MX250 2 GB",
        "ram" => "4 GB DDR4",
        "storage" => "1 TB HDD",
        "pic" => "Acer-SF314.jpg"
        ],
        [ "merk" => "Asus",
        "nama" => "Asus A412DA",
        "procie" => "R5 3500U",
        "vga" => "Radeon Vega 8",
        "ram" => "8 GB DDR4",
        "storage" => "512 GB SSD",
        "pic" => "Asus-A412DA.jpg"
        ]
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        img{
            width: 200px;
        }
    </style>
</head>
<body>
    <h1>Pengelolaan laptop</h1>

    <ul>
        <?php foreach ( $laptops as $laptop) : ?>
            <li>
                <a href="latihan2.php?merk=<?= $laptop["merk"] ?>&nama=<?= $laptop["nama"] ?>&procie=<?= $laptop["procie"] ?>&vga=<?= $laptop["vga"] ?>&ram=<?= $laptop["ram"] ?>&storage=<?= $laptop["storage"] ?>&pic=<?= $laptop["pic"] ?>
                "><?= $laptop["nama"] ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>