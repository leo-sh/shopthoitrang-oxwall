<?php
class FASHIONSHOP_BOL_Products extends OW_Entity
{
	public $productId, $name, $description, $intro, $picture, $state, $price, $priceBonus,$unit = 'VND';

	public function getProductId() {
		return $this->productId;
	}

	public function getName() {
		return $this->name;
	}

	public function getDescription() {
		return $this->description;
	}

	public function getIntro() {
		return $this->productId;
	}

	public function getPicture() {
		return $this->picture;
	}

	public function getState() {
		return $this->state;
	}

	public function getPrice() {
		return $this->price;
	}

	public function getPriceBonus() {
		return $this->priceBonus;
	}
}