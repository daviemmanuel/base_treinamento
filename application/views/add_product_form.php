<!-- add_product_form.php -->
<h2 class="mt-4">Adicionar Produto</h2>

<?= form_open('loja/add_product', ['class' => 'mt-3']); ?>
<div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" class="form-control" value="<?= set_value('nome'); ?>" required>
</div>

<div class="form-group">
    <label for="descricao">Descrição:</label>
    <textarea name="descricao" class="form-control"><?= set_value('descricao'); ?></textarea>
</div>

<div class="form-group">
    <label for="preco">Preço:</label>
    <input type="text" name="preco" class="form-control" value="<?= set_value('preco'); ?>" required>
</div>

<div class="form-group">
    <label for="estoque">Estoque:</label>
    <input type="number" name="estoque" class="form-control" value="<?= set_value('estoque'); ?>" required>
</div>

<div class="form-group">
    <label for="custo">Custo:</label>
    <input type="text" name="custo" class="form-control" value="<?= set_value('custo'); ?>" required>
</div>

<button type="submit" class="btn btn-primary">Salvar</button>
<a href="<?= base_url('loja'); ?>" class="btn btn-secondary">Cancelar</a>
<?= form_close(); ?>