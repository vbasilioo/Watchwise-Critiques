<x-layout title="Nova Série">
    <form class="row g-3" action="/series/salvar" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-12">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome da série">
        </div>
        <div class="col-3">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Descrição da série">
        </div>
        <div class="col-3">
            <label for="episodios" class="form-label">Episódios</label>
            <input type="text" class="form-control" id="episodios" name="episodios" placeholder="Número de episódios">
        </div>
        <div class="col-md-3">
            <label for="genero" class="form-label">Gênero</label>
            <select id="genero" class="form-select" name="genero">
            <option selected>Escolha...</option>
                <option>Ação</option>
                <option>Aventura</option>
                <option>Comédia</option>
                <option>Crime</option>
                <option>Documentário</option>
                <option>Drama</option>
                <option>Fantasia</option>
                <option>Ficção Científica</option>
                <option>Horror</option>
                <option>Mistério</option>
                <option>Romance</option>
                <option>Suspense</option>
            </select>
        </div>
        <div class="col-md-3">
        <label for="avaliacao" class="form-label">Gênero</label>
            <select id="avaliacao" class="form-select" name="avaliacao">
            <option selected>Escolha...</option>
                <option>Ótimo</option>
                <option>Bom</option>
                <option>Razoável</option>
                <option>Ruim</option>
                <option>Péssimo</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="capa" class="form-label">Capa</label>
            <input class="form-control" type="file" id="capa" name="capa">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</x-layout>
