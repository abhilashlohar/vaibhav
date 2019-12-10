@extends('layouts.backend')
 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="kt-portlet__body kt-portlet__body--fit">
            <div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--scroll kt-datatable--loaded">
                <table  class="kt-datatable__table" style="display: block; max-height: 550px;">
                    <thead class="kt-datatable__head">
                        <tr class="kt-datatable__row">
                            <th class="kt-datatable__cell">
                                Order ID
                            </th>
                            <th class="kt-datatable__cell">
                                <span>Country</span>
                            </th>
                            <th class="kt-datatable__cell">
                                <span>Ship Date</span>
                            </th>
                            <th class="kt-datatable__cell">
                                <span>Company Name</span>
                            </th>
                            <th class="kt-datatable__cell">
                                <span>Status</span>
                            </th>
                            <th data-autohide-disabled="false" class="kt-datatable__cell">
                                <span>Type</span>
                            </th>
                            <th data-autohide-disabled="false" class="kt-datatable__cell">
                                <span >Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="kt-datatable__body" style="max-height: 497px; overflow: auto;">
                        <tr data-row="1" class="kt-datatable__row kt-datatable__row--even">
                            <td class="kt-datatable__cell">
                                49035-111
                            </td>
                            <td class="kt-datatable__cell">
                                <span>Brazil BR</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>1/18/2016</span></td>
                            <td class="kt-datatable__cell">
                                <span>Zboncak-Dooley</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;
                                    <span class="kt-font-bold kt-font-success">Direct</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span style="overflow: visible; position: relative;">
                                    <div class="dropdown"> 
                                        <a data-toggle="dropdown"
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"> 
                                            <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> 
                                        </div>
                                    </div> 
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a> 
                                    <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
                                </span>
                            </td>
                        </tr>
                        <tr data-row="1" class="kt-datatable__row kt-datatable__row--even">
                            <td class="kt-datatable__cell">
                                <span>49035-111</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>Brazil BR</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>1/18/2016</span></td>
                            <td class="kt-datatable__cell">
                                <span>Zboncak-Dooley</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;
                                    <span class="kt-font-bold kt-font-success">Direct</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span style="overflow: visible; position: relative;">
                                    <div class="dropdown"> 
                                        <a data-toggle="dropdown"
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"> 
                                            <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> 
                                        </div>
                                    </div> 
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a> 
                                    <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
                                </span>
                            </td>
                        </tr>
                        <tr data-row="1" class="kt-datatable__row kt-datatable__row--even">
                            <td class="kt-datatable__cell">
                                <span>49035-111</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>Brazil BR</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>1/18/2016</span></td>
                            <td class="kt-datatable__cell">
                                <span>Zboncak-Dooley</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;
                                    <span class="kt-font-bold kt-font-success">Direct</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span style="overflow: visible; position: relative;">
                                    <div class="dropdown"> 
                                        <a data-toggle="dropdown"
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"> 
                                            <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> 
                                        </div>
                                    </div> 
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a> 
                                    <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
                                </span>
                            </td>
                        </tr>
                        <tr data-row="1" class="kt-datatable__row kt-datatable__row--even">
                            <td class="kt-datatable__cell">
                                <span>49035-111</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>Brazil BR</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>1/18/2016</span></td>
                            <td class="kt-datatable__cell">
                                <span>Zboncak-Dooley</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;
                                    <span class="kt-font-bold kt-font-success">Direct</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span style="overflow: visible; position: relative;">
                                    <div class="dropdown"> 
                                        <a data-toggle="dropdown"
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"> 
                                            <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> 
                                        </div>
                                    </div> 
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a> 
                                    <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
                                </span>
                            </td>
                        </tr>
                        <tr data-row="1" class="kt-datatable__row kt-datatable__row--even">
                            <td class="kt-datatable__cell">
                                <span>49035-111</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>Brazil BR</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>1/18/2016</span></td>
                            <td class="kt-datatable__cell">
                                <span>Zboncak-Dooley</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;
                                    <span class="kt-font-bold kt-font-success">Direct</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span style="overflow: visible; position: relative;">
                                    <div class="dropdown"> 
                                        <a data-toggle="dropdown"
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"> 
                                            <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> 
                                        </div>
                                    </div> 
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a> 
                                    <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
                                </span>
                            </td>
                        </tr>
                        <tr data-row="1" class="kt-datatable__row kt-datatable__row--even">
                            <td class="kt-datatable__cell">
                                <span>49035-111</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>Brazil BR</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>1/18/2016</span></td>
                            <td class="kt-datatable__cell">
                                <span>Zboncak-Dooley</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;
                                    <span class="kt-font-bold kt-font-success">Direct</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span style="overflow: visible; position: relative;">
                                    <div class="dropdown"> 
                                        <a data-toggle="dropdown"
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"> 
                                            <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> 
                                        </div>
                                    </div> 
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a> 
                                    <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
                                </span>
                            </td>
                        </tr>
                        <tr data-row="1" class="kt-datatable__row kt-datatable__row--even">
                            <td class="kt-datatable__cell">
                                <span>49035-111</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>Brazil BR</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>1/18/2016</span></td>
                            <td class="kt-datatable__cell">
                                <span>Zboncak-Dooley</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;
                                    <span class="kt-font-bold kt-font-success">Direct</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span style="overflow: visible; position: relative;">
                                    <div class="dropdown"> 
                                        <a data-toggle="dropdown"
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"> 
                                            <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> 
                                        </div>
                                    </div> 
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a> 
                                    <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
                                </span>
                            </td>
                        </tr>
                        <tr data-row="1" class="kt-datatable__row kt-datatable__row--even">
                            <td class="kt-datatable__cell">
                                <span>49035-111</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>Brazil BR</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>1/18/2016</span></td>
                            <td class="kt-datatable__cell">
                                <span>Zboncak-Dooley</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;
                                    <span class="kt-font-bold kt-font-success">Direct</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span style="overflow: visible; position: relative;">
                                    <div class="dropdown"> 
                                        <a data-toggle="dropdown"
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"> 
                                            <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> 
                                        </div>
                                    </div> 
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a> 
                                    <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
                                </span>
                            </td>
                        </tr>
                        <tr data-row="1" class="kt-datatable__row kt-datatable__row--even">
                            <td class="kt-datatable__cell">
                                <span>49035-111</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>Brazil BR</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>1/18/2016</span></td>
                            <td class="kt-datatable__cell">
                                <span>Zboncak-Dooley</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;
                                    <span class="kt-font-bold kt-font-success">Direct</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span style="overflow: visible; position: relative;">
                                    <div class="dropdown"> 
                                        <a data-toggle="dropdown"
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"> 
                                            <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> 
                                        </div>
                                    </div> 
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a> 
                                    <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
                                </span>
                            </td>
                        </tr>
                        <tr data-row="1" class="kt-datatable__row kt-datatable__row--even">
                            <td class="kt-datatable__cell">
                                <span>49035-111</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>Brazil BR</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>1/18/2016</span></td>
                            <td class="kt-datatable__cell">
                                <span>Zboncak-Dooley</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;
                                    <span class="kt-font-bold kt-font-success">Direct</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span style="overflow: visible; position: relative;">
                                    <div class="dropdown"> 
                                        <a data-toggle="dropdown"
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"> 
                                            <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> 
                                        </div>
                                    </div> 
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a> 
                                    <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
                                </span>
                            </td>
                        </tr>
                        <tr data-row="1" class="kt-datatable__row kt-datatable__row--even">
                            <td class="kt-datatable__cell">
                                <span>49035-111</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>Brazil BR</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>1/18/2016</span></td>
                            <td class="kt-datatable__cell">
                                <span>Zboncak-Dooley</span>
                            </td>
                            <td class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge  kt-badge--danger kt-badge--inline kt-badge--pill">Delivered</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span>
                                    <span class="kt-badge kt-badge--success kt-badge--dot"></span>&nbsp;
                                    <span class="kt-font-bold kt-font-success">Direct</span>
                                </span>
                            </td>
                            <td data-autohide-disabled="false" class="kt-datatable__cell">
                                <span style="overflow: visible; position: relative;">
                                    <div class="dropdown"> 
                                        <a data-toggle="dropdown"
                                            class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-cog"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right"> 
                                            <a href="#" class="dropdown-item"><i class="la la-edit"></i> Edit Details</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-leaf"></i> Update Status</a> 
                                            <a href="#" class="dropdown-item"><i class="la la-print"></i> Generate Report</a> 
                                        </div>
                                    </div> 
                                    <a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md"><i class="la la-edit"></i></a> 
                                    <a title="Delete" class="btn btn-sm btn-clean btn-icon btn-icon-md"> <i class="la la-trash"></i> </a>
                                </span>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
@endsection