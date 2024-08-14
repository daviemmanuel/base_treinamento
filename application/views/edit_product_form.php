<!-- edit_product_form.php -->
<h2>Editar Produto</h2>

<?= form_open('loja/edit_product/' . $produto['id_produto']); ?>
<label for="nome">Nome:</label>
<input type="text" name="nome" value="<?= set_value('nome', $produto['nome']); ?>"><br>

<label for="descricao">Descrição:</label>
<textarea name="descricao"><?= set_value('descricao', $produto['descricao']); ?></textarea><br>

<label for="preco">Preço:</label>
<input type="text" name="preco" value="<?= set_value('preco', $produto['preco']); ?>"><br>

<label for="estoque">Estoque:</label>
<input type="text" name="estoque" value="<?= set_value('estoque', $produto['estoque']); ?>"><br>

<label for="custo">Custo:</label>
<input type="text" name="custo" value="<?= set_value('custo', $produto['custo']); ?>"><br>

<button type="submit">Salvar</button>
<?= form_close(); ?>