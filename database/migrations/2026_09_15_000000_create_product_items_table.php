public function up(): void
{
    Schema::create('product_items', function (Blueprint $table) {
        $table->id();
        $table->foreignId('product_id')->constrained()->onDelete('cascade');
        $table->integer('quantidade');
        $table->string('cor');
        $table->decimal('valor', 10, 2);
        $table->timestamps();
    });
}
