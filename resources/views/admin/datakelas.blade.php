@extends('admin/head')

@section('row')

		<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									
								</div>
						
								<h2 class="panel-title">Kelas</h2>
							</header>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-10">
										<div class="mb-md">
											
										</div>
										</div>
									
									
								</div>
								<div class="table-responsive">
								<table class="table table-bordered table-striped mb-none" id="datatable-editable">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Kelas</th>
											
											
										</tr>
									</thead>
									<tbody>
										<?php if ($kelas->count() == 0): ?>
											<td colspan="12" align="center">Table Empty</td>
										<?php endif ?>
									 <?php 
								       $no = 1  ; 
								       foreach ($kelas as $siswa ):
								        ?> 
								       <tr>
								           <td><?php echo "$no";  ?> </td>
								           <td>{{ $siswa->nama_kelas }}</td>
										   
										  
								           
								           
								            
								       </tr>
								       <?php  $no++; ?>
								       <?php endforeach ?>
									</tbody>
			
								</table>
				
							</div>
							</div>

						</section> 

			

@endsection