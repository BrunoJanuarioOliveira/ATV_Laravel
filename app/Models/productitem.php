namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'quantidade', 'cor', 'valor'];

    // Relacionamento inverso com Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
