<?php
	
	//////////////////////////////////////////////////
	############## banner
	//////////////////////////////////////////////////

	add_action( 'init', 'banner' );
	function banner() {
		$labels = array(
			'name' 			=> __( 'Banner' ),
			'singular_name' => __( 'Banner' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title', 'editor','thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'banner', $post);
	}
	//////////////////////////////////////////////////
	############## slider
	//////////////////////////////////////////////////

	/* add_action( 'init', 'slider' );
	function slider() {
		$labels = array(
			'name' 			=> __( 'Slider' ),
			'singular_name' => __( 'Slider' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title','thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'slider', $post);
	} */
	//////////////////////////////////////////////////
	############## sobre
	//////////////////////////////////////////////////

	add_action( 'init', 'sobre' );
	function sobre() {
		$labels = array(
			'name' 			=> __( 'Sobre nós' ),
			'singular_name' => __( 'Sobre nós' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title', 'editor','thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'sobre', $post);
	}
	//////////////////////////////////////////////////
	############## textos servicos
	//////////////////////////////////////////////////

	add_action( 'init', 'textos_servicos' );
	function textos_servicos() {
		$labels = array(
			'name' 			=> __( 'Cabeçalho Serviços' ),
			'singular_name' => __( 'Cabeçalho Serviços' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'textos_servicos', $post);
	}
	//////////////////////////////////////////////////
	############## servicos
	//////////////////////////////////////////////////

	add_action( 'init', 'servicos' );
	function servicos() {
		$labels = array(
			'name' 			=> __( 'Nossos Serviços' ),
			'singular_name' => __( 'Nossos Serviços' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title', 'editor','thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'servicos', $post);
	}

	//////////////////////////////////////////////////
	############## post_blog
	//////////////////////////////////////////////////

	add_action( 'init', 'post_blog' );
	function post_blog() {
		$labels = array(
			'name' 			=> __( 'Blog' ),
			'singular_name' => __( 'Blog' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'taxonomies'		=> array('categoria'),
			'supports'	 		=> array('title', 'editor','thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'post-blog', $post);
	}
	//////////////////////////////////////////////////
	############## top_post_blog_text
	//////////////////////////////////////////////////

	add_action( 'init', 'top_post_blog_text' );
	function top_post_blog_text() {
		$labels = array(
			'name' 			=> __( 'Cabeçalho Superior Blog' ),
			'singular_name' => __( 'Cabeçalho Superior Blog' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title', 'editor'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'top-post-blog-text', $post);
	}
	//////////////////////////////////////////////////
	############## cases_sucesso
	//////////////////////////////////////////////////

	add_action( 'init', 'cases_sucesso' );
	function cases_sucesso() {
		$labels = array(
			'name' 			=> __( 'Cases de Sucesso' ),
			'singular_name' => __( 'Cases de Sucesso' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title', 'editor', 'thumbnail'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'cases-sucesso', $post);
	}
	//////////////////////////////////////////////////
	############## cases_sucesso_top
	//////////////////////////////////////////////////

	add_action( 'init', 'cases_sucesso_top' );
	function cases_sucesso_top() {
		$labels = array(
			'name' 			=> __( 'Cabeçalho Cases de Sucesso' ),
			'singular_name' => __( 'Cabeçalho Cases de Sucesso' ),		
		);

		$post = array(
			'labels' 			=> $labels,
			'supports'	 		=> array('title', 'editor'),
			'capability_type'	=> 'post',
			'public' 			=> true,
			'has_archive' 		=> false,		
		);

		register_post_type( 'cases-sucesso-top', $post);
	}


	/////// CAMPOS PERSONALIZADOS /////////
	if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_68e30e829ef73',
		'title' => 'Informações sobre os cases',
		'fields' => array(
			array(
				'key' => 'field_68e30e9b8de49',
				'label' => 'Nota',
				'name' => 'nota',
				'type' => 'range',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'min' => '',
				'max' => 5,
				'step' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_68e30ebf8de4a',
				'label' => 'Nome',
				'name' => 'nome',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_68e30eda8de4b',
				'label' => 'Info do usuario',
				'name' => 'info_do_usuario',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_68e30eec8de4c',
				'label' => 'Nome da empresa',
				'name' => 'nome_da_empresa',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'cases-sucesso',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_68e3070aaf5d8',
		'title' => 'Infos do card de Serviços',
		'fields' => array(
			array(
				'key' => 'field_68e30715c6c3f',
				'label' => 'Texto do card',
				'name' => 'texto_do_card',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_68e30732c6c40',
				'label' => 'Topicos',
				'name' => 'topicos',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => '',
				'sub_fields' => array(
					array(
						'key' => 'field_68e3074ec6c41',
						'label' => 'label',
						'name' => 'label',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'servicos',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_68e2f74e7b2cc',
		'title' => 'Texto do card do Blog',
		'fields' => array(
			array(
				'key' => 'field_68e2f75097b89',
				'label' => 'Texto do card',
				'name' => 'texto_do_card',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post-blog',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_68e2c76f7e48c',
		'title' => 'Textos Nossos Serviços',
		'fields' => array(
			array(
				'key' => 'field_68e2c78285850',
				'label' => 'Texto Superior',
				'name' => 'texto_superior',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_68e2c7b385852',
				'label' => 'Titulo Inferior',
				'name' => 'titulo_inferior',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_68e2c7d085853',
				'label' => 'Texto inferior',
				'name' => 'texto_inferior',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_68e2c7e085854',
				'label' => 'Botão Inferior',
				'name' => 'botao_inferior',
				'type' => 'group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_68e2c7ec85855',
						'label' => 'Texto',
						'name' => 'texto',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_68e2c7f685856',
						'label' => 'Link',
						'name' => 'link',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_68e2d9d40636e',
						'label' => 'Numero',
						'name' => 'numero',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'textos_servicos',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_68e0d7bac9f06',
		'title' => 'Cards adicionais sobre',
		'fields' => array(
			array(
				'key' => 'field_68e0d945c103c',
				'label' => 'Legenda Imagem',
				'name' => 'legenda_imagem',
				'type' => 'group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_68e0d974c103d',
						'label' => 'Imagem',
						'name' => 'imagem',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'preview_size' => 'medium',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array(
						'key' => 'field_68e0d97cc103e',
						'label' => 'Titulo',
						'name' => 'titulo',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_68e0d982c103f',
						'label' => 'Label',
						'name' => 'label',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
			array(
				'key' => 'field_68e0d7bdfb698',
				'label' => 'Cards Sobre',
				'name' => 'cards_sobre',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 4,
				'layout' => 'table',
				'button_label' => '',
				'sub_fields' => array(
					array(
						'key' => 'field_68e0d7ccfb699',
						'label' => 'Titulo',
						'name' => 'titulo',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_68e0d7d5fb69a',
						'label' => 'Label',
						'name' => 'label',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
			array(
				'key' => 'field_68e0d869c1032',
				'label' => 'Missão',
				'name' => 'missao',
				'type' => 'group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_68e0d8cac1033',
						'label' => 'Imagem',
						'name' => 'imagem',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'preview_size' => 'medium',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array(
						'key' => 'field_68e0d8e5c1034',
						'label' => 'Label',
						'name' => 'label',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
			array(
				'key' => 'field_68e0d901c1035',
				'label' => 'Visão',
				'name' => 'visao',
				'type' => 'group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_68e0d90ec1036',
						'label' => 'Imagem',
						'name' => 'imagem',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'preview_size' => 'medium',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array(
						'key' => 'field_68e0d915c1037',
						'label' => 'Label',
						'name' => 'label',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
			array(
				'key' => 'field_68e0d920c1039',
				'label' => 'Valores',
				'name' => 'valores',
				'type' => 'group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_68e0d928c103a',
						'label' => 'Imagem',
						'name' => 'imagem',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'preview_size' => 'medium',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array(
						'key' => 'field_68e0d931c103b',
						'label' => 'Label',
						'name' => 'label',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'sobre',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_68e0d6799c346',
		'title' => 'Mais infos do Banner',
		'fields' => array(
			array(
				'key' => 'field_68e0d67cb4755',
				'label' => 'Cards do banner',
				'name' => 'cards_do_banner',
				'type' => 'repeater',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 3,
				'layout' => 'table',
				'button_label' => '',
				'sub_fields' => array(
					array(
						'key' => 'field_68e0d6d4b4756',
						'label' => 'Imagem',
						'name' => 'imagem',
						'type' => 'image',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'return_format' => 'array',
						'preview_size' => 'medium',
						'library' => 'all',
						'min_width' => '',
						'min_height' => '',
						'min_size' => '',
						'max_width' => '',
						'max_height' => '',
						'max_size' => '',
						'mime_types' => '',
					),
					array(
						'key' => 'field_68e0d765b4757',
						'label' => 'Label',
						'name' => 'label',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
			array(
				'key' => 'field_68e31b5eed8f9',
				'label' => 'Botão',
				'name' => 'botao',
				'type' => 'group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'layout' => 'block',
				'sub_fields' => array(
					array(
						'key' => 'field_68e31b6fed8fa',
						'label' => 'Label',
						'name' => 'label',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_68e31b78ed8fb',
						'label' => 'Link',
						'name' => 'link',
						'type' => 'url',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
					),
				),
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'banner',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_68e0d4a42c1bf',
		'title' => 'Titulo customizado do banner',
		'fields' => array(
			array(
				'key' => 'field_68e0d4a915f6d',
				'label' => 'Titulo customizado',
				'name' => 'titulo_customizado',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'banner',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	endif;
?>