<fieldset>
    <legend>Cadastro de voluntário</legend>
    <form action="">
        <label>
            <span>Nome:<br></span>
            <input type="text" name="nome" placeholder="Insira seu nome"><br>
        </label>
        <label>
            <span>CPF:<br></span>
            <input type="text" name="cpf" placeholder="Digite apenas números"><br>
        </label>
        <label>
            <span>Idade:<br></span>
            <input type="text" name="idade" placeholder="Insira sua idade"><br>
        </label>
        <label>
            <span>Telefone (Opcional):<br></span>
            <input type="text" name="telefone" placeholder="Digite apenas números"><br>
        </label>
        <label>
            <span>Email:<br></span>
            <input type="text" name="email" placeholder="exemplo@meuemail.com"><br>
        </label>
        <input type="submit" value="Enviar">
    </form>
</fieldset>

<fieldset>
    <legend>Cadastro de associação</legend>
    <form action="">
        <label>
            <span>Nome da associação:<br></span>
            <input type="text" name="nome-associacao" placeholder="Insira o nome da sua associação"><br>
        </label>
        <label>
            <span>Comunidade:<br></span>
            <select name="comunidade">
                <option value="acari">Acari</option>
                <option value="cidade-de-deus">Cidade de Deus</option>
                <option value="complexo-do-alemao">Complexo do Alemão</option>
                <option value="jacarezinho">Jacarezinho</option>
                <option value="mangueira">Mangueira</option>
                <option value="manguinhos">Manguinhos</option>
                <option value="mare">Maré</option>
                <option value="parada-de-lucas">Parada de Lucas</option>
                <option value="rocinha">Rocinha</option>
                <option value="santa-marta">Santa Marta</option>
            </select><br>
        </label>
        <label>
            <span>Telefone 1:<br></span>
            <input type="text" name="telefone-um" placeholder="Digite apenas números"><br>
        </label>
        <label>
            <span>Telefone 2:<br></span>
            <input type="text" name="telefone-dois" placeholder="Digite apenas números"><br>
        </label>
        <label>
            <span>Email:<br></span>
            <input type="text" name="email" placeholder="exemplo@meuemail.com"><br>
        </label>
        <input type="submit" value="Enviar">
    </form>
</fieldset>

<fieldset>
    <legend>Cadastrar novo evento</legend>
    <form action="">
        <label>
            <span>Nome do evento:<br></span>
            <input type="text" name="nome-evento" placeholder="Insira o nome do evento"><br>
        </label>
        <label>
            <span>Descrição das atividades<br></span>
            <textarea></textarea><br>
            <!--Editar-->
        </label>
        <label>
            <span>Local de encontro<br></span>
            <textarea></textarea><br>
            <!--Editar-->
        </label>
        <label>
            <span>Data e hora<br></span>
            <input type="date" name="data"> &nbsp;
            <input type="time" name="hora"><br>
        </label>
        <label>
            <span>Imagem (Opcional):<br></span>
            <input type="file" name="imagem-evento"><br>
        </label>
    </form>
    <input type="submit" value="Enviar">
</fieldset>