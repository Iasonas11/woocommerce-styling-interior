add_action( 'woocommerce_cart_calculate_fees', 'add_cod_fee_based_on_country' );
function add_cod_fee_based_on_country( $cart ) {
    if ( is_admin() && ! defined( 'DOING_AJAX' ) ) {
        return;
    }

    // Ελέγχουμε αν η μέθοδος πληρωμής που έχει επιλεγεί είναι η αντικαταβολή (cod)
    $chosen_payment_method = WC()->session->get( 'chosen_payment_method' );
    if ( 'cod' !== $chosen_payment_method ) {
        return;
    }

    // Παίρνουμε τη χώρα αποστολής
    $shipping_country = WC()->customer->get_shipping_country();
    if ( empty( $shipping_country ) ) {
        $shipping_country = WC()->customer->get_billing_country();
    }

    $cod_fee = 0;

    // Ορίζουμε τις χρεώσεις ανάλογα με τη χώρα
    if ( 'GR' === $shipping_country ) {
        $cod_fee = 3.5; // Κόστος αντικαταβολής για Ελλάδα
        $fee_name = 'Έξοδα Αντικαταβολής (Ελλάδα)';
    } else {
        $cod_fee = 10.0; // Κόστος αντικαταβολής για εξωτερικό
        $fee_name = 'Έξοδα Αντικαταβολής (Εξωτερικό)';
    }

    if ( $cod_fee > 0 ) {
        $cart->add_fee( $fee_name, $cod_fee, true );
    }
}

// Ανανέωση του checkout όταν αλλάζει ο τρόπος πληρωμής, για να φαίνεται αμέσως η χρέωση
add_action( 'wp_footer', 'cod_fee_refresh_checkout' );
function cod_fee_refresh_checkout() {
    if ( is_checkout() ) {
        ?>
        <script type="text/javascript">
            jQuery( function( $ ) {
                $( 'form.checkout' ).on( 'change', 'input[name="payment_method"]', function() {
                    $( document.body ).trigger( 'update_checkout' );
                });
            });
        </script>
        <?php
    }
}