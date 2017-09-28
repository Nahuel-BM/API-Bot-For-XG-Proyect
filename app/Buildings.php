<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buildings extends Model

{	
    protected $primaryKey = 'building_id';

    protected $fillable = ['building_id','building_planet_id','building_metal_mine','building_crystal_mine','building_deuterium_sintetizer',
'building_solar_plant','building_fusion_reactor','building_robot_factory','building_nano_factory','building_hangar','building_metal_store',
'building_crystal_store','building_deuterium_tank','building_laboratory','building_terraformer','building_ally_deposit','building_missile_silo',
'building_mondbasis','building_phalanx', 'building_jump_gate'];   
}
