<?php if(!class_exists('Rain\Tpl')){exit;}?><style>
@media print {
    .header-area,
    .site-branding-area,
    .sticky-wrapper,
    .footer-top-area,
    .footer-bottom-area,
    .single-product-area .col-md-3,
    .button.alt,
    .product-big-title-area {
        display:none!important;
    }
    .single-product-area .col-md-9 {
        width: 100%!important;
    }
}
</style>

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Minha Conta</h2>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-3">
                <?php require $this->checkTemplate("profile-menu");?>

            </div>
            <div class="col-md-9">

                <h3 id="order_review_heading" style="margin-top:30px;">Detalhes do Pedido N°<?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
                <div id="order_review" style="position: relative;">
                    <table class="shop_table">
                        <thead>
                            <tr>
                                <th class="product-name">Produto</th>
                                <th class="product-total">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>

                            <tr class="cart_item">
                                <td class="product-name">
                                    <?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <strong class="product-quantity">× <?php echo htmlspecialchars( $value1["nrqtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong> 
                                </td>
                                <td class="product-total">
                                    <span class="amount">R$<?php echo formatPrice($value1["vltotal"]); ?></span>
                                </td>
                            </tr>
                            <?php } ?>

                        </tbody>
                        <tfoot>
                            <tr class="cart-subtotal">
                                <th>Subtotal</th>
                                <td><span class="amount">R$<?php echo formatPrice($cart["vlsubtotal"]); ?></span>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <th>Frete</th>
                                <td>
                                    R$<?php echo formatPrice($cart["vlfreight"]); ?> <?php if( $cart["nrdays"] > 0 ){ ?><small>prazo de <?php echo htmlspecialchars( $cart["nrdays"], ENT_COMPAT, 'UTF-8', FALSE ); ?> dia(s)</small><?php } ?>

                                    <input type="hidden" class="shipping_method" value="free_shipping" id="shipping_method_0" data-index="0" name="shipping_method[0]">
                                </td>
                            </tr>
                            <tr class="order-total">
                                <th>Total do Pedido</th>
                                <td><strong><span class="amount">R$<?php echo formatPrice($cart["vltotal"]); ?></span></strong> </td>
                            </tr>
                        </tfoot>
                    </table>

                    <hr>
                    <h3 id="order_review_heading">Dados do Cliente</h3>
                    <h4>Código do cliente: Nº<?php echo htmlspecialchars( $order["idperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4>
                    <table class="table table-bordered">

                        <tfoot>
                            <tr>
                                <th width="140" align="left">Nome:</th>
                                <td><?php echo htmlspecialchars( $order["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            </tr>
                            <tr>
                                <th>Endereço:</th>
                                <td><?php echo htmlspecialchars( $order["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?> Nº<?php echo htmlspecialchars( $order["desnumber"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, <?php echo htmlspecialchars( $order["descomplement"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            </tr><tr>
                                <th>Bairro:</th>
                                <td><?php echo htmlspecialchars( $order["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            </tr><tr>
                                <th>Cidade:</th>
                                <td><?php echo htmlspecialchars( $order["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            </tr><tr>
                                <th>Estado:</th>
                                <td><?php echo htmlspecialchars( $order["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            </tr><tr>
                                <th>Cep:</th>
                                <td><?php echo htmlspecialchars( $order["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            </tr><tr>
                                <th>Tel:</th>
                                <td><?php echo htmlspecialchars( $order["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            </tr><tr>
                                <th>Status do Pedido:</th>
                                <td><?php echo htmlspecialchars( $order["desstatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            </tr>
                        </tfoot>

                    </table>

                    <div id="payment">
                        <div class="form-row place-order">
                            <input type="submit" value="Imprimir" class="button alt" onclick="window.print()">
                        </div> 
                        <div class="clear"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>



