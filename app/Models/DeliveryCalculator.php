<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryCalculator extends Model
{
    use HasFactory;

    private $weight;
    private $length;
    private $width;
    private $height;
    private $seller_price;

    private $final_price;
    private $method_used;

    public function __construct( $data )
    {
        $this->setWeight( $data[ 'weight' ] );
        $this->setLength( $data[ 'length' ] );
        $this->setWidth( $data[ 'width' ] );
        $this->setHeight( $data[ 'height' ] );
        $this->setSellerPrice( $data[ 'seller_price' ] );
    }


    public function calculatePrice()
    {
        $weight_cost = $this->weight * 50;
        $volume_weight = ( $this->length * $this->width * $this->height ) / 1000;
        $volume_cost = $volume_weight * 50;

        $max_price = max( $weight_cost, $volume_cost, $this->seller_price );

        if ( $max_price == $weight_cost ) {
            $this->final_price = $weight_cost;
            $this->method_used = "By weight";
        } elseif ( $max_price == $volume_cost ) {
            $this->final_price = $volume_cost;
            $this->method_used = "By volume weight";
        } else {
            $this->final_price = $this->seller_price;
            $this->method_used = "Seller's price";
        }

        return $this->final_price;
    }

    public function getWeight(): mixed
    {
        return $this->weight;
    }

    public function setWeight( mixed $weight ): void
    {
        $this->weight = $weight;
    }

    public function getLength(): mixed
    {
        return $this->length;
    }

    public function setLength( mixed $length ): void
    {
        $this->length = $length;
    }

    public function getWidth(): mixed
    {
        return $this->width;
    }

    public function setWidth( mixed $width ): void
    {
        $this->width = $width;
    }

    public function getHeight(): mixed
    {
        return $this->height;
    }

    public function setHeight( mixed $height ): void
    {
        $this->height = $height;
    }

    public function getSellerPrice(): mixed
    {
        return $this->seller_price;
    }

    public function setSellerPrice( mixed $seller_price ): void
    {
        $this->seller_price = $seller_price;
    }

    /**
     * @return mixed
     */
    public function getMethodUsed()
    {
        return $this->method_used;
    }

}
