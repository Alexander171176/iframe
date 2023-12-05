<?php
include(__DIR__ . '/database/db_connection.php');

$pageName = isset($_GET['page']) ? $_GET['page'] : 'default';

$sql = "SELECT pages.content, pages.category_id, categories.category_name
        FROM pages
        LEFT JOIN categories ON pages.category_id = categories.id
        WHERE page_name = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die('Error in SQL statement: ' . $conn->error);
}

$stmt->bind_param("s", $pageName);

$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // HTML-разметка с использованием Bootstrap
    echo '
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            ' . $row['category_name'] . '
                        </div>
                        <div class="card-body">
                            <p class="card-text">' . $row['content'] . '</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ';
} else {
    echo '<div class="alert alert-danger" role="alert">Page not found</div>';
}

$stmt->close();
$conn->close();
?>
