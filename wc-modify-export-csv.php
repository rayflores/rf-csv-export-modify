<?php
/**
 * Plugin Name: Armalite - WooCommerce Modify CSV Exporter
 * Description: Adds and removes desired and undesired fields respectively
 * Version: 1.0.0
 * Author: Ray Flores
 * Author URI: http://www.rayflores.com
 * Requires at least: 3.9
 * Tested up to: 3.9
 *
 *	License: GNU General Public License v3.0
 *	License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */
// default_one_row_per_item

add_filter( 'wc_customer_order_csv_export_order_row', 'one_amount_per_order', 10, 3 );
function one_amount_per_order( $order_data, $order, $generator ){
	 
	foreach($order_data as $key => $orderdata){
		if ($key !== 0 ){
			unset($order_data[$key]['payment_amount']);
		}
	}

	return $order_data;
}
// set order columns
function rf_wc_csv_export_custom_order_columns( $column_headers ){
			
			unset( $column_headers['order_id'] );
			unset( $column_headers['order_number'] );
			unset( $column_headers['order_date'] );
			unset( $column_headers['billing_address_1'] );
			unset( $column_headers['billing_address_2'] );
			unset( $column_headers['billing_postcode'] );
			unset( $column_headers['billing_city'] );
			unset( $column_headers['billing_country'] );
			unset( $column_headers['shipping_address_1'] );
			unset( $column_headers['shipping_address_2'] );
			unset( $column_headers['shipping_postcode'] );
			unset( $column_headers['shipping_city'] );
			unset( $column_headers['shipping_state'] );
			unset( $column_headers['shipping_country'] );
			unset( $column_headers['item_quantity'] );
			unset( $column_headers['status'] );
			unset( $column_headers['billing_state'] );
			
			$column_headers['order_type'] = 'Order Type(O|I|Q)';
			$column_headers['order_number'] = 'Order No';
			$column_headers['order_date'] = 'Order Date (MM/DD/YYYY)';
			$column_headers['cus_number'] = 'Cus No';
			$column_headers['bill_to_name'] = 'Bill To Name';
			$column_headers['billing_address_1'] = 'Bill To Addr 1';
			$column_headers['billing_address_2'] = 'Bill To Addr 2';
			$column_headers['billing_city'] = 'Bill To City';
			$column_headers['billing_state'] = 'Bill To State';
			$column_headers['billing_postcode'] = 'Bill To Zip';
			$column_headers['billing_country'] = 'Bill To Country';
			$column_headers['shipping_code'] = 'ShipTo Code';
			$column_headers['shipping_full_name'] = 'Ship To Name';
			$column_headers['shipping_address_1'] = 'Ship To Addr 1';
			$column_headers['shipping_address_2'] = 'Ship To Addr 2';
			$column_headers['shipping_city'] = 'Ship To City';
			$column_headers['shipping_state'] = 'Ship To State';
			$column_headers['shipping_postcode'] = 'Ship To Zip';
			$column_headers['shipping_country'] = 'Ship To Country';
			$column_headers['customer_type'] = 'Cus Type';
			$column_headers['ship_via_code'] = 'Ship Via Code';
			$column_headers['taxable'] = 'Taxable(Y|N)';
			$column_headers['tax_code'] = 'Tax Code';
			$column_headers['tax_schedule_code'] = 'Tax Schedule Code';
			$column_headers['terms'] =  'Terms';
			$column_headers['sales_person_code'] = 'Sales Person Code';
			$column_headers['customer_location'] = 'Customer Location';
			$column_headers['allow_backorders'] = 'Allow Backorders(Y|N)';
			$column_headers['allow_part_ship'] = 'Allow Partial Shipments(Y|N)';
			$column_headers['allow_subs'] = 'Allow Substitute Items(Y|N)';
			$column_headers['freight'] = 'Freight';
			$column_headers['miscellaneous'] = 'Miscellaneous';
			$column_headers['comments'] = 'Comments';
			$column_headers['po_number'] = 'PO Number';
			$column_headers['header_location'] = 'Header Location';
			$column_headers['ship_instruct_1'] = 'Ship Instructions 1';
			$column_headers['ship_instruct_2'] = 'Ship Instructions 2';
			$column_headers['payment_amount'] = 'Payment Amount';
			$column_headers['payment_trx_type'] = 'Payment TrxType (0-Cash | 1-Check | 2-Credit Card | 3-Gift Card | 4-Wire Transfer)';
			$column_headers['payment_doc_number'] = 'Payment DocNo (Check Number or other Document Number)';
			$column_headers['payment_cash_acct'] = 'Payment Cash Account Code (Cash Account G/L Number)';
			$column_headers['payment_doc_date'] = 'Payment Doc Date(MM/DD/YYYY)';
			$column_headers['ar_ref_1'] = 'AR Reference1';
			$column_headers['ar_ref_2'] = 'AR Reference2';
			$column_headers['ar_ref_3'] = 'AR Reference3';
			$column_headers['status'] = 'Status';
			$column_headers['commission_percent'] = 'Commission Percent';
			$column_headers['ar_ref'] = 'AR Reference';
			$column_headers['batch_id'] = 'Batch ID';
			$column_headers['apply_to_memo'] = 'ApplyTo (Credit Memos only)';
			$column_headers['ship_date'] = 'Shipping Date(MM/DD/YYYY)';
			$column_headers['header_user_1'] = 'Header User Field 1';
			$column_headers['header_user_2'] = 'Header User Field 2';
			$column_headers['header_user_3'] = 'Header User Field 3';
			$column_headers['header_user_4'] = 'Header User Field 4';
			$column_headers['item_no'] = 'Item No SKU';
			$column_headers['line_location'] = 'Line Location';
			$column_headers['item_desc_1'] = 'Item Description 1';
			$column_headers['item_desc_2'] = 'Item Description 2';
			$column_headers['item_quantity'] = 'Qty';
			$column_headers['qty_to_ship'] = 'Qty To Ship';
			$column_headers['this_price'] = 'Price';
			$column_headers['discount'] = 'Discount';
			$column_headers['item_cost'] = 'Item Cost';
			$column_headers['request_date'] = 'Request Date(MM/DD/YYYY)';
			$column_headers['promise_date'] = 'Promise Date(MM/DD/YYYY)';
			$column_headers['required_ship_date'] = 'Required ShipDate(MM/DD/YYYY)';
			$column_headers['line_user_1'] = 'Line User Field 1';
			$column_headers['line_user_2'] = 'Line User Field 2';
			$column_headers['line_user_3'] = 'Line User Field 3';
			$column_headers['line_user_4'] = 'Line User Field 4';
			$column_headers['line_user_5'] = 'Line User Field 5';
			$column_headers['line_comment'] = 'Line Comment';
			$column_headers['feature_number'] = 'Feature No (The following 4 fields may be repeated for each option)';
			$column_headers['option_item_number'] = 'Option Item No';
			$column_headers['option_qty'] = 'Option Qty';
			$column_headers['option_price'] = 'Option Price (blank for default price)';


			unset( $column_headers['shipping_total'] );
			unset( $column_headers['shipping_tax_total'] );
			unset( $column_headers['fee_total'] );
			unset( $column_headers['fee_tax_total'] );
			unset( $column_headers['tax_total'] );
			unset( $column_headers['discount_total'] );
			unset( $column_headers['order_total'] );
			unset( $column_headers['refunded_total'] );
			unset( $column_headers['order_currency'] );
			unset( $column_headers['payment_method'] );
			unset( $column_headers['shipping_method'] );
			unset( $column_headers['customer_id'] );
			unset( $column_headers['billing_first_name'] );
			unset( $column_headers['billing_last_name'] );
			unset( $column_headers['billing_company'] );
			unset( $column_headers['billing_email'] );
			unset( $column_headers['billing_phone'] );
			unset( $column_headers['shipping_first_name'] );
			unset( $column_headers['shipping_last_name'] );
			unset( $column_headers['shipping_company'] );
			unset( $column_headers['customer_note'] );
			unset( $column_headers['item_id'] );
			unset( $column_headers['item_product_id'] );
			unset( $column_headers['item_name'] );
			unset( $column_headers['item_sku'] );
			unset( $column_headers['item_subtotal'] );
			unset( $column_headers['item_subtotal_tax'] );
			unset( $column_headers['item_total'] );
			unset( $column_headers['item_total_tax'] );
			unset( $column_headers['item_refunded'] );
			unset( $column_headers['item_refunded_qty'] );
			unset( $column_headers['item_meta'] );
			unset( $column_headers['shipping_items'] );
			unset( $column_headers['fee_items'] );
			unset( $column_headers['tax_items'] );
			unset( $column_headers['coupon_items'] );
			unset( $column_headers['order_notes'] );
			unset( $column_headers['download_permissions'] );
		
			
 	return $column_headers;
}
add_filter( 'wc_customer_order_csv_export_order_headers', 'rf_wc_csv_export_custom_order_columns' );

