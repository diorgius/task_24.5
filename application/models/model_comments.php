<?php
class Model_Comments extends Model
{
	public function get_data()
	{	
		return array(
			array(
				'Name' => 'Антон',
				'Date' => '20.11.2024',
				'Comments' => 'Разработка просто бомба очень доволен.'
			),
			array(
				'Name' => 'Иван Иванович',
				'Date' => '01.04.2025',
				'Comments' => 'Потрясаюше! И даже все работает.'
			),
			array(
				'Name' => 'Татьяна',
				'Date' => '31.08.2025',
				'Comments' => 'Работает, но как-то криво.'
			),
		);
	}
}