<?php
require_once __DIR__ . '/vendor/autoload.php'; // Подключаем autoload.php от Composer

use Database\Connection;

// Получаем экземпляр подключения
$conn = Connection::getInstance();

$pageName = isset($_GET['page']) ? mysqli_real_escape_string($conn, $_GET['page']) : 'default';
$category = isset($_GET['category']) ? mysqli_real_escape_string($conn, $_GET['category']) : 'HTML';
$linkId = isset($_GET['link_id']) ? mysqli_real_escape_string($conn, $_GET['link_id']) : null;

// Если link_id передан, получаем page_id из таблицы links
if ($linkId !== null) {
    $sqlLink = "SELECT page_id FROM links WHERE id = ?";
    $stmtLink = $conn->prepare($sqlLink);

    if (!$stmtLink) {
        die('Error in SQL statement: ' . $conn->error);
    }

    $stmtLink->bind_param("i", $linkId);
    $stmtLink->execute();
    $resultLink = $stmtLink->get_result();

    if ($resultLink->num_rows > 0) {
        $rowLink = $resultLink->fetch_assoc();
        $pageId = $rowLink['page_id'];

        // Теперь используем полученный page_id для выборки контента из таблицы pages
        $sqlContent = "SELECT content, page_name, category_id FROM pages WHERE id = ?";
        $stmtContent = $conn->prepare($sqlContent);

        if (!$stmtContent) {
            die('Error in SQL statement: ' . $conn->error);
        }

        $stmtContent->bind_param("i", $pageId);
        $stmtContent->execute();
        $resultContent = $stmtContent->get_result();

        if ($resultContent->num_rows > 0) {
            $rowContent = $resultContent->fetch_assoc();

            // HTML-разметка с использованием Bootstrap
            echo '
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <span style="display: none">' . $rowContent['category_id'] . $rowContent['page_name'] . '</span>
                                </div>
                                <div class="card-body">
                                    <p class="card-text">' . $rowContent['content'] . '</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ';
        } else {
            echo '<div class="alert alert-danger" role="alert">Page not found</div>';
        }

        $stmtContent->close();
    } else {
        echo '<div class="alert alert-danger" role="alert">Link not found</div>';
    }

    $stmtLink->close();
} else {
    // Если link_id не передан, выбираем контент по умолчанию
    $sqlDefault = "SELECT content, page_name, category_id FROM pages WHERE page_name = ?";
    $stmtDefault = $conn->prepare($sqlDefault);

    if (!$stmtDefault) {
        die('Error in SQL statement: ' . $conn->error);
    }

    $stmtDefault->bind_param("s", $pageName);
    $stmtDefault->execute();
    $resultDefault = $stmtDefault->get_result();

    if ($resultDefault->num_rows > 0) {
        $rowDefault = $resultDefault->fetch_assoc();

        // HTML-разметка с использованием Bootstrap
        echo '
            <div class="container">
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <span style="display: none">' . $rowDefault['category_id'] . $rowDefault['page_name'] . '</span>
                            </div>
                            <div class="card-body">
                                <p class="card-text">' . $rowDefault['content'] . '</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ';
    } else {
        echo '<div class="alert alert-danger" role="alert">Default page not found</div>';
    }

    $stmtDefault->close();
}

$conn->close();
?>
