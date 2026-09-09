public function up(): void
{
    Schema::table('alunos', function (Blueprint $table) {
        $table->foreignId('user_id')
            ->nullable()
            ->after('id')
            ->constrained('users')
            ->nullOnDelete();
    });
}