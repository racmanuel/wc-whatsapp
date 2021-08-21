<?php
/**
 * Prevent Data Leaks
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function whatsapp_btn_in_order($order_id)
{
    $result;
    $customer_id = (int) $order_id->user_id;

    //Take the number for orders with clients
    $number_clients = get_user_meta($customer_id, 'billing_phone', true);
    $first_name = get_user_meta($customer_id, 'billing_first_name', true);
    $last_name = get_user_meta($customer_id, 'billing_last_name', true);

    if (isset($number_clients)) {
        //take the number for order with invitates
        $order_id->get_id();
        $number_invitates = $order_id->get_billing_phone();
        $result = $number_invitates;
    } else {
        $result = $number_clients;
    }
    $text = "Estimad@ $first_name $last_name. Agradecemos tu compra y el interés en nuestros productos. Estamos procesando tu pedio y nos aseguraremos de que lo recibas lo más pronto posible.";
    ?>
<p>
<strong>Enviar:</strong>
<a id="whatsapp" href="https://api.whatsapp.com/send?phone=52<?php echo $result; ?>&text=<?php echo $text; ?>"
    target="_blank" aria-label="WhatsApp"><span class="dashicons dashicons-whatsapp"></span> WhatsApp</a>
</p>
<?php
}
add_action('woocommerce_admin_order_data_after_billing_address', 'whatsapp_btn_in_order');