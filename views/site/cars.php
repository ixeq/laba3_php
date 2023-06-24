<link href='https://fonts.googleapis.com/css?family=Assistant' rel='stylesheet'>
<link rel="stylesheet" href="/PHP_Practice-3lab/public/css/cleaning.css">


<div class="container">
    <div class="main__text">
        <p>Список </p>
    </div>

    <div class="ag-format-container">
        <div class="ag-courses_box">
            <?php foreach ($cars as $item) { ?>
                <div class="ag-courses_item">
                    <a href="#" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>
                        <div class="ag-courses-item_title">
                            <p>Модель: <?= $item->model?></p>
                            <p>Владелиц: <?= $item->owner?></p>
                            <p>Дата: <?= $item->date?></p>
                            <p>Цена: <?= $item->price?></p>
                            <p>Скидка: <?= $item->sell?></p>
                            <p>Долг: <?= $item->debt?></p>
                        </div>
                    </a>
                </div>

                <?php } ?>
        </div>
    </div>
