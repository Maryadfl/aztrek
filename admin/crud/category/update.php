<?php
require_once '../../../model/database.php';

$id = $_GET['id'];
$category = getOneEntity("category", $id);

require_once '../../layout/header.php';
?>

    <h1>Modification d'une catégorie</h1>

    <form action="update_query.php" method="POST">
        <div class="form-group">
            <label>Libellé</label>
            <input type="text" name="label" value="<?php echo $category["label"]; ?>" class="form-control" placeholder="Libellé" required>
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit" class="btn btn-success">
            <i class="fa fa-check"></i>
            Modifier
        </button>
    </form>

<?php require_once '../../layout/footer.php'; ?>