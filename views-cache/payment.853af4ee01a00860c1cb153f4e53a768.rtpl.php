<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <h1>Pagamento N°<?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

               <!--  <button type="submit" id="btn-print" class="button alt" style="margin-bottom:10px"><i class="fa fa-print"></i> Imprimir</button> -->
               <div style="background: #e67e22;width: 190px;height: 40px;padding: 10px;">
               <a href="/" class="button alt" style="margin-top:5px;background: #e67e22;color: #FFF;font-size: 16px;"><i class="fa fa-angle-double-left" style="font-size: 18px;text-decoration: none;"></i> <i class="fa fa-shopping-cart" style="font-size: 16px;text-decoration: none;"></i> Voltar as compras </a> 
               </div>
               <br> 
                <iframe src="/boleto/<?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="boleto" frameborder="0" style="width:100%; min-height:1000px; border:1px solid #CCC; padding:20px;"></iframe>

                <script>
                document.querySelector("#btn-print").addEventListener("click", function(event){

                    event.preventDefault();

                    window.frames["boleto"].focus();
                    window.frames["boleto"].print();

                });                
                </script>

            </div>
        </div>
    </div>
</div>