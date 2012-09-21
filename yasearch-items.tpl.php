<?php
	/* $items = array(); */
	$output = '';
	if (!empty($items)) {
		$_items = array();
	
		foreach($items AS $item) {
			$_items[] = array(
				'class' => array('yasearch-item'),
				'data' => theme('yasearch_item', array('item' => $item)),
			);
		}
		
		echo theme('item_list', array(
			'items' => $_items,
			'attributes' => array(
				'class' => array('yasearch-items-list'),
			),
		));
	}
	
	
