public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->decimal('preco', 10, 2);
        $table->string('unidade_medida');
        $table->timestamps();
    });
}
