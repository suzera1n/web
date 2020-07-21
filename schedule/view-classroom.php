<?php
require_once 'secure.php';
if (!Helper::can('admin') && !Helper::can('manager')) {
    header('Location: 404.php');
    exit();
    }
if (isset($_GET['id'])) {
    $id = Helper::clearInt($_GET['id']);
    $classroom = (new ClassroomMap())->findViewById($id);
    $header = 'Просмотр аудиторий';
    require_once 'template/header.php';
?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <section class="content-header">
                <h1><?=$header;?></h1>
                <ol class="breadcrumb">
                    <li><a href="index.php"><i class="fa fa-dashboard"></i> Главная</a></li>
                    <li><a href="list-classroom.php">аудитории</a></li>
                    <li class="active"><?=$header;?></li>
                </ol>
            </section>
            <div class="box-body">
                <a class="btn btn-success" href="add-classroom.php?id=<?=$id;?>">Изменить</a>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>Название</th>
                        <td><?=$classroom->name;?></td>
                    </tr>
                    <tr>
                        <th>Статус</th>
                        <td><?=$classroom->active;?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<?php
}
require_once 'template/footer.php';
?>