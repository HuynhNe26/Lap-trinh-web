    <?php
    $host = 'localhost';
    $db = 'bmw_web'; 
    $user = 'root'; 
    $pass = '';


    $conn = new mysqli($host, $user, $pass, $db);


    if ($conn->connect_error) {
        die("Kết nối thất bại: " . $conn->connect_error);
    }


    if (isset($_SESSION['successMessage'])) {
        $successMessage = $_SESSION['successMessage'];
        unset($_SESSION['successMessage']);
    }


    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    $sql = "SELECT masp, tensp, mota, dongia, hinhanh FROM sanpham";
    $result = $conn->query($sql);
    ?>

    <!DOCTYPE html>
    <html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Danh Sách Sản Phẩm</title>
        <style>
            body, h1, h2, p {
                margin: 0;
                padding: 0;
            }

            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                color: #333;
            }

            .container {
                width: 80%;
                margin: 0 auto;
                background: white;
                border-radius: 8px;
                padding: 20px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                padding-bottom: 50px;
            }

            h1 {
                text-align: center;
                margin: 20px 0;
                color: #0056b3;
            }

            .product-list {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                gap: 20px;
            }

            .product {
                background: white;
                border: 1px solid #ddd;
                border-radius: 8px;
                padding: 20px;
                text-align: center;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                transition: transform 0.2s;
            }

            .product:hover {
                transform: scale(1.05);
            }

            .product img {
                width: 100%;
                border-radius: 8px;
                margin-bottom: 15px;
            }

            h2 {
                margin-bottom: 10px; 
            }

            p {
                margin-bottom: 10px; 
            }

            button {
                background-color: #0056b3;
                color: white;
                border: none;
                border-radius: 5px;
                padding: 10px 15px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            button:hover {
                background-color: #004494;
            }

            .quantity-controls {
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 10px 0;
            }

            .quantity-controls button {
                width: 30px;
                height: 30px;
                font-size: 18px;
                line-height: 30px;
                padding: 0;
            }

            .quantity-controls input {
                width: 40px;
                text-align: center;
                font-size: 16px;
                margin: 0 10px;
            }

            .view-cart {
                text-align: center;
                margin: 20px 0;
            }

            .view-cart a {
                text-decoration: none;
                color: white;
                background-color: #0056b3;
                padding: 10px 15px;
                border-radius: 5px;
                transition: background-color 0.3s;
            }

            .view-cart a:hover {
                background-color: #004494;
            }

            /* CSS cho thông báo */
            .notification {
                position: fixed; 
                top: 20px;
                left: 50%; 
                transform: translateX(-50%); 
                margin: 20px 0; 
                padding: 10px; 
                background-color: greenyellow;
                color: red;
                text-align: center;
                display: none; 
                z-index: 1000; 
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div class="notification" id="notification">
            Sản phẩm của quý khách đã được thêm thành công vào giỏ hàng. Mời quý khách vào <a class="view-cart" href="index.php?pid=8">Xem giỏ hàng</a> để xem chi tiết
        </div>

        <div class="container" >
            <h1>Danh Sách Sản Phẩm BMW</h1>
            <div class="product-list">
                <?php if ($result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                        <div class="product">
                            <img src="image/<?php echo $row['hinhanh']; ?>" alt="<?php echo $row['tensp']; ?>">
                            <h2><?php echo $row['tensp']; ?></h2>
                            <p>Nhiên liệu: <?php echo $row['mota']; ?></p>
                            <p>Giá: <?php echo number_format($row['dongia']); ?> VND</p>
                            <form class="add-to-cart-form" method="post">
                                <input type="hidden" name="masp" value="<?php echo $row['masp']; ?>">
                                <div class="quantity-controls">
                                    <button type="button" class="decrease-quantity">-</button>
                                    <input type="number" name="quantity" class="quantity" min="1" value="1" required>
                                    <button type="button" class="increase-quantity">+</button>
                                </div>
                                <button type="button" class="add-to-cart-button">Thêm vào Giỏ Hàng</button>
                            </form>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p>Không tìm thấy sản phẩm nào.</p>
                <?php endif; ?>
            </div>
        </div>

        <script>
            document.querySelectorAll('.add-to-cart-button').forEach(button => {
                button.addEventListener('click', function() {
                    const form = this.parentElement;
                    const formData = new FormData(form);

                    fetch('index.php?pid=8', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => {
                        if (response.ok) {
                        
                            const notification = document.getElementById('notification');
                            notification.style.display = 'block';
                            
                            
                            setTimeout(function() {
                                notification.style.display = 'none';
                            }, 3000);
                        } else {
                            alert('Có lỗi xảy ra, vui lòng thử lại.');
                        }
                    })
                    .catch(error => {
                        console.error('Lỗi:', error);
                    });
                });
            });

            document.querySelectorAll('.decrease-quantity').forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.nextElementSibling;
                    let value = parseInt(input.value);
                    if (value > 1) {
                        input.value = value - 1;
                    }
                });
            });

            document.querySelectorAll('.increase-quantity').forEach(button => {
                button.addEventListener('click', function() {
                    const input = this.previousElementSibling;
                    let value = parseInt(input.value);
                    input.value = value + 1;
                });
            });
        </script>
    </body>
    </html>

    <?php
    $conn->close();
    ?>
