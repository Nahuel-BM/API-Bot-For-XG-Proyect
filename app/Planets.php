<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planets extends Model {

    protected $connection = 'mysql';
    protected $primaryKey = 'planet_id';
    protected $fillable = ['planet_id', 'planet_name', 'planet_user_id', 'planet_galaxy', 'planet_system', 'planet_planet',
        'planet_last_update', 'planet_type', 'planet_destroyed', 'planet_b_building', 'planet_b_building_id',
        'planet_b_tech', 'planet_b_tech_id', 'planet_b_hangar', 'planet_b_hangar_id', 'planet_image', 'planet_diameter',
        'planet_field_current', 'planet_field_max', 'planet_temp_min', 'planet_temp_max', 'planet_metal', 'planet_metal_perhour',
        'planet_metal_max', 'planet_crystal', 'planet_crystal_perhour', 'planet_crystal_max', 'planet_deuterium',
        'planet_deuterium_perhour', 'planet_deuterium_max', 'planet_energy_used', 'planet_energy_max', 'planet_building_metal_mine_percent',
        'planet_building_crystal_mine_percent', 'planet_building_deuterium_sintetizer_percent', 'planet_building_solar_plant_percent',
        'planet_building_fusion_reactor_percent', 'planet_ship_solar_satellite_percent', 'planet_last_jump_time', 'planet_debris_metal',
        'planet_debris_crystal', 'planet_invisible_start_time'];

}
