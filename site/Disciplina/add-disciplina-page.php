<?php 

session_start();
if (empty($_SESSION["emailID"]) || empty($_SESSION["emailNome"]) || empty($_SESSION["emailTipo"])) {
    header("Location:../login.php");
} else if ($_SESSION["emailTipo"] != 1) {
    header("Location:../negado.html");
}
?>
<form action="add-disciplina.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nome da Disciplina:</label>
        <input name="editNomeDisciplina" class="form-control" type="text" required="">

    </div>
    <div class="form-group">
        <label>Créditos:</label>
        <input name="editCredito" class="form-control" type="text" required="">
    </div>
    <div class="form-group">
        <label>Tipo:</label>
        <select data-toggle="dropdown" id="tipo" name=tipo class="btn btn-primary dropdown-toggle"><span class="caret" required=""></span>
            <ul class="dropdown-menu">
                <option value="Comum">Comum</option>
                <option value="DOB Adm. Pública">DOB Adm. Pública</option>
                <option value="DOB Economia">DOB Economia</option>
                <option value="DOB C. Atuariais">DOB C. Atuariais</option>
                <option value="Optativa C. Atuariais">Optativa C. Atuariais</option>
                <option value="Optativa Economia">Optativa Economia</option>
                <option value="Optativa Adm. Pública">Optativa Adm. Pública</option>
            </ul>
        </select>
    </div>
    <div class="form-group">
        <label>Periodo:</label>
        <select data-toggle="dropdown" id="periodo" name=periodo class="btn btn-primary dropdown-toggle"><span class="caret" required=""></span>
            <ul class="dropdown-menu">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>

            </ul>
        </select>

    </div>
    <div class="form-group">
      <label>Ementa</label>
        <input type="file" name="arquivo"/>
    </div>
    <button type="submit" id="materia" class="btn btn-info">Salvar</button>
  </form>
