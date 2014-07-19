<?php

get_header( Helios_template_base() );

$path = Helios_template_path();
include( $path );

//get_sidebar( Helios_template_base() );
get_footer( Helios_template_base() );