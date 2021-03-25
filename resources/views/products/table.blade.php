@push('css_lib')
@include('layouts.datatables_css')
@endpush

{!! $dataTable->table(['width' => '100%']) !!}

@push('scripts_lib')
@include('layouts.datatables_js')
{!! $dataTable->scripts() !!}

<script type="text/javascript">
	// (function(window,$){window.LaravelDataTables=window.LaravelDataTables||{};window.LaravelDataTables["dataTableBuilder"]=$("#dataTableBuilder").DataTable({"serverSide":true,"processing":true,"ajax":{"url":"https:\/\/getsella.com\/products","type":"GET","data":function(data) {
 //            for (var i = 0, len = data.columns.length; i < len; i++) {
 //                if (!data.columns[i].search.value) delete data.columns[i].search;
 //                if (data.columns[i].searchable === true) delete data.columns[i].searchable;
 //                if (data.columns[i].orderable === true) delete data.columns[i].orderable;
 //                if (data.columns[i].data === data.columns[i].name) delete data.columns[i].name;
 //            }
 //            delete data.search.regex;}},"columns":[{"name":"name","data":"name","title":"Name","orderable":true,"searchable":true},{"name":"image","data":"image","title":"Image","searchable":false,"orderable":false},{"name":"price","data":"price","title":"Price","orderable":true,"searchable":true},{"name":"discount_price","data":"discount_price","title":"Discount Price","orderable":true,"searchable":true},{"name":"capacity","data":"capacity","title":"Capacity","orderable":true,"searchable":true},{"name":"featured","data":"featured","title":"Featured","orderable":true,"searchable":true},{"name":"market.name","data":"market.name","title":"Market","orderable":true,"searchable":true},{"name":"category.name","data":"category.name","title":"Category","orderable":true,"searchable":true},{"name":"updated_at","data":"updated_at","title":"Updated At","searchable":false,"orderable":true},{"defaultContent":"","data":"action","name":"action","title":"Actions","render":null,"orderable":false,"searchable":false,"width":"80px","responsivePriority":"100"}],"dom":"<\".row\"<\".col-lg-4 col-xs-12\"l><\".ml-auto\"f>>rtip","order":[[0,"desc"]],"buttons":["create","export","print","reset","reload","colvis"],"colReorder":true,"responsive":true,"stateSave":true,"initComplete":function(settings){renderButtons( settings.sTableId)},"language":{"sEmptyTable":"No data available in table","sInfo":"Showing _START_ to _END_ of _TOTAL_ entries","sInfoEmpty":"Showing 0 to 0 of 0 entries","sInfoFiltered":"(filtered from _MAX_ total entries)","sInfoPostFix":"","sInfoThousands":",","sLengthMenu":"Show _MENU_ entries","sLoadingRecords":"Loading...","sProcessing":"Processing...","sSearch":"Search:","sZeroRecords":"No matching records found","oPaginate":{"sFirst":"First","sLast":"Last","sNext":"Next","sPrevious":"Previous"},"oAria":{"sSortAscending":": activate to sort column ascending","sSortDescending":": activate to sort column descending"}}});})(window,jQuery);

</script>
@endpush