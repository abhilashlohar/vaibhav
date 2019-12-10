@extends('layouts.backend')
 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--loaded" id="local_data" style=""><table class="kt-datatable__table" style="display: block;"><thead class="kt-datatable__head"><tr class="kt-datatable__row" style="left: 0px;"><th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox">&nbsp;<span></span></label></span></th><th data-field="OrderID" class="kt-datatable__cell kt-datatable__cell--sort kt-datatable__cell--sorted" data-sort="asc"><span style="width: 112px;">Order ID<i class="flaticon2-arrow-up"></i></span></th><th data-field="Country" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 112px;">Country</span></th><th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 112px;">Ship Date</span></th><th data-field="CompanyName" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 112px;">Company Name</span></th><th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 112px;">Status</span></th><th data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 112px;">Type</span></th><th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 110px;">Actions</span></th></tr></thead><tbody class="kt-datatable__body" style=""><tr data-row="0" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="44">&nbsp;<span></span></label></span></td><td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="OrderID"><span style="width: 112px;">36987-3290</span></td><td data-field="Country" class="kt-datatable__cell"><span style="width: 112px;">South Africa ZA</span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 112px;">7/9/2016</span></td><td data-field="CompanyName" class="kt-datatable__cell"><span style="width: 112px;">Larson-Kunze</span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill">Canceled</span></span></td><td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                     <div class="dropdown">                          <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="la la-cog"></i>                            </a>                           <div class="dropdown-menu dropdown-menu-right">                             <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                               <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                              <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                           </div>                      </div>                      <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">                          <i class="la la-edit"></i>                      </a>                        <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">                            <i class="la la-trash"></i>                     </a>                    </span></td></tr><tr data-row="1" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="80">&nbsp;<span></span></label></span></td><td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="OrderID"><span style="width: 112px;">41163-146</span></td><td data-field="Country" class="kt-datatable__cell"><span style="width: 112px;">China CN</span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 112px;">3/5/2016</span></td><td data-field="CompanyName" class="kt-datatable__cell"><span style="width: 112px;">Brown-Hudson</span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span></span></td><td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                      <div class="dropdown">                          <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="la la-cog"></i>                            </a>                           <div class="dropdown-menu dropdown-menu-right">                             <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                               <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                              <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                           </div>                      </div>                      <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">                          <i class="la la-edit"></i>                      </a>                        <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">                            <i class="la la-trash"></i>                     </a>                    </span></td></tr><tr data-row="2" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="18">&nbsp;<span></span></label></span></td><td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="OrderID"><span style="width: 112px;">41190-308</span></td><td data-field="Country" class="kt-datatable__cell"><span style="width: 112px;">Panama PA</span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 112px;">8/1/2016</span></td><td data-field="CompanyName" class="kt-datatable__cell"><span style="width: 112px;">Johns-Lueilwitz</span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span></span></td><td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                      <div class="dropdown">                          <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="la la-cog"></i>                            </a>                           <div class="dropdown-menu dropdown-menu-right">                             <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                               <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                              <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                           </div>                      </div>                      <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">                          <i class="la la-edit"></i>                      </a>                        <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">                            <i class="la la-trash"></i>                     </a>                    </span></td></tr><tr data-row="3" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="57">&nbsp;<span></span></label></span></td><td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="OrderID"><span style="width: 112px;">42291-218</span></td><td data-field="Country" class="kt-datatable__cell"><span style="width: 112px;">Yemen YE</span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 112px;">12/6/2017</span></td><td data-field="CompanyName" class="kt-datatable__cell"><span style="width: 112px;">Barton-Mann</span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td><td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown">                          <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="la la-cog"></i>                            </a>                           <div class="dropdown-menu dropdown-menu-right">                             <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                               <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                              <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                           </div>                      </div>                      <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">                          <i class="la la-edit"></i>                      </a>                        <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">                            <i class="la la-trash"></i>                     </a>                    </span></td></tr><tr data-row="4" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="16">&nbsp;<span></span></label></span></td><td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="OrderID"><span style="width: 112px;">42352-1001</span></td><td data-field="Country" class="kt-datatable__cell"><span style="width: 112px;">Azerbaijan AZ</span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 112px;">6/13/2017</span></td><td data-field="CompanyName" class="kt-datatable__cell"><span style="width: 112px;">Moen, Walsh and Bednar</span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge  kt-badge--primary kt-badge--inline kt-badge--pill">Canceled</span></span></td><td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge kt-badge--primary kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-primary">Retail</span></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                     <div class="dropdown">                          <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="la la-cog"></i>                            </a>                           <div class="dropdown-menu dropdown-menu-right">                             <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                               <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                              <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                           </div>                      </div>                      <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">                          <i class="la la-edit"></i>                      </a>                        <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">                            <i class="la la-trash"></i>                     </a>                    </span></td></tr><tr data-row="5" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="98">&nbsp;<span></span></label></span></td><td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="OrderID"><span style="width: 112px;">42507-004</span></td><td data-field="Country" class="kt-datatable__cell"><span style="width: 112px;">Mexico MX</span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 112px;">12/22/2017</span></td><td data-field="CompanyName" class="kt-datatable__cell"><span style="width: 112px;">O'Reilly, Block and Goyette</span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span></span></td><td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown">                          <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="la la-cog"></i>                            </a>                           <div class="dropdown-menu dropdown-menu-right">                             <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                               <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                              <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                           </div>                      </div>                      <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">                          <i class="la la-edit"></i>                      </a>                        <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">                            <i class="la la-trash"></i>                     </a>                    </span></td></tr><tr data-row="6" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="6">&nbsp;<span></span></label></span></td><td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="OrderID"><span style="width: 112px;">43419-020</span></td><td data-field="Country" class="kt-datatable__cell"><span style="width: 112px;">Honduras HN</span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 112px;">4/6/2017</span></td><td data-field="CompanyName" class="kt-datatable__cell"><span style="width: 112px;">Bechtelar, Wisoky and Homenick</span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge  kt-badge--info kt-badge--inline kt-badge--pill">Info</span></span></td><td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                     <div class="dropdown">                          <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="la la-cog"></i>                            </a>                           <div class="dropdown-menu dropdown-menu-right">                             <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                               <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                              <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                           </div>                      </div>                      <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">                          <i class="la la-edit"></i>                      </a>                        <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">                            <i class="la la-trash"></i>                     </a>                    </span></td></tr><tr data-row="7" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="32">&nbsp;<span></span></label></span></td><td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="OrderID"><span style="width: 112px;">44523-535</span></td><td data-field="Country" class="kt-datatable__cell"><span style="width: 112px;">Argentina AR</span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 112px;">2/16/2017</span></td><td data-field="CompanyName" class="kt-datatable__cell"><span style="width: 112px;">Zboncak, Hickle and McLaughlin</span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td><td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                       <div class="dropdown">                          <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="la la-cog"></i>                            </a>                           <div class="dropdown-menu dropdown-menu-right">                             <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                               <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                              <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                           </div>                      </div>                      <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">                          <i class="la la-edit"></i>                      </a>                        <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">                            <i class="la la-trash"></i>                     </a>                    </span></td></tr><tr data-row="8" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="66">&nbsp;<span></span></label></span></td><td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="OrderID"><span style="width: 112px;">48951-8237</span></td><td data-field="Country" class="kt-datatable__cell"><span style="width: 112px;">Portugal PT</span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 112px;">12/6/2016</span></td><td data-field="CompanyName" class="kt-datatable__cell"><span style="width: 112px;">Kautzer Inc</span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge kt-badge--brand kt-badge--inline kt-badge--pill">Pending</span></span></td><td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge kt-badge--danger kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-danger">Online</span></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                        <div class="dropdown">                          <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="la la-cog"></i>                            </a>                           <div class="dropdown-menu dropdown-menu-right">                             <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                               <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                              <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                           </div>                      </div>                      <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">                          <i class="la la-edit"></i>                      </a>                        <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">                            <i class="la la-trash"></i>                     </a>                    </span></td></tr><tr data-row="9" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 20px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="72">&nbsp;<span></span></label></span></td><td class="kt-datatable__cell--sorted kt-datatable__cell" data-field="OrderID"><span style="width: 112px;">49035-111</span></td><td data-field="Country" class="kt-datatable__cell"><span style="width: 112px;">Brazil BR</span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 112px;">1/18/2016</span></td><td data-field="CompanyName" class="kt-datatable__cell"><span style="width: 112px;">Zboncak-Dooley</span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span></span></td><td data-field="Type" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 112px;"><span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;<span class="kt-font-bold kt-font-success">Direct</span></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 110px;">                      <div class="dropdown">                          <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="la la-cog"></i>                            </a>                           <div class="dropdown-menu dropdown-menu-right">                             <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a>                               <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a>                              <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a>                           </div>                      </div>                      <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md">                          <i class="la la-edit"></i>                      </a>                        <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md">                            <i class="la la-trash"></i>                     </a>                    </span></td></tr></tbody></table><div class="kt-datatable__pager kt-datatable--paging-loaded"><ul class="kt-datatable__pager-nav"><li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first" data-page="1"><i class="flaticon2-fast-back"></i></a></li><li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev" data-page="3"><i class="flaticon2-back"></i></a></li><li style=""></li><li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="1" title="1">1</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="4" title="4">4</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5" title="5">5</a></li><li></li><li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="5"><i class="flaticon2-next"></i></a></li><li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="10"><i class="flaticon2-fast-next"></i></a></li></ul><div class="kt-datatable__pager-info"><div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;"><select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-container="body" data-selected="10" tabindex="-98"><option class="bs-title-option" value=""></option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="50">50</option><option value="100">100</option></select><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-3" aria-haspopup="listbox" aria-expanded="false" title="Select page size"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">10</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-3" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div><span class="kt-datatable__pager-detail">Showing 31 - 40 of 100</span></div></div></div>
        </div>
    </div>
</div>
@endsection