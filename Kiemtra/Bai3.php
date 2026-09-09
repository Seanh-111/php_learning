<?php
function inhcn($chieuRong, $chieuCao) {
    for ($i = 0; $i < $chieuCao; $i++) {
        for ($j = 0; $j < $chieuRong; $j++) {
            echo "* ";
        }
        echo "<br>";
    }
}

// Gọi hàm với chiều rộng là 5 và chiều cao là 3
inhcn(5, 3);
?>