    <?php 
    $link = new mysqli("localhost", "root", "", "bmw"); 
    if ($link->connect_error) {
        die("Connection failed: " . $link->connect_error);
    }
    $sql_sanpham = "select * from sanpham";
    $result_sanpham = $link->query($sql_sanpham);

    $masanpham = isset($_GET['masp']) ? (int)$_GET['masp'] : 0;
    $sql_masanpham = "select * from sanpham 
    LEFT JOIN chitiettl on sanpham.machitiettl=chitiettl.machitiettl
    where masp='$masanpham'";
    $result_masanpham = $link->query($sql_masanpham);
    ?>
    <?php
    if ($result_masanpham->num_rows > 0) {
        while ($row = $result_masanpham->fetch_assoc()) {
    ?>
        <div style="background-image: url('image/<?php echo $row['background'] ?>');height: 850px;">
            <div style="padding-top: 250px;padding-left: 100px;">
                <h1 style="color: white;font-size: 50px;">THE <?php echo $row['tenchitiettl']?> </h1>
                <h2 style="color: white;font-size: 30px;"><?php echo $row['tensp']; ?></h2>
                <button href style="background-color: aqua;width: 250px;height: 50px;">đăng ký lái thử</button><br><br>
                <button style="background-color: gray;width: 250px;height: 50px;">tư vấn chi tiết</button>
            </div>
            <div style="padding-top: 150px;padding-left: 100px;">
                <div style="width: 180px;float: left;color:white">
                    <h2 style="font-size: 25px;">Giá từ<br></h2>
                    <h2>
                    <?php echo $row['dongia']; ?>
                    </h2>    
                </div>
                <div style="float: left;color:white">
                    <h2 style="font-size: 25px;">Nhiêu liệu<br></h2>
                    <h2>
                    <?php echo $row['mota']; ?>
                    </h2>
                </div>
            </div>
        </div> 
            <?php
    //       include('product_php/ trong đây ko biết làm sao để gắn cái link trong sql vô  hết cứu tôi với :>>');
    }
    } else {
    }
    $link->close();
    ?>