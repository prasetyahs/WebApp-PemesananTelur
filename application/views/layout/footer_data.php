
    <!-- Jquery Core Js -->
    <script src="<?= base_url() ?>assets/dashboard/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?= base_url() ?>assets/dashboard/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <!-- <script src="<?= base_url() ?>assets/dashboard/plugins/bootstrap-select/js/bootstrap-select.js"></script> -->
     

    <!-- Slimscroll Plugin Js -->
    <script src="<?= base_url() ?>assets/dashboard/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?= base_url() ?>assets/dashboard/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?= base_url() ?>assets/dashboard/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="<?= base_url() ?>assets/dashboard/js/admin.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="<?= base_url() ?>assets/dashboard/js/demo.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/pages/ui/modals.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/pages/forms/basic-form-elements.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Autosize Plugin Js -->
    <script src="<?= base_url() ?>assets/dashboard/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="<?= base_url() ?>assets/dashboard/plugins/momentjs/moment.js"></script>

      <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="<?= base_url() ?>assets/dashboard/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="<?= base_url() ?>assets/dashboard/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/pages/ui/tooltips-popovers.js"></script>
    <script>
    
    function insertOrder(idOrder,total,entity,idProduct){
        document.getElementById("idOrder").focus();
        document.getElementById("idOrder").value = idOrder;
        document.getElementById("totalTransaksi").value = total;
        document.getElementById("entity").value = entity;
        document.getElementById("idProduct").value = idProduct;
    }

    function updateOrder(idOrder,idProduct,entity){
        document.getElementById("entity").focus();
        document.getElementById("id_order").value = idOrder;
        document.getElementById("id_product").value = idProduct;
        document.getElementById("entity").value = entity;
     
    }

    function deleteAgent(id){
        document.getElementById("form").action = "http://localhost/telor/dashboard/deleteAgent/" +id;
    }

    function deleteProduct(id){
        document.getElementById("form-delete").action = "http://localhost/telor/dashboard/deleteProduct/" +id;
        
    }

    function insertProduct(){
        
      document.getElementById("header").innerHTML  = "Tambah Data Product";
      document.getElementById("id_product").value = "";
      document.getElementById("product_name").value = "";
      document.getElementById("desc").value = "";
      document.getElementById("quality").value = "";
      document.getElementById("price").value = "";
      document.getElementById("stock").value = "";
      $('#form-id').show();
      document.getElementById("form").action = "http://localhost/telor/dashboard/insertProduct/";
    }

    function updateProduct(id,name,desc,image,quality,stock,price){
       
        document.getElementById("header").innerHTML  = "Perbarui Data Product";
        $('#form-id').hide();
        document.getElementById("id_product").value = id;
        document.getElementById("form").action = "http://localhost/telor/dashboard/updateProduct/" + id;
        // document.getElementById("product_name").value = name;
        // document.getElementById("quality").value = quality;
        // document.getElementById("price").value = price;
        // document.getElementById("desc").innerHTML = desc;

    }

    function insertCourier(){
        $("form-id").show();
        document.getElementById("header").innerHTML = "Tambah Kurir";
        document.getElementById("form").action = "http://localhost/telor/dashboard/insertCourier/";
    }

    function updateCourier(username,idCourier,fname,lname,email,phone){
        $("#form-id").hide();
        document.getElementById("header").innerHTML = "Ubah Kurir";
        document.getElementById("form").action = "http://localhost/telor/dashboard/updateCourier/" + username;
        document.getElementById("idCourier").value = idCourier;
    }

    function deleteCourier(id){
        document.getElementById("form-delete").action = "http://localhost/telor/dashboard/deleteCourier/" + id;
    }

    </script>
    
    <script>
        var alert = document.getElementById("text");
        if(alert != null){
            var text = document.getElementById("text").innerHTML
            var title = document.getElementById("title").innerHTML;
            var icon = document.getElementById("icon").innerHTML;
            swal({
                title: title,
                text: text,
                icon: icon,
                button: "OK",
                });
        }
    </script>
    <script>
        function updateProfile(email,fname,lname,phone){
            document.getElementById("fname").value= fname;
            document.getElementById("fname").readOnly = false;
            document.getElementById("lname").value= lname;
            document.getElementById("lname").readOnly = false;
            document.getElementById("email").value= email;
            document.getElementById("email").readOnly = false;
            document.getElementById("phone").value= phone;
            document.getElementById("phone").readOnly = false;
            $('#btnCancel').show();
            $('#btnUpdate').hide();
            $('#btnSubmit').show();
        }

        function cancelUpdate(){
            document.getElementById("fname").value= "";
            document.getElementById("fname").readOnly = true;
            document.getElementById("lname").value= "";
            document.getElementById("lname").readOnly = true;
            document.getElementById("email").value= "";
            document.getElementById("email").readOnly = true;
            document.getElementById("phone").value= "";
            document.getElementById("phone").readOnly = true;
            $('#btnCancel').hide();
            $('#btnUpdate').show();
            $('#btnSubmit').hide();
        }
    </script>
    
</body>

</html>