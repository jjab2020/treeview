import 'jquery/dist/jquery.min.js';
import 'popper.js/dist/umd/popper.min.js';
import 'bootstrap/dist/js/bootstrap.min.js';
import 'startbootstrap-sb-admin-2/vendor/jquery-easing/jquery.easing.min.js';
import 'startbootstrap-sb-admin-2/js/sb-admin-2.js';
import 'startbootstrap-sb-admin-2/vendor/datatables/jquery.dataTables.min.js';
import 'jquery-ui/ui/widgets/datepicker';
import 'gijgo/js/gijgo.min.js';


$(document).ready(function() {

    var tree = $('#treeview_json').tree({
        
        dataSource: 'menu/getItem',
        uiLibrary: 'bootstrap4',
        iconsLibrary: 'fontawesome',
        checkboxes: false,
        icons: {
            expand: '<i class="fas fa-plus-square"></i>',
            collapse: '<i class="far fa-minus-square"></i>'
        }
    });

    tree.on('select', function (e, node, id) {
        //alert('select is fired for node with id=' + id);
        console.log(e);
        console.log(node);
        console.log(tree.getDataById(id).url);
        //window.location.href = tree.getDataById(id).url;
    });


$('#datepicker1').datepicker();
$('#datepicker2').datepicker();
$('#datepicker3').datepicker();
$('#datepicker4').datepicker();
$('#datepicker5').datepicker();

$('#membre').DataTable({
    "searching": false,
    "bProcessing": true,
    "serverSide": true,
    "ordering": false,
    "paging":false,
    "ajax": {
        url : "membre/getAllmembre",
        type : 'GET'
    }
});
})