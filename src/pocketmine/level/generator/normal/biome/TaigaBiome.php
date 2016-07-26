<?php

/*
Finish
*/

namespace pocketmine\level\generator\normal\biome;

use pocketmine\block\Sapling;
use pocketmine\block\Block;
use pocketmine\level\generator\populator\Tree;
use pocketmine\block\Flower as FlowerBlock;
use pocketmine\level\generator\populator\Flower;
use pocketmine\level\generator\populator\TallGrass;
use pocketmine\level\generator\populator\Pumpkin;

class TaigaBiome extends GrassyBiome{

	public function __construct(){
		parent::__construct();

		$trees = new Tree(Sapling::SPRUCE);
		$trees->setBaseAmount(5);
		$this->addPopulator($trees);
		
		$tallGrass = new TallGrass();
		$tallGrass->setBaseAmount(5);
		$this->addPopulator($tallGrass);
		
		$pumpkin = new Pumpkin();
		$pumpkin->setBaseAmount(0);
		$pumpkin->setRandomAmount(1);
		$this->addPopulator($pumpkin);
		
		$flower = new Flower();
		$flower->setBaseAmount(0);
		$flower->setRandomAmount(5);
		$flower->addType([Block::DANDELION, 0]);
		$flower->addType([Block::RED_FLOWER, FlowerBlock::TYPE_POPPY]);
		$this->addPopulator($flower);

		$this->setElevation(62, 81);

		$this->temperature = 0.05;
		$this->rainfall = 0.80;

		$this->setGroundCover([
			Block::get(Block::GRASS, 0),
			Block::get(Block::DIRT, 0),
			Block::get(Block::DIRT, 0),
			Block::get(Block::DIRT, 0),
			Block::get(Block::DIRT, 0),
		]);
	}

	public function getName() : string{
		return "Taiga";
	}
	public function getColor(){
		return 0x41D923;
	}
}
