<?php 

include_once("templates/header.php");

?>
    
<div class="container">
    <?php if(isset($printMsg) && $printMsg != ''): ?>
        <p class="bold" id="msg"><?php echo $printMsg?></p>
    <?php endif;?>
    <h1 class="main-title">Minha Agenda</h1>
    <?php if(count($contacts ) > 0 ): ?>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Telefone</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contacts as $contact): ?>
                    <tr>
                        <td scope="row"><?php echo $contact["id"]; ?></td>
                        <td scope="row"><?php echo $contact["nome"]; ?></td>
                        <td scope="row"><?php echo $contact["phone"]; ?></td>
                        <td class = "actions">
                            <a href="<?php echo $BASE_URL ?>show.php?id=<?php echo $contact["id"]; ?>"><i class="fa-solid fa-eye"></i></a>
                            <a href="<?php echo $BASE_URL ?>edit.php?id=<?php echo $contact["id"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="<?php echo $BASE_URL ?>config/process.php" method="POST">
                                <input type="hidden" name="type" value="delete">
                                <input type="hidden" name="id" value="<?php echo $contact["id"]?>">
                                <button type="submit"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p id="empty-text"> Ainda não há contatos na sua agenda, <a href="<?php echo $BASE_URL?>create.php">Clique aqui para adicionar!</a> </p>    
    <?php endif; ?>
</div>


<?php 

include_once("templates/footer.php");

?>

