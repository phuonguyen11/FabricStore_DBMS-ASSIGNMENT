<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "bu";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
?>

<section id ="collab">
    <div class="container">
        <h4 class ="font-rale font-size-16">Hợp Tác Vận Chuyển</h4>
    <hr>
        <div class="owl-carousel owl-theme">
            <div class="item py-2">
                <?php
                    $sql = "SELECT * FROM DeliveryUnit";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            if ($row["outS"] == 1) {
                                echo '
                                    <div class="product font-alex">
                                        <a href="#"><img style ="scale: 0.5" src="https://www.freeiconspng.com/thumbs/bus-driver-icon-png/bus-driver-icon-24.png" alt="product1" class="img-fluid"></a>
                                        <div class ="text-center">
                                            <h6>'.$row["DriverInf"].'</h6>
                                            <div class="rating text-warning font-size-12">
                                                <span><i class ="fas fa-star"></i></span>
                                                <span><i class ="fas fa-star"></i></span>
                                                <span><i class ="fas fa-star"></i></span>
                                                <span><i class ="fas fa-star"></i></span>
                                                <span><i class ="fas fa-star"></i></span>
                    
                                            </div>
                                            <button type="submit" class ="btn btn-dark font-size-12">Đánh giá</button>
                                        </div>
                                    </div>
                                ';
                            }
                        }
                    }
                ?>
            </div>
            
        </div>
    </div>
</section>
