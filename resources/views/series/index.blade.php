<x-layout title="Watchwise Critiques">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @if(count($series) === 0)
            <p class="text-center">Não há séries disponíveis no momento.</p>
        @endif
        @foreach($series as $serie)

        @php
            $border = '';

            if($serie->avaliacao === 'Ótimo') $border = 'border-warning';
            elseif($serie->avaliacao === 'Bom') $border = 'border-success';
            elseif($serie->avaliacao === 'Razoável') $border = 'border-primary';
            elseif($serie->avaliacao === 'Ruim') $border = 'border-danger';
            elseif($serie->avaliacao === 'Péssimo') $border = 'border-danger-subtle';
        @endphp
        <div class="col">
            <div class="card h-100 border rounded {{ $border }} border-5">
                <img src="{{ asset('storage/' . $serie->capa) }}" class="card-img-top img-fluid h-100" alt="Capa da Série">
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $serie->nome }}</h5>
                    <p class="card-text text-center">{{ $serie->descricao }}</p>
                    <p class="card-text text-center">{{ $serie->genero }}</p>
                    <p class="card-text text-center">
                        @if($serie->avaliacao === 'Ótimo')
                            ⭐⭐⭐⭐⭐
                        @elseif($serie->avaliacao === 'Bom')
                            ⭐⭐⭐⭐
                        @elseif($serie->avaliacao === 'Razoável')
                            ⭐⭐⭐
                        @elseif($serie->avaliacao === 'Ruim')
                            ⭐⭐
                        @elseif($serie->avaliacao === 'Péssimo')
                            ⭐
                        @endif
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-body-secondary">Publicado em {{ $serie->created_at->format('d/m/Y') }} às {{ $serie->created_at->format('H:i') }}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>