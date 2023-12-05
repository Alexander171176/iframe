<?php
include(__DIR__ . '/database/db_connection.php');

// Замените 'HTML' на необходимую категорию
$category = isset($_GET['category']) ? $_GET['category'] : 'HTML';

try {
    $conn = new Database\Connection("localhost", "root", "", "iframe");

    $sql = "SELECT links.link_name, links.title, pages.page_name, categories.category_name
            FROM links
            INNER JOIN pages ON links.page_id = pages.id
            INNER JOIN categories ON links.category_id = categories.id
            WHERE categories.category_name = ?";


    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error during prepare: " . $conn->error);
    }

    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        die("Error during query execution: " . $stmt->error);
    }

    include 'header.php';
    ?>
    <div class="cl col-12 col-sm-6 col-md-6 col-lg-4">
        <!-- Контент в iframe -->
        <iframe id="myIframe" width="100%" height="640" frameborder="0" src="loadPage.php?page=default"></iframe>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <!-- Ссылки -->
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<a href="#" data-title="' . $row['title'] . '" class="btn btn-primary mb-2" onclick="loadIFrame(\'loadPage.php?page=' . $row['page_name'] . '&category=' . $category . '\', \'' . $row['title'] . '\')">' . $row['link_name'] . '</a>';
            }
        } else {
            echo "No links found";
        }
        ?>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-4">

    </div>
    </div>

    <!-- Контейнер для вывода данных в разметку Bootstrap -->
    <div id="contentContainer" class="mt-4"></div>

    <?php
    include 'footer.php';

    $stmt->close();
    $conn->close();
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
