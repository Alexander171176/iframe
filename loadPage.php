<?php
require_once __DIR__ . '/vendor/autoload.php'; // Подключаем autoload.php от Composer

use Database\Connection;

// Получаем экземпляр подключения
$conn = Connection::getInstance();

$pageName = isset($_GET['page']) ? mysqli_real_escape_string($conn, $_GET['page']) : 'default';
$category = isset($_GET['category']) ? mysqli_real_escape_string($conn, $_GET['category']) : 'HTML';
$linkId = isset($_GET['link_id']) ? mysqli_real_escape_string($conn, $_GET['link_id']) : null;

if ($linkId !== null) {
    // Получаем page_id из таблицы links
    $sql = "SELECT page_id FROM links WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die('Error in SQL statement: ' . $conn->error);
    }

    // Указываем тип параметра для link_id
    $stmt->bind_param("i", $linkId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $pageId = $row['page_id'];

        // Теперь используем полученный page_id для выборки контента из таблицы pages
        $sqlContent = "SELECT content, category_id FROM pages WHERE id = ?";
        $stmtContent = $conn->prepare($sqlContent);

        if (!$stmtContent) {
            die('Error in SQL statement: ' . $conn->error);
        }

        // Указываем тип параметра для page_id
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
                                    ' . $rowContent['page_name'] . '
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

    $stmt->close();
} else {
    echo '<div class="alert alert-danger" role="alert">Default page not found</div>';
}

$conn->close();
?>