/**
 * Add the $order_data from $line_item values
 *
 * @param array $order_data the original order data
 * @param array $item       the item for this row
 * @return array
 */

function wc_csv_export_order_row_one_row_per_line_number( $order_data, $item ) {

		$order = wc_get_order($order_data['order_id']); 
		$product = wc_get_product( $item['product_id'] ); 
		// SHIPPING		
		$ship_meth_id = '';
				
				if  ( $order->get_shipping_method() === 'Flat rate' ) {
							$ship_meth_id = 'FR1';
						} elseif ($order->get_shipping_method() === 'Free shipping') {
							$ship_meth_id = 'FR2';
						}
		// coupon amount				
		foreach ( $order->get_items( 'coupon' ) as $coupon_item_id => $coupon ) {
		
			$_coupon     = new WC_Coupon( $coupon['name'] );
			$coupon_post = get_post( SV_WC_Data_Compatibility::get_prop( $_coupon, 'id' ) );
		}
		$coupon_percentage = 0;
		if ( is_object($_coupon) ){
		$coupon_percentage = $_coupon->get_amount() / 100 ;
		}
		$user_id = $order->user_id;
		$user_info = get_userdata($user_id);
		$macola_id = get_user_meta( $user_id, 'macola_id', true); // Defines 'macola_id' for column based on user placing order. - Matt
		$sales_person = get_user_meta( $user_id, 'sales_person', true);
		$user = get_user_by( 'id', $user_id );
		$user_role = $user->roles;
		$the_price[] = get_post_meta($product->id, 'festiUserRolePrices', true);
		$discount = $product->get_price() * $coupon_percentage; 
		$reg_price =  $product->get_price() - $discount;
		// print_r($item);
		if(isset($the_price[0]['d'])) { $d_price = $the_price[0]['d']; }
		if(isset($the_price[0]['m'])) { $m_price = $the_price[0]['m']; }
					if ($user_role[0] == 'd'){
						$thePrice = $d_price - $discount;
					} elseif ($user_role[0] == 'm') {
						$thePrice = $m_price - $discount;
					} else {
						$thePrice = wc_format_decimal( $reg_price, 2); // . ' -- ' . print_r($cus_type);
					}
		$item_name = htmlentities(substr($item['name'],0,30));
		$item_name_clean = preg_replace("/&#?[a-z0-9]+;/i","",$item_name);
		$order_data['item_no'] = $item['sku'];
		//$order_data['item_quantity'] = $item['item_quantity'];
		$order_data['item_desc_1']	= $item_name_clean; // Item Description 1
		$order_data['qty_to_ship']	= $item['quantity']; // Qty To Ship
		$order_data['this_price'] = $thePrice;

		$order_data['order_type']   				= 'O';
		$order_data['cus_number']			   	= $macola_id;
		$order_data['bill_to_name']		   		= $order->billing_first_name . ' ' . $order->billing_last_name;
		$order_data['billing_address_1']   	= $order->billing_address_1;
		$order_data['billing_address_2']   	= $order->billing_address_2;
		$order_data['billing_city']        			= $order->billing_city;
		$order_data['billing_state']       			= $order->billing_state;
		$order_data['billing_postcode']    		= $order->billing_postcode;
		$order_data['billing_country']     		= $order->billing_country;
		$order_data['shipping_full_name']     = $order->shipping_first_name . ' ' . $order->shipping_last_name;
		$order_data['shipping_address_1']  	= $order->shipping_address_1;
		$order_data['shipping_address_2']  	= $order->shipping_address_2;
		$order_data['shipping_city']       		= $order->shipping_city;
		$order_data['shipping_state']      		= $order->shipping_state;
		$order_data['shipping_postcode']   	= $order->shipping_postcode;
		$order_data['shipping_country']    	= $order->shipping_country;
		$order_data['customer_type']			=  'WEB'; // Cus Type  - user role
		$order_data['ship_via_code']			= $ship_meth_id;
		$order_data['taxable'] 						= 'Y'; // Taxable(Y|N) = always Y
		$order_data['tax_code'] 					= ''; // Tax Code // blank
		$order_data['terms']							=  'CC'; // Terms
		$order_data['sales_person_code']	= '13'; // Sales Person Code
		$order_data['customer_location']	= 'G2'; // Customer Location
		$order_data['allow_backorders']	= 'N'; // Allow Backorders(Y|N)
		$order_data['allow_part_ship']	= 'N'; // Allow Partial Shipments(Y|N)
		$order_data['allow_subs']	= 'N'; // Allow Substitute Items(Y|N)
		$order_data['freight']	= $shipping_item['total']; //$order->get_total_shipping(); // Freight
		
		$status = $order->get_status();
		if ($status == 'failed') {
		$order_data['payment_trx_type']	= 'failed'; //'2'; // Payment TrxType (0-Cash | 1-Check | 2-Credit Card | 3-Gift Card | 4-Wire Transfer)
		} else {
		$order_data['payment_trx_type']	= '2'; // Payment TrxType (0-Cash | 1-Check | 2-Credit Card | 3-Gift Card | 4-Wire Transfer)
		}
		
		$order_data['payment_cash_acct']	= ''; // Payment Cash Account Code (Cash Account G/L Number)
		$order_data['status']	= '1'; // Status
		$order_data['discount']	= '';//wc_format_decimal( $order->get_total_discount(), 2 ); // Discount
		// all blank
		$order_data['shipping_code']			= ''; // Ship to Code // blank
		$order_data['tax_schedule_code']		=	$order->shipping_state; // Tax Schedule Code 
		$order_data['miscellaneous']	= ''; // Miscellaneous // blank
		$order_data['comments']	= ''; // Comments
		$order_data['po_number']	= ''; // PO Number
		$order_data['header_location']	= ''; // Header Location
		$order_data['ship_instruct_1']	= ''; // Ship Instructions 1
		$order_data['ship_instruct_2']	= ''; // Ship Instructions 2
		$order_data['payment_doc_number']	= ''; // Payment DocNo (Check Number or other Document Number)
		$order_data['payment_doc_date']	= ''; // Payment Doc Date(MM/DD/YYYY)
		$order_data['ar_ref_1']	= ''; // AR Reference1
		$order_data['ar_ref_2']	= ''; // AR Reference2
		$order_data['ar_ref_3']	= ''; // AR Reference3
		$order_data['commission_percent']	= ''; // Commission Percent
		$order_data['ar_ref']	= ''; // AR Reference
		$order_data['batch_id']	= ''; // Batch ID
		$order_data['apply_to_memo']	= ''; // ApplyTo (Credit Memos only)
		$order_date = $order->order_date;
		$date = explode(" ",$order_date);
		$order_data['ship_date']	= 	$date[0]; // Shipping Date(MM/DD/YYYY)
		$order_data['header_user_1']	= ''; // Header User Field 1
		$order_data['header_user_2']	= ''; // Header User Field 2
		$order_data['header_user_3']	= ''; // Header User Field 3
		$order_data['header_user_4']	= ''; // Header User Field 4
		$order_data['request_date']	= ''; // Request Date(MM/DD/YYYY)
		$order_data['promise_date']	= ''; // Promise Date(MM/DD/YYYY)
		$order_data['required_ship_date']	= ''; // Required ShipDate(MM/DD/YYYY)
		$order_data['line_user_1']	= ''; // Line User Field 1
		$order_data['line_user_2']	= ''; // Line User Field 2
		$order_data['line_user_3']	= ''; // Line User Field 3
		$order_data['line_user_4']	= ''; // Line User Field 4
		$order_data['line_user_5']	= ''; // Line User Field 5
		$order_data['line_comment']	= ''; // Line Comment
		$order_data['feature_number']	= ''; // Feature No (The following 4 fields may be repeated for each option)
		$order_data['option_item_number']	= ''; // Option Item No
		$order_data['option_qty']	= ''; // Option Qty
		$order_data['option_price']	= ''; // Option Price (blank for default price)
		$order_data['line_location']	= ''; // Line Location
		$order_data['item_desc_2']	= ''; // Item Description 2
		
		
		//if ($GLOBALS['wc_csv_export_index'] === 0 ) {  // first row of $data
		//$order_data['payment_amount']	= $GLOBALS['wc_csv_export_index']; //wc_format_decimal( $order->get_total(), 2 ); // Payment Amount // first row only
		//}
		
		$order_data['payment_amount']	= wc_format_decimal( $order->get_total(), 2 ); // Payment Amount // first row only

	if( !empty( $order->get_tax_totals() ) ) {
			foreach ($order->get_tax_totals() as $tax_rate => $tax ){
				$order_data['tax_schedule_code'] =	$tax->label;//$order->shipping_state; // Tax Schedule Code 
			}		
		} else {
		$order_data['tax_schedule_code'] =	'ALL'; // ALL
		}

	return $order_data;
}
add_filter( 'wc_customer_order_csv_export_order_row_one_row_per_item', 'wc_csv_export_order_row_one_row_per_line_number', 10, 2 );

