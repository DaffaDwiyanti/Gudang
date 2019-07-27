<?

namespace App\Models;

use Eloquent as Model;
use App\Models\order; // ambil field jumlah
use App\Models\barang; // ambil field stok

class Perhitungan extends Model
{

    /**
     * jika stock abis sampe 0, maka orderan selanjutnya x2 dari total pembelian sebelumnya
     * @var float
     */



    public function indexData()
    {
        $data = DB::table('orders')
            ->join('orders', 'orders.id', '=', 'jumlah.orders.id')
            ->join('barangs', 'barangs.id', '=', 'stok.barangs.id')
            ->select('orders.jumlah', 'barangs.stok')
            ->get();
    }

    /**
     * Total Pembelian
     */
    protected $totalPembelian;



    /**
     * Perhitungan Order
     */
    protected $hitungOrder;



    /**
     * Perhitungan Stock
     */
    protected  $hitungStock = 0;



    /**
     * Konstruktor.
     * @param float $totalPembelian
     * @param float $hitungOrder
     * @param int $hitungStock 
     */

    public function __construct($totalPembelian, $hitungOrder, $hitungStock = 0)
    {
        $this->totalPembelian = $totalPembelian;

        $hitungOrder = $hitungOrder * 2;
        $this->hitungOrder = $hitungOrder;

        $this->hitungStock = $hitungStock;
    }

    /**
     * Calculate
     */

    public function calculate()
    {
        return $this->hitungOrder - $this->hitungStock;
    }
}
