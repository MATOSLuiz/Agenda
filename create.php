<?php 

include_once("templates/header.php");

?>
    
    <h1 class="main-title">Criar Contato</h1>
    <div id="container-create">
        <form action="<?php echo $BASE_URL?>config/process.php" method ="POST">
            <input type="hidden" name="type" value ="create">

            <div class="create">
                <label class="subtitle" for="name">Nome:</label>
                <input placeholder="Digite seu nome" class="upp" type="text" name="nome" id="nome" required>

                <label class="subtitle" for="phone">Telefone:</label>
                <input placeholder="Digite seu telefone" class="upp" type="text" name="phone" id="phone" required>

                <label class="subtitle" for="obs">Observações:</label>
                <textarea name="observations" placeholder="..." id="observations" cols="30" rows="4"></textarea>
            </div>
            <button class="btn" type="submit">Cadastrar</button>
        </form>
    </div>


<?php 

include_once("templates/footer.php");

?>
