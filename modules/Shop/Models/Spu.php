<?php

namespace Modules\Shop\Models;

use Modules\Core\Models\BaseModel;
use Modules\Core\Traits\HasCreateBy;
use Modules\Core\Traits\HasOrg;

/**
 * Class Spu.
 *
 * @package namespace Modules\Shop\Models;
 */
class Spu extends BaseModel
{
    use HasOrg, HasCreateBy;

    const TYPE_SINGLE = 1;
    CONST TYPE_MULTIPLE = 2;

    const PAY_TYPE_ONLINE = 1;
    const PAY_TYPE_OFFLINE = 2;
    const PAY_TYPE_ALL = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'shop__spus';
    protected $fillable = [
        'uid', 'brand_id', 'category_id', 'status', 'name', 'description', 'unit', 'thumb', 'pay_type',
        'pic_url','create_by','type','spec_id','deduct_stock_type', 'content', 'delivery_id'
    ];

    /**
     * The attributes that are can be search =/like.
     *
     * @var array
     */
    protected $fieldSearchable = [];
    public static $types = [
        self::TYPE_SINGLE => '单规格',
        self::TYPE_MULTIPLE => '多规格'
    ];
    public static $pay_types = [
        self::PAY_TYPE_ONLINE => '在线支付',
        self::PAY_TYPE_OFFLINE => '货到付款',
        self::PAY_TYPE_ALL => '在线支付/货到付款'
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->uid = $model->uid ?? self::getRandomNumber('uid', $model->category->id);
        });
    }

    public function brand()
    {
        return $this->hasOne('Modules\Shop\Models\Brand', 'id', 'brand_id');
    }

    public function category()
    {
        return $this->hasOne('Modules\Shop\Models\Category', 'id', 'category_id');
    }

    public function sku()
    {
        return $this->hasMany('Modules\Shop\Models\Sku', 'spu_id', 'uid');
    }

    /**
     * 获得规格和sku
     *
     * @param [type] $spec_id
     * @param integer $spu_id
     * @return void
     */
    public static function getSpecData($spec_id = '', $spu_id = '')
    {
        $data = [
            'attr' => [],
            'list' => []
        ];
        $spu = $spu_id ? self::where('uid', $spu_id)->first() : new self();

        $spec = Spec::findOrFail($spu_id?$spu->spec_id:$spec_id);
        $data['attr'] = $spec->getValOptions();

        if($spu_id > 0) {
            $data['list'] = $spu->sku->map(function($sku) {
                return [
                    'spec_val_ids' => $sku->specVals->implode('id', ',').'',
                    'form' => [
                        'readonly' => true,
                        'uid'=> $sku->uid,
                        'market_price_fee' => $sku->market_price_fee,
                        'price_fee'=> $sku->price_fee,
                        'stock'=> $sku->stock,
                        'weight'=> $sku->weight,
                    ]
                ];
            })->toArray();
        }

        return $data;
    }
}
