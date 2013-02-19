<?php
$field = 'court';

$config['sport'] = array(
	'field' => $field,
	'field_cap' => Inflector::humanize($field),
	'fields' => Inflector::pluralize($field),
	'fields_cap' => Inflector::humanize(Inflector::pluralize($field)),

	'roster_requirements' => array(
		'3/3'	=> 10,
		'4/2'	=> 10,
		'3/2'	=> 8,
		'2/2'	=> 7,
		'womens'=> 10,
		'mens'	=> 10,
		'open'	=> 10,
	),

	'rating_questions' => false,
);

$config['sport']['ratio'] = make_human_options(array_keys($config['sport']['roster_requirements']));

?>