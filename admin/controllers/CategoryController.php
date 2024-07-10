<?php

function categoryListAll()
{
    $title = 'Danh sách category';
    $view = 'categories/index';
    $script = 'datatable';
    $script2 = 'categories/script';
    $style = 'datatable';
    
    $categories = listAll('categories');

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function categoryShowOne($id)
{
    $category = showOne('categories', $id);

    if(empty($category)) {
        e404();
    }

    $title = 'Chi tiết category: ' . $category['name'];
    $view = 'categories/show';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function categoryCreate()
{
    $title = 'Thêm mới category';
    $view = 'categories/create';

    if (!empty($_POST)) {
        
        $data = [
            "name" => $_POST['name'] ?? null,
        ];

        insert('categories', $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=categories');
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}



function categoryUpdate($id)
{
    $category = showOne('categories', $id);

    if(empty($category)) {
        e404();
    }

    $title = 'Cập nhật category: ' . $category['name'];
    $view = 'categories/update';

    if (!empty($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? $category['name'],
        ];

        update('categories', $id, $data);

        $_SESSION['success'] = 'Thao tác thành công!';

        header('Location: ' . BASE_URL_ADMIN . '?act=category-update&id=' . $id);
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}



function categoryDelete($id)
{
    delete2('categories', $id);

    $_SESSION['success'] = 'Thao tác thành công!';
    
    header('Location: ' . BASE_URL_ADMIN . '?act=categories');
    exit();
}