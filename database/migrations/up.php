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

public function up(): void
{
    Schema::table('users', function (Blueprint $table) {
        $table->enum('role', ['admin', 'professor'])
            ->default('professor')
            ->after('password');
    });
}