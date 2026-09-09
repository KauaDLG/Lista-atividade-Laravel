public function create()
{
    $this->authorize('create', Aluno::class);
    // ... resto do código
}

public function store(Request $request)
{
    $this->authorize('create', Aluno::class);
    // ... resto do código
}

public function edit(Aluno $aluno)
{
    $this->authorize('update', $aluno);
    // ... resto do código
}

public function update(Request $request, Aluno $aluno)
{
    $this->authorize('update', $aluno);
    // ... resto do código
}

public function destroy(Aluno $aluno)
{
    $this->authorize('delete', $aluno);
    // ... resto do código
}