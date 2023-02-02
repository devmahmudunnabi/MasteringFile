jQuery(document).ready(function(){
    jQuery(".addproduct").click(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var name=jQuery(".name").val();
        var des=jQuery(".des").val();
        var size=jQuery(".size").val();
        var color=jQuery(".color").val();
        var product_code=jQuery(".product_code").val();
        var cost_price=jQuery(".cost_price").val();
        var sale_price=jQuery(".sale_price").val();
        $.ajax({
            url:"/product/store",
            type:"POST",
            dataType:"JSON",
            data:{
               name: name,
               des: des,
               size:size,
               color:color,
               product_code:product_code,
               cost_price:cost_price,
               sale_price:sale_price,
            },
            success:function(response){
                if(response.status=="faild"){
                    jQuery(".error_name").text(response.errors.name);
                    jQuery(".error_des").text(response.errors.des);
                    jQuery(".error_size").text(response.errors.size);
                    jQuery(".error_color").text(response.errors.color);
                    jQuery(".error_product_code").text(response.errors.product_code);
                    jQuery(".error_cost_price").text(response.errors.cost_price);
                    jQuery(".error_sale_price").text(response.errors.sale_price);
                }
                else{
                    show();
                   jQuery(document).find('input').val('');
                   jQuery(document).find('select').val('');
                   jQuery(document).find('textarea').val('');
                   jQuery('.text-danger').text('');
                    toastr.success(response.status);
                }   
            },
        });
    });
    // Product show 
    show();
    function show(){
       $.ajax({
            url:"/product/show",
            type:"GET",
            dataType:"JSON",
            success:function(response){
                var data="";
                var sl=1;
                if(response.status=="success"){
                $.each(response.alldata,function(key,item){
                    data +='<tr>\
                    <td>'+sl+'</td>\
                    <td>'+item.name+'</td>\
                    <td>'+item.size+'</td>\
                    <td>'+item.color+'</td>\
                    <td>'+item.product_code+'</td>\
                    <td>'+item.cost_price+'</td>\
                    <td>'+item.sale_price+'</td>\
                    <td>\
                        <button value="'+item.id+'" data-toggle="modal" data-target="#edit" class="btn btn-sm btn-info btn-edit"><i class="fa fa-edit"></i></button>\
                        <button value="'+item.id+'" data-toggle="modal" data-target="#delete" class="btn btn-sm btn-danger btn-delete"><i class="fa fa-trash"></i></button>\
                    </td>\
                </tr> ';
                sl++;
                });
                jQuery(".data").html(data);
                }
                else{

                }
            }       
       });
    }
    // Product delete
    jQuery(document).on("click",".btn-delete",function(e){
        // e.preventDefault();
        var id=jQuery(this).val();
        jQuery(".deleteProductId").val(id);
    });

    // Delete method
    jQuery('.deleteProductId').on('click',function(e){
        var did = jQuery(this).val();
        // alert(did);
        $.ajax({
            url:'/product/deleteid/'+did,
            type:'GET',
            dataType:'JSON',
            success:function(res){
                jQuery('#delete').modal('hide');
                show();
                toastr.error(res.delete);
            }
        });
    });
    // Edit Product model
    jQuery(document).on("click",".btn-edit",function(e){
        e.preventDefault();
        var editid=jQuery(this).val();
        $.ajax({
            url:"/product/edit/"+editid,
            type:"GET",
            dataType:"JSON",
            success:function(response){
                jQuery("#namcghxe").val(response.data.name);
                jQuery("#des").val(response.data.des);
                jQuery("#size").val(response.data.size);
                jQuery("#color").val(response.data.color);
                jQuery("#product_code").val(response.data.product_code);
                jQuery("#cost_price").val(response.data.cost_price);
                jQuery("#sale_price").val(response.data.sale_price);
                jQuery(".update").val(response.data.id);
            }  
        });
    });
    // Update Product
    jQuery(document).on("click",".update",function(){
        var updateid=jQuery(this).val();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var name=jQuery("#namcghxe").val();
        var des=jQuery("#des").val();
        var size=jQuery("#size").val();
        var color=jQuery("#color").val();
        var product_code=jQuery("#product_code").val();
        var cost_price=jQuery("#cost_price").val();
        var sale_price=jQuery("#sale_price").val();
        $.ajax({
            url:"/product/update/"+updateid,
            type:"POST",
            dataType:"JSON",
            data:{
               name: name,
               des: des,
               size:size,
               color:color,
               product_code:product_code,
               cost_price:cost_price,
               sale_price:sale_price
            },
            success:function(response){
                if(response.status=="success"){ 
                    show();
                    jQuery('#edit').modal('hide');
                     toastr.success(response.status);
                } 
            },
        });
    });
});
// ============--PURHASE start ------======================
// ============--PURHASE start ------======================
// ============--PURHASE start ------======================
jQuery(document).ready(function(){
    jQuery(document).on("keyup",".code",function(e){
       var code=jQuery(this).val();
      if(code != ''){
        $.ajax({
            url:"/purchase/find/"+code,
            type:"GET",
            dataType:"JSON",
            success:function(response){
                jQuery(".cost_price").val(response.product.cost_price);
            },
       });
      }else{
        jQuery(".cost_price").val('');
      }
    });
    jQuery(document).on("keyup",".qnt",function(){
        var _qnt = jQuery(this).val();
        var _price = jQuery(".cost_price").val();
        jQuery('.total').val(_qnt * _price);
    });
    jQuery(document).on("keyup",".dis",function(){
        var _dis = jQuery(this).val();
        var _total= jQuery(".total").val();
        var _totalAmount = ((_dis * _total)/100);
        jQuery(".dis_amount").val (_totalAmount);
        var _gtotal = _total - _totalAmount ;
        jQuery(".gtotal").val(_gtotal);

    });
    jQuery(".btn-puradd").click(function(){
        var br_id = jQuery(".br_id").val();
        var company_name = jQuery(".company_name").val();
        var date = jQuery(".date").val();
        var invoice = jQuery(".invoice").val();
        var dis = jQuery(".dis").val();
        var pro_code = jQuery(".code").val();
        var dis_amount=jQuery(".dis_amount").val();
        var total=jQuery(".gtotal").val();
        var astock=jQuery(".astock").val();
        // console.log(astock,total,dis_amount,pro_code,dis,invoice,date,company_name,br_id);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url:"/purchase/store",
            type:"POST",
            dataType:"JSON",
            data:{
               date         : date,
               invoice      : invoice,
               br_id        : br_id,
               company_name : company_name,
               dis          : dis,
               pro_code     : pro_code,
               dis_amount   : dis_amount,
               total        : total,
               astock       :astock
            },
            success:function(response){
                alert(response.vudapash);
                jQuery(document).find('input').val('');
            }

        });
    });
});

