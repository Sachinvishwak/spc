@extends('admin.layouts.app')
    
@section('content')

    <div id="our-page-wrapper">
        <div id="sidebar" class="assets-sidebar">
        	<div class="sidebar-menu-part">
        	    <h3 class="title">Asset</h3>
        	    <ul class="menu_part">
        	        <li>
        	            <a href="#" class="sub-link">Asset Overview</a>
        	            <ul class="sub-menu">
        	                <li>
        	                    <a href="{{ route('admin.createAsset') }}">Add New Asset </a>
        	                </li>
        	            </ul>
        	        </li>
        	    </ul>
    	    </div>
        </div>
        <div id="all-content" class="page-content-body production-content">
        	<div class="assets-overview-container">
        		<div class="title">
        			<h3>Asset Overview</h3>
        		</div>
        		<div class="about-assets-overview">
        			<div class="search-panel">
        				<div class="search-title">
        					<span>search by:</span>
        				</div>
        				<form>
	        				<div class="search-input-panel">
	        					<div class="search-fields">
	        						<div class="location-container">
	        							<div class="input-group">
        								 	<div class="input-group-append">
        								 		<input type="text" name="text_value" value="<?php if(isset($tlsearch['text_value']) && $tlsearch['text_value'] != "") echo $tlsearch['text_value']; ?>"  placeholder="Brand/ Model No. / S/N no.">
	                                        </div>
	                                        <select class="custom-select" id="inlineFormCustomSelect" name="search_location">
	                                            <option value="">Template</option>
	                                            <option <?php if(isset($tlsearch['search_location']) && $tlsearch['search_location'] == 1) echo 'selected'; ?> value="1">One</option>
	                                            <option <?php if(isset($tlsearch['search_location']) && $tlsearch['search_location'] == 2) echo 'selected'; ?> value="2">Two</option>
	                                            <option <?php if(isset($tlsearch['search_location']) && $tlsearch['search_location'] == 3) echo 'selected'; ?> value="3">Three</option>
	                                        </select>
	                                    </div>
	        						</div>
	        						<div class="filter-date-container">
                                        <input type="date" value="<?php if(isset($tlsearch['from']) && $tlsearch['from'] != "") echo $tlsearch['from']; ?>" class="form-control" name="from" value="2011-W33" placeholder="From Date">
	                                    <span>To</span>
                                        <input type="date" value="<?php if(isset($tlsearch['to']) && $tlsearch['to'] != "") echo $tlsearch['to']; ?>" class="form-control" name="to" value="2011-W33" placeholder="To Date">
	        						</div>
	        					</div>
	        					<div class="action-btns">
	        						<a href="{{ route('admin.createAsset') }}">Add new</a>
	        						<input type="submit" name="filter" value="Search">
	        					</div>
	        				</div>
        				</form>
        			</div>
        			<div class="all-assets-data our-data-table">
	    				<table class="table table-striped table-bordered productionTable" id="editable-datatable">
                            <thead>
                                <tr>
                                    <th class="sorting">Brand</th>
                                    <th class="sorting">Serial No.</th>
                                    <th class="sorting">Location</th>
                                    <th class="sorting">Compliance Status</th>
                                    <th class="sorting">Registration Status</th>
                                    <th class="sorting">Date Created</th>
                                    <th class="sorting">Date Modified</th>
                                    <th class="sorting"></th>
                                </tr>
                            </thead>
                            <tbody>
								@foreach($assets as $asset)
                            	<tr>
                            		<td>{{ $asset->brand_name }}</td>
                            		<td>{{ $asset->serial_no }}</td>
                            		<td>{{ $asset->location }}</td>
                            		<td>{{ $asset->compliance_status==0 ? 'Pending' : 'Approval'  }}</td>
                            		<td>{{ $asset->registration_status==0 ? 'Pending' : 'Approval' }}</td>
                            		<td class="about-date">{{ date('M D, Y h:i:s A',strtotime($asset->created_at))}}</td>
                            		<td class="about-date">{{ date('M D, Y h:i:s A',strtotime($asset->updated_at))}}</td>
                            		<td>
                            			<!-- <a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a> -->
										<a href="{{ route('admin.view_asset',['id'=>$asset->id]) }}"><i class="fa fa-eye"></i></a>
										<a href="{{ route('admin.edit_asset',['id'=>$asset->id]) }}"><i class="fa fa-edit"></i></a>
										<a href="{{ route('admin.delete_asset',['id'=>$asset->id]) }}"><i class="fa fa-trash text-danger"></i></a>
                            		</td>
                            	</tr>
								@endforeach
                            	<!-- <tr>
                            		<td>GEDA</td>
                            		<td>F0073</td>
                            		<td>One-North Tower</td>
                            		<td>Ready for Operation</td>
                            		<td>Pending Approval asda</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>GEDA</td>
                            		<td>F0073</td>
                            		<td>One-North Tower</td>
                            		<td>Ready for Operation</td>
                            		<td>Pending Approval asda</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>GEDA</td>
                            		<td>F0073</td>
                            		<td>One-North Tower</td>
                            		<td>Ready for Operation</td>
                            		<td>Pending Approval asda</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>GEDA</td>
                            		<td>F0073</td>
                            		<td>One-North Tower</td>
                            		<td>Ready for Operation</td>
                            		<td>Pending Approval asda</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>GEDA</td>
                            		<td>F0073</td>
                            		<td>One-North Tower</td>
                            		<td>Ready for Operation</td>
                            		<td>Pending Approval asda</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>GEDA</td>
                            		<td>F0073</td>
                            		<td>One-North Tower</td>
                            		<td>Ready for Operation</td>
                            		<td>Pending Approval asda</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>GEDA</td>
                            		<td>F0073</td>
                            		<td>One-North Tower</td>
                            		<td>Ready for Operation</td>
                            		<td>Pending Approval asda</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr>
                            	<tr>
                            		<td>GEDA</td>
                            		<td>F0073</td>
                            		<td>One-North Tower</td>
                            		<td>Ready for Operation</td>
                            		<td>Pending Approval asda</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td class="about-date">Jul 12, 2019 10:01:08 AM</td>
                            		<td>
                            			<a href="#" class="view-more-data">
                            				<span>View more</span>
                            				<i class="fa fa-chevron-right" aria-hidden="true"></i>
                            			</a>
                            		</td>
                            	</tr> -->
                            </tbody>
                        </table>
        		  </div>
        	</div>
        </div>
    </div>
@endsection
