<?php
namespace EllisLab\ExpressionEngine\Module\Channel\Model;

class ChannelEntryVersion extends Model {

	protected static $_primary_key = 'version_id';
	protected static $_table_name = 'entry_versioning';

	protected static $_typed_columns = array(
		'entry_id'     => 'int',
		'channel_id'   => 'int',
		'author_id'    => 'int',
		'version_date' => 'timestamp',
		'version_data' => 'serialized',
	);

	protected static $_relationships = array(
		'Channel' => array(
			'type' => 'belongsTo',
		),
		'ChannelEntry' => array(
			'type' => 'belongsTo',
		),
	);

	protected static $_validation_rules = array(
		'entry_id'     => 'required',
		'channel_id'   => 'required',
		'author_id'    => 'required',
		'version_date' => 'required',
		'version_data' => 'required',
	);

	protected $version_id;
	protected $entry_id;
	protected $channel_id;
	protected $author_id;
	protected $version_date;
	protected $version_data;

}
