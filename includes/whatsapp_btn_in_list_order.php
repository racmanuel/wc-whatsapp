<?php
/**
 * Prevent Data Leaks
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

function add_whatsapp_btn_in_list_orders($order)
{
    $order->get_id();
    $number = $order->get_billing_phone();
    $first_name = $order->get_billing_first_name();
    $last_name = $order->get_billing_last_name();
    $text = "Estimad@ $first_name $last_name. Agradecemos tu compra y el interés en nuestros productos. Estamos procesando tu pedio y nos aseguraremos de que lo recibas lo más pronto posible.";
    ?>
<a id="whatsapp" class="" href="https://api.whatsapp.com/send?phone=52<?php echo $number ?>&text=<?php echo $text; ?>"
target="_blank" aria-label="WhatsApp"><span class="dashicons dashicons-whatsapp"></span> WhatsApp</a>
<?php
}
add_action('woocommerce_admin_order_actions_start', 'add_whatsapp_btn_in_list_orders');