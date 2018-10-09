<?php
namespace WPGraphQL\Type;

class AvatarRatingEnum {
	public static function register_type() {
		register_graphql_enum_type( 'AvatarRating', [
			'description' => __( 'What rating to display avatars up to. Accepts \'G\', \'PG\', \'R\', \'X\', and are judged in that order. Default is the value of the \'avatar_rating\' option', 'wp-graphql' ),
			'values'      => [
				'G'  => [
					'value' => 'G',
				],
				'PG' => [
					'value' => 'PG',
				],
				'R'  => [
					'value' => 'R',
				],
				'X'  => [
					'value' => 'X',
				],
			],
		]);
	}
}