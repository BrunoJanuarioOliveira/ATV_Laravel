namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'preco', 'unidade_medida'];

    // Relacionamento de 1 para N com ProductItem
    public function items()
    {
        return $this->hasMany(ProductItem::class);
    }
}
