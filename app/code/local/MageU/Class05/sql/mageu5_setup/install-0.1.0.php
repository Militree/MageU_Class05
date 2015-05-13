<?php
/**
 * 
 */

$installer = $this;

$installer->startSetup();

echo 'install script ran';

$installer->addAttribute('catalog_product', 'associated_team', array(
	'label'       => 'Associated Team',
    'input'       => 'select',
	'type' 		  => 'int',
    'global'      => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
    'backend'     => 'eav/entity_attribute_backend_array',
    'required'    => false,
    'option'      => array (
                        'values' => array (
                            0  => 'Arizona Cardinals',
                            1  => 'Atlanta Falcons',
                            2  => 'Baltimore Ravens',
                            3  => 'Buffalo Bills',
                            4  => 'Carolina Panthers',
                            5  => 'Chicago Bears',
                            6  => 'Cincinnati Bengals',
                            7  => 'Cleveland Browns',
                            8  => 'Dallas Cowboys',
                            9  => 'Denver Broncos',
                            10 => 'Detroit Lions',
                            11 => 'Green Bay Packers',
                            12 => 'Houston Texans',
                            13 => 'Indianapolis Colts',
                            14 => 'Jacksonville Jaguars',
                            15 => 'Kansas City Chiefs',
                            16 => 'Miami Dolphins',
                            17 => 'Minnesota Vikings',
                            18 => 'New England Patriots',
                            19 => 'New Orleans Saints',
                            20 => 'New York Giants',
                            21 => 'New York Jets',
                            22 => 'Oakland Raiders',
                            23 => 'Philadelphia Eagles',
                            24 => 'Pittsburgh Steelers',
                            25 => 'San Diego Chargers',
                            26 => 'San Francisco 49ers',
                            27 => 'Seattle Seahawks',
                            28 => 'St. Louis Rams',
                            29 => 'Tampa Bay Buccaneers',
                            30 => 'Tennessee Titans',
                            31 => 'Washington Redskins',
                        ),
                    ),

	));

$installer->endSetup();