<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>aas</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>   
</head>
 
<body>
    <section>
        <!--- navigation --->
        <nav>
            <!--- logo --->
            <a href="#" class="logo">Shop </a>
            <!--- menu --->
            <ul>
                <li><a href="#home" class="active">Home page</a></li>
                <li><a href="#product">Product</a></li>
                <li><a href="#testimoni">Testimonials</a></li>
                <li><a href="#sosial">Contact</a></li>
            </ul>
        </nav>

        <div class="banner">
</div>
 
        <!--- text --->
        <div class="text-container" id="home">
            <p>Hello,</p>
            <p>Welcome to MyStore</p>
            <p>a stunning design that speaks for itself</p>
            <p>silahkan cari barang yang anda suka </p>
        </div>
        <!-- model -->
        <img alt="model" class="model" src="ajl.jpg">  
    </section>
 
    <!-- services -->
    <div class="services" id="product">
        <!--text-->
        <div class="services-text ">
            <p>Ini Adalah Product Saya</p>
        </div>
         
        <div class="box-container">
        <!--- 1 --->
            <div class="box-1">
                <span>1</span>
                <p class="heading">80.000</p>
                <img src="cmstr.jpg">
                <form method="post" action="process.php">
                    <input type="hidden" name="product_id" value="1">
                    <input type="hidden" name="product_name" value="Baju cmstr"><label for="quantity_3">Masukkan Jumlah:</label>
                    <input type="number" id="quantity_1" name="quantity_1" min="1" max="15" value="1" required>
                    <button type="submit" name="buy_now">Beli Sekarang</button>
                </form>
            </div>
        <!--- 2 --->
            <div class="box-2">
                <span>2</span>
                <p class="heading">250.000</p>
                <img src="hammerstrout.jpg">
                <form method="post" action="process.php">
                    <input type="hidden" name="product_id" value="2">
                    <input type="hidden" name="product_name" value="celana levis">
                    <label for="quantity_3">Masukkan Jumlah:</label>
                    <input type="number" id="quantity_2" name="quantity_2" min="1" max="20" value="1" required>
                    <button type="submit" name="buy_now">Beli Sekarang</button>
                </form>
            </div>
        <!--- 3 --->
            <div class="box-3">
                <span>3</span>
                <p class="heading">800.000</p>
                <img src="nike.jpg">
                <form method="post" action="process.php">
                    <input type="hidden" name="product_id" value="3">
                    <input type="hidden" name="product_name" value="Sepatu Nike">
                    <label for="quantity_3">Masukkan Jumlah:</label>
                    <input type="number" id="quantity_3" name="quantity_3" min="1" max="5" value="1" required>
                    <button type="submit" name="buy_now">Beli Sekarang</button>
                </form>
            </div>
        </div>
    </div>
</div>


    
    
    <!-- PHP Script to handle the form submission -->
    <?php
    if (isset($_POST['buy_now'])) {
        // Mengambil data dari form
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];

        // Koneksi ke database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "db_store";

        $conn = new mysqli($servername, $username, $password, $database);

        // Memeriksa koneksi ke database
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Menyimpan data pembelian ke database
        $sql = "INSERT INTO tokooren (product_id, product_name) VALUES ('$product_id', '$product_name')";
        if ($conn->query($sql) === TRUE) {
            echo "Pembelian berhasil!";
        } else {
            echo "Terjadi kesalahan: " . $conn->error;
        }

        // Menutup koneksi ke database
        $conn->close();
    }
    ?>
     
    <!--testimonials-->
    <div class="testimoni" id="testimoni">
        <!--text-->
        <div class="testimoni-text ">
            <p>What Our Client Says..</p>
        </div>        
 
        <div class="testimoni-col">
            <div class="testimoni-1">
                <img src="cmstr.jpg">
                <div>
                    <p>Product nya bagus dan nyaman dipakai ketika dimana mana dan bahan nya halus tidak kasar</p>
                    <h3>Client Pertama</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>
 
            <div class="testimoni-2">
                <img src="nike.jpg">
                <div>
                    <p>sepatunya bagus bahannya kuat dan tahan lama dan harga nya juga lumayan murah </p>
                    <h3>Client Kedua</h3>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
        </div>
    </div>
 
    <!-- footer -->
    <footer>
        <p>Interested In Using Our Services?</p>
             
        <!--paragraph-->
        <p>I try to work on your project as quickly as possible. Guarantee for revision until you are satisfied with my work.</p>
        <!--social-->
        <div class="social-icons" id="sosial">
        <a href="https://api.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
<a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>

        </div>
         
        <!--copyright-->
        <p class="copyright"> My Social Media</p>
    </footer>
 
    <!--social-attach-bar-->
    <div class="social">
    <a href="https://api.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
<a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
<a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
<a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
<a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>

    </div>
</body>
 
</html>