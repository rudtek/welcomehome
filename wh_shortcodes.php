<?php
/**links to files for functions and shortcodes for each endpoint collection in the API**/
//Activites Endpoint
require_once( RTAPIFILES_DIR . 'inc/wh_activities.php' );
//Exports Endpoint - these endpoint retrieves a CSV.  There is a daily and a live export ability. Daily will allow selection of communities.
require_once( RTAPIFILES_DIR . 'inc/wh_exports.php' );
//Care Types
require_once( RTAPIFILES_DIR . 'inc/wh_care_types.php' );
//Communities
require_once( RTAPIFILES_DIR . 'inc/wh_communities.php' );
//Floor Plans
require_once( RTAPIFILES_DIR . 'inc/wh_floor_plans.php' );
//Housing Contracts

//Lead Sources

//Privacy Levels

//Relationships

//Residents (will require direct IDs)

//Scores

//Traits

//Units
require_once( RTAPIFILES_DIR . 'inc/wh_units.php' );
//User Roles

//Prospects