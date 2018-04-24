<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property int $category_id
 * @property int $company_id
 * @property string $title
 * @property string $slug
 * @property string $image
 * @property string $info
 * @property int $price
 * @property int $sale_price
 * @property int $sale
 * @property int $status
 * @property int $like
 * @property int $commnets
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Comment[] $comments
 */
class Product extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'category_id' => true,
        'company_id' => true,
        'title' => true,
        'slug' => true,
        'image' => true,
        'info' => true,
        'price' => true,
        'sale_price' => true,
        'sale' => true,
        'status' => true,
        'like' => true,
        'commnets' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'company' => true,
        'comments' => true
    ];
}
