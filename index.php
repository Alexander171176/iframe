<?php
require_once __DIR__ . '/vendor/autoload.php'; // Подключаем autoload.php от Composer

use Database\Connection;

// Получаем экземпляр подключения
$conn = Connection::getInstance();

// Замените 'HTML' на необходимую категорию
$pageName = isset($_GET['page']) ? mysqli_real_escape_string($conn, $_GET['page']) : 'default';
$category = isset($_GET['category']) ? mysqli_real_escape_string($conn, $_GET['category']) : 'HTML';
$linkId = isset($_GET['link_id']) ? mysqli_real_escape_string($conn, $_GET['link_id']) : null;

try {
    $conn = new Database\Connection("localhost", "root", "", "iframe");

    // Получаем id категории
    $sql_category_id = "SELECT id FROM categories WHERE category_name = ?";
    $stmt_category_id = $conn->prepare($sql_category_id);

    if ($stmt_category_id === false) {
        die("Error during prepare: " . $conn->error);
    }

    $stmt_category_id->bind_param("s", $category);
    $stmt_category_id->execute();
    $stmt_category_id->bind_result($category_id);
    $stmt_category_id->fetch();
    $stmt_category_id->close();

    // Получаем все метки (labels) для данной категории
    $sql_labels = "SELECT id, name FROM category_labels WHERE category_id = ?";
    $stmt_labels = $conn->prepare($sql_labels);

    if ($stmt_labels === false) {
        die("Error during prepare: " . $conn->error);
    }

    $stmt_labels->bind_param("i", $category_id);
    $stmt_labels->execute();
    $result_labels = $stmt_labels->get_result();

    include 'header.php';
    ?>
    <div class="cl col-12 col-sm-6 col-md-6 col-lg-4">
        <!-- Контент в iframe -->
        <iframe id="myIframe" width="100%" height="640" frameborder="0" src="loadPage.php?page=default"></iframe>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-8">
        <section class="ac-container"><!--контейнер аккордеона-->
            <?php
            // Проверка наличия меток
            if (mysqli_num_rows($result_labels) > 0) {
                while ($label = $result_labels->fetch_assoc()) {
                    echo '<div class="ac-div">';
                    echo '<input id="ac-' . $label['id'] . '" name="accordion-' . $label['id'] . '" type="checkbox" />';
                    echo '<label for="ac-' . $label['id'] . '">' . $label['name'] . '</label>';

                    // Получаем все ссылки для данной метки
                    $sql_links = "SELECT id, link_name, title, page_id FROM links WHERE label_id = ?";

                    $stmt_links = $conn->prepare($sql_links);

                    if ($stmt_links === false) {
                        die("Error during prepare: " . $conn->error);
                    }

                    $stmt_links->bind_param("i", $label['id']);
                    $stmt_links->execute();
                    $result_links = $stmt_links->get_result();

                    // Проверка наличия ссылок
                    if (mysqli_num_rows($result_links) > 0) {
                        echo '<article class="ac-large">';
                        echo '<ul class="article-ul">';

                        while ($link = $result_links->fetch_assoc()) {
                            // Получаем page_name по page_id
                            $sql_page_name = "SELECT page_name FROM pages WHERE id = ?";
                            $stmt_page_name = $conn->prepare($sql_page_name);

                            if ($stmt_page_name === false) {
                                die("Error during prepare: " . $conn->error);
                            }

                            $stmt_page_name->bind_param("i", $link['page_id']);
                            $stmt_page_name->execute();
                            $stmt_page_name->bind_result($page_name);
                            $stmt_page_name->fetch();
                            $stmt_page_name->close();

                            echo '<li class="article-li">';
                            echo '<a href="#" data-title="' . $link['title'] . '" class="" onclick="loadIFrame(\'loadPage.php?page=' . $page_name . '&category=' . $category . '&link_id=' . $link['id'] . '\', \'' . $link['title'] . '\')">' . $link['link_name'] . '</a>';
                            echo ' </li>';
                        }

                        echo '</ul>';
                        echo '</article>';
                    } else {
                        // Сообщение, если нет ссылок
                        echo '<article class="ac-large">';
                        echo '<p class="note">No links found for this label.</p>';
                        echo '</article>';
                    }

                    echo '</div>';
                }
            } else {
                // Сообщение, если нет меток
                echo '<p>No labels found.</p>';
            }
            ?>
        </section><!--/контейнер аккордеона-->
    </div>

    </div>

    <!-- Контейнер для вывода данных в разметку Bootstrap -->
    <div id="contentContainer" class="mt-4"></div>

    <?php
    include 'footer.php';

    $stmt_labels->close();
    $conn->close();
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
