<?php
include "header.php";

?>

    <section> 
        <h2>Tentang Program</h2>
        <p>
            Kelas kopi adalah program pelatihan sederhana utk pemula yang ingin 
            belajar teknik dasar menyeduh kopi, membuat latte art, dan memahami peluang 
            bisnis kopi rumahan.
        </p>
    </section>

    <section> 
        <h2>Pilihan Kelas</h2>
        
        <div class="cards">
            <?php
            $sql = "select * from courses";
            $query = mysqli_query($conn, $sql);
            while($result = mysqli_fetch_array($query)) {
            ?>
            <div class="card">
                <h3><?=$result['name'] ?></h3>
                <p>
                    <?= $result['description']?>
                </p>
                <strong>RP <?= $result['price'] ?></strong>
                </div>
                <?php
            }
            ?>
            </div>
        </div>
    </section>
</body>
</html>