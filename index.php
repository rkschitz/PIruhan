<?php
$title = "Inicial lindo";
include 'head.php';
?>
<main class="imgfundoindex d-flex h-100 justify-content-center align-items-center text-white">
    <div class="row">
        <h1>Safe Map</h1>
        <div class="bg-white text-black">
            <pre>
            <?php
            print_r($_SESSION);

            print_r($_SESSION['user']['name']);
            print_r($_SESSION['user']['email']);
            ?>
            </pre>
        </div>
    </div>
</main>

<?php
include "footer.php";
?>