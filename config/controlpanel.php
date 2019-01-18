<?php
	return [
		'sidemenu'=>[
			[
				'name'=> 'Dashboard',
				'link' => '/admin/dashboard',
				'icon'=> 'm-menu__link-icon flaticon-line-graph',
				'type'=> 'item',
				'children' => [],
			],
			[
				'name'=> 'Program',
				'link' => '/admin/program',
				'icon'=> 'm-menu__link-icon flaticon-line-graph',
				'type'=> 'submenu',
				'children' => [
					[
						'name'=> 'New Program',
						'link' => '/admin/program/new',
						'icon'=> 'm-menu__link-bullet m-menu__link-bullet--dot',
						'type'=> 'item',
						'children' => [],
					],
					[
						'name'=> 'All Program',
						'link' => '/admin/program',
						'icon'=> 'm-menu__link-bullet m-menu__link-bullet--dot',
						'type'=> 'item',
						'children' => [],
					]
				]
			],
			[
				'name'=> 'Course',
				'link' => '/admin/course',
				'icon'=> 'm-menu__link-icon flaticon-line-graph',
				'type'=> 'submenu',
				'children' => [
					[
						'name'=> 'New Course',
						'link' => '/admin/course/new',
						'icon'=> 'm-menu__link-bullet m-menu__link-bullet--dot',
						'type'=> 'item',
						'children' => [],
					],
					[
						'name'=> 'All Course',
						'link' => '/admin/course',
						'icon'=> 'm-menu__link-bullet m-menu__link-bullet--dot',
						'type'=> 'item',
						'children' => [],
					]
				]
			],
			[
				'name'=> 'Unit',
				'link' => '/admin/unit',
				'icon'=> 'm-menu__link-icon flaticon-line-graph',
				'type'=> 'submenu',
				'children' => [
					[
						'name'=> 'New Unit',
						'link' => '/admin/unit/new',
						'icon'=> 'm-menu__link-bullet m-menu__link-bullet--dot',
						'type'=> 'item',
						'children' => [],
					],
					[
						'name'=> 'All Unit',
						'link' => '/admin/unit',
						'icon'=> 'm-menu__link-bullet m-menu__link-bullet--dot',
						'type'=> 'item',
						'children' => [],
					]
				]
			],
			[
				'name'=> 'Category',
				'link' => '/admin/category',
				'icon'=> 'm-menu__link-icon flaticon-line-graph',
				'type'=> 'submenu',
				'children' => [
					[
						'name'=> 'New Category',
						'link' => '/admin/category/new',
						'icon'=> 'm-menu__link-bullet m-menu__link-bullet--dot',
						'type'=> 'item',
						'children' => [],
					],
					[
						'name'=> 'All Category',
						'link' => '/admin/category',
						'icon'=> 'm-menu__link-bullet m-menu__link-bullet--dot',
						'type'=> 'item',
						'children' => [],
					]
				]
			],
			[
				'name'=> 'Test',
				'link' => '/admin/test',
				'icon'=> 'm-menu__link-icon flaticon-line-graph',
				'type'=> 'item',
				'children' => [],
			],
			[
				'name'=> 'Member',
				'link' => '/admin/member',
				'icon'=> 'm-menu__link-icon flaticon-line-graph',
				'type'=> 'item',
				'children' => [],
			],
			[
				'name'=> 'Auth',
				'link' => '/admin/user',
				'icon'=> 'm-menu__link-icon flaticon-line-graph',
				'type'=> 'item',
				'children' => [],
			],
		],
		'sidemenu_config' => [
			'section' => [

			],
			'submenu' => [
				'class' => 'm-menu__item  m-menu__item--submenu',
			],
			'item' => [
			]
		],
		'default_image' => '/img/placeholder.png',
		'admin_image' => [
			'logo' => 'vendor/metronic/assets/demo/default/media/img/logo/logo_default_dark.png',
		],
	];
